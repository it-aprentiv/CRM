<?php


namespace App\Repository;


use App\Entity\FormateurNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class FormateurNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormateurNote::class);
    }

    public function getNotesFormateur($id)
    {
        $qb = $this->createQueryBuilder('n')
            ->select('n');

        $qb->where($qb->expr()->eq('n.idTable', ':id'))
            ->setParameter('id', $id)
            ->addCriteria(NoteRepository::notDeletedCriteria());

        return $qb->getQuery()->getResult();
    }

}