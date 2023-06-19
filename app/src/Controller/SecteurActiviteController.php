<?php

namespace App\Controller;

use App\Entity\SecteurActivite;
use App\Form\SecteurActiviteType;
use App\Repository\SecteurActiviteRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecteurActiviteController extends AbstractController
{
    /**
     * @Route("/secteur/activite", name="secteur_activite")
     */
    public function index()
    {
        return $this->render('secteur_activite/index.html.twig', [
            'controller_name' => 'SecteurActiviteController',
        ]);
    }

    /**
     * @Route("/secteur/activite/add", name="secteur_activite_add", methods={"POST"})
     */
    public function SecteurActiviteForm(EntityManagerInterface $em, Request $request)
    {
        $secteuractivite = new SecteurActivite();
        $AddForm = $this->createForm(SecteurActiviteType::class, $secteuractivite, ['method' => 'POST']);
        $AddForm->handleRequest($request);
        if ( $AddForm->isSubmitted() && $AddForm->isValid() )
        {
            try {
                $em->persist($secteuractivite);
                $em->flush();
                $this->addFlash('success_message', 'Secteur activité : '. $secteuractivite->getSecteur() . " ajoutée");

                return $this->json([
                                    "success_message"   => "Nouveau secteur activité ajouter",
                                    "code_success"      =>  1,
                                    "lastinsertion_id"  => $secteuractivite->getId(),
                                    "oactivite"         => $secteuractivite
                                ],200);
            }
            catch (Exception $ex){
                $this->addFlash('error_message', "l'ajout du secteur activité a échoué");

                return $this->json(["error_message"=>$ex->getMessage(),"code_erreur"=>$ex->getCode()],500);
            }
        }

        $this->viewParams['add_forme'] = $AddForm->createView();

        return $this->render('secteur_activite/modal.add.activite.html.twig', $this->viewParams);
    }
    
    /**
     * APR-121 : Autocompletion des secteurs d'activité 
     * @param Request $request
     * @Route("/secteur_activite/list", name="crm.secteur_activite.asynch-search", methods={"GET","POST"})
     */
    public function asynchSearch(Request $request, SecteurActiviteRepository $secteurActiviteRepository) {
        $response = array();
        $searchTerm = $request->query->get('search', '');

        if (trim(strlen($searchTerm)) >= 3) {
            $secteurs = $secteurActiviteRepository->findSecteurActivite($searchTerm);

            foreach ($secteurs as $secteur) {
                $response['results'][] = [
                    'id' => $secteur['id'],
                    'text' => $secteur['secteur']
                ];
            }
        }

        return new JsonResponse($response);
    }
}
