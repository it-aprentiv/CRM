<?php

namespace App\Controller;

use App\Constants\ParamDossierStagiaire;
use App\Constants\FormationType as typeFormation;
use App\Entity\Competence;
use App\Entity\Contact;
use App\Entity\Filter\FormationFilter;
use App\Entity\FormationDossier;
use App\Entity\FormationDossierStagiaireDossier;
use App\Entity\FormationSuiviOrdredemission;
use App\Entity\Note;
use App\Entity\Structure;
use App\Form\Filter\FormationFilterType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Dossier;
use App\Form\FormationType;
use App\Entity\ContactType;
use App\Entity\Mail;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Knp\Component\Pager\PaginatorInterface;
use App\Manager\ContactManager;
use Symfony\Component\HttpFoundation\Response;
use App\Manager\FormationManager;
use App\Entity\FormationDossierStagiaire;
use App\Entity\DossierNote;

class FormationController extends BaseController {

    private $dossierRepository;
    private $entityManager;
    private $paginator;

    public function __construct(Security $security, EntityManagerInterface $entityManager, PaginatorInterface $paginator) {
        parent::__construct($security, $entityManager);
        $this->entityManager = $entityManager;
        $this->paginator = $paginator;
    }

    /**
     * @Route("/formation", name="Liste_Formation_Mise_Place_Controller")
     */
    public function index(Request $request) {
        ini_set('memory_limit', '512M');
        
        $page = $request->query->get('page', 1);
        $limit = $request->query->get('limit', 10);
        $formationFilter = new FormationFilter();
        $formationFormFilter = $this->createForm(FormationFilterType::class, $formationFilter);
        $formationFormFilter->handleRequest($request);

        $formationRepository = $this->entityManager->getRepository(Dossier::class);
        $queryFormationFilter = $formationRepository->getQueryFormationFilter();
        $this->viewParams['pagination'] = $this->paginator->paginate($queryFormationFilter, $page, $limit);

        if ($formationFormFilter->isSubmitted() && $formationFormFilter->isValid()) {
            $queryFormationFilter = $formationRepository->getQueryFormationFilter($formationFilter);
            $this->viewParams['pagination'] = $this->paginator->paginate($queryFormationFilter, $page, $limit);
        }

        $this->viewParams['formation_filter_form'] = $formationFormFilter->createView();

        return $this->render('formation/index.html.twig', $this->viewParams);
    }

    /**
     * Création formulaire de type intra, inter, sous-traitance
     *
     * @Route("/formation/create/{typeFormation}", name="create_formation")
     */
    public function createFormation(Request $request, string $typeFormation, FormationManager $formationManager) {
        $formationTypeLetter = $this->convertWordToLetter($typeFormation);
        $oFormation = new Dossier();
        $formationForm = $this->createForm(FormationType::class, $oFormation, ['typeFormation' => $formationTypeLetter]);
        $this->viewParams['formation_form'] = $formationForm->createView();
        $this->viewParams['type_formation'] = $formationTypeLetter;

        $formationForm->handleRequest($request);
        if ($formationForm->isSubmitted() /*&& $formationForm->isValid()*/) {
            $oFormation->setIntraInter($formationTypeLetter);
            $this->setTypeForamtion($typeFormation, $oFormation);

            if ($typeFormation !== typeFormation::FORMATION_SOUS_TRAITANCE) {
                $oTypeContactStagiaire = $this->em->getRepository(ContactType::class)->find(5);

                //Ajouter la marge brute
                if ($formationForm->get('pvTotalHt')->getData() && $formationForm->get('pfmteurTotalHt')->getData()) {
                    $pv = $formationForm->get('pvTotalHt')->getData();
                    $pf = $formationForm->get('pfmteurTotalHt')->getData();
                    $marge = $this->calculMargeBrute($pv, $pf);

                    $oFormation->setMontantMarge($marge);
                }

                foreach ($formationForm->get('suiviMissions')->getData() as $k => $oSuiviOM) {
                    if ($oSuiviOM instanceof FormationSuiviOrdredemission) {
                        $formationForm->get('suiviMissions')->getData()[$k]->setIdFormation($oFormation);
                    }
                }

                foreach ($formationForm->get('stagiaires')->getData() as $k => $stagiaire) {
                    if ($stagiaire instanceof Contact) {
                        $formationForm->get('stagiaires')->getData()[$k]->setIdType($oTypeContactStagiaire);
                        $formationForm->get('stagiaires')->getData()[$k]->setIdFormationLiee($oFormation);
                        $formationForm->get('stagiaires')->getData()[$k]->setDateAdd(new \DateTime());
                        $formationForm->get('stagiaires')->getData()[$k]->setStructure($oFormation->getIdStructure());
                        if ($stagiaire->getEmail()) {
                            $oMail = new Mail();
                            $oMail->setMail($stagiaire->getEmail());
                            //Type mail à verifier
                            //$oMail->setIdTypeMail(1);
                            $oMail->setIdContact($stagiaire);
                            $this->entityManager->persist($oMail);
                        }
                    }
                }

                // génération numero Ordre de mission
                $idStructure = $oFormation->getIdStructure() instanceof Structure ? $oFormation->getIdStructure()->getId() : null;
                $sOMRef = $formationManager->generateRefOrdreMission($idStructure);
                $oFormation->setRefOrdreMission($sOMRef);
            }

            $oFormation->setNbStagiaires(count($oFormation->getStagiaires()));
            $this->entityManager->persist($oFormation);
            $this->entityManager->flush();
            $this->addFlash('success', 'Ajout formation effectué avec succès');

            return $this->redirectToRoute('Liste_Formation_Mise_Place_Controller');
        }

        return $this->render('formation/create.formation.html.twig', $this->viewParams);
    }

