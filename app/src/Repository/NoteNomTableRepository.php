<?php

namespace App\Repository;

use App\Entity\NoteNomTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NoteNomTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoteNomTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoteNomTable[]    findAll()
 * @method NoteNomTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoteNomTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoteNomTable::class);
    }

    // /**
    //  * @return NoteNomTable[] Returns an array of NoteNomTable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NoteNomTable
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
