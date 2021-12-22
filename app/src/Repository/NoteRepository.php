<?php


namespace App\Repository;


use App\Entity\Contact;
use App\Entity\ContactNote;
use App\Entity\DossierNote;
use App\Entity\Filter\NoteFilter;
use App\Entity\NoteActionStatut;
use App\Entity\FormationDossierNote;
use App\Entity\Note;
use App\Constants\Note as NoteConstant;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Collections\Criteria;
use function Doctrine\ORM\QueryBuilder;

class NoteRepository extends ServiceEntityRepository
{
    /**
     * NoteRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Note::class);
    }

    public function findAllNote(NoteFilter $filter, $aUsersMenu = null)
    {
        $qb = $this->createQueryBuilder('note');

        $fUserIfNull = function ($field){
            return "IF((note.idUserAdd IS NULL), ubis.$field, u.$field)";
        };

        $qb->select('
            note.idTable, 
            nnt.nomtable AS nomTable,
            note.id AS id,
            cnt.nomStr AS contact,
            note.nomCon,
            note.dateAdd AS date,
            note.texteNote AS noteCommentaire,'
            . $fUserIfNull('nomutilisateur') . ' as createurNom,'
            . $fUserIfNull('username') . ' AS createurPrenom,
            collabo1.nomutilisateur AS idUserAction,
            collabo2.idutilisateur AS rappelleur,
            noteAction.nomAction AS action ,
            note.dateAction AS dateAction,
            noteActionStatut.actionStatut AS statutAction,
            ct.nomStr AS client,
            cnt.nom AS nom,
            cnt.prenom AS prenom,
            ld.societe AS societe,
            ld.nom AS nomLead,
            ld.prenom AS prenomLead
        ');

        $qb
            ->leftJoin('App\Entity\NoteNomTable', 'nnt', 'WITH', 'note.id = nnt.id_note')
            ->leftJoin('App\Entity\Contact','cnt', 'WITH', 'note.idTable = cnt.id')
            ->leftJoin('App\Entity\FormationDossier', 'dossier', 'WITH', 'note.idTable = dossier.id')
            ->leftJoin('App\Entity\Contact','ct', 'WITH', 'IDENTITY(dossier.idClient) = ct.id')
            ->leftJoin('App\Entity\Lead','ld', 'WITH', 'note.idTable = ld.id')
//            ->leftJoin('App\Entity\Facture', 'facture', 'WITH', 'facture.idStructure = cnt.id')
            ->leftJoin('App\Entity\NoteAction', 'noteAction', 'WITH', 'noteAction.id = note.idAction')
            ->leftJoin('App\Entity\NoteActionStatut', 'noteActionStatut', 'WITH', 'noteActionStatut.id = note.idActionStatut')
//            ->leftJoin(Contact::class, 'cl', 'WITH', 'note.idUserAdd = cl.id')
            ->leftJoin('App\Entity\Utilisateur', 'collabo1', 'WITH', 'collabo1 = note.idUserAction')
            ->leftJoin('App\Entity\Utilisateur', 'collabo2', 'WITH', 'collabo2.idutilisateur = note.rappelleur')
            ->leftJoin('App\Entity\Utilisateur', 'u','WITH', 'u.idutilisateur = note.idUserAdd')
            ->leftJoin(Utilisateur::class, 'ubis','WITH', 'ubis.idutilisateur = note.idUserAction')
        ;

        if($filter) {

            if ($filter->getNomTable()) {

                $nomTable = $filter->getNomTable();
                $oExpr = $qb->expr()->like('nnt.nomtable', ':nomTable');

                $qb->where($oExpr);
                $qb->setParameter(':nomTable',$nomTable);
            }

            if ($filter->getNomStr()) {

                $sNomStr = '%' . $filter->getNomStr() . '%';
                $oEqNomTable = $qb->expr()->eq('nnt.nomtable', ':contactTable');
                // filtrer sur le nom contact pour les nomTables contact
                $oFirstExp = $qb->expr()->andX($oEqNomTable, $qb->expr()->like('cnt.nomStr', ':nomStr'));
                // other filter
                $oSecondExpr = $qb->expr()->like('note.nomCon', ':nomStr');
                $qb->where($qb->expr()->orX($oFirstExp, $oSecondExpr));
                $qb->setParameters([
                    ':nomStr' => $sNomStr,
                    ':contactTable' => ContactNote::NOM_TABLE
                ]);
            }

            $dateadd = $filter->getDateAdd();
            if ($dateadd instanceof \DateTime) {

                $sDateAdd = $dateadd->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('DATE_FORMAT(note.dateAdd, \'%Y-%m-%d\')', ':dateadd'));
                $qb->setParameter(':dateadd', $sDateAdd);
            }

            if ($filter->getNomutilisateur()) {

                $sNomutilisateur = $filter->getNomutilisateur();
                $qb->andWhere($qb->expr()->like('u.nomutilisateur', ':nomutilisateur'));
                $qb->setParameter(':nomutilisateur', '%'.$sNomutilisateur.'%');
            }

            if ($filter->getUsername()) {

                $sUserName = $filter->getUsername();
                $qb->andWhere($qb->expr()->like('u.username', ':username'));
                $qb->setParameter(':username', '%'.$sUserName.'%');
            }

            if ($filter->getTexteNote()) {

                $sTexteNote = $filter->getTexteNote();
                $qb->andWhere($qb->expr()->like('note.texteNote', ':texteNote'));
                $qb->setParameter(':texteNote', '%'.$sTexteNote.'%');
            }
            if ($filter->getNomAction()) {

                $sNomAction = $filter->getNomAction();
                $qb->andWhere($qb->expr()->eq('note.idAction', ':nomAction'));
                $qb->setParameter(':nomAction', $sNomAction);
            }

            // LE 27/01 JAI ENFIN REUSSI A METTRE EN PLACE LE CHAMP 'STATUT' DANS LE FILTRE POUR LES NOTES. EN Y INSERANT CETTE METHODE. 
            if ($filter->getActionStatut()) {

                $statutAction = $filter->getActionStatut();
                $qb->andWhere($qb->expr()->eq('note.idActionStatut', ':statutAction'));
                $qb->setParameter(':statutAction', $statutAction);
            }

            $dateaction = $filter->getDateAction();
            if ($dateaction instanceof \DateTime) {

                $sDateAction = $dateaction->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('DATE_FORMAT(note.dateAction, \'%Y-%m-%d\')', ':dateAction'));
                $qb->setParameter(':dateAction', $sDateAction);
            }
            /*
            if ($filter->getDateAction()) {
                $sDateCreation = date_create_from_format('d/m/Y', $filter->getDateAction());
                $qb->andWhere($qb->expr()->eq($qb->expr()->substring('note.dateAction',1,10), ':dateAction'));
                $qb->setParameter(':dateAction', $sDateCreation->format('Y-m-d'));
            } */
            if ($filter->getRappelleur()) {
                $rappelleur = $filter->getRappelleur();
                $qb->andWhere($qb->expr()->eq('collabo2.idutilisateur', ':rappeleur'));
                $qb->setParameter(':rappeleur', $rappelleur);
            }
            
