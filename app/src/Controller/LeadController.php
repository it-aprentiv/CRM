<?php

namespace App\Controller;

use App\Constants\Menu;
use App\Entity\Filter\LeadFilter;
use App\Entity\Lead;
use App\Form\Filter\LeadFilterType;
use App\Form\LeadType;
use App\Repository\LeadRepository;
use Doctrine\DBAL\DBALException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class LeadController extends BaseController
{
    /**
     * @Route("/lead", name="Liste_Lead_Controller")
     */
    public function index(LeadRepository $repository, PaginatorInterface $paginator, Request $request) 
    {
        $leadFilter = new LeadFilter();
        
        $leadFilterForm = $this->createForm(LeadFilterType::class, $leadFilter, [
            'method' => 'GET'
        ]);
        
        $leadFilterForm->handleRequest($request);
        
        $this->viewParams['form'] = $leadFilterForm->createView();
        
        $leadQuery = $repository->findLeadQuery($leadFilter);
        //$leads = $repository->findAll();
        $leadPage = $paginator->paginate($leadQuery, $request->query->get('page', 1), 10);
        $leads_arrays = [];
        foreach($leadPage->getItems() as $lead){
            $leads_arrays[$lead->getId()] = $this->createForm(LeadType::class, $lead,['attr' => 
            [
            'disabled' => true,
            ],
        ])->createView();
        }

        $this->viewParams["doc_form"] = $leads_arrays;

        //$this->viewParams['leads'] = $leads;
        $this->viewParams['leadPage'] = $leadPage;
        $this->viewParams['can_edit'] = $this->isGranted('edit', Menu::MENU_CLIENT_PROSPECT);
        $this->viewParams['can_view'] = $this->isGranted('view', Menu::MENU_CLIENT_PROSPECT);
            
        return $this->render('lead/index.html.twig', $this->viewParams);
    }

    /**
     * Création de lead
     *
     * @Route("/lead/creation", name="Fiche_lead_Controller/ajoutLead")
     */
    public function createLead(Request $request) 
    {
        $lead = new Lead;
        $form = $this->createForm(LeadType::class, $lead, ['method' => 'POST']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            if ($lead->getSociete()==null){
                $lead->setSociete($lead->getNom()." ".$lead->getPrenom()) ;
            }
            $this->em->persist($lead);
            $this->em->flush();

            $this->addFlash('success', 'Lead créé avec succés!');
            return $this->redirectToRoute('Fiche_lead_Controller/editLead', array('id' => $lead->getId()));
        }
        $this->viewParams['lead'] = $lead;
        $this->viewParams['form'] = $form->createView();
        return $this->render('lead/lead.html.twig', $this->viewParams);
    }

    /**
     * @Route("/lead/{id}/editionLead", name="Fiche_lead_Controller/editLead", requirements={"page"="\d+"})
     */
    public function editLead(Lead $lead, Request $request) 
    {
        $form = $this->createForm(LeadType::class, $lead, ["method" => "POST", "attr" => ["id" => "contactgenerale", "editform" => $lead->getCommercial()]]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $this->em->persist($lead);
            $this->em->flush();

            $this->addFlash('success', 'Lead modifié avec succés!');
            return $this->redirectToRoute('Fiche_lead_Controller/editLead', array('id' => $lead->getId()));
        }

        $this->viewParams['lead'] = $lead;
        $this->viewParams['form'] = $form->createView();
        return $this->render('lead/editLead.html.twig', $this->viewParams);
    }

    /**
     * Retourne une liste de société utilisé pour gerer l'autocompletion des select liste des societes
     *
     * @Route("/lead/societe/list", name="crm.lead.societe.asynch-search", methods={"GET","POST"})
     */
    public function asynchFindSocietes(Request $request, LeadRepository $leadRepository) {
        $response = array();
        $searchTerm = $request->query->get('search', '');

        if (trim(strlen($searchTerm)) >= 3) {
            $societes = $leadRepository->getSocietes($searchTerm);

            foreach ($societes as $societe) {
                $response['results'][] = [
                    'id' => $societe['societe'],
                    'text' => $societe['societe']
                ];
            }
        }

        return new JsonResponse($response);
    }

     /**
     * @Route("/lead/{id}/delete",
     *     name="Lead_Delete",
     *     requirements={"page"="\d+"})
     *
     * @param Lead $lead
     * @return JsonResponse
     */
    public function deleteLead(Lead $lead)
    {
        $this->viewParams['can_edit'] = $this->isGranted('edit', Menu::MENU_CLIENT_PROSPECT);
        try{
            $this->em->remove($lead);
            $this->em->flush();
        }
        catch(DBALException $e){

            return new JsonResponse(array(
                'status' => 'Error',
                'message' => "Erreur inatendue lors de la suppression de la proposition commercial"),
                200);
        }
        catch(Exception $e){

            return new JsonResponse(array(
                'status' => 'Error',
                'message' => 'Erreur lors de la suppression de la proposition commercial'),
                200);
        }

        return new JsonResponse(array(
            'status' => 'Success',
            'message' => 'La proposition commercial a bien été supprimé'),
            200);
    }

    private function getData(): array
    {

        $list = [];
        $leads = $this->em->getRepository(Lead::class)->findAll();
    
        foreach ($leads as $lead) {
            $list[] = [
                $lead->getSociete(),
                $lead->getNom(),
                $lead->getPrenom(),
                $lead->getTelephone(),
                $lead->getEmail(),
                $lead->getVille(),                
                $lead->getCommercial(),
                $lead->getOrigine(),
                $lead->getStatut(),
                $lead->getCreatedAt()->format('d/m/Y'),
            ];
        } 

        return $list;
    }

    /**
     * @Route("/export/lead",  name="export_lead")
     */
    public function export()
    {
      
        $streamedResponse = new StreamedResponse();
        $streamedResponse->setCallback(function () {
      $spreadsheet = $spreadsheet = new Spreadsheet();

      $sheet = $spreadsheet->getActiveSheet();

      $sheet->setTitle('Lead');

      $sheet->getCell('A1')->setValue('Société')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('B1')->setValue('Nom')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('C1')->setValue('Prenom')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('D1')->setValue('Telephone')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('E1')->setValue('Email')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('F1')->setValue('Ville')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('G1')->setValue('Commercial')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('H1')->setValue('Origine')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('I1')->setValue('Statut')->getStyle()->getFont()->setBold(true);
      $sheet->getCell('J1')->setValue('Date de création')->getStyle()->getFont()->setBold(true);


      
      $sheet->getColumnDimension('A')->setWidth(15);
      $sheet->getColumnDimension('B')->setWidth(15);
      $sheet->getColumnDimension('C')->setWidth(15);
      $sheet->getColumnDimension('D')->setWidth(20);
      $sheet->getColumnDimension('E')->setWidth(15);
      $sheet->getColumnDimension('F')->setWidth(15);
      $sheet->getColumnDimension('G')->setWidth(15);
      $sheet->getColumnDimension('H')->setWidth(20);
      $sheet->getColumnDimension('I')->setWidth(15);
      $sheet->getColumnDimension('I')->setWidth(15);



      // Increase row cursor after header write
         $sheet->fromArray($this->getData(),null, 'A2', true);




      $writer =  new Xlsx($spreadsheet);
      $writer->save('php://output');
});

$streamedResponse->setStatusCode(HttpFoundationResponse::HTTP_OK);
$streamedResponse->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
$streamedResponse->headers->set('Content-Disposition', 'attachment; filename="lead_excract_'.date("d/m/Y").'.xlsx"');

return $streamedResponse->send();

        return $this->redirectToRoute('Liste_Lead_Controller');

    }
}