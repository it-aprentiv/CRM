<?php

namespace App\Form\DataTransformer;

use App\Entity\Competence;
use App\Entity\Ville;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class IntituleTransformer implements DataTransformerInterface
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
    public function transform($id)
    {
        return;
    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($competence) {

        if (null === $competence || "" === $competence) {
            return null;
        }

        if(intval($competence) > 0 ) {
            $oville = $this->entityManager
                ->getRepository(Competence::class)
                // query for the issue with this id
                ->find($competence);
        }
        else{
            $oville = $this->entityManager
                ->getRepository(Competence::class)
                // query for the issue with this id
                ->findOneBy(["competence" => $competence]);
        }

        if(null === $oville){
            throw new TransformationFailedException(sprintf(
                'l\'intitule "%s" n\'existe pas!',
                $competence
            ));
        }

        return $oville->getCompetence();
    }
}