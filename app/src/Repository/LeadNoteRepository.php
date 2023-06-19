<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 18/12/2019
 * Time: 15:14
 */

namespace App\Repository;

use App\Entity\LeadNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class LeadNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LeadNote::class);
    }

    public function getNotes($idcontact)
    {
        $qb = $this->createQueryBuilder('n')
            ->select('n');

        $qb->where($qb->expr()->eq('n.idTable', ':idcontact'))
            ->setParameter('idcontact', $idcontact)
            ->addCriteria(NoteRepository::notDeletedCriteria())
            ->addCriteria(NoteRepository::orderiddesc());

        return $qb->getQuery()->getResult();
    }
}