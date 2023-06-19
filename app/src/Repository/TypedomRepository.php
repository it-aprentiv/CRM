<?php

namespace App\Repository;

use App\Entity\Typedom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class TypedomRepository extends ServiceEntityRepository
{
    private $test;

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Typedom::class);
    }

    public function getByLibelle($sLibelle){
        $oSql = $this->createQueryBuilder('t');

        $oSql->select('t')
            ->where('LOWER(t.libelle) = :libelle')
            ->setParameter('libelle', strtolower($sLibelle));

        return $oSql->getQuery()->getResult();
    }

    public function setTest(){
        $this->test = 1;
    }
}