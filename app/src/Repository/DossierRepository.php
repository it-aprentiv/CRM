<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 17/12/2019
 * Time: 15:23
 */

namespace App\Repository;

use App\Entity\Collaborateur;
use App\Entity\Competence;
use App\Entity\Contact;
use App\Entity\Dossier;
use App\Entity\Filter\FactureFormationFilter;
use App\Entity\Filter\FormationFilter;
use App\Entity\FormateurCompetence;
use App\Entity\FormateurStatut;
use App\Entity\FormationDossierStatut;
use App\Entity\OrdredemissionStatut;
use App\Entity\Structure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * Class DossierRepository
 * @package App\Repository
 */
class DossierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dossier::class);
    }


    /**
     * @return mixed
     */
    public function getLastInsertedId() {
        return $this->createQueryBuilder('d')
            ->select('d.id')
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleResult();
    }

    public function nextAutoIncrement() {
        $req = "SELECT AUTO_INCREMENT as nextId FROM INFORMATION_SCHEMA.TABLES WHERE table_name = '1_dossier' AND table_schema = database();";
        $connection = $this->_em->getConnection();
        $stmt = $connection->prepare($req);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row['nextId'];

        /*
         $stmt = $this->_em->createQuery($req);
         return $stmt->execute();
         */
    }

    public function getQueryFormationFilter(FormationFilter $filter = null) {
        $qb = $this->createQueryBuilder('d');
        $qb->select("
            d.id as idFormation, som.omiStatut as OMStatut, cli.nom as client , for.nom as formateur, struct.structure as entite,
            d.dateAccord as dateOM, d.idCommercial as commercial, d.nom as intitule, d.dossierType as type, d.dureeJours as dureeEnJour,
            d.dureeHeures as dureeEnHeure, d.nbStagiaires as nbStagiaires, d.pvTotalHt, d.pfmteurTotalHt  
            ");

        $qb
            ->leftJoin(OrdredemissionStatut::class, "som", "WITH", "d.idStatut = som.id")
            ->leftJoin(Structure::class, "struct", "WITH", "d.idStructure = struct.id")
            ->leftJoin(Contact::class, "cli", "WITH", "cli.id = d.idClient")
            ->leftJoin(Contact::class, "for", "WITH", "for.id = d.idFormateur")
        ;


        if ($filter) {
            //filtre structure (entite)
            if ($filter->getEntite()) {
                $oStructure = $filter->getEntite();
                $qb->andWhere($qb->expr()->eq('d.idStructure',':entite'));
                $qb->setParameter(':entite', $oStructure);
            }
            //filtre Mois
            if ($filter->getMois()) { 
                $iMois = $filter->getMois();
                $qb->andWhere($qb->expr()->eq('MONTH(d.dateAccord)', ':mois'));
                $qb->setParameter(':mois', $iMois);
            }
            //filtre date de creation
            if ($filter->getDateOM() instanceof \DateTime) {
                $dateOM = ($filter->getDateOM())->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('d.dateAccord', ':dateOM'));
                $qb->setParameter(':dateOM', $dateOM);
            }
           //filtre formateur ou organisme
            if ($filter->getFormateurOrganisme()) { 
                $oFormateurOrganisme = $filter->getFormateurOrganisme();
                $qb->andWhere($qb->expr()->eq('d.idFormateur', ':formateurOrganisme'));
                $qb->setParameter(':formateurOrganisme', $oFormateurOrganisme);
            }
             //filtre client
            if ($filter->getClient()) { 
                $oClient= $filter->getClient();
                $qb->andWhere($qb->expr()->eq('d.idClient', ':client'));
                $qb->setParameter(':client',$oClient);
            }
            //filtre statut
            /*if ($filter->getStatutFormateur()) {
                $oStatut = $filter->getStatutFormateur();
                $qb->andWhere($qb->expr()->eq('d.statutFormateur', ':status'));
                $qb->setParameter(':status', $oStatut);
            }*/
            //filtre intitulé stage
            if ($filter->getIntitule()) {
                $sIntituleStage = $filter->getIntitule();
                $qb->andWhere($qb->expr()->like('d.nom', ':intituleStage'));
                $qb->setParameter(':intituleStage','%'.$sIntituleStage.'%');
            }
            //Nombre stagiaires
            if ("integer"  === gettype($filter->getNbStagiaire())) {
                $iNbStag = $filter->getNbStagiaire();
                $qb->andWhere($qb->expr()->eq('d.nbStagiaires', ':nbStag'));
                $qb->setParameter(':nbStag', $iNbStag);
            }
            //Durée en jour
            if ($filter->getDureeEnJour()) {
                $iDureeJour = $filter->getDureeEnJour();
                $qb->andWhere($qb->expr()->eq('d.dureeJours', ':dureeJour'));
                $qb->setParameter(':dureeJour', $iDureeJour);
            }
            //Durée en heure
            if ($filter->getDureeEnHeure()) {
                $iDureeHeure = $filter->getDureeEnHeure();
                $qb->andWhere($qb->expr()->eq('d.dureeHeures', ':dureeHeure'));
                $qb->setParameter(':dureeHeure', $iDureeHeure);
            }
            //filtre type
            if ($filter->getType()) { 
                $sType = $filter->getType();
                $qb->andWhere($qb->expr()->like('d.dossierType', ':type'));
                $qb->setParameter(':type','%'.$sType.'%');
            }

            // filtre montant Achat HT
            if($filter->getMontantAchatHT()) {
                $fMntAchatHT = $filter->getMontantAchatHT();
                $qb->andWhere($qb->expr()->eq('d.pfmteurTotalHt', ':pAchatHT'));
                $qb->setParameter('pAchatHT', $fMntAchatHT);
            }

            //filtre montant Vente HT
            if($filter->getMontantVenteHT()) {
                $fMntVenteHT = $filter->getMontantVenteHT();
                $qb->andWhere($qb->expr()->eq('d.pvTotalHt', ':pVenteHT'));
                $qb->setParameter('pVenteHT', $fMntVenteHT);
            }

            /*//filtre domaine de compétence
            if ($filter->getDomaineCompetence()) {
                $domaine = $filter->getDomaineCompetence();
                $qb->andWhere($qb->expr()->like('d.nom', ':domaine'));
                $qb->setParameter(':domaine','%'.$domaine.'%');
            }

            //filtre commercial
            if ($filter->getCial()) {
                $sCommercial = $filter->getCial();
                $qb->andWhere($qb->expr()->eq('d.idCommercial', ':commercial'));
                $qb->setParameter(':commercial', $sCommercial);
            }*/
        }

        return $qb
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ;
    }

    public function getDossierContactData($contactid)
    {
        $qb = $this->createQueryBuilder("d");

        return $qb->select("d.lieu, d.soustraitance,d.id,d.dateAccord as d_ordre_mission,
        d.ref as n_ordre_mission,str.id as structure,
        d.intraInter as typestage,
        dstt.id as statom,
        d.dureeJours,d.dureeHeures,d.dateDebutPeriode,
        d.dateFinPeriode,d.pvTarifJ,d.pvTarifDj,
        d.pvTarifH,d.pvTotalHt,d.pfmteurJ,
        d.pfmteurDj,d.pfmteurH,d.pfmteurTotalHt,
        frmt.id as formateur,frmt.nomStr nomsocformateur,concat(frmt.nom,' ',frmt.prenom) nomformateur")
            ->where($qb->expr()->eq("d.idClient",":contactid"))
            ->leftJoin('App\Entity\Structure', 'str', 'WITH', 'd.idStructure = str.id' )
            ->leftJoin('App\Entity\Contact', 'frmt', "WITH", "d.idFormateur = frmt.id")
            ->leftJoin('App\Entity\OrdredemissionStatut', 'dstt', "WITH", "d.idStatut = dstt.id")
            ->setParameter("contactid",$contactid)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getDossierContactDataBy($contactId, $dossierId)
    {
        $qb = $this->createQueryBuilder("d");

        return $qb->select("d.lieu, d.soustraitance,d.id,d.dateAccord as d_ordre_mission,
        d.ref as n_ordre_mission,str.id as structure,
        d.intraInter as typestage,
        dstt.id as statom,
        d.dureeJours,d.dureeHeures,d.dateDebutPeriode,
        d.dateFinPeriode,d.pvTarifJ,d.pvTarifDj,
        d.pvTarifH,d.pvTotalHt,d.pfmteurJ,
        d.pfmteurDj,d.pfmteurH,d.pfmteurTotalHt,
        DATE_FORMAT(d.dateDebutPeriode, '%d/%c/%Y') as dateDebutStage,
        DATE_FORMAT(d.dateFinPeriode, '%d/%c/%Y') as dateFinStage,
        frmt.id as formateur,frmt.nomStr nomsocformateur,concat(frmt.nom,' ',frmt.prenom) nomformateur")
            ->where($qb->expr()->eq("d.idClient",":contactid"))
            ->andWhere($qb->expr()->eq('d.id', ':dossierId'))
            ->leftJoin('App\Entity\Structure', 'str', 'WITH', 'd.idStructure = str.id' )
            ->leftJoin('App\Entity\Contact', 'frmt', "WITH", "d.idFormateur = frmt.id")
            ->leftJoin('App\Entity\OrdredemissionStatut', 'dstt', "WITH", "d.idStatut = dstt.id")
            ->setParameter("contactid",$contactId)
            ->setParameter("dossierId",$dossierId)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
    
    
    /**
     * Donnée facture formation
     *
     * @param $aFilters
     * @return \Doctrine\ORM\Query
     */
    public function getFactureFormationQuery(?FactureFormationFilter $oFilter){
        $qb = $this->createQueryBuilder('d');

        $sColumns = "d.id, d.pfmteurTotalHt, d.pvTotalHt, d.dureeHeures, d.dureeJours, d.nbStagiaires, "
            . " d.dateAccord as dateOrdMission, d.ref as numOrdMission, d.intraInter as typestage, "
            . " cm.nomPrenom as com, "
            . " c.competence, "
            . " fs.statut as statutcomp, "
            . " s.structure as entite, "
            . " cli.nomStr as societe, "
            . " d.nom as intitstage, "
            . " CONCAT(f.nom,' ', f.prenom) as formateur "
        ;

        $qb->select($sColumns)
            ->leftJoin(Structure::class, 's', 'WITH', 'd.idStructure = s.id')
            ->leftJoin(Contact::class, 'cli', 'WITH', 'd.idClient = cli.id')
            ->leftJoin(Contact::class, 'f', 'WITH', 'd.idFormateur = f.id')
            ->leftJoin(FormationDossierStatut::class, 'ds', 'WITH', 'd.idStatut = ds.id')
            ->leftJoin(FormateurCompetence::class, 'fc', 'WITH', 'cli.id = fc.idContact')
            ->leftJoin(FormateurStatut::class, 'fs', 'WITH', 'fs.id = cli.idStatutFmt')
            ->leftJoin(Competence::class, 'c', 'WITH', 'c.id = fc.idCompetence')
            ->leftJoin(Collaborateur::class, 'cm', 'WITH', 'cm.id = cli.commercial')
            ->orderBy('d.id', 'DESC')
        ;

        if ($oFilter instanceof FactureFormationFilter) {
            $oStructure = $oFilter->getStructure();
            if ($oStructure instanceof Structure) {
                $qb->andWhere($qb->expr()->eq('d.idStructure', ':structure'))
                    ->setParameter(':structure', $oStructure);
            }

            $iMois = $oFilter->getMois();
            if ($iMois) {
                $qb->andWhere($qb->expr()->eq('MONTH(d.dateAccord)', ':mois'))
                    ->setParameter(':mois', $iMois);
            }

            $oDateOM = $oFilter->getDateom();
            if ($oDateOM instanceof \DateTime) {
                $sDateOM = $oDateOM->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('d.dateAccord', ':dateom'))
                    ->setParameter(':dateom', $sDateOM);
            }

            $sFormateur = $oFilter->getFormateur();
            if ($sFormateur !== null && $sFormateur !== '') {
                $sFormateur = "%".$sFormateur."%";
                $qb->andWhere($qb->expr()->like("CONCAT(f.nom,' ', f.prenom)", ':formateur'))
                    ->setParameter(':formateur', $sFormateur);
            }

            // non fonctionnel sur V1
            /*$sStatutFormateur = $oFilter->getFormateur();
            if ($sStatutFormateur !== null && $sStatutFormateur !== '') {
                $sStatutFormateur = "%".$sStatutFormateur."%";
                $qb->andWhere($qb->expr()->like("fs", ':formateur'))
                    ->setParameter(':formateur', $sFormateur);
            }*/

            $sCommercial = $oFilter->getCommercial();
            if ($sCommercial !== null && $sCommercial !== '') {
                $sCommercial = "%".$sCommercial."%";
                $qb->andWhere($qb->expr()->like('cm.nomPrenom', ':commercial'))
                    ->setParameter(':commercial', $sCommercial);
            }

            $oClient = $oFilter->getClient();
            if ($oClient instanceof Contact) {
                $qb->andWhere($qb->expr()->eq('d.idClient', ':client'))
                    ->setParameter(':client', $oClient);
            }

            $sIntitule = $oFilter->getIntitule();
            if (null !== $sIntitule && '' !== $sIntitule) {
                $sIntitule = "%" . $sIntitule . "%";
                $qb->andWhere($qb->expr()->like("d.nom", ':intitule'))
                    ->setParameter(':intitule', $sIntitule);
            }

            $sType = $oFilter->getType();
            if (null !== $sType && '' !== $sType){
                $qb->andWhere($qb->expr()->eq('d.intraInter', ':type'))
                    ->setParameter(':type', $sType);
            }

            $sCompetence = $oFilter->getCompetence();
            if (null !== $sCompetence && '' !== $sCompetence) {
                $sCompetence = "%".$sCompetence . "%";
                $qb->andWhere($qb->expr()->like('c.competence', ':competence'))
                    ->setParameter(':competence', $sCompetence);
            }

            $sNbj = $oFilter->getNbJ();
            if ($sNbj !== null && '' !== $sNbj) {
                $sNbj = "%" . $sNbj . "%";
                $qb->andWhere($qb->expr()->like('d.dureeJours', ':nbj'))
                    ->setParameter(':nbj', $sNbj);
            }

            $sNbh = $oFilter->getNbH();
            if ($sNbh !== null && '' !== $sNbh) {
                $sNbh = "%" . $sNbh . "%";
                $qb->andWhere($qb->expr()->like('d.dureeHeures', ':nbh'))
                    ->setParameter(':nbh', $sNbh);
            }

            $sNbStag = $oFilter->getNbStagiaires();
            if ($sNbStag !== null && '' !== $sNbStag) {
                $sNbStag = "%" . $sNbStag . "%";
                $qb->andWhere($qb->expr()->like('d.nbStagiaires', ':nbStagiaires'))
                    ->setParameter(':nbStagiaires', $sNbStag);
            }

            $sMntAchat = $oFilter->getMntAchatHt();
            if ($sMntAchat !== null && '' !== $sMntAchat) {
                if ($sMntAchat == 0) {
                    // rechercher ausso les valeurs null et vide si 0
                    $sMntAchat = "";
                    $oExpr = $qb->expr()->orX(
                        $qb->expr()->isNull('d.pfmteurTotalHt'),
                        $qb->expr()->eq('d.pfmteurTotalHt', ':mntAchat')
                    );
                } else {
                    $sMntAchat = "%" . $sMntAchat . "%";
                    $oExpr = $qb->expr()->like('d.pfmteurTotalHt', ':mntAchat');
                }
                $qb->andWhere($oExpr)
                    ->setParameter(':mntAchat', $sMntAchat);
            }

            $sMntVente = $oFilter->getMntVenteHt();
            if ($sMntVente !== null && '' !== $sMntVente) {
                if ($sMntVente == 0) {
                    // rechercher ausso les valeurs null et vide si 0
                    $sMntVente = "";
                    $oExpr = $qb->expr()->orX(
                        $qb->expr()->isNull('d.pvTotalHt'),
                        $qb->expr()->eq('d.pvTotalHt', ':pvTotalHt')
                    );
                } else {
                    $sMntVente = "%" . $sMntVente . "%";
                    $oExpr = $qb->expr()->like('d.pvTotalHt', ':pvTotalHt');
                }
                $qb->andWhere($oExpr)
                    ->setParameter(':pvTotalHt', $sMntVente);
            }

        }

        return $qb->getQuery();
    }

    public function getDossierDataBy($dossierId) {
        $qb = $this->createQueryBuilder("d");
        return $qb->select("
            d.lieu, d.soustraitance, d.id, d.dateAccord as d_ordre_mission,
            d.ref as n_ordre_mission,str.id as structure,
            d.intraInter as typestage,            
            d.dureeJours,d.dureeHeures,d.dateDebutPeriode,
            d.dateFinPeriode,d.pvTarifJ,d.pvTarifDj,
            d.pvTarifH,d.pvTotalHt,d.pfmteurJ,
            d.pfmteurDj,d.pfmteurH,d.pfmteurTotalHt,
            DATE_FORMAT(d.dateDebutPeriode, '%d/%c/%Y') as dateDebutStage,
            DATE_FORMAT(d.dateFinPeriode, '%d/%c/%Y') as dateFinStage,
            frmt.id as formateur,frmt.nomStr nomsocformateur,concat(frmt.nom,' ',frmt.prenom) nomformateur
        ")
            ->where($qb->expr()->eq('d.id', ':dossierId'))
            ->setParameter('dossierId', $dossierId)
            ->leftJoin('App\Entity\Structure', 'str', 'WITH', 'd.idStructure = str.id' )
            ->leftJoin('App\Entity\Contact', 'frmt', "WITH", "d.idFormateur = frmt.id")
            ->getQuery()
            ->getSingleResult();
         ;

    }

    public function getLastOMRefByStruc($sPrefix){
        $qb = $this->createQueryBuilder('f');

        $qb->select('f.refOrdreMission as numero')
            ->where($qb->expr()->like('f.refOrdreMission', ':prefix'))
            ->setParameter(':prefix', "$sPrefix%")
            ->orderBy('f.refOrdreMission', 'DESC')
            ->setMaxResults(1);

        $aLastRef = $qb->getQuery()->getOneOrNullResult();

        return $aLastRef ? $aLastRef['numero'] : null;
    }
}