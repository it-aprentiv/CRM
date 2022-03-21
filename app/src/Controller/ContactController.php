<?php

namespace App\Controller;

use App\Constants\ContactType as ContactTypeConst;
use App\Constants\Menu;
use App\Constants\Structure;
use App\Entity\Adresse;
use App\Entity\Contact;
use App\Form\ContactLiteType;
use App\Entity\ContactNote;
use App\Entity\ContactType as ContactType2;
use App\Entity\Filter\ContactFilter;
use App\Entity\FormationDossier;
use App\Entity\FormationDossierDate;
use App\Entity\FormationDossierStagiaire;
use App\Entity\Mail;
use App\Entity\Propal;
use App\Entity\SecteurActivite;
use App\Entity\SocieteLiee;
use App\Entity\Telephone;
use App\Entity\Url;
use App\Entity\Ville;
use App\Form\ContactFilterType;
use App\Form\ContactType;
use App\Form\StagiaireType;
use App\Manager\ContactManager;
use App\Manager\FormationDossierDateManager;
use App\Repository\ContactRepository;
use App\Repository\FormationDossierDateRepository;
use App\Repository\FormationDossierRepository;
use App\Repository\TelephoneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\ParameterBag;

use function dump;

/**
 * Gestion client / prospect (contacts)
 */
class ContactController extends BaseController
{

    const TYPE_TELEPHONE = 1;
    const TYPE_FAX = 3;
    const TYPE_PORTABLE = 4;
    const TABLE_CONTACT = "1_contact";
    const TYPE_OPCA = 3;


    /**
     *
     * @Route("/contact", name="Liste_Client_Prospect_Controller")
     */
    public function index(
        ContactRepository $contactRepository,
        PaginatorInterface $paginator,
        Request $request,
        FormFactoryInterface $form
    ) {
        // Filtrer les contacts (client ou prospect)

        $contactFilter = new ContactFilter();

        $contactFilterForm = $this->createForm(ContactFilterType::class, $contactFilter, [
            'method' => 'GET'
        ]);

        $contactFilterForm->handleRequest($request);

        $this->viewParams['contact_filter_form'] = $contactFilterForm->createView();

        // Initialisation du filtre type de contact
        // Filtre le type de contact : tableau [1, 2] 
        // Afficher seulement les contacts de type client (1) ou prospect (2)
        if (!$contactFilter->getIdType()) {
            $contactFilter->setIdType([1, 2]);
        }

        $contactsQuery = $contactRepository->findContactsQuery($contactFilter);
        $pagination = $paginator->paginate($contactsQuery, $request->query->get('page', 1), 10);
        $reflectionProperty = new \ReflectionProperty(ParameterBag::class, "parameters");
        $reflectionProperty->setAccessible(true);
        $params =  $reflectionProperty->getValue($request->request);
        $this->viewParams['pagination'] = $pagination;
        foreach ($pagination as $ctt) { 
            $contact = $this->em->getRepository(Contact::class)->find($ctt["contact_id"]);
            $contactForm = $form->createNamed("contact_lite_" . $ctt["contact_id"],ContactLiteType::class, $contact, ["method" => "POST", "attr" => ["id" => "contactgenerale" . $ctt["contact_id"]]]);
            $contactForm->handleRequest($request);
            $this->viewParams['contact_forme'][$ctt["contact_id"]] = $contactForm->createView();
            if (count($params) > 0) {                    
                if ($contactForm->isSubmitted()) {            
                    if ($ctt["contact_id"] == $params["contact_lite_" . $ctt["contact_id"]]["id"]) {
                        $this->denyAccessUnlessGranted('edit', Menu::MENU_CLIENT_PROSPECT);
                        // APR-121
                        $this->em->persist($contact);
                        $this->em->flush();
                        $this->addFlash('success', 'Client/Prospect Modifié avec succés!');
                        $this->viewParams['contact_forme'][$ctt["contact_id"]] = $contactForm->createView();
                    }
                }
            }
        }
        $query = $reflectionProperty->getValue($request->query);
        if(count($params) > 0){
            return $this->redirectToRoute("Liste_Client_Prospect_Controller",$query);
        }
        $this->viewParams['can_edit'] = $this->isGranted('edit', Menu::MENU_CLIENT_PROSPECT);
        $this->viewParams['can_view'] = $this->isGranted('view', Menu::MENU_CLIENT_PROSPECT);
        return $this->render('contact/index.html.twig', $this->viewParams);
    }

