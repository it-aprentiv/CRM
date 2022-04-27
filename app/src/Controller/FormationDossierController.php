<?php

namespace App\Controller;

use App\Constants\Date;
use App\Constants\DossierNote as DossierNoteConst;
use App\Constants\ExtractionDossierType;
use App\Constants\FormationDossierStatut as FDSConstant;
use App\Constants\Note as NoteConst;
use App\Constants\Structure;
use App\Entity\Adresse;
use App\Entity\Avoir;
use App\Entity\Collaborateur;
use App\Entity\CommissionStatut;
use App\Entity\Competence;
use App\Entity\Contact;
use App\Entity\ContactType;
use App\Entity\Domiciliation;
use App\Entity\Facture;
use App\Entity\Filter\FormationDossierFilter;
use App\Entity\FormationDossier;
use App\Entity\FormationDossierDate;
use App\Entity\FormationDossierNote;
use App\Entity\FormationDossierStagiaire;
use App\Entity\FormationDossierStatut;
use App\Entity\Mail;
use App\Entity\Ville;
use App\Form\DossierType;
use App\Form\FormationDossierFilterType;
use App\Manager\ContactManager;
use App\Manager\FormationDossierDateManager;
use App\Manager\FormationDossierManager;
use App\Repository\AdresseRepository;
use App\Repository\CollaborateurRepository;
use App\Repository\CompetenceRepository;
use App\Repository\ContactRepository;
use App\Repository\DomiciliationRepository;
use App\Repository\FormationDossierDateRepository;
use App\Repository\FormationDossierRepository;
use App\Repository\FormationDossierStatutRepository;
use App\Repository\PropalRepository;
use App\Repository\VilleRepository;
use DateInterval;
use DateTime;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use function dd;
use function dump;

class FormationDossierController extends BaseController {

