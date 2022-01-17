<?php

namespace App\Repository;

use App\Entity\Filter\PropalFilter;
use App\Entity\Propal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use function Doctrine\ORM\QueryBuilder;

/**
 * @method Propal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Propal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Propal[]    findAll()
 * @method Propal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Propal::class);
    }

    public function findallpropal(PropalFilter $propalFilter = null)
    {
        $qb = $this->createQueryBuilder("ppl");
        $qb->select('ppl.id idpropal,ent.structure as entite, stt.statutDevis statut,
        com.nomPrenom as commercial, clt.nomStr as client, ppl.nom as nom, ppl.prenom as prenom ,ppl.type as type, ppl.coutht as coutht, ppl.fiabilite as fiabilite');

        $qb->leftJoin("ppl.entitypropal", "ent")
            ->leftJoin("ppl.statutpropal", "stt")
            ->leftJoin("ppl.commercialpropal", "com")
            ->leftJoin("ppl.clientpropal", "clt");
        if($propalFilter){
            if($propalFilter->getStatutpropal()){
                $qb->andWhere($qb->expr()->eq("ppl.statutpropal", ":statut"))
                    ->setParameter("statut", $propalFilter->getStatutpropal());
            }

            if($propalFilter->getEntitypropal()){
                $qb->andWhere($qb->expr()->eq("ppl.entitypropal", ":entity"))
                    ->setParameter("entity", $propalFilter->getEntitypropal());
            }

            if($propalFilter->getCommercial()){
                $qb->andWhere($qb->expr()->eq("ppl.commercialpropal", ":commercial"))
                    ->setParameter("commercial", $propalFilter->getCommercial());
            }

            if($propalFilter->getClient()){
                $qb->andWhere($qb->expr()->eq("clt.nomStr", ":client"))
                    ->setParameter("client", $propalFilter->getClient());
            }

            if($propalFilter->getType()){
                $qb->andWhere($qb->expr()->eq("ppl.type", ":type"))
                    ->setParameter("type", $propalFilter->getType());
            }
        }

        return $qb
            ->orderBy('ppl.id', 'DESC')
            ->getQuery();
    }

    public function getStatsYearsPropals(){
        $qb = $this->createQueryBuilder("ppl");
        $qb->select('
        YEAR(ppl.dateedition) AS year, 
        SUM(CASE WHEN ppl.fiabilite = \'Tiede\' THEN 1 ELSE 0 END) as tiede, 
        SUM(CASE WHEN ppl.fiabilite = \'Froid\' THEN 1 ELSE 0 END) as froid, 
        SUM(CASE WHEN ppl.fiabilite = \'Chaud\' THEN 1 ELSE 0 END) as chaud
        ');

        $qb->leftJoin("ppl.entitypropal", "ent")
            ->leftJoin("ppl.statutpropal", "stt")
            ->leftJoin("ppl.commercialpropal", "com")
            ->leftJoin("ppl.clientpropal", "clt");

            return $qb
            ->groupBy("year")
            ->andWhere('year(ppl.dateedition) != :val2')
            ->setParameter('val2', "null")
            ->getQuery()
            ->execute()
            ;
    }

    public function findallpropalportail(PropalFilter $propalFilter = null)
    {
        $qb = $this->createQueryBuilder("ppl");
        $qb->select('ppl.id idpropal,ent.structure as entite, stt.statutDevis statut,
        com.nomPrenom as commercial, clt.nomStr as client, ppl.nom as nom, ppl.prenom as prenom ,ppl.type as type, ppl.daterelance, ppl.coutht as coutht, ppl.fiabilite as fiabilite');

        $qb->leftJoin("ppl.entitypropal", "ent")
            ->leftJoin("ppl.statutpropal", "stt")
            ->leftJoin("ppl.commercialpropal", "com")
            ->leftJoin("ppl.clientpropal", "clt");
        if($propalFilter){
            if($propalFilter->getStatutpropal()){
                $qb->andWhere($qb->expr()->eq("ppl.statutpropal", ":statut"))
                    ->setParameter("statut", $propalFilter->getStatutpropal());
            }

            if($propalFilter->getEntitypropal()){
                $qb->andWhere($qb->expr()->eq("ppl.entitypropal", ":entity"))
                    ->setParameter("entity", $propalFilter->getEntitypropal());
            }

            if($propalFilter->getCommercial()){
                $qb->andWhere($qb->expr()->eq("ppl.commercialpropal", ":commercial"))
                    ->setParameter("commercial", $propalFilter->getCommercial());
            }

            if($propalFilter->getClient()){
                $qb->andWhere($qb->expr()->eq("clt.nomStr", ":client"))
                    ->setParameter("client", $propalFilter->getClient());
            }

            if($propalFilter->getType()){
                $qb->andWhere($qb->expr()->eq("ppl.type", ":type"))
                    ->setParameter("type", $propalFilter->getType());
            }
        }

        return $qb
            ->andWhere('stt.statutDevis != :val1')
            ->setParameter('val1', 'Validée')
            ->andWhere('stt.statutDevis != :val2')
            ->setParameter('val2', 'Annulée')
            ->andWhere('stt.statutDevis != :val3')
            ->setParameter('val3', 'Classée sans suite')
            ->andWhere('stt.statutDevis != :val4')
            ->setParameter('val4', 'Dossier créé')
            ->orderBy('ppl.daterelance', 'ASC')
            ->getQuery();
    }

    public function getContactPropal($idContact)
    {
        $qb = $this->createQueryBuilder("ppl");
        $qb->select('ppl.id idpropal,ent.structure as entite, stt.statutDevis statut,
        com.nomPrenom as commercial, clt.nomStr as client, ppl.nom as nom, ppl.prenom as prenom ,ppl.type as type, ppl.coutht as coutht, ppl.fiabilite as fiabilite, cpt.competence as formation');

        $qb->leftJoin("ppl.entitypropal", "ent")
            ->leftJoin("ppl.statutpropal", "stt")
            ->leftJoin("ppl.commercialpropal", "com")
            ->leftJoin("ppl.formation", "cpt")
            ->leftJoin("ppl.clientpropal", "clt");
                  
        return $qb
            ->orderBy('ppl.id', 'DESC')
            ->where($qb->expr()->eq('ppl.clientpropal',":idcontact"))
            ->setParameter("idcontact", $idContact)
            ->getQuery()
            ->execute();
    }
}