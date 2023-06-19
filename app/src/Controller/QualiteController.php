<?php

namespace App\Controller;

use App\Entity\Qualite;
use App\Form\QualiteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QualiteController extends AbstractController
{
    /**
     * @Route("/qualite", name="qualite")
     */
    public function index()
    {
        return $this->render('qualite/index.html.twig', [
            'controller_name' => 'QualiteController',
        ]);
    }

    /**
     * @Route("/qualite/addmodal", name="qualite_add", methods={"POST"})
     */
    public function QualiteFormAdd(EntityManagerInterface $em,Request $request)
    {
        $qualite = new Qualite();
        $QualiteFormAdd = $this->createForm(QualiteType::class, $qualite, ['method' => 'POST']);
        $QualiteFormAdd->handleRequest($request);

        if ( $QualiteFormAdd->isSubmitted() && $QualiteFormAdd->isValid() ) {
            try {
                $em->persist($qualite);
                $em->flush();
                $this->addFlash('success_message', 'Qualité : '. $qualite->getNomQualite() . " ajoutée dans la liste");

                return $this->json([
                                        "success_message"=>"Nouveau qualité ajouter",
                                        "code_success"=>1,
                                        "lastinsertion_id"=>$qualite->getId(),
                                        "oqualite" => $qualite
                                    ],200);
            }
            catch (\Exception $ex) {
                $this->addFlash('error_message', "l'ajout de la qualité a échoué");

                return $this->json(["error_message"=>$ex->getMessage(),"code_erreur"=>$ex->getCode()],500);
            }
        }
        $this->viewParams['add_forme'] = $QualiteFormAdd->createView();

        return $this->render('qualite/modal.add.qualite.html.twig', $this->viewParams);
    }
}
