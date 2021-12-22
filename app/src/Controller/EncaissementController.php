<?php

namespace App\Controller;

use App\Constants\Menu;
use App\Constants\Structure as StructureConst;
use App\Entity\CommissionStatut;
use App\Entity\Contact;
use App\Entity\Encaissement;
use App\Entity\EncaissementFactureLiee;
use App\Entity\EncaissementSocieteLiee;
use App\Entity\Facture;
use App\Entity\FactureDomiciliation;
use App\Entity\Filter\EncaissementFilter;
use App\Form\EncaissementFilterType;
use App\Form\EncaissementType;
use App\Repository\CollaborateurRepository;
use App\Repository\ContactRepository;
use App\Repository\DomiciliationRepository;
use App\Repository\EncaissementFactureLieeRepository;
use App\Repository\EncaissementRepository;
use App\Repository\EncaissementSocieteLieeRepository;
use App\Repository\FactureRepository;
use App\Repository\FormationDossierRepository;
use App\Repository\StructureRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function dump;

class EncaissementController extends BaseController {

    protected $entityClass = Encaissement::class;

    /**
     * @Route("/encaissement", name="Liste_Encaissement_Controller")
     * @param EncaissementRepository $encaissementRepository
     * @param PaginatorInterface $paginator
     * @param Request $request
     *
     * @return Response
     */
    public function index(
        EncaissementRepository $encaissementRepository,
        PaginatorInterface $paginator,
        Request $request
    ) {
        // Ne pas autoriser l'accès si l'utilisateur n'a même pas le droit view
        $this->denyAccessUnlessGranted('view', Menu::MENU_ENCAISSEMENTS);
        // Gestion Filtre de recherche encaissement >>
        $encaissementFilter = new EncaissementFilter();
        $encaissementFilterForm = $this->createForm(
            EncaissementFilterType::class,
            $encaissementFilter,
            [
                'method' => 'GET',
            ]
        );
        $encaissementFilterForm->handleRequest($request);
        $this->viewParams['encaissement_filter_form'] = $encaissementFilterForm->createView();
        // Gestion Filtre de recherche encaissement << FIN
        // Récupération de la liste des encaissements + pagination
        $encaissementsQuery = $encaissementRepository->findEncaissementsQuery($encaissementFilter);
        $pagination = $paginator->paginate($encaissementsQuery, $request->query->get('page', 1), 10);
        $this->viewParams['pagination'] = $pagination;
        // Test si l'utilisateur a le droit "EDIT" (update/create/delete)
        $this->viewParams['can_edit'] = $this->isGranted('edit', Menu::MENU_ENCAISSEMENTS);

        return $this->render('encaissement/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/encaissement/{id}/update", name="encaissement.update")
     * @param Encaissement $encaissement
     * @param Request $request
     * @param EncaissementRepository $encaissementRepository
     * @param EntityManagerInterface $em
     * @param FactureRepository $factureRepository
     *
     * @return Response
     * @throws Exception
     */
    public function update(
        Encaissement $encaissement,
        Request $request,
        EncaissementRepository $encaissementRepository,
        EntityManagerInterface $em,
        FactureRepository $factureRepository
    ) {
        $encaissementInfos = $encaissementRepository->getInfosEncaissement($encaissement);

        $encaissementForm = $this->createForm(
            EncaissementType::class,
            $encaissement,
            [
                'payeur' => $encaissement->getPayeur(),
                'encaissement_infos' => $encaissementInfos,
            ]
        );

        $encaissementForm->handleRequest($request);

        if ($encaissementForm->isSubmitted()) {
            // Ne pas autoriser si l'utilisateur n'a pas le droit d'édition
            $this->denyAccessUnlessGranted('edit', Menu::MENU_ENCAISSEMENTS);

            if ($encaissementForm->isValid()) {
                // Log
                $currentDateTime = new DateTime();
                $encaissement->setDateMaj($currentDateTime);
                $encaissement->setIdUserMaj($this->getUser()->getIdutilisateur());
                // Persist
                $em->persist($encaissement);
                $em->flush();

                // Gestion sociétés liées
                $societesLieesIds = $encaissementForm->get('societes')->getData();
                // Enregistrement/Mise à jour des sociétés liés
                // Supression des précédents sociétés
                $encaissementRepository->removeEncaissementSocietesLiees($encaissement->getId());

                foreach ($societesLieesIds as $societeId) {
                    // 4 items à inserer max ;)
                    $oEncaissementSocietesLiee = new EncaissementSocieteLiee();
                    $oEncaissementSocietesLiee->setIdEncaissement($encaissement->getId());
                    $societeId = intval($societeId);
                    $oEncaissementSocietesLiee->setIdSociete($societeId);
                    $em->persist($oEncaissementSocietesLiee);
                }

                // Gestion des factures liées
                $facturesLieesIds = $request->request->get('factureLieesIds', []);
                $encaissementRepository->removeEncaissementFacturesLiees($encaissement->getId());

                foreach ($facturesLieesIds as $factureId) {
                    $oEncaissementFactureLiee = new EncaissementFactureLiee();
                    $oEncaissementFactureLiee->setIdEncaissement($encaissement);
                    $factureId = intval($factureId);
                    $oFacture = $factureRepository->find($factureId);
                    $oEncaissementFactureLiee->setIdFacture($oFacture);
                    $em->persist($oEncaissementFactureLiee);
                }

                $em->flush();
                $this->addFlash('success', "Le suivi encaissement a bien été mis à jour ! ");
            } else {
                $this->addFlash('danger', "Il y a eu une erreur lors de l'enregistrement des informations !");
            }
        }

        $this->viewParams['encaissement'] = $encaissement;
        $this->viewParams['encaissement_infos'] = $encaissementInfos;
        $this->viewParams['encaissement_form'] = $encaissementForm->createView();
        $this->viewParams['societes_liees'] = $encaissementRepository->getSocietesLiees($encaissement);
        $this->viewParams['factures_liees'] = $encaissementRepository->getFacturesLiees($encaissement);

        return $this->render('encaissement/edit.html.twig', $this->viewParams);
    }

    /**
     * @Route("/encaissement/delete", name="encaissement.delete", methods={"POST"})
     * @param Request $request
     * @param EncaissementFactureLieeRepository $encaissementFactureLieeRepository
     * @param EncaissementRepository $encaissementRepository
     *
     * @return JsonResponse
     */
    public function asynchDelete(
        Request $request,
        EncaissementFactureLieeRepository $encaissementFactureLieeRepository,
        EncaissementRepository $encaissementRepository
    ) {
        $response = [];
        $encaissementId = $request->request->get('eid', 0);
        $factureId = $request->request->get('fid', 0);

        if ($encaissementId && $factureId) {
            $encaissementFactureLieeRepository->removeEncaissementFactureLiee($encaissementId, $factureId);
            $encaissementRepository->removeEncaissement($encaissementId);
            $response['success'] = true;
            $response['message'] = "L'encaissement a bien été suprimée !";
            $this->addFlash('success', "Encaissement suprimé avec succes !");
        } else {
            $response['success'] = false;
            $response['message'] = "Echec lors de la suppression de l'encaissement : paramètres manquantes !";
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/encaissement/facture/infos", name="crm.encaissement.factures-avoirs-infos", methods={"POST"})
     * @param Request $request
     * @param FactureRepository $factureRepository
     *
     * @return JsonResponse|Response
     * @throws NonUniqueResultException
     */
    public function asynchGetFacturesAvoirsInfos(
        Request $request,
        FactureRepository $factureRepository
    ) {
        $factureId = $request->request->get('fid', 0);

        if ($factureId) {
            $facture = $factureRepository->getFactureInfos($factureId);

            return $this->render('encaissement/_factures-avoirs.html.twig', ['facture' => $facture]);
        }

        return new JsonResponse(['sucess' => false]);
    }

    /**
     * @Route("/encaissement/facture/detail", name="crm.encaissement.factures-avoirs-infosdetail", methods={"POST"})
     * @param Request $request
     * @param FactureRepository $factureRepository
     *
     * @return JsonResponse
     * @throws NonUniqueResultException
     */
    public function asyncGetFactAvsInfo(
        Request $request,
        FactureRepository $factureRepository
    ) {
        $factureId = $request->request->get('fid', 0);

        if ($factureId != 0) {
            $facture = $factureRepository->getFactureInfos($factureId);

            return $this->json($facture);
        }

        return new JsonResponse(['sucess' => false]);
    }

    /**
     * @Route("/facture/{id}/encaisser", name="encaissement_create_from_facture", methods={"GET", "POST"})
     * @ParamConverter("facture", options={"mapping": {"id": "id"}})
     *
     * @param Facture $facture
     * @param Request $request
     *
     * @param EncaissementRepository $encaissementRepository
     * @param EncaissementFactureLieeRepository $lieeRepository
     *
     * @param FactureRepository $factureRepository
     *
     * @param ContactRepository $contactRepository
     *
     * @return Response
     * @throws NonUniqueResultException
     */
    public function encaissementFactureAvoir(
        Facture $facture,
        Request $request,
        EncaissementRepository $encaissementRepository,
        EncaissementFactureLieeRepository $lieeRepository,
        ContactRepository $contactRepository,
        FormationDossierRepository $formationDossierRepository
    ) {
        $encaissement = $encaissementRepository->findOneBy(['idFacture' => $facture->getId()]);

        if (!$encaissement) {
            $factEncaiss = $lieeRepository->findOneBy(['idFacture' => $facture]);

            if ($factEncaiss) {
                $encaissement = $factEncaiss->getIdEncaissement();
            } else {
                $encaissement = new Encaissement();
                $idStructure = ($facture->getIdAvoirLiee() && $facture->getIdAvoirLiee()->getId() != 0) ? $facture->getIdAvoirLiee()->getIdStructure() : null;
                $encaissement->setStructure($idStructure);
                $encaissement->setIdFacture($facture->getId());
            }
        }

        $dossierId = !is_null($facture->getIdDossier()) ? $facture->getIdDossier()->getId() : null;
        $dossier = !is_null($dossierId) ? $formationDossierRepository->findOneBy(['id' => $dossierId]) : null;
        
        // APR-154 : Factures/Avoir dossiers > Encaissement facture :
        // (2) Champ : Montant TTC encaissé = Mt TTC facture – Mt TTC Avoir
        
        $encaissementInfos = [
            'commercial' => $facture->getIdResponsable()->getNomPrenom(),
            'montant_ht_facture' => $facture->getTotalRegleHt(),
            'montant_tva_facture' => $facture->getMntTva(),
            'taux_commission' => (!is_null($dossier)) ? $dossier->getTauxCom() : 0,
            'statut_paiement' => (!is_null($dossier)) ? $dossier->getPayencaiss() : "",
            'num_facture' => null,
            'opca_id' => (!is_null($dossier) && !is_null($dossier->getIdOpca()) && $dossier->getIdOpca()->getId() != 0) ?
            $dossier->getIdOpca()->getId() : null,
            'opca_nom_str' => (!is_null($dossier) && !is_null($dossier->getIdOpca()) && $dossier->getIdOpca()->getId() != 0) ?
            $dossier->getIdOpca()->getNomStr() : '',
            'montant_ttc_avoir' => ($facture->getIdAvoirLiee() && $facture->getIdAvoirLiee()->getId() != 0) ? floatval($facture->getIdAvoirLiee()->getTotalTtc()) : 0,
            'montant_ht_avoir' => ($facture->getIdAvoirLiee() && $facture->getIdAvoirLiee()->getId() != 0) ? floatval($facture->getIdAvoirLiee()->getTotalHt()) : 0
        ];
        
        $sPayeur = $facture->getDest1() == 'C' ? 'CLIENT' : 'OPCA';
        $encaissement->setPayeur($sPayeur);

        $oOpca = $facture->getIdOpca();

        if ($oOpca) {
            $oEncaissementOPCA = $contactRepository->findOneBy(['id' => $oOpca->getId()]);
            if ($oEncaissementOPCA instanceof Contact) {
                $encaissementInfos['opca_id'] = $oEncaissementOPCA->getId();
                $encaissementInfos['opca_nom_str'] = $oEncaissementOPCA->getNomStr();
            }
        }


        $form = $this->createForm(EncaissementType::class, $encaissement, [
            'encaissement_infos' => $encaissementInfos,
        ]);

        if ($encaissement->getId()) {
            $facturesLiees = $encaissementRepository->getFacturesLiees($encaissement);
        } else {
            $facturesLiees = [];
            // APR-154 : Factures/Avoir dossiers > Encaissement facture :
            // (2) Champ : Montant TTC encaissé = Mt TTC facture – Mt TTC Avoir
            $montantTTCAvoir = ($facture->getIdAvoirLiee() && $facture->getIdAvoirLiee()->getId() != 0) ? $facture->getIdAvoirLiee()->getTotalTtc() : null;
            
            $facturesLiees[] = [
                'id' => $facture->getId(),
                'ref' => $facture->getRef(),
                'totalRegleHt' => $facture->getTotalRegleHt(),
                'totalRegle' => $facture->getTotalRegle(),
                'mntTtc' => $facture->getMntTtc(),
                'mntTva' => $facture->getMntTva(),
                'id_avoir' => ($facture->getIdAvoirLiee() && $facture->getIdAvoirLiee()->getId() != 0) ? $facture->getIdAvoirLiee()->getId() : null,
                'num_avoir' => ($facture->getIdAvoirLiee() && $facture->getIdAvoirLiee()->getId() != 0) ? $facture->getIdAvoirLiee()->getRef() : null,
                'avoirMontantTTC' => $montantTTCAvoir,
                'avoirMontantTVA' => ($facture->getIdAvoirLiee() && $facture->getIdAvoirLiee()->getId() != 0) ? $facture->getIdAvoirLiee()->getMntTva() : null,
            ];
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $encaissement->setDateAdd(new DateTime());
            $encaissement->setMntComm($form->get('montant_commission')->getData());
            $encaissement->setChequeattencaiss($form->get('chequeattencaiss')->getData());
            $encaissement->setMntHt($form->get('montantHTEncaisse')->getData());
            $encaissement->setMntTtc($form->get('montantTTCEncaisse')->getData());
            // Persist
            $this->em->persist($encaissement);
            $this->em->flush();
            
            // Gestion sociétés liées
            $this->saveSocieteLiees($encaissement, $form);

            // Gestion des factures liées
            $this->saveFactureLiees($encaissement, $request);

            // Mise à jour statut commission
            $iDossierId = $facture->getIdDossier() ? $facture->getIdDossier()->getId() : null;

            if ($iDossierId) {
                $formationDossier = $formationDossierRepository->findOneBy(['id' => $iDossierId]);
                $oStatutCommission = $form->get('statut_paiement_commission')->getData();
                $sStatutComm = null;

                if ($oStatutCommission instanceof CommissionStatut) {
                    $sStatutComm = $oStatutCommission->getId();
                }

                $formationDossier->setPayencaiss($sStatutComm);
                $formationDossier->setTauxCom($form->get('taux_commission')->getData());
                $this->em->persist($formationDossier);
            }

            $this->em->flush();
            $this->addFlash('success', "Le suivi encaissement a bien été enregistré ! ");

            return $this->redirectToRoute('Liste_Encaissement_Controller');
        }
        
        
        if ($facture->getIdContact()) {
            $societeLiees = [
                [
                    'idSociete' => $facture->getIdContact()->getId(),
                    'societe' => $facture->getIdContact()->getNomStr()
                ]
            ];
        } elseif ($facture->getIdStructure()) {
            $societeLiees = [
                [
                    'idSociete' => $contactRepository->find($facture->getIdStructure())->getId(),
                    'societe' => $contactRepository->find($facture->getIdStructure())->getNomStr(),
                ],
            ];
        } else {
            $societeLiees = [];
        }

        $this->viewParams['encaissement_form'] = $form->createView();
        $this->viewParams['societes_liees'] = ($encaissement->getId()) ? $encaissementRepository->getSocietesLiees(
                $encaissement
            ) : $societeLiees;
        
        // APR-109 : Champs société liée à déplacer et à renseigner par 
        if (count($this->viewParams['societes_liees']) == 0) {
            $this->viewParams['societes_liees'] = $societeLiees;
        }
        
        $this->viewParams['factures_liees'] = $facturesLiees;
        $this->viewParams['encaissement'] = $encaissement;
        $this->viewParams['encaissement_infos'] = $encaissementInfos;
        $this->viewParams['facture_principale'] = $facture;
        $this->viewParams['formation_dossier'] = $formationDossierRepository->findOneBy(['id' => $facture->getIdDossier()]);
        $this->viewParams['source'] = Encaissement::SOURCE_DOSSIER;

        return $this->render('encaissement/new.html.twig', $this->viewParams);
    }

    /**
     * Encaissement de facture domiciliation / Location
     * @Route("/facture-domiciliation/{id}/encaisser", name="facture.dom_loc.encaisser")
     */
    public function encaisserFactureDomLoc(
        FactureDomiciliation $factureDom,
        EncaissementRepository $encaissementRepository,
        DomiciliationRepository $domiciliationRepository,
        ContactRepository $contactRepository,
        StructureRepository $structureRepository,
        CollaborateurRepository $collaborateurRepository,
        Request $request,
        EncaissementSocieteLieeRepository $encaissementSocieteLieeRepository
    ) {
        // Vérifier si l'encaissement existe déjà
        $oEncaissement = $encaissementRepository->findOneBy([
            'idFacture' => $factureDom->getIdfacturedom(),
            'source' => Encaissement::SOURCE_DOMLOC
        ]);
        $domiciliation = $domiciliationRepository->findOneBy([
            'id' => $factureDom->getDomiciliation()
        ]);
        // Commercial
        $oCommercial = $collaborateurRepository->findOneBy(['id' => $domiciliation->getCommercial()]);
        $montantHT = $factureDom->getHt() ? $factureDom->getHt() : $factureDom->getMontant();

        // Si l'encaissement n'existe pas encore => Créer
        if (!$oEncaissement) {
            $oEncaissement = new Encaissement();
            // Spécifie que l'encaissement est depuis une facture domiciliation
            $oEncaissement->setSource(Encaissement::SOURCE_DOMLOC);
            $oEncaissement->setDateAdd(new DateTime());

            // Structure pour dom/loc fixé à proform
            $oStructure = $structureRepository->findOneBy([
                'id' => StructureConst::PROFORM
            ]);

            $oEncaissement->setStructure($oStructure);
            // Payeur = client
            $oEncaissement->setPayeur('CLIENT');
            // Set montant HT
            $oEncaissement->setMntHt($montantHT);
        }
        
        // Récupération des infos pour l'encaissement
        // Calcul taux TVA commission
        //$iTauxCommission = ($oEncaissement->getMntComm() && $oEncaissement->getMntComm() != 0) ? ($montantHT / $oEncaissement->getMntComm()) : 0; 
        
        $aEncaissementInfos = [
            'commercial' => $oCommercial->getNomPrenom(),
            'montant_ht_facture' => $factureDom->getHt() ? $factureDom->getHt() : $factureDom->getMontant(),
            'montant_tva_facture' => ($montantHT * $factureDom->getTva() / 100),
            'taux_commission' => $domiciliation->getTauxCommission(),
            'statut_paiement' => $domiciliation->getStatutPaiementCommission(), // Statut paiement commission
            'num_facture' => $factureDom->getNumero(),
            'opca_id' => null,
            'opca_nom_str' => '',
            'montant_ttc_avoir' => 0
        ];
        
        // Sociétés liées
        $societeLiees = [
            [
                'idSociete' => $contactRepository->find($domiciliation->getClient())->getId(),
                'societe' => $contactRepository->find($domiciliation->getClient())->getNomStr(),
            ],
        ];

        $form = $this->createForm(EncaissementType::class, $oEncaissement, [
            'encaissement_infos' => $aEncaissementInfos,
            'source' => Encaissement::SOURCE_DOMLOC
        ]);
        
        // Enregistrement / MAJ de l'encaissement
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mise à jour encaissement
            $oEncaissement->setSource(Encaissement::SOURCE_DOMLOC);
            $oEncaissement->setMntTtc($form->get('montantTTCEncaisse')->getData());
            $oEncaissement->setIdFacture($factureDom->getIdfacturedom());
            $oEncaissement->setMntHt($form->get('montantHTEncaisse')->getData());
            // Persist
            $this->em->persist($oEncaissement);
            $this->em->flush();
            
            // Gestion sociétés liées
            $this->saveSocieteLiees($oEncaissement, $form);

            // Gestion des factures liées
            $this->saveFactureLiees($oEncaissement, $request);

            // Mise à jour statut commission
            $this->em->persist($domiciliation);
            $this->em->flush();
            $this->addFlash('success', "Le suivi encaissement a bien été enregistré ! ");
            
            return $this->redirectToRoute('Liste_Encaissement_Controller');
        }
        
        
        // Factures liées à l'encaissement : pour une domicialiation 
        $this->viewParams['factures_liees'] = [];
        $this->viewParams['societes_liees'] = $societeLiees;
        $this->viewParams['encaissement_infos'] = $aEncaissementInfos;
        $this->viewParams['encaissement_form'] = $form->createView();
        // Facure principale pour l'encaissement
        $this->viewParams['facture_principale'] = $factureDom;
        $this->viewParams['context'] = 'dom/loc';
        $this->viewParams['source'] = Encaissement::SOURCE_DOMLOC;
        
        return $this->render('encaissement/new.html.twig', $this->viewParams);
    }

    private function saveSocieteLiees(Encaissement $oEncaissement, FormInterface $oForm){
        $societesLieesIds = $oForm->get('societes')->getData();
        /** @var EncaissementSocieteLieeRepository $societeLieeRepo */
        $societeLieeRepo = $this->em->getRepository(EncaissementSocieteLiee::class);
        // Enregistrement/Mise à jour des sociétés liés
        // Supprimer les societes liées d'abord
        $societeLieeRepo->removeEncaissementSocieteLiee($oEncaissement->getId());

        // Rajouter les sociétés liés
        foreach ($societesLieesIds as $societeId) {
            // 4 items à inserer max ;)
            $oEncaissementSocietesLiee = new EncaissementSocieteLiee();
            $oEncaissementSocietesLiee->setIdEncaissement($oEncaissement->getId());
            $societeId = intval($societeId);
            $oEncaissementSocietesLiee->setIdSociete($societeId);
            $this->em->persist($oEncaissementSocietesLiee);
        }
    }

    private function saveFactureLiees(Encaissement $oEncaissement, Request $request){
        $facturesLieesIds = $request->request->get('factureLieesIds', []);
        /** @var EncaissementRepository $encaissementRepository */
        $encaissementRepository = $this->entityRepository;
        $encaissementRepository->removeEncaissementFacturesLiees($oEncaissement->getId());

        foreach ($facturesLieesIds as $factureId) {
            $oEncaissementFactureLiee = new EncaissementFactureLiee();
            $oEncaissementFactureLiee->setIdEncaissement($oEncaissement);
            $factureId = intval($factureId);
            $oEncaissementFactureLiee->setIdFacture($factureId);
            $this->em->persist($oEncaissementFactureLiee);
        }
    }

}