    /**
     * Edition formation
     *  @Route("/formation/edit/{id}", name="edit_formation")
     */
    public function editFormation(Request $request, $id, FormationManager $formationManager) {
        /** @var Dossier $oFormation */
        $oFormation = $this->entityManager->find(Dossier::class, $id);

        if (!$oFormation) {
            throw new NotFoundHttpException('Formation not found');
        }

        $typeFormation = $oFormation->getIntraInter();
        $typeFormationWord = $this->convertLetterToWord($typeFormation);
        $oFormation->setDossierType($typeFormationWord);

        if ($typeFormation !== typeFormation::TYPE_SOUS_TRAITANCE) {
            if (count($oFormation->getStagiaires()) > 0) {
                foreach ($oFormation->getStagiaires() as $i => $stg) {
                    if ($stg instanceof Contact) {
                        $oOldMail = $this->entityManager->getRepository(Mail::class)->findOneBy(['idContact' => $stg]);
                        if ($oOldMail instanceof Mail) {
                            $oFormation->getStagiaires()[$i]->setEMail($oOldMail->getMail());
                        }
                    }
                }
            }
        }

        $formationForm = $this->createForm(FormationType::class, $oFormation, [
            'typeFormation' => $typeFormation,
            'csrf_protection' => false
        ]);
        $this->viewParams['formation_form'] = $formationForm->createView();
        $this->viewParams['type_formation'] = $typeFormation;
        $this->viewParams['idFormation'] = $oFormation->getId();
        $formationForm->handleRequest($request);

        if ($formationForm->isSubmitted()) {
            if ($formationForm->isValid()) {
                if ($formationForm->get('pvTotalHt')->getData() && $formationForm->get('pfmteurTotalHt')->getData()) {
                    $pv = $formationForm->get('pvTotalHt')->getData();
                    $pf = $formationForm->get('pfmteurTotalHt')->getData();
                    $marge = $this->calculMargeBrute($pv, $pf);

                    $oFormation->setMontantMarge($marge);
                }
                if ($typeFormation !== typeFormation::TYPE_SOUS_TRAITANCE) {
                    if (count($formationForm->getData()->getStagiaires()) > 0) {
                        foreach ($formationForm->getData()->getStagiaires() as $k => $stagiaire) {
                            if ($stagiaire instanceof Contact) {
                                $formationForm->getData()->getStagiaires()[$k]->setIdFormationLiee($oFormation);

                                $oMail = $this->entityManager->getRepository(Mail::class)->findOneBy(['idContact' => $stagiaire]);
                                $idUtilisateur = $this->get('security.token_storage')->getToken()->getUser()->getIdutilisateur();

                                //Création d'email
                                if ($oMail && $stagiaire->getEmail()) {
                                    $oMail->setIdUserMaj($idUtilisateur);
                                    $oMail->setMail($stagiaire->getEmail());
                                    $oMail->setDateMaj(new \DateTime());
                                    $this->entityManager->persist($oMail);
                                } else {
                                    $oMail = new Mail();
                                    $oMail->setIdContact($stagiaire);
                                    $oMail->setIdUserMaj($idUtilisateur);
                                    $oMail->setMail($stagiaire->getEmail());
                                    $oMail->setDateMaj(new \DateTime());
                                    $this->entityManager->persist($oMail);
                                }
                            }
                        }
                    }

                    if (count($formationForm->getData()->getSuiviMissions()) > 0) {
                        foreach ($formationForm->getData()->getSuiviMissions() as $k => $om) {
                            $formationForm->getData()->getSuiviMissions()[$k]->setIdFormation($oFormation);
                        }
                    }

                    if (is_null($oFormation->getRefOrdreMission())) {
                        $idStructure = $oFormation->getIdStructure() instanceof Structure ? $oFormation->getIdStructure()->getId() : null;
                        $sOMRef = $formationManager->generateRefOrdreMission($idStructure);
                        $oFormation->setRefOrdreMission($sOMRef);
                    }
                }

                $this->entityManager->persist($oFormation);
                $this->entityManager->flush();
                $this->addFlash('success', 'Modification formation effectué avec succès');

                return $this->redirectToRoute('edit_formation', ['id' => $oFormation->getId()]);
            } else {
                $this->addFlash('error', "Il y a une erreur lors de la mise à jour des données !");
            }

        }
        
        $this->viewParams['oFormation'] = $oFormation;
        $this->viewParams['address_societe'] = $oFormation->getIdClient() && !empty($oFormation->getIdClient()->getAdresses()[0]) ? $oFormation->getIdClient()->getAdresses()[0]->getAdresse() : '';
        $this->viewParams['intitule'][] = $oFormation->getNom();
        $this->viewParams['evaluation'] = null;
        if($oFormation->getNom() != ''){
            $catalogue = $this->entityManager->getRepository(Competence::class)->findOneBy(["competence" => $oFormation->getNom()]);
            $this->viewParams['evaluation'] = !is_null($catalogue) ? $catalogue->getEvaluation() : null;
        }

        return $this->render('formation/edit.formation.html.twig', $this->viewParams);
    }

