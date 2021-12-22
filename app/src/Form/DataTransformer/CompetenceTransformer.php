<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Competence;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class CompetenceTransformer implements DataTransformerInterface
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
    public function transform($sCompetence)
    {
        
        if (!$sCompetence) {
            return null;
        }

        $oCompetence = $this->entityManager
            ->getRepository(Competence::class)
            // query for the issue with this id
            ->findOneBy(["competence" => $sCompetence])
        ;

        return $oCompetence;

    }

    /**
     * Transforms a string to an object.
     *
     */
    public function reverseTransform($iCompetenceId) {

        if (null === $iCompetenceId) {
            return null;
        }

        $oCompetence = $this->entityManager
            ->getRepository(Competence::class)
            // query for the issue with this id
            ->findOneBy(['competence' => $iCompetenceId ])
        ;

        return $oCompetence;
    }
}