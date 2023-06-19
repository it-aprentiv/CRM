<?php

namespace App\Repository;

use App\Entity\Droitspecifique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Droitspecifique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Droitspecifique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Droitspecifique[]    findAll()
 * @method Droitspecifique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DroitspecifiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Droitspecifique::class);
    }

    /**
     * Suppression des menus utilisateurs
     * @param $userId
     * @return mixed
     */
    public function removeMenuUtilisateurMapping($userId) {
        $qb = $this->createQueryBuilder('ds');

        return $this
            ->createQueryBuilder('ds')
            ->delete()
            ->where($qb->expr()->eq('ds.utilisateur', ':userId'))
            ->setParameter('userId', $userId)
            ->getQuery()
            ->execute()
            ;
    }
}
