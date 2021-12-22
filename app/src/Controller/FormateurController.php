<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\Contact;
use App\Entity\ContactNote;
use App\Entity\ContactType;
use App\Entity\Filter\FormateurFilter;
use App\Entity\FormateurCommentdisp;
use App\Entity\FormateurNote;
use App\Entity\Mail;
use App\Entity\Telephone;
use App\Entity\Url;
use App\Form\FormateurCommentdispType;
use App\Form\FormateurFilterType;
use App\Form\FormateurType;
use App\Manager\ContactManager;
use App\Manager\NoteManager;
use App\Repository\FormateurCommentdispRepository;
use App\Repository\FormateurRepository;
use App\Repository\NoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormateurController extends BaseController
{

    const FORMATEUR_CONTACT_TYPE = 6;
    /**
     * @Route("/formateur", name="Liste_Formateur_Controller")
     */
    public function index(FormateurRepository $formateurRepository, PaginatorInterface $paginator, Request $request)
    {
        $formateurFilter = new FormateurFilter();
        $formateurFilterForm = $this->createForm(FormateurFilterType::class, $formateurFilter, ['method' => 'GET']);
        $formateurFilterForm->handleRequest($request);
        $this->viewParams['formateur_filter_form'] = $formateurFilterForm->createView();
        $formateurQuery = $formateurRepository->findFormatteur($formateurFilter);
        $pagination = $paginator->paginate($formateurQuery, $request->query->get('page', 1), 10);
        $this->viewParams['pagination'] = $pagination;
        $this->viewParams['controller_name'] = 'FormateurController';
        return $this->render('formateur/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/formateur/create", name="Liste_Formateur_Controller/ajoutFormateur")
     * Route vers la création d'un formateur
     */
    public function create(Request $request, EntityManagerInterface $em, ContactManager $contactmanager)
    {
        $formateur = new Contact();
        $adresse = new Adresse();
        $formateur->addAdress($adresse);

        $formateurForm = $this->createForm(FormateurType::class, $formateur, ['method' => 'POST']);
        $formateurForm->handleRequest($request);

        $form = $this->createCommentdispForm();
        $form->handleRequest($request);

        if ($formateurForm->isSubmitted() && $form->isSubmitted()) {
            $formateur->setIdb(0);
            $formateur->setNiveauetude('');
            $formateur->setDateBudget(new \DateTime());
            $formateur->setQualite('');
            $formateur->setSocieteformstag('');
            $formateur->setIdType($em->getRepository(ContactType::class)->find(self::FORMATEUR_CONTACT_TYPE));

            $site = $formateur->getSiteweb();
            if (null != $site && '' != $site) {
                $em->persist($site);
                $em->flush();
                $formateur->setSiteweb($site);
            }
            $formateur->setDateNaissance(null);
            $em->persist($formateur);
            $em->flush();

            $oCommentdisp = $form->getData();
            $this->saveCommentDisp($oCommentdisp, $formateur->getId());
            if (is_object($site)) {
                $site->setIdContact($formateur->getId());
                $em->persist($site);
                $em->flush();
            }

            $contactmanager->addContactSocData(array($formateur));

            return $this->redirectToRoute('Liste_Formateur_Controller');

        }
        $this->viewParams['commentaire_dispo'] = $form->createView();
        $this->viewParams['formateur_form'] = $formateurForm->createView();
        return $this->render('formateur/create.html.twig', $this->viewParams);
    }

    private function saveCommentDisp(?FormateurCommentdisp $oCommentdisp, $idFormateur, $bFlush = true){
        if (!is_null($oCommentdisp)) {
            $oCommentdisp->setIdFormateur($idFormateur);
            $this->em->persist($oCommentdisp);
            if ($bFlush) {
                $this->em->flush();
            }
        }
    }

    /**
     * @Route("/formateur/{id}/show", name="Liste_Formateur_Controller/showFormateur", requirements={"page"="\d+"})
     * Fonction pour visualiser un formateur
     */
    public function show(FormateurRepository $formateurRepository, NoteRepository $noteRepository,
                         FormateurCommentdispRepository $formateurCommentdispRepository, $id, Request $request)
    {
        $formateur = new Contact();

        $formateurForm = $this->createForm(FormateurType::class, $formateur, ['method' => 'POST']);
        $formateurForm->handleRequest($request);
        $this->viewParams['formateur_commentaire'] = $formateurForm->createView();
        $this->viewParams['detail_formateur'] = $formateurRepository->findFormateurById($id);
        $formateurcommentdispo = $formateurCommentdispRepository->getCommentFormateur($id);
        $form = $this->createCommentdispForm($formateurcommentdispo);
        $this->viewParams['commentaire_dispo'] = $form->createView();
        return $this->render('formateur/show.html.twig', $this->viewParams);
    }

    /**
     * @Route("/formateur/{id}/edit", name="Liste_Formateur_Controller/editFormateur", requirements={"page"="\d+"})
     */
    public function edit(Contact $contact,
                         EntityManagerInterface $em,
                         Request $request,
                         FormateurCommentdispRepository $formateurCommentdispRepository,
                        ContactManager $contactmanager)
    {
        $siteweb = $em->getRepository(Url::class)->findOneBy(["idContact" => $contact->getId()]);
        if(!is_null($siteweb)){
            $contact->setSiteweb($siteweb);
        }
        $this->viewParams["adressesvilledata"] = array();
        if ($contact->getAdresses()->isEmpty()) {
            $adresse = new Adresse();
            $contact->addAdress($adresse);
        }
        foreach($contact->getAdresses()->getValues() as $adres)
        {
            $this->viewParams["adressesvilledata"][] = $adres->getIdVille();
        }
        $contactmanager->setContactSocData(array($contact));

        $formateurForm = $this->createForm(FormateurType::class, $contact, ['method' => 'POST', 'attr' => ['id' => 'dataformateur']]);
        $formateurForm->handleRequest($request);
        $formateurcommentdispo = $formateurCommentdispRepository->getCommentFormateur($contact->getId());
        $form = $this->createCommentdispForm($formateurcommentdispo);
        $form->handleRequest($request);
        if ($formateurForm->isSubmitted()) {
            $contactmanager->addContactSocData([$contact]);
            $this->em->persist($contact);

            $oDatenow = new \DateTime('now');

            /** @var Url $oSite */
            $oSite = $contact->getSiteweb();
            if ($oSite) {
                if (!$siteweb) {
                    $oSite->setIdContact($contact->getId());
                    $oSite->setDateAdd($oDatenow);
                    $this->em->persist($oSite);
                } else {
                    $siteweb->setUrl($oSite->getUrl());
                }
            }

            // save commentaire and disponibilité
            /** @var FormateurCommentdisp $oCommentdisp */
            $oCommentdisp = $form->getData();
            $this->saveCommentDisp($oCommentdisp, $contact->getId(), false);

            $noteManager = new NoteManager($em);
            $noteManager->replaceNotes($contact->getId(), FormateurNote::class, $contact->getFormateurcommentaires());
            
            $this->em->flush();
            $this->addFlash('success','Formateur modifié avec succès.');
        }

        $this->viewParams['commentaire_dispo'] = $form->createView();
        $this->viewParams['formateur_form'] = $formateurForm->createView();
        return $this->render('formateur/edit.html.twig', $this->viewParams);
    }

    private function createCommentdispForm(?FormateurCommentdisp $oCommDisp = null){

        $oCommDisp = $oCommDisp ?? new FormateurCommentdisp();

        return $this->createFormBuilder($oCommDisp)
            ->add('id', HiddenType::class, [ 'required' => false ])
            ->add('disponibilite', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'rows' => 7
                ]
            ])
            ->add('commentaire', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'rows' => 3
                ]
            ])
            ->addEventListener(FormEvents::SUBMIT, function (FormEvent $event){
                $oComdisp = $event->getData();

                if ($oComdisp instanceof FormateurCommentdisp) {
                    $bIsNull = is_null($oComdisp->getId());
                    $bIsNull = $bIsNull && (is_null($oComdisp->getCommentaire()) || ('' === $oComdisp->getCommentaire()));
                    $bIsNull = $bIsNull && (is_null($oComdisp->getDisponibilite()) || ('' === $oComdisp->getDisponibilite()));
                    if ($bIsNull) {
                        $event->setData(null);
                    }
                }
            })
            ->getForm();
    }

    /**
     * @Route("/formateur/{id}/delete", name="Liste_Formateur_Controller/deleteFormateur", requirements={"page"="\d+"})
     * Fonction pour supprimer une note
     */
    public function delete($id, ContactManager $contactmanager)
    {
        $delete = $contactmanager->deletecontact($id);
        if($delete){
            return new JsonResponse(array(
                'status' => 'Success',
                'message' => 'Line successfully Deleted'),
                200);
        }
        else{
            return new JsonResponse(array(
                'status' => 'Error',
                'message' => 'Line not Deleted'),
                403);
        }
    }
}
