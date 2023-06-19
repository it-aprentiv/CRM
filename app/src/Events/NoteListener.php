<?php
namespace App\Events;

use App\Entity\Note;
use App\Entity\NoteNomTable;
use Doctrine\ORM\Event\LifecycleEventArgs;

class NoteListener
{

    public function postPersist(Note $entity, LifecycleEventArgs $args)
    {
        if(!is_object($entity))
            return;
        $notenomtable = new NoteNomTable();
        $notenomtable->setIdNote($entity->getId());
        $notenomtable->setNomtable($entity->getNomTable());
        $entityManager = $args->getEntityManager();
        $entityManager->persist($notenomtable);
        $entityManager->flush();
    }

    public function postUpdate(Note $entity, LifecycleEventArgs $args)
    {
        $entity->setIdUserAdd($entity->getIdUserAdd());
        $entitymanager = $args->getEntityManager();
        $entitymanager->persist($entity);
        $entitymanager->flush();
    }
}