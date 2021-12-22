<?php
/**
 * Created by PhpStorm.
 * User: kella
 * Date: 08/01/2020
 * Time: 10:38
 */

namespace App\Repository;

use App\Entity\StagiaireFormationDossier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class StagiaireFormationDossierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StagiaireFormationDossier::class);
    }
}