            // APR-141 : Filtre par utilisateur / auteur
            if ($filter->getAuthor()) {
                $oExpAuthor = $qb->expr()->orX(
                    $qb->expr()->eq('u', ':user'),
                    $qb->expr()->andX($qb->expr()->isNull('note.idUserAdd'), $qb->expr()->eq('ubis', ':userBis'))
                );
                $qb->andWhere($oExpAuthor);
                $qb->setParameter(':user', $filter->getAuthor());
                $qb->setParameter(':userBis', $filter->getAuthor());
            }
        }

        // vérification accessibilité au menu
        if (is_array($aUsersMenu)) {
            $aMenuAccessByNomTable = [];
            foreach (NoteConstant::MENU_NOM_TABLE as $nomTable => $menu){
                if (array_search($menu, $aUsersMenu)) {
                    $aMenuAccessByNomTable[] = $nomTable;
                }
            }

            $qb->andWhere($qb->expr()->in('nnt.nomtable', ':menuaccess'))
                ->setParameter(':menuaccess', $aMenuAccessByNomTable);
        }

        $qb->andWhere($qb->expr()->isNotNull('note.idTable'));

        return $qb
            ->orderBy('note.id', 'DESC')
            ->addCriteria(self::notDeletedCriteria('note'))
            ->getQuery()
            ;
    }

    public function findAllNotePortail(NoteFilter $filter, $aUsersMenu = null, $val = "A faire")
    {
        $qb = $this->createQueryBuilder('note');

        $fUserIfNull = function ($field){
            return "IF((note.idUserAdd IS NULL), ubis.$field, u.$field)";
        };

        $qb->select('
            note.idTable, 
            nnt.nomtable AS nomTable,
            note.id AS id,
            cnt.nomStr AS contact,
            note.nomCon,
            note.dateAdd AS date,
            note.texteNote AS noteCommentaire,'
            . $fUserIfNull('nomutilisateur') . ' as createurNom,'
            . $fUserIfNull('username') . ' AS createurPrenom,
            collabo1.nomPrenom AS responsable,
            collabo2.idutilisateur AS rappelleur,
            noteAction.nomAction AS action,
            note.dateAction AS dateAction,
            noteActionStatut.actionStatut AS statutAction,
            ct.nomStr AS client,
            cnt.nom AS nom,
            cnt.prenom AS prenom,
            ld.societe AS societe,
            ld.nom AS nomLead,
            ld.prenom AS prenomLead
        ');

        $qb
            ->leftJoin('App\Entity\NoteNomTable', 'nnt', 'WITH', 'note.id = nnt.id_note')
            ->leftJoin('App\Entity\Contact','cnt', 'WITH', 'note.idTable = cnt.id')
            ->leftJoin('App\Entity\FormationDossier', 'dossier', 'WITH', 'note.idTable = dossier.id')
            ->leftJoin('App\Entity\Contact','ct', 'WITH', 'IDENTITY(dossier.idClient) = ct.id')
            ->leftJoin('App\Entity\Lead','ld', 'WITH', 'note.idTable = ld.id')
            //s->leftJoin('App\Entity\Contact', 'cli', 'WITH', 'cli.id = idClient')
//            ->leftJoin('App\Entity\Facture', 'facture', 'WITH', 'facture.idStructure = cnt.id')
            ->leftJoin('App\Entity\NoteAction', 'noteAction', 'WITH', 'noteAction.id = note.idAction')
            ->leftJoin('App\Entity\NoteActionStatut', 'noteActionStatut', 'WITH', 'noteActionStatut.id = note.idActionStatut')
//            ->leftJoin(Contact::class, 'cl', 'WITH', 'note.idUserAdd = cl.id')
            ->leftJoin('App\Entity\Collaborateur', 'collabo1', 'WITH', 'collabo1.id = note.idUserAction')
            ->leftJoin('App\Entity\Utilisateur', 'collabo2', 'WITH', 'collabo2.idutilisateur = note.rappelleur')
            ->leftJoin('App\Entity\Utilisateur', 'u','WITH', 'u.idutilisateur = note.idUserAdd')
            ->leftJoin(Utilisateur::class, 'ubis','WITH', 'ubis.idutilisateur = note.idUserAction')
        ;

        if($filter) {

            if ($filter->getNomTable()) {

                $nomTable = $filter->getNomTable();
                $oExpr = $qb->expr()->like('nnt.nomtable', ':nomTable');

                $qb->where($oExpr);
                $qb->setParameter(':nomTable',$nomTable);
            }

            if ($filter->getNomStr()) {

                $sNomStr = '%' . $filter->getNomStr() . '%';
                $oEqNomTable = $qb->expr()->eq('nnt.nomtable', ':contactTable');
                // filtrer sur le nom contact pour les nomTables contact
                $oFirstExp = $qb->expr()->andX($oEqNomTable, $qb->expr()->like('cnt.nomStr', ':nomStr'));
                // other filter
                $oSecondExpr = $qb->expr()->like('note.nomCon', ':nomStr');
                $qb->where($qb->expr()->orX($oFirstExp, $oSecondExpr));
                $qb->setParameters([
                    ':nomStr' => $sNomStr,
                    ':contactTable' => ContactNote::NOM_TABLE
                ]);
            }

            $dateadd = $filter->getDateAdd();
            if ($dateadd instanceof \DateTime) {

                $sDateAdd = $dateadd->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('DATE_FORMAT(note.dateAdd, \'%Y-%m-%d\')', ':dateadd'));
                $qb->setParameter(':dateadd', $sDateAdd);
            }

            if ($filter->getNomutilisateur()) {

                $sNomutilisateur = $filter->getNomutilisateur();
                $qb->andWhere($qb->expr()->like('u.nomutilisateur', ':nomutilisateur'));
                $qb->setParameter(':nomutilisateur', '%'.$sNomutilisateur.'%');
            }

            if ($filter->getUsername()) {

                $sUserName = $filter->getUsername();
                $qb->andWhere($qb->expr()->like('u.username', ':username'));
                $qb->setParameter(':username', '%'.$sUserName.'%');
            }

            if ($filter->getTexteNote()) {

                $sTexteNote = $filter->getTexteNote();
                $qb->andWhere($qb->expr()->like('note.texteNote', ':texteNote'));
                $qb->setParameter(':texteNote', '%'.$sTexteNote.'%');
            }
            if ($filter->getNomAction()) {

                $sNomAction = $filter->getNomAction();
                $qb->andWhere($qb->expr()->eq('note.idAction', ':nomAction'));
                $qb->setParameter(':nomAction', $sNomAction);
            }

            // LE 27/01 JAI ENFIN REUSSI A METTRE EN PLACE LE CHAMP 'STATUT' DANS LE FILTRE POUR LES NOTES. EN Y INSERANT CETTE METHODE. 
            if ($filter->getActionStatut()) {

                $statutAction = $filter->getActionStatut();
                $qb->andWhere($qb->expr()->eq('note.idActionStatut', ':statutAction'));
                $qb->setParameter(':statutAction', $statutAction);
            }

            $dateaction = $filter->getDateAction();
            if ($dateaction instanceof \DateTime) {

                $sDateAction = $dateaction->format('Y-m-d');
                $qb->andWhere($qb->expr()->eq('note.dateAction', ':dateAction'));
                $qb->setParameter(':dateAction', $sDateAction);
            }

            if ($filter->getRappelleur()) {
                $rappelleur = $filter->getRappelleur();
                $qb->andWhere($qb->expr()->eq('collabo2.idutilisateur', ':rappeleur'));
                $qb->setParameter(':rappeleur', $rappelleur);
            }
            
            // APR-141 : Filtre par utilisateur / auteur
            if ($filter->getAuthor()) {
                $oExpAuthor = $qb->expr()->orX(
                    $qb->expr()->eq('u', ':user'),
                    $qb->expr()->andX($qb->expr()->isNull('note.idUserAdd'), $qb->expr()->eq('ubis', ':userBis'))
                );
                $qb->andWhere($oExpAuthor);
                $qb->setParameter(':user', $filter->getAuthor());
                $qb->setParameter(':userBis', $filter->getAuthor());
            }
        }

        // vérification accessibilité au menu
        if (is_array($aUsersMenu)) {
            $aMenuAccessByNomTable = [];
            foreach (NoteConstant::MENU_NOM_TABLE as $nomTable => $menu){
                if (array_search($menu, $aUsersMenu)) {
                    $aMenuAccessByNomTable[] = $nomTable;
                }
            }

            $qb->andWhere($qb->expr()->in('nnt.nomtable', ':menuaccess'))
                ->setParameter(':menuaccess', $aMenuAccessByNomTable);
        }

        $qb->andWhere($qb->expr()->isNotNull('note.idTable'));

        return $qb
            ->andWhere('noteActionStatut.actionStatut = :val')
            ->setParameter('val', $val)
            ->orderBy('dateAction', 'ASC')
            ->addCriteria(self::notDeletedCriteria('note'))
            ->getQuery()
            ;
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     * Recuperer une serie de note par idTable
     */
    public function findNoteByIdTable($id)
    {
        $qb = $this->createQueryBuilder('note');

        $qb->select('
            note.idTable,
            nnt.nomtable AS nomTable,
            note.id AS id,
            cnt.nomStr AS contact, 
            note.nomCon,
            note.dateAdd AS date,
            note.texteNote AS noteCommentaire,
            u.nomutilisateur createurNom,
            u.username AS createurPrenom,
            collabo1.nomPrenom AS responsable,
            collabo2.nomPrenom AS rappelleur,
            noteAction.nomAction AS action ,
            note.dateAction AS dateAction,
            noteActionStatut.actionStatut AS statutAction
        ');

        $qb
            ->leftJoin('App\Entity\NoteNomTable', 'nnt', 'WITH', 'note.id = nnt.id_note')
            ->leftJoin('App\Entity\Contact','cnt', 'WITH', 'note.idTable = cnt.id AND note.idUserAdd = cnt.id')
            ->leftJoin('App\Entity\FormationDossier', 'dossier', 'WITH', 'dossier.idClient = cnt.id')
            ->leftJoin('App\Entity\Facture', 'facture', 'WITH', 'facture.idStructure = cnt.id')
            ->leftJoin('App\Entity\NoteAction', 'noteAction', 'WITH', 'noteAction.id = note.idAction')
            ->leftJoin('App\Entity\NoteActionStatut', 'noteActionStatut', 'WITH', 'noteActionStatut.id = note.idActionStatut')
            ->leftJoin('App\Entity\Collaborateur', 'collabo1', 'WITH', 'collabo1.id = note.idUserAction')
            ->leftJoin('App\Entity\Collaborateur', 'collabo2', 'WITH', 'collabo2.id = note.rappelleur')
            ->leftJoin('App\Entity\Utilisateur', 'u','WITH', 'u.idutilisateur = note.idUserAction')
        ;
        return $qb
            ->where($qb->expr()->eq('note.id', ':id'))
            ->setParameter(':id', $id)
            ->addCriteria(self::notDeletedCriteria('note'))
            ->getQuery()
            ->getOneOrNullResult()
            ;

    }

    public static function notDeletedCriteria($sAlias = ''){
        $sIsNull = $sAlias === '' ? 'deletedAt' : "$sAlias.deletedAt";
        return Criteria::create()
            ->andWhere(Criteria::expr()->isNull($sIsNull));
    }

    public static function orderiddesc()
    {

        return Criteria::create()
            ->orderBy(['id'=>'ASC']);
    }

    public function getNotes($id){
        $qb = $this->createQueryBuilder('n')
            ->select('n');

        $qb->where($qb->expr()->eq('n.idTable', ':id'))
            ->setParameter('id', $id)
            ->addCriteria(self::notDeletedCriteria());

        return $qb->getQuery()->getResult();
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getNoteFormateur($id)
    {
        $tableName = '1_contact_formateur';
        $qb = $this->createQueryBuilder('note');

        $qb->select('
            note.id,
            note.dateAdd as dateAjout,
            note.texteNote as commentaire,
            u.id as iduseraction,
            note.dateAction as dateRelance
        ');

        $qb
            ->leftJoin('note.idUserAction', 'u')
            ->leftJoin('App\Entity\NoteAction', 'noteAct', 'WITH', 'noteAct.id = note.idAction')
            ->leftJoin('App\Entity\Contact', 'cnt', 'WITH', 'cnt.id = noteAct.idUserAdd')
        ;

        return $qb
            ->where($qb->expr()->eq('note.idTable', ':id'))
            ->setParameter(':id', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
    
    public function getBadNotes() {
        $conn = $this->_em->getConnection();
        
    }
}