    /**
     * Création de client ou de prospect
     *
     * @Route("/contact/creation", name="Fiche_client_prospect_Controller/ajoutclient")
     */
    public function create(Request $request, EntityManagerInterface $em, ContactManager $contactmanager)
    {
        $this->denyAccessUnlessGranted('edit', Menu::MENU_CLIENT_PROSPECT);
        $contact = new Contact();
        $adresse = new Adresse();
        $contact->addAdress($adresse);


        $nom = $request->query->get('nom');
        $prenom = $request->query->get('prenom');
        $tel = $request->query->get('tel');
        $mail = $request->query->get('mail');
        $idCivilite = $request->query->get('id_civilite');
        $idCommercial = $request->query->get('id_commercial');
        $idType = $request->query->get('id_type');
        //$ville = $request->query->get('ville');
        $societe = $request->query->get('societe');
        $nomprenom = $request->query->get('nomprenom');


        if (!empty($nomprenom)) {
            $contact->setNomStr($nomprenom);
        }
        /*if (!empty($ville)) {
            $contact->setIdVille($ville);
            
        }*/
        if (!empty($societe)) {
            $contact->setNomStr($societe);
        }
        if (!empty($nom)) {
            $contact->setNom($nom);
        }
        if (!empty($prenom)) {
            $contact->setPrenom($prenom);
        }
        if (!empty($tel)) {
            $contact->setTelephone($tel);
        }
        if (!empty($mail)) {
            $contact->setEmail($mail);
        }
        if (!empty($idCivilite)) {
            $contact->setIdCivilite($idCivilite);
        }
        if (!empty($idCommercial)) {
            $commercial = $em->getRepository(\App\Entity\Collaborateur::class)->find($idCommercial);
            $contact->setIdCommercial($commercial);
        } else {
            $idUser = $this->security->getUser()->getIdutilisateur();
            $commercial = $em->getRepository(\App\Entity\Collaborateur::class)->findBy(["idUser" => $idUser]);
            $contact->setIdCommercial($commercial[0]);
        }

        if (!empty($idType)) {
            $type = $em->getRepository(\App\Entity\ContactType::class)->find($idType);
            $contact->setIdType($type);
        }

        $contactForm = $this->createForm(ContactType::class, $contact, ['method' => 'POST']);
        $contactForm->handleRequest($request);

        if ($contactForm->isSubmitted()) {
            // APR-121
            $contact->setIdSecteur($request->request->all()['contact']['idSecteur']);
            $contact->setActiviteTns($request->request->all()['contact']['activiteTns']);
            if (!$contact->getCommercial()) {
                $commercial = $em->getRepository(\App\Entity\Collaborateur::class)->find($idCommercial);
                $contact->setIdCommercial($commercial);
            }
            $site = $contact->getSiteweb();
            if (null !== $site && '' != $site) {
                $em->persist($site);
                $em->flush();
                $contact->setSiteweb($site);
            }
            if ('' == $site) {
                $contact->setSiteweb(null);
            }
            $contact->setDateMaj(null);
            $contact->setDateAdd(null);
            $em->persist($contact);
            $em->flush();

            if (is_object($site)) {
                $site->setIdContact($contact->getId());
                $em->persist($site);
                $em->flush();
            }

            $societelie = $contact->getSocietelie()->get("__name__");
            if (null !== $societelie) {
                $societelie->setIdContact($contact->getId());
                $em->persist($societelie);
                $em->flush();
            }
            foreach ($contact->getContactsoc() as $contactlie) {
                $contactlie->setContactLiee($contact);
                $em->persist($contactlie);
            }
            $em->flush();
            $acontact[] = $contact;
            if (count($contact->getContactsoc()) > 0) {
                $acontact = array_merge($acontact, $contact->getContactsoc()->getValues());
            }
            $contactmanager->addContactSocData($acontact);

            return $this->redirectToRoute("Liste_Client_Prospect_Controller");
        }
        $this->viewParams['contact_forme'] = $contactForm->createView();

        return $this->render('contact/create.html.twig', $this->viewParams);
    }

