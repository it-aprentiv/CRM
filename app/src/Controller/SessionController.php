<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SessionFormType;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Sessions;
use App\Entity\FormationDossier as Dossier;
use App\Entity\FormationDossierStagiaire;
use App\Repository\SessionsRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

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
        if ($session instanceof Sessions) {
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
            foreach ($session->getFormationDossiers() as $dossier) {
                $totalMontantSigne += $dossier->getMntAccorde();
            }
            $total =  $totalMontantSigne - ($session->getCoutBspp() + $session->getCoutFormateur() + $session->getCoutFormateur() + $session->getCoutVisite());
            $this->viewParams['total'] = $total;
            $this->viewParams['numberData'] = ["totalMontantSigne" => $totalMontantSigne, "totalStagiaires" => array_sum(array_map(function (Dossier $dossier) {
                return count($dossier->getStagiaires()->toArray());
            }, $session->getFormationDossiers()->toArray()))];

            $stagiaire = array_map(function (Dossier $dossier) {
                return $dossier->getStagiaires()->toArray();
            }, $session->getFormationDossiers()->toArray());
            $stagiaires = [];
            /**
             * @var FormationDossierStagiaire[] $s
             */
            foreach ($stagiaire as $s) {
                $dossier = $s[0]->getDossier();
                $stagiaires[$dossier->getId()] = [];
                foreach ($s as $st) {
                    $stagiaires[$dossier->getId()][] = $this->em->getRepository(Contact::class)->find($st->getStagiaire()->getId());
                }
            }


            $this->viewParams['stagiaires'] = $stagiaires;
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
        if ($session instanceof Sessions) {
            $this->em->remove($session);
            $this->em->flush();
            $this->addFlash('success', 'La session a été supprimée avec succès');
            return $this->redirectToRoute('session');
        }
        $this->addFlash('error', 'La session n\'existe pas');
        return $this->redirectToRoute('session');
    }

    /**
     * @Route("/session/json", name="session_json")
     */

    public function jsonResponse(Request $request): JsonResponse
    {

        $q = $request->query->get('q');
        $rep = $this->getDoctrine()
            ->getRepository(Sessions::class);
        $data = [];
        /**
         * @var Sessions[] $sessions
         */

        if ($q) {
            if ($rep instanceof SessionsRepository) {
                $sessions = $rep->searchBySessionName($q);
                foreach ($sessions as $session) {
                    $data[] = [
                        'id' => $session->getId(),
                        'title' => $session->getName(),
                        'start' => $session->getDateDebut()->format('Y-m-d'),
                        'end' => $session->getDateFin()->format('Y-m-d'),
                    ];
                }
            }
        } else {
            $sessions = $rep->findAll();
            foreach ($sessions as $session) {
                $data[] = [
                    'id' => $session->getId(),
                    'title' => $session->getName(),
                    'start' => $session->getDateDebut()->format('Y-m-d'),
                    'end' => $session->getDateFin()->format('Y-m-d'),
                ];
            }
        }
        return new JsonResponse($data);
    }
}
