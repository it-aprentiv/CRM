<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 29/12/2019
 * Time: 11:13
 */

namespace App\Repository;

use App\Entity\FormateurStatut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class FormateurStatutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormateurStatut::class);
    }


    public function getQueryListStatutFormateur() {
        $qb = $this->createQueryBuilder('f')
            ->orderBy('f.statut', 'ASC')
            ;

        return $qb;
    }
}