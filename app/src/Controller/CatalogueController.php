<?php

namespace App\Controller;

use App\Entity\Filter\FormationCatalogueFilter;
use App\Entity\FormationCatalogue;
use App\Form\Filter\FormationCatalogueFilterType;
use App\Repository\FormationCatalogueRepository;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Constants\FormationType as typeFormation;
use App\Form\FormationCatalogueType;

class CatalogueController extends BaseController
{
    /**
     * @var FormationCatalogueRepository
     */
    private $repository;
    /**
     * @var PaginatorInterface
     */
    private $paginator;

    public function __construct(
        Security $security,
        EntityManagerInterface $entityManager,
        FormationCatalogueRepository $repository,
        PaginatorInterface $paginator
    ) {
        parent::__construct($security, $entityManager);
        $this->repository = $repository;
        $this->paginator = $paginator;
    }

    /**
     * @Route("/catalogue", name="Catalogue_Controller")
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $filter = new FormationCatalogueFilter();
        $form = $this->createForm(FormationCatalogueFilterType::class, $filter, [
            'method' => 'GET'
        ]);

        $form->handleRequest($request);

        $catQuery = $this->repository->queryGetcatalogues($filter);

        $this->viewParams['pagination'] = $this->paginator->paginate($catQuery, $request->query->get('page', 1), 10);

        $this->viewParams['form_filter'] = $form->createView();

        return $this->render('catalogue/index.html.twig', $this->viewParams);
    }

    /**
     * Création formulaire de type intra, inter, sous-traitance
     *
     * @Route("/catalogue/{typeFormation}", name="create_formation_catalogue")
     */
    public function createFormation(Request $request, string $typeFormation, EntityManagerInterface $em) {
        $formationTypeLetter = $this->convertWordToL($typeFormation);
        $oFormation = new FormationCatalogue();
        $formationForm = $this->createForm(FormationCatalogueType::class, $oFormation, ['typeFormation' => $formationTypeLetter]);
        $this->viewParams['formation_form'] = $formationForm->createView();
        $this->viewParams['type_formation'] = $formationTypeLetter;

        $formationForm->handleRequest($request);

        if ($formationForm->isSubmitted() && $formationForm->isValid()) {
            $oFormation->setIntraInter($formationTypeLetter);
            $em->persist($oFormation);
            $commentaires = $oFormation->getCommentaires();
            foreach ($commentaires as $commentaire) {
                if (is_object($commentaire)) {
                    $commentaire->setFormationCatalogue($oFormation);
                    $em->persist($commentaire);
                }
            }

            $em->flush();
            $this->addFlash('success', 'Ajout formation effectué avec succès');

            return $this->redirectToRoute('Catalogue_Controller');
        }

        return $this->render('catalogue/create.catalogue.html.twig', $this->viewParams);
    }

    /**
     * @Route("/formation/voir-catalogue/{id}", name="cataloge_voir", methods={"GET", "POST"})
     *
     * @param Request $request
     * @param FormationCatalogue $catalogue
     *
     * @return RedirectResponse|Response
     */
    public function voir(Request $request, FormationCatalogue $catalogue)
    {
        $formationTypeLetter = ($catalogue->getIntraInter() == NULL) ? 'A' : $catalogue->getIntraInter();
        $formationForm = $this->createForm(FormationCatalogueType::class, $catalogue, ['typeFormation' => $formationTypeLetter]);
        $this->viewParams['formation_form'] = $formationForm->createView();
        $this->viewParams['type_formation'] = $formationTypeLetter;
        $this->viewParams['catalogue'] = $catalogue;

        $formationForm->handleRequest($request);

        if ($formationForm->isSubmitted() && $formationForm->isValid()) {
            $this->em->persist($catalogue);

            $this->em->flush();
            $this->addFlash('success', 'Modification formation effectué avec succès');

            return $this->redirectToRoute('cataloge_voir', ['id' => $catalogue->getId()]);
        }

        return $this->render('catalogue/voir.catalogue.html.twig', $this->viewParams);
    }

    /**
     * @Route("/catalogue/{id}/delete", name="catalogue_delete")
     *
     * @param FormationCatalogue $catalogue
     *
     * @return JsonResponse
     */
    public function detele(FormationCatalogue $catalogue)
    {
        try {
            $this->em->remove($catalogue);
            $this->em->flush();

            return $this->json([
                'status' => 'Success',
                'message' => 'Line successfully Deleted'
            ]);
        } catch (Exception $exception) {
            return $this->json([
                'status' => 'Error',
                'message' => $exception->getMessage()
            ]);
        }
    }

    private function convertWordToL(string $word) {
        switch ($word) {
            case typeFormation::FORMATION_INTER :
                $type = "R";
                break;
            case typeFormation::FORMATION_INTRA :
                $type = "A";
                break;
        }

        return $type;
    }
}
