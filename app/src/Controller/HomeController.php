<?php

namespace App\Controller;

use App\Entity\Filter\NoteFilter;
use App\Repository\NoteRepository;
use App\Constants\Note as NoteConstant;
use App\Entity\Filter\ContactFilter;
use App\Entity\Filter\LeadFilter;
use App\Entity\Filter\PropalFilter;
use App\Entity\Lead;
use App\Entity\Propal;
use App\Repository\ContactRepository;
use App\Repository\FormationDossierRepository;
use App\Repository\LeadRepository;
use App\Repository\PropalRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Collaborateur;
use App\Form\CommercialType;
use App\Form\FormationDossierFilterType;
use App\Entity\Filter\FormationDossierFilter;




class HomeController extends BaseController
{
    /**
     * @Route("/", name="home.index")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', $this->viewParams);
    }

       /**
     * @Route("/stats", name="home.stats")
     */
    public function homestats(FormationDossierRepository $formationDossierRepository, 
    EntityManagerInterface $em, ContactRepository $contactRepository,
     NoteRepository $noteRepository, Request $request, PaginatorInterface $paginator, PropalRepository $propalRepository, LeadRepository $leadRepository)
    {
        $commercial = new Collaborateur();
        $form = $this->createForm(CommercialType::class, $commercial);
        $form->handleRequest($request);
        $data = $form->getData()->getnomPrenom();
        $dossiersMonth = [];
        $dossierYears = [];
        if ($form->isSubmitted() && $form->isValid()) {
            if($data == null){
                $dossiersMonth = $formationDossierRepository->getStatsMonthFormation();
                $dossierYears = $formationDossierRepository->getStatsYearFormation();
            }else{
                $dossiersMonth = $formationDossierRepository->getStatsMonthFormation($data);
                $dossierYears = $formationDossierRepository->getStatsYearFormation($data);
            }
        }else{

            $dossiersMonth = $formationDossierRepository->getStatsMonthFormation();
            $dossierYears = $formationDossierRepository->getStatsYearFormation();
        }
        
        $propalsYears = $propalRepository->getStatsYearsPropals();
        $this->viewParams["statsDossiersMonth"] = $dossiersMonth;
        $this->viewParams["statsDossiersYear"] = $dossierYears;
        $this->viewParams["statspropalsYears"] = $propalsYears;
        $this->viewParams["form"] = $form->createView();
        return $this->render('home/stats.html.twig', $this->viewParams);
    }

