<?php

namespace App\Form\DataTransformer;

use App\Entity\Contact;
use App\Entity\SocieteLiee;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class SocieteLieeTransformer implements DataTransformerInterface {
    
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
    public function reverseTransform($societelie) {

        if (null === $societelie || (is_array($societelie) && count($societelie) == 0) ) {
            return null;
        }

        return new ArrayCollection($societelie);
    }

    /**
     * Transforms a string to an object (DateTime).
     *
     */
    public function transform($societelie) {

        return null;

        if (!$societelie) {
            return;
        }

        $osocietelie = $this->entityManager
            ->getRepository(SocieteLiee::class)
            // query for the issue with this id
            ->find($societelie)
        ;

        if (null === $osocietelie) {
            return;
        }
        return $osocietelie;
    }

}
