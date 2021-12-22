<?php

namespace App\Repository;

use App\Entity\EncaissementNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EncaissementNote|null find($id, $lockMode = null, $lockVersion = null)
 * @method EncaissementNote|null findOneBy(array $criteria, array $orderBy = null)
 * @method EncaissementNote[]    findAll()
 * @method EncaissementNote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EncaissementNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EncaissementNote::class);
    }

}
