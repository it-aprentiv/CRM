<?php

namespace App\Controller;

use App\Constants\ExtractionDossierType;
use App\Constants\Menu;
use App\Entity\Collaborateur;
use App\Entity\CommissionStatut;
use App\Entity\Filter\CommissionFilter;
use App\Entity\FormationDossierStatut;
use App\Form\EditStatusType;
use App\Form\Filter\CommissionFilterType;
use App\Manager\FormationDossierManager;
use App\Repository\CollaborateurRepository;
use App\Repository\CommissionStatutRepository;
use App\Repository\EncaissementFactureLieeRepository;
use App\Repository\FormationDossierRepository;
use App\Repository\FormationDossierStatutRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class CommissionController
 * @package App\Controller
 *
 * @Route("/commission")
 */
class CommissionController extends BaseController
{
    /**
     * @var EncaissementFactureLieeRepository
     */
    private $repository;

    /**
     * CommissionController constructor.
     *
     * @param Security $security
     * @param EntityManagerInterface $entityManager
     * @param EncaissementFactureLieeRepository $repository
     */
    public function __construct(
        Security $security,
        EntityManagerInterface $entityManager,
        EncaissementFactureLieeRepository $repository
    ) {
        parent::__construct($security, $entityManager);
        $this->repository = $repository;
    }

    /**
     * @Route("/suivi", name="Suivi_Commissions_Controller")
     * @param PaginatorInterface $paginator
     * @param Request $request
     *
     * @param CommissionStatutRepository $statutRepository
     *
     * @return Response
     */
    public function suivi(
        PaginatorInterface $paginator,
        Request $request,
        CommissionStatutRepository $statutRepository,
        FormationDossierManager $formationDossierManager
    ) {
        
        $this->denyAccessUnlessGranted("view", Menu::MENU_SUIVI_COMMISSION);
        $comsFilter = new CommissionFilter();
        $comsFilter->setUserId($this->getUser()->getIdutilisateur());
        // APR-145 : Restreindre la liste des commissions = commission du comm connecté  
        // APR-169 : Un admin ou service administratif (ROLE_DIRECTION) peut voir toutes les commissions
        if ($this->isGranted("ROLE_ADMIN") || $this->isGranted("ROLE_DIRECTION") ) {
            $comsFilter->setUserId(null);
        }
        
        $status = $statutRepository->findAll();
        $status_choice = ['Status' => ''];
        
        foreach ($status as $statut) {
            $status_choice[$statut->getStatut()] = $statut->getId();
        }

        $form = $this->createForm(
            CommissionFilterType::class,
            $comsFilter,
            [
                'method' => 'GET',
                'stat_choice' => $status_choice
            ]
        );

        $form->handleRequest($request);
        $suiviQuery = $this->repository->getQueryOnlist($comsFilter);
        $this->viewParams['pagination'] = $paginator->paginate($suiviQuery, $request->query->get('page', 1), 10);
        $this->viewParams['form_filter'] = $form->createView();
        
        // Debut APR-217 : Dupliquer le bouton extraction dans suivi commission
        // variable pour accéder aux constantes "type extraction"
        $this->viewParams['extractConst'] = new ExtractionDossierType();
        /** @var FormationDossierStatutRepository $oFormationDossierStatutRepo */
        $oFormationDossierStatutRepo = $this->em->getRepository(FormationDossierStatut::class);
        $this->viewParams['dossierStatut'] = $oFormationDossierStatutRepo->selectAllStatutLibelle();
        $this->viewParams['comStatuts'] = $this->em->getRepository(CommissionStatut::class)->findAll();
        /** @var CollaborateurRepository $oCollaborateurRepo */
        $oCollaborateurRepo = $this->em->getRepository(Collaborateur::class);
        $this->viewParams['commercials'] = $oCollaborateurRepo->getQueryCollaborateurList()
            ->select('c.id, c.nomPrenom')->getQuery()
            ->getResult();

        $this->viewParams['dossierEnattenteExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::DOSSIER_EN_ATTENTE_ACCORD);
        $this->viewParams['suiviencaissExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::SUIVI_ENCAISSEMENT);
        $this->viewParams['dossFactOpcaExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::DOSSIER_FACT_OPCA);
        $this->viewParams['dossFactClientExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::DOSSIER_FACT_CLIENT);
        $this->viewParams['gestionlocExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_DOSSIER_LOC);
        $this->viewParams['dossprospereExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_DOSSIER_PROS);
        $this->viewParams['dossproformExtractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_DOSSIER_PROFORM);
        $this->viewParams['customextractColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::EXTRACTION_PERSONNALISE);
        $this->viewParams['suivicomColumns'] = $formationDossierManager->getExtractHeader(ExtractionDossierType::GESTION_SUIVI_COM);
        // Fin APR-217 : Dupliquer le bouton extraction dans suivi commission

        return $this->render('commission/suivi_coms.html.twig', $this->viewParams);
    }

    /**
     * @Route("/{id}/detail", name="Suivi_Commissions_Detail", methods={"GET", "POST"})
     * @param Request $request
     *
     * @param string $id
     * @param CommissionStatutRepository $statutRepository
     *
     * @return Response
     * @throws NonUniqueResultException
     */
    public function detail(Request $request,string $id, CommissionStatutRepository $statutRepository)
    {
        $detail = $this->repository->findInfoComplet($id);
        $dossier = null;
        
        if ($detail['source'] == 'dossier') {
            $dossier = $this->em->find('App\Entity\FormationDossier', $detail['dossId']);
        } else if ($detail['source'] == 'domiciliation/location') {
            $dossier = $this->em->find('App\Entity\Domiciliation', $detail['domiciliation_id']);
        }

        $status = $statutRepository->findAll();
        $status_choice = ['' => ''];
        
        foreach ($status as $statut) {
            $status_choice[$statut->getStatut()] = $statut->getId();
        }

        $form = $this->createForm(EditStatusType::class, $dossier, [
            'action' => $this->generateUrl('Suivi_Commissions_Detail', ['id' => $id]),
            'stat_choice' => $status_choice,
            'source' => $detail['source']
        ]);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($dossier);
            $this->em->flush();

            $data = ['success' => true];

            $this->addFlash(
                'success',
                "Statut de commission modifié avec succèes"
            );

            return $this->json($data);
        }

        $this->viewParams['detail'] = $detail;
        $this->viewParams['form'] = $form->createView();

        return $this->render('commission/suivi_detail.hml.twig', $this->viewParams);
    }

    /**
     * @Route("/{id}/supprimer", name="Suivi_Commissions_Supprimer", methods={"GET", "POST", "DELETE"})
     * @param Request $request
     *
     * @return Response
     */
    public function delete($id, Request $request)
    {
        $comm = $this->repository->find($id);

        $url = $this->generateUrl('Suivi_Commissions_Supprimer', ['id' => $id]);

        $form = $this->getDeletForm($url);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->em->remove($comm);
            $this->em->flush();

            $this->addFlash(
                'success',
                "Commission supprimée avec succèes"
            );

            $data = ['success' => true];

            return $this->json($data);
        }

        return $this->render('comfirm.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @param string $url
     *
     * @return FormInterface
     */
    private function getDeletForm(string $url)
    {
        return $this->createFormBuilder()
            ->setAction($url)
            ->setMethod('POST')
            ->getForm();
    }
}
