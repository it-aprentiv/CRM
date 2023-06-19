<?php
/**
 * Created by PhpStorm.
 * User: d.andoniraina
 * Date: 23/12/2019
 * Time: 15:38
 */

namespace App\Manager;


use App\Entity\Contact;
use App\Entity\CritFinOpca;
use App\ENtity\ContactType;
use App\Entity\Mail;
use App\Entity\Telephone;
use Doctrine\ORM\EntityManagerInterface;

class OpcaManager
{
    private $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
    /**
     * Gérer l'ajout et modification des contacts opca
     * @param $aContact
     * @param $aOpcaContactOtherData (Email, Telephone, Fax, Portable
     * @param $opca
     * @param $em
     */
    public function handleContact($aContact, $aOpcaContactOtherData, $opca){
        
        foreach($aContact as $key => $contact) {
            $aDataComplementaire = $aOpcaContactOtherData[$key];
            if(null != $contact->getId() && ''!= $contact->getId()) {
                $opcaContact = $this->em->getRepository(Contact::class)->findOneBy(array('id' => $contact->getId(), 'idType' => 15));
                $opcaContact->setOpca($opca);
                $opcaContact->setIdCivilite($contact->getIdCivilite());
                $opcaContact->setNom($contact->getNom());
                $opcaContact->setPrenom($contact->getPrenom());
                $opcaContact->setQualite($contact->getQualite());
                $opcaContact->setIdType($this->em->getRepository(ContactType::class)->find(15));
                $this->em->flush();
                //Mail
                $oMail = $this->em->getRepository(Mail::class)->findOneBy(array('idContact' => $contact->getId()));
                if($oMail) {
                    $oMail->setMail($aDataComplementaire['Email']);
                    $this->em->flush();
                } else {
                    if($aDataComplementaire['Email']) {
                        $newMail = new Mail();
                        $newMail->setMail($aDataComplementaire['Email']);
                        $newMail->setIdContact($contact);
                        $this->em->persist($newMail);
                        $this->em->flush();
                    }
                }
                //FAX
                $oFax = $this->em->getRepository(Telephone::class)->findOneBy(array('idContact' => $contact->getId() ,'idTypeTel' => 4));
                if($oFax) {
                    $oFax->setTel($aDataComplementaire['Fax']);
                    $this->em->flush();
                } else {
                    if($aDataComplementaire['Fax'] != ''){
                        $newFax = new Telephone();
                        $newFax->setTel($aDataComplementaire['Fax']);
                        $newFax->setIdTypeTel(4);
                        $newFax->setIdContact($contact->getId());
                        $newFax->setDateAdd(new \DateTime());
                        $this->em->persist($newFax);
                        $this->em->flush();
                    }
                }
                //TELEPHONE
                $oTel = $this->em->getRepository(Telephone::class)->findOneBy(array('idContact' => $contact->getId() ,'idTypeTel' => 1));
                if($oTel) {
                    $oTel->setTel($aDataComplementaire['Telephone']);
                    $this->em->flush();
                } else {
                    if($aDataComplementaire['Telephone'] != ''){
                        $newTel = new Telephone();
                        $newTel->setTel($aDataComplementaire['Telephone']);
                        $newTel->setIdTypeTel(1);
                        $newTel->setIdContact($contact->getId());
                        $newTel->setDateAdd(new \DateTime());
                        $this->em->persist($newTel);
                        $this->em->flush();
                    }
                }
                //PORTABLE
                $oPortable = $this->em->getRepository(Telephone::class)->findOneBy(array('idContact' => $contact->getId() ,'idTypeTel' => 3));
                if($oPortable) {
                    $oPortable->setTel($aDataComplementaire['Portable']);
                    $this->em->flush();
                } else {
                    if($aDataComplementaire['Portable'] != ''){
                        $newPortable = new Telephone();
                        $newPortable->setTel($aDataComplementaire['Portable']);
                        $newPortable->setIdTypeTel(3);
                        $newPortable->setIdContact($contact->getId());
                        $newPortable->setDateAdd(new \DateTime());
                        $this->em->persist($newPortable);
                        $this->em->flush();
                    }
                }

            } else {

                if('' != $contact->getNom() || '' != $contact->getPrenom() || '' != $contact->getQualite()) {
                    $opcaContact = new Contact();
                    $opcaContact->setOpca($opca);
                    $opcaContact->setIdCivilite($contact->getIdCivilite());
                    $opcaContact->setNom($contact->getNom());
                    $opcaContact->setPrenom($contact->getPrenom());
                    $opcaContact->setQualite($contact->getQualite());
                    $opcaContact->setIdType($this->em->getRepository(ContactType::class)->find(15));
                    $this->em->persist($opcaContact);
                    $this->em->flush();

                    if($aDataComplementaire['Email']) {
                        $newMail = new Mail();
                        $newMail->setMail($aDataComplementaire['Email']);
                        $newMail->setIdContact($opcaContact);
                        $this->em->persist($newMail);
                        $this->em->flush();
                    }
                    if($aDataComplementaire['Fax'] != ''){
                        $newFax = new Telephone();
                        $newFax->setTel($aDataComplementaire['Fax']);
                        $newFax->setIdTypeTel(4);
                        $newFax->setIdContact($opcaContact->getId());
                        $newFax->setDateAdd(new \DateTime());
                        $this->em->persist($newFax);
                        $this->em->flush();
                    }
                    if($aDataComplementaire['Telephone'] != ''){
                        $newTel = new Telephone();
                        $newTel->setTel($aDataComplementaire['Telephone']);
                        $newTel->setIdTypeTel(1);
                        $newTel->setIdContact($opcaContact->getId());
                        $newTel->setDateAdd(new \DateTime());
                        $this->em->persist($newTel);
                        $this->em->flush();
                    }
                    if($aDataComplementaire['Portable'] != ''){
                        $newPortable = new Telephone();
                        $newPortable->setTel($aDataComplementaire['Portable']);
                        $newPortable->setIdTypeTel(3);
                        $newPortable->setIdContact($opcaContact->getId());
                        $newPortable->setDateAdd(new \DateTime());
                        $this->em->persist($newPortable);
                        $this->em->flush();
                    }
                    $this->em->flush();
                }
            }
        }
    }

    /**
     * Gérer l'ajout et modification de critere de financement
     * @param $aCritere
     * @param $idOpca
     */
    public function handleCritereFinancement($aCritere, $idOpca){
        foreach($aCritere as $critere) {
            if('' != $critere['id']) {
                $oCritere = $this->em->getRepository(CritFinOpca::class)->find($critere['id']);
                $date = new \DateTime(date("Y-m-d H:i:s", strtotime($critere['date'])));
                $oCritere->setDate($date);
                $oCritere->setDispositif($critere['dispositif']);
                $oCritere->setCommentaire($critere['commentaire']);
            } else {
                if('' != $critere['date'] || '' != $critere['dispositif'] || '' != $critere['commentaire']) {
                    $oCritere = new CritFinOpca();
                    $oCritere->setIdOpca($idOpca);
                    $date = new \DateTime(date("Y-m-d H:i:s", strtotime($critere['date'])));
                    $oCritere->setDate($date);
                    $oCritere->setDispositif($critere['dispositif']);
                    $oCritere->setCommentaire($critere['commentaire']);
                    $this->em->persist($oCritere);
                }
            }
            $this->em->flush();
        }
    }
    
    /**
     * Suppression de tous les contacts OPCA
     * @param type $opca
     * @return type
     */
    public function removeContact($opcaId) {
        $this->em->remove($opcaId);
        
        return $this->em->flush();
    }
    
}