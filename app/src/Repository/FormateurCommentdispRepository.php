<?php


namespace App\Repository;


use App\Entity\FormateurCommentdisp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class FormateurCommentdispRepository extends ServiceEntityRepository
{
    /**
     * FormateurCommentdispRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormateurCommentdisp::class);
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     * FormateurCommentdisp
     */
    public function getCommentFormateur($id)
    {
        $qb = $this->createQueryBuilder('formateurComm');

        $qb->select('formateurComm');

        return $qb
            ->where($qb->expr()->eq('formateurComm.idFormateur', ':id'))
            ->setParameter(':id', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

}