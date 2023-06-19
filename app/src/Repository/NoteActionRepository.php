<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 11/12/2019
 * Time: 10:21
 */

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use App\Entity\NoteAction;

class NoteActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, NoteAction::class);
    }

    public function getQueryNoteActionList() {
        return $this->createQueryBuilder('n')
                ->orderBy('n.nomAction', 'ASC')
            ;
    }
}