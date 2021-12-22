<?php

namespace App\Repository;


use App\Entity\Contact;
use App\Entity\Domiciliation;
use App\Entity\FactureDomiciliation;
use App\Entity\Filter\DomiciliationFilter;
use App\Entity\FormationDossierStatut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class DomiciliationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Domiciliation::class);
    }

    public function listDomicilQuery(?DomiciliationFilter $oFilter = null){
        $qb = $this->createListDomicilBuidler();

        if ($oFilter instanceof DomiciliationFilter) {
            $sRef = $oFilter->getRef();
            if (!is_null($sRef) && ($sRef !== '')) {
                $sRef = '%'.$sRef.'%';
                $qb->andWhere($qb->expr()->like('d.ref', ':ref'))
                    ->setParameter('ref', $sRef);
            }

            $oClient = $oFilter->getClient();
            if ($oClient instanceof Contact) {
                $sIdClient = $oClient->getId();
                $qb->andWhere($qb->expr()->eq('d.client', ':client'))
                    ->setParameter('client', $sIdClient);
            }

            $oDebut = $oFilter->getDebut();
            if ($oDebut instanceof \DateTime) {
                $sDebut = $oDebut->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('d.debut', ':debut'))
                    ->setParameter('debut', $sDebut);
            }

            $oFin = $oFilter->getFin();
            if ($oFin instanceof \DateTime) {
                $sFin = $oFin->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('d.fin', ':fin'))
                    ->setParameter('fin', $sFin);
            }

            $iAccorde = $oFilter->getMontantAccorde();
            if (!is_null($iAccorde)) {
                $qb->andWhere($qb->expr()->eq('d.recu', ':accorde'))
                    ->setParameter('accorde', $iAccorde);
            }

            $iMtFacture = $oFilter->getMontantFacture();
            if (!is_null($iMtFacture)) {
                $qb->andWhere($qb->expr()->eq('d.fixe', ':mntFacture'))
                    ->setParameter('mntFacture', $iMtFacture);
            }

            $iMtRegle = $oFilter->getMontantRegle();
            if (!is_null($iMtRegle)) {
                $qb->andWhere($qb->expr()->eq('d.recu', ':mntRegle'))
                    ->setParameter('mntRegle', $iMtRegle);
            }

            $iMtDu = $oFilter->getMontantDu();
            if (!is_null($iMtDu)) {
                $qb->andWhere($qb->expr()->eq('(d.recu - d.fixe)', ':mtDu'))
                    ->setParameter('mtDu', $iMtDu);
            }

            $oStatut = $oFilter->getStatut();
            if ($oStatut instanceof FormationDossierStatut) {
                $iStatut = $oStatut->getId();
                $qb->andWhere($qb->expr()->eq('d.statut', ':statut'))
                    ->setParameter('statut', $iStatut);
            }

            $sRefFacture = $oFilter->getRefFacture();
            if (!is_null($sRefFacture) && ($sRefFacture !== '')) {
                $sRefFacture = '%'.$sRefFacture.'%';
                $qb->andWhere($qb->expr()->isNotNull('f.numero'))
                    ->andWhere($qb->expr()->like('f.numero', ':facture'))
                    ->setParameter('facture', $sRefFacture);
            }

            $oDateEmi = $oFilter->getDateEmission();
            if ($oDateEmi instanceof \DateTime) {
                $sDateEmi = $oDateEmi->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('d.creation', ':creation'))
                    ->setParameter('creation', $sDateEmi);
            }

            $oDateEnc = $oFilter->getDateEnc();
            if ($oDateEnc instanceof \DateTime) {
                $sDateEnc = $oDateEnc->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('d.encaissement', ':encaissement'))
                    ->setParameter('encaissement', $sDateEnc);
            }
        }

        return $qb->orderBy('d.id', 'DESC')
            ->getQuery();
    }

    /**
     * @param bool $bFormatDate
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function createListDomicilBuidler($bFormatDate = false){
        $qb = $this->createQueryBuilder('d');

        $sDateDebutCol = $bFormatDate ? "DATE_FORMAT(d.debut, '%d/%m/%Y') as debut" : "d.debut";
        $sDateFinCol = $bFormatDate ? "DATE_FORMAT(d.fin, '%d/%m/%Y') as fin" : "d.fin";
        $sDateCreationCol = $bFormatDate ? "DATE_FORMAT(d.creation, '%d/%m/%Y') as creation" : "d.creation";

        $qb->select("d.id, d.ref, c.nomStr as client, $sDateDebutCol, $sDateFinCol, d.recu, "
            . "d.fixe, (d.recu - d.fixe) as du, s.statut, $sDateCreationCol, d.encaissement, f.numero as ref_facture"
        )
            ->innerJoin(FormationDossierStatut::class, 's', 'WITH', 'd.statut = s.id')
            ->innerJoin(Contact::class, 'c', 'WITH', 'd.client = c.id')
            ->leftJoin(FactureDomiciliation::class, 'f', 'WITH', 'd.id = f.domiciliation');

        return $qb;
    }

    public function extractDossierLocation($aFilters = []){
        $qb = $this->createListDomicilBuidler(true);

        $qb = FormationDossierRepository::filterDossierByYearExtract($aFilters, $qb, 'd.creation')
            ->orderBy('c.nomStr', 'ASC');


        return $qb->getQuery()->getResult();
    }
}