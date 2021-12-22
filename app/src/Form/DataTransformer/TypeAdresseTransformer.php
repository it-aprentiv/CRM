<?php

namespace App\Form\DataTransformer;

use App\Entity\TypeAdresse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Description of DateTimeTransformer
 *
 */
class TypeAdresseTransformer implements DataTransformerInterface {
    
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
    public function transform($typeadresseid) {
        // no issue number? It's optional, so that's ok
        if (!$typeadresseid) {
            return;
        }

        $typeadresse = $this->entityManager
            ->getRepository(TypeAdresse::class)
            // query for the issue with this id
            ->find($typeadresseid)
        ;

        if (null === $typeadresse) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'La type d\'adresse "%s" n\'existe pas!',
                $typeadresse
            ));
        }

        return $typeadresse;

    }

    /**
     * Transforms a string to an object (DateTime).
     *
     */
    public function reverseTransform($typeadresse) {

        if (null === $typeadresse) {
            return null;
        }

        return $typeadresse->getIdTypeAdresse();
    }

}
