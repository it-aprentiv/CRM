<?php

namespace App\Controller;

use App\Entity\Collaborateur;
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
            $dispatchCom = $em->getRepository(Collaborateur::class)->find(21);
            $lead->setCommercial($dispatchCom);
            $lead->addCommentaire($commentaire);
            $em->persist($lead);
            $em->flush();

            //civilité
            if ($lead->getCivilite()=== 3){
                $civ = 'Monsieur';
            }
            else if ($lead->getCivilite()=== 2){
                $civ = 'Mademoiselle';
            }
            else if ($lead->getCivilite()===1){
                $civ = 'Madame';
            }else {
                $civ = " ";
            }

            // si pas de société => société = nom + prenom 

            if ($lead->getSociete()==null){
                $lead->setSociete($lead->getNom()." ".$lead->getPrenom()) ;
            }
            
            $message = (new \Swift_Message('Nouveau LEAD de '.$lead->getNom().' '.$lead->getPrenom() ))
            ->setFrom($lead->getEmail())
            ->setTo('abdulah@aprentiv.com')
            ->setBody(
                "<h2>".$civ." "."<span style='color: red;'>".strtoupper($lead->getNom())." ".$lead->getPrenom()."</span>"."<h2>".
                "<br/>".
                "<h2> Téléphone: "."<span style='color: red;'>".$lead->getTelephone()."</span>"."</h2>".
                "<h2> Email: "."<span style='color: red;'>".$lead->getEmail()."</span>"."</h2>".
                "<h2> Société: "."<span style='color: red;'>".$lead->getSociete()."</span>"."</h2>".
                "<h2> Formation souhaitée: "."<span style='color: red;'>".$lead->getFormation()."</span>"."</h2>".
                "<h2> Quand ?: "."<span style='color: red;'>".$lead->getPeriode()."</span>"."</h2>".
                "<h2> Ville: "."<span style='color: red;'>".$lead->getVille()."</span>"."</h2>".
                "<h2> Financement prévu: "."<span style='color: red;'>".$lead->getFinancement()."</span>"."</h2>".
                "<h2> Type de demande: "."<span style='color: red;'>".$lead->getTyperequest()."</span>"."</h2>".
                "<hr>".
                "<h2> Message :"."<br>".$lead->getMessage()."</h2>".
                "<br>".
                "<h3>Le formulaire a était envoyer depuis la page: ".$page."</h3>",
                'text/html'
            );
    
            $mailer->send($message);
            return $this->redirectToRoute('api_lead_success');
            //return $this->redirectToRoute('Fiche_lead_Controller/editLead', array('id' => $lead->getId()));
        }
        $this->viewParams['lead'] = $lead;
        $this->viewParams['form'] = $form->createView();
        return $this->render('apilead/apilead.html.twig', $this->viewParams);

      //  dd($request->request);
    }

    /**
     * @Route("/api/lead/success", name="api_lead_success")
     */
    public function success(){
        return $this->render('apilead/success.html.twig');
    }
}
