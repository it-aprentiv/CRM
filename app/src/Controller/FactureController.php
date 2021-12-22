<?php

namespace App\Controller;

use App\Constants\Facture as FactureConstant;
use App\Constants\FormationType;
use App\Entity\Avoir;
use App\Entity\Contact;
use App\Entity\Dossier;
use App\Entity\Facture;
use App\Entity\FactureDomiciliation;
use App\Entity\Filter\FactureDomiciliationFilter;
use App\Entity\Filter\FactureFilter;
use App\Entity\Filter\FactureFormationFilter;
use App\Entity\Typedom;
use App\Form\EditFactureDomType;
use App\Form\FactureAvoirType;
use App\Form\FactureFilterType;
use App\Form\Filter\FactureDomiciliationFilterType;
use App\Form\Filter\FactureFormationFilterType;
use App\Manager\FactureManager;
use App\Repository\ContactRepository;
use App\Repository\DossierRepository;
use App\Repository\FactureDomiciliationRepository;
use App\Repository\FactureRepository;
use App\Repository\FormationDossierDateRepository;
use App\Repository\FormationDossierRepository;
use App\Repository\StructureRepository;
use App\Repository\SuiviOMRepository;
use App\Utils\DateUtils;
use App\Utils\MoneyUtils;
use DateTime;
use Doctrine\DBAL\DBALException;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class FactureController extends BaseController
{
    /**
     * @Route("/facture", name="Liste_Factures_Avoirs_Controller")
     */
    public function index(Request $request,
                          FactureRepository $factureRepository,
                          PaginatorInterface $paginator)
    {
        $oFactureFilter = new FactureFilter();
        $oFactureFilterForm = $this->createForm(FactureFilterType::class, $oFactureFilter, [
            'method' => 'GET'
        ]);
        $oFactureFilterForm->handleRequest($request);
        $factureQuery = $factureRepository->findAllFacture($oFactureFilter);
        $this->viewParams['facture_filter_form'] = $oFactureFilterForm->createView();
        $pagination = $paginator->paginate($factureQuery, $request->query->get('page', 1), 10);
        $this->viewParams['pagination'] = $pagination;
        $this->viewParams['factureConst'] = new FactureConstant();

        return $this->render('facture/index.html.twig', $this->viewParams);
    }
    
    /**
     * APR-108 : La liste des factures formation provient des ordre de mission
     * @Route("/facture/formation", name="Facture_formation_Controller")
     */
    public function formation(Request $request, 
        SuiviOMRepository $suiviOMRepository,
        PaginatorInterface $paginator
    )  
    {
        // Formulaire pour filtrer la liste
        $oFilter = new FactureFormationFilter();
        $oFilterForm = $this->createForm(FactureFormationFilterType::class, $oFilter, [
            'method' => 'GET'
        ]);
        
        $oFilterForm->handleRequest($request);
        $this->viewParams['form_filter'] = $oFilterForm->createView();
        
        // Récupération de la liste des facture + pagination du résultat
        $oFactuesQuery = $suiviOMRepository->getFactureFormationQuery($oFilter);

        $oPagination = $paginator->paginate($oFactuesQuery, $request->query->get('page', 1), 10);
        
        $this->viewParams['pagination'] = $oPagination ;
        
        return $this->render('facture/formation.html.twig', $this->viewParams);
    }
    
    
    /**
     * @Route("/facture/formation", name="Facture_formation_Controller_old")
     */
    public function factureFormation(DossierRepository $dossierRepository,
                                     PaginatorInterface $paginator,
                                     Request $request) {

        $oFilter = new FactureFormationFilter();
        $oFilterForm = $this->createForm(FactureFormationFilterType::class, $oFilter, [
            'method' => 'GET'
        ]);
        $oFilterForm->handleRequest($request);

        $this->viewParams['form_filter'] = $oFilterForm->createView();

        $oDataQuery = $dossierRepository->getFactureFormationQuery($oFilter);

        $pagination = $paginator->paginate($oDataQuery, $request->query->get('page', 1), 10);
        $this->viewParams['pagination'] = $pagination;

        $aFactures = $pagination->getItems();
        $aData = [];
        foreach ($aFactures as $data) {
            $aRow = [];
            $aRow['entite'] = $data['entite'];
            $oDate = $data['dateOrdMission'];
            if ($oDate instanceof DateTime) {
                $aRow['mois'] = DateUtils::getFrenchMonth($oDate->format('n'));
                $aRow['dateom'] = $oDate->format('d/m/Y');
            } else {
                $aRow['mois'] = $aRow['dateom'] = null;
            }
            $aRow['formateur'] = $data['formateur'];
            $aRow['nbH'] = $aRow['nbJ'] = $aRow['nbStagiaires'] = 0;
            $aRow['commercial'] = "";
            switch ($data['typestage']){
                case Dossier::TYPE_SOUS_TRAITANCE :
                    $aRow['statutFormateur'] = $aRow['typeformation'] = FormationType::FORMATION_SOUS_TRAITANCE;
                    $aRow['commercial'] = $data['com'];
                    break;
                case Dossier::TYPE_INTER :
                    // valeur pour R
                    $aRow['typeformation'] = FormationType::FORMATION_INTER;
                case Dossier::TYPE_INTRA :
                    if ($data['typestage'] === Dossier::TYPE_INTRA) {
                        // valeur pour A
                        $aRow['typeformation'] = FormationType::FORMATION_INTRA;
                        $aRow['commercial'] = $data['com'];
                    }

                    // valeur commun pour R et A
                    $aRow['statutFormateur'] = "Indépendant";
                    $aRow['nbH'] = $data['dureeHeures'];
                    $aRow['nbJ'] = $data['dureeJours'];
                    $aRow['nbStagiaires'] = $data['nbStagiaires'];
                    break;
                default:
                    $aRow['typeformation'] = "";
                    $aRow['statutFormateur'] = "";
            }

            // demandeur
            $aRow["demandeur"] = "";
            $aRow["societe"] = $data['societe'];
            $aRow["intitstage"] = $data['intitstage'];
            $aRow["competence"] = $data['competence'];
            $fTotalHt = (float) $data['pvTotalHt'];
            $fFmtTotalHt = (float) $data['pfmteurTotalHt'];
            $aRow["mntAchat"] = MoneyUtils::format($fTotalHt);
            $aRow["mntVente"] = MoneyUtils::format($fFmtTotalHt);
            $fDiff = $fTotalHt - $fFmtTotalHt;
            $aRow["diffMnt"] = MoneyUtils::format($fDiff);
            $fPercentage = 0;
            if ($fTotalHt > 0) {
                $fPercentage = ($fDiff / $fTotalHt) * 100;
                $fPercentage = round($fPercentage, 3);
            }
            $aRow['percentage'] = $fPercentage;
            $aRow['achatPercentage'] = 100 - $fPercentage;
            $aData[] = $aRow;
        }

        $this->viewParams['datas'] = $aData;
        return $this->render('facture/formation.html.twig', $this->viewParams);
    }

    /**
     * @Route("/facture/domiciliation", name="Domiciliation_Location_Controller/factures")
     * @param Request $request
     *
     * @param FactureDomiciliationRepository $repository
     *
     * @param PaginatorInterface $paginator
     *
     * @return Response
     */
    public function factureDomiciliation(
        Request $request,
        FactureDomiciliationRepository $repository,
        PaginatorInterface $paginator
    )
    {
        ini_set('max_memory_limit', '512M');
        $filter = new FactureDomiciliationFilter();
        $form = $this->createForm(FactureDomiciliationFilterType::class, $filter, [
            'method' => 'GET'
        ]);

        $form->handleRequest($request);
        $this->viewParams['form_filter'] = $form->createView();
        $querySearch = $repository->getAllQuery($filter);

        $pagination = $paginator->paginate($querySearch, $request->query->get('page', 1), 10);

        $this->viewParams['pagination'] = $pagination;

        return $this->render('facture/domiciliation-location.html.twig', $this->viewParams);
    }

    /**
     * @Route("/facture/{idFacture}/{idAvoir}/delete",
     *      name="Facture_Controller/deleteFacture",
     *      requirements={"page"="\d+"}
     * )
     */
    public function delete(Request $request, $idFacture, $idAvoir){
        try {
            $oEntityManager = $this->getDoctrine()->getManager();
            $oFacture = $oEntityManager->getRepository(Facture::class)->find($idFacture);
            $oEntityManager->remove($oFacture);
            $oEntityManager->flush();

            if($idAvoir != 0) {
                $oAvoir = $oEntityManager->getRepository(Avoir::class)->find($idAvoir);
                if(!is_null($idAvoir)){
                    $oEntityManager->remove($oAvoir);
                    $oEntityManager->flush();
                }
            }
        }
        catch(DBALException $e){
            return new JsonResponse(array(
                'status' => 'Error',
                'message' => "Cette facture n'a pas pu être supprimer car elle est liée à d'autre element (dossier,formation,..."),
                200);
        }
        catch(Exception $e){
            return new JsonResponse(array(
                'status' => 'Error',
                'message' => "Cette facture n'a pas pu être supprimer car elle est liée à d'autre element (dossier,formation,...\""),
                200);
        }

        return new JsonResponse(array(
            'status' => 'Success',
            'message' => 'Line successfully Deleted'),
            200);
    }

    /**
     * @Route("/facture/ajout-facture-avoir", name="Facture_Avoir_Ajout", methods={"GET", "POST"})
     *
     * @param Request $request
     * @param StructureRepository $structureRepository
     * @param ContactRepository $contactRepository
     *
     * @return RedirectResponse|Response
     */
    public function ajouter(Request $request, StructureRepository $structureRepository, ContactRepository $contactRepository)
    {
        $facture = new Facture();
        $structures = $structureRepository->findAll();
        $form = $this->createForm(FactureAvoirType::class, $facture, [
            'context' => 'create'
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->saveFactAvoir($facture);

            return $this->redirectToRoute('Liste_Factures_Avoirs_Controller');
        }

        $this->viewParams = array_merge($this->viewParams, [
            'form' => $form->createView(),
            'structures' => $structures,
        ]);

        return $this->render('facture/ajouter.html.twig', $this->viewParams);
    }

    /**
     * Autocompletion liste facture
     * @Route("/facture/list/autocomplete", name="crm.facture.asynch-search", methods={"GET","POST"})
     */
    public function asynchSearchFacture (FactureRepository $factureRepository, Request $request) {
        $response = array();
        $searchTerm = $request->query->get('search', '');
        $searchTerm = trim($searchTerm);

        if (strlen($searchTerm) >= 2) {
            $factureFilter = new FactureFilter();
            $factureFilter->setRef($searchTerm);
            $aFactures = $factureRepository->findAllFacture($factureFilter)->setMaxResults(10)->getResult();
            
            foreach ($aFactures as $aFacture) {
                $response['results'][] = [
                    'id' => $aFacture['factureId'],
                    'text' => $aFacture['ref']
                ];
            }
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/{id}/voir-facture-avoir", name="Facture_Avoir_Voir", methods={"GET", "POST"})
     * @param Facture $facture
     * @param Request $request
     *
     * @return Response
     */
    public function detail(
        Facture $facture, 
        Request $request,
        FormationDossierDateRepository $formationDossierDateRepo,
        FactureManager $factureManager,
        FormationDossierRepository $formationDossierRepo,
        ContactRepository $contactRepo
    ) {
        
        if (!$facture->getDest1()) {
            // Fix : affichage Destination
            $facture->setDest1($factureManager->setDest1($facture));
        }
        
        $formationDossierId = $facture->getIdDossier() ? $facture->getIdDossier()->getId() : 0;
        // APR-52 : Calcul des montant en N et N + 1
        $formationDossierDate = $formationDossierDateRepo->findOneBy(['idDossier' => $formationDossierId]);
        
        if ($formationDossierDate) {
            $this->viewParams['montant_htn_htn1'] = $factureManager->getMontantHTNHTN1($formationDossierDate, $facture->getTotalRegleHt());
        }
        
        $oClient = null;
        
        if ($formationDossierId) {
            $formationDossier = $formationDossierRepo->findOneBy(['id' =>$formationDossierId]);
            
            $iStructureId = null;
            
            if ($formationDossier && $formationDossier->getIdClient()) {
                $clientId = $formationDossier->getIdClient()->getId();
                
                if ($clientId) {
                    $oClient = $contactRepo->findOneBy(['id' => $clientId]);
                    
                    $facture->setIdContact($oClient);
                    /** APR-190: Factures / Avoirs Dossier > edition : Erreur serveur*/
                    // Gerer si le client n'a pas de strucutre
                    $iStructureId = $oClient->getStructure() ? $oClient->getStructure()->getId() : null;
                    
                    $this->viewParams['client'] = $oClient;
                }
            }
            // APR-216 : L'entité/structure à prendre en compte est celui du dossier (et non pas du client)
            if ($formationDossier && $formationDossier->getIdStructure()) {
                $iStructureId = $formationDossier->getIdStructure() ? $formationDossier->getIdStructure()->getId() : null;
            }
            
            $facture->setIdStructure($iStructureId);
            // APR-216
            $this->saveFactAvoir($facture);
        }
        
        $form = $this->createForm(FactureAvoirType::class, $facture, ["attr" => ["editform" => $facture->getIdResponsable()]]);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$facture->getDateCreation()) {
                $facture->setDateCreation(new \DateTime());
            }
            
            $this->saveFactAvoir($facture);
            $this->addFlash('success', "Facture bien mise à jour !");
            
            return $this->redirectToRoute('Facture_Avoir_Voir', ['id' => $facture->getId()]);
        }

        
        $opca = !is_null($facture->getIdOpca()) ? $facture->getIdOpca() : null;
        $societe = !is_null($facture->getIdContact()) ? $facture->getIdContact() : null;
        $this->viewParams["opca"] = !is_null($opca) && $opca->getId() > 0 ? [$opca->getId() => $opca->getNomStr()] : ["0" =>  null];
        $this->viewParams["societe"] = !is_null($societe) && $societe->getId() > 0 ? [$societe->getId() => $societe->getNomStr()] : ["0" => null];
        $this->viewParams['form'] = $form->createView();
        $this->viewParams['facture'] = $facture;

        return $this->render('facture/voir.html.twig', $this->viewParams);
    }

    private function saveFactAvoir(Facture $facture)
    {
        $avoir = $facture->getIdAvoirLiee();
        
        if ($avoir) {
            $avoir
                ->setIdResponsable($facture->getIdResponsable())
                ->setIdOpca($facture->getIdOpca())
                ->setDest1($facture->getDest1())
                // APR-154 : fix choix AVOCLT / AVOPCA ne persiste pas dans détail dossier > section Facture
    //            ->setOpcaClt('OPCA')
                ->setIdContact($facture->getIdContact())
                ->setMntTtc($avoir->getTotalTtc())
            ;

            if (!$avoir->getOpcaClt()) {
                // APR-154 : fix opca_clt ne peut être vide
                $avoir->setOpcaClt("AVOCLT");
            }

            //dd($avoir->getIdStructure());
            $this->em->persist($avoir);
            $this->em->flush();
            //$facture->setIdStructure($avoir->getIdStructure()->getId());
        }
        
        $facture->setIdAvoirLiee($avoir);
        $facture->setDest2($facture->getDest1());
        $this->em->persist($facture);
        $this->em->flush();
    }

    /**
     * @Route("/facture-domiciliation/{idFactDom}", name="Facture_Domiciliation_Voir", methods={"GET", "POST"})
     *
     * @ParamConverter("factureDomiciliation", options={"mapping": {"idFactDom": "idfacturedom"}})
     *
     * @param Request $request
     * @param FactureDomiciliation $factureDomiciliation
     *
     * @return Response
     * @throws Exception
     */
    public function factureDomiciliationVoir(Request $request, FactureDomiciliation $factureDomiciliation)
    {
        $structure = $factureDomiciliation->getDomiciliation()->getClient()->getStructure();
        $factureDomiciliation->setStructure($structure);

        // utilser tarif salle si montant pas > 0 ou le statut est avoir
//        $oSalle = $factureDomiciliation->getDomiciliation()->getSalle();
//        if ($oSalle instanceof Salle) {
//            if (!(($factureDomiciliation->getMontant() > 0) && ($factureDomiciliation->getStatut() !== FactureConstant::STATUT_AVOIR))) {
//                $factureDomiciliation->setMontant($oSalle->getTarifnormal());
//            }
//            if (!(($factureDomiciliation->getRemise() > 0) && ($factureDomiciliation->getStatut() !== FactureConstant::STATUT_AVOIR))) {
//                $factureDomiciliation->setMontant($oSalle->getTarifreduit());
//            }
//        }
//        
//        if (!(($factureDomiciliation->getHt() > 0) && ($factureDomiciliation->getStatut() !== FactureConstant::STATUT_AVOIR))) {
//            $fHtTotal = $factureDomiciliation->getDomiciliation()->getPartenaire() ?
//                $factureDomiciliation->getMontant() - $factureDomiciliation->getRemise()
//                : $factureDomiciliation->getMontant()
//            ;
//            $factureDomiciliation->setHt($fHtTotal);
//        }
//
//        $factureDomiciliation->setTtc($factureDomiciliation->getTvaTotal() + $factureDomiciliation->getHt());
        
        // Montant facture HT total
        // Suite APR-113 : Reprise du montant sur la facture
        $montantTVA = $factureDomiciliation->getMontant() * $factureDomiciliation->getTva() / 100;
        // Tarif réduit
        $montantHT = $factureDomiciliation->getMontant();
        $montantTTC = floatval($montantHT) + floatval($montantTVA);
        $factureDomiciliation->setHt($montantHT);
        $factureDomiciliation->setTtc($montantTTC);
        
        $form = $this->createForm(EditFactureDomType::class, $factureDomiciliation, [
            'method' => 'POST',
            'attr' => ['collaborateur' => $factureDomiciliation->getDomiciliation()->getCommercial()]
        ]);

        $form->handleRequest($request);
        
        // Target : Sauvegarde de la facture avant redirection vers l'action : 
        // Pour enregistrer le TVA et les montants par défaut 
        $target = $request->request->get('target', '');

        if ($form->isSubmitted() && $form->isValid()) {
            $domiciliation = $factureDomiciliation->getDomiciliation();

            $this->em->persist($domiciliation);

            $client = $domiciliation->getClient();

            $client->setStructure($factureDomiciliation->getStructure());

            $this->em->persist($client);

            $this->em->persist($factureDomiciliation);

            $this->em->flush();

            if (!empty($target)) {
                
                // APR-223 : Prendre en compte les valeurs par défaut du TVA
                if ("editer-facture" === $target) {
                    return $this->redirectToRoute("facture_domiciliation_print", ['id' => $factureDomiciliation->getIdfacturedom()]);
                } else if ("encaisser" === $target) {
                    return $this->redirectToRoute("facture.dom_loc.encaisser", ['id' => $factureDomiciliation->getIdfacturedom()]);
                }
                
            }
            
            $this->addFlash(
                'success',
                "Facture domiciliation modifié avec succèes"
            );
            
            return $this->redirectToRoute('Facture_Domiciliation_Voir', ['idFactDom' => $factureDomiciliation->getIdfacturedom()]);
        }

        $this->viewParams['form'] = $form->createView();
        $this->viewParams['facture'] = $factureDomiciliation;
        
        
        return $this->render('facture/voirDom.html.twig', $this->viewParams);
    }

    /**
     * @Route("/facture/{id}/print",
     *     name="facture_avoirs_print",
     *     methods={"GET"},
     *     requirements={"page"="\d+"})
     * @param Facture $facture
     * @return
     */
    public function printfactureavoirexcel(Facture $facture,FactureManager $facturemanager, FormationDossierDateRepository $formationDossierDateRepository)
    {
        $idcontact = !is_null($facture->getIdContact()) ? $facture->getIdContact()->getId() : $facture->getIdStructure();

        $contact = new Contact();
        if($idcontact > 0){
            $contact = $this->em->getRepository(Contact::class)->find($idcontact);
        }
        $facture->setIdContact($contact);
        $retour = $facturemanager->createdocfacture($facture,$contact, $formationDossierDateRepository);


        if (is_null($retour)) {
            $this->addFlash('danger', 'Facture non imprimable pour cette entité !');
            return $this->redirectToRoute('Facture_Avoir_Voir', ['id' => $facture->getId()]);
        }

        return $this->returnFile($retour);
    }

    /**
     * Retour en prod : Fonctionnalité d'édition Avoir 
     * 
     * @Route("/avoir/{id}/editer",
     *     name="editer_avoirs",
     *     methods={"GET"},
     *     requirements={"page"="\d+"})
     * @param Facture $avoir
     * @return
     */
    public function editerAvoir(Avoir $avoir,
        FactureManager $facturemanager,
        FactureRepository $factureRepo,
        FormationDossierDateRepository $formationDossierDateRepository
    )
    {
        $facture = $factureRepo->findOneBy(['idAvoirLiee' => $avoir]);
        $idcontact = !is_null($facture->getIdContact()) ? $facture->getIdContact()->getId() : $facture->getIdStructure();
        
        $contact = new Contact();
        if($idcontact > 0){
            $contact = $this->em->getRepository(Contact::class)->find($idcontact);
        }
        $avoir->setIdContact($contact);
        
        $retour = $facturemanager->genererFichierAvoir($avoir,$contact, $formationDossierDateRepository);

        if (is_null($retour)) {
            $this->addFlash('danger', 'Facture non imprimable pour cette entité !');
            return $this->redirectToRoute('Facture_Avoir_Voir', ['id' => $avoir->getId()]);
        }

        return $this->returnFile($retour);
    }
    
    /**
     * @Route("/facture-domiciliation/{id}/print",
     *     name="facture_domiciliation_print",
     *     methods={"GET"},
     *     requirements={"page"="\d+"})
     *
     * @param Facture $facture
     *
     */
    public function printFactureDomExcel(FactureDomiciliation $oFactureDom, FactureManager $factureManager){
        $oDomiciliation = $oFactureDom->getDomiciliation();
        $sDateNow = date('Ymd-His');

        switch ($oDomiciliation->getType()->getLibelle()) {
            case Typedom::DOMICILIATION :
                $sFileName = "Facture_Domiciliation_$sDateNow.xlsx";
                break;
            case Typedom::LOCATION :
                $sFileName = "Facture_Location_$sDateNow.xlsx";
                break;
            default:
                $sFileName = "Facture_$sDateNow.xlsx";
        }

        $sPath = $factureManager->extractFactureDomExcel($oFactureDom);

        return $this->file($sPath, $sFileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     *
     * @Route("/lastId",name="last_id_facture")
     *
     */
    public function getLastInsertId(Request $request, FactureRepository $factureRepository) {
        $res = [];
        if($request->isXmlHttpRequest()) {
            $res['nextId'] = $factureRepository->nextAutoIncrement();
            return new JsonResponse($res);
        }

        $res['error'] = "The request is not ajax";
        return new JsonResponse($res);
    }

    /**
     * @Route("/facture/generate-num", name="facture_generate_numero")
     */
    public function generateRef(Request $request, FactureManager $factureManager){
        $sStructure = $request->query->get('structure', '');

        $aResult = [
            'error' => false,
            'message' => '',
            'numero' => null
        ];

        $sNum = $factureManager->generateNumero($sStructure);

        if ($sNum) {
            $aResult['numero'] = $sNum;
        } else {
            $aResult['error'] = true;
            $aResult['message'] = 'Impossible de générer un numéro pour ce structure';
        }

        return new JsonResponse($aResult);
    }
}
