<?php

namespace App\Repository;

use App\Constants\ExtractionDossierType;
use App\Constants\FormationDossierStatut as FDStatutConst;
use App\Entity\Collaborateur;
use App\Entity\CommissionStatut;
use App\Entity\Contact;
use App\Entity\Domiciliation;
use App\Entity\Encaissement;
use App\Entity\EncaissementFactureLiee;
use App\Entity\Facture;
use App\Entity\FactureDomiciliation;
use App\Entity\Filter\FormationDossierFilter;
use App\Entity\FormationDossier;
use App\Entity\FormationDossierStatut;
use App\Entity\Structure;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @method FormationDossier|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormationDossier|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormationDossier[]    findAll()
 * @method FormationDossier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationDossierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationDossier::class);
    }

    /**
     * @param FormationDossierFilter|null $filter
     * @return \Doctrine\ORM\Query
     */
    public function findAllFormationDossier(FormationDossierFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('d');

        $qb->select('
                d.id, d.dispositif ,
                cli.nomStr AS client,
                struct.structure,
                YEAR(d.dateEnvoi) as annee,
                MONTH(d.dateEnvoi) as mois,
                d.dateEnvoi,
                d.ref as numInterne,
                d.dispositif,
                d.nom as intituleStage,
                d.dateFinPeriode,
                d.dateAccord,
                d.datesDossier,
                d.mntDemande AS montantSigne,
                d.mntAccorde AS montantAccorde,
                statut.statut,
                cnt.nomStr AS opca,
                col.nomPrenom AS commercial,
                d.dateAdd
            ');

        $qb
            ->leftJoin('App\Entity\FormationDossierStatut', 'statut', 'WITH', 'd.idStatut = statut.id')
            ->leftJoin('App\Entity\Structure', 'struct', 'WITH', 'struct.id = d.idStructure')
            ->leftJoin('App\Entity\Contact', 'cnt', 'WITH', 'cnt.id = d.idOpca')
            ->leftJoin('App\Entity\Contact', 'cli', 'WITH', 'cli.id = d.idClient')
            ->leftJoin('App\Entity\Collaborateur', 'col', 'WITH', 'col.id = d.idCommercial')
        ;
        if ($filter) {
            //filtre structure
            if ($filter->getStructure()) {
                $sStructure = $filter->getStructure();
                $qb->where($qb->expr()->eq('d.idStructure', ':structure'));
                $qb->setParameter(':structure',$sStructure);
            }
            //filtre Mois de signature
            if ($filter->getMoisSignature()) {
                $iMois = $filter->getMoisSignature();
                $qb->andWhere($qb->expr()->eq('MONTH(d.dateEnvoi)', ':mois'));
                $qb->setParameter(':mois',$iMois);
            }
            //filtre Annee de signature
            if ($filter->getAnneeSignature()) {
                $iAnnee = $filter->getAnneeSignature();
                $qb->andWhere($qb->expr()->eq('YEAR(d.dateEnvoi)', ':annee'));
                $qb->setParameter(':annee',$iAnnee);
            }
            //filtre date de creation
            if ($filter->getDateCreation()) {
                $sDateCreation = date_create_from_format('d/m/Y', $filter->getDateCreation());
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring('d.dateEnvoi',1,10), ':dateCreation'));
                $qb->setParameter(':dateCreation', $sDateCreation->format('Y-m-d'));
            }
            //filtre num interne
            if ($filter->getNumInterne()) {
                $sNumInterne = $filter->getNumInterne();
                $qb->andWhere($qb->expr()->like('CONCAT(d.ref,\'-\',d.dispositif)', ':numInterne'));
                $qb->setParameter(':numInterne','%'.$sNumInterne.'%');
            }
            //filtre client
            if ($filter->getClient()) {
                $sClient= $filter->getClient();
                $qb->andWhere($qb->expr()->eq('cli.nomStr', ':client'));
                $qb->setParameter(':client',$sClient);
            }
            //filtre intitulé stage
            if ($filter->getIntituleStage()) {
                $sIntituleStage = $filter->getIntituleStage();
                $qb->andWhere($qb->expr()->like('d.nom', ':intituleStage'));
                $qb->setParameter(':intituleStage','%'.$sIntituleStage.'%');
            }
            //filtre date fin stage
            if ($filter->getDateFinStage()) {
                $sDateFinStage = date_create_from_format('d/m/Y', $filter->getDateFinStage())->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring(' d.dateFinPeriode',1,10), ':dateFinStage'));
                $qb->setParameter(':dateFinStage', $sDateFinStage);
            }
            //filtre date Accord
            if ($filter->getDateEstimeRecep()) {
                $sDateAccord = date_create_from_format('d/m/Y', $filter->getDateEstimeRecep())->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring(' d.dateAccord',1,10), ':dateAccord'));
                $qb->setParameter(':dateAccord', $sDateAccord);
            }
            // Filtre montant signé
            if ($filter->getMontantSigne()) {
                $sMontantSigne = $filter->getMontantSigne();
                $qb->andWhere($qb->expr()->eq('d.mntDemande', ':montantSigne'));
                $qb->setParameter(':montantSigne', $sMontantSigne);
            }
            // Filtre montant accordé
            if ($filter->getMontantAccorde()) {
                $sMontantAccorde = $filter->getMontantAccorde();
                $qb->andWhere($qb->expr()->eq('d.mntAccorde', ':montantAccorde'));
                $qb->setParameter(':montantAccorde', $sMontantAccorde);
            }
            //filtre date estimée pour cloture
            if ($filter->getDateEstimeCloture()) {
//                $sDateEstimeCloture = date_create_from_format('d/m/Y', $filter->getDateEstimeCloture())->format('Y-m-d');
//                $qb->andWhere($qb->expr()->eq($qb->expr()->substring(' d.dateFinPeriode',1,10), ':dateEstimeCloture'));
//                $qb->setParameter(':dateEstimeCloture', $sDateEstimeCloture);
                
                // APR-194 : Date estimé de cloture = date creation + 6 mois
                $oDateEstimeeCloture = \DateTime::createFromFormat('d/m/Y', $filter->getDateEstimeCloture());
                $qb->andWhere($qb->expr()->eq("DATE(DATE_ADD(d.dateEnvoi, 6, 'month'))", 'DATE(:dateEstimeCloture)'));
                $qb->setParameter(':dateEstimeCloture', $oDateEstimeeCloture);
            }
            //filtre structure
            if ($filter->getStatusDossier()) {
                $iStatut = $filter->getStatusDossier();
                $qb->andWhere($qb->expr()->eq('statut.id', ':status'));
                $qb->setParameter(':status', $iStatut);
            }
            //filtre commercial
            if ($filter->getCommercial()) {
                $sCommercial = $filter->getCommercial();
                $qb->andWhere($qb->expr()->eq('col.nomPrenom', ':commercial'));
                $qb->setParameter(':commercial', $sCommercial);
            }
            //filtre opca
            if ($filter->getOpca()) {
                $sOpca = $filter->getOpca();
                $qb->andWhere($qb->expr()->eq('cnt.nomStr', ':opca'));
                $qb->setParameter(':opca', $sOpca);
            }
        }

        return $qb
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ;
    }

    /**
     * @param FormationDossierFilter|null $filter
     * @return \Doctrine\ORM\Query
     */
    public function findAllFormationDossierPortail(FormationDossierFilter $filter = null)
    {
        $date = new DateTime(date('Y-m-d'));
        $date->modify('+15 day');
        $currentDate = new DateTime(date('Y-m-d'));
        $qb = $this->createQueryBuilder('d');

        $qb->select('
                d.id, d.dispositif ,
                cli.nomStr AS client,
                struct.structure,
                YEAR(d.dateEnvoi) as annee,
                MONTH(d.dateEnvoi) as mois,
                d.dateEnvoi,
                d.ref as numInterne,
                d.dispositif,
                d.nom as intituleStage,
                d.dateFinPeriode,
                d.dateAccord,
                d.datesDossier,
                d.mntDemande AS montantSigne,
                d.mntAccorde AS montantAccorde,
                statut.statut,
                cnt.nomStr AS opca,
                col.nomPrenom AS commercial,
                d.dateAdd
            ');

        $qb
            ->leftJoin('App\Entity\FormationDossierStatut', 'statut', 'WITH', 'd.idStatut = statut.id')
            ->leftJoin('App\Entity\Structure', 'struct', 'WITH', 'struct.id = d.idStructure')
            ->leftJoin('App\Entity\Contact', 'cnt', 'WITH', 'cnt.id = d.idOpca')
            ->leftJoin('App\Entity\Contact', 'cli', 'WITH', 'cli.id = d.idClient')
            ->leftJoin('App\Entity\Collaborateur', 'col', 'WITH', 'col.id = d.idCommercial')
        ;
        if ($filter) {
            //filtre structure
            if ($filter->getStructure()) {
                $sStructure = $filter->getStructure();
                $qb->where($qb->expr()->eq('d.idStructure', ':structure'));
                $qb->setParameter(':structure',$sStructure);
            }
            //filtre Mois de signature
            if ($filter->getMoisSignature()) {
                $iMois = $filter->getMoisSignature();
                $qb->andWhere($qb->expr()->eq('MONTH(d.dateEnvoi)', ':mois'));
                $qb->setParameter(':mois',$iMois);
            }
            //filtre Annee de signature
            if ($filter->getAnneeSignature()) {
                $iAnnee = $filter->getAnneeSignature();
                $qb->andWhere($qb->expr()->eq('YEAR(d.dateEnvoi)', ':annee'));
                $qb->setParameter(':annee',$iAnnee);
            }
            //filtre date de creation
            if ($filter->getDateCreation()) {
                $sDateCreation = date_create_from_format('d/m/Y', $filter->getDateCreation());
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring('d.dateEnvoi',1,10), ':dateCreation'));
                $qb->setParameter(':dateCreation', $sDateCreation->format('Y-m-d'));
            }
            //filtre num interne
            if ($filter->getNumInterne()) {
                $sNumInterne = $filter->getNumInterne();
                $qb->andWhere($qb->expr()->like('CONCAT(d.ref,\'-\',d.dispositif)', ':numInterne'));
                $qb->setParameter(':numInterne','%'.$sNumInterne.'%');
            }
            //filtre client
            if ($filter->getClient()) {
                $sClient= $filter->getClient();
                $qb->andWhere($qb->expr()->eq('cli.nomStr', ':client'));
                $qb->setParameter(':client',$sClient);
            }
            //filtre intitulé stage
            if ($filter->getIntituleStage()) {
                $sIntituleStage = $filter->getIntituleStage();
                $qb->andWhere($qb->expr()->like('d.nom', ':intituleStage'));
                $qb->setParameter(':intituleStage','%'.$sIntituleStage.'%');
            }
            //filtre date fin stage
            if ($filter->getDateFinStage()) {
                $sDateFinStage = date_create_from_format('d/m/Y', $filter->getDateFinStage())->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring(' d.dateFinPeriode',1,10), ':dateFinStage'));
                $qb->setParameter(':dateFinStage', $sDateFinStage);
            }
            //filtre date Accord
            if ($filter->getDateEstimeRecep()) {
                $sDateAccord = date_create_from_format('d/m/Y', $filter->getDateEstimeRecep())->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring(' d.dateAccord',1,10), ':dateAccord'));
                $qb->setParameter(':dateAccord', $sDateAccord);
            }
            // Filtre montant signé
            if ($filter->getMontantSigne()) {
                $sMontantSigne = $filter->getMontantSigne();
                $qb->andWhere($qb->expr()->eq('d.mntDemande', ':montantSigne'));
                $qb->setParameter(':montantSigne', $sMontantSigne);
            }
            // Filtre montant accordé
            if ($filter->getMontantAccorde()) {
                $sMontantAccorde = $filter->getMontantAccorde();
                $qb->andWhere($qb->expr()->eq('d.mntAccorde', ':montantAccorde'));
                $qb->setParameter(':montantAccorde', $sMontantAccorde);
            }
            //filtre date estimée pour cloture
            if ($filter->getDateEstimeCloture()) {
//                $sDateEstimeCloture = date_create_from_format('d/m/Y', $filter->getDateEstimeCloture())->format('Y-m-d');
//                $qb->andWhere($qb->expr()->eq($qb->expr()->substring(' d.dateFinPeriode',1,10), ':dateEstimeCloture'));
//                $qb->setParameter(':dateEstimeCloture', $sDateEstimeCloture);
                
                // APR-194 : Date estimé de cloture = date creation + 6 mois
                $oDateEstimeeCloture = \DateTime::createFromFormat('d/m/Y', $filter->getDateEstimeCloture());
                $qb->andWhere($qb->expr()->eq("DATE(DATE_ADD(d.dateEnvoi, 6, 'month'))", 'DATE(:dateEstimeCloture)'));
                $qb->setParameter(':dateEstimeCloture', $oDateEstimeeCloture);
            }
            //filtre structure
            if ($filter->getStatusDossier()) {
                $iStatut = $filter->getStatusDossier();
                $qb->andWhere($qb->expr()->eq('statut.id', ':status'));
                $qb->setParameter(':status', $iStatut);
            }
            //filtre commercial
            if ($filter->getCommercial()) {
                $sCommercial = $filter->getCommercial();
                $qb->andWhere($qb->expr()->eq('col.nomPrenom', ':commercial'));
                $qb->setParameter(':commercial', $sCommercial);
            }
            //filtre opca
            if ($filter->getOpca()) {
                $sOpca = $filter->getOpca();
                $qb->andWhere($qb->expr()->eq('cnt.nomStr', ':opca'));
                $qb->setParameter(':opca', $sOpca);
            }
        }

        return $qb
            ->andWhere('d.dateFinPeriode <= :val1')
            ->setParameter('val1', $date)
            ->andWhere('d.dateFinPeriode >= :val2')
            ->setParameter('val2', $currentDate)
            ->orderBy('d.dateFinPeriode', 'ASC')
            ->getQuery()
            ;
    }

    public function getQueryFormation() {
        return $this->createQueryBuilder('d')
            ->orderBy('d.nom', 'ASC');
    }
    public function getStatsMonthFormation(string $commercial = null){
        $qb = $this->createQueryBuilder('d');
        $qb->select('
       MONTH(d.dateEnvoi) AS month,
       YEAR(d.dateEnvoi) AS year,
       DATE(d.dateEnvoi) AS date,
        SUM(d.mntDemande) AS montantSigne,
        SUM(d.mntAccorde) AS montantAccorde,
        SUM(fac.totalHt) AS montantFacture
    ');
$qb
    ->leftJoin('App\Entity\FormationDossierStatut', 'statut', 'WITH', 'd.idStatut = statut.id')
    ->leftJoin('App\Entity\Structure', 'struct', 'WITH', 'struct.id = d.idStructure')
    ->leftJoin('App\Entity\Contact', 'cnt', 'WITH', 'cnt.id = d.idOpca')
    ->leftJoin('App\Entity\Contact', 'cli', 'WITH', 'cli.id = d.idClient')
    ->leftJoin('App\Entity\Collaborateur', 'col', 'WITH', 'col.id = d.idCommercial')
    ->leftJoin('App\Entity\Facture','fac','WITH','fac.idDossier = d.id')
;
if($commercial){
    //filtre commercial
        $qb->andWhere($qb->expr()->eq('col.nomPrenom', ':commercial'));
        $qb->setParameter(':commercial', $commercial);
    
}

         return $qb
            ->groupBy("year")
            ->addGroupBy("month")         
            ->getQuery()
            ->execute()
            ;
    }
    public function getStatsYearFormation(string $commercial = null ){
        $qb = $this->createQueryBuilder('d');
        $qb->select('
       YEAR(d.dateEnvoi) AS year,
       DATE(d.dateEnvoi) AS date,
        SUM(d.mntDemande) AS montantSigne,
        SUM(d.mntAccorde) AS montantAccorde,
        SUM(fac.totalHt) AS montantFacture
    ');
$qb
    ->leftJoin('App\Entity\FormationDossierStatut', 'statut', 'WITH', 'd.idStatut = statut.id')
    ->leftJoin('App\Entity\Structure', 'struct', 'WITH', 'struct.id = d.idStructure')
    ->leftJoin('App\Entity\Contact', 'cnt', 'WITH', 'cnt.id = d.idOpca')
    ->leftJoin('App\Entity\Contact', 'cli', 'WITH', 'cli.id = d.idClient')
    ->leftJoin('App\Entity\Collaborateur', 'col', 'WITH', 'col.id = d.idCommercial')
    ->leftJoin('App\Entity\Facture','fac','WITH','fac.idDossier = d.id')
;

         if($commercial){
            //filtre commercial
                $qb->andWhere($qb->expr()->eq('col.nomPrenom', ':commercial'));
                $qb->setParameter(':commercial', $commercial);
            
        }         if($commercial){
            //filtre commercial
                $qb->andWhere($qb->expr()->eq('col.nomPrenom', ':commercial'));
                $qb->setParameter(':commercial', $commercial);
            
        }
         return $qb
            ->groupBy("year")
            ->getQuery()
            ->execute()
            ;
    }
    /**
     * Récupération des taux commissions existants sur les dossiers
     */
    public function getTauxCommissions() {
        $qb = $this
            ->createQueryBuilder('fd')
            ->select('DISTINCT fd.tauxCom')
            ->orderBy('fd.tauxCom', 'ASC')
        ;
        
        return $qb->getQuery()->getScalarResult();
    }

    /**
     * extract data dossier for custom extractions
     *
     * @param $aFilters
     * @return mixed
     */
    public function extractDossierData($aFilters){

        $sColumns = $this->getExtractColumn($aFilters['columns']);
        $qb = $this->getDossierBaseQuery()
            ->select($sColumns)
            ->orderBy('d.id', 'DESC');

        $qb = $this->filterDossierByYearExtract($aFilters, $qb, 'd.dateEnvoi');

        if (isset($aFilters['statut']) && !empty($aFilters['statut'])) {
            $qb->andWhere($qb->expr()->in('d.idStatut', ':statut'))
                ->setParameter('statut', $aFilters['statut']);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * get query builder for dossier based on Encaissement entity
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function extractDossierEncaissement($aField, $aFilters = []){
        $sColumn = $this->getExtractColumn($aField);

        $qb = $this->getEncaissementLieeQuery()
            ->select($sColumn);

        $qb = $this->filterDossierByYearExtract($aFilters, $qb, 'e.dateReelleEncaiss')
            ->orderBy('e.id', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function getDossierBaseQuery(){
        $qb = $this->createQueryBuilder('d')
            ->leftJoin(Facture::class, 'f', 'WITH', 'd.id = f.idDossier')
            ->leftJoin(EncaissementFactureLiee::class, 'efl', 'WITH', 'efl.idFacture = f.id')
            ->leftJoin(Encaissement::class, 'e', 'WITH', 'e.id = efl.idEncaissement')
            ->leftJoin(FormationDossierStatut::class, 'ds', 'WITH', 'd.idStatut = ds.id')
            ->leftJoin(Contact::class, 'cli', 'WITH', 'd.idClient = cli.id')
            ->leftJoin(Contact::class, 'cop', 'WITH', 'd.idOpca = cop.id')
            ->leftJoin(Collaborateur::class, 'com', 'WITH', 'd.idCommercial = com.id')
            ->leftJoin(Structure::class, 's', 'WITH', 's.id = d.idStructure')
        ;

        return $qb;
    }

    /**
     * extract data for "suivi commission"
     *
     * @param $aField
     * @param $aFilter
     * @return mixed
     */
    public function extractDossierSuivicom($aField, $aFilter){
        $sColumn = $this->getExtractColumn($aField);

        $qb = $this->getEncaissementLieeQuery()
            ->leftJoin(CommissionStatut::class, 'cs', 'WITH', 'd.payencaiss = cs.id')
            ->select($sColumn);

        $qb = $this->filterByCommissionExtract($aFilter, $qb);
        $qb = $this->filterDossierByYearExtract($aFilter, $qb, 'e.dateReelleEncaiss')
            ->orderBy('e.id', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     *
     *
     * @return QueryBuilder
     */
    private function getEncaissementLieeQuery(){
        $qb = $this->getEntityManager()->createQueryBuilder()
            ->from(EncaissementFactureLiee::class, 'efl')
            ->leftJoin(Encaissement::class, 'e', 'WITH', 'e.id = efl.idEncaissement')
            ->leftJoin(Facture::class, 'f', 'WITH', 'f.id = efl.idFacture')
            ->leftJoin(FormationDossier::class, 'd', 'WITH', 'f.idDossier = d.id OR f.noDossierRef = CONCAT(d.ref,\'-\',d.dispositif)')
            ->leftJoin(FormationDossierStatut::class, 'ds', 'WITH', 'd.idStatut = ds.id')
            ->leftJoin(Contact::class, 'cfs', 'WITH', 'f.idStructure = cfs.id')
            ->leftJoin(Contact::class, 'cfc','WITH', 'cfc.id = f.idContact')
            ->leftJoin(Structure::class, 's', 'WITH', 's.id = d.idStructure')
            ->leftJoin(Collaborateur::class, 'com', 'WITH', 'com.id = f.idResponsable')
        ;

        return $qb;
    }

    /**
     * get selectable column for extract dossier data
     *
     * @param $aField
     * @return string
     */
    private function getExtractColumn($aField){
        // all columns list referenced by key in excel header in controller
        $aColumns = [
            'id' => 'd.id',
            'dispositif' => 'd.dispositif', //ajouté le 14/01 pour add un champ DISPOSITIF dans extract_personnalisee  (dans src/Manager/FormationDossierManager)
            'refDossier' => 'd.ref as refDossier',
            'annee' => 'YEAR(d.dateEnvoi) as annee',//ajouté le 16/01
            'mois' => 'MONTH(d.dateEnvoi) as mois',//ajouté le 16/01
            'numDossier' => "CONCAT(d.ref, '-', d.dispositif) as numDossier",
            'datedebut' => 'DATE_FORMAT(d.dateDebutPeriode, \'%d/%m/%Y\') as datedebut',
            'dateenvoi' => 'DATE_FORMAT(d.dateEnvoi, \'%d/%m/%Y\') as dateenvoi',
            'datefin' => 'DATE_FORMAT(d.dateFinPeriode, \'%d/%m/%Y\') as datefin',
            'datecreation' => 'DATE_FORMAT(d.dateAdd, \'%d/%m/%Y\') as datecreation',
            'payeur' => 'd.payeur',
            'objectifAction' => 'd.objectifAction',
            'dateSignature' => 'DATE_FORMAT(d.dateSignature, \'%d/%m/%Y\') as dateSignature',
            'mntDemande' => 'd.mntDemande',
            'mntDossierAcc' => 'd.mntAccorde as mntDossierAcc',
            'tauxCom' => 'd.tauxCom',
            'dureeJ' => 'd.dureeJours as dureeJ',//modifié le 14/01 pour add un champ Duree en JOURS dans extract_personnalisee (dans src/Manager/FormationDossierManager)
            'dureeH' => 'd.dureeHeures as dureeH',//ajouté le 14/01 pour add un champ Duree en HEURES dans extract_personnalisee (dans src/Manager/FormationDossierManager)
            'durparjour' => 'd.durparjour',//ajouté le 14/01 pour add un champ NOMBRE D'HEURES PAR JOUR dans extract_personnalisee (dans src/Manager/FormationDossierManager)
            'datesDossier' => 'DATE_FORMAT(d.datesDossier, \'%d/%m/%Y\') datesDossier',//ajouté le 18/01 pour add un champ DATE DE L'ACCORD dans extract_personnalisee (dans src/Manager/FormationDossierManager)
            'lieu' => "d.lieu",
            'dossierTotalHt' => "d.totalHt as dossierTotalHt",
            'nomDossier' => "d.nom as nomDossier",
            'dossierType' => "d.dossierType",
            'tva' => "d.montantTva as tva",
            'statutDossier' => "ds.statut as statutDossier",
            'structure' => 's.structure',
            'client' => 'cli.nomStr as client',
            'nomclient' => "CONCAT(cli.nom, ' ', cli.prenom) as nomclient",
            'opca' => 'cop.nomStr as opca',
            'refFacture' => 'f.ref as refFacture',
            'factCreation' => 'DATE_FORMAT(f.dateCreation, \'%d/%m/%Y\') as factCreation',
            'factEmission' => 'DATE_FORMAT(f.dateEmission, \'%d/%m/%Y\') as factEmission',
            'totalHtAvantRem' => 'f.totalHtAvantRem',
            'montacc' => 'f.mntTtc as montacc',
            'facTotalHt' => 'f.totalHt as facTotalHt',
            'facTotalRegle' => 'f.totalRegleHt as facTotalRegle',
            'mntMarge' => 'f.mntMarge',
            'montantcom' => '(d.mntAccorde * d.tauxCom)/100 as montantcom', // MONTANT ACCORDE a la place de MONTANT HT
            'facDossRef' => 'f.noDossierRef as facDossRef',
            'societe' => 'IFNULL(cfc.nomStr, cfs.nomStr) as societe',
            'encAdd' => 'DATE_FORMAT(e.dateAdd, \'%d/%m/%Y\') as dateAdd',
            'mntTotalTva' => 'e.mntTotalTva',
            'mntHtFac' => 'e.mntHt as mntHtFac',
            'montencaiss' => 'e.mntTtc as montencaiss',
            'dateReelEnc' => "DATE_FORMAT(e.dateReelleEncaiss, '%d/%m/%Y') as dateReelEnc",
            'datePrevEnc' => 'DATE_FORMAT(e.datePrevEncaiss, \'%d/%m/%Y\') as datePrevEnc',
            'empty' => '\'\' as empty',
            'comsStatut' => 'cs.statut as comsStatut',
            'commercial' => 'com.nomPrenom as commercial',
        ];

        $aColumnsName = array_map(function ($key) use ($aColumns){
                return $aColumns[$key];
        }, $aField);

        $sColumn = implode(', ', $aColumnsName);

        return $sColumn;
    }

    /**
     * extract dossier data by structure
     *
     * @param $sStructure
     * @param $aField
     * @return mixed
     */
    public function extractDossierByStructure($sStructure, $aField, $aFilters = []){
        $sColumn = $this->getExtractColumn($aField);

        $qb = $this->getDossierBaseQuery();

        $qb->select($sColumn)
            ->where($qb->expr()->eq('d.idStructure', ':structure'))
            ->setParameter(':structure', $sStructure);

        $qb = self::filterDossierByYearExtract($aFilters, $qb, 'd.dateEnvoi')
            ->orderBy('d.id', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * extract dossier data by statut
     *
     * @param $sStructure
     * @param $aField
     * @return mixed
     */
    public function extractDossierByStatut($iStatut, $aField, $aFilters = []){
        $sColumn = $this->getExtractColumn($aField);

        $qb = $this->getDossierBaseQuery();

        $qb->select($sColumn)
            ->where($qb->expr()->eq('d.idStatut', ':statut'))
            ->setParameter(':statut', $iStatut)
            ->orderBy('d.id', 'DESC');

        $qb = $this->filterDossierByYearExtract($aFilters, $qb, 'd.dateEnvoi');

        return $qb->getQuery()->getResult();
    }

    /**
     * extract facture of dossier
     *
     * @param $iStatut
     * @param $aField
     * @return mixed
     */
    public function extractFactureDossier($iStatut, $aField, $aFilters = []){
        $sColumn = $this->getExtractColumn($aField);

        $qb = $this->getDossierBaseQuery();

        $qb->select($sColumn)
            ->where($qb->expr()->eq('d.idStatut', ':statut'))
            ->setParameter(':statut', $iStatut)
            ->orderBy('d.id', 'DESC');

        $qb = $this->filterDossierByYearExtract($aFilters, $qb, 'd.dateEnvoi');
        return $qb->getQuery()->getResult();
    }

    /**
     * filtrer ExtractData
     *
     * @param $aFilters
     * @param \Doctrine\ORM\QueryBuilder $qb
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function filterByCommissionExtract($aFilters, $qb){

        if (isset($aFilters['moiscom']) && $aFilters['moiscom']) {
            $qb->andWhere($qb->expr()->eq('MONTH(e.dateReelleEncaiss)', ':moiscom'))
                ->setParameter('moiscom', $aFilters['moiscom']);
        }
        if (isset($aFilters['anneecom']) && $aFilters['anneecom']) {
            $qb->andWhere($qb->expr()->eq('YEAR(e.dateReelleEncaiss)', ':anneecom'))
                ->setParameter('anneecom', $aFilters['anneecom']);
        }

        if (isset($aFilters['commercial']) && (!!$aFilters['commercial'])) {
            $qb->andWhere($qb->expr()->eq('com.id', ':commercial'))
                ->setParameter('commercial', $aFilters['commercial']);
        }

        if (isset($aFilters['statut']) && !empty($aFilters['statut'])) {
            $qb->andWhere($qb->expr()->in('d.payencaiss', ':statut'))
                ->setParameter('statut', $aFilters['statut']);
        }

        return $qb;
    }

    /**
     * filtrer data by start and end year for a date field
     *
     * @param $aFilters
     * @param \Doctrine\ORM\QueryBuilder $qb
     * @return \Doctrine\ORM\QueryBuilder
     */
    public static function filterDossierByYearExtract($aFilters, $qb, $sDateField){

        if (isset($aFilters['debut_year']) && $aFilters['debut_year']){
            $sAnneeRef = intval($aFilters['debut_year']);
            $oCompExpr = $qb->expr()->gte("YEAR($sDateField)", ':debut_year');
            $qb->andWhere($oCompExpr)
                ->setParameter(':debut_year', $sAnneeRef);
            
            if (isset($aFilters['debut_month']) && $aFilters['debut_month'] ) {
                $monthRef = intval($aFilters['debut_month']);
                $qb->andWhere($qb->expr()->gte("MONTH($sDateField)", ':debut_month'));
                $qb->setParameter(':debut_month', $monthRef);
            }
        }

        if (isset($aFilters['fin_year']) && $aFilters['fin_year']){
            $sAnneeRef = intval($aFilters['fin_year']);
            $qb->andWhere($qb->expr()->lte("YEAR($sDateField)", ':fin_year'))
                ->setParameter('fin_year', $sAnneeRef);
            
            if (isset($aFilters['fin_month']) && $aFilters['fin_month'] ) {
                $monthRef = intval($aFilters['fin_month']);
                $qb->andWhere($qb->expr()->lte("MONTH($sDateField)", ':fin_month'));
                $qb->setParameter(':fin_month', $monthRef);
            }
        }

        return $qb;
    }

    public function getAllContactDossier($nomContact)
    {
        $qb = $this->createQueryBuilder("fd");

        return $qb->select("str.structure, cnt.nomStr, fd.dateEnvoi, fd.nom, fd.totalHt, fd.themeformation, fd.dateFinPeriode, fd.mntAccorde, fd.dateAccord, fd.id, col.nomPrenom AS commercial")
            ->leftJoin(Structure::class, 'str', 'WITH', 'str.id = fd.idStructure')
            ->leftJoin(Collaborateur::class, 'col', 'WITH', 'fd.idCommercial = col.id')
            ->leftJoin(Contact::class, 'cnt', 'WITH', 'cnt.id = fd.idClient')
            ->where($qb->expr()->eq('cnt.nomStr',":nomContact"))
            ->setParameter("nomContact", $nomContact)
            ->getQuery()
            ->getResult();
    }

    
    /**
     * 
     * @param type $idFD
     */
    public function getFormationDossier($idFD) {
        $qb = $this->createQueryBuilder('fd');
        
        return $qb->where($qb->expr()->eq('fd.id', $idFD))->getQuery()->getOneOrNullResult();
    }
    

    /**
     * APR-188
     * @param type $iLastValidId
     * @return FormationDossier[]
     */
    public function getNotValidRefDossier($iLastValidId) {
        $qb = $this->createQueryBuilder('fd');
        
        $qb
            ->where('fd.id > :id')
            ->setParameter(':id', $iLastValidId)
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    
    /**
     * APR-210 : Détecter les dossiers liés avec des OPCO supprimé
     * qui engendre une erreur 500
     */
    public function getDossierWithBadLink($sLink = 'OPCO') {
       $conn = $this->_em->getConnection();
       
       $sQuery = "
           SELECT fd.id, fd.ref, col.nom_prenom  
           FROM `1_formation_dossier` fd
           LEFT JOIN 1_collaborateur col ON col.id = fd.id_commercial
           WHERE 1 = 1 
        ";
       
       if ($sLink == 'OPCO') {
           $sQuery .= " AND ((id_opca <> 0 AND id_opca IS NOT NULL) AND id_opca NOT IN ( SELECT id FROM 1_contact ))";
       } else if ($sLink == 'client') {
           $sQuery .= " AND ((id_client <> 0 AND id_client IS NOT NULL) AND id_client NOT IN ( SELECT id FROM 1_contact ))";
       }
       
       $sQuery .= "ORDER BY fd.ref DESC";
       
       $stmt = $conn->prepare($sQuery);
       $stmt->execute();
       
       return $stmt->fetchAll();
    }
    public function findAllBetween()
    {
        $date = new DateTime(date('Y-m-d'));
        $date->modify('-97 day');
        $currentDate = new DateTime(date('Y-m-d'));

        return $this->getEntityManager()->createQuery('SELECT p FROM AppBundle:Product p ORDER BY p.name ASC')->getResult();
    }
}
