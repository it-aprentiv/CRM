<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendrierFormationController extends BaseController
{

    /**
     * @Route("/calendrierformation", name="calendrier_formation")
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {


        return $this->render('calendrier/index.html.twig', $this->viewParams);
    }
}