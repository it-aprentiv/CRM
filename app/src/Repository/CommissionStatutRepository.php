<?php

namespace App\Repository;

use App\Entity\CommissionStatut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CommissionStatut|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommissionStatut|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommissionStatut[]    findAll()
 * @method CommissionStatut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommissionStatutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommissionStatut::class);
    }

    /**
     * Récupération de tous les statuts de commission disponibles
     * @return mixed
     */
    public function getAvailableStatuts() {
        return $this
            ->createQueryBuilder('comstat')
            ->select('comstat.statut')
            ->getQuery()
            ->getScalarResult()
        ;
    }
}
