<?php

namespace App\Form\DataTransformer;

use App\Entity\NoteActionStatut;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Description of DateTimeTransformer
 *
 */
class StatusActionTransformer implements DataTransformerInterface {
    
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
    public function transform($statutactionid) {

        // no issue number? It's optional, so that's ok
        if (!$statutactionid) {
            return;
        }

        $statutaction = $this->entityManager
            ->getRepository(NoteActionStatut::class)
            // query for the issue with this id
            ->find($statutactionid)
        ;

        if (null === $statutaction) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An user with id "%s" does not exist!',
                $statutaction
            ));
        }

        return $statutaction;
    }


    /**
     * Transforms a string to an object (DateTime).
     *
     */
    public function reverseTransform($statutaction) {

        if (null === $statutaction) {
            return null;
        }

        return $statutaction->getId();
    }

}
