<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 06/12/2019
 * Time: 08:45
 */

namespace App\Form\DataTransformer;


use App\Entity\Url;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class SecteurActiviteTransformer
 * @package App\Form\DataTransformer
 */
class SiteWebTransformer implements DataTransformerInterface
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
    public function transform($siteweb)
    {
        if (null ===$siteweb ) {
            return null;
        }
        $site = $this->entityManager
            ->getRepository(Url::class)
            // query for the issue with this id
            ->find($siteweb)
        ;
        if(null === $site){
            return null;
        }

        return $site->getUrl();
    }

    /**
     * Transforms a string to an object (Civilite).
     *
     */
    public function reverseTransform($siteweb) {

        if(trim($siteweb) != ''){
            $site = new Url();
            $site->setUrl($siteweb);

            return $site;
        }

        return $siteweb;
    }
}