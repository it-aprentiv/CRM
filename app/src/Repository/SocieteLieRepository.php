<?php

namespace App\Repository;

use App\Entity\SocieteLiee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SocieteLiee|null find($id, $lockMode = null, $lockVersion = null)
 * @method SocieteLiee|null findOneBy(array $criteria, array $orderBy = null)
 * @method SocieteLiee[]    findAll()
 * @method SocieteLiee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocieteLieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SocieteLiee::class);
    }

    public function updatecontactsocieteliee($id,$societelie)
    {
        $qb = $this->createQueryBuilder('sl');
        $qb->update();
        $societe1 = $qb->expr()->literal($societelie->getIdSociete1());
        $societe2 = $qb->expr()->literal($societelie->getIdSociete2());
        $societe3 = $qb->expr()->literal($societelie->getIdSociete3());
        $societe4 = $qb->expr()->literal($societelie->getIdSociete4());
        $sc1 = (int)$societe1->getParts()[0] > 0 ? $societe1: 'NULL';
        $sc2 = (int)$societe2->getParts()[0] > 0 ? $societe2 : 'NULL';
        $sc3 = (int)$societe3->getParts()[0] > 0 ? $societe3 : 'NULL';
        $sc4 = (int)$societe4->getParts()[0] > 0 ? $societe4 : 'NULL';
        $qb->set("sl.idSociete1",$sc1);
        $qb->set("sl.idSociete2",$sc2);
        $qb->set("sl.idSociete3",$sc3);
        $qb->set("sl.idSociete4",$sc4);
        $qb->where($qb->expr()->eq("sl.id", ":id"))
            ->setParameter("id", $id)
            ->getQuery()
            ->getResult();
    }
}
