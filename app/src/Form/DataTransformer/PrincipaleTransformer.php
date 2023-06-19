<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class PrincipaleTransformer implements DataTransformerInterface
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
    public function transform($principale)
    {

        return $principale;
    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($principale) {

        return $principale;
    }
}