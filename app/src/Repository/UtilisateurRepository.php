<?php

namespace App\Repository;

use App\Entity\Assomenuutilisateur;
use App\Entity\Filter\UtilisateurFilter;
use App\Entity\Menu;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Utilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateur[]    findAll()
 * @method Utilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    /**
     * Recherche tous les utilisateurs
     * @return \Doctrine\ORM\Query
     */
    public function findUsersMenuQuery(UtilisateurFilter $userFilter = null)
    {
        $qb = $this->createQueryBuilder('u');

        $qb->select('
                u.idutilisateur, u.nomutilisateur, u.username AS prenomutilisateur, u.droit, u.poste,
                m.idmenu, m.nommenu, m.categorie, m.urlcreation,
                ds.ecriture 
        ')
        ->leftJoin('App\Entity\Droitspecifique', 'ds', 'WITH', 'ds.utilisateur = u.idutilisateur' )
        ->leftJoin(Menu::class, 'm', 'WITH', 'm.idmenu = ds.menu');

        if ($userFilter) {
            if ($userFilter->getUserId()) {
                $qb->where($qb->expr()->eq('u.idutilisateur', ':userId'));
                $qb->setParameter('userId', $userFilter->getUserId());
            }

            if ($userFilter->getNomPrenom()) {
                $qb->where($qb->expr()->orX(
                    $qb->expr()->like('u.nomutilisateur', ':nameFirstname'),
                    $qb->expr()->like('u.username', ':nameFirstname'))
                );
                $qb->setParameter('nameFirstname', '%'.$userFilter->getNomPrenom().'%');
            }

            if ($userFilter->getPoste()) {
                $qb->andWhere($qb->expr()->eq('u.poste', ':poste'));
                $qb->setParameter('poste', $userFilter->getPoste());
            }
        }

        return $qb
            ->orderBy('u.idutilisateur', 'DESC')
            ->getQuery()
            ;
    }


    /**
     * Supprimer un utilisateur 
     * @param int $userId : id de l'user à supprimer
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function removeUser(int $userId) {
        $qb = $this->createQueryBuilder('ut');

        return $this
            ->createQueryBuilder('ut')
            ->delete()
            ->where($qb->expr()->eq('ut.idutilisateur', ':id'))
            ->setParameter('id', $userId)
            ->getQuery()
            ->execute();
    }

    /**
     * Retrouver les différents postes utilisateurs
     * @return type
     */
    public function getAvailablePostes() {
        $qb = $this->createQueryBuilder('ut');

        return $qb
            ->select('DISTINCT ut.poste')
            ->where($qb->expr()->isNotNull('ut.poste'))
            ->orderBy('ut.poste', 'ASC')
            ->getQuery()
            ->getResult();
    }
    
}
