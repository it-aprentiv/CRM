<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Contact;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class OpcaObjectTransformer implements DataTransformerInterface
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

        return $opca->getNomStr();

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
            ->findOneBy(["id" => $opca, "idType" => 3 ])
        ;
        
        if(null == $oopca){
            return null;
        }

        return $oopca;
    }
}