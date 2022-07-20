<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MailingType;
use App\Entity\Mail;

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

            $contactsEmails = $em->getRepository(Mail::class)->findAll();
            // make a filter from contacts emails
            $contactsEmails = array_map(function($contact) {
                return $contact->getMail();
            }, $contactsEmails);

            $contactsEmails = array_filter($contactsEmails, function($email) {
                if($email == "" || $email == "@") {
                    return false;
                } else {
                    return true;
                }
            });
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $to = json_decode($data['to']);
            $from = $data['from'];
            $body = $data['body'];
            $subject = $data['subject'];
            $body = str_replace("/assets/images/uploads","https://crm.aprentiv.fr/assets/images/uploads",$body);
            $body = str_replace("/assets/uploads","https://crm.aprentiv.fr/assets/uploads",$body);

            foreach($to as $email) {
                $message = (new \Swift_Message($subject))
                    ->setFrom($from)
                    ->setTo($email->value)
                    ->setBody($body, 'text/html');
                $mailer->send($message);
            }
            $this->addFlash('success', 'Email envoyé');
            return $this->redirectToRoute('email_sender');
        }
        $this->viewParams['contactsEmails'] = $contactsEmails;
        $this->viewParams["controller_name"] = "EmailSenderController";
        $this->viewParams["form"] = $form->createView();
        return $this->render('email_sender/index.html.twig', $this->viewParams);
    }
}
