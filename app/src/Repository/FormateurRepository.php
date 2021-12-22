<?php


namespace App\Repository;


use App\Entity\Contact;
use App\Entity\Filter\FormateurFilter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class FormateurRepository extends ServiceEntityRepository
{
    /**
     * FormateurRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contact::class);
    }

    public function findFormatteur(FormateurFilter $filter)
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
            cnt.id,
            cnt.nomStr,
            cnt.nom,
            cnt.prenom,
            cpt.competence,
            stat.statut,
            cnt.idStatutFmt AS statutFmt
        ');

        $qb
            ->leftJoin('App\Entity\FormateurCompetence','cformateur', 'WITH', 'cnt.id = cformateur.idContact')
            ->leftJoin('App\Entity\FormateurStatut', 'stat', 'WITH', 'cnt.idStatutFmt = stat.id')
            ->leftJoin('App\Entity\Competence', 'cpt', 'WITH', 'cpt.id = cformateur.idCompetence')
        ;

        if ($filter->getNomStr()) {

            $sNomStr = $filter->getNomStr();
            $qb->where($qb->expr()->like('cnt.nomStr', ':nomStr'));
            $qb->setParameter(':nomStr', '%'.$sNomStr.'%');
        }
        if ($filter->getNom()) {

            $sNom = $filter->getNom();
            $qb->andWhere($qb->expr()->like('cnt.nom', ':nom'));
            $qb->setParameter(':nom', '%'.$sNom.'%');
        }
        if ($filter->getPrenom()) {

            $sPrenom = $filter->getPrenom();
            $qb->andWhere($qb->expr()->like('cnt.prenom', ':prenom'));
            $qb->setParameter(':prenom', '%'.$sPrenom.'%');
        }
        if ($filter->getCompetence()) {

            $sCompetence = $filter->getCompetence();
            $qb->andWhere($qb->expr()->like('cpt.competence', ':competence'));
            $qb->setParameter(':competence', '%'.$sCompetence.'%');
        }
        if ($filter->getStatut()) {

            $sStatut = $filter->getStatut();
            $qb->andWhere($qb->expr()->like('stat.statut', ':statut'));
            $qb->setParameter(':statut', '%'.$sStatut->statut.'%');
        }

        return $qb
            ->andWhere($qb->expr()->eq('cnt.idType', '6'))
            ->orderBy('cnt.id', 'DESC')
            ->getQuery()
            ->getArrayResult()
            ;
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findFormateurById($id)
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
            cnt.id,
            cnt.nomStr,
            cnt.nsecuritesocial,
            cnt.idStatutFmt,
            cnt.pieceIdentite,
            cnt.valididtePieceIdentite as validite,
            cnt.nom, cnt.prenom,
            cnt.noSiret,
            cpt.competence,
            stat.statut,
            url.url as siteweb,
            adresse.id as numero,
            adresse.adresse,
            adresse.codePostal,
            vil.nomVille as ville,
            phone.tel as telephone,
            mobile.tel as portable,
            fx.tel as fax,
            courrier.mail as email            
        ');

        $qb
            ->leftJoin('App\Entity\FormateurCompetence','cformateur', 'WITH', 'cnt.id = cformateur.idContact')
            ->leftJoin('App\Entity\FormateurStatut', 'stat', 'WITH', 'cnt.idStatutFmt = stat.id')
            ->leftJoin('App\Entity\Competence', 'cpt', 'WITH', 'cpt.id = cformateur.idCompetence')
            ->leftJoin('App\Entity\Url', 'url', 'WITH', 'cnt.id = url.idContact')
            ->leftJoin('App\Entity\Adresse', 'adresse', 'WITH', 'cnt.id = adresse.idContact')
            ->leftJoin('App\Entity\Mail', 'courrier', 'WITH', 'cnt.id = courrier.idContact')
            ->leftJoin('App\Entity\Telephone', 'phone', 'WITH', 'cnt.id = phone.idContact AND phone.idTypeTel=1')
            ->leftJoin('App\Entity\Telephone', 'mobile', 'WITH', 'cnt.id = mobile.idContact AND mobile.idTypeTel=3')
            ->leftJoin('App\Entity\Telephone', 'fx', 'WITH', 'cnt.id = fx.idContact AND fx.idTypeTel=3')
            ->leftJoin('App\Entity\Ville','vil', 'WITH', 'adresse.idVille = vil.id')
        ;

        return $qb
            ->where($qb->expr()->eq('cnt.id', ':id'))
            ->setParameter(':id', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}