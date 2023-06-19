<?php

namespace App\Repository;

use App\Entity\GestionSceance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GestionSceance|null find($id, $lockMode = null, $lockVersion = null)
 * @method GestionSceance|null findOneBy(array $criteria, array $orderBy = null)
 * @method GestionSceance[]    findAll()
 * @method GestionSceance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GestionSceanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GestionSceance::class);
    }

    // /**
    //  * @return GestionSceance[] Returns an array of GestionSceance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GestionSceance
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
