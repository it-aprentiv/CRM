<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SessionFormType;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Sessions;

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
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($session);
            $entityManager->flush();

            return $this->redirectToRoute('session');
        }
        $this->viewParams['form'] = $form->createView();
        return $this->render('session/create.html.twig', $this->viewParams);
    }
}
