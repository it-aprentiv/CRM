<?php

namespace App\Repository;

use App\Entity\Encaissement;
use App\Entity\Filter\EncaissementFilter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

/**
 * @method Encaissement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Encaissement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Encaissement[]    findAll()
 * @method Encaissement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EncaissementRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Encaissement::class);
    }

    /**
     * Recherche des encaissements
     * 
     * @return Query
     */
    public function findEncaissementsQuery(EncaissementFilter $filter = null) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $fIfFacNull = function ($field){
            return "IFNULL(fac.$field, fac2.$field)";
        };

        $qb->select("
            enc.id, enc.source,
            IF(enc.source = 'dossier', {$fIfFacNull('id')}, facDom.idfacturedom ) AS facture_id, 
            IF(enc.source = 'dossier', {$fIfFacNull('noDossierRef')}, dom.ref) AS no_dossier_ref, 
            IF(enc.source = 'dossier', {$fIfFacNull('ref')}, facDom.numero) AS num_facture,  
            enc.payeur, enc.dateReelleEncaiss AS date_encaissement, 
            SUBSTRING(enc.mntHt,1,LENGTH(enc.mntHt)-2) AS montantHt, SUBSTRING(enc.mntTtc,1,LENGTH(enc.mntTtc)-2) AS montantTTC,
            IF(enc.source = 'dossier', fd.tauxCom, '-') AS taux_commission, 
            IF(enc.source = 'dossier', IF(fac.id IS NULL, col2.nomPrenom, col.nomPrenom), coldom.nomPrenom) AS commercial, 
            IF(enc.source = 'dossier', comstat.statut, '-') AS statut_commission
        ");

        $qb
            ->from('App\Entity\Encaissement', 'enc')
            ->leftJoin('App\Entity\FactureDomiciliation', 'facDom', 'WITH', 'facDom.idfacturedom = enc.idFacture')
            ->leftJoin('facDom.domiciliation', 'dom')
            ->leftJoin('App\Entity\EncaissementFactureLiee', 'efl', 'WITH', 'enc.id = efl.idEncaissement')
            ->leftJoin('App\Entity\Facture', 'fac', 'WITH', 'fac.id = efl.idFacture')
            ->leftJoin('App\Entity\Facture', 'fac2', 'WITH', 'fac2.id = enc.idFacture')
            ->leftJoin('App\Entity\FormationDossier', 'fd', 'WITH', "fac.idDossier = fd.id OR fac.idDossier = fd.ref OR fac.noDossierRef = CONCAT(fd.ref,'-',fd.dispositif)")
            ->leftJoin('App\Entity\Collaborateur', 'col', 'WITH', 'col.id = fac.idResponsable')
            ->leftJoin('App\Entity\Collaborateur', 'col2', 'WITH', 'col2.id = fac2.idResponsable')
            ->leftJoin('dom.commercial', 'coldom')
            ->leftJoin('App\Entity\CommissionStatut', 'comstat', 'WITH', 'comstat.id = fd.payencaiss OR comstat.id = dom.statutPaiementCommission')
            ->where($qb->expr()->orX(
                $qb->expr()->isNotNull('fac.id'),
                $qb->expr()->isNotNull('fac2.id'),
                $qb->expr()->isNotNull('facDom.idfacturedom')
            ));
        ;

        if ($filter) {
            
            if ($filter->getSource()) {
                $qb->andWhere($qb->expr()->eq('enc.source', ':source'));
                $qb->setParameter('source', $filter->getSource());
            }
            
            if ($filter->getNumDossier()) {
                $qb->andWhere($qb->expr()->like('fac.noDossierRef', ':noDossierRef'));
                $qb->setParameter('noDossierRef', '%' . $filter->getNumDossier() . '%');
            }

            if ($filter->getNumFacture()) {
                $qb->andWhere($qb->expr()->like('fac.ref', ':numFacture'));
                $qb->setParameter('numFacture', '%' . $filter->getNumFacture() . '%');
            }

            if ($filter->getPayeur()) {
                $qb->andWhere($qb->expr()->eq('enc.payeur', ':payeur'));
                $qb->setParameter('payeur', $filter->getPayeur());
            }

            if ($filter->getDateEncaissement()) {
                $qb->andWhere($qb->expr()->eq('DATE(enc.dateReelleEncaiss)', 'DATE(:dateEncaissement)'));
                $qb->setParameter('dateEncaissement', $filter->getDateEncaissement()->format('Y-m-d'));
            }

            if ($filter->getTauxCommission() !== null) {
                $qb->andWhere($qb->expr()->eq('fd.tauxCom', ':tauxCommission'));
                $qb->setParameter('tauxCommission', $filter->getTauxCommission());
            }

            if ($filter->getCommercial()) {
                $qb->andWhere($qb->expr()->like('col.nomPrenom', ':commercial'));
                $qb->setParameter('commercial', '%' . $filter->getCommercial() . '%');
            }

            if ($filter->getStatutCommission()) {
                $qb->andWhere($qb->expr()->eq('comstat.statut', ':statutCommission'));
                $qb->setParameter('statutCommission', $filter->getStatutCommission());
            }

            if ($filter->getId()) {
                $qb->andWhere($qb->expr()->eq('enc.id', ':idenc'))
                    ->setParameter(':idenc', $filter->getId());
            }
        }

        return $qb
                ->groupBy('enc.id')
                ->orderBy('enc.dateAdd', 'DESC')
                ->getQuery()
        ;
    }

    /**
     * Récupération des payeurs existants
     */
    public function getPayeurs() {
        return $this
                ->createQueryBuilder('enc')
                ->select('DISTINCT enc.payeur')
                ->getQuery()
                ->getScalarResult()
        ;
    }

    /**
     * Récupération des informations liées à un encaissement
     *
     * @param Encaissement $encaissement
     *
     * @return mixed
     * @throws NonUniqueResultException
     */
    public function getInfosEncaissement(Encaissement $encaissement) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select('
            fac.noDossierRef AS no_dossier_ref,  fac.ref AS num_facture, fac.mntTtc AS montant_ttc, 
            fac.totalRegleHt AS montant_ht_facture, fac.id AS facture_id, fac.mntTva AS montant_tva_facture,  
            structure.id AS societe, col.id as id_responsable, fac.opcaClt AS payfct,
            fd.payencaiss AS statut_paiement, fd.tauxCom AS taux_commission,
            enc.id, enc.chequeattencaiss, enc.numcheque, enc.datecheque, enc.mntantReglementclient,
            enc.dtvalidite, enc.dateReelleEncaiss AS date_encaissement,
            enc.payeur, enc.restedu, enc.typereglopca, enc.typereglclient, 
            col.nomPrenom AS commercial, comstat.statut AS statut_commission, 
            opca.nomStr AS opca_nom_str, opca.id AS opca_id,
            av.ref AS num_avoir_lie, av.totalHt AS montant_ht_avoir_lie,
            av.mntTtc AS montant_ttc_avoir_lie
        ');

        $qb
            ->from('App\Entity\Encaissement', 'enc')
            ->leftJoin('App\Entity\EncaissementFactureLiee', 'efl', 'WITH', 'enc.id = efl.idEncaissement')
            ->leftJoin('App\Entity\Facture', 'fac', 'WITH', 'fac.id = enc.idFacture')
            ->leftJoin('fac.idAvoirLiee', 'av', 'WITH', 'fac.idAvoirLiee = av.factureid')
            ->leftJoin('App\Entity\Structure', 'structure', 'WITH', 'fac.idStructure = structure.id')
            ->leftJoin('App\Entity\FormationDossier', 'fd', 'WITH', "fac.idDossier = fd.id OR fac.idDossier = fd.id OR fac.noDossierRef = fd.ref OR fac.noDossierRef = CONCAT(fd.ref,'-',fd.dispositif)")
            ->leftJoin('App\Entity\Collaborateur', 'col', 'WITH', 'col.id = fac.idResponsable')
            ->leftJoin('App\Entity\CommissionStatut', 'comstat', 'WITH', 'comstat.id = fd.payencaiss')
            ->leftJoin('App\Entity\Contact', 'opca', 'WITH', 'fd.idOpca = opca.id')
            ->where($qb->expr()->eq('enc', ':encaissement'))
            ->setParameter('encaissement', $encaissement)
            ->setMaxResults(1)
        ;

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * Récupération des sociétés/structures liées à un encaissement
     * @param Encaissement $encaissement
     *
     * @return mixed
     */
    public function getSocietesLiees(Encaissement $encaissement) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb
            ->select('soc.nomStr AS societe, esl.idEncaissement, esl.idSociete')
            ->from('App\Entity\EncaissementSocieteLiee', 'esl')
            ->innerJoin('App\Entity\Encaissement', 'enc', 'WITH', 'esl.idEncaissement = enc.id')
            ->innerJoin('App\Entity\Contact', 'soc', 'WITH', 'esl.idSociete = soc.id')
            ->where($qb->expr()->eq('enc', ':encaissement'))
            ->setParameter('encaissement', $encaissement)
        ;

        return $qb->getQuery()->getResult();
    }
    
    /**
     * Récupération des infos factures liées à un encaissement
     *
     * @param Encaissement $encaissement
     * @return mixed
     */
    public function getFacturesLiees(Encaissement $encaissement) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb
            ->select('
                fac.id,
                fac.ref,
                fac.totalRegleHt,
                fac.totalRegle,
                fac.mntTtc,
                fac.mntTva,
                av.id AS id_avoir,
                av.ref AS num_avoir,
                av.mntTtc AS avoirMontantTTC,
                av.mntTva AS avoirMontantTVA
            ')
            ->from('App\Entity\EncaissementFactureLiee', 'efl')
            ->innerJoin('App\Entity\Encaissement', 'enc', 'WITH', 'efl.idEncaissement = enc.id')
            ->innerJoin('App\Entity\Facture', 'fac', 'WITH', 'efl.idFacture = fac.id')
            ->leftJoin('fac.idAvoirLiee', 'av')
            ->where($qb->expr()->eq('enc', ':encaissement'))
            ->setParameter('encaissement', $encaissement)
        ;

        return $qb->getQuery()->getResult();
    }

    /**
     * Suppression encaissement
     *
     * @param int $encaissementId
     *
     * @return mixed
     */
    public function removeEncaissement(int $encaissementId) {
        $qb = $this->createQueryBuilder('e');

        $qb
            ->delete()
            ->where($qb->expr()->eq('e.id', ':encaissementId'))
            ->setParameter('encaissementId', $encaissementId)
        ;

        return $qb->getQuery()->execute();
    }

    /**
     * Suppression des sociétés liées à un encaissement
     *
     * @param int $encaissementId
     * @return mixed
     */
    public function removeEncaissementSocietesLiees(int $encaissementId) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb
            ->delete()
            ->from('App\Entity\EncaissementSocieteLiee', 'esl')
            ->where($qb->expr()->eq('esl.idEncaissement', ':encaissementId'))
            ->setParameter('encaissementId', $encaissementId)
        ;

        return $qb->getQuery()->execute();
    }

    /**
     * Suppression des factures liées à un encaissement
     *
     * @param int $encaissementId
     * @return mixed
     */
    public function removeEncaissementFacturesLiees(int $encaissementId) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb
            ->delete()
            ->from('App\Entity\EncaissementFactureLiee', 'efl')
            ->where($qb->expr()->eq('efl.idEncaissement', ':encaissementId'))
            ->setParameter('encaissementId', $encaissementId)
        ;

        return $qb->getQuery()->execute();
    }

}
