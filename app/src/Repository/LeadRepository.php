<?php

namespace App\Repository;

use App\Entity\Filter\LeadFilter;
use App\Entity\Lead;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LeadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lead::class);
    }

    public function findLeadQuery(LeadFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('ld');
        $qb
            ->leftJoin('App\Entity\Collaborateur', 'c', 'WITH', 'c.id = ld.commercial' );
        ;
        
        
        if ($filter) {
            // Filtre par société
            if ($filter->getSociete()) {
                $qb->andWhere($qb->expr()->eq('ld.societe', ':societe'));
                $qb->setParameter('societe', $filter->getSociete());
            }

            if($filter->getNom()){
                $qb->andWhere($qb->expr()->like('ld.nom', ':nom'));
                $qb->setParameter('nom', "%".$filter->getNom()."%");
            }

            if($filter->getPrenom()){
                $qb->andWhere($qb->expr()->like('ld.prenom', ':prenom'));
                $qb->setParameter('prenom', "%".$filter->getPrenom()."%");
            }

            if($filter->getCommercial()){
                $qb->andWhere($qb->expr()->eq('ld.commercial', ':com'));
                $qb->setParameter('com', $filter->getCommercial());
            }

            if($filter->getTelephone()){
                $qb->andWhere($qb->expr()->like('ld.telephone', ":telephone"));
                $qb->setParameter("tel", "%".$filter->getTelephone()."%");
            }

            if($filter->getVille()){
                $qb->andWhere($qb->expr()->like("ld.ville",":ville"));
                $qb->setParameter("ville", $filter->getVille()."%");
            }
            if($filter->getOrigine()){
                $qb->andWhere($qb->expr()->eq("ld.origine", ":origine"));
                $qb->setParameter("origine", $filter->getOrigine());
            }

            if($filter->getStatut()){
                $qb->andWhere($qb->expr()->eq('ld.statut', ':statut'));
                $qb->setParameter('statut', $filter->getStatut());
            }
            
        }
        return $qb
                ->orderBy('ld.id', 'DESC')
                ->getQuery()
        ;
    }

     /**
     * Récupère la liste de societe
     *
     * @param string $searchTerm
     *
     * @return array
     */
    public function getSocietes(string $searchTerm)
    {
        $qb = $this->createQueryBuilder('ld');
        // Pas d'entité societe :(
        return $qb
            ->select('DISTINCT ld.societe AS societe')
            ->where($qb->expr()->like('ld.societe', ':filter'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->orderBy('societe', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

}