<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionSalleController extends BaseController
{
    /**
     * @Route("/gestion/salle", name="gestion_salle")
     */
    public function index(): Response
    {

        $this->viewParams["controller_name"] = "GestionSalleController";
        return $this->render('gestion_salle/index.html.twig',$this->viewParams);
    }
}
