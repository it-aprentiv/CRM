<?php

namespace App\Repository;

use App\Entity\FormationDossierDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class FormationDossierDateRepository extends ServiceEntityRepository
{


    /**
     * FormationDossierDateRepository constructor.
     */
    public function __construct(ManagerRegistry $managerregistry)
    {
        parent::__construct($managerregistry, FormationDossierDate::class);
    }

    public function getDossierDate($idDossier)
    {
        $qb = $this->createQueryBuilder("fdd");

        return $qb->select("fdd.id,fdd.dateD,fdd.dateF,fdd.nbH,fdd.nbrjN, fdd.hasAm,fdd.hasMatin,fdd.dHeureM,fdd.fHeureM,fdd.dHeureAm,fdd.fHeureAm,fdd.joursSemaine")
            ->where($qb->expr()->eq("fdd.idDossier", ":iddossier"))
            ->setParameter("iddossier", $idDossier)
            ->addOrderBy("fdd.dateD","ASC")
            ->getQuery()
            ->getResult();
    }

}