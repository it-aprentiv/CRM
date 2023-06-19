<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 11/12/2019
 * Time: 11:14
 */

namespace App\Repository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use App\Entity\NoteActionStatut;
class NoteActionStatutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoteActionStatut::class);
    }

    public function getQueryNoteActionStatutList() {
        return $this->createQueryBuilder('n')
                ->orderBy('n.actionStatut', 'ASC')
            ;
    }
}