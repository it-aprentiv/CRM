<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Ville;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class VilleTransformer implements DataTransformerInterface
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
    public function transform($nomville)
    {
        if (null === $nomville) {
            return null;
        }
        if(is_int($nomville)){
            $ville = $this->entityManager
                ->getRepository(Ville::class)
                // query for the issue with this id
                ->find($nomville)
            ;
            if(null !== $ville && is_object($ville)){
                return $ville->getNomVille();
            }
        }
        $ville = $this->entityManager
            ->getRepository(Ville::class)
            // query for the issue with this id
            ->findOneBy(["nomVille" => $nomville])
        ;

        if (null === $ville) {
            return;
        }

        return $ville->getNomVille();

    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($ville) {

        if (null === $ville || "" === $ville) {
            return null;
        }

        $oville = $this->entityManager
            ->getRepository(Ville::class)
            // query for the issue with this id
            ->findOneBy(["nomVille" => $ville])
        ;

        if(null === $oville){
            throw new TransformationFailedException(sprintf(
                'la ville "%s" n\'existe pas!',
                $ville
            ));
        }

        return $oville->getId();
    }
}