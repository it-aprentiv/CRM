<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Contact;
use App\Entity\Qualite;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class OpcaTnsTransformer implements DataTransformerInterface
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
    public function transform($opca)
    {
        if (!$opca) {
            return;
        }

        $oopca = $this->entityManager
            ->getRepository(Contact::class)
            ->findOneBy(["nomStr" => $opca,"idType" => 3]);
        return $oopca;

    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($opca) {

        if (null === $opca) {
            return null;
        }

        $oopca = $this->entityManager
            ->getRepository(Contact::class)
            // query for the issue with this id
            ->find($opca)
        ;

        if(null == $oopca){
            throw new TransformationFailedException(sprintf(
                'l\'opca "%s" n\'existe pas!',
                $opca
            ));
        }

        return $oopca->getnomStr();
    }
}