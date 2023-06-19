<?php

namespace App\Repository;

use App\Entity\Adresse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Adresse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adresse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adresse[]    findAll()
 * @method Adresse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdresseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adresse::class);
    }

    public function findAdressesContactPrintData($idcontact)
    {
        $qb = $this->createQueryBuilder('adr');

        return $qb->select('adr.adresse', 'adr.compAdresse', 'adr.codePostal', 'vil.nomVille ville', 'adr.principal principale')
            ->where($qb->expr()->eq("adr.idContact",":idcontact"))
            ->leftJoin('App\Entity\Ville', 'vil', "WITH", "adr.idVille = vil.id")
            ->setParameter("idcontact", $idcontact)
            ->getQuery()
            ->getResult();

    }
}
