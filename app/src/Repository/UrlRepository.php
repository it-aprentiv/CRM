<?php


namespace App\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use App\Entity\Url;
use Doctrine\Common\Persistence\ManagerRegistry;

class UrlRepository extends ServiceEntityRepository
{
    /**
     * UrlRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Url::class);
    }

    public function updatecontactsiteweb($id,$url)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->update()
            ->set("u.url",$qb->expr()->literal($url))
            ->where($qb->expr()->eq("u.id", ":idurl"))
            ->setParameter("idurl", $id)
            ->getQuery()
            ->getResult();
    }

}
