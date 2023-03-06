<?php

namespace App\Repository;

use App\Entity\Adresse;
use App\Entity\Contact;
use App\Entity\ContactType;
use App\Constants\ContactType as TypeContactConstant;
use App\Entity\Filter\ContactFilter;
use App\Entity\Filter\OpcaFilter;
use App\Entity\Mail;
use App\Entity\Structure;
use App\Entity\Telephone;
use App\Entity\Ville;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use App\Constants\ContactType as type;

/**
 * @method Contact|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contact|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contact[]    findAll()
 * @method Contact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactRepository extends ServiceEntityRepository
{

    const CONTACT_TYPE_OPCA = TypeContactConstant::TYPE_OPCA;
    
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contact::class);
    }

    /**
     * Recherche tous les contacts : clients / prospects
     *
     *
     */
    public function findContactsQuery(ContactFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, str.structure AS entite, typ.typeContact AS statut, cnt.nomStr AS societe,
                cnt.nom, cnt.prenom, 
                adr.adresse, vil.nomVille AS ville, tel.tel AS telephone,
                opc.nomStr AS opca,
                com.nomPrenom AS commercial,
                mail.mail AS email,
                cnt.origine AS origine,
                cnt.statutlead AS statutlead,
                adr.codePostal as codePostal,
                cnt.numero AS numero,
                cnt.adresseEmail AS adresseEmail,
                cnt.villeLead AS villeLead,
                cnt.statusClient As statusClient
            ');
        
        $qb
                ->leftJoin('cnt.structure', 'str')
                ->leftJoin('cnt.idType', 'typ')
                ->leftJoin('cnt.opca', 'opc')
                // Adresse contact
                ->leftJoin('App\Entity\Adresse', 'adr', 'WITH', 'adr.idContact = cnt.id')
                ->leftJoin('App\Entity\Ville', 'vil', 'WITH', 'vil.id = adr.idVille')
                ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
                ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
                // Collaborateur / Commercial
                ->leftJoin('cnt.commercial', 'com')
        ;
        
        
        if ($filter) {
            // Si type de contact : 1 (Client) ou 2 (prospect)
            if ($filter->getIdType()) {
                $contactTypeIds = $filter->getIdType();
                $type = $filter->getIdType();
                if ($type instanceof ContactType) {
                    $contactTypeIds = array($type->getId());
                }
                
                $qb->andWhere($qb->expr()->in('typ.id', $contactTypeIds));
            }
            
            if($filter->getStatusClient()) {
                if($filter->getStatusClient() == "Tous") {
                        
                    } else {
                $qb->andWhere('cnt.statusClient = :statusClient');
                $qb->setParameter('statusClient', $filter->getStatusClient());
                    }
            }else{
                $qb->andWhere('cnt.statusClient != :statusClient');
                $qb->setParameter('statusClient', "Classé définitif");
            }

            // Filtre par structure (entité)
            if ($filter->getStructure() && $filter->getStructure() instanceof Structure) {
                $qb->andWhere($qb->expr()->eq('cnt.structure', ':structure'));
                $qb->setParameter('structure', $filter->getStructure());
            }
            
            // Filtre par société
            if ($filter->getSociete()) {
                $qb->andWhere($qb->expr()->eq('cnt.nomStr', ':societe'));
                $qb->setParameter('societe', $filter->getSociete());
            }

            if($filter->getNom()){
                $qb->andWhere($qb->expr()->like('cnt.nom', ':nom'));
                $qb->setParameter('nom', "%".$filter->getNom()."%");
            }

            if($filter->getPrenom()){
                $qb->andWhere($qb->expr()->like('cnt.prenom', ':prenom'));
                $qb->setParameter('prenom', "%".$filter->getPrenom()."%");
            }
            
            if($filter->getEmail()){
                $qb->andWhere($qb->expr()->like('mail.mail', ':mail'));
                $qb->setParameter('mail', "%".$filter->getEmail()."%");
            }

            if($filter->getCommercial()){
                $qb->andWhere($qb->expr()->eq('cnt.commercial', ':com'));
                $qb->setParameter('com', $filter->getCommercial());
            }

            if($filter->getTelephone()){
                $qb->andWhere($qb->expr()->like('tel.tel', ":tel"));
                $qb->setParameter("tel", "%".$filter->getTelephone()."%");
            }

            if($filter->getAdresse()){
                $qb->andWhere($qb->expr()->like("adr.adresse",":adresse"));
                $qb->setParameter("adresse", $filter->getAdresse()."%");
            }

            //filtre code postal
            if ($filter->getCodePostal()) {
                $sCodePostal = $filter->getCodePostal();
                $qb->andWhere($qb->expr()->like('adr.codePostal', ':codePostal'));
                $qb->setParameter(':codePostal','%'.$sCodePostal.'%');
            }
            //filtre ville
            if ($filter->getVille()) {
                $sVille = $filter->getVille();
                $qb->andWhere($qb->expr()->like('vil.nomVille', ':ville'));
                $qb->setParameter(':ville','%'.$sVille.'%');
            }

            if($filter->getOpca()){
//                $opca = $this->findOneBy(["nomStr" => $filter->getOpca()]);
//                $qb->andWhere($qb->expr()->eq("cnt.opca", ":idopca"));
//                $qb->setParameter("idopca", $opca->getId());
                $qb->andWhere($qb->expr()->eq("opc.nomStr", ":opca"));
                $qb->setParameter("opca", $filter->getOpca());
            }

        }

       //$qb->groupBy('contact_id, entite, societe, statut,cnt.nom, cnt.prenom, adr.adresse, ville, telephone, commercial, opca ');
//        dd($qb
//           ->orderBy('cnt.nomStr', 'ASC')
//            ->getQuery());
        return $qb
                ->orderBy('cnt.id', 'DESC')
                ->getQuery()
        ;
    }

    /**
     * Recherche tous les contacts : clients / prospects
     *
     *
     */
    public function findContactsQuerys()
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, str.structure AS entite, typ.typeContact AS statut, cnt.nomStr AS societe,
                cnt.nom, cnt.prenom, 
                adr.adresse, vil.nomVille AS ville, tel.tel AS telephone,
                opc.nomStr AS opca,
                com.nomPrenom AS commercial,
                mail.mail AS email,
                cnt.origine AS origine,
                cnt.statutlead AS statutlead,
                adr.codePostal as codePostal,
                cnt.numero AS numero,
                cnt.adresseEmail AS adresseEmail,
                cnt.villeLead AS villeLead,
                typ.typeContact AS type, 
                cnt.dateAdd AS date
            ');
        
        $qb
                ->leftJoin('cnt.structure', 'str')
                ->leftJoin('cnt.idType', 'typ')
                ->leftJoin('cnt.opca', 'opc')
                // Adresse contact
                ->leftJoin('App\Entity\Adresse', 'adr', 'WITH', 'adr.idContact = cnt.id')
                ->leftJoin('App\Entity\Ville', 'vil', 'WITH', 'vil.id = adr.idVille')
                ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
                ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
                // Collaborateur / Commercial
                ->leftJoin('cnt.commercial', 'com')
        ;
        
        

       //$qb->groupBy('contact_id, entite, societe, statut,cnt.nom, cnt.prenom, adr.adresse, ville, telephone, commercial, opca ');
