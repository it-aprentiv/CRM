<?php

namespace App\Form\DataTransformer;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;

class SocieteObjectTransformer implements DataTransformerInterface {
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    /**
     * Transforms an object (User) to a string.
     *
     * @return string
     */
    public function transform($societe) {
        if (null === $societe) {
            return null;
        }

        return $societe->getNomStr();
    }

    /**
     * Transforms a string to an object
     *
     */
    public function reverseTransform($societeid) {
        // no issue number? It's optional, so that's ok
        if (null === $societeid || $societeid == '') {
            return null;
        }

        $societe = $this->entityManager
            ->getRepository(Contact::class)
            // query for the issue with this id
            ->find($societeid);
        if (null === $societe) {
            return null;
        }

        return $societe;
    }

}
