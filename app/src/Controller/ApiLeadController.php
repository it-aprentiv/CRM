<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\Void_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Lead;
use App\Entity\LeadNote;
use App\Form\ApiLeadType;
use Doctrine\ORM\EntityManagerInterface;


class ApiLeadController extends AbstractController
{
    /**
     * @Route("/api/lead", name="api_lead")
     */
    public function index(Request $request, EntityManagerInterface $em,\Swift_Mailer $mailer): Response
    {
        $lead = new Lead;
        $form = $this->createForm(ApiLeadType::class, $lead, ['method' => 'POST']);
        $form->handleRequest($request);
        $page = $request->query->get("page");
        if ($form->isSubmitted() && $form->isValid()) 
        {            
            $commentaire = new LeadNote();
            $commentaire->setTexteNote($lead->getMessage());
            $lead->addCommentaire($commentaire);
            //$em->persist($lead);
            //$em->flush();
            $message = (new \Swift_Message('Hello Email'))
            ->setFrom($lead->getEmail())
            ->setTo('abdulah@aprentiv.com')
            ->setBody(
               "<h1>".$lead->getMessage()."</h1><br /><p>La page est : ".$page."</p>",
                'text/html'
            );
    
        $mailer->send($message);
        $this->addFlash('success', 'Lead créé avec succés!');
            //return $this->redirectToRoute('Fiche_lead_Controller/editLead', array('id' => $lead->getId()));
        }
        $this->viewParams['lead'] = $lead;
        $this->viewParams['form'] = $form->createView();
        return $this->render('apilead/apilead.html.twig', $this->viewParams);

      //  dd($request->request);
    }
}
