<?php

namespace App\Controller;

use App\Entity\Qualite;
use App\Entity\Ville;
use App\Form\QualiteType;
use App\Form\VilleType;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use function dd;

class VilleController extends AbstractController
{
    /**
     * Ajout d'une nouvelle ville
     * 
     * @Route("/ville/add/modal", name="ville_add", methods={"POST"})
     */
    public function create(EntityManagerInterface $em,Request $request, Security $security)
    {
        $ville = new Ville();
        $villeForm = $this->createForm(VilleType::class, $ville, ['method' => 'POST']);
        $villeForm->handleRequest($request);

        if ( $villeForm->isSubmitted() && $villeForm->isValid() ) {
            try {
                $ville->setIdUserAdd($security->getUser()->getIdutilisateur());
                $ville->setDateAdd(new \DateTime());
                $ville->setIdb(0);
                $em->persist($ville);
                $em->flush();
                $this->addFlash('success_message', 'Ville : '. $ville->getNomVille() . " ajoutée dans la liste");

                return $this->json([
                        "success_message" =>"Nouvelle ville ajoutée",
                        "code_success" => 1,
                        "ville" => $ville
                    ],200);
            }
            catch (Exception $ex) {
                $this->addFlash('error_message', "l'ajout de la ville a échoué");

                return $this->json(["error_message"=>$ex->getMessage(),"code_erreur"=>$ex->getCode()],500);
            }
        }
        $this->viewParams['ville_form'] = $villeForm->createView();

        return $this->render('ville/modal.add.ville.html.twig', $this->viewParams);
    }
}
