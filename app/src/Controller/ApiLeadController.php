<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\Void_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ApiLeadController extends AbstractController
{
    /**
     * @Route("/api/lead", name="api_lead")
     */
    public function index(Request $request): Void_
    {
        dd($request->request);
    }
}