    /**
     * Page d'accueil pour la création des formations (inter, intra, sous-traitance)
     *
     * @Route("/formation/creation", name="Detail_formation_inter_Controller/creation")
     */
    public function create(Request $request) {
        return $this->render('formation/create.html.twig', $this->viewParams);
    }

    /**
     *
     * @Route("formation/next-id",name="next_insert_id_formation")
     *
     */
    public function getNextInsertId(Request $request) {
        $res = [];
        if ($request->isXmlHttpRequest()) {
            $dossierRepository = $this->getDoctrine()->getManager()->getRepository(Dossier::class);
            $res['nextId'] = $dossierRepository->nextAutoIncrement();
            return new JsonResponse($res);
        }

        $res['error'] = "The request is not ajax";
        return new JsonResponse($res);
    }

    private function getEmail(Contact $contact) {
        $mailRepository = $this->entityManager->getRepository(Mail::class);
        $email = $mailRepository->getMailByContact($contact);

        return $email;
    }

    private function setEmail($aStagiaire) {
        $stagiaires = [];
        if (!empty($aStagiaire)) {
            foreach ($aStagiaire as $stagiaire) {
                if ($stagiaire instanceof Contact) {
                    $email = $this->getEmail($stagiaire);
                    if ($email instanceof Mail) {
                        $stagiaire->setEmail($email->getMail());
                        $stagiaires[] = $stagiaire;
                    }
                }
            }

            return $stagiaires;
        }

        return;
    }

    /**
     * @Route("/formation/delete/{id}", name="formation_delete")
     */
    public function delete(Request $request, $id) {
        $oFormation = $this->entityManager->getRepository(Dossier::class)->find($id);

        $this->entityManager->remove($oFormation);
        $this->entityManager->flush();

        return new JsonResponse(array(
            'status' => 'Success',
            'message' => 'Line successfully Deleted'),
            200);
    }

    /**
     * @Route("/formation/edit/{idFormation}/export", name="formation_export_om_word")
     */
    public function exportOmToWord(Request $request, $idFormation, FormationManager $formationManager) {
        $oFormation = $this->entityManager->find(Dossier::class, $idFormation);
        $dateom = $oFormation->getDatePrintOrdreMission();
        if(is_null($dateom)){
            $oFormation->setDatePrintOrdreMission(new \DateTime());
            $this->entityManager->persist($oFormation);
            $this->entityManager->flush();
        }
        if (!$oFormation) {
            throw new NotFoundHttpException("The id: %s was not found", $idFormation);
        }
        $this->viewParams['formation'] = $oFormation;
        $template = $this->renderView('Common/DocPrint/Contact/OrderDeMission.html.twig');

        $fichier = $formationManager->createDocOMI($template, $oFormation->getIdClient(), $oFormation);

        return $this->returnFile($fichier);
        //return $this->redirectToRoute('edit_formation', ['id' => $oFormation->getId()]);
    }

    private function setTypeForamtion($type, Dossier $oFormation) {
        switch ($type) {
            case "Intra":
                $oFormation->setIntraInter("A");
                break;
            case "Inter":
                $oFormation->setIntraInter("R");
                break;
            case "Sous-traitance":
                $oFormation->setIntraInter("S");
                break;
        }
    }

