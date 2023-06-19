<?php

namespace App\Form\DataTransformer;

use App\Entity\Contact;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class OpcaTransformer implements DataTransformerInterface
{
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
    public function transform($opca)
    {
        if (!$opca) {
            return;
        }

        return $opca;

    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($opca) {

        if (null === $opca) {
            return null;
        }

        $oopca = $this->entityManager
            ->getRepository(Contact::class)
            // query for the issue with this id
            ->find($opca)
        ;
        
        if(null == $oopca){
            return null;
        }

        return $oopca;
    }
}