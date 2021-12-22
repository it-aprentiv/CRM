<?php

namespace App\Repository;

use App\Entity\Filter\FormationCatalogueFilter;
use App\Entity\FormationCatalogue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @method FormationCatalogue|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormationCatalogue|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormationCatalogue[]    findAll()
 * @method FormationCatalogue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationCatalogueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationCatalogue::class);
    }

    /**
     * @param FormationCatalogueFilter $filter
     *
     * @return QueryBuilder
     */
    public function queryGetcatalogues(FormationCatalogueFilter $filter)
    {
        //dd($filter);
        $qb = $this->createQueryBuilder('fc');

        $qb
            ->select(
            'fc.id,
            fc.intraInter as type,
            fc.nomFormation,
            struct.structure as structure,
            fc.dureeJ,
            fc.dureeH,
            fc.tarHtH,
            fc.tarJ,
            fc.tarHtDj,
            fc.dureeJ,
            fc.dateDebut,
            fc.dateFin')
            ->leftJoin('fc.idStructure', 'struct')
        ;

        if ($filter->getNomFormation()) {
            $qb->andWhere('fc.nomFormation LIKE :intitule')
                ->setParameter('intitule', "%".$filter->getNomFormation()."%");
        }

        if ($filter->getType()) {
            $qb->andWhere('fc.intraInter = :type')
                ->setParameter('type', $filter->getType());
        }

        return $qb;
    }
}