    /**
     * @Route("/contact/{id}/edition",
     *      name="Fiche_client_prospect_Controller/editClient",
     *      requirements={"page"="\d+"}
     * )
     */
    public function edit(EntityManagerInterface $em, Request $request, Contact $contact, ContactManager $contactmanager)
    {
        $this->denyAccessUnlessGranted('view', Menu::MENU_CLIENT_PROSPECT);
        $siteweb = $em->getRepository(Url::class)->findOneBy(["idContact" => $contact->getId()]);
        if (!is_null($siteweb)) {
            $contact->setSiteweb($siteweb);
        }

        $otheradresse = $em->getRepository(Adresse::class)->findBy(["idContact" => $contact->getId()]);
        if (count($otheradresse) > 0) {
            foreach ($otheradresse as $adres) {
                $contact->addAdress($adres);
            }
        }
        if (0 === count($otheradresse)) {
            $adresse = new Adresse();
            $contact->addAdress($adresse);
        }
        $this->viewParams["adressesvilledata"] = array();
        foreach ($contact->getAdresses()->getValues() as $adres) {
            $this->viewParams["adressesvilledata"][] = $adres->getIdVille();
        }

        $nomContact = $contact->getId();
        $dossierClient = $this->em->getRepository(FormationDossier::class)->getAllContactDossier($nomContact);
        //dd($dossierClient);
        $this->viewParams["dossierClient"] = $dossierClient;

        $idContact = $contact->getId();
        $clientPropal = $this->em->getRepository(Propal::class)->getContactPropal($idContact);
        $this->viewParams["clientPropal"] = $clientPropal;

        $societelie = $this->em->getRepository(SocieteLiee::class)->findOneBy(["idContact" => $contact->getId()]);
        $sl = new ArrayCollection();
        $this->viewParams["contact"] = $contact;
        $this->viewParams["societeliedata"] = array();
        if (null != $societelie) {
            $sl["__name__"] = $societelie;
            $scl1 = $societelie->getIdSociete1() != null ? $this->em->find(Contact::class, $societelie->getIdSociete1()) : null;
            $scl2 = $societelie->getIdSociete2() != null ? $this->em->find(Contact::class, $societelie->getIdSociete2()) : null;
            $scl3 = $societelie->getIdSociete3() != null ? $this->em->find(Contact::class, $societelie->getIdSociete3()) : null;
            $scl4 = $societelie->getIdSociete4() != null ? $this->em->find(Contact::class, $societelie->getIdSociete4()) : null;
            $this->viewParams["societeliedata"] = array(
                "societelie1" => $scl1 != null ? $scl1->getNomStr() : null,
                "societelie2" => $scl2 != null ? $scl2->getNomStr() : null,
                "societelie3" => $scl3 != null ? $scl3->getNomStr() : null,
                "societelie4" => $scl4 != null ? $scl4->getNomStr() : null,

                "societeId1" => $scl1 != null ? $scl1->getId() : null,
                "societeId2" => $scl2 != null ? $scl2->getId() : null,
                "societeId3" => $scl3 != null ? $scl3->getId() : null,
                "societeId4" => $scl4 != null ? $scl4->getId() : null,
            );
        }
        $opca1 = $contact->getOpca();
        $opcaTns = $contact->getIdOpcaTns() ? $contact->getIdOpcaTns() : null;
        $oOpcaTns = $opcaTns ? $this->em->getRepository(Contact::class)->findOneBy(array('nomStr' => $opcaTns, 'idType' => 3)) : null;
        $opcaTnsOptions = $oOpcaTns ? array('id' => $oOpcaTns->getId(), 'text' => $oOpcaTns->getNomStr()) : null;

        $this->viewParams["opca1"] = $opca1 ? array('id' => $opca1->getId(), 'text' => $opca1->getNomStr()) : null;
        $this->viewParams["idOpcaTns"] = $opcaTnsOptions;

        // APR-121 : Activite entreprise => Autocompletion
        $idSecteurActivite = $contact->getIdSecteur();
        $secteurActite = $idSecteurActivite ? $this->em->getRepository(SecteurActivite::class)->findOneBy([
            'id' => $idSecteurActivite
        ]) : null;
        $secteurActiteOptions = $secteurActite ? [
            'id' => $idSecteurActivite,
            'text' => $secteurActite->getSecteur()
        ] : null;
        $this->viewParams['secteurActiviteOptions'] = $secteurActiteOptions;

        // APR-121 : Activite TNS => Autocompletion
        $sActiviteTNSLabel = $contact->getActiviteTns();
        $activiteTNS = $sActiviteTNSLabel ? $this->em->getRepository(SecteurActivite::class)->findOneByIdOrLabel($sActiviteTNSLabel) : null;
        $this->viewParams['activiteTNSOptions'] = $activiteTNS ? [
            'id' => $activiteTNS->getId(),
            'text' => $activiteTNS->getSecteur()
        ] : null;

        $contact->setSocietelie($sl);

        $othercontact = $em->getRepository(Contact::class)->findBy(["contactLiee" => $contact->getId()]);
        $acontact[] = $contact;
        if (count($othercontact) > 0) {
            $acontact = array_merge($acontact, $othercontact);
        }

        $contactmanager->setContactSocData($acontact);
        $contactForm = $this->createForm(ContactType::class, $contact, ["method" => "POST", "attr" => ["id" => "contactgenerale", "editform" => $contact->getCommercial()]]);
        $contactForm->handleRequest($request);

        if ($contactForm->isSubmitted()) {
            $this->denyAccessUnlessGranted('edit', Menu::MENU_CLIENT_PROSPECT);
            // APR-121
            $contact->setIdSecteur($request->request->all()['contact']['idSecteur']);
            $contact->setActiviteTns($request->request->all()['contact']['activiteTns']);

            $site = $contact->getSiteweb();
            if (null !== $site && '' != $site) {
                $sitedn = $em->getRepository(Url::class)->findOneBy(["idContact" => $contact->getId()]);
                if (null != $sitedn) {
                    $update = $em->getRepository(Url::class)->updatecontactsiteweb($sitedn->getId(), $site->getUrl());
                    $site = $sitedn;
                } else {
                    $em->persist($site);
                    $em->flush();
                }
                $contact->setSiteweb($site);
            } elseif ($site == '') {
                $contact->setSiteweb(null);
            }

            $em->persist($contact);
            $em->flush();

            if (is_object($site)) {
                $site->setIdContact($contact->getId());
                $em->persist($site);
                $em->flush();
            }

            $societelie = $contact->getSocietelie()->get("__name__");
            if (null !== $societelie) {
                $societelie->setIdContact($contact->getId());
                $slold = $this->em->getRepository(SocieteLiee::class)->findOneBy(["idContact" => $contact->getId()]);
                if (null != $slold) {
                    $update = $this->em->getRepository(SocieteLiee::class)->updatecontactsocieteliee($slold->getId(), $societelie);
                } else {
                    $em->persist($societelie);
                }
                $em->flush();
            }

            $oldcontactsoc = $em->getRepository(Contact::class)->findBy(["contactLiee" => $contact->getId()]);
            $newcontaactsoc = $contact->getContactsoc();
            foreach ($newcontaactsoc as $contactlie) {
                $contactlie->setContactLiee($contact);
                $em->persist($contactlie);
            }
            $contactmanager->addContactSocData(array_merge(array($contact), $newcontaactsoc->getValues()));
            if (0 === count($newcontaactsoc) && count($oldcontactsoc) > 0) {
                foreach ($oldcontactsoc as $cntold) {
                    $cntold->setContactLiee(null);
                    $em->persist($cntold);
                    $em->flush();
                }
            } elseif (count($oldcontactsoc) > count($newcontaactsoc->getValues())) {
                foreach ($oldcontactsoc as $cntold) {
                    foreach ($newcontaactsoc as $ctnnew) {
                        if ($cntold->getId() != $ctnnew->getId()) {
                            $cntold->setContactLiee(null);
                            $em->persist($cntold);
                            $em->flush();
                        }
                    }
                }
            }
            $oldadresses = $em->getRepository(Adresse::class)->findBy(["idContact" => $contact->getId()]);
            $newadresses = $contact->getAdresses();
            if (count($oldadresses) > count($newadresses)) {
                foreach ($oldadresses as $adressold) {
                    foreach ($newadresses as $adressnew) {
                        if ($adressold->getId() != $adressnew->getId()) {
                            $adressold->setIdContact(null);
                            $em->persist($adressold);
                            $em->flush();
                        }
                    }
                }
            }
            $this->addFlash('success', 'Client/Prospect Modifié avec succés!');
            return $this->redirectToRoute('Fiche_client_prospect_Controller/editClient', array('id' => $contact->getId()));
        }
        $this->viewParams['contact_forme'] = $contactForm->createView();

        return $this->render('contact/edit.html.twig', $this->viewParams);
    }

