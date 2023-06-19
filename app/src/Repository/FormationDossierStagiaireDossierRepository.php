<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 07/01/2020
 * Time: 14:59
 */

namespace App\Repository;

use App\Entity\FormationDossierStagiaireDossier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class FormationDossierStagiaireDossierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationDossierStagiaireDossier::class);
    }


}