<?php

namespace App\Repository;

use App\Entity\Filter\FactureFormationFilter;
use App\Entity\FormationSuiviOrdredemission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FormationSuiviOrdredemission|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormationSuiviOrdredemission|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormationSuiviOrdredemission[]    findAll()
 * @method FormationSuiviOrdredemission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuiviOMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationSuiviOrdredemission::class);
    }

    /**
     * APR-108 : Récupération des factures formations à partir des suivi Ordre de Mission 
     * 
     * @return type
     */
    public function getFactureFormationQuery(?FactureFormationFilter $filter) {
        $qb = $this->createQueryBuilder('om');
        $qb->select('
            om.id AS omId, om.recepfac, om.moisfac, om.heurefait, om.heurerestant, om.datefac, om.numfac, om.montantht, om.dateValidation,
            str.structure, formation.nom AS intitule_stage,
            clt.nomStr AS client,
            formateur.nom AS nom_formateur, formateur.prenom AS prenom_formateur,
            formation.id AS id_formation
        ');
        
        $qb
            ->innerJoin('om.idFormation', 'formation')
            ->leftJoin('formation.idStructure', 'str')
            ->leftJoin('formation.idClient', 'clt')
            ->leftJoin('App\Entity\Contact', 'formateur','WITH', 'formateur.id = formation.idFormateur')
        ;
            
        if ($filter->getStructure()) {
            $qb->andWhere($qb->expr()->eq('formation.idStructure', ':structure'));
            $qb->setParameter('structure', $filter->getStructure());
        }
        
        if ($filter->getMois()) {
            $qb->andWhere($qb->expr()->eq('om.moisfac', ':mois'));
            $qb->setParameter('mois', $filter->getMois());
        }
        
        if ($filter->getNumFacture()) {
            $qb->andWhere($qb->expr()->like('om.numfac', ':numFacture'));
            $qb->setParameter('numFacture', "%".$filter->getNumFacture()."%");
        }
        
        if ($filter->getDateReception()) {
            $qb->andWhere($qb->expr()->eq('DATE(om.recepfac)', 'DATE(:dateReception)'));
            $qb->setParameter('dateReception', $filter->getDateReception());
        }
        
        if ($filter->getDateFacture()) {
            $qb->andWhere($qb->expr()->eq('DATE(om.datefac)', 'DATE(:dateFacture)'));
            $qb->setParameter('dateFacture', $filter->getDateFacture());
        }
        
        if ($filter->getDateValidation()) {
            $qb->andWhere($qb->expr()->eq('DATE(om.dateValidation)', 'DATE(:dateValidation)'));
            $qb->setParameter('dateValidation', $filter->getDateValidation());
        }
        
        if ($filter->getClient()) {
            $qb->andWhere($qb->expr()->eq('clt.nomStr', ':client'));
            $qb->setParameter('client', $filter->getClient());
        }
        
        if ($filter->getFormateur()) {
            $qb->andWhere($qb->expr()->eq('formation.idFormateur', ':formateur'));
            $qb->setParameter('formateur', $filter->getFormateur());
        }
        
        // Filtre intitulé de stage
        if ($filter->getIntitule()) {
            $qb->andWhere($qb->expr()->like('formation.nom', ':formation'));
            $qb->setParameter('formation', '%'.$filter->getIntitule().'%');
        }
        
        return $qb
            ->orderBy("om.id", 'DESC')
            ->getQuery();
    }
    
    
}
