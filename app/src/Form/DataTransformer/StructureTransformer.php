<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Structure;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class StructureTransformer implements DataTransformerInterface
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
    public function transform($idstructure)
    {
        if (!$idstructure) {
            return;
        }

        $structure = $this->entityManager
            ->getRepository(Structure::class)
            // query for the issue with this id
            ->find($idstructure)
        ;

        if (null === $structure) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'la civilite "%s" n\'existe pas!',
                $idstructure
            ));
        }

        return $structure;

    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($structure) {

        if (null === $structure) {
            return null;
        }

        return $structure->getId();
    }
}