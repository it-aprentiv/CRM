<?php

namespace App\Repository;

use App\Entity\EncaissementSocieteLiee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EncaissementSocieteLiee|null find($id, $lockMode = null, $lockVersion = null)
 * @method EncaissementSocieteLiee|null findOneBy(array $criteria, array $orderBy = null)
 * @method EncaissementSocieteLiee[]    findAll()
 * @method EncaissementSocieteLiee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EncaissementSocieteLieeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EncaissementSocieteLiee::class);
    }

   /**
     * Suppression facture liées
     *
     * @param int $encaissementId
     * @param int $societeId
     *
     * @return mixed
     */
    public function removeEncaissementSocieteLiee(int $encaissementId) {
        $qb = $this->createQueryBuilder('esl');
        
        $qb
            ->delete()
            ->where($qb->expr()->eq('esl.idEncaissement', ':encaissementId'))
            ->setParameter('encaissementId', $encaissementId)
        ;
        
        return $qb->getQuery()->execute();
    }
}
