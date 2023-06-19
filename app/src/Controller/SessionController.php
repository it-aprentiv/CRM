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
use App\Entity\FormationDossierDate;
use App\Entity\FormationDossierStagiaire;
use App\Entity\Mail;
use App\Form\DossierType;
use App\Manager\FormationDossierDateManager;
use App\Repository\FormationDossierDateRepository;
use App\Repository\SessionsRepository;
use Doctrine\ORM\EntityManager;
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
    public function edit(
        Request $request,
        $id,
        FormationDossierDateManager $formationDossierDateManager,
        FormationDossierDateRepository $formationDossierDateRepository
    ): Response {

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
            $total =  $totalMontantSigne - ($session->getCoutBspp() + $session->getCoutFormateur() + $session->getCoutJury() + $session->getCoutVisite());
            $this->viewParams['total'] = $total;
            $this->viewParams['numberData'] = ["totalMontantSigne" => $totalMontantSigne, "totalStagiaires" => array_sum(array_map(function (Dossier $dossier) {
                return count($dossier->getStagiaires()->toArray());
            }, $session->getFormationDossiers()->toArray()))];

            $stagiaire = array_map(function (Dossier $dossier) {
                return $dossier->getStagiaires()->toArray();
            }, $session->getFormationDossiers()->toArray());
            $stagiaires = [];
            $docform = [];
            $dataComplementaire = [];

            /**
             * @var FormationDossierStagiaire[] $s
             */
            foreach ($stagiaire as $s) {
                $dossier = $s[0]->getDossier();
                $oFormationDate = $this->em->getRepository(FormationDossierDate::class)->findOneBy(['idDossier' => $dossier->getId()]);
                $aFormationDates = "";
                $aFormationDates = $formationDossierDateRepository->getDossierDate($id);

                $aFormatedFormationDates = $formationDossierDateManager->formatFormationDates($aFormationDates);
                $moisTemp = $dossier->getDateEnvoi();
                $signature = $mois[$moisTemp->format('m') - 1];
                $docFormTemp = $this->createForm(DossierType::class, $dossier, [
                    'signature' => $signature, 'attr' =>
                    [
                        'editform' => $dossier->getIdCommercial(),
                    ],
                    'facturation.legal_mode' => $this->getParameter('facturation.legal_mode'),
                    'formated_formation_dates' => $aFormatedFormationDates
                ]);

                $stagiaires[$dossier->getId()] = [];
                foreach ($s as $st => $value) {
                    $contactStagiare = $this->em->getRepository(Contact::class)->find($value->getStagiaire()->getId());

                    // for each stagiaire we look also at the mail and phone number to see if they are not empty
                    $oMail = $this->em->getRepository(Mail::class)->findOneBy(['idContact' => $value->getStagiaire()->getId()]) ?? new Mail();
                    if ($oMail instanceof Mail) {
                        if ($contactStagiare instanceof Contact) {
                            $contactStagiare->setEmail($oMail->getMail());
                        }                    
                        $dataComplementaire[$dossier->getId()][$st]['email'] = $oMail->getMail();
                    }
                    $stagiaires[$dossier->getId()][] = $contactStagiare;
                }
                $docFormTemp->get('stagiaires')->setData($stagiaires[$dossier->getId()]);
                $docFormTemp->handleRequest($request);
                if($docFormTemp->isSubmitted() && $docFormTemp->isValid()) {
                    dd($docFormTemp->getData());
                $dataStagiaires = $docFormTemp->get('stagiaires')->getData();
                $oType = $this->em->getRepository(ContactType::class)->find(5);
                foreach ($dataStagiaires as $stagiaire) {
                if (is_object($stagiaire) && $stagiaire->getNom() != '' && $stagiaire->getPrenom() != '') {
                    $email = $stagiaire->getEmail();
                    // tester si c'est pour update ou pour insert
                    $stagiaireId = $stagiaire->getId();
                    if ($stagiaireId) {
                        $FDstagiaire = $this->em->getRepository(FormationDossierStagiaire::class)->findOneBy(
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
                        $this->em->persist($Mail);
                    }
                    $this->em->persist($stagiaire);
                }
            }
            }
                $docform[$dossier->getId()] = $docFormTemp->createView();
            }

            $this->viewParams['stagiaires'] = $stagiaires;
            $this->viewParams['doc_form'] = $docform;
            $this->viewParams['dataComplementaire'] = $dataComplementaire;
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
