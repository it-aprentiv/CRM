<?php

namespace App\Controller;

use App\Entity\Competence;
use App\Entity\Filter\CompetenceFilter;
use App\Form\Competence1Type;
use App\Form\Filter\CommissionFilterType;
use App\Form\Filter\CompetenceFilterType;
use App\Repository\CompetenceRepository;
use App\Service\FileUploader;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CompetenceController extends BaseController
{
    /**
     * @Route("/competence", name="competence_index", methods={"GET"})
     */
    public function index(Request $request, CompetenceRepository $competenceRepository,PaginatorInterface $paginator): Response
    {
        $competencefilter = new CompetenceFilter();
        $competencefilterform = $this->createForm(CompetenceFilterType::class, $competencefilter, ['method' => 'GET']);
        $competencefilterform->handleRequest($request);
        $this->viewParams['competence_filter_form'] = $competencefilterform->createView();


        $competenceQuery = $competenceRepository->findCompetenceQuery($competencefilter);
        $pagination = $paginator->paginate($competenceQuery, $request->query->get('page', 1), 10);
        $this->viewParams['pagination'] = $pagination;

        return $this->render('competence/index.html.twig',$this->viewParams);
    }

    /**
     * @Route("/competence/new/", name="competence_new", methods={"GET","POST"})
     */
    public function new(Request $request,FileUploader $fileuploader): Response
    {
        $competence = new Competence();
        $form = $this->createForm(Competence1Type::class, $competence);
        $form->handleRequest($request);

        $this->viewParams['competence'] = $competence;
        $this->viewParams['data'] = $form->createView();
        if ($form->isSubmitted() && $form->isValid()) {
            $programmefile = $form->get('catalogueprogramme')->getData();
            $evaluationfile = $form->get('evaluation')->getData();
            if($programmefile){
                $programmefilename = $fileuploader->upload($programmefile);
                $competence->setCatalogueProgramme($programmefilename);
            }
            if($evaluationfile){
                $evaluationfilename = $fileuploader->upload($evaluationfile);
                $competence->setEvaluation($evaluationfilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($competence);
            $entityManager->flush();
            $this->addFlash('success', 'Compétence ajoutée avec succès.');
            return $this->redirectToRoute('competence_index');
        }

        return $this->render('competence/new.html.twig',$this->viewParams);
    }

    /**
     * @Route("/competence/{id}/show", name="competence_show", methods={"GET","POST"})
     */
    public function show(Request $request, Competence $competence, FileUploader $fileuploader): Response
    {
        $form = $this->createForm(Competence1Type::class, $competence);
        $form->handleRequest($request);

        $this->viewParams['competence'] = $competence;
        $this->viewParams['data'] = $form->createView();
        if ($form->isSubmitted() && $form->isValid()) {
            $programmefile = $form->get('catalogueprogramme')->getData();
            $evaluationfile = $form->get('evaluation')->getData();
            if($programmefile){
                $programmefilename = $fileuploader->upload($programmefile);
                $competence->setCatalogueProgramme($programmefilename);
            }
            if($evaluationfile){
                $evaluationfilename = $fileuploader->upload($evaluationfile);
                $competence->setEvaluation($evaluationfilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($competence);
            $entityManager->flush();
            $this->addFlash('success', 'Compétence modifiée avec succès.');
            return $this->redirectToRoute('competence_show', ['id' => $competence->getId()]);
        }

        return $this->render('competence/show.html.twig', $this->viewParams);
    }

    /**
     * @Route("/competence/{id}/edit", name="competence_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Competence $competence): Response
    {
        $form = $this->createForm(Competence1Type::class, $competence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Compétence modifiée avec succès.');

            return $this->redirectToRoute('competence_show', ['id' => $competence->getId()]);
            //return $this->redirectToRoute('competence_index');
        }

        return $this->render('competence/edit.html.twig', [
            'competence' => $competence,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/competence/{id}/delete", name="competence_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Competence $competence): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competence->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($competence);
            $entityManager->flush();
        }

        return $this->redirectToRoute('competence_index');
    }

    /**
     * @Route("/competence/modaladd/", name="ajout_competence")
     */
    public function modaladdcompetence(Request $request, FileUploader $fileuploader)
    {
        $competence = new Competence();
        $form = $this->createForm(Competence1Type::class, $competence);
        $form->handleRequest($request);
        $this->viewParams['data'] = $form->createView();

        if ($form->isSubmitted() && $form->isValid()) {
            //dd($form); APR-195 : comment du dd()
            $programmefile = $form['catalogueprogramme']->getData();
            //dd($form); APR-195 : comment du dd()
            if($programmefile){
                $programmefilename = $fileuploader->upload($programmefile);
                $competence->setCatalogueProgramme($programmefilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($competence);
            $entityManager->flush();
        }

        return $this->render('competence/create.html.twig',$this->viewParams);
    }
    
    /**
     * APR-195 : Fix bug ajout nouveau compétence
     * @Route("/competence/new", name="competence.create")
     */
    public function asynchAddCompetence(Request $request) {
        
        if ($request->isMethod('POST')) {
            $aCompetence = $request->request->get('competence1');
            
            if (!empty($aCompetence)) {
                $competence = new Competence();
                $competence->setCompetence($aCompetence['competence']);
                $competence->setThemeformation($aCompetence['themeformation']);
                $competence->setThemegenerale($aCompetence['themegenerale']);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($competence);
                $entityManager->flush();
                
                $aCompetence['id'] = $competence->getId();
                $aCompetence['title'] = $competence->getCompetence();
                $aCompetence['theme_formation'] = $competence->getThemeformation();
                $aCompetence['theme_generale'] = $competence->getThemegenerale();
                
                return new JsonResponse(['success' => true, 'competence' => $aCompetence]);
            }
        }

        return new JsonResponse(['success' => false]);
    }
    
}
