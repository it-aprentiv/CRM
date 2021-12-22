<?php

namespace App\EventListener;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;

class LoginListener
{
    private $logger;

    public function __construct(LoggerInterface $dbLogger, EntityManagerInterface $em)
    {
        $this->logger = $dbLogger;
        $this->em = $em;

    }

	public function onSecurityAuthenticationSuccess(AuthenticationEvent $event)
	{
		$user = $event->getAuthenticationToken()->getUser();
        if ($user instanceof Utilisateur)
            {
                $this->logger->info('Connexion de ' . $user->getNomutilisateur());
            }
    }
}