    /**
     * @Route("/contact/{id}/delete",
     *     name="Client_Prospect_Delete",
     *     requirements={"page"="\d+"}
     * )
     */
    public function delete(Request $request, $id, ContactManager $contactmanager)
    {
        $this->denyAccessUnlessGranted('edit', Menu::MENU_CLIENT_PROSPECT);
        try {
            $delete = $contactmanager->deletecontact($id);
            if ($delete) {
                return new JsonResponse(
                    array(
                        'status' => 'Success',
                        'message' => 'Line successfully Deleted'
                    ),
                    200
                );
            } else {
                return new JsonResponse(
                    array(
                        'status' => 'Error',
                        'message' => 'Le Contact ne peut pas être supprimé car rattaché à d\'autres informations (Dossier, formations, ...)'
                    ),
                    200
                );
            }
        } catch (DBALException $e) {
            return new JsonResponse(
                array(
                    'status' => 'Error',
                    'message' => "Le Contact ne peut pas être supprimé car rattaché à d'autres informations (Dossier, formations, ...)"
                ),
                200
            );
        } catch (Exception $e) {
            return new JsonResponse(
                array(
                    'status' => 'Error',
                    'message' => "Le Contact ne peut pas être supprimé car rattaché à d'autres informations (Dossier, formations, ...)"
                ),
                200
            );
        }
    }

