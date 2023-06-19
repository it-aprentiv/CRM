<?php

namespace App\Repository;

use App\Entity\Filter\LogFilter;
use App\Entity\Log;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Log|null find($id, $lockMode = null, $lockVersion = null)
 * @method Log|null findOneBy(array $criteria, array $orderBy = null)
 * @method Log[]    findAll()
 * @method Log[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Log::class);
    }

    /**
     * @param LogFilter|null $filter
     * @return \Doctrine\ORM\Query
     */
    public function findLogQuery(LogFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('l')
        ->leftJoin('App\Entity\Utilisateur', 'u', 'WITH', 'u.idutilisateur = l.user' );

        if ($filter->getId()) {
            $qb->andWhere($qb->expr()->eq('l.id', ':id'));
            $qb->setParameter('id', $filter->getId());
        }
        if ($filter->getMessage()) {
            $qb->andWhere($qb->expr()->eq('l.message', ':message'));
            $qb->setParameter('message', $filter->getMessage());
        }
        if ($filter->getLevelName()) {
            $qb->andWhere($qb->expr()->eq('l.levelName', ':levelName'));
            $qb->setParameter('levelName', $filter->getLevelName());
        }
        if ($filter->getUser()) {
            $qb->andWhere($qb->expr()->eq('l.user', ':user'));
            $qb->setParameter('user', $filter->getUser());
        }
        //filtre date de creation
        if ($filter->getCreation()) {
            $sDateCreation = date_create_from_format('d/m/Y', $filter->getCreation());
            $qb->andWhere($qb->expr()->eq($qb->expr()->substring('l.createdAt',1,10), ':creation'));
            $qb->setParameter(':creation', $sDateCreation->format('Y-m-d'));
        }
        
        return $qb
        ->orderBy("l.id", 'DESC')
        ->getQuery()
        ->getResult(); 
    }

    /*
    public function findOneBySomeField($value): ?Log
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
