<?php

namespace App\Repository;

use App\Entity\Assomenuutilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Assomenuutilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Assomenuutilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Assomenuutilisateur[]    findAll()
 * @method Assomenuutilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssomenuutilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Assomenuutilisateur::class);
    }


    /**
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function updateMenuUtilisateur($value)
    {

        $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /**
     * Suppression des menus utilisateurs
     * @param $userId
     * @return mixed
     */
    public function removeMenuUtilisateurMapping($userId) {
        $qb = $this->createQueryBuilder('amu');

        return $this
            ->createQueryBuilder('amu')
            ->delete()
            ->where($qb->expr()->eq('amu.idutilisateur', ':userId'))
            ->setParameter('userId', $userId)
            ->getQuery()
            ->execute()
        ;
    }

}