//        dd($qb
//           ->orderBy('cnt.nomStr', 'ASC')
//            ->getQuery());
        return $qb
                ->where("typ.typeContact != :typed")
                ->andWhere("typ.typeContact != :typed2")
                ->andWhere("typ.typeContact != :typed3")
                ->setParameter('typed', "STAGIAIRE")
                ->setParameter("typed2","OPCA")
                ->setParameter("typed3","FORMATEUR")
                ->orderBy('cnt.id', 'DESC')
                ->getQuery()
                ->execute()
        ;
    }
        /**
     * Recherche tous les contacts : clients / prospects
     *
     *
     */
    public function findAllLeads(ContactFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, str.structure AS entite, typ.typeContact AS statut, cnt.nomStr AS societe,
                cnt.nom, cnt.prenom, 
                adr.adresse, vil.nomVille AS ville, tel.tel AS telephone,
                opc.nomStr AS opca,
                com.nomPrenom AS commercial,
                mail.mail AS email,
                cnt.origine AS origine,
                cnt.statutlead AS statutlead,
                cnt.numero AS numero,
                cnt.adresseEmail AS adresseEmail,
                cnt.villeLead AS villeLead

            ');
        
        $qb
                ->leftJoin('cnt.structure', 'str')
                ->leftJoin('cnt.idType', 'typ')
                ->leftJoin('cnt.opca', 'opc')
                // Adresse contact
                ->leftJoin('App\Entity\Adresse', 'adr', 'WITH', 'adr.idContact = cnt.id')
                ->leftJoin('App\Entity\Ville', 'vil', 'WITH', 'vil.id = adr.idVille')
                ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
                ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
                // Collaborateur / Commercial
                ->leftJoin('cnt.commercial', 'com')
        ;
        
        
        if ($filter) {
            // Si type de contact : 1 (Client) ou 2 (prospect)
            if ($filter->getIdType()) {
                $contactTypeIds = $filter->getIdType();
                
                if ($contactTypeIds instanceof ContactType) {
                    $contactTypeIds = array($contactTypeIds->getId());
                }
                
                $qb->andWhere($qb->expr()->in('typ.id', $contactTypeIds));
            }
            
            // Filtre par structure (entité)
            if ($filter->getStructure() && $filter->getStructure() instanceof Structure) {
                $qb->andWhere($qb->expr()->eq('cnt.structure', ':structure'));
                $qb->setParameter('structure', $filter->getStructure());
            }
            
            // Filtre par société
            if ($filter->getSociete()) {
                $qb->andWhere($qb->expr()->eq('cnt.nomStr', ':societe'));
                $qb->setParameter('societe', $filter->getSociete());
            }

            if($filter->getNom()){
                $qb->andWhere($qb->expr()->like('cnt.nom', ':nom'));
                $qb->setParameter('nom', "%".$filter->getNom()."%");
            }

            if($filter->getPrenom()){
                $qb->andWhere($qb->expr()->like('cnt.prenom', ':prenom'));
                $qb->setParameter('prenom', "%".$filter->getPrenom()."%");
            }
            
            if($filter->getEmail()){
                $qb->andWhere($qb->expr()->like('mail.mail', ':mail'));
                $qb->setParameter('mail', "%".$filter->getEmail()."%");
            }

            if($filter->getCommercial()){
                $qb->andWhere($qb->expr()->eq('cnt.commercial', ':com'));
                $qb->setParameter('com', $filter->getCommercial());
            }

            if($filter->getTelephone()){
                $qb->andWhere($qb->expr()->like('tel.tel', ":tel"));
                $qb->setParameter("tel", "%".$filter->getTelephone()."%");
            }

            if($filter->getAdresse()){
                $qb->andWhere($qb->expr()->like("adr.adresse",":adresse"));
                $qb->setParameter("adresse", $filter->getAdresse()."%");
            }

            //filtre code postal
            if ($filter->getCodePostal()) {
                $sCodePostal = $filter->getCodePostal();
                $qb->andWhere($qb->expr()->like('adr.codePostal', ':codePostal'));
                $qb->setParameter(':codePostal','%'.$sCodePostal.'%');
            }
            //filtre ville
            if ($filter->getVille()) {
                $sVille = $filter->getVille();
                $qb->andWhere($qb->expr()->like('vil.nomVille', ':ville'));
                $qb->setParameter(':ville','%'.$sVille.'%');
            }

            if($filter->getOpca()){
//                $opca = $this->findOneBy(["nomStr" => $filter->getOpca()]);
//                $qb->andWhere($qb->expr()->eq("cnt.opca", ":idopca"));
//                $qb->setParameter("idopca", $opca->getId());
                $qb->andWhere($qb->expr()->eq("opc.nomStr", ":opca"));
                $qb->setParameter("opca", $filter->getOpca());
            }

            if($filter->getStatutlead()){
                $qb->andWhere($qb->expr()->eq('cnt.statutlead', ':statutlead'));
                $qb->setParameter('statutlead', $filter->getStatutlead());
            }
        }

       //$qb->groupBy('contact_id, entite, societe, statut,cnt.nom, cnt.prenom, adr.adresse, ville, telephone, commercial, opca ');
//        dd($qb
//           ->orderBy('cnt.nomStr', 'ASC')
//            ->getQuery());
        return $qb
                ->orderBy('cnt.id', 'DESC')
                ->getQuery()
        ;
    }

    /**
     * Recherche tous les contacts : clients / prospects
     *
     *
     */
    public function findContactsQueryClient(ContactFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, str.structure AS entite, typ.typeContact AS statut, cnt.nomStr AS societe,
                cnt.nom, cnt.prenom, 
                adr.adresse, vil.nomVille AS ville, tel.tel AS telephone,
                opc.nomStr AS opca,
                com.nomPrenom AS commercial
            ');
        
        $qb
                ->leftJoin('cnt.structure', 'str')
                ->leftJoin('cnt.idType', 'typ')
                ->leftJoin('cnt.opca', 'opc')
                // Adresse contact
                ->leftJoin('App\Entity\Adresse', 'adr', 'WITH', 'adr.idContact = cnt.id')
                ->leftJoin('App\Entity\Ville', 'vil', 'WITH', 'vil.id = adr.idVille')
                ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
                ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
                // Collaborateur / Commercial
                ->leftJoin('cnt.commercial', 'com')
        ;
        
        
        if ($filter) {
            // Si type de contact : 1 (Client) ou 2 (prospect)
            if ($filter->getIdType()) {
                $contactTypeIds = $filter->getIdType();
                
                if ($$contactTypeIds instanceof ContactType) {
                    $contactTypeIds = array($$contactTypeIds->getId());
                }
                
                $qb->andWhere($qb->expr()->in('typ.id', $contactTypeIds));
            }
            
            // Filtre par structure (entité)
            if ($filter->getStructure() && $filter->getStructure() instanceof Structure) {
                $qb->andWhere($qb->expr()->eq('cnt.structure', ':structure'));
                $qb->setParameter('structure', $filter->getStructure());
            }
            
            // Filtre par société
            if ($filter->getSociete()) {
                $qb->andWhere($qb->expr()->eq('cnt.nomStr', ':societe'));
                $qb->setParameter('societe', $filter->getSociete());
            }

            if($filter->getNom()){
                $qb->andWhere($qb->expr()->like('cnt.nom', ':nom'));
                $qb->setParameter('nom', "%".$filter->getNom()."%");
            }

            if($filter->getPrenom()){
                $qb->andWhere($qb->expr()->like('cnt.prenom', ':prenom'));
                $qb->setParameter('prenom', "%".$filter->getPrenom()."%");
            }
            
            if($filter->getEmail()){
                $qb->andWhere($qb->expr()->like('mail.mail', ':mail'));
                $qb->setParameter('mail', "%".$filter->getEmail()."%");
            }

            if($filter->getCommercial()){
                $qb->andWhere($qb->expr()->eq('cnt.commercial', ':com'));
                $qb->setParameter('com', $filter->getCommercial());
            }

            if($filter->getTelephone()){
                $qb->andWhere($qb->expr()->like('tel.tel', ":tel"));
                $qb->setParameter("tel", "%".$filter->getTelephone()."%");
            }

            if($filter->getAdresse()){
                $qb->andWhere($qb->expr()->like("adr.adresse",":adresse"));
                $qb->setParameter("adresse", $filter->getAdresse()."%");
            }

            //filtre code postal
            if ($filter->getCodePostal()) {
                $sCodePostal = $filter->getCodePostal();
                $qb->andWhere($qb->expr()->like('adr.codePostal', ':codePostal'));
                $qb->setParameter(':codePostal','%'.$sCodePostal.'%');
            }
            //filtre ville
            if ($filter->getVille()) {
                $sVille = $filter->getVille();
                $qb->andWhere($qb->expr()->like('vil.nomVille', ':ville'));
                $qb->setParameter(':ville','%'.$sVille.'%');
            }

            if($filter->getOpca()){
//                $opca = $this->findOneBy(["nomStr" => $filter->getOpca()]);
//                $qb->andWhere($qb->expr()->eq("cnt.opca", ":idopca"));
//                $qb->setParameter("idopca", $opca->getId());
                $qb->andWhere($qb->expr()->eq("opc.nomStr", ":opca"));
                $qb->setParameter("opca", $filter->getOpca());
            }

            if($filter->getStatutlead()){
                $qb->andWhere($qb->expr()->eq('cnt.statutlead', ':statutlead'));
                $qb->setParameter('statutlead', $filter->getStatutlead());
            }
            
        }

       //$qb->groupBy('contact_id, entite, societe, statut,cnt.nom, cnt.prenom, adr.adresse, ville, telephone, commercial, opca ');
//        dd($qb
//           ->orderBy('cnt.nomStr', 'ASC')
//            ->getQuery());
        return $qb
                ->andWhere('typ.typeContact = :val')
                ->setParameter('val', 'CLIENT')
                ->orderBy('cnt.id', 'DESC')
                ->getQuery()
        ;
    }

    /**
     * Recherche tous les contacts : clients / prospects
     *
     *
     */
    public function findContactsQueryProspect(ContactFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, str.structure AS entite, typ.typeContact AS statut, cnt.nomStr AS societe,
                cnt.nom, cnt.prenom, 
                adr.adresse, vil.nomVille AS ville, tel.tel AS telephone,
                opc.nomStr AS opca,
                com.nomPrenom AS commercial
            ');
        
        $qb
                ->leftJoin('cnt.structure', 'str')
                ->leftJoin('cnt.idType', 'typ')
                ->leftJoin('cnt.opca', 'opc')
                // Adresse contact
                ->leftJoin('App\Entity\Adresse', 'adr', 'WITH', 'adr.idContact = cnt.id')
                ->leftJoin('App\Entity\Ville', 'vil', 'WITH', 'vil.id = adr.idVille')
                ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
                ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
                // Collaborateur / Commercial
                ->leftJoin('cnt.commercial', 'com')
        ;
        
        
        if ($filter) {
            // Si type de contact : 1 (Client) ou 2 (prospect)
            if ($filter->getIdType()) {
                $contactTypeIds = $filter->getIdType();
                
                if ($contactTypeIds instanceof ContactType) {
                    $contactTypeIds = array($contactTypeIds->getId());
                }
                
                $qb->andWhere($qb->expr()->in('typ.id', $contactTypeIds));
            }
            
            // Filtre par structure (entité)
            if ($filter->getStructure() && $filter->getStructure() instanceof Structure) {
                $qb->andWhere($qb->expr()->eq('cnt.structure', ':structure'));
                $qb->setParameter('structure', $filter->getStructure());
            }
            
            // Filtre par société
            if ($filter->getSociete()) {
                $qb->andWhere($qb->expr()->eq('cnt.nomStr', ':societe'));
                $qb->setParameter('societe', $filter->getSociete());
            }

            if($filter->getNom()){
                $qb->andWhere($qb->expr()->like('cnt.nom', ':nom'));
                $qb->setParameter('nom', "%".$filter->getNom()."%");
            }

            if($filter->getPrenom()){
                $qb->andWhere($qb->expr()->like('cnt.prenom', ':prenom'));
                $qb->setParameter('prenom', "%".$filter->getPrenom()."%");
            }
            
            if($filter->getEmail()){
                $qb->andWhere($qb->expr()->like('mail.mail', ':mail'));
                $qb->setParameter('mail', "%".$filter->getEmail()."%");
            }

            if($filter->getCommercial()){
                $qb->andWhere($qb->expr()->eq('cnt.commercial', ':com'));
                $qb->setParameter('com', $filter->getCommercial());
            }

            if($filter->getTelephone()){
                $qb->andWhere($qb->expr()->like('tel.tel', ":tel"));
                $qb->setParameter("tel", "%".$filter->getTelephone()."%");
            }

            if($filter->getAdresse()){
                $qb->andWhere($qb->expr()->like("adr.adresse",":adresse"));
                $qb->setParameter("adresse", $filter->getAdresse()."%");
            }

            //filtre code postal
            if ($filter->getCodePostal()) {
                $sCodePostal = $filter->getCodePostal();
                $qb->andWhere($qb->expr()->like('adr.codePostal', ':codePostal'));
                $qb->setParameter(':codePostal','%'.$sCodePostal.'%');
            }
            //filtre ville
            if ($filter->getVille()) {
                $sVille = $filter->getVille();
                $qb->andWhere($qb->expr()->like('vil.nomVille', ':ville'));
                $qb->setParameter(':ville','%'.$sVille.'%');
            }

            if($filter->getOpca()){
//                $opca = $this->findOneBy(["nomStr" => $filter->getOpca()]);
//                $qb->andWhere($qb->expr()->eq("cnt.opca", ":idopca"));
//                $qb->setParameter("idopca", $opca->getId());
                $qb->andWhere($qb->expr()->eq("opc.nomStr", ":opca"));
                $qb->setParameter("opca", $filter->getOpca());
            }
            
        }

       //$qb->groupBy('contact_id, entite, societe, statut,cnt.nom, cnt.prenom, adr.adresse, ville, telephone, commercial, opca ');
//        dd($qb
//           ->orderBy('cnt.nomStr', 'ASC')
//            ->getQuery());
        return $qb
                ->andWhere('typ.typeContact = :val')
                ->setParameter('val', 'PROSPECT')
                ->orderBy('cnt.id', 'DESC')
                ->getQuery()
        ;
    }
    
    /**
     * Récupère la liste de societe
     *
     * @param string $searchTerm
     *
     * @return array
     */
    public function getSocietes(string $searchTerm)
    {
        $qb = $this->createQueryBuilder('cnt');
        // Pas d'entité societe :(
        return $qb
            ->select('DISTINCT cnt.nomStr AS societe')
            ->where($qb->expr()->like('cnt.nomStr', ':filter'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->orderBy('societe', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function getAllOpca($type = 3)
    {
        $qb = $this->createQueryBuilder('cnt');
        return $qb
            ->select('DISTINCT cnt.nomStr AS opca,cnt.id ')
            ->where($qb->expr()->eq('cnt.idType',':type'))
            ->setParameter('type', $type)
            ->orderBy('cnt.nomStr', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllOPCA()
    {
        $qb = $this->createQueryBuilder('cnt');
        return $qb
            //->select('DISTINCT cnt.nomStr AS opca ')
            ->where($qb->expr()->eq('cnt.idType',':type'))
            ->setParameter('type', self::CONTACT_TYPE_OPCA)
            ->orderBy('cnt.nomStr', 'ASC')            
        ;
    }

    /**
     * Liste des OPCA dans le menu OPCA
     * @param OpcaFilter|null $filter
     * @return \Doctrine\ORM\Query
     */
    public function findAllOPCALine(OpcaFilter $filter = null)
    {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, cnt.nomStr AS opca,
                adr.adresse,adr.compAdresse,adr.codePostal as code_postal,
                vil.nomVille AS ville, tel.tel AS telephone,
                url.url AS site_web,
                fx.tel AS fax,
                mail.mail AS email
            ');

        $qb
            ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
            ->leftJoin('App\Entity\Url', 'url', 'WITH', 'url.idContact = cnt.id')
            // Adresse contact
            ->leftJoin('App\Entity\Adresse', 'adr', 'WITH', 'adr.idContact = cnt.id')
            ->leftJoin('App\Entity\Ville', 'vil', 'WITH', 'vil.id = adr.idVille')
            ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
            ->leftJoin('App\Entity\Telephone', 'fx', 'WITH', 'fx.idContact = cnt.id AND fx.idTypeTel = 4')
        ;
        if ($filter) {
            //filtre OPCA
            if ($filter->getOpca()) {
                $sOpca = $filter->getOpca();
                $qb->where($qb->expr()->like('cnt.nomStr', ':opca'));
                $qb->setParameter(':opca','%'.$sOpca.'%');
            }
            //filtre telephone
            if ($filter->getTelephone()) {
                $sTelephone = $filter->getTelephone();
                $qb->andWhere($qb->expr()->like('tel.tel', ':telephone'));
                $qb->setParameter(':telephone','%'.$sTelephone.'%');
            }
            //filtre fax
            if ($filter->getFax()) {
                $sFax = $filter->getFax();
                $qb->andWhere($qb->expr()->like(' fx.tel', ':fax'));
                $qb->setParameter(':fax','%'.$sFax.'%');
            }
            //filtre email
            if ($filter->getEmail()) {
                $sEmail = $filter->getEmail();
                $qb->andWhere($qb->expr()->like('mail.mail', ':email'));
                $qb->setParameter(':email','%'.$sEmail.'%');
            }
            //filtre siteWeb
            if ($filter->getSiteWeb()) {
                $sSiteWeb = $filter->getSiteWeb();
                $qb->andWhere($qb->expr()->like('url.url', ':siteWeb'));
                $qb->setParameter(':siteWeb','%'.$sSiteWeb.'%');
            }
            //filtre Adresse
            if ($filter->getAdresse()) {
                $sAdresse = $filter->getAdresse();
                $qb->andWhere($qb->expr()->like('adr.adresse', ':adresse'));
                $qb->setParameter(':adresse','%'.$sAdresse.'%');
            }
            //filtre Complément d'adresse
            if ($filter->getCompAdresse()) {
                $sCompAdresse = $filter->getCompAdresse();
                $qb->andWhere($qb->expr()->like('adr.compAdresse', ':compAdresse'));
                $qb->setParameter(':compAdresse','%'.$sCompAdresse.'%');
            }
            //filtre code postal
            if ($filter->getCodePostal()) {
                $sCodePostal = $filter->getCodePostal();
                $qb->andWhere($qb->expr()->like('adr.codePostal', ':codePostal'));
                $qb->setParameter(':codePostal','%'.$sCodePostal.'%');
            }
            //filtre ville
            if ($filter->getVille()) {
                $sVille = $filter->getVille();
                $qb->andWhere($qb->expr()->like('vil.nomVille', ':ville'));
                $qb->setParameter(':ville','%'.$sVille.'%');
            }
        }

        return $qb
            ->andWhere($qb->expr()->eq('cnt.idType',self::CONTACT_TYPE_OPCA))
            ->orderBy('cnt.id', 'DESC')
            ->getQuery()
            ;
    }

    /**
     * @param $idOpca
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     * Recuperer un opca
     */
    public function findOneOPCA($idOpca) {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contactId, cnt.nomStr AS opca,
                adr.id AS numeroAdresse, adr.adresse,adr.compAdresse,adr.codePostal as codePostal,
                s.id AS secteurId,
                s.secteur,
                vil.id AS idVille,
                vil.nomVille AS ville, tel.tel AS telephone,
                url.url AS siteWeb,
                fx.tel AS fax,
                mail.mail AS email
            ');

        $qb
            ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
            ->leftJoin('App\Entity\Url', 'url', 'WITH', 'url.idContact = cnt.id')
            ->leftJoin('App\Entity\SecteurActivite', 's', 'WITH', 's.id = cnt.idSecteur')
            // Adresse contact
            ->leftJoin('App\Entity\Adresse', 'adr', 'WITH', 'adr.idContact = cnt.id')
            ->leftJoin('App\Entity\Ville', 'vil', 'WITH', 'vil.id = adr.idVille')
            ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
            ->leftJoin('App\Entity\Telephone', 'fx', 'WITH', 'fx.idContact = cnt.id AND fx.idTypeTel = 4')
        ;
        return $qb
            ->where($qb->expr()->eq('cnt.id',':id'))
            ->setParameter(':id',$idOpca)
            ->getQuery()
            ->getOneOrNullResult()
            //->getResult()
            ;
    }

    /**
     * Recuperer les contacts d'un opca
     * @param $idOpca
     * @return mixed
     */
    public function findContactsOPCA($idOpca) {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, cnt.idSecteur, cnt.nom, cnt.prenom, cnt.idCivilite,cnt.qualite,
                civ.civilite,
                port.tel AS portable,
                tel.tel AS telephone,
                fx.tel AS fax,
                mail.mail AS email
            ');
        $qb
            ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
            ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id')
            ->leftJoin('App\Entity\Telephone', 'port', 'WITH', 'port.idContact = cnt.id AND tel.idTypeTel = 3')
            ->leftJoin('App\Entity\Telephone', 'fx', 'WITH', 'fx.idContact = cnt.id AND fx.idTypeTel = 4')
            ->leftJoin('App\Entity\Civilite', 'civ', 'WITH', 'civ.id = cnt.idCivilite')
        ;
        return $qb
            ->where($qb->expr()->eq('cnt.opca',':id'))
            ->setParameter(':id',$idOpca)
            ->groupBy('cnt.id','cnt.idSecteur','cnt.nom','cnt.prenom')
            ->orderBy('cnt.nom', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            //temp: get only one result
            ->getResult()
            ;
    }

    /**
     * recuperer les contacts liées
     * @param $idContact
     * @return mixed
     */
    public function findContactLiee($idContact) {
        $qb = $this->createQueryBuilder('cnt');

        $qb->select('
                cnt.id AS contact_id, cnt.qualite, cnt.interlocuteur, cnt.nom, cnt.prenom, cnt.idCivilite,
                civ.civilite,
                tel.tel,
                port.tel as portable,
                fx.tel AS fax,
                mail.mail AS email
            ');
        $qb
            ->leftJoin('App\Entity\Mail', 'mail', 'WITH', 'mail.idContact = cnt.id')
            ->leftJoin('App\Entity\Telephone', 'port', 'WITH', 'port.idContact = cnt.id AND port.idTypeTel = 3')
            ->leftJoin('App\Entity\Telephone', 'fx', 'WITH', 'fx.idContact = cnt.id AND fx.idTypeTel = 4')
            ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', 'tel.idContact = cnt.id AND tel.idTypeTel = 1')
            ->leftJoin('App\Entity\Civilite', 'civ', 'WITH', 'civ.id = cnt.idCivilite')
        ;
        return $qb
            ->where($qb->expr()->eq('cnt.contactLiee',':id'))
            ->setParameter(':id',$idContact)
            ->groupBy('cnt.id','cnt.nom','cnt.prenom','tel.tel','mail.mail','fx.tel','port.tel')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findOtherContactAdresse($idcontact)
    {
        $qb = $this->createQueryBuilder('cnt');
        $qb->select('adr.id, adr.adresse')
            ->innerJoin('App\Entity\Adresse',"adr",'WITH',"adr.idContact = cnt.id")
            ->where($qb->expr()->eq('cnt.id',':idcontact'))
            ->setParameter('idcontact', $idcontact)
            ->getQuery()
            ->getResult()
        ;

    }

    public function findAllOPCATNS()
    {
        $qb = $this->createQueryBuilder('cnt');
        return $qb
            ->andWhere($qb->expr()->eq('cnt.idType',':type'))
            ->andWhere($qb->expr()->like('cnt.nomStr',':name'))
            ->orWhere($qb->expr()->like('cnt.nomStr', ':name2'))
            ->orWhere($qb->expr()->like('cnt.nomStr', ':name3'))
            ->setParameter('type', 3)
            ->setParameter('name', '%AGEFICE%')
            ->setParameter('name2', '%FIFPL%')
            ->setParameter('name3', '%FAFREGIONAL%')
            ->orderBy('cnt.nomStr', 'ASC')
            ;
    }

    /**
     * rechercher les contacts avec un filtre type
     *
     * @param $aType
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function searchByType($iType, $sQuery = '', $iLimit = 50, $iStructure = null){
        $qb = $this->createQueryBuilder('c');
        $qb->select('c.id, c.nomStr, s.structure')
            ->andWhere($qb->expr()->eq('c.idType',':type'))
            ->setParameter('type', $iType)
            ->leftJoin(Structure::class, 's', 'WITH', 'c.structure = s.id');

        $oNotStrucDel = $qb->expr()->orX($qb->expr()->eq('s.deletedAt', ':false'), $qb->expr()->isNull('s.deletedAt'));
        $qb->andWhere($oNotStrucDel)
            ->setParameter(':false', false);

        if ($sQuery) {
            $sQuery = '%'.$sQuery. '%';
            $qb->andWhere($qb->expr()->like('c.nomStr', ':query'))
                ->setParameter('query', $sQuery);
        }

        if ($iStructure) {
            $qb->andWhere($qb->expr()->eq('c.structure', ':structure'))
                ->setParameter(':structure', $iStructure);
        }

        $qb->setMaxResults($iLimit);

        return $qb->getQuery()->getResult();
    }

    /**
     * Pour autocompletion
     * Récupère la liste des clients
     * @param string $searchTerm
     * @return array
     */
    public function getClient(string $searchTerm)
    {
        $qb = $this->createQueryBuilder('cnt');

        return $qb
            ->select('DISTINCT cnt.nomStr AS client, cnt.id')
            ->where($qb->expr()->like('cnt.nomStr', ':filter'))
            ->andWhere($qb->expr()->eq('cnt.idType', ':type'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->setParameter('type',2)
            ->orderBy('client', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * Pour autocompletion
     * Récupère la liste des clients
     * @param string $searchTerm
     * @return array
     */
    public function getOpca(string $searchTerm)
    {
        $qb = $this->createQueryBuilder('cnt');

        return $qb
            ->select('DISTINCT cnt.id, cnt.nomStr AS opca')
            ->where($qb->expr()->like('cnt.nomStr', ':filter'))
            ->andWhere($qb->expr()->eq('cnt.idType', ':type'))
            ->setParameter('filter', '%'.$searchTerm.'%')
            ->setParameter('type', 3)
            ->orderBy('opca', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }
    /**
     * Retourne liste société
     */
    public function getQuerySocietes() {
       $qb = $this->createQueryBuilder('cnt');

        return $qb
            ->where('cnt.nomStr != :value')
            ->andWhere($qb->expr()->eq('cnt.idType',':type'))
            ->andWhere($qb->expr()->isNotNull('cnt.nomStr'))
            ->setParameter('value', "")
            ->setParameter('type',1)
            ->orderBy('cnt.nomStr', 'ASC');
    }

    public function getQueryFormateur() {
        $qb = $this->createQueryBuilder('c')
                ->where('c.idType = :contactType')
                ->setParameter('contactType', type::TYPE_FORMATEUR)
                ->orderBy('c.nom', 'ASC');

        return $qb;
    }
    public function findAllClient()
    {
        $qb = $this->createQueryBuilder('cnt');
        return $qb
            //->select('DISTINCT cnt.nomStr AS opca ')
            ->where($qb->expr()->eq('cnt.idType',':type'))
            ->setParameter('type', type::TYPE_CLIENT)
            ->orderBy('cnt.nomStr', 'ASC')
            ;
    }

    /**
     * @return Contact[]
     */
    public function findAllSociete()
    {
        $qb = $this->createQueryBuilder('cnt');
        return $qb
            //->select('DISTINCT cnt.nomStr AS opca ')
            ->where($qb->expr()->eq('cnt.idType',':type'))
            ->setParameter('type', 2)
            ->orWhere($qb->expr()->eq('cnt.idType',':type'))
            ->setParameter('type', 1)
            ->orderBy('cnt.nomStr', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findContactPrintData($id)
    {
        $qb = $this->findPersonalDataBuilder('cnt');
        return $qb->select("cnt.id id,cnt.nomStr nomSociete,cnt.nom nomInterlocuteur,cnt.prenom prenom,
        cnt.interlocuteur interlocuteur,str.id type,cnt.noSiret siret,
        civ.civilite civilite,
        tel.tel as telephone,
        port.tel as portable")
        ->where($qb->expr()->eq("cnt.id",":id"))
        ->setParameter("id", $id)
        ->getQuery()
            ->getOneOrNullResult();
    }

    private function findPersonalDataBuilder($sAlias, $aWith = []){
        $qb = $this->createQueryBuilder($sAlias);

        $qb->leftJoin('App\Entity\Civilite', 'civ', 'WITH', "$sAlias.idCivilite = civ.id")
                ->leftJoin('App\Entity\Structure', 'str', 'WITH', "$sAlias.structure = str.id" )
                ->leftJoin('App\Entity\Telephone', 'tel', 'WITH', "tel.idContact = $sAlias.id AND tel.idTypeTel = " . Telephone::TELEPHONE)
                ->leftJoin('App\Entity\Telephone', 'port', 'WITH', "port.idContact = $sAlias.id AND port.idTypeTel = " . Telephone::PORTABLE);

        if (in_array('adresse', $aWith)) {
            $qb->leftJoin(Adresse::class, 'adr', 'WITH', "$sAlias.id = adr.idContact")
                ->leftJoin(Ville::class, 'vil', 'WITH', "adr.idVille = vil.id");
        }
        if (in_array('fax', $aWith)) {
            $qb->leftJoin(Telephone::class, 'faxTel', 'WITH', "faxTel.idContact = $sAlias.id AND faxTel.idTypeTel = " . Telephone::FAX);
        }
        if (in_array('mail', $aWith)) {
            $qb->leftJoin(Mail::class, 'mail', 'WITH', "$sAlias.id = mail.idContact");
        }

        return $qb;
    }

    public function findContactDataCivil($id){
        $qb = $this->findPersonalDataBuilder('cnt', ['adresse', 'fax', 'mail']);
        return $qb->select("cnt.id id,cnt.nomStr nomSociete,cnt.nom nom,cnt.prenom prenom,
        cnt.interlocuteur interlocuteur,str.id type,cnt.noSiret siret, cnt.qualite,
        civ.civilite civilite,
        tel.tel as telephone,
        faxTel.tel as fax,
        adr.adresse,
        adr.codePostal as codepostal,
        vil.nomVille as ville,
        mail.mail as email,
        port.tel as portable")
            ->where($qb->expr()->eq("cnt.id",":id"))
            ->setParameter("id", $id)
            ->getQuery()
            ->setMaxResults(1) // APR-156
            ->getOneOrNullResult();
    }

    public function findContactLieePrintData($id)
    {
        $qb = $this->findPersonalDataBuilder('cnt');
        return $qb->select("cnt.nomStr nomSociete,cnt.nom nomInterlocuteur,cnt.prenom,cnt.interlocuteur,civ.civilite civilite, tel.tel as telephone, port.tel as portable")
            ->where($qb->expr()->eq("cnt.contactLiee",":id"))
            ->setParameter("id", $id)
            ->getQuery()
            ->getResult();
    }

    public function findContactStagiaireData($idformation)
    {
        $qb = $this->createQueryBuilder('cnt');
        return $qb->select("cnt.nomStr nomSociete,cnt.nom nomInterlocuteur,cnt.prenom,cnt.interlocuteur,civ.civilite civilite")
            ->where($qb->expr()->eq("stg.dossier",":id"))
            ->leftJoin('App\Entity\Civilite', 'civ', 'WITH', 'cnt.idCivilite = civ.id')
            ->leftJoin('App\Entity\FormationDossierStagiaire','stg','WITH','stg.stagiaire = cnt.id')
            ->setParameter("id", $idformation)
            ->getQuery()
            ->getResult();
    }

    public function getStagiairesData($idFormation)
    {
        $qb = $this->createQueryBuilder('cnt');
        return $qb->select("cnt.nomStr nomSociete,cnt.nom nomInterlocuteur,cnt.prenom,cnt.interlocuteur,civ.civilite civilite")
            ->leftJoin('App\Entity\Civilite', 'civ', 'WITH', 'cnt.idCivilite = civ.id')
            ->leftJoin('App\Entity\Dossier','stg','WITH','stg = cnt.idFormationLiee')
            ->andWhere($qb->expr()->eq('cnt.idFormationLiee', ':formationLiee'))
            ->setParameter("formationLiee", $idFormation)
            ->getQuery()
            ->getResult();
    }

    /**
     * rechercher les contacts avec un filtre type
     *
     * @param $aType
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function searchByOPCAType($sQuery = '', $iLimit = 50){
        $qb = $this->createQueryBuilder('c');
        $qb->select('DISTINCT c.nomStr AS opca,c.id ')
            ->where($qb->expr()->eq('c.idType',':type'))
            ->setParameter('type', self::CONTACT_TYPE_OPCA);

        if ($sQuery) {
            $sQuery = '%'.$sQuery. '%';
            $qb->andWhere($qb->expr()->like('c.nomStr', ':query'))
                ->setParameter('query', $sQuery);
        }

        $qb->setMaxResults($iLimit);


        return $qb->getQuery()->getResult();
    }
    
    
    /**
     * APR-210 : Détecter les contacts liés avec des OPCO supprimé
     * qui engendre une erreur 500
     */
    public function getClientsWithBadOPCOLink() {
       $conn = $this->_em->getConnection();
       
       $sQuery = "
           SELECT con.id, con.id_type, con.id_opca, con.nom_str, col.nom_prenom AS collaborateur 
            FROM `1_contact` con
            LEFT JOIN `1_collaborateur` col ON col.id = con.id_commercial
           WHERE (id_type IN (1,2) ) 
           AND ((id_opca <> 0 AND id_opca IS NOT NULL) AND id_opca NOT IN ( SELECT id FROM 1_contact )) 
           ORDER BY `con`.`nom_str` ASC";
       
       $stmt = $conn->prepare($sQuery);
       $stmt->execute();
       
       return $stmt->fetchAll();
    }
}
