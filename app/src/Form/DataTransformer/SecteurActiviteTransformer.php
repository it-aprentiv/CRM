<?php

namespace App\Form\DataTransformer;

use App\Entity\SecteurActivite;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class SecteurActiviteTransformer implements DataTransformerInterface
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
    public function transform($SecteurId)
    {
        if (!$SecteurId) {
            return;
        }

        $secteur = $this->entityManager
            ->getRepository(SecteurActivite::class)
            // query for the issue with this id
            ->find($SecteurId)
        ;

        if (null === $secteur) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'Un secteur activité "%s" n\'existe pas!',
                $SecteurId
            ));
        }

        return $secteur;

    }

    /**
     * Transforms a string to an object (SecteurActivite).
     *
     */
    public function reverseTransform($SecteurId) {

        if (null === $SecteurId) {
            return null;
        }

        return $SecteurId->getId();
    }
}