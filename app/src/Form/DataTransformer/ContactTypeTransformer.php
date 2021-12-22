<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\ContactType;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class ContactTypeTransformer implements DataTransformerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function transform($idcontacttype)
    {
        if (!$idcontacttype) {
            return;
        }

        $contacttype = $this->entityManager
            ->getRepository(ContactType::class)
            // query for the issue with this id
            ->find($idcontacttype)
        ;

        if (null === $contacttype) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'la type de client ou prospet "%s" n\'existe pas!',
                $idcontacttype
            ));
        }

        return $contacttype;

    }

    public function reverseTransform($contacttype) {

        if (null === $contacttype) {
            return null;
        }

        return $contacttype->getId();
    }
}