    /**
     * Retourne une liste de société utilisé pour gerer l'autocompletion des select liste des societes
     *
     * @Route("/contact/societe/list", name="crm.contact.societe.asynch-search", methods={"GET","POST"})
     */
    public function asynchFindSocietes(Request $request, ContactRepository $contactRepository)
    {
        $response = array();
        $searchTerm = $request->query->get('search', '');

        if (trim(strlen($searchTerm)) >= 3) {
            $societes = $contactRepository->getSocietes($searchTerm);

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
     * Retourne le résultat liste contact par type en Json
     *
     * @Route("/contact/search-contact", name="crm.contact.client.search_json", methods={"GET"})
     */
    public function searchContactByTypeJson(Request $request, ContactRepository $contactRepository)
    {
        $sSearchQuery = $request->query->get('search', '');
        $sLimit = $request->query->get('limit', 50);
        $sType = $request->query->get('type', '');
        $aType = ContactTypeConst::ALL_TYPE;
        if (array_key_exists($sType, $aType)) {
            $iType = $aType[$sType];
        } else {
            $iType = 0;
        }

        $sStructure = $request->query->get('structure', '');
        $aTypeStructure = Structure::TYPE_STRUCTURE;
        if (array_key_exists($sStructure, $aTypeStructure)) {
            $iStructure = $aTypeStructure[$sStructure];
        } else {
            $iStructure = null;
        }

        $aResult = $contactRepository->searchByType($iType, $sSearchQuery, $sLimit, $iStructure);

        return new JsonResponse($aResult);
    }

    /**
     * @Route("/contact/opca/modaladd", name="opca.modal.add", methods={"POST"})
     */
    public function OpcaModalAdd(Request $request, EntityManagerInterface $em, ContactManager $contactmanager)
    {
        $contact = new Contact();
        $adresse = new Adresse();
        $contact->addAdress($adresse);
        $contactForm = $this->createForm(ContactType::class, $contact, ['method' => 'POST', 'attr' => ['id' => 'opcamodaladd']]);
        $contactForm->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($contactForm->isSubmitted()) {
                $this->denyAccessUnlessGranted('edit', Menu::MENU_CLIENT_PROSPECT);
                try {
                    $site = $contact->getSiteweb();
                    if (null !== $site && '' != $site) {
                        $em->persist($site);
                        $em->flush();
                        $id_url = $site->getId();
                        $contact->setSiteweb($id_url);
                    }
                    if ('' == $site) {
                        $contact->setSiteweb(null);
                    }
                    $opcacontact = $em->getRepository(ContactType2::class)->findOneBy(["id" => self::TYPE_OPCA]);
                    $contact->setIdType($opcacontact);
                    $em->persist($contact);
                    $em->flush();

                    if (is_object($site)) {
                        $site->setIdContact($contact->getId());
                        $em->persist($site);
                        $em->flush();
                    }

                    $contactmanager->addContactSocData(array($contact));
                    $this->addFlash('success_message', 'OPCA : ' . $contact->getNomStr() . " ajouté");
                    return new JsonResponse([
                        "success_message" => "Nouveau OPCA ajouter",
                        "code_success" => 1,
                        "lastinsertion_id" => $contact->getId(),
                        "oopca" => $contact->getNomStr()
                    ], 200);
                } catch (Exception $ex) {
                    $this->addFlash('error_message', "l'ajout de l'opca a échoué");

                    return $this->json([
                        "error_message" => $ex->getMessage(),
                        "code_erreur" => $ex->getCode()
                    ], 500);
                }
            }
        }
        $this->viewParams['opca_form'] = $contactForm->createView();

        return $this->render('contact/opca.modal.html.twig', $this->viewParams);
    }

    /**
     * @Route("/createStagiaire", name="ajout_stagiaire")
     */
    public function createStagiaire(Request $oRequest)
    {
        $stagiaire = new Contact();
        $stagiaireForm = $this->createForm(StagiaireType::class, $stagiaire);
        $stagiaireForm->handleRequest($oRequest);
        $this->viewParams['data'] = $stagiaireForm->createView();
        if ($oRequest->isMethod('POST')) {
            if ($stagiaireForm->isSubmitted() && $stagiaireForm->isValid()) {
                return $this->redirectToRoute('Liste_Dossiers_Controller/ajoutdossier');
            }
        }

        return $this->render('stagiaire/create.html.twig', $this->viewParams);
    }

    /**
     * @Route("/contact/{id}/printdocument/{type}",
     *     name="client_prospect_printdocument",
     *     requirements={"page"="\d+","page"="\d+"})
     */
    public function printdocument(
        Contact $contact,
        int $type,
        ContactManager $manager,
        Request $request,
        FormationDossierRepository $formationDossierRepository,
        EntityManagerInterface $em,
        FormationDossierDateManager $formationDossierDateManager,
        FormationDossierDateRepository $formationDossierDateRepository
    ) {
        $fichier = null;
        switch ($type) {
            case 1:
                $fichier = $manager->createDocBDC($contact);
                break;
            case 2:
                $opca = '';

                // APR-104
                if ($contact->getOpca() instanceof Contact) {
                    $opca = $contact->getOpca()->getNomStr();
                }

                // APR-102 : ajout du bouton : Convention papier dans page Edition dossier
                $dossierId = $request->query->get('did', null);
                $dossier = null;
                $stagiaires = [];
                $aFormatedDatesStage = [];

                if ($dossierId) {
                    $dossier = $formationDossierRepository->find($dossierId);
                    // stagiaire
                    /** @var FormationDossierStagiaire[] $aFDStagiaire */
                    $aFDStagiaire = $em->getRepository(FormationDossierStagiaire::class)->findBy(['dossier' => $dossier]);

                    foreach ($aFDStagiaire as $fDStagiaire) {
                        $stagiaires[] = $fDStagiaire->getStagiaire()->getNom() . " " . $fDStagiaire->getStagiaire()->getPrenom();
                    }
                    // Calendrier de stage
                    //$aDatesStage = $em->getRepository(FormationDossierDate::class)->getDossierDate($dossierId);
                    $aDatesStage = $formationDossierDateRepository->getDossierDate($dossierId);
                    $aFormatedDatesStage = $formationDossierDateManager->formatFormationDates($aDatesStage);
                }


                $template = $this->renderView("Common\DocPrint\Contact\ConventionContent.html.twig", [
                    'opca' => $opca,
                    'dossier' => $dossier,
                    'stagiaires' => $stagiaires,
                    'formated_dates_stage' => $aFormatedDatesStage
                ]);
                // APR-209 : Fix choix structure : dépend de l'entité (Fiche client ou dossier)
                $fichier = $manager->createDocConvention($template, $contact, $dossier);
                break;
            case 3:
                $fichier = $manager->createDocRDV($contact);
                break;
            case 4:
                $template = $this->renderView('Common\DocPrint\Contact\OrderDeMission.html.twig');
                $fichier = $manager->createDocOMI($template, $contact);
                break;
        }

        return $this->returnFile($fichier);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("formation/get-adress-client",name="formation_get_address_client")
     */
    public function getAddressClientById(Request $request)
    {
        $res = [];
        $idClient = (int) $request->query->get('idClient');
        $em = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest()) {
            if ($oContact = $em->getRepository(Contact::class)->find($idClient)) {
                if ($oContact instanceof Contact && !empty($oContact->getAdresses())) {
                    $res['address'] = $oContact->getAdresses()[0] ? $oContact->getAdresses()[0]->getAdresse() : '';
                    return new JsonResponse($res);
                }
            }

            $res['error'] = sprintf("The id: %s was not found", $idClient);
            return new JsonResponse($res);
        }

        $res['error'] = "The request is not ajax";
        return new JsonResponse($res);
    }

    /**
     * Retourne le résultat liste contact par type en Json
     *
     * @Route("/contact/search-opca", name="crm.contact.opca.search_json", methods={"GET"})
     */
    public function searchOPCAByTypeJson(Request $request, ContactRepository $contactRepository)
    {
        $sSearchQuery = $request->query->get('search', '');
        $sLimit = $request->query->get('limit', 50);

        $aResult = $contactRepository->searchByOPCAType($sSearchQuery, $sLimit);

        return new JsonResponse($aResult);
    }

    /**
     *  @Route("/contact/{id}/getadresse",
     *     name="contact_get_adresse",
     *     requirements={"page"="\d+"}, methods={"GET"})
     * @param $id
     * @return JsonResponse
     */
    public function getcontactadresse($id)
    {
        $adrestr = "";
        $success = false;
        try {
            $adresses = $this->em->getRepository(Adresse::class)->findAdressesContactPrintData($id);
            foreach ($adresses as $adresse) {
                if ($adresse["principale"]) {
                    $adrestr = $adresse["adresse"] . " " . $adresse["codePostal"] . " " . $adresse["ville"];
                }
            }
            if ($adrestr == "" && count($adresses) > 0) {
                $adrestr = $adresses[0]["adresse"] . " " . $adresses[0]["codePostal"] . " " . $adresses[0]["ville"];
            }
            $success = true;
        } catch (Exception $ex) {
        }

        return new JsonResponse(["success" => $success, "adresse" => $adrestr]);
    }

    /**
     * @Route("/export/a",  name="export_ect")
     */
    public function getData(): array
    {
        $list = [];
        $leads = $this->em->getRepository(Contact::class)->findContactsQuerys();
        foreach ($leads as $lead) {
            $list[] = [
                $lead["societe"],
                $lead["nom"],
                $lead["prenom"],
                $lead["telephone"],
                $lead["email"],
                $lead["commercial"],
                $lead["type"],
                $lead["date"]->format("d/m/Y")
            ];
        }
        return $list;
    }

    /**
     * @Route("/export/prospect",  name="export_prospect")
     */
    public function export()
    {
        $streamedResponse = new StreamedResponse();
        $streamedResponse->setCallback(function () {
            $spreadsheet = $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setTitle('Prospects');
            $sheet->getCell('A1')->setValue('Société')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('B1')->setValue('Nom')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('C1')->setValue('Prenom')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('D1')->setValue('Telephone')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('E1')->setValue('Email')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('F1')->setValue('Commercial')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('G1')->setValue('Type')->getStyle()->getFont()->setBold(true);
            $sheet->getCell('H1')->setValue('Date de création')->getStyle()->getFont()->setBold(true);

            $sheet->getColumnDimension('A')->setWidth(20);
            $sheet->getColumnDimension('B')->setWidth(20);
            $sheet->getColumnDimension('C')->setWidth(20);
            $sheet->getColumnDimension('D')->setWidth(20);
            $sheet->getColumnDimension('E')->setWidth(20);
            $sheet->getColumnDimension('F')->setWidth(20);
            $sheet->getColumnDimension('G')->setWidth(20);
            $sheet->getColumnDimension('H')->setWidth(20);

            // Increase row cursor after header write
            $sheet->fromArray($this->getData(), null, 'A2', true);
            //$sheet->fromArray($this->getDataTel(),null, 'D2', true);

            $writer =  new Xlsx($spreadsheet);
            $writer->save('php://output');
        });
        $streamedResponse->setStatusCode(HttpFoundationResponse::HTTP_OK);
        $streamedResponse->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $streamedResponse->headers->set('Content-Disposition', 'attachment; filename="prospect_excract_' . date("d/m/Y") . '.xlsx"');
        return $streamedResponse->send();
        return $this->redirectToRoute('Liste_Client_Prospect_Controller');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("propal/get-adress-client",name="propal_get_address_client")
     */
    public function getAddressClientPropal(Request $request)
    {
        $res = [];
        $idClient = (int) $request->query->get('idClient');
        $em = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest()) {
            if ($oContact = $em->getRepository(Contact::class)->find($idClient)) {
                if ($oContact instanceof Contact && !empty($oContact->getAdresses())) {
                    $res['address'] = isset($oContact->getAdresses()[0]) ? $oContact->getAdresses()[0]->getAdresse() : '';
                    $res['codePostal'] = isset($oContact->getAdresses()[0]) ? $oContact->getAdresses()[0]->getCodePostal() : '';
                    $res['telephone'] = "";
                    $res['mail'] = "";
                    $tel = $this->em->getRepository(Telephone::class)->findOneBy(["idContact" => $oContact->getId(), "idTypeTel" => 1]);
                    $mail = $this->em->getRepository(Mail::class)->findOneBy(["idContact" => $oContact->getId()]);

                    if ($tel instanceof Telephone) {
                        $res['telephone'] = $tel->getTel();
                    }

                    if ($mail instanceof Mail) {
                        $res['mail'] = $mail->getMail() != "@" ? $mail->getMail() : "";
                    }

                    $idVille = $oContact->getAdresses()[0] ? $oContact->getAdresses()[0]->getIdVille() : '';
                    $oVille = $em->getRepository(Ville::class)->find($idVille);
                    $res['ville']['id'] = $idVille;
                    $res['ville']['nomVille'] = $oVille ? $oVille->getNomVille() : '';
                    // APR-129 : suite commentaire
                    $res['commercial_id'] = $oContact->getCommercial() ? $oContact->getCommercial()->getId() : "";
                    $res['entite_id'] = $oContact->getStructure() ? $oContact->getStructure()->getId() : "";

                    return new JsonResponse($res);
                }
            }

            $res['error'] = sprintf("The id: %s was not found", $idClient);
            return new JsonResponse($res);
        }

        $res['error'] = "The request is not ajax";
        return new JsonResponse($res);
    }
}
