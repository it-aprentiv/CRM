<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Qualite;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class QualiteTransformer implements DataTransformerInterface
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
    public function transform($nomqualite)
    {
        if (!$nomqualite) {
            return;
        }

        $qualite = $this->entityManager
            ->getRepository(Qualite::class)
            // query for the issue with this id
            ->findOneBy(["nomQualite" => $nomqualite])
        ;

        return $qualite;

    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($qualite) {

        if (null === $qualite) {
            return null;
        }

        $oqualite = $this->entityManager
            ->getRepository(Qualite::class)
            // query for the issue with this id
            ->find($qualite)
        ;

        return $oqualite->getNomQualite();
    }
}