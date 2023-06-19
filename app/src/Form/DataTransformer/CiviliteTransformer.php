<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Civilite;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class CiviliteTransformer implements DataTransformerInterface
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
    public function transform($idcivilite)
    {
        if (!$idcivilite) {
            return;
        }
        $civilite = $this->entityManager
            ->getRepository(Civilite::class)
            // query for the issue with this id
            ->find($idcivilite)
        ;
        if (null === $civilite) {
            return;
        }

        return $civilite;
    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($civilite) {

        if (null === $civilite) {
            return null;
        }

        return $civilite->getId();
    }
}