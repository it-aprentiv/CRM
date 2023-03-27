<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SessionFormType;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Sessions;
use App\Entity\FormationDossier as Dossier;

class SessionController extends BaseController
{
    /**
     * @Route("/session", name="session")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        // get all sessions from database
        $sessions = $this->getDoctrine()
            ->getRepository(Sessions::class)
            ->findAll();
        
        // make pagination for sessions
        $pagination = $paginator->paginate(
            $sessions, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );
        $this->viewParams['pagination'] = $pagination;
        return $this->render('session/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/session/create", name="session_add")
     */
    public function add(Request $request): Response
    {
        $form = $this->createForm(SessionFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session = $form->getData();
            $this->em->persist($session);
            $this->em->flush();

            $this->addFlash('success', 'La session a été ajoutée avec succès');
            return $this->redirectToRoute('session_edit', ['id' => $session->getId()]);
        }
        $this->viewParams['form'] = $form->createView();
        return $this->render('session/create.html.twig', $this->viewParams);
    }
    
    /**
     * @Route("/session/edit/{id}", name="session_edit")
     */
    public function edit(Request $request, $id): Response
    {
        $session = $this->getDoctrine()
            ->getRepository(Sessions::class)
            ->find($id);
            if($session instanceof Sessions){
        $form = $this->createForm(SessionFormType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session = $form->getData();
            $this->em->persist($session);
            $this->em->flush();
            
            $this->addFlash('success', 'La session a été modifiée avec succès');
            return $this->redirectToRoute('session_edit', ['id' => $session->getId()]);
        }
        $this->viewParams['form'] = $form->createView();
        $this->viewParams['dossiers'] = $session->getFormationDossiers();
        $totalMontantSigne = 0;
        foreach($session->getFormationDossiers() as $dossier){
            $totalMontantSigne += $dossier->getMntAccorde();
        }

        $this->viewParams['numberData'] = ["totalMontantSigne" => $totalMontantSigne,"totalStagiaires" => array_map(function(Dossier $dossier){
            return $dossier->getStagiaires();
        }, $session->getFormationDossiers()->toArray())];
        return $this->render('session/edit.html.twig', $this->viewParams);
            }
            $this->addFlash('error', 'La session n\'existe pas');
            return $this->redirectToRoute('session');
    }

    /**
     * @Route("/session/delete/{id}", name="session_delete")
     */

    public function delete($id): Response
    {
        $session = $this->getDoctrine()
            ->getRepository(Sessions::class)
            ->find($id);
        if($session instanceof Sessions){
            $this->em->remove($session);
            $this->em->flush();
            $this->addFlash('success', 'La session a été supprimée avec succès');
            return $this->redirectToRoute('session');
        }
        $this->addFlash('error', 'La session n\'existe pas');
        return $this->redirectToRoute('session');
    }
}
