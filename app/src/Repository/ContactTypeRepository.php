<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 29/11/2019
 * Time: 11:48
 */

namespace App\Repository;

use App\Entity\ContactType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class ContactTypeRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactType::class);
    }

    public function findClientProspetContactType()
    {
        $qb = $this->createQueryBuilder('ctr');
        return $qb
            ->where($qb->expr()->in('ctr.id',':type'))
            ->setParameter('type', [1,2,13])
            ->orderBy('ctr.typeContact', 'ASC');
    }

    public function findFormateurContactType()
    {
        $qb = $this->createQueryBuilder('ctr');
        return $qb
            ->where($qb->expr()->in('ctr.id',':type'))
            ->setParameter('type', 6)
            ->orderBy('ctr.typeContact', 'ASC');
    }
}