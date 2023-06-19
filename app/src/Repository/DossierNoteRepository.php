<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 17/12/2019
 * Time: 15:23
 */

namespace App\Repository;

use App\Entity\DossierNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * Class DossierRepository
 * @package App\Repository
 */
class DossierNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DossierNote::class);
    }
}