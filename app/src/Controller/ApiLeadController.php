<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\Void_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Lead;
use App\Form\ApiLeadType;
use Doctrine\ORM\EntityManagerInterface;

class ApiLeadController extends AbstractController
{
    /**
     * @Route("/api/lead", name="api_lead")
     */
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $lead = new Lead;
        $form = $this->createForm(ApiLeadType::class, $lead, ['method' => 'POST']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em->persist($lead);
            $em->flush();

            //$this->addFlash('success', 'Lead créé avec succés!');
            //return $this->redirectToRoute('Fiche_lead_Controller/editLead', array('id' => $lead->getId()));
        }
        $this->viewParams['lead'] = $lead;
        $this->viewParams['form'] = $form->createView();
        return $this->render('apilead/apilead.html.twig', $this->viewParams);

      //  dd($request->request);
    }
}
