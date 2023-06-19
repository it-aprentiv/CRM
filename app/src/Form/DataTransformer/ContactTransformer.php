<?php

namespace App\Form\DataTransformer;


use App\Repository\ContactRepository;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class ContactTransformer implements DataTransformerInterface
{

    private $contactRepo;

    public function __construct(ContactRepository $contactRepository) {
        $this->contactRepo = $contactRepository;
    }

    /**
     * transform the Entity child to string
     *
     * @param mixed $value
     * @return string
     */
    public function transform($oEntity) {
        return (null === $oEntity) ? '' : $oEntity->getId();
    }

    /**
     * transform the id set to the Entity
     *
     * @param mixed $value
     * @return \App\Entity\Contact|mixed|null
     */
    public function reverseTransform($value) {
        $oEntity = null;
        if ($value) {
            $oEntity = $this->contactRepo->find($value);
        }

        if (null === $oEntity && $value) {
            $sExceptionMessage = sprintf('La personne "%s" n\'existe pas !', $value);

            throw new TransformationFailedException($sExceptionMessage);
        }

        return $oEntity;
    }
}