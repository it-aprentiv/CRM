<?php

namespace App\Form\DataTransformer;


use App\Entity\Collaborateur;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class CollaborateurTransformer implements DataTransformerInterface
{

    private $entitymanager;

    public function __construct(EntityManagerInterface $entityManager) {

        $this->entitymanager = $entityManager;

    }

    /**
     * transform the Entity child to string
     *
     * @param mixed $value
     * @return string
     */
    public function transform($value) {

        if (!$value) {
            return;
        }

        $oEntity = null;

        try{
            $oEntity = $this->entityManager
                ->getRepository(Collaborateur::class)
                // query for the issue with this id
                ->find($value)
            ;
        }
        catch (\Exception $exception){
            return;
        }

        if (null === $oEntity) {
            return;
        }

        return $oEntity;

    }

    /**
     * transform the id set to the Entity
     *
     * @param mixed $value
     * @return \App\Entity\Collaborateur|mixed|null
     */
    public function reverseTransform($value) {

        if (null === $value) {
            return null;
        }

        return $value->getId();
    }
}