    private $aAutocompleteList = [
        [
            'id' => DossierNoteConst::AUTOID_ATT_ACCORD,
            'label' => "En attente accord OPCA",
            'info' => "En attente accord __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_ATT_ACCORD_OPCA,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
        [
            'id' => DossierNoteConst::AUTOID_ACC_A_RECLAMER,
            'label' => "Accord à réclamer",
            'info' => "Demander au client si reçu accord   __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_ACC_A_RECLAMER,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
        [
            'id' => DossierNoteConst::AUTOID_EMARG_A_ENVOYER,
            'label' => "Emarg à envoyer",
            'info' => "Envoyer emarg  __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_EMARG_A_ENVOYER,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
        [
            'id' => DossierNoteConst::AUTOID_EMARG_A_RECLAMER,
            'label' => "Emarg à reclamer",
            'info' => "Réclamer emarg  __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_EMARG_A_RECLAMER,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
        [
            'id' => DossierNoteConst::AUTOID_FACT_CLT_A_FAIRE,
            'label' => "FACLT à faire",
            'info' => "Envoyer facture et emarg  __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_FACT_CLT_A_FAIRE,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
        [
            'id' => DossierNoteConst::AUTOID_DOCS_A_RECLAMER,
            'label' => "Docs à réclamer",
            'info' => "Réclamer emarg + chq + autre  __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_DOCS_A_RECLAMER,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
        [
            'id' => DossierNoteConst::AUTOID_ENC_CHQ_EN_ATT,
            'label' => "Enct chq en attente",
            'info' => "Demander si reçu remboursement  __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_ENC_CHQ_EN_ATT,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
        [
            'id' => DossierNoteConst::AUTOID_RELANCE_FOPCA,
            'label' => "Relance F. OPCA",
            'info' => "A vérifier si reçu règlement __OPCA__ __num_dossier__",
            'action' => NoteConst::ACTION_RELANCE_FOPCA,
            'statut' => NoteConst::STATUT_A_FAIRE,
            'dateaction' => ''
        ],
    ];

    /**
     * @Route("/dossier", name="Liste_Dossiers_Controller")
     */
    public function index(
        Request $request,
        FormationDossierRepository $formationDossierRepository,
        PaginatorInterface $paginator,
        FormationDossierManager $formationDossierManager
    ) {
        $oFormationDossierFilter = new FormationDossierFilter();
        $oFormationDossierForm = $this->createForm(
            FormationDossierFilterType::class,
            $oFormationDossierFilter,
            [
                'method' => 'GET',
            ]
        );

        $oFormationDossierForm->handleRequest($request);
        $formationDossierQuery = $formationDossierRepository->findAllFormationDossier($oFormationDossierFilter);
        $this->viewParams['formation_dossier_filter_form'] = $oFormationDossierForm->createView();
        $pagination = $paginator->paginate($formationDossierQuery, $request->query->get('page', 1), 10);
        $dossier_array = [];
        foreach($pagination->getItems() as $dossier){
            $dossierCourant = $this->em->getRepository(FormationDossier::class)->find($dossier['id']);
            $dossier_array[$dossier['id']] = $this->createForm(DossierType::class, $dossierCourant,['attr' => 
            [
            'disabled' => true,
            ],
        ])->createView();
        }

        $this->viewParams["doc_form"] = $dossier_array;
        $this->viewParams['pagination'] = $pagination;
        // variable pour accéder aux constantes "type extraction"
        $this->viewParams['extractConst'] = new ExtractionDossierType();
        /** @var FormationDossierStatutRepository $oFormationDossierStatutRepo */
        $oFormationDossierStatutRepo = $this->em->getRepository(FormationDossierStatut::class);
        $this->viewParams['dossierStatut'] = $oFormationDossierStatutRepo->selectAllStatutLibelle();
        $this->viewParams['comStatuts'] = $this->em->getRepository(CommissionStatut::class)->findAll();
        /** @var CollaborateurRepository $oCollaborateurRepo */
        $oCollaborateurRepo = $this->em->getRepository(Collaborateur::class);
        $this->viewParams['commercials'] = $oCollaborateurRepo->getQueryCollaborateurList()
            ->select('c.id, c.nomPrenom')->getQuery()
            ->getResult();

        // APR-218 : Suivi des commission > Extraction > Mises en forme
        $this->viewParams['dossierEnattenteExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::DOSSIER_EN_ATTENTE_ACCORD);
        $this->viewParams['suiviencaissExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::SUIVI_ENCAISSEMENT);
        $this->viewParams['dossFactOpcaExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::DOSSIER_FACT_OPCA);
        $this->viewParams['dossFactClientExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::DOSSIER_FACT_CLIENT);
        $this->viewParams['gestionlocExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_DOSSIER_LOC);
        $this->viewParams['dossprospereExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_DOSSIER_PROS);
        $this->viewParams['dossproformExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_DOSSIER_PROFORM);
        $this->viewParams['customextractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::EXTRACTION_PERSONNALISE);
        $this->viewParams['suivicomColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_SUIVI_COM);

        return $this->render('dossier/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/dossier/{idDossier}/delete",
     *      name="Liste_Dossier_Controller/deleteDossier",
     *      requirements={"page"="\d+"}
     * )
     * @param Request $request
     * @param $idDossier
     *
     * @return JsonResponse
     */
    public function delete($idDossier, FormationDossierManager $fdm) {
        $oEntityManager = $this->getDoctrine()->getManager();
        try {
            $oDossier = $oEntityManager->getRepository(FormationDossier::class)->find($idDossier);
            $delete = $fdm->deletethis($oDossier);
            if ($delete) {

                return new JsonResponse(array(
                    'status' => 'Success',
                    'message' => 'Line successfully Deleted'),
                    200);
            } else {

                return new JsonResponse(array(
                    'status' => 'Error',
                    'message' => 'Line not Deleted'),
                    403);
            }
        } catch (DBALException $e) {
            $errorMessage = $e->getMessage();

            return new JsonResponse(array(
                'status' => 'Error',
                'message' => $errorMessage),
                403);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            return new JsonResponse(array(
                'status' => 'Error',
                'message' => $errorMessage),
                403);
        }
    }

    /**
     * Retourne une liste de client / société
     *
     * @Route("/dossier/client/list", name="crm.dossier.client.asynch-search", methods={"GET","POST"})
     */
    public function asynchFindClient(Request $request, ContactRepository $contactRepository) {
        $response = [];
        $searchTerm = $request->query->get('search', '');
        $byId = $request->query->get('byid', false);

        if (trim(strlen($searchTerm)) >= 3) {
            $aoClient = $contactRepository->getClient($searchTerm);

            foreach ($aoClient as $client) {
                $response['results'][] = [
                    'id' => $byId ? $client['id'] : $client['client'],
                    'text' => $client['client'],
                ];
            }
        }

        return new JsonResponse($response);
    }

    /**
     * Retourne une liste d'opca
     *
     * @Route("/dossier/opca/list", name="crm.dossier.opca.asynch-search", methods={"GET","POST"})
     */
    public function asynchFindOpca(Request $request, ContactRepository $contactRepository) {
        $response = [];
        $searchTerm = $request->query->get('search', '');
        $byId = $request->query->get('byid', false);

        if (trim(strlen($searchTerm)) >= 3) {
            $aoOpca = $contactRepository->getOpca($searchTerm);

            foreach ($aoOpca as $opca) {
                $response['results'][] = [
                    'id' => $byId ? $opca['id'] : $opca['opca'],
                    'text' => $opca['opca'],
                ];
            }
        }

        return new JsonResponse($response);
    }

    /**
     * Retourne une liste de commercial
     *
     * @Route("/dossier/commercial/list", name="crm.dossier.commercial.asynch-search", methods={"GET","POST"})
     */
    public function asynchFindCommercial(Request $request, CollaborateurRepository $collaborateurRepository) {
        $response = [];
        $searchTerm = $request->query->get('search', '');

        if (trim(strlen($searchTerm)) >= 3) {
            $aoCommercial = $collaborateurRepository->getCommercial($searchTerm);

            foreach ($aoCommercial as $commercial) {
                $response['results'][] = [
                    'id' => $commercial['commercial'],
                    'text' => $commercial['commercial'],
                ];
            }
        }

        return new JsonResponse($response);
    }

    /**
     * Creation dossier
     *
     * @Route("/dossier/creation", name="Liste_Dossiers_Controller/ajoutdossier")
     */
    public function create(
        Request $request, EntityManagerInterface $em, ContactRepository $contactRepository,
        FormationDossierDateManager $formationDossierDateManager, PropalRepository $propalrepository
    ){
        $mois = [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre",
        ];
        
        $signature = $mois[date("m") - 1];
        $dossier = new FormationDossier();
        $facture = new Facture();
        $avoir = new Avoir();
        $note = new FormationDossierNote();

        // APR-106 : Fiche client/prospect > Bouton "dossier propal"
        // Récupération des infos sur le client/prospect à la création du dossier
        $sClient = $request->query->get('client');
        $oClient = null;
        
        if (!empty($sClient)) {
            $oClient = $contactRepository->find($sClient);

            if ($oClient instanceof Contact) {
                $dossier->setIdClient($oClient);
                $dossier->setIdStructure($oClient->getStructure());
                $dossier->setIdCommercial($oClient->getCommercial());
                // Récupération OPCA
                $oClientOPCA = $contactRepository->findOneBy(['id' => $oClient->getOpca()]);
                $dossier->setIdOpca($oClientOPCA);
                // APR-139 : Fix Lieu de stage non récupérer lorsqu'on crée un dossier à partir d'une fiche client
                // Récupération de l'adresse
                $adresses = $em->getRepository(Adresse::class)->findAdressesContactPrintData($oClient->getId());
                
                $data["adresse"] = [
                    "adresse" => "",
                    "compAdresse" => "",
                    "codePostal" => "",
                    "ville" => "",
                    "principale" => 0,
                ];
                if (array_key_exists(0, $adresses)) {
                    $data["adresse"] = $adresses[0];
                }
                if ((int) $data["adresse"]["principale"] != 1) {
                    foreach ($adresses as $cntadr) {
                        if ((int) $cntadr["principale"] == 1) {
                            $data["adresse"] = $cntadr;
                        }
                    }
                }
                
                $this->viewParams['client_adresse'] = $data['adresse'];
            }
        }

        
        $idFormation = $request->query->get('id_formation');
        $idStructure = $request->query->get('id_entite');
        $idCommercial = $request->query->get('id_commercial');
        $coutHT = $request->query->get('coutht');
        $totalHT = str_replace(',', ".", $coutHT);
        $totalHT = preg_replace('/\s+/', '', $totalHT);
        $idClient = $request->query->get('clientPropal');     

 
        if(!empty($coutHT)) {
            $dossier->setMntDemande($totalHT);
        }
        if (!empty($idStructure)) {
            $structure = $em->getRepository(\App\Entity\Structure::class)->find($idStructure);
            $dossier->setIdStructure($structure);
        }
        if (!empty($idCommercial)) {
            $commercial = $em->getRepository(\App\Entity\Collaborateur::class)->find($idCommercial);
            $dossier->setIdCommercial($commercial);
        }

        $docForm = $this->createForm(DossierType::class, $dossier, ['signature' => $signature]);
        $docForm->handleRequest($request);
        
        $stagiaires = $docForm->get('stagiaires')->getData();
        $propalClient ="";
        if (!empty($idClient)) {
            $propalClient = $contactRepository->findOneBy(['id' => $idClient]);
            $dossier->setIdClient($propalClient);
            $oClientOPCA = $contactRepository->findOneBy(['id' => $propalClient->getOpca()]);
            $dossier->setIdOpca($oClientOPCA);
            //dd($client);
        }
        if (!empty($idFormation)) {
            
            $formation = $em->getRepository(\App\Entity\Competence::class)->find($idFormation);
            //var_dump($formation);die;            
            $dossier->setNom($formation->getCompetence());
            //$docForm->get('nom')->setData($formation->getCompetence());
            //$docForm->get('themeformation')->setData($formation->getThemeformation());
            //$docForm->get('themegeneral')->setData($formation->getThemegenerale());
            
        }

        $this->viewParams['clientRequest'] = $oClient ? $oClient : $propalClient;
        $this->viewParams['o_client'] = $oClient ? $oClient : $propalClient;
        $this->viewParams['doc_form'] = $docForm->createView();
        //$num_code = rand(1, 9999);  // A mettre en séquentiel (incrémente selon la dernière valeur en base)    
        // APR-188 : numéro de séquence = séquence ref dernier dossier + 1 (0XXX + 1)
        $num_code = $formationDossierDateManager->getLastDossierRefSequence();
        $now = date('Y-m');
        
        if ($docForm->isSubmitted()) {
            $datas = $request->request->all();
            $idStructure = $datas['dossier']['idStructure'];
            $pref = ($idStructure == 1) ? 'AC' : 'Pro';
            $dossier->setNoRef($num_code);
            $dataDispo = $docForm->get('dispositif')->getData();
            $numref = $now . "-" . $num_code . "-" . $dataDispo;
            $dossier->setRef($numref);
            $dossier->setNom($datas['dossier']['nom']);
            
            /** Par default: Date recep accord = +3 mois date de création du dossier */
            if($datas['dossier']['dateAccord'] == '') {
                if($datas['dossier']['dateEnvoi'] == '') {
                    $dateEnvoi = new \DateTime();
                } else {
                    $dateEnvoi = new \DateTime($datas['dossier']['dateEnvoi']);
                }
                $dateRecepAccord =  $dateEnvoi->add(new DateInterval('P3M'));
                $dossier->setDateAccord($dateRecepAccord);
            }

            $opca = $em->getRepository(Contact::class)->find((int) $datas["dossier"]["idOpca"]);
            $dossier->setIdOpca($opca);
            $client = $em->getRepository(Contact::class)->find((int) $datas["dossier"]["idClient"]);
            $dossier->setIdClient($client);
            
             // APR-149 : Client et OPCA n'est pas repris lors d'une création de dossier à partir d'une fiche client
            if ($oClient instanceof Contact) {
                $dossier->setIdClient($oClient);
                // Récupération OPCA
                $oClientOPCA = $contactRepository->findOneBy(['id' => $oClient->getOpca()]);
                $dossier->setIdOpca($oClientOPCA);
            }
            $dossier->setAdresseAutre($datas['dossier']['adresseAutre']);
            $dossier->setAdresseClient($datas['dossier']['adresseClient']);
            $dossier->setAdresseVivienne($datas['dossier']['adresseVivienne']);

            //Save nombre heure et nombre jour N et N+1
            $nbHeures = $datas['nbrh'] + $datas['nbrh2'];
            $nbJours = $datas['nbrj'] + $datas['nbrj2'];

            $dossier->setDureeHeures($nbHeures);
            $dossier->setDureeJours($nbJours);

            // Save lieu de stage : par default lieu = adresse autre
            if($dossier->getAdresseClient()) {
                $dossier->setLieu($datas["lieu"]['vivienne']);
            }
            if($dossier->getAdresseVivienne()) {
                $dossier->setLieu($datas["lieu"]['client']);
            }

            // APR-194
            $dossier->setDateAdd(new DateTime());
            
            $em->persist($dossier);
            
            
            /* CREATE FORMATIONDOSSIERDATE */
            // Les dates sont envoyées de la forme : <date>|<heure_debut]|<heure_fin>|duree
            // lors de la création
            if (isset($datas['dossier']['formation_date_item'])) {
                $formationDossierDateManager->savePostedNewDateItems($dossier, $datas['dossier']['formation_date_item']);
            }
            /* FIN FORMATIONDOSSIERDATE */

            $avoirs = $dossier->getAvoirs();

            foreach ($avoirs as $avoir) {
                $num_rand = rand(1, 9999);
                $av = "/AV";
                $refavoir = $pref . $av . $now . $num_rand;
                if (is_object($avoir)) {
                    //$avoir->setRef($refavoir);
                    $avoir->setIdDossier($dossier);
                    $avoir->setIntituleFacture($dossier->getNom());
                    $avoir->setIdStructure($dossier->getIdStructure());
                    $avoir->setIdResponsable($dossier->getIdCommercial());
                    // APR-150 : Fix Dossier > Avoir : le radio Opca clt prend toujours la valeur AVOPCA
                    $sDest1 = null;

                    // Utile dans visualisation détails facture => Champ payeur = dest1
                    if ($avoir->getOpcaClt() == 'FACLT') {
                        $sDest1 = 'C';
                    } else if ($avoir->getOpcaClt() == 'FAOPCA') {
                        $sDest1 = 'O';
                    }

                    $avoir->setDest1($sDest1);
                    
                    $em->persist($avoir);
                }
            }
            $factures = $dossier->getFactures();


            foreach ($factures as $key => $facture) {
                $num_rand = rand(1, 9999);
                $fa = "/F";
                $reffacture = $pref . $fa . $now . $num_rand;
                if (is_object($facture)) {
                    $facture->setPourcentageRemise($dossier->getTauxCom());
                    $facture->setMontantRemiseFixe($dossier->getMntDemande()); //mnt_demande
                    //$facture->setRef($reffacture);
                    $facture->setIdDossier($dossier);
                    $facture->setIntituleFacture($dossier->getNom());
                    $avoir = null;
                    if (array_key_exists($key, $avoirs)) {
                        $avoir = $avoirs[$key];
                    }
                    $facture->setIdAvoirLiee($avoir);
                    // $facture->setIdStatut($dossier->getIdStatut());
                    $facture->setNoDossierRef($numref);
                    $facture->setIdResponsable($dossier->getIdCommercial());
                    $facture->setIdContact($dossier->getIdClient());
                    $facture->setIdOpca($dossier->getIdOpca());
                    $facture->setIdStructure($dossier->getIdStructure()->getId());
                    $facture->setTotalRegleHt($facture->getTotalHt());
                    $sDest1 = null;

                    // Utile dans visualisation détails facture => Champ payeur = dest1
                    if ($facture->getOpcaClt() == 'FACLT') {
                        $sDest1 = 'C';
                    } else if ($facture->getOpcaClt() == 'FAOPCA') {
                        $sDest1 = 'O';
                    }

                    $facture->setDest1($sDest1);
                    $em->persist($facture);
                }
            }

            $oType = $this->em->getRepository(ContactType::class)->find(5);
            
            foreach ($stagiaires as $key => $stagiaire) {
                if ($key != '__name__' &&  is_object($stagiaire)) {
                    $email = $stagiaire->getEmail();
                    $FDstagiaire = new FormationDossierStagiaire();
                    $stagiaire->setIdType($oType);
                    $FDstagiaire->setStagiaire($stagiaire);
                    $dossier->addStagiaire($FDstagiaire);
                    $stagiaire->setStructure($dossier->getIdStructure());

                    if ($email) {
                        $Mail = new Mail();
                        $Mail->setMail($email);
                        $Mail->setIdContact($stagiaire);
                        $Mail->setIdTypeMail(1);
                        $em->persist($Mail);
                    }
                    $em->persist($stagiaire);
                }
            }

            $commentaires = $dossier->getCommentaires();

            foreach ($commentaires as $commentaire) {
                if (is_object($commentaire)) {
                    $commentaire->setFormationDossier($dossier);
                    $em->persist($commentaire);
                }
            }
            $em->flush();
            
            $this->addFlash("success", "Dossier enregistré avec success !");
            
            return $this->redirectToRoute('Liste_Dossiers_Controller', array('client' => $sClient));
        }

        $this->viewParams['listAutocomplete'] = $this->aAutocompleteList;
        $this->viewParams['dossier'] = $dossier;
        $this->viewParams['adresseVivienne'] = 1;
        
        return $this->render('dossier/create.html.twig', $this->viewParams);
    }

    /**
     * Creation dossier
     *
     * @Route("/dossier/{id}/visualiser", name="Liste_Dossiers_Controller/visualiserDossier",
     *      requirements={"page"="\d+"})
     */
    public function show(
        Request $request,
        EntityManagerInterface $em,
        $id,
        AdresseRepository $adresseRepository,
        FormationDossierManager $manager,
        FormationDossierDateManager $formationDossierDateManager,
        FormationDossierDateRepository $formationDossierDateRepository
    ) {
        $mois = [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre",
        ];

        /** @var FormationDossier $dossier */
        $dossier = $em->getRepository(FormationDossier::class)->find($id);
        
        $moisTemp = $dossier->getDateEnvoi();
        $signature = $mois[$moisTemp->format('m') - 1];
        
        $iClientId = $dossier->getIdClient() instanceof Contact ? $dossier->getIdClient()->getId() : null ;
        $oClient = $em->getRepository(Contact::class)->findOneBy(['id' => $iClientId]); 
        $sIdClient = $oClient instanceof Contact ? $oClient->getId() : null;
        
        $oAdresse = $adresseRepository->findOneBy(['idContact' => $sIdClient]);
        $adresse = '';
        if ($oAdresse) {
            $adresse = $oAdresse->getAdresse() . ' ';
            $adresse .= $oAdresse->getCodePostal() . ' ';
            $oVille = $oAdresse->getIdVille() ? $em->getRepository(Ville::class)->find($oAdresse->getIdVille()) : '';
            $ville = $oVille ? $oVille->getNomVille() : '';
            $adresse .= $ville;
        }
        
        // Gestion lieu de stage
        $lieuStage = $dossier->getLieu();
        $adresseAutre = $dossier->getAdresseAutre();
        $this->viewParams['adresse'] = $adresse;
        $this->viewParams['adresseVivienne'] = $dossier->getAdresseVivienne();
        
        if (!$dossier->getAdresseVivienne()) {
            if (preg_match('/vivienne/i', $lieuStage) > 0) {
                $this->viewParams['adresseVivienne'] = 1;
            }
        }
        
        $this->viewParams['adresseClient'] = $dossier->getAdresseClient();
        
        if (!empty($adresse) && $lieuStage == $adresse) {
            $this->viewParams['adresseClient'] = 1;
        }
        
        $this->viewParams['adresseAutre'] = $adresseAutre;
        
        if (!$this->viewParams['adresseClient']) {
            if ($lieuStage != $adresse && (preg_match('/vivienne/i', $lieuStage) == 0)) {
                $this->viewParams['adresseAutre'] = 1;
            }
        }
        
        $opca = null;
        if (!is_null($dossier->getIdOpca())) {
            $opca = $em->getRepository(Contact::class)->find($dossier->getIdOpca());
        }
        
        if (!is_null($opca) && $opca->getId() != 0) {
            $dossier->setIdOpca($opca);
            $this->viewParams["opca"] = array($opca->getId() => $opca->getNomStr());
            // APR : Editer courrier > Cas particulier pour OPCO : FIFPL
            $sOPCO = $opca->getNomStr();
            
            if (strpos(strtoupper($sOPCO), "FIFPL") !== false || strpos(strtoupper($sOPCO), "FIF PL") !== false) {
                // Permet d'afficher les choix des document FIFPL / FIFPL2
                $this->viewParams['opco_is_fifpl'] = true;
            }
            
            
        } else {
            $this->viewParams["opca"] = array(null => null);
        }
        
        $client = null;
        
        // Hack bug v1 : lien contact supprimé/corrompu
        if (!is_null($dossier->getIdClient()) && !in_array($dossier->getIdClient()->getId(), [75530]) ) {
            $client = $em->getRepository(Contact::class)->find($dossier->getIdClient());
        }
        
        if (!is_null($client)) {
            $this->viewParams["client"] = array($client->getId() => $client->getNomStr());
            $this->viewParams['o_client'] = $client;
        } else {
            $this->viewParams["client"] = array(null => null);
        }
        
        //Initialisation données emploi du temps
        $oFormationDate = $em->getRepository(FormationDossierDate::class)->findOneBy(['idDossier' => $id]);
        //$aFormationDates = $em->getRepository(FormationDossierDate::class)->getDossierDate($id);
        $aFormationDates = $formationDossierDateRepository->getDossierDate($id);

        $aFormatedFormationDates = $formationDossierDateManager->formatFormationDates($aFormationDates);
        $this->viewParams['formated_formation_dates'] = $aFormatedFormationDates;
        
        // Création du formulaire
        $docForm = $this->createForm(DossierType::class, $dossier, ['signature' => $signature, 'attr' => 
            [
                'editform' => $dossier->getIdCommercial(),
            ],
            'facturation.legal_mode' => $this->getParameter('facturation.legal_mode'),
            'formated_formation_dates' => $aFormatedFormationDates
        ]);
        // stagiaire
        $aFDStagiaire = $em->getRepository(FormationDossierStagiaire::class)->findBy(['dossier' => $dossier]);
        $stagiaires = [];
        foreach ($aFDStagiaire as $fDStagiaire) {
            $stagiaires[] = $fDStagiaire->getStagiaire();
        }
        $docForm->get('stagiaires')->setData($stagiaires);
        $docForm->handleRequest($request);
        //Pour affiche le mail
        $dataComplementaire = [];
        $i = 0;
        if (COUNT($stagiaires) > 0) {
            foreach ($stagiaires as $stagiaire) {
                $oMail = $em->getRepository(Mail::class)->findOneBy(['idContact' => $stagiaire->getId()]) ?? new Mail();
                $dataComplementaire[$i]['email'] = $oMail->getMail();
                $i++;
            }
        } else {
            $dataComplementaire[$i]['email'] = '';
        }
        $this->viewParams["listestagiaires"] = $stagiaires;
        $this->viewParams["stagiaireemail"] = $dataComplementaire;
        $this->viewParams["iddossier"] = $dossier->getId();
        
        // Emploi du temps : gestion des anciens données v1
        $this->viewParams['edt'] = $manager->generateFormationDate($dossier, $oFormationDate);
        $this->viewParams['nom'] = $dossier->getNom() ?? "";
        $this->viewParams['competence'] = null;
        if ($dossier->getNom() != '') {
            $catalogue = $em->getRepository(Competence::class)->findOneBy(["competence" => $dossier->getNom()]);
            $this->viewParams['competence'] = !is_null($catalogue) ? $catalogue->getCatalogueProgramme() : null;
        }
        $this->viewParams['dataComplementaire'] = $dataComplementaire;
        $this->viewParams['doc_form'] = $docForm->createView();
//        $num_code=$dossier->getNoRef();
        $now = date('-Y-');
        
        if ($docForm->isSubmitted()) {
            $av = "/AV";
            $datas = $request->request->all();
            $idStructure = $datas['dossier']['idStructure'];
            $pref = ($idStructure == 1) ? 'AC' : 'Pro';
            $num_code = rand(1, 9999);
            $refavoir = $pref . $av . $now . $num_code;
            $fa = "/FA";
            $reffacture = $pref . $fa . $now . $num_code;
            $numref = $dossier->getRef();
            $dossier->setNom($datas['dossier']['nom']);
            /** Données pour l'emploi du temps * */
            $opca = $em->getRepository(Contact::class)->find((int) $datas["dossier"]["idOpca"]);
            
            $dossier->setIdOpca($opca);
            $client = $em->getRepository(Contact::class)->find((int) $datas["dossier"]["idClient"]);
            $dossier->setIdClient($client);

            $dossier->setAdresseAutre($datas['dossier']['adresseAutre']);
            $dossier->setAdresseClient($datas['dossier']['adresseClient']);
            $dossier->setAdresseVivienne($datas['dossier']['adresseVivienne']);

            //Save nombre heure et nombre jour N et N+1
            $nbHeures = $datas['nbrh'] + $datas['nbrh2'];
            $nbJours = $datas['nbrj'] + $datas['nbrj2'];

            $dossier->setDureeHeures($nbHeures);
            $dossier->setDureeJours($nbJours);

            // Save lieu de stage : par default lieu = adresse autre
            if($dossier->getAdresseVivienne()) {
                $dossier->setLieu($datas["lieu"]['vivienne']);
            }
            if($dossier->getAdresseClient()) {
                $dossier->setLieu($datas["lieu"]['client']);
            }

            $em->persist($dossier);
            
            $avoirs = $dossier->getAvoirs();
            foreach ($avoirs as $avoir) {
                if (is_object($avoir)) {
                    $num_code = rand(1, 9999);
                    $refavoir = $pref . $av . $now . $num_code;
                    //$avoir->setRef($refavoir);
                    $avoir->setIdDossier($dossier);
                    $avoir->setIntituleFacture($dossier->getNom());
                    $avoir->setIdStructure($dossier->getIdStructure());
                    $avoir->setIdResponsable($dossier->getIdCommercial());
                    $avoir->setTotalRegleHt($avoir->getTotalHt());
/*
                    CES LIGNES SONT MISES EN COMMENTAIRE CAR ELLES METTENT LE TOTAL HT DE L'AVOIR A '0' EURO A CHAQUE ENREGISTREMENT
                    $avoir->setTotalHt($avoir->getMontantFinalRemise() ? $avoir->getMontantFinalRemise() : 0);
                    $avoir->setTotalRegleHt($avoir->getMontantFinalRemise() ? $avoir->getMontantFinalRemise() : 0);
*/                    
                    $avoir->setMntTtc($avoir->getMontantFinalRemise());
                    
                    // APR-150 : Fix Dossier > Avoir : le radio Opca clt prend toujours la valeur AVOPCA
                    $sDest1 = null;
                    // Utile dans visualisation détails facture => Champ payeur = dest1
                    if ($avoir->getOpcaClt() == 'AVOCLT') {
                        $sDest1 = 'C';
                    } else if (in_array($avoir->getOpcaClt(), ['AVOPCA', 'AVOPCO'])) {
                        $sDest1 = 'O';
                    }

                    $avoir->setDest1($sDest1);
                    
                    $em->persist($avoir);
                    //dd($avoir);

                }
            }
            $factures = $dossier->getFactures();
            foreach ($factures as $key => $facture) {
                if (is_object($facture)) {
                    $num_code = rand(1, 9999);
                    $reffacture = $pref . $fa . $now . $num_code;
                    $facture->setPourcentageRemise($dossier->getTauxCom());
                    $facture->setMontantRemiseFixe($dossier->getMntDemande()); //mnt_demande
                    //$facture->setRef($reffacture);
                    $facture->setIdDossier($dossier);
                    $facture->setIntituleFacture($dossier->getNom());
                    $facture->setIdStructure($dossier->getIdStructure()->getId());
                    $avoir = null;
                    if (array_key_exists($key, $avoirs)) {
                        $avoir = $avoirs[$key];
                    }
                    $facture->setIdAvoirLiee($avoir);
                    // $facture->setIdStatut($dossier->getIdStatut());
                    $facture->setNoDossierRef($numref);
                    $facture->setIdResponsable($dossier->getIdCommercial());
                    $facture->setIdContact($dossier->getIdClient());
                    $facture->setIdOpca($dossier->getIdOpca());
                    $facture->setTotalRegleHt($facture->getTotalHt());

//                    $facture->setTotalHt($facture->getMontantFinalRemise() ? $facture->getMontantFinalRemise(): 0);
                    //$facture->setTotalRegleHt($facture->getMontantFinalRemise() ? $facture->getMontantFinalRemise() : 0);
                    $em->persist($facture);
                }
            }

            $oType = $this->em->getRepository(ContactType::class)->find(5);
            $dataStagiaires = $docForm->get('stagiaires')->getData();
            foreach ($dataStagiaires as $stagiaire) {
                if (is_object($stagiaire) && $stagiaire->getNom() != '' && $stagiaire->getPrenom() != '') {
                    $email = $stagiaire->getEmail();
                    // tester si c'est pour update ou pour insert
                    $stagiaireId = $stagiaire->getId();
                    if ($stagiaireId) {
                        $FDstagiaire = $em->getRepository(FormationDossierStagiaire::class)->findOneBy(
                            ['dossier' => $dossier, 'stagiaire' => $stagiaire]
                        );
                    } else {
                        $FDstagiaire = new FormationDossierStagiaire();
                    }
                    $stagiaire->setIdType($oType);
                    $FDstagiaire->setStagiaire($stagiaire);
                    $dossier->addStagiaire($FDstagiaire);
                    $stagiaire->setStructure($dossier->getIdStructure());

                    if ($email) {
                        $Mail = new Mail();
                        $Mail->setMail($email);
                        $Mail->setIdContact($stagiaire);
                        $Mail->setIdTypeMail(1);
                        $em->persist($Mail);
                    }
                    $em->persist($stagiaire);
                }
            }

            $commentaires = $dossier->getCommentaires();
            foreach ($commentaires as $commentaire) {
                if (is_object($commentaire)) {
                    $commentaire->setFormationDossier($dossier);
                    $em->persist($commentaire);
                }
            }
            
            $em->flush();
            $this->addFlash('success', 'Dossier modifié avec succès.');
            //return $this->redirectToRoute('Liste_Dossiers_Controller');
            return $this->redirectToRoute('Liste_Dossiers_Controller/visualiserDossier', ['id' => $id ]);
        }
        //dump($docForm->getData()); die;
        $this->viewParams["dossier"] = $dossier;
        $this->viewParams['listAutocomplete'] = $this->aAutocompleteList;
        
        $client = !in_array($dossier->getIdClient()->getId(), [75530]) ? $dossier->getIdClient() : null;
        
        if (!$client) {
            $this->viewParams['client_non_exists'] = true;
        }
        
        return $this->render('dossier/show.html.twig', $this->viewParams);
    }
    
    /**
     * Suppression d'une date ou plusieurs dates de formation
     * @Route("/dossier/date/remove", name="dossier.date.delete", methods={"DELETE"})
     */
    public function asynchDeleteFormationDate(Request $request) {
        $formationDates = $request->request->get('date_id');
        // Cas de suppression d'une seule ligne
        // Rechercher la date
        if (!is_array($formationDates)) {
            // Cas d'une seule ligne à supprimer 
            $oFormationDate = $this->em->getRepository(FormationDossierDate::class)->find($formationDates);
            
            if ($oFormationDate) {
                $this->em->remove($oFormationDate);
                $this->em->flush();
            } 
        } else {
            foreach ($formationDates as $dateId) {
                // La liste des dates à supprimer ne dépasse pas une dizaine :)
                $oFormationDate = $this->em->getRepository(FormationDossierDate::class)->find($dateId);
                $this->em->remove($oFormationDate);
            }
            
            $this->em->flush();
        }
        
        return new JsonResponse(['success' => true, 'id' => $formationDates]);
    }
    
    /**
     * Suppression d'une date de formation
     * @Route("/dossier/date/refresh-calendar", name="dossier.date.refresh_calendar", methods={"POST"})
     */
    public function asynchRefreshFormationDate(
        Request $request,
        FormationDossierDateRepository $formationDossierDateRepository,
        FormationDossierDateManager $formationDossierDateManager
    ) {
        
        $iDossierId = $request->request->getInt('id_dossier', 0);
        $aNewDateItems = $request->request->get('new_items', []);
        $sContext = $request->request->get('context', 'update');
        $datesInfos = [];
        
        if ($iDossierId) {
            $sContext = 'update';
             // Rechercher les dates de formation
            $aFormationDates = $formationDossierDateRepository->getDossierDate($iDossierId);
            // Création de la lise des dates sous forme table > tr
            $aFormatedFormationDates = $formationDossierDateManager->formatFormationDates($aFormationDates);
            $sListeDateHtml = $this->renderView('dossier/part/calendrier-refresh-dates.html.twig', ['dates' => $aFormationDates, 'context' => $sContext]);
            // Récupération du template des informations : date début / date fin / Nombre jours : N/N+1 / Nombres heure H/H+1
            $datesInfos['date_debut'] = $aFormatedFormationDates['date_debut'] ? $aFormatedFormationDates['date_debut']['dateD']->format('d/m/Y') : '';
            $datesInfos['date_fin'] = $aFormatedFormationDates['date_fin'] ? $aFormatedFormationDates['date_fin']['dateD']->format('d/m/Y') : '';
            
        } else {
            // Ordonner les dates par date_debut ASC
            $aNewDateItemsSorted = [];
            // APR-207 : Fix ordre des date lors de la création de dossier
            foreach ($aNewDateItems as $item) {
                $sDateDebut = \DateTime::createFromFormat('d/m/Y', $item['date_debut'])->format('ymd');
                $aNewDateItemsSorted[$sDateDebut] = $item;
            }
            
            // APR-207 : Fix ordre des date lors de la création de dossier
            ksort($aNewDateItemsSorted);
            $aFormatedFormationDates = $formationDossierDateManager->formatFormationDates($aNewDateItemsSorted, $sContext);
            $sListeDateHtml = $this->renderView('dossier/part/calendrier-refresh-dates.html.twig', ['dates' => $aNewDateItemsSorted, 'context' => $sContext]);
            // Récupération du template des informations : date début / date fin / Nombre jours : N/N+1 / Nombres heure H/H+1
            $datesInfos['date_debut'] = $aFormatedFormationDates['date_debut'] ? $aFormatedFormationDates['date_debut']['date_debut']: '';
            $datesInfos['date_fin'] = $aFormatedFormationDates['date_fin'] ? $aFormatedFormationDates['date_fin']['date_debut'] : '';
        }
        
        $datesInfos['total_jours_n'] = $aFormatedFormationDates['total_jours_n'];
        $datesInfos['total_jours_n1'] = $aFormatedFormationDates['total_jours_n1'];
        $datesInfos['total_heures_n'] = $aFormatedFormationDates['total_heures_n'];
        $datesInfos['total_heures_n1'] = $aFormatedFormationDates['total_heures_n1'];
        
        return new JsonResponse([
            'success' => true,
            'liste_dates_tr' => $sListeDateHtml,
            'calendrier_infos' => $datesInfos
        ]);
    }
    
    
    
    
    /**
     * Ajouter des dates à une formation
     * 
     * @Route("/dossier/date/insert", name="dossier.dates.insert", methods={"POST"})
     * 
     * @param Request $request
     */
    public function asynchInsertNewDateItems(Request $request, 
        FormationDossierDateRepository $formationDossierDateRepository,
        FormationDossierRepository $formationDossierRepository
    ) 
    {
        $dossierId = $request->request->getInt('id', 0);
        $oDossier = $formationDossierRepository->find($dossierId);
        $aDateItems = $request->request->get('items');
        
        // Récupérer les dates déjà existantes pour le dossier
        $aDatesFormationExistantes = $formationDossierDateRepository->getDossierDate($dossierId);
        // Rechercher les dates qui sont à insérer / qui n'existent pas encore
        $aOldItemsFormatted = [];
        
        foreach ($aDatesFormationExistantes as $aDate) {
            // Date début = date fin
            $aOldItemsFormatted[$aDate['dateD']->format('Y-m-d')][$aDate['dateD']->format('H:i')][$aDate['dateF']->format('H:i')] = true;
        }
        
        $aNewItems = [];
        
        // Gestion cas edition dates de formation
        if ($oDossier) {
            
            foreach ($aDateItems as $aDate) {
                $date = DateTime::createFromFormat('d/m/Y', $aDate['date_debut'])->format('Y-m-d');
                $hourStart = !empty($aDate['d_heure_m']) ? str_replace(' ', '', $aDate['d_heure_m']) : str_replace(' ', '', $aDate['d_heure_am']);
                $hourEnd = !empty($aDate['f_heure_m']) ? str_replace(' ', '', $aDate['f_heure_m']) : str_replace(' ', '', $aDate['f_heure_am']);
                $oDateStart = DateTime::createFromFormat('Y-m-d H:i', $date . ' ' .$hourStart) ;
                $oDateEnd = DateTime::createFromFormat('Y-m-d H:i', $date . ' ' .$hourEnd);

                // Test si la date n'existe pas encore ? => On enregistre dans la base
                if(!isset($aOldItemsFormatted[$date][$hourStart][$hourEnd])) {
                    $aNewItems[] = $aDate;
                    $oFormationDate = new FormationDossierDate();
                    $oFormationDate->setIdDossier($oDossier);
                    $oFormationDate->setDateD($oDateStart);
                    $oFormationDate->setDateF($oDateEnd);
                    $oFormationDate->setNbH(floatval($aDate['duree']));
                    $this->em->persist($oFormationDate);
                    
                    $aOldItemsFormatted[$date][$hourStart][$hourEnd] = true;
                }
            }
            
            $this->em->flush();
        } 
        
        return new JsonResponse(['success' => true, 'new_items' => $aDateItems]);
    }
    
    
    /**
     * Extraction dossier
     *
     * @param Request $request
     * @Route("/dossier/extract", name="crm.dossier.extract", methods={"POST"})
     *
     * @return BinaryFileResponse|RedirectResponse
     */
    public function extract(
        Request $request,
        FormationDossierRepository $formationDossierRepository,
        FormationDossierManager $dossierManager
    ) {
        $sTypeExtraction = $request->request->get('filtreextract', '');
        if (!$sTypeExtraction) {
            return $this->redirectToRoute('Liste_Dossiers_Controller');
        }

        $sFileName = null;
        $sSheetTitle = null;

        // liaison donnée et libellé header excel, si clé header différent de l'Alias dans le repo,
        // utile surtout pour les doubles affichages
        // header_key => doctrine_alias
        $aKeyToAlias = [];
        $sDateNow = date('Y-m-d_His');
        // APR-218 : Suivi des commission > Extraction > Mises en forme
        $aAllHeader = $dossierManager->getExtractHeader($sTypeExtraction);
        $aFilters = $request->request->get('filter', []);
        
        // APR-134 : Ajout colonne statut dossier dans tous les types d'export
        $aFilters['columns'][] = 'statutDossier';

        if (isset($aFilters['displayAll']) && $aFilters['displayAll']) {
            $aFilters['columns'] = array_keys($aAllHeader);
            $aHeader = $aAllHeader;
        } else {
            // Header fichier excel
            // doctrine_alias => Libellé
            $aHeader = [];
            // get column by filters
            foreach ($aFilters['columns'] as $col) {
                $aHeader[$col] = $aAllHeader[$col];
            }
        }

        switch ($sTypeExtraction) {
            case ExtractionDossierType::DOSSIER_EN_ATTENTE_ACCORD :
                $sSheetTitle = "Dossier en attente accord";
                $sTitle = "Liste des dossiers en attente d'accord";
                $sFileName = "Dossier_en_attente_accord_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractDossierByStatut(FDSConstant::EN_ATTENTE_ACCORD, array_keys($aHeader), $aFilters);
                break;
            case ExtractionDossierType::SUIVI_ENCAISSEMENT :
                $sTitle = "Suivi des encaissements";
                $sSheetTitle = "Suivi des prévisions d encaissements";
                $sFileName = "Suivi_des_encaissements_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractDossierEncaissement(array_keys($aHeader), $aFilters);
                break;
            case ExtractionDossierType::DOSSIER_FACT_OPCA :
                $sTitle = "Dossiers facturé Opca";
                $sSheetTitle = "Dossiers facturé Opca";
                $sFileName = "Dossiers_facture_Opca_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractFactureDossier(FDSConstant::FACTURE_OPCA, array_keys($aHeader), $aFilters);
                break;
            case ExtractionDossierType::GESTION_DOSSIER_LOC :
                $sTitle = "GESTION DES DOSSIERS DE LOCATIONS";
                $sSheetTitle = "GESTION DES DOSSIERS DE LOCATIONS";
                $sFileName = "GESTION_DES_DOSSIERS_DE_LOCATIONS_$sDateNow.xlsx";
                /** @var DomiciliationRepository $oDomRepo */
                $oDomRepo = $this->getDoctrine()->getRepository(Domiciliation::class);
                $aData = $oDomRepo->extractDossierLocation($aFilters);
                break;
            case ExtractionDossierType::DOSSIER_FACT_CLIENT :
                $sTitle = "Dossiers facturé Client";
                $sSheetTitle = "Dossiers facturé Client";
                $sFileName = "Dossiers_facturé_Client_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractFactureDossier(FDSConstant::FACTURE_CLIENT, array_keys($aHeader), $aFilters);
                break;
            case ExtractionDossierType::GESTION_DOSSIER_PROS :
                $sTitle = "LISTE DES DOSSIERS PROSPERE";
                $sSheetTitle = "LISTE DES DOSSIERS PROSPERE";
                $sFileName = "LISTE_DES_DOSSIERS_PROSPERE_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractDossierByStructure(Structure::PROSPERE, array_keys($aHeader), $aFilters);
                break;
            case ExtractionDossierType::GESTION_DOSSIER_PROFORM :
                $sTitle = "LISTE DES DOSSIERS PROFORM";
                $sSheetTitle = "LISTE DES DOSSIERS PROFORM";
                $sFileName = "LISTE_DES_DOSSIERS_PROFORM_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractDossierByStructure(Structure::PROFORM, array_keys($aHeader), $aFilters);
                break;
            case ExtractionDossierType::GESTION_SUIVI_COM :
                $sTitle = "Gestion Suivi des Commissions";
                $sSheetTitle = "Gestion Suivi des Commissions";
                $sFileName = "Gestion_Suivi_des_Commissions_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractDossierSuivicom(array_keys($aHeader), $aFilters);
                break;
            case ExtractionDossierType::EXTRACTION_PERSONNALISE :
                $sTitle = "Dossiers personnalisé";
                $sSheetTitle = "Dossiers personnalisé";
                $sFileName = "Dossiers_personnalise_$sDateNow.xlsx";
                $aData = $formationDossierRepository->extractDossierData($aFilters);
                break;
            default:
                $this->addFlash('danger', "Veuillez choisir un type de donnée à extraire valide !");

                return $this->redirectToRoute('Liste_Dossiers_Controller');
        }

        $aParamExcel = ['title' => $sTitle, 'sheettitle' => $sSheetTitle];
        $sPath = $dossierManager->extractToExcel($aHeader, $aData, $aParamExcel, $sTypeExtraction, $aKeyToAlias, $aFilters);

        return $this->file($sPath, $sFileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    private function getExtractHeader($sTypeExtract) {
        switch ($sTypeExtract) {
            case ExtractionDossierType::DOSSIER_EN_ATTENTE_ACCORD :
                $aHeader = [
                    'refDossier' => "N° Dossier",
                    'dateenvoi' => "Date création",
                    'structure' => "Entité",
                    'client' => "Client",
                    'opca' => "OPCA",
                    'mntDemande' => "Montant demandé",
                    'nomDossier' => "Intitulé stage",
                    'commercial' => "Commercial"
                ];
                break;
            case ExtractionDossierType::SUIVI_ENCAISSEMENT :
                $aHeader = [
                    'refFacture' => "N° Facture",
                    'facDossRef' => "N° Dossier",
                    'structure' => 'Structure',
                    'societe' => "Client",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'mntHtFac' => "Montant HT Facture",
                    'facTotalRegle' => "Montant encaissé",
                    'dateReelEnc' => "Date encaissement",
                    'commercial' => "Commercial"
                ];
                break;
            case ExtractionDossierType::GESTION_DOSSIER_LOC :
                $aHeader = [
                    'ref' => "N° Dossier",
                    'client' => "Client",
                    'debut' => "Date début période",
                    'fin' => "Date fin période",
                    'fixe' => "Montant HT Facturé",
                    'recu' => "Montant HT réglé",
                    'du' => " Montant HT dû",
                    'ref_facture' => "Ref facture",
                    'creation' => "Date émission facture"
                ];
                break;
            case ExtractionDossierType::DOSSIER_FACT_OPCA :
            case ExtractionDossierType::DOSSIER_FACT_CLIENT :
                $aHeader = [
                    'refDossier' => "N° Dossier",
                    'structure' => "Entité",
                    'client' => "Client",
                    'opca' => "OPCA",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'refFacture' => "N° Facture",
                    'facTotalRegle' => "Montant HT Facture",
                    'factCreation' => "Date facturation",
                    'nomDossier' => "Intitulé de formation",
                    'commercial' => "Commercial"
                ];
                break;
            case ExtractionDossierType::GESTION_DOSSIER_PROS :
            case ExtractionDossierType::GESTION_DOSSIER_PROFORM :
                $aHeader = [
                    'refDossier' => "N° Dossier",
                    'dateenvoi' => "Date création",
                    'client' => "CLIENT",
                    'nomDossier' => "Intitulé stage",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'statutDossier' => "Statut dossier",
                    'commercial' => "Commercial",
                    'opca' => "OPCA"
                ];
                break;
            case ExtractionDossierType::GESTION_SUIVI_COM :
                $aHeader = [
                    'refDossier' => "Ref Dossier",
                    'societe' => "Client",
                    'dateSignature' => "Date signature",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'facTotalRegle' => 'Montant HT Facture',
                    'montencaiss' => "Montant Encaisse TTC",
                    'tauxCom' => "Taux de commission",
                    'montantcom' => "Montant de la commission",
                    'comsStatut' => "Statut",
                    'dateReelEnc' => "Date paiement",
                ];
                break;
            case ExtractionDossierType::EXTRACTION_PERSONNALISE :
                $aHeader = [
                    'dateenvoi' => "Date de création",
                    'commercial' => "Commercial",
                    'numDossier' => "N° Dossier",
                    'datefin' => "Date fin de période",
                    'duree' => "Durée",
                    'lieu' => "Lieu de formation",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'dossierTotalHt' => "Total ht",
                    'nomDossier' => "Intitule formation",
                    'client' => "Client",
                    'dossierType' => "type dossier",
                    'nomclient' => "Nom et prenom",
                    'opca' => "Opca",
                    'tva' => "TVA",
                ];
                break;
            default:
                $aHeader = [];
        }

        $aHeader['statutDossier'] = "Statut dossier";

        return $aHeader;
    }

    /**
     * Autocompletion intitule stage
     *
     * @param CompetenceRepository $competenceRepository
     * @param Request $request
     *
     * @return JsonResponse
     * @Route("/dossier/getCompetence", name="crm.dossier.competence.asynch-search", methods={"GET"})
     */
    public function asynchCompetence(CompetenceRepository $competenceRepository, Request $request) {
        $response = [];
        $searchTerm = $request->query->get('search', '');
        $searchTerm = trim($searchTerm);

        if (strlen($searchTerm) >= 3) {
            $aCompetences = $competenceRepository->getCompetence($searchTerm);
            foreach ($aCompetences as $aCompetence) {
                $response['results'][] = [
                    'id' => $aCompetence['competence'],
                    'text' => $aCompetence['competence'],
                    'themeformation' => $aCompetence['themeformation'],
                    'themegenerale' => $aCompetence['themegenerale'],
                    'idid' => $aCompetence['id'],
                ];
            }
        }

        return new JsonResponse($response);
    }

    /**
     * Autocompletion intitule stage
     *
     * @param CompetenceRepository $competenceRepository
     * @param Request $request
     *
     * @return JsonResponse
     * @Route("/dossier/getCompetenceone",
     *     name="crm.dossier.competence.asynch-search-one",
     *     methods={"GET"})
     */
    public function asynchCompetenceOne(CompetenceRepository $competenceRepository, Request $request) {
        $response = [];
        $intitule = $request->query->get('intitule', '');
        $searchTerm = trim($intitule);

        if (strlen($searchTerm) >= 3) {
            $aCompetences = $competenceRepository->getCompetenceByName($searchTerm);
            foreach ($aCompetences as $aCompetence) {
                $response['results'][] = [
                    'id' => $aCompetence['competence'],
                    'text' => $aCompetence['competence'],
                    'themeformation' => $aCompetence['themeformation'],
                    'themegenerale' => $aCompetence['themegenerale'],
                    'idid' => $aCompetence['id'],
                ];
            }
        }

        return new JsonResponse($response);
    }

    /**
     * @param FormationDossier $dossier
     * @Route("/dossier/{id}/generatedoc/{type}",
     *      name="Dossier_Generate_Doc",
     *      requirements={"page"="\d+","page"="\d+"})
     *
     * @return Response
     */
    public function generateDocDossier(FormationDossier $dossier, $type, FormationDossierManager $manager, Request $request, FormationDossierDateRepository $formationDossierDateRepository) {
        
        $client = !in_array($dossier->getIdClient()->getId(), [75530]) ? $dossier->getIdClient() : null;
        
         if (!$client) {
            $this->addFlash('danger', 'Veuillez renseigner le client associé au dossier !');
            //return $this->redirectToRoute('Liste_Dossiers_Controller');
            return $this->redirectToRoute('Liste_Dossiers_Controller/visualiserDossier', ['id' => $dossier->getId() ]);
        }
        
        $fichier = null;
        $contactmanager = new ContactManager($this->em);
        $contact = $this->em->getRepository(Contact::class)->find($dossier->getIdClient());

        $contactdata = $contactmanager->preparebdcdata($contact);
        /**
         * APR-191: Gérer la valeur de structure:
         * Des fois, il y a dans dossier mais pas dans Contact
         */
        $contactdata["contact"]["structure"] = $dossier->getIdStructure() ? $dossier->getIdStructure()->getId() : $contactdata["contact"]["structure"];

        $datefr = Date::MOIS_FR;
        $df = date("d") . " " . $datefr[date("m") - 1] . " " . date("Y");
        $opca = $this->em->getRepository(Contact::class)->find($dossier->getIdOpca());
        
        switch ($type) {
            case 1:
                $template = $this->renderView("Common\DocPrint\Dossier\ECD.html.twig", ["contact" => $contactdata, "datejour" => $df, "opca" => $opca]);
                $fichier = $manager->createDocECD($template, $dossier, $contactdata["contact"]["structure"]);
                break;
            case 2:
                $template = $this->renderView("Common\DocPrint\Dossier\ELE.html.twig", ["contact" => $contactdata, "datejour" => $df, "dossier" => $dossier]);
                $fichier = $manager->createDocELE($template, $dossier, $contactdata["contact"]["structure"]);
                break;
            case 3:
                // Fiche dossier > Editer courrier > IMP 
                // APR-213 : Mise en forme
                $target = $request->query->get('target', null);
                $template = $this->renderView("Common\DocPrint\Dossier\IMP.html.twig", ["contact" => $contactdata, "datejour" => $df, "target" => $target, "opca" => $opca]);
                $fichier = $manager->createDocIMP($template, $dossier, $contactdata["contact"]["structure"]);
                break;
            case 4:
                // Fichier dossier >  Page de garde
                // APR-212 : Ajout de l'initial du collaborateur (commercial)
                $aDataPost = $request->request->all();
                $fichier = $manager->createDocPageGarde($dossier, $contactdata["contact"]["structure"], $aDataPost, $formationDossierDateRepository);
                $sFileName = basename($fichier);
                
                return $this->file($fichier, $sFileName, ResponseHeaderBag::DISPOSITION_INLINE);
        }

        return $this->returnFile($fichier);
    }

    /**
     * Theme formation et general
     *
     * @param CompetenceRepository $competenceRepository
     * @param Request $request
     *
     * @return JsonResponse
     * @Route("/dossier/getTheme", name="crm.dossier.theme.asynch-search", methods={"GET"})
     */
    public function asynchTheme(CompetenceRepository $competenceRepository, Request $request) {
        $response = [];
        $searchTerm = $request->query->get('search', '');
        $searchTerm = trim($searchTerm);

        if (strlen($searchTerm) != 0) {
            $oCompetence = $competenceRepository->findOneBy(['competence' => $searchTerm]);
            if ($oCompetence) {
                $response['results'][] = [
                    'themeformation' => $oCompetence->getThemeformation(),
                    'themegenerale' => $oCompetence->getThemegenerale(),
                ];
            }
        }

        return new JsonResponse($response);
    }

    /**
     * @param FormationDossier $dossier
     * @param FormationDossierManager $manager
     *
     * @Route("/dossier/{id}/generatedocEmmargement",
     *     name="generate_doc_emmargement",
     *     requirements={"page"="\d+"})
     */
    public function generateDocEmmargement(FormationDossier $dossier, FormationDossierDateRepository $formationDossierDateRepository, FormationDossierManager $manager) {
         $client = !in_array($dossier->getIdClient()->getId(), [75530]) ? $dossier->getIdClient() : null;
        
         if (!$client) {
            $this->addFlash('danger', 'Veuillez renseigner le client associé au dossier !');
            //return $this->redirectToRoute('Liste_Dossiers_Controller');
            return $this->redirectToRoute('Liste_Dossiers_Controller/visualiserDossier', ['id' => $dossier->getId() ]);
        }
        $stagiaires = $this->em->getRepository(FormationDossierStagiaire::class)->findBy(['dossier' => $dossier]);
        $fichier = null;
        // Ajout d'un 3eme paramètre 'FormationDossierDateRepository $formationDossierDateRepository' qui était deja present dant FormationDossierManager dans la methode CreateEmargDoc. (27/01)
        $fichier = $manager->CreateEmargDoc($dossier, $stagiaires, $formationDossierDateRepository);

        return $this->returnFile($fichier);
    }

    /**
     * @Route("/dossier/{id}/devis-papier", name="Formation_Dossier_Devis_Papier")
     * @param FormationDossier $dossier
     * @param VilleRepository $villeRepository
     * @param FormationDossierManager $manager
     *
     * @return JsonResponse|Response
     */
    public function devisPapier(
        FormationDossier $dossier,
        VilleRepository $villeRepository,
        FormationDossierManager $manager,
        ContactManager $contactManager,
        EntityManagerInterface $em,
        FormationDossierDateManager $formationDossierDateManager,
        FormationDossierDateRepository $formationDossierDateRepository
    ) {
    
        $client = !in_array($dossier->getIdClient()->getId(), [75530]) ? $dossier->getIdClient() : null;
        
        if (!$client) {
            $this->addFlash('danger', 'Veuillez renseigner le client associé au dossier !');
            //return $this->redirectToRoute('Liste_Dossiers_Controller');
            return $this->redirectToRoute('Liste_Dossiers_Controller/visualiserDossier', ['id' => $dossier->getId() ]);
        }
        
        $aFDStagiaire = $this->em->getRepository(FormationDossierStagiaire::class)->findBy(['dossier' => $dossier]);
        $stagiaires = [];
        foreach ($aFDStagiaire as $fDStagiaire) {
            $stagiaires[] = $fDStagiaire->getStagiaire()->getNom() . ' ' . $fDStagiaire->getStagiaire()->getPrenom();
        }
        $contactdata = $contactManager->preparebdcdata($client);

        $adresse = $client->getAdresses();
        //$aAdresse = [];
        $aAdresse = '';
        // APR-148 : Code postal manquant dans devis papier
        $oVille = null;
        $oAdresse = null;
        
        foreach ($adresse as $adr) {
            $oVille = ($adr->getIdVille()) ? $villeRepository->find($adr->getIdVille()) : '';
            $aAdresse = $adr->getAdresse();
            $oAdresse = $adr;
        }
        
        //APR-161 : Mises en forme
        //$oDatesFormation = $datestagecomplet = $this->em->getRepository(FormationDossierDate::class)->getDossierDate($dossier->getId());
        $oDatesFormation = $datestagecomplet = $formationDossierDateRepository->getDossierDate($dossier->getId());

        if (1 === count($datestagecomplet) && $datestagecomplet[0]["joursSemaine"] != null && $datestagecomplet[0]["nbH"] != null) {
            $datestagecomplet = $manager->generatenewdate($datestagecomplet);
        }

        // Calendrier de stage
        //$aDatesStage = $em->getRepository(FormationDossierDate::class)->getDossierDate($dossier->getId());
        $aDatesStage = $formationDossierDateRepository->getDossierDate($dossier->getId());

        $aFormatedDatesStage = $formationDossierDateManager->formatFormationDates($aDatesStage);

        $aNbJoursEtHeures = $manager->calculNbJetHr($datestagecomplet);
        $calendrier = $manager->generatedateformationdossier($datestagecomplet);
        $dateStage = $calendrier[1];
        $sCalendrier = '';
        
        foreach ($dateStage as $key => $value) {
            $calTxt = "";
            
            foreach ($value as $indice => $jour) {
                
                $calTxt .= $jour;
                
                if ($indice < count($value) - 1) {
                    $calTxt .= ",";
                }
            }
            $calTxt .= " " . $key;
            $sCalendrier .= "/" . $calTxt;
        }
        
        $sCalendrier = ltrim($sCalendrier, "/");

        $fDureeJours = floatval(str_replace(",", ".", $dossier->getDureeJours()));

        $devisPapier = $manager->generateDevisPapier([
            'dossier' => $dossier,
            'client' => $client->getNomStr(),
            'adresse' => $aAdresse,
            'o_adresse' => $oAdresse,
            'ville' => $oVille,
            'stagiaires' => $stagiaires,
            //'duree_par_stagiaire' => ($dossier->getNbStagiaires()) ? $fDureeJours / $dossier->getNbStagiaires() : $fDureeJours,
            'duree_par_stagiaire' => $dossier->getDureeHeures(), // APR-208
            'montant_ht' => $dossier->getMntDemande(),
            'montant_tva' => (float) $dossier->getMntDemande() * 0.2,
            'montant_ttc' => (float) $dossier->getMntDemande() * 0.2 + (float) $dossier->getMntDemande(),
            'calendrier' => $sCalendrier,
            'aNbJoursEtHeures' => $aNbJoursEtHeures,
            'o_dates_formation' => $oDatesFormation,
            'formated_dates_stage' => $aFormatedDatesStage
        ]);

        return $this->returnFile($devisPapier);
    }

    /**
     * @Route("/dossier/{id}/convocation", name="Formation_Dossier_ConvProform")
     * @param FormationDossier $dossier
     * @param VilleRepository $villeRepository
     * @param FormationDossierManager $manager
     *
     * @return JsonResponse|Response
     */
    public function convProfom(
        FormationDossier $dossier,
        VilleRepository $villeRepository,
        FormationDossierManager $manager,
        ContactManager $contactManager,
        EntityManagerInterface $em,
        FormationDossierDateManager $formationDossierDateManager,
        FormationDossierDateRepository $formationDossierDateRepository
    ) {
    
        $client = !in_array($dossier->getIdClient()->getId(), [75530]) ? $dossier->getIdClient() : null;
        
        if (!$client) {
            $this->addFlash('danger', 'Veuillez renseigner le client associé au dossier !');
            //return $this->redirectToRoute('Liste_Dossiers_Controller');
            return $this->redirectToRoute('Liste_Dossiers_Controller/visualiserDossier', ['id' => $dossier->getId() ]);
        }
        
        $aFDStagiaire = $this->em->getRepository(FormationDossierStagiaire::class)->findBy(['dossier' => $dossier]);
        $contactdata = $contactManager->preparebdcdata($client);

        
        //APR-161 : Mises en forme
        //$oDatesFormation = $datestagecomplet = $this->em->getRepository(FormationDossierDate::class)->getDossierDate($dossier->getId());
        $oDatesFormation = $datestagecomplet = $formationDossierDateRepository->getDossierDate($dossier->getId());

        if (1 === count($datestagecomplet) && $datestagecomplet[0]["joursSemaine"] != null && $datestagecomplet[0]["nbH"] != null) {
            $datestagecomplet = $manager->generatenewdate($datestagecomplet);
        }
        // Calendrier de stage
        //$aDatesStage = $em->getRepository(FormationDossierDate::class)->getDossierDate($dossier->getId());
        $aDatesStage = $formationDossierDateRepository->getDossierDate($dossier->getId());

        $aFormatedDatesStage = $formationDossierDateManager->formatFormationDates($aDatesStage);
        $SST = "- Pièce d'identité <w:br/>- 1 photo";
        $MACSST = "- Pièce d'identité <w:br/>- 1 photo <w:br/>- Carte SST";
        $SSIAP1 = "- Pièce d'identité <w:br/>- 2 photos aux normes passeport <w:br/>- SST en cours de validité <w:br/>- Certificat médical conforme – de 3 mois.";
        $RecyclageSSIAP1 = "- Pièce d'identité <w:br/>- Diplôme SSIAP1 et son dernier Recyclage ou équivalent <w:br/>- attestation employeur 1607h sur les 36 derniers mois <w:br/>- SST en cours de validité.";
        $ranSSIAP1 = "- Pièce d'identité <w:br/>- Diplôme SSIAP1 et son dernier Recyclage ou équivalent <w:br/>- Certificat médical conforme – de 3 mois <w:br/>- SST en cours de validité.";
        $SSIAP2 = "- Pièce d'identité <w:br/>- 2 photos aux normes passeport <w:br/>- Diplôme SSIAP1 et son dernier Recyclage <w:br/>- SST en cours de validité <w:br/>- Certificat médical conforme – de 3 mois.";
        $RecyclageSSIAP2 = "Pièce d'identité <w:br/>- Diplôme SSIAP2 et son dernier Recyclage <w:br/>- SST en cours de validité <w:br/>- Attestation employeur 1607h sur les 36 derniers mois.";
        $ranSSIAP2 = "- Pièce d'identité <w:br/>- Diplôme SSIAP2 et son dernier Recyclage <w:br/>- SST en cours de validité <w:br/>- Certificat médical conforme – de 3 mois.";
        $SSIAP3 = "- Pièce d'identité <w:br/>- 2 photos aux normes passeport <w:br/>- Diplôme SSIAP2, son dernier Recyclage ou diplôme de niveau 4 délivré par éducation nationale <w:br/>- SST en cours de validité.";
        $RecyclageSSIAP3 = "Pièce d'identité <w:br/>- Diplôme SSIAP3, son dernier Recyclage <w:br/>- SST en cours de validité <w:br/>- Attestation employeur 1607h sur les 36 derniers mois.";
        $ranSSIAP3 = "- Pièce d'identité <w:br/>- Diplôme SSIAP3, son dernier Recyclage <w:br/>- SST en cours de validité.";

        //dd($SST);
        $aNbJoursEtHeures = $manager->calculNbJetHr($datestagecomplet);
        $calendrier = $manager->generatedateformationdossier($datestagecomplet);
        $dateStage = $calendrier[1];
        $sCalendrier = '';
        
        foreach ($dateStage as $key => $value) {
            $calTxt = "";
            
            foreach ($value as $indice => $jour) {
                
                $calTxt .= $jour;
                
                if ($indice < count($value) - 1) {
                    $calTxt .= ",";
                }
            }
            $calTxt .= " " . $key;
            $sCalendrier .= "/" . $calTxt;
        }
        
        $sCalendrier = ltrim($sCalendrier, "/");
      
        $fDureeJours = floatval(str_replace(",", ".", $dossier->getDureeJours()));

        $convProform = $manager->generateConvocPro([
            'dossier' => $dossier,
            'client' => $client->getNomStr(),
            'stagiaires' => $aFDStagiaire,
            //'duree_par_stagiaire' => ($dossier->getNbStagiaires()) ? $fDureeJours / $dossier->getNbStagiaires() : $fDureeJours,
            'duree_par_stagiaire' => $dossier->getDureeHeures(), // APR-208
            'montant_ht' => $dossier->getMntDemande(),
            'montant_tva' => (float) $dossier->getMntDemande() * 0.2,
            'montant_ttc' => (float) $dossier->getMntDemande() * 0.2 + (float) $dossier->getMntDemande(),
            'calendrier' => $sCalendrier,
            'aNbJoursEtHeures' => $aNbJoursEtHeures,
            'o_dates_formation' => $oDatesFormation,
            'formated_dates_stage' => $aFormatedDatesStage,
            'SST' => $SST,
            'MACSST' => $MACSST,
            'SSIAP1' => $SSIAP1,
            'RecyclageSSIAP1' => $RecyclageSSIAP1,
            'ranSSIAP1' => $ranSSIAP1,
            'SSIAP2' => $SSIAP2,
            'RecyclageSSIAP2' => $RecyclageSSIAP2,
            'ranSSIAP2' => $ranSSIAP2,
            'SSIAP3' => $SSIAP3,
            'RecyclageSSIAP3' => $RecyclageSSIAP3,
            'ranSSIAP3' => $ranSSIAP3

        ]);

        return $this->returnFile($convProform);
    }
}
