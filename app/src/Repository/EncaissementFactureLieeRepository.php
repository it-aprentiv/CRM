<?php

namespace App\Repository;

use App\Entity\Encaissement;
use App\Entity\EncaissementFactureLiee;
use App\Entity\Filter\CommissionFilter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\QueryBuilder;

/**
 * @method EncaissementFactureLiee|null find($id, $lockMode = null, $lockVersion = null)
 * @method EncaissementFactureLiee|null findOneBy(array $criteria, array $orderBy = null)
 * @method EncaissementFactureLiee[]    findAll()
 * @method EncaissementFactureLiee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EncaissementFactureLieeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EncaissementFactureLiee::class);
    }

    public function queryGetCompletInfo($id = null)
    {
        $qb = $this->createQueryBuilder('efl');
        
        $qb->select("
            efl.id, enc.source,
            formDoss.ref AS num_intern, 
            formDoss.id AS form_dossier_id,
            enc.id as encaissement_id, 
            enc.mntComm,
            enc.dateReelleEncaiss, 
            comStat.statut,
            cntct.id AS idclient,
            cntct.nomStr as nomclient,
            formDoss.id AS dossId,
            struct.structure,
            colabs.nomPrenom AS com,
            formDoss.dateSignature AS datesign,
            fact.dateAdd,
            formDoss.nom AS intitstage,
            formDoss.mntDemande AS mntsigne,
            formDoss.mntAccorde AS mntaccorde,
            fact.totalRegleHt AS mntfacture,
            enc.mntTtc, 
            formDoss.mntMarge AS mntcom,
            formDoss.tauxCom AS tauxCom,
            fact.id AS idfact
        ");

        $qb
            ->leftJoin('efl.idEncaissement', 'enc')
            ->leftJoin('App\Entity\Facture',  'fact', 'WITH' , 'fact.id = efl.idFacture')
            ->leftJoin('fact.idDossier', 'formDoss')
            ->leftJoin('App\Entity\Contact', 'cntct', 'WITH', '(fact.idStructure = cntct.id AND fact.idContact IS NULL AND fact.idStructure > 3) OR (fact.idContact = cntct.id)')
            ->leftJoin('App\Entity\Structure', 'struct', 'WITH', 'struct.id = formDoss.idStructure')
            ->leftJoin('App\Entity\Collaborateur', 'colabs', 'WITH', 'colabs.id = fact.idResponsable')
            ->leftJoin('App\Entity\CommissionStatut', 'comStat', 'WITH', 'formDoss.payencaiss = comStat.id')
            ->leftJoin('App\Entity\Utilisateur', 'user', 'WITH', 'colabs.idUser = user.idutilisateur')
        ;
       
        if ($id) {
            $qb
                ->andWhere('efl.id = :id')
                ->setParameter('id', $id)
                ->setMaxResults(1)
            ;
        }
        
        $qb->andWhere($qb->expr()->eq('enc.source',':source'));
        $qb->setParameter('source',  Encaissement::SOURCE_DOSSIER);

        return $qb->orderBy('formDoss.id', 'DESC');
    }

    public function getQueryOnlist(CommissionFilter $filter)
    {
        $qb = $this->queryGetCompletInfo();

        return $this->treatQueryByFilter($filter, $qb);
    }

    /**
     * @param CommissionFilter $filter
     * @param QueryBuilder $qb
     *
     * @return QueryBuilder
     */
    public function treatQueryByFilter(CommissionFilter $filter, QueryBuilder $qb)
    {
        if ($filter->getClientID()) {
            $qb->andWhere('cntct.nomStr LIKE :clienId')
                ->setParameter('clienId', '%'.$filter->getClientID().'%');
        }

        if ($filter->getRefDossier()) {
            $qb->andWhere('fact.noDossierRef LIKE :refDossier')
                ->setParameter('refDossier', '%'.$filter->getRefDossier().'%');
        }

        if ($filter->getmontantAccorde()) {
            $qb->andWhere('formDoss.mntAccorde = :mntnAccorde')
                ->setParameter('mntnAccorde', (float)$filter->getmontantAccorde());
        }

        if ($filter->getMontantCom()) {
            $qb->andWhere('formDoss.mntMarge = :montantCom')
                ->setParameter('montantCom', (float)$filter->getMontantCom());
        }

        if ($filter->getMontantDemande()) {
            $qb->andWhere('formDoss.mntDemande = :mntDmde')
                ->setParameter('mntDmde', (float)$filter->getMontantDemande());
        }

        if ($filter->getMontantFacture()) {
            $qb->andWhere('fact.totalRegleHt = :mntfact')
                ->setParameter('mntfact', (float)$filter->getMontantFacture());
        }
        if ($filter->getMontantEncaisse()) {
            $qb->andWhere('enc.mntTtc = :mntEncaisse')
                ->setParameter('mntEncaisse', (float)$filter->getMontantEncaisse());
        }

        if ($filter->getDateSign()) {
            $qb->andWhere($qb->expr()->eq($qb->expr()->substring('formDoss.dateSignature',1,10), ':dateSign'));
            $qb->setParameter(':dateSign', $filter->getDateSign()->format('Y-m-d'));
        }

        if ($filter->getTauxComm()){
            $qb->andWhere('formDoss.tauxCom = :tauxCom')
                ->setParameter('tauxCom', (float)$filter->getTauxComm());
        }

        if ($filter->getCial()) {
            $qb->andWhere('colabs.nomPrenom LIKE :com')
                ->setParameter('com', '%'.$filter->getCial().'%');
        }

        if ($filter->getStatutCom()) {
            $qb->andWhere('comStat.id = :statut')
                ->setParameter('statut', $filter->getStatutCom());
        }
        
        // APR-145 : Restriction de la liste des commissions au commercial connecté
        if ($filter->getUserId()) {
            $qb->andWhere('user.idutilisateur = :userId ')
                ->setParameter('userId', $filter->getUserId());
        }

        return $qb;
    }

    /**
     * @param $id
     *
     * @return mixed
     * @throws NonUniqueResultException
     */
    public function findInfoComplet($id)
    {
        $qb = $this->queryGetCompletInfo($id);

        return $qb->getQuery()->getOneOrNullResult();
    }


    /**
     * Suppression facture liées
     *
     * @param int $encaissementId
     * @param int $factureId
     *
     * @return mixed
     */
    public function removeEncaissementFactureLiee(int $encaissementId, int $factureId) {
        $qb = $this->createQueryBuilder('efl');
        
        $qb
            ->delete()
            ->where($qb->expr()->eq('efl.idEncaissement', ':encaissementId'))
            ->setParameter('encaissementId', $encaissementId)
            ->andWhere($qb->expr()->eq('efl.idFacture', ':factureId'))
            ->setParameter('factureId', $factureId)
        ;
        
        return $qb->getQuery()->execute();
    }
}
