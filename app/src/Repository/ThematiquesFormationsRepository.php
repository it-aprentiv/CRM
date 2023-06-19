<?php

namespace App\Repository;

use App\Entity\ThematiquesFormations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ThematiquesFormations|null find($id, $lockMode = null, $lockVersion = null)
 * @method ThematiquesFormations|null findOneBy(array $criteria, array $orderBy = null)
 * @method ThematiquesFormations[]    findAll()
 * @method ThematiquesFormations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ThematiquesFormationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ThematiquesFormations::class);
    }

    // /**
    //  * @return ThematiquesFormations[] Returns an array of ThematiquesFormations objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ThematiquesFormations
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
