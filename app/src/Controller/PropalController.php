<?php

namespace App\Controller;

use App\Constants\Date;
use App\Constants\Menu;
use App\Entity\Adresse;
use App\Entity\Contact;
use App\Entity\ContactType;
use App\Entity\Filter\PropalFilter;
use App\Entity\FormationDossier;
use App\Entity\Mail;
use App\Entity\Propal;
use App\Entity\Telephone;
use App\Form\Filter\PropalFilterType;
use App\Form\PropalType;
use App\Manager\PropalManager;
use App\Repository\AdresseRepository;
use App\Repository\ContactRepository;
use App\Repository\MailRepository;
use App\Repository\PropalRepository;
use App\Repository\TelephoneRepository;
use App\Repository\VilleRepository;
use App\Service\WordService;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Style\Image;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class PropalController extends BaseController
{

    /**
     * @var PhpWord
     */
    private $docword;

    /**
     * @Route("/propal", name="Liste_propositions_commerciales_Controller")
     */
    public function index(Request $request, PaginatorInterface $paginator, PropalRepository $propalRepository)
    {
        $props = $propalRepository->findAll();

        foreach ($props as $propal) {
            $date = new \DateTime();
            $datecomparer = $date->getTimestamp() - (180 * 24 * 60 * 60);
            $dateToCompare = $propal->getDateedition();
            if ($dateToCompare) {
                if ($dateToCompare->getTimestamp() <= $datecomparer) {
                    $propal->setFiabilite('Froid');
                    $this->em->persist($propal);
                    $this->em->flush();
                }
            } else {
                $propal->setDateedition($date);
                $this->em->persist($propal);
                $this->em->flush();
            }
        }
        $propalfilter = new PropalFilter();
        $propalfilterform = $this->createForm(PropalFilterType::class, $propalfilter, [
            'method' => 'GET'
        ]);
        $propalfilterform->handleRequest($request);
        $this->viewParams["propal_filter_form"] = $propalfilterform->createView();

        $propalquery = $this->em->getRepository(Propal::class)->findallpropal($propalfilter);

        $pagination = $paginator->paginate($propalquery, $request->query->get('page', 1), 10);
        $this->viewParams['pagination'] = $pagination;

        $this->viewParams['can_edit'] = $this->isGranted('edit', Menu::MENU_PROPOSITION_COMMERCIAL);
        $this->viewParams['can_view'] = $this->isGranted('view', Menu::MENU_PROPOSITION_COMMERCIAL);

        return $this->render('propal/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/propal/creation", name="Liste_propositions_commerciales_Controller/ajoutpropal")
     */
    public function create(
        Request $request,
        ContactRepository $contactRepository,
        AdresseRepository $adresseRepository,
        VilleRepository $villeRepository,
        TelephoneRepository $telephoneRepository,
        MailRepository $mailRepository
    ) {
        $this->denyAccessUnlessGranted('edit', Menu::MENU_PROPOSITION_COMMERCIAL);
        $propal = new Propal();

        // APR-105 :  client/prospect > Bouton Créer un propal > Reprendre les informations du client
        $iClientId = $request->query->get('id', 0);
        $oClient = $contactRepository->find($iClientId);
        $this->viewParams['client'] = $oClient;
        // APR-105 : Récupération localisation : adresse, ville, CP
        $aAdresses = $adresseRepository->findBy(["idContact" => $iClientId]);
        $this->viewParams['adresse'] = null;
        $this->viewParams['clientVille'] = null;
        // APR-105 : Récupération information interlocuteur/1er contact
        $tel = null;
        $mail = null;
        if ($oClient) {
            $tel = $this->em->getRepository(Telephone::class)->findOneBy(["idContact" => $oClient->getId(), "idTypeTel" => 1]);
            $mail = $this->em->getRepository(Mail::class)->findOneBy(["idContact" => $oClient->getId()]);
        }
        if ($tel instanceof Telephone) {
            $propal->setTelephone($tel->getTel());
        }

        if ($oClient) {
            $propal->setNom($oClient->getNom());
            $propal->setPrenom($oClient->getPrenom());
            $propal->setCommercialpropal($oClient->getCommercial());
        }
        if ($mail instanceof Mail) {
            $propal->setEmail($mail->getMail());
        }

        if (count($aAdresses) > 0) {
            $oAdresse = $aAdresses[0];
            $propal->setAdresse($oAdresse->getAdresse());
            $propal->setCodepostal($oAdresse->getCodePostal());
            $propal->setVille($oAdresse->getIdVille());

            if ($oAdresse->getIdVille()) {
                $oClientVille = $villeRepository->find($oAdresse->getIdVille());
                $this->viewParams['clientVille'] = $oClientVille;
            }
        }

        if ($oClient instanceof Contact) {
            $propal->setClientpropal($oClient);
            $propal->setEntitypropal($oClient->getStructure());
        }
        
        if($oClient){
            $currentType = $this->em->getRepository(ContactType::class)->find($oClient->getIdType())->getTypeContact() === "CLIENT" ? "Client" : "Prospect";
            $propal->setTypepropal($currentType);
        }
        
        $propalform = $this->createForm(PropalType::class, $propal);
        $propalform->handleRequest($request);

        if ($propalform->isSubmitted()) {
            $this->em->persist($propal);
            $this->em->flush();
            $this->addFlash('success', 'Propal ajouté aves succés');

            return $this->redirectToRoute("Liste_propositions_commerciales_Controller");
        }
        $this->viewParams["propal_form"] = $propalform->createView();
        $this->viewParams["isCreatePropal"] = true;
        $this->viewParams["propal"] = $propal;

        return $this->render('propal/create.html.twig', $this->viewParams);
    }

    /**
     * @Route("/propal/{id}/edit",
     *     name="propal_show",
     *     requirements={"page"="\d+"},
     *     methods={"GET","POST"}
     *     )
     * @param Propal $propal
     * @param Request $request
     *
     * @return Response
     */
    public function show(Propal $propal, Request $request)
    {
        $this->denyAccessUnlessGranted('view', Menu::MENU_PROPOSITION_COMMERCIAL);
        $client = $propal->getClientpropal();
        $ville = $propal->getVille();
        $this->viewParams["client"] = [
            !is_null($client) ? $client->getId() : 0 => !is_null($client) ? $client->getNomStr() : null,
        ];
        $this->viewParams["ville"] = [
            !is_null($ville) ? $ville : 0 => !is_null($ville) ? $ville : null,
        ];
        $this->viewParams["idpropal"] = $propal->getId();
        $propalform = $this->createForm(PropalType::class, $propal, ["attr" => ["editform" => $propal->getCommercialpropal()]]);
        $propalform->handleRequest($request);

        if ($propalform->isSubmitted()) {
            $this->denyAccessUnlessGranted('edit', Menu::MENU_PROPOSITION_COMMERCIAL);
            $this->em->persist($propal);
            $this->em->flush();
            $this->addFlash('success', 'Modification du Propal enregistrée');

            return $this->redirectToRoute("propal_show", ['id' => $propal->getId()]);
        }
        $this->viewParams["propal_form"] = $propalform->createView();
        $this->viewParams["propal"] = $propal;
        $this->viewParams["isCreatePropal"] = false;

        return $this->render('propal/show.html.twig', $this->viewParams);
    }

    /**
     * @Route("/propal/{id}/delete",
     *     name="Propal_Delete",
     *     requirements={"page"="\d+"})
     *
     * @param Propal $propal
     * @return JsonResponse
     */
    public function deletepropal(Propal $propal)
    {
        $this->denyAccessUnlessGranted('edit', Menu::MENU_PROPOSITION_COMMERCIAL);
        try {
            $this->em->remove($propal);
            $this->em->flush();
        } catch (DBALException $e) {

            return new JsonResponse(
                array(
                    'status' => 'Error',
                    'message' => "Erreur inatendue lors de la suppression de la proposition commercial"
                ),
                200
            );
        } catch (Exception $e) {

            return new JsonResponse(
                array(
                    'status' => 'Error',
                    'message' => 'Erreur lors de la suppression de la proposition commercial'
                ),
                200
            );
        }

        return new JsonResponse(
            array(
                'status' => 'Success',
                'message' => 'La proposition commercial a bien été supprimé'
            ),
            200
        );
    }

    /**
     * @Route("/propal/{id}/generatedoc",
     *     name="propal_generate_doc",
     *     requirements={"page"="\d+"})
     * @param Propal $propal
     */
    public function generatedocpropal(Propal $propal, PropalManager $propalmanager)
    {
        $fichier = $propalmanager->generatedoc($propal, $this->em);

        return $this->returnFile($fichier);
    }

    /**
     * @Route("/propal/{id}/generatedocproform",
     *     name="propal_generate_docproform",
     *     requirements={"page"="\d+"})
     * @param Propal $propal
     */
    public function generatedocpropalproform(Propal $propal, PropalManager $propalmanager)
    {
        $fichier = $propalmanager->generatedocproform($propal, $this->em);

        return $this->returnFile($fichier);
    }
    /**
     * @Route("/propal/{id}/generateconv",
     *     name="propal_generate_conv",
     *     requirements={"page"="\d+"})
     * @param Propal $propal
     */
    public function generatedocconv(Propal $propal, PropalManager $propalmanager, Request $request, $id)
    {
        $fichier = null;
        $checkeds = json_decode($request->query->get('checkeds','[false,false,false,false]'));
        $template = $this->renderView("Common\DocPrint\Propal\ConventionContent.html.twig", [
            'propal' => $propal,
            'checked' => $checkeds,
        ]);
        $fichier = $propalmanager->createDocConv($template, $propal, $this->em, $id);
        $sFileName = basename($fichier);
        $template = $this->renderView("Common\DocPrint\Propal\ConventionContent.html.twig", [
            'propal' => $propal,
            'checked' => $checkeds,
        ]);

        //dd($propal);
        return $this->file($fichier, $sFileName, ResponseHeaderBag::DISPOSITION_INLINE);

        return $this->returnFile($fichier);
    }

    private function getData(): array
    {
        /**
         * @var $user User[]
         */
        $list = [];
        $propals = $this->em->getRepository(Propal::class)->findAll();

        foreach ($propals as $propal) {
            $list[] = [
                $propal->getEntitypropal(),
                $propal->getStatutpropal(),
                $propal->getNom(),
                $propal->getPrenom(),
                $propal->getCommercialpropal(),
                $propal->getFormation(),
                $propal->getEmail(),
                $propal->getTelephone(),
                $propal->getDaterelance()->format('d/m/Y'),
                $propal->getCoutht(),
                $propal->getDateedition()->format('d/m/Y'),
                $propal->getTypepropal(),
            ];
        }
        return $list;
    }

    /**
     * @Route("/export",  name="export")
     */
    public function export()
    {

        ////$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        //$writer->save("propal.xlsx");

        $streamedResponse = new StreamedResponse();
        $streamedResponse->setCallback(function () {
            $spreadsheet = $spreadsheet = new Spreadsheet();

            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setTitle('Propal');

            $sheet->getCell('A1')->setValue('Structure')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('B1')->setValue('Statut')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('C1')->setValue('Nom')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('D1')->setValue('Prenom')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('E1')->setValue('Commercial')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('F1')->setValue('Formation')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('G1')->setValue('Email')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('H1')->setValue('Telephone')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('I1')->setValue('Date de relance')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('J1')->setValue('Cout HT')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('K1')->setValue('Date de création')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('L1')->setValue('Type')->getStyle()->getFont()->setBold(true);

            $sheet->getColumnDimension('A')->setWidth(15);
            $sheet->getColumnDimension('B')->setWidth(15);
            $sheet->getColumnDimension('C')->setWidth(15);
            $sheet->getColumnDimension('D')->setWidth(15);
            $sheet->getColumnDimension('E')->setWidth(15);
            $sheet->getColumnDimension('F')->setWidth(15);
            $sheet->getColumnDimension('G')->setWidth(15);
            $sheet->getColumnDimension('H')->setWidth(15);
            $sheet->getColumnDimension('I')->setWidth(15);
            $sheet->getColumnDimension('K')->setWidth(15);
            $sheet->getColumnDimension('L')->setWidth(15);

            // Increase row cursor after header write
            $sheet->fromArray($this->getData(), null, 'A2', true);

            $writer =  new Xlsx($spreadsheet);
            $writer->save('php://output');
        });

        $streamedResponse->setStatusCode(HttpFoundationResponse::HTTP_OK);
        $streamedResponse->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $streamedResponse->headers->set('Content-Disposition', 'attachment; filename="propal_excract_' . date("d/m/Y") . '.xlsx"');

        return $streamedResponse->send();

        return $this->redirectToRoute('Liste_propositions_commerciales_Controller');
    }

    /**
     *
     * @param $section
     */
    public function setsectiondoc($section)
    {
        $this->section = $section;
    }
}
