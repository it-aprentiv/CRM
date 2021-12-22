<?php

namespace App\EventListener;

use App\Entity\Contact;
use App\Entity\FormationDossier;
use App\Entity\Log;
use App\Entity\Propal;
use Doctrine\ORM\Events;
use Psr\Log\LoggerInterface;
use Doctrine\Common\EventSubscriber;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class DoctrineSuscriber implements EventSubscriber
{
    private $logger;

    public function __construct(LoggerInterface $dbLogger)
    {
        $this->logger = $dbLogger;
    }

    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postUpdate,
            Events::postRemove,
            Events::preRemove
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $this->log('ajouté(e)', $args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->log('modifé(e)', $args);
    }

    public function preRemove(LifecycleEventArgs $args): void {
        $entity = $args->getObject();
        $entity->historicalId = $entity->getId(); // $historicalId is not defined or referenced anywhere but here
    }
    
    public function postRemove(LifecycleEventArgs $args): void {
        $entity = $args->getObject(); // the old ID is accessible via $entity->historicalId
        //$id = $entity->historicalId;
        $this->log(' supprimé(e)', $args);
    }

    public function log($message, $args)
    {
        $entity = $args->getEntity();
        if (!($entity instanceof Log)) {
            if ($entity instanceof Contact)
            {
                if ($entity->getNomStr() == null)
                {
                    $this->logger->info('Contact ' . $entity->getNom() . ' ' . $entity->getPrenom() . ' '. $message);
                }
                else
                {
                    $this->logger->info('Contact ' . $entity->getNomStr() . ' ' . $message);
                }
            }
            if ($entity instanceof FormationDossier)
            {
                $this->logger->info('Dossier ' . $entity->getIdClient() . ' ' . $message);
            }
            if ($entity instanceof Propal)
            {
                $this->logger->info('Propal ' . $entity->getClientpropal() . ' ' . $message);
            }
        }
    }
}