    /**
     * @Route("/portail", name="home.portail")
     */
    public function portail(FormationDossierRepository $formationDossierRepository, 
    EntityManagerInterface $em, ContactRepository $contactRepository,
     NoteRepository $noteRepository, Request $request, PaginatorInterface $paginator, PropalRepository $propalRepository, LeadRepository $leadRepository)
    {
            
        $currentUser = $this->getUser()->getIdutilisateur();
        $this->viewParams['currentUser'] = $currentUser;
        $commercial = $em->getRepository(\App\Entity\Collaborateur::class)->findOneBy(['idUser' => $currentUser]);
        $this->viewParams['idCommercial'] = $commercial;
        $nomCommercial = $em->getRepository(\App\Entity\Collaborateur::class)->findOneBy(['idUser' => $currentUser])->getNomPrenom();
        $this->viewParams['nomCommercial'] = $nomCommercial;


///////////////////////////////////////////////////////////////////DOSSIER////////////////////////////////////////////////////////////////////////////
       
        $date = new DateTime(date('Y-m-d'));
        $date->modify('+15 day');
        $currentDate = new DateTime(date('Y-m-d'));
        $this->viewParams['date'] = $date;
        $this->viewParams['currentDate'] = $currentDate;

       $oFormationDossierFilter = new FormationDossierFilter();
       $oFormationDossierFilter->setCommercial($nomCommercial);

        $formationDossierQuery = $formationDossierRepository->findAllFormationDossierPortail($oFormationDossierFilter);
        $paginationDossier = $paginator->paginate($formationDossierQuery, $request->query->get('page', 1), 10);
        $this->viewParams['paginationDossier'] = $paginationDossier;


//////////////////////////:///////////////////////////////////////////PROPAL////////////////////////////////////////////////////////////////////////////

        $propalfilter = new PropalFilter();
        $propalfilter->setCommercial($commercial);
      
        $propalquery = $propalRepository->findallpropalportail($propalfilter);
        $paginationPropal = $paginator->paginate($propalquery, $request->query->get('page', 1), 10);
        $this->viewParams['paginationPropal'] = $paginationPropal;
        if ($currentUser != 29) {;
            $propalStats = [
                count($propalRepository->findBy(["fiabilite" => "Froid","commercialpropal" => $commercial])),
                count($propalRepository->findBy(["fiabilite" => "Tiede","commercialpropal" => $commercial])),
                count($propalRepository->findBy(["fiabilite" => "Chaud","commercialpropal" => $commercial]))
            ];
        }else{
            $propalStats = [
                count($propalRepository->findBy(["fiabilite" => "Froid"])),
                count($propalRepository->findBy(["fiabilite" => "Tiede"])),
                count($propalRepository->findBy(["fiabilite" => "Chaud"]))
            ];
        }
            $this->viewParams['propalStats'] = $propalStats;

///////////////////////////////////////////////////////////////////////CLIENT////////////////////////////////////////////////////////////////////////////

        $contactFilter = new ContactFilter();
        $contactFilter->setCommercial($commercial);

        if (!$contactFilter->getIdType()) {
            $contactFilter->setIdType([1, 2]);
        }
        
        $contactsQuery = $contactRepository->findContactsQueryClient($contactFilter);
        $paginationClient = $paginator->paginate($contactsQuery, $request->query->get('page', 1), 10);
        $this->viewParams['paginationClient'] = $paginationClient;

        $contactsQuery = $contactRepository->findContactsQueryProspect($contactFilter);
        $paginationProspect = $paginator->paginate($contactsQuery, $request->query->get('page', 1), 10);
        $this->viewParams['paginationProspect'] = $paginationProspect;

///////////////////////////////////////////////////////////////////////LEAD////////////////////////////////////////////////////////////////////////////

        
        if ($currentUser != 29) {
            $leadFilter = new LeadFilter();
            $leadFilter->setCommercial($commercial);
        } else {
            $leadFilter = new LeadFilter();
        }
        
        $leadQuery = $leadRepository->findLeadQuery($leadFilter);
        $paginationLead = $paginator->paginate($leadQuery, $request->query->get('page', 1), 500);
        $this->viewParams['paginationLead'] = $paginationLead;

        $leadStats =
            [
                'enCours' => count($leadRepository->findBy(["statut" => "En cours", "commercial"=> $commercial])),
                'dClient' => count($leadRepository->findBy(["statut" => "Devenu client", "commercial"=> $commercial])),
                'dProspect' => count($leadRepository->findBy(["statut" => "Devenu prospect", "commercial"=> $commercial])),
                'sSuite' => count($leadRepository->findBy(["statut" => "Sans suite", "commercial"=> $commercial]))
            ];   
        if($currentUser == 29){
            $leadStats =
            [
                'enCours' => count($leadRepository->findBy(["statut" => "En cours"])),
                'dClient' => count($leadRepository->findBy(["statut" => "Devenu client"])),
                'dProspect' => count($leadRepository->findBy(["statut" => "Devenu prospect"])),
                'sSuite' => count($leadRepository->findBy(["statut" => "Sans suite"]))
            ];        
        }

        
        $this->viewParams['leadStats'] = $leadStats;



///////////////////////////////////////////////////////////////////NOTE RESPONSABLE////////////////////////////////////////////////////////////////////////////

        $noteFilter = new NoteFilter();
        //$noteFilter->setAuthor($this->getUser());
        $noteFilter->setRappelleur($this->getUser());
        
        $noteQuery = $noteRepository->findAllNotePortail($noteFilter);
        $paginationNoteResponsable = $paginator->paginate($noteQuery, $request->query->get('page', 1), 500);
        //dd($paginationNoteResponsable);
   
        $this->viewParams['paginationNoteResponsable'] = $paginationNoteResponsable;
        $this->viewParams['noteConstant'] = new NoteConstant();
        
        $noteStats =
        [
            'fait' => count($noteRepository->findBy(["idActionStatut" => 3, "rappelleur"=> $noteFilter->getRappelleur($this->getUser())])),
            'aFaire' => count($noteRepository->findBy(["idActionStatut" => 1, "rappelleur"=> $noteFilter->getRappelleur($this->getUser())])),
        ];   
        if($currentUser == 29){
            $noteStats =
            [
                'fait' => count($noteRepository->findBy(["idActionStatut" => 3])),
                'aFaire' => count($noteRepository->findBy(["idActionStatut" => 1])),
            ];        
        }    
    
        $this->viewParams['noteStats'] = $noteStats;

        return $this->render('home/portail.html.twig', $this->viewParams);
    }
}
