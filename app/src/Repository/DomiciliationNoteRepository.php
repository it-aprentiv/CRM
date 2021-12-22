<?php
/**
 * file DomiciliationNoteRepository.php
 */

namespace App\Repository;

use App\Entity\DomiciliationNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class DomiciliationNoteRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, DomiciliationNote::class);
    }

    public function getNotes($id){
        $qb = $this->createQueryBuilder('n')
            ->select('n');

        $qb->where($qb->expr()->eq('n.idTable', ':id'))
            ->setParameter('id', $id)
            ->addCriteria(NoteRepository::notDeletedCriteria());

        return $qb->getQuery()->getResult();
    }
}