<?php

namespace App\Repository;

use App\Entity\Facture;
use App\Constants\Facture as FactureConstant;
use App\Entity\Filter\FactureFilter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\NonUniqueResultException;

/**
 * @method Facture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Facture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Facture[]    findAll()
 * @method Facture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Facture::class);
    }

    public function findAllFacture(FactureFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('f');

        $qb->select('
                dossier.id as id_dossier,
                f.id as factureId,
                f.totalRegleHt,
                f.mntTtc,
                f.mntTva,
                avoir.id as idAvoirLiee,
                cntct.id,
                f.dateCreation,
                f.noDossierRef,
                f.ref,
                f.noDevisRef,
                f.dest1,
                f.intituleFacture,
                f.totalTtc,
                f.totalHt,
                struct.id,
                opca_cnt.nomStr as opca,
                cntct.nomStr as client,
                struct.structure as structure,
                col.nomPrenom as commercial,
                dossier.ndossopca as numDossierOpca,
                statut.statut,
                myContact.nomStr as nomClient
            ');

        $qb
            ->leftJoin('f.idDossier', 'dossier')
            ->leftJoin('f.idAvoirLiee', 'avoir')
            ->leftJoin('f.idContact', 'cntct')
            //->leftJoin('f.idStructure', 'laStruct')
            ->leftJoin('App\Entity\Contact', 'myContact','WITH', 'myContact.id = f.idStructure')
            ->leftJoin('dossier.idStructure', 'struct')
            ->leftJoin('f.idStatut', 'statut')
            ->leftJoin('f.idOpca', 'opca_cnt')
            ->leftJoin('f.idResponsable', 'col')
        ;
        if ($filter) {
            //filtre structure
            if ($filter->getStructure()) {
                $sStructure = $filter->getStructure();
                $qb->where($qb->expr()->eq('struct.id', ':structure'));
                $qb->setParameter(':structure', $sStructure);
            }
            //filtre date de creation
            if ($filter->getDateCreation()) {
                $sDateCreation = date_create_from_format('d/m/Y', $filter->getDateCreation());
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring('f.dateCreation', 1, 10), ':dateCreation'));
                $qb->setParameter(':dateCreation', $sDateCreation->format('Y-m-d'));
            }
            //filtre num facture/avoir
            if ($filter->getRef()) {
                $sRef = $filter->getRef();
                $qb->andWhere($qb->expr()->like('f.ref', ':ref'));
                $qb->setParameter(':ref', '%' . $sRef . '%');
            }
            //filtre num dossier interne
            if ($filter->getNoDossierRef()) {
                $sDossierRef = $filter->getNoDossierRef();
                $qb->andWhere($qb->expr()->like('f.noDossierRef', ':dossierRef'));
                $qb->setParameter(':dossierRef', '%' . $sDossierRef . '%');
            }
            //filtre num dossier opca
            if ($filter->getNumDossierOpca()) {
                $sDossierOpca = $filter->getNumDossierOpca();
                $qb->andWhere($qb->expr()->like(' dossier.ndossopca', ':dossierOpca'));
                $qb->setParameter(':dossierOpca', '%' . $sDossierOpca . '%');
            }
            //filtre destinataire
            if ($filter->getDestinataire()) {
                $sDestinataire = $filter->getDestinataire();

                if ($sDestinataire === FactureConstant::DESTINATAIRE_AUTRES) {
                    $sDestinataire = [FactureConstant::DESTINATAIRE_CLIENT, FactureConstant::DESTINATAIRE_OPCA];
                    $oOr = $qb->expr()->orX($qb->expr()->notIn('f.dest1', ':destinataire'), $qb->expr()->isNull('f.dest1'));
                    $qb->andWhere($oOr);
                } else {
                    $qb->andWhere($qb->expr()->eq('f.dest1', ':destinataire'));
                }
                $qb->setParameter(':destinataire', $sDestinataire);
            }
            //filtre  Client
            if ($filter->getClient()) {
                //dd($filter->getClient());
                $sClient = $filter->getClient();
                $qb
                    ->andWhere($qb->expr()->like('myContact.nomStr', ':client'))
                    ->orWhere($qb->expr()->like('cntct.nomStr', ':client'))
                    ->setParameter(':client', '%' . $sClient . '%')
                ;
            }
            //filtre opca
            if ($filter->getOpca()) {
                $sOpca = $filter->getOpca();
                $qb->andWhere($qb->expr()->like('opca_cnt.nomStr', ':opca'));
                $qb->setParameter(':opca', '%' . $sOpca . '%');
            }
            //filtre intitulé stage
            if ($filter->getIntituleStage()) {
                $sIntituleStage = $filter->getIntituleStage();
                $qb->andWhere($qb->expr()->like('f.intituleFacture', ':intituleStage'));
                $qb->setParameter(':intituleStage','%'.$sIntituleStage.'%');
            }
            //filtre commercial
            if ($filter->getCommercial()) {
                $sCommercial = $filter->getCommercial();
                $qb->andWhere($qb->expr()->eq('col.nomPrenom', ':commercial'));
                $qb->setParameter(':commercial', $sCommercial);
            }

            //filtre statut
            if ($filter->getStatut()) {
                $iStatut = $filter->getStatut();
                $qb->andWhere($qb->expr()->eq('f.idStatut', ':statut'));
                $qb->setParameter(':statut', $iStatut);
            }
        }

        return $qb
            ->orderBy('f.id', 'DESC')
            ->getQuery()
            ;
    }

    /**
     * @param int $factureId
     *
     * @return mixed
     * @throws NonUniqueResultException
     */
    public function getFactureInfos(int $factureId) {
        $qb = $this->createQueryBuilder('f');

        $qb->select('
                f.id,
                f.totalRegleHt,
                f.totalRegle,
                f.mntTtc,
                f.mntTva,
                IDENTITY(f.idAvoirLiee) as idAvoirLiee,
                str.id AS idStructure,
                f.dateCreation,
                f.noDossierRef,
                f.ref,
                f.noDevisRef,
                f.dest1,
                f.intituleFacture,
                f.totalTtc,
                f.totalHt,
                opca_cnt.nomStr as opca,
                cli.nomStr as client,
                struct.structure as structure,
                col.nomPrenom as commercial,
                dossier.ndossopca as numDossierOpca,
                statut.statut,
                av.id AS id_avoir,
                av.ref AS num_avoir,
                av.mntTtc AS avoirMontantTTC,
                av.mntTva AS avoirMontantTVA,
                str.structure,
                cntct.nomStr as cliName
            ');

        $qb
            ->leftJoin('f.idDossier', 'dossier')
            ->leftJoin('dossier.idStructure', 'struct')
            ->leftJoin('f.idStatut', 'statut')
            ->leftJoin('App\Entity\Contact', 'cli', 'WITH', 'cli.id = f.idStructure')
            ->leftJoin('f.idContact', 'cntct')
            ->leftJoin('f.idOpca', 'opca_cnt')
            ->leftJoin('f.idResponsable', 'col')
            ->leftJoin('f.idAvoirLiee', 'av')
            ->leftJoin('App\Entity\Structure', 'str', 'WITH', 'f.idStructure = str.id')
        ;

        $qb->where($qb->expr()->eq('f.id', $factureId));

        return $qb->getQuery()->getOneOrNullResult();

    }

    /**
     * @param int $idDossier
     *
     * @return mixed
     * @throws NonUniqueResultException
     */
    public function findLastFacture(int $idDossier) {
        $qb = $this->createQueryBuilder('f');

        $qb->select('
                MAX(f.id) as max_id,
                f.ref
            ');

        $qb
            ->leftJoin('f.idDossier', 'dossier')
        ;

        $qb->where($qb->expr()->eq('f.idDossier', $idDossier));
        $qb->setMaxResults(1);
        $qb->orderBy('max_id', 'DESC');

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function nextAutoIncrement() {
        $req = "SELECT AUTO_INCREMENT as nextId FROM INFORMATION_SCHEMA.TABLES WHERE table_name = '1_facture' AND table_schema = database();";
        $connection = $this->_em->getConnection();
        $stmt = $connection->prepare($req);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row['nextId'];
    }

    public function getLastRefByStruc($sPrefix){
        $qb = $this->createQueryBuilder('f');

        $qb->select('f.ref as numero')
            ->where($qb->expr()->like('f.ref', ':prefix'))
            ->setParameter(':prefix', "$sPrefix%")
            ->orderBy('f.ref', 'DESC')
            ->setMaxResults(1);

        return $qb->getQuery()->getResult();
    }
}
