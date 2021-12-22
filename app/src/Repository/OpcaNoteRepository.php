<?php

namespace App\Repository;

use App\Entity\OpcaNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method OpcaNote|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpcaNote|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpcaNote[]    findAll()
 * @method OpcaNote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpcaNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OpcaNote::class);
    }


    public function findByIdOpca($idOpca)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.idOpca = :idOpca')
            ->setParameter('idOpca', $idOpca)
            ->orderBy('o.id', 'ASC')
            ->getQuery()
            ->setMaxResults(1)
            ->getOneOrNullResult()
            //->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?OpcaNote
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
