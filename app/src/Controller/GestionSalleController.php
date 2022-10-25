<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionSalleController extends AbstractController
{
    /**
     * @Route("/gestion/salle", name="gestion_salle")
     */
    public function index(): Response
    {
        return $this->render('gestion_salle/index.html.twig', [
            'controller_name' => 'GestionSalleController',
        ]);
    }
}
