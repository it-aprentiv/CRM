<?php

namespace App\Repository;

use App\Entity\Collaborateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Collaborateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Collaborateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Collaborateur[]    findAll()
 * @method Collaborateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollaborateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Collaborateur::class);
    }

    /**
     * Pour autocompletion
     * Récupère la liste des commercials
     * @param string $searchTerm
     * @return array
     */
    public function getCommercial(string $searchTerm)
    {
        $qb = $this->createQueryBuilder('com');

        return $qb
            ->select('DISTINCT com.id, com.nomPrenom AS commercial')
            ->where($qb->expr()->like('com.nomPrenom', ':filter'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->orderBy('commercial', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function getQueryCollaborateurList() {
        return $this->createQueryBuilder('c')
            ->orderBy('c.nomPrenom', 'ASC')
            ;
    }

    public function findAllCollaborateur($excepted = null){
        $qt = $this->createQueryBuilder('c')
            ->where("c.statut = 1");
        if($excepted) {
            $qt->orWhere("c.id = ".$excepted->getId());
        }

        return $qt->orderBy('c.nomPrenom', 'ASC');
    }
}
