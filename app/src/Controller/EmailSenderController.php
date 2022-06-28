<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MailingType;

class EmailSenderController extends BaseController
{
    /**
     * @Route("/email/sender", name="email_sender")
     */
    public function index(Request $request, EntityManagerInterface $em, \Swift_Mailer $mailer): Response
    {
        

        $form = $this->createForm(MailingType::class, null, [
            'method' => 'POST',
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $message = (new \Swift_Message($data['subject']))
                ->setFrom($data['from'])
                ->setTo($data['to'])
                ->setBody($data['body'], 'text/html')
            ;
            $mailer->send($message);
            $this->addFlash('success', 'Email envoyé');
            return $this->redirectToRoute('email_sender');
        }
        $this->viewParams["controller_name"] = "EmailSenderController";
        $this->viewParams["form"] = $form->createView();
        return $this->render('email_sender/index.html.twig', $this->viewParams);
    }
}
