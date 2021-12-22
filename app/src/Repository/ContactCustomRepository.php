<?php

namespace App\Repository;

use App\Entity\ContactCustom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ContactCustom|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactCustom|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactCustom[]    findAll()
 * @method ContactCustom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactCustomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactCustom::class);
    }

    // /**
    //  * @return ContactCustom[] Returns an array of ContactCustom objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactCustom
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
