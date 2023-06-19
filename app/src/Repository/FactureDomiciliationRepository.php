<?php

namespace App\Repository;

use App\Entity\FactureDomiciliation;
use App\Entity\Filter\FactureDomiciliationFilter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @method FactureDomiciliationRepository|null find($id, $lockMode = null, $lockVersion = null)
 * @method FactureDomiciliationRepository|null findOneBy(array $criteria, array $orderBy = null)
 * @method FactureDomiciliationRepository[]    findAll()
 * @method FactureDomiciliationRepository[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureDomiciliationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FactureDomiciliation::class);
    }

    /**
     * @param FactureDomiciliationFilter $filter
     *
     * @return QueryBuilder
     */
    public function getAllQuery(FactureDomiciliationFilter $filter)
    {
        $qb = $this->createQueryBuilder('fd');

        $qb
            ->addSelect('pay.id as payeurId')
            ->addSelect('statut.statut as statutfact')
            ->addSelect('typeStruct.id as idStructure')
            ->addSelect('typeStruct.structure')
            ->addSelect('fd.idfacturedom')
            ->addSelect('statut.statut')
            ->addSelect('com.nomPrenom as commercial')
            ->addSelect('fd.ttc')
            ->addSelect('fd.ht')
            ->addSelect('fd.dateestimepaiement')
            ->addSelect('fd.date as datefacture')
            ->addSelect('pay.libelle as payeur')
            ->addSelect('dom.partenaire')
            ->addSelect('typeDom.libelle as type')
            ->addSelect('fd.numero')
            ->addSelect('dom.id as idDom')
            ->addSelect('dom.ref')
            ->addSelect('cli.nomStr')
            ->addSelect('dom.debut')
            ->addSelect('dom.fin')
            ->addSelect('dom.accord')
            ->addSelect('dom.fixe')
            ->addSelect('dom.recu')
            ->addSelect('statut.statut')
            ->addSelect('dom.creation')
            ->addSelect('dom.encaissement')
        ;

        $qb
            ->join('fd.domiciliation', 'dom')
            ->leftJoin('dom.client', 'cli')
            ->leftJoin('dom.type', 'typeDom')
            ->leftJoin('cli.structure', 'typeStruct')
            ->leftJoin('fd.payeur', 'pay')
            ->leftJoin('dom.commercial', 'com')
            ->leftJoin('dom.statut', 'statut')
        ;

        if($filter->getStructure()){
            $qb->andWhere('cli.idType = :Idtype')
                ->setParameter('Idtype', $filter->getStructure());
        }
        if ($filter->getClient()) {
            $qb->andWhere('cli.nomStr = :clientId')
                ->setParameter('clientId', $filter->getClient());
        }

        if ($filter->getType()) {
            $qb->andWhere('typeDom.id = :typeId')
                ->setParameter('typeId', $filter->getType()->getId());
        }

        if ($filter->getReference()) {
            $qb->andWhere('dom.ref = :reference')
                ->setParameter('reference', $filter->getReference());
        }

        if ($filter->getNumFacture()) {
            $qb->andWhere('fd.numero = :numero')
                ->setParameter('numero', $filter->getNumFacture());
        }
        //dd($qb);
        return $qb
            ->orderBy('fd.idfacturedom', 'DESC');
    }

    public function getLastRefByStruc($sPrefix){
        $qb = $this->createQueryBuilder('f');

        $qb->select('f.numero')
            ->where($qb->expr()->like('f.numero', ':prefix'))
            ->setParameter(':prefix', "$sPrefix%")
            ->orderBy('f.numero', 'DESC')
            ->setMaxResults(1);

        return $qb->getQuery()->getResult();
    }

    public function getFactureByClient($idClient, $iType = null){
        $qb = $this->createQueryBuilder('f');

        $qb->select('f.idfacturedom as id, cli.id as client')
            ->leftJoin('f.domiciliation', 'dom')
            ->leftJoin('dom.client', 'cli')
            ->where($qb->expr()->eq('dom.client', ':client'))
            ->setParameter(':client', $idClient);

        if (!is_null($iType)) {
            $qb->andWhere($qb->expr()->eq('dom.type', ':type'))
                ->setParameter(':type', $iType);
        }
        $qb->orderBy('f.idfacturedom', 'ASC');

        return $qb->getQuery()->getResult();
    }
}