    /**
     * @param Request $request
     * @param int $idFormateur
     * @return JsonResponse
     *  @Route("/formation/send-om-formateur", name="formation_send_om_formateur")
     */
    public function sendEmailToFormateur(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $idFormateur = $request->request->get('idFormateur');
            if ($idFormateur) {
                $oFormateur = $this->entityManager->getRepository(Contact::class)->find($idFormateur);
                $oEmail = $this->entityManager->getRepository(Mail::class)->getMailByContact($oFormateur);

                return new JsonResponse([
                    'email' => $oEmail->getMail(),
                ]);
            }

            return new JsonResponse(['error' => 'No param idFormateur exist']);
        }

        return new JsonResponse(['error' => 'The request is not a Ajax ']);
    }

    /**
     * @Route("/formation/recap-formation/{id}", name="export_recap_formation")
     *
     * @param Request $request
     */
    public function recapFormation($id, FormationManager $formationManager) {
        /** @var Dossier $oFormation */
        $oFormation = $this->entityManager->find(Dossier::class, $id);
        if (!$oFormation) {
            throw new NotFoundHttpException('Formation not found');
        }
        $sPath = $formationManager->exportRecapFormation($oFormation);
        $sFileName = "FORMATEUR_" . date('Y-m-d_His') . ".xlsx";

        return $this->file($sPath, $sFileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @Route("/dossier/downloadprogramme/{fichier}",
     *     name="download_programme_dossier")
     * @param $filename
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadProgramme($fichier)
    {
        $sPath = realpath($this->getParameter('catalogue_dossier_dir'). '/'.$fichier);

        return $this->file($sPath,$fichier, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }

    /**
     * Convertir les lettres en Mots (type de formation)
     * @param string $text
     * @return string
     */
    private function convertWordToLetter(string $word) {
        switch ($word) {
            case typeFormation::FORMATION_INTER :
                $type = "R";
                break;
            case typeFormation::FORMATION_SOUS_TRAITANCE :
                $type = "S";
                break;
            case typeFormation::FORMATION_INTRA :
                $type = "A";
                break;
        }

        return $type;
    }

    private function convertLetterToWord(string $letter) {
        switch ($letter) {
            case "R" :
                $type = typeFormation::FORMATION_INTER;
                break;
            case "S" :
                $type = typeFormation::FORMATION_SOUS_TRAITANCE;
                break;
            case "A" :
                $type = typeFormation::FORMATION_INTRA;
                break;
        }

        return $type;
    }

    private function calculMargeBrute($pv, $pa) {
        return (float) $pv - (float) $pa;
    }

    /**
     * @Route("/formation/delete-stagiaire", name="delete_stagiaire_formation", methods={"DELETE"})
     */
    public function deleteStagiaireAsync(Request $request) {
        try {
            $idStagiaire = $request->request->get('id');
            $paramDossier = $request->request->get('param');

            if ($paramDossier == ParamDossierStagiaire::DOSSIER_STAGIAIRE) {
                $oStagiaire = $this->entityManager->getRepository(Contact::class)->find($idStagiaire);
                $oMail = $this->entityManager->getRepository(Mail::class)->findOneBy(['idContact' => $oStagiaire]);

                if ($oMail instanceof Mail) {
                    $oMail->setIdContact(null);
                    $this->entityManager->remove($oMail);
                }

                if ($oStagiaire instanceof Contact) {
                    $oStagiaire->setIdFormationLiee(null);
                    $this->entityManager->remove($oStagiaire);
                }
            } elseif ($paramDossier == ParamDossierStagiaire::FORMATION_DOSSIER_STAGIAIRE) {
                $aStagiaire = $this->entityManager->getRepository(FormationDossierStagiaire::class)->findBy([
                    'stagiaire' => $idStagiaire,
                ]);

                if (!empty($aStagiaire)) {
                    foreach ($aStagiaire as $oStg) {
                        $this->entityManager->remove($oStg);
                    }
                }
            }

            $this->entityManager->flush();

            return new JsonResponse(['msg' => 'Formation supprimé']);
        } catch (Exception $e) {
            return new JsonResponse(['msg' => $e->getMessage()]);
        }
    }

    /**
     * @Route("/formation/delete-om", name="delete_om_formation", methods={"DELETE"})
     */
    public function deleteOMForamtionAsync(Request $request) {
        try {
            $idOM = $request->request->get('id');
            $oOM = $this->entityManager->getRepository(FormationSuiviOrdredemission::class)->find($idOM);

            if ($oOM instanceof FormationSuiviOrdredemission) {
                $this->entityManager->remove($oOM);
            }

            $this->entityManager->flush();

            return new JsonResponse(['msg' => 'Ordre de mission supprimé']);
        } catch (Exception $e) {
            return new JsonResponse(['msg' => $e->getMessage()]);
        }
    }

}
