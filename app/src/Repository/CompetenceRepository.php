<?php

namespace App\Repository;

use App\Entity\Competence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Competence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Competence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Competence[]    findAll()
 * @method Competence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Competence::class);
    }

    public function getCompetence(string $searchTerm){
        $qb = $this->createQueryBuilder('c');

        return $qb
            ->select('DISTINCT c.id, c.competence AS competence, c.themeformation, c.themegenerale')
            ->where($qb->expr()->like('c.competence', ':filter'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->orderBy('competence', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function getCompetenceByName(string $searchTerm){
        $qb = $this->createQueryBuilder('c');

        return $qb
            ->select('DISTINCT c.id, c.competence AS competence, c.themeformation, c.themegenerale')
            ->where($qb->expr()->like('c.competence', ':filter'))
            ->setParameter('filter', trim($searchTerm))
            ->orderBy('competence', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findCompetenceQuery($filter)
    {
        $qb = $this->createQueryBuilder('c');

        $qb->select('DISTINCT c.id, c.competence AS competence, c.themeformation, c.themegenerale, c.catalogueProgramme, c.evaluation ');

        if($filter){
            if ($filter->getIntitule() != '') {
                $qb->andWhere($qb->expr()->like('c.competence', ':filter'))
                    ->setParameter('filter', '%'.$filter->getIntitule().'%');
            }
        }
        return $qb
            ->orderBy('competence', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
