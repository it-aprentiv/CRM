<?php

namespace App\Repository;

use App\Entity\Menu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Menu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Menu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Menu[]    findAll()
 * @method Menu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Menu::class);
    }

    /**
     * 
     * @param type $userId
     * @return type
     */
    public function findUserMenus($userId, $filter = array()) {
        $qb = $this->createQueryBuilder('menu');
        $qb->leftJoin('App\Entity\Droitspecifique', 'ds', 'WITH', 'ds.menu = menu.idmenu');

        if (isset($filter['ecriture'])) {
            // Droit gestion seulement
            if ($filter['ecriture'] == 0) {
                // Droit gestion
                $qb->select('menu.idmenu, menu.nommenu AS nomMenu, menu.urlmenu');
                $qb->andWhere($qb->expr()->orX($qb->expr()->eq('ds.ecriture', 0), $qb->expr()->eq('ds.ecriture', 1)));
            } else {
                // Droit Ecriture
                $qb
                    ->select('menu.idmenu, menu.nommenu AS nomMenu, menu.urlcreation AS urlmenu')
                    ->where($qb->expr()->isNotNull('menu.urlcreation'))
                    ->andWhere($qb->expr()->eq('ds.ecriture', 1))
                ;
            }
        }

        $qb
            ->andWhere($qb->expr()->eq('ds.utilisateur', ':userId'))
            ->setParameter('userId', $userId)
            ->orderBy('menu.ordre', 'ASC')
        ;

        return $qb
                ->getQuery()
                ->getResult()
        ;
    }

    /**
     * 
     * @param type $userId
     * @return type
     */
    public function hasUserAccessToMenu($iUserId, $sNomMenu, $sDroit) {
        $qb = $this->createQueryBuilder('menu');
        $qb
            ->select('menu.idmenu')
            ->innerJoin('App\Entity\Droitspecifique', 'ds', 'WITH', 'ds.menu = menu.idmenu');

        // Droit lecture seulement
        if ($sDroit === 'view') {
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->eq('ds.ecriture', 0), 
                $qb->expr()->eq('ds.ecriture', 1)
            ));
        } else {
            // Droit ecriture
            $qb
                ->andWhere($qb->expr()->eq('ds.ecriture', 1))
            ;
        }

        $qb
            ->andWhere($qb->expr()->eq('ds.utilisateur', ':userId'))
            ->setParameter('userId', $iUserId)
            ->andWhere($qb->expr()->like('menu.nommenu', ':nomMenu'))
            ->setParameter('nomMenu', '%'.$sNomMenu.'%')
            ->setMaxResults(1)
        ;

        return $qb->getQuery()->getResult();
    }

    public function countMenus(){
        $qb = $this->createQueryBuilder('menu');
        $qb->select('count(menu.idmenu) as nbMenus');
        return $qb->getQuery()->getSingleScalarResult();
    }
}
