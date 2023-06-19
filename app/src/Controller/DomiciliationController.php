<?php

namespace App\Controller;

use App\Entity\Domiciliation;
use App\Entity\DomiciliationNote;
use App\Entity\Filter\DomiciliationFilter;
use App\Entity\Typedom;
use App\Form\DomiciliationType;
use App\Form\Filter\DomiciliationFilterType;
use App\Repository\NoteRepository;
use App\Repository\TypedomRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/domiciliation")
 */
class DomiciliationController extends BaseController
{

    protected $entityClass = Domiciliation::class;

    /**
     * Liste des domiciliations
     *
     * @Route("/", name="Domiciliation_Location_Controller")
     */
    public function index(PaginatorInterface $paginator, Request $request) {

        $oFilter = new DomiciliationFilter();
        $oFilterForm = $this->createForm(DomiciliationFilterType::class, $oFilter);

        $oFilterForm->handleRequest($request);

        $oDomicilQuery = $this->entityRepository->listDomicilQuery($oFilter);
        $this->viewParams['pagination'] = $paginator->paginate($oDomicilQuery, $request->query->get('page', 1), 10);

        $this->viewParams['filter'] = $oFilterForm->createView();

        return $this->render('domiciliationlocation/index.html.twig', $this->viewParams);
    }

    
    /**
     * Création Domiciliation et Location
     *
     * @Route("/creation", name="Domiciliation_Location_Controller/creation" )
     */
    public function create(Request $request) {
        $oDomiciliation = new Domiciliation();

        $oDomiciliationForm = $this->createForm(DomiciliationType::class, $oDomiciliation, [
            'method' => 'POST',
            'is_create' => true
        ]);
        $oDomiciliationForm->handleRequest($request);

        if ($oDomiciliationForm->isSubmitted() && $oDomiciliationForm->isValid()) {
            /** @var Domiciliation $oNewDom */
            $oNewDom = $oDomiciliationForm->getData();
            $this->em->persist($oNewDom);
            $this->em->flush();

            return $this->redirectToRoute('Domiciliation_Location_Controller');
        }

        $this->viewParams['domicil_form'] = $oDomiciliationForm->createView();
        $this->viewParams['title'] = "Ajout domiciliation ou location";

        return $this->render('domiciliationlocation/create.html.twig', $this->viewParams);
    }

    /**
     * @Route("/generer-reference", name="crm.domiciliation.generer_reference")
     */
    public function genererReference(Request $request){

        $iType = (int) $request->request->get('type', 0);
        $aDomicil = $this->entityRepository->findBy(['type' => $iType]);

        $aResult = [
            'success' => true,
            'message' => ''
        ];

        $oType = $this->em->getRepository(Typedom::class)->find($iType);

        if ($oType instanceof Typedom) {
            // générer avec les 3 premiers lettres
            $sRef = strtoupper(substr($oType->getLibelle(), 0, 3));
            $sRef .= date('Y') . "-";
            $sRef .= str_pad(count($aDomicil) + 1, 4, '0', STR_PAD_LEFT);
            $aResult['reference'] = $sRef;
        } else {
            $aResult['success'] = false;
            $aResult['message'] = 'Invalide type !';
        }

        return new JsonResponse($aResult);
    }

    /**
     * @Route("/ajout-categorie/{categorie}", name="crm.domiciliation.ajout_categorie")
     */
    public function ajoutCategorie($categorie, Request $request, SerializerInterface $serializer){
        $aResult = [
            'success' => true,
            'message' => ''
        ];
        $bIsValid = true;

        $this->em->getRepository(Typedom::class)->setTest();

        switch ($categorie) {
            case 'type':
                $sCategorieClass = Typedom::class;
                /** @var TypedomRepository $oCategorieModel */
                $oCategorieModel = $this->em->getRepository($sCategorieClass);
                break;
            default:
                $bIsValid = false;
        }

        $sLibelle = $request->request->get('libelle', '');

        if ($bIsValid) {
            $aCat = $oCategorieModel->getByLibelle($sLibelle);
            if (count($aCat) > 0) {
                $aResult['message'] = 'Donnée déjà existante';
                $aResult['success'] = false;
            } else {
                $oNewCategorie = new $sCategorieClass();
                $oNewCategorie->setLibelle($sLibelle);
                $this->em->persist($oNewCategorie);
                $this->em->flush();
                $aResult['data'] = $oNewCategorie;
            }
        } else {
            $aResult['success'] = false;
            $aResult['message'] = 'Ajout ' . $categorie . ' non défini !';
        }

        return new JsonResponse($serializer->serialize($aResult, 'json'), 200, [], true);
    }

    /**
     * @param Request $request
     *
     * @Route("/fiche/{id}", name="crm.domiciliation.fiche")
     */
    public function fiche(Request $request, $id){
        $oDomiciliation = $this->entityRepository->find($id);

        if (!$oDomiciliation instanceof Domiciliation) {
            $this->addFlash('danger', "Le fiche domiciliation n'existe pas !");

            return $this->redirectToRoute('Domiciliation_Location_Controller');
        }

        $oForm = $this->createForm(DomiciliationType::class, $oDomiciliation, ['method' => 'POST','attr' => ['id' => 'domiciliation-form',"editform"=>$oDomiciliation->getCommercial()]]);
        $oForm->handleRequest($request);

        if ($oForm->isSubmitted() && $oForm->isValid()) {
            /** @var Domiciliation $oUpdatedDom */
            $oUpdatedDom = $oForm->getData();
            /** @var NoteRepository $oNoteRepo */
            $oNoteRepo = $this->em->getRepository(DomiciliationNote::class);
            $aComs = $oNoteRepo->findBy(['idTable' => $oUpdatedDom->getId()]);
            $aNewComs = $oUpdatedDom->getCommentaires();
            $aComsToDel = array_filter($aComs, function ($com) use ($aNewComs){
                return !$aNewComs->contains($com);
            });
            $oDateNow = new \DateTime('now');
            $this->em->persist($oUpdatedDom);
            foreach ($aComsToDel as $oCom){
                $oCom->setDeletedAt($oDateNow);
                $this->em->persist($oCom);
            }

            $this->em->flush();

            $this->addFlash('success', 'Fiche domiciliation enregistré avec succès !');
            return $this->redirectToRoute('crm.domiciliation.fiche', ['id' => $id]);
        }

        $this->viewParams['domicil_form'] = $oForm->createView();
        $this->viewParams['is_modif'] = true;
        $this->viewParams['title'] = "Fiche domiciliation ou location";

        return $this->render('domiciliationlocation/create.html.twig', $this->viewParams);
    }

    /**
     * @Route("/delete", name="crm.domiciliation.delete", methods={"POST"})
     */
    public function asynchDelete(Request $request){
        $id = $request->request->get('iddom', 0);
        $aResult = [
            'success' => true,
            'message' => ''
        ];

        $oDom = $this->entityRepository->find($id);
        if ($oDom instanceof Domiciliation) {
            $aComs = $oDom->getCommentaires();
            $oNow = new \DateTime('now');
            foreach ($aComs as $com){
                $com->setDeletedAt($oNow);
                $this->em->persist($com);
            }
            $this->em->remove($oDom);
            $this->em->flush();
            $aResult['message'] = "Supprimé avec succès !";
        } else {
            $aResult['message'] = "Cette ligne a déjà été effacé !";
        }

        return new JsonResponse($aResult);
    }
}
