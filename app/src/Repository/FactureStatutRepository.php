<?php

namespace App\Repository;

use App\Entity\FactureStatut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FactureStatut|null find($id, $lockMode = null, $lockVersion = null)
 * @method FactureStatut|null findOneBy(array $criteria, array $orderBy = null)
 * @method FactureStatut[]    findAll()
 * @method FactureStatut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureStatutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FactureStatut::class);
    }

    // /**
    //  * @return FactureStatut[] Returns an array of FactureStatut objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FactureStatut
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
