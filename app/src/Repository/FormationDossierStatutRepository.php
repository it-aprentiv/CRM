<?php
/**
 * file FormationDossierStatutRepository.php
 */

namespace App\Repository;


use App\Entity\FormationDossierStatut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * FormatoinDossierStatut Repository
 */
class FormationDossierStatutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, FormationDossierStatut::class);
    }

    public function selectAllStatutQuery(){
        return $this->createQueryBuilder('s')
            ->select('s');
    }

    public function selectAllStatutLibelle(){
        return $this->createQueryBuilder('s')
            ->select('s.id, s.statut')
            ->getQuery()->getResult();
    }
}