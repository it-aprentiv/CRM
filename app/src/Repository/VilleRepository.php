<?php

namespace App\Repository;

use App\Entity\Ville;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class VilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ville::class);
    }

    public function findOneBy(array $criteria, array $orderBy = null)
    {
        return  parent::findOneBy($criteria, $orderBy);
    }

    /**
     * Pour autocompletion
     * Récupère la liste des villes
     * @param string $searchTerm
     * @return array
     */
    public function getVille(string $searchTerm)
    {
        $qb = $this->createQueryBuilder('v');

        return $qb
            ->select('DISTINCT v.id, v.nomVille as ville')
            ->where($qb->expr()->like('v.nomVille', ':filter'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->orderBy('ville', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

}
