<?php

namespace App\Repository;

use App\Entity\CritFinOpca;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CritFinOpca|null find($id, $lockMode = null, $lockVersion = null)
 * @method CritFinOpca|null findOneBy(array $criteria, array $orderBy = null)
 * @method CritFinOpca[]    findAll()
 * @method CritFinOpca[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CritFinOpcaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CritFinOpca::class);
    }


    public function findByIdOpca($idOpca)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.idOpca = :idOpca')
            ->setParameter('idOpca', $idOpca)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?CritFinOpca
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
