<?php

namespace App\Repository;

use App\Entity\SecteurActivite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SecteurActivite|null find($id, $lockMode = null, $lockVersion = null)
 * @method SecteurActivite|null findOneBy(array $criteria, array $orderBy = null)
 * @method SecteurActivite[]    findAll()
 * @method SecteurActivite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SecteurActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SecteurActivite::class);
    }

    public function findallSecteur()
    {
        $qb = $this->createQueryBuilder('sa');

        return $qb
            ->where($qb->expr()->neq('sa.secteur',':secteur'))
            ->setParameter('secteur', '')
            ->andWhere($qb->expr()->isNotNull('sa.secteur'))
            ->orderBy('sa.secteur', 'ASC');
    }
    
    /**
     * Rechercher des secteurs d'activités 
     * @param string $searchTerm
     * @return type
     */
    public function findSecteurActivite(string $searchTerm)
    {
        $qb = $this->createQueryBuilder('sa');

        return $qb
            ->select('sa.id, sa.secteur')
            ->where($qb->expr()->like('sa.secteur', ':filter'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->orderBy('sa.secteur', 'ASC')
            ->groupBy('sa.secteur')
            ->getQuery()
            ->getResult()
            ;
    }
    
    public function findOneByIdOrLabel($search) {
        $qb = $this->createQueryBuilder('sa');

        return $qb
            ->where($qb->expr()->eq('sa.secteur', ':filter'))
            ->orWhere($qb->expr()->eq('sa.id', ':filter'))
            ->setParameter('filter', $search)
            ->getQuery()
            ->setMaxResults(1)
            ->getOneOrNullResult()
            ;
    }
}
