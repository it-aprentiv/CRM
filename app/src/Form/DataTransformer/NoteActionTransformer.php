<?php

namespace App\Form\DataTransformer;

use App\Entity\NoteAction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Description of DateTimeTransformer
 *
 */
class NoteActionTransformer implements DataTransformerInterface {
    
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
    public function transform($actionid) {

        // no issue number? It's optional, so that's ok
        if (!$actionid) {
            return;
        }

        $action = $this->entityManager
            ->getRepository(NoteAction::class)
            // query for the issue with this id
            ->find($actionid)
        ;

        if (null === $action) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An user with id "%s" does not exist!',
                $actionid
            ));
        }

        return $action;
    }

    /**
     * Transforms a string to an object (DateTime).
     *
     */
    public function reverseTransform($action) {

        if (null === $action) {
            return null;
        }

        return $action->getId();
    }

}
