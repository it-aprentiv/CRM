<?php

namespace App\Controller;

use App\Constants\ContactType as ConstantContactType;
use App\Constants\Menu;
use App\Entity\Adresse;
use App\Entity\Contact;
use App\Entity\ContactNote;
use App\Entity\ContactType as ContactType2;
use App\Entity\Filter\OpcaFilter;
use App\Entity\Mail;
use App\Entity\OpcaNote;
use App\Entity\Telephone;
use App\Entity\Url;
use App\Form\ContactType;
use App\Form\OpcaFilterType;
use App\Form\OpcaType;
use App\Manager\ContactManager;
use App\Manager\OpcaManager;
use App\Repository\AdresseRepository;
use App\Repository\CiviliteRepository;
use App\Repository\ContactRepository;
use App\Repository\CritFinOpcaRepository;
use App\Repository\OpcaNoteRepository;
use App\Repository\SecteurActiviteRepository;
use App\Repository\UrlRepository;
use App\Repository\VilleRepository;
use DateTime;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OpcaController extends BaseController
{

    const TYPE_OPCA = 3;
    /**
     * @Route("/opca", name="OPCA_Controller")
     */
    public function index(ContactRepository $contactRepository,
                          PaginatorInterface $paginator,
                          Request $request)
    {
        // Filtrer les OPCA
        $oOpcaFilter = new OpcaFilter();
        $oOpcaFilterForm = $this->createForm(OpcaFilterType::class, $oOpcaFilter, [
            'method' => 'GET'
        ]);
        $oOpcaFilterForm->handleRequest($request);
        $this->viewParams['opca_filter_form'] = $oOpcaFilterForm->createView();
        $opcaQuery = $contactRepository->findAllOPCALine($oOpcaFilter);

        $pagination = $paginator->paginate($opcaQuery, $request->query->get('page', 1), 10);
        $this->viewParams['pagination'] = $pagination;
        $this->viewParams['controller_name'] = 'OpcaController';

        return $this->render('opca/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/opca/create", name="opca_create")
     *
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param ContactManager $contactmanager
     * @return Response
     */
    public function create(Request $request, EntityManagerInterface $em,ContactManager $contactmanager,OpcaManager $opcamanager)
    {
        $contact = new Contact();
        $adresse = new Adresse();
        $contact->addAdress($adresse);
        $comment = new ContactNote();
        $contact->addCommentaire($comment);
        $contactForm = $this->createForm(ContactType::class, $contact, ['method' => 'POST']);
        $contactForm->handleRequest($request);
        
        if($request->getMethod() == 'POST') {
            if($contactForm->isSubmitted()) {
                $this->denyAccessUnlessGranted('edit', Menu::MENU_CLIENT_PROSPECT);
                
                $contactParams = $request->request->get("contact");
                $secteurActiviteId = $contactParams['idSecteur'] ? (int)$contactParams['idSecteur']  : null;
                
                if (!$contact->getIdSecteur()) {
                    $contact->setIdSecteur($secteurActiviteId);
                }
                
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
                    foreach($contact->getContactsoc() as $contactlie) {
                        $contactlie->setContactLiee($contact);
                        $contactlie->setOpca($contact);
                        $em->persist($contactlie);
                    }
                    $arct[] = $contact;
                    if(count($contact->getContactsoc()) > 0){
                        $arct = array_merge($arct,$contact->getContactsoc()->getValues());
                    }
                    $contactmanager->addContactSocData($arct);
                    //opca_note
                    $note = count($contact->getCommentaires()) > 0 ? $contact->getCommentaires()[0]->getTexteNote() : "";
                    if($note != ''){
                        $newNote = new OpcaNote();
                        $newNote->setNotes($note);
                        $newNote->setIdOpca($contact->getId());
                        $em->persist($newNote);
                        $em->flush();
                    }
                    // Critere de financement
                    $aCritere = $request->request->get('critere');
                    if ($aCritere) {
                        if(count($aCritere) > 0) {
                            $opcamanager->handleCritereFinancement($aCritere, $contact->getId());
                        }
                    }
                    $this->addFlash('success_message', 'OPCA : ' . $contact->getNomStr() . " ajouté");
                } catch (Exception $ex) {
                    $this->addFlash('error_message', "l'ajout de l'opca a échoué");
                }
                
                return $this->redirectToRoute("OPCA_Controller");
            }
        }
        $this->viewParams['opca_form'] = $contactForm->createView();
        
        // APR-167 : Activite entreprise => Autocompletion
        $idSecteurActivite = $contact->getIdSecteur();
        $secteurActite = $idSecteurActivite ? $this->em->getRepository(\App\Entity\SecteurActivite::class)->findOneBy([
            'id' => $idSecteurActivite
        ]) : null;
        
        $secteurActiteOptions = $secteurActite ? [
            'id' => $idSecteurActivite,
            'text' => $secteurActite->getSecteur()
        ] : null;
        $this->viewParams['secteurActiviteOptions'] = $secteurActiteOptions;

        return $this->render('opca/create.html.twig', $this->viewParams);
    }
    /**
     * @Route("/opca/{idOpca}/show",
     *      name="OPCA_Controller/showOpca",
     *      requirements={"page"="\d+"}
     * )
     */
    public function show(Request $request, $idOpca,
                         ContactRepository $contactRepository,
                         CiviliteRepository $civiliteRepository,
                         CritFinOpcaRepository $critFinOpcaRepository,
                         OpcaNoteRepository $opcaNoteRepository,
                         SecteurActiviteRepository $secteurRepository,
                         AdresseRepository $adresseRepository,
                         UrlRepository $urlRepository,
                         EntityManagerInterface $em,
                         OpcaManager $manager)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $this->viewParams['detail_opca'] = $contactRepository->findOneOPCA($idOpca) ;
        $this->viewParams['detail_opca']['idVille'] = $this->viewParams['detail_opca']['idVille'] ?? 0;
        $this->viewParams['contacts_opca'] = $contactRepository->findContactsOPCA($idOpca);
        $this->viewParams['contactLiee_opca'] = $contactRepository->findContactLiee($idOpca);
        $this->viewParams['secteur_activite'] = $secteurRepository->findAll();
        $this->viewParams['civilite'] = $civiliteRepository->findAll();
        $this->viewParams['critere'] = $critFinOpcaRepository->findByIdOpca($idOpca);
        $this->viewParams['note'] = $opcaNoteRepository->findByIdOpca($idOpca);


        //objet Contact
        $opca = $contactRepository->find($idOpca);
        $siteweb = $em->getRepository(Url::class)->findOneBy(["idContact" => $opca->getId()]);
        if(!is_null($siteweb)){
            $opca->setSiteweb($siteweb);
        }
        //Adresse
        $adresse = $adresseRepository->findOneBy(array('idContact' => $idOpca)) ?? new Adresse();
        $opca->addAdress($adresse);
        $opcaContacts = $contactRepository->findBy(array('opca' => $idOpca, 'idType' => 15));
        //fax, telephone, portable, email
        $dataComplementaire = array();
        $i = 0;
        
        if (COUNT($opcaContacts) > 0) {
            foreach($opcaContacts as $opcaContact) {
                $oMail = $entityManager->getRepository(Mail::class)->findOneBy(array('idContact' => $opcaContact->getId())) ?? new Mail();
                $dataComplementaire[$i]['email']  = $oMail->getMail() === '@' ? '' : $oMail->getMail();
                $oFax = $entityManager->getRepository(Telephone::class)->findOneBy(array('idContact' => $opcaContact->getId() ,'idTypeTel' => 4)) ?? new Telephone();
                $dataComplementaire[$i]['fax']  = $oFax->getTel();
                $oPortable = $entityManager->getRepository(Telephone::class)->findOneBy(array('idContact' => $opcaContact->getId() ,'idTypeTel' => 3)) ?? new Telephone();
                $dataComplementaire[$i]['portable']  = $oPortable->getTel();
                $oTelephone = $entityManager->getRepository(Telephone::class)->findOneBy(array('idContact' => $opcaContact->getId() ,'idTypeTel' => 1)) ?? new Telephone();
                $dataComplementaire[$i]['telephone']  = $oTelephone->getTel();
                $opca->addOpcas($opcaContact);
                $i++;
            }
        } else {
            $opcaContact = new Contact();
            $dataComplementaire[$i]['email']  = '';
            $dataComplementaire[$i]['fax']  = '';
            $dataComplementaire[$i]['portable']  = '';
            $dataComplementaire[$i]['telephone']  = '';
            $opca->addOpcas($opcaContact);
        }
        
        // APR-155 : Gestion 
        $aOpcaContacts = [];
        
        foreach ($opcaContacts as $opcaContact) {
            $aOpcaContacts[$opcaContact->getId()] = $opcaContact;
        }
        
        $this->viewParams['nbOpcaContact'] = $i == 0 ? 1 : $i;
        $this->viewParams['dataComplementaire'] = $dataComplementaire;
//        $opcaTemp = clone $opca;
        $contactForm = $this->createForm(OpcaType::class, $opca, ['method' => 'POST']);
        $contactForm->handleRequest($request);
        $this->viewParams['opca_form'] = $contactForm->createView();

        if ( $contactForm->isSubmitted() ) {
            //data formulaire
            $opcaData = $contactForm->getData();
            // siteweb
            $site = $opca->getSiteweb();
            if( null !== $site && '' != $site) {
                $sitedn = $em->getRepository(Url::class)->findOneBy(["idContact" => $opca->getId()]);
                if(null != $sitedn){
                    $update = $em->getRepository(Url::class)->updatecontactsiteweb($sitedn->getId(),$site->getUrl());
                    $site = $sitedn;
                }
                else{
                    $em->persist($site);
                    $em->flush();
                }
                $opca->setSiteweb($site);
                $site->setIdContact($opca->getId());
            }
            elseif($site == ''){
                $opca->setSiteweb(null);
            }
            //Adresse
            $adresse = $adresseRepository->findOneBy(array('idContact' => $idOpca));
            if ($adresse) {
                $adresse->setAdresse($opcaData->getAdresses()[0]->getAdresse());
                $adresse->setCompAdresse($opcaData->getAdresses()[0]->getCompAdresse());
                $adresse->setIdVille($opcaData->getAdresses()[0]->getIdVille());
                $adresse->setCodePostal($opcaData->getAdresses()[0]->getCodePostal());
            } else {
                if ('' != $opcaData->getAdresses()[0]->getAdresse() || ''!= $opcaData->getAdresses()[0]->getCompAdresse()
                    || '' != $opcaData->getAdresses()[0]->getIdVille() || ''!= $opcaData->getAdresses()[0]->getCodePostal()) {
                    $adresse = new Adresse();
                    $adresse->setAdresse($opcaData->getAdresses()[0]->getAdresse());
                    $adresse->setCompAdresse($opcaData->getAdresses()[0]->getCompAdresse());
                    $adresse->setIdVille($opcaData->getAdresses()[0]->getIdVille());
                    $adresse->setCodePostal($opcaData->getAdresses()[0]->getCodePostal());
                    $em->persist($adresse);
                }
            }


            //OPCA
            $opca->setNomStr($opcaData->getNomStr());
            $opca->setIdSecteur($opcaData->getIdSecteur());

            //not in formtype
            //mail opca
            $email = $request->request->get('email2');
            $oMail = $entityManager->getRepository(Mail::class)->findOneBy(array('idContact' => $idOpca));
            if($oMail) {
                $oMail->setMail($email);
            } else {
                $newMail = new Mail();
                $newMail->setMail($email);
                $newMail->setIdContact($opca);
                $em->persist($newMail);
            }
            //fax opca
            $fax = $request->request->get('fax9');
            $oFax = $entityManager->getRepository(Telephone::class)->findOneBy(array('idContact' => $idOpca ,'idTypeTel' => 4));
            if($oFax) {
                $oFax->setTel($fax);
            } else {
                if($fax != ''){
                    $newFax = new Telephone();
                    $newFax->setTel($fax);
                    $newFax->setIdTypeTel(4);
                    $newFax->setIdContact($opca->getId());
                    $newFax->setDateAdd(new DateTime());
                    $em->persist($newFax);
                }
            }
            //Telephone opca
            $telephone = $request->request->get('telephone9');
            $oTel = $entityManager->getRepository(Telephone::class)->findOneBy(array('idContact' => $idOpca ,'idTypeTel' => 1));
            if($oTel) {
                $oTel->setTel($telephone);
            } else {
                if($telephone != ''){
                    $oTel = new Telephone();
                    $oTel->setTel($telephone);
                    $oTel->setIdTypeTel(1);
                    $oTel->setIdContact($opca->getId());
                    $oTel->setDateAdd(new DateTime());
                    $em->persist($oTel);
                }
            }
            //opca_note
            $note = $request->request->get('note');
            $oldNote = $opcaNoteRepository->findOneBy(array('idOpca' => $idOpca));
            $aOpcaContactOtherData = isset($request->request->get('opca')['opcas']) ? $request->request->get('opca')['opcas'] : array();
            if($oldNote) {
                $oldNote->setNotes($note);
            } else {
                if($note != ''){
                    $newNote = new OpcaNote();
                    $newNote->setNotes($note);
                    $newNote->setIdOpca($opca->getId());
                    $em->persist($newNote);
                }
            }
            // Critere de financement
            $aCritere = $request->request->get('critere');
            if ($aCritere) {
                if(count($aCritere) > 0) {
                    $manager->handleCritereFinancement($aCritere, $opca->getId());
                }
            }
            //Les contacts opca
            // $oldcontactopca = $em->getRepository(Contact::class)->findBy(["opca" => $opca->getId(), "contactLiee" => $opca->getId(), 'idType' => 15]);
            

            if( count($opcaData->getOpcas()) > 0) {
                $manager->handleContact($opcaData->getOpcas(), $aOpcaContactOtherData, $opca, $em);
            }
            
            // APR-155 : Supprimer les contacts qui ne sont pas renvoyé en formulaire
            $aNewContactsIds = [];
            
            foreach ($opcaData->getOpcas() as $newContact) {
                $aNewContactsIds[] = $newContact->getId();
            }
            
            foreach ($aOpcaContacts as $previousContact) {
                if (!in_array($previousContact->getId(), $aNewContactsIds)) {
                    // APR-155 : délier le contact à l'OPCA
                    $previousContact->setOpca(null);
                    $previousContact->setContactLiee(null);
                    $this->em->persist($previousContact);
                    $this->em->flush();
                }
            }
            
            $em->flush();
            
            $this->addFlash('success', 'OPCO modifié avec succés!');
            
            return $this->redirectToRoute('OPCA_Controller/showOpca', ['idOpca' => $idOpca]);
        }


        return $this->render('opca/show.html.twig', $this->viewParams);
    }

    /**
     * @Route("/opca/{idOpca}/delete",
     *      name="OPCA_Controller/deleteOpca",
     *      requirements={"page"="\d+"}
     * )
     */
    public function delete(Request $request, $idOpca, ContactManager $manager){
        try {
            $oEntityManager = $this->getDoctrine()->getManager();
            $oContact = $oEntityManager->getRepository(Contact::class)->find($idOpca);
            $delete = $manager->deletecontact($oContact);
            if($delete === true){
                return new JsonResponse(array(
                    'status' => 'Success',
                    'message' => 'Line successfully Deleted'),
                    200);
            }
            else{
                return new JsonResponse(array(
                    'status' => 'Error 1',
                    'message' => 'L\'OPCA ne peut pas être supprimé car rattaché à d\'autres informations (Dossier, formations, ...)'),
                    200);
            }
        }
        catch(DBALException $e){

            return new JsonResponse(array(
                'status' => 'Error 2',
                'message' => "L'OPCA ne peut pas être supprimé car rattaché à d'autres informations (Dossier, formations, ...)"),
                200);
        }
        catch(Exception $e){

            return new JsonResponse(array(
                'status' => 'Error 3',
                'message' => "L'OPCA ne peut pas être supprimé car rattaché à d'autres informations (Dossier, formations, ...)"),
                200);
        }

    }
    /**
     * Retourne une liste de ville
     *
     * @Route("/opca/ville/list", name="crm.opca.ville.asynch-search", methods={"GET","POST"})
     */
    public function asynchFindVilles(Request $request, VilleRepository $villeRepository)
    {
        $response = array();
        $searchTerm = $request->query->get('search', '');

        if (trim(strlen($searchTerm)) >= 3) {
            $aVilles = $villeRepository->getVille($searchTerm);

            foreach ($aVilles as $ville) {
                $response['results'][] = [
                    'id' => $ville['ville'],
                    'text' => $ville['ville']
                ];
            }
        }

        return new JsonResponse($response);
    }
    /**
     * Retourne une ville
     *
     * @Route("/opca/ville/{idVille}/getOne", name="crm.opca.oneVille.asynch-search", methods={"GET","POST"})
     */
    public function getVilleById(Request $request, $idVille, VilleRepository $villeRepository){
        $aVille = $villeRepository->findOneBy(array('id' => $idVille));
        $response['results'][] = [
            'id' => $aVille->getId(),
            'text' => $aVille->getNomVille()
        ];

        return new JsonResponse($response);
    }
    
      
    /**
     * Recherche OPCA par autocompletion
     * @Route("/opca/list-asynch", name="crm.opca.list-asynch")
     */
    public function asynchFindOPCA(Request $request, ContactRepository $contactRepository) {
        
        $response = array();
        $searchTerm = $request->query->get('search', '');

        if (trim(strlen($searchTerm)) >= 3) {
            $opcas = $contactRepository->searchByType(ConstantContactType::TYPE_OPCA, $searchTerm);
            foreach ($opcas as $opca) {
                $response['results'][] = [
                    'id' => $opca['id'],
                    'text' => $opca['nomStr']
                ];
            }
        }
        
        return new JsonResponse($response);
    }

}
