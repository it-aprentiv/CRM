<?php
/**
 * Created by PhpStorm.
 * User: ony.naja
 * Date: 27/12/2019
 * Time: 15:47
 */

namespace App\Manager;


use App\Constants\Date;
use App\Constants\Contact as ContactConst;
use App\Entity\Adresse;
use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\ContactNote;
use App\Entity\Dossier;
use App\Entity\FormationDossier;
use App\Entity\Mail;
use App\Entity\SecteurActivite;
use App\Entity\SocieteLiee;
use App\Entity\Telephone;
use App\Entity\Url;
use App\Service\WordService;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpWord\Style\Image;

class ContactManager
{

    private $entitymanager;

    CONST TARGET_FILE = "DocPrint/Contact";
    const TYPE_TELEPHONE = 1;
    const TYPE_FAX = 4;
    const TYPE_PORTABLE = 3;


    /**
     * ContactManager constructor.
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->entitymanager = $em;
    }

    /**
     * Fonction appeler par le controller pour créer un document word bon de commande
     *
     * @param $contact
     *
     * @return \Exception|string|null
     */
    public function createDocBDC($contact)
    {
        $fichier = null;
        $data = $this->preparebdcdata($contact);
        switch ($data["contact"]["type"]){
            case 1:
                $fichier =  $this->createDocBDCAprentiv($data);
                break;
            case 2:
                $fichier = $this->createDocBDCProform($data);
                break;
            default:
                $fichier = $this->createDocBDCAprentiv($data);
                break;

        }

        return $fichier;
    }

    /**
     * Fonction pour créer le document bon de commande pour les contact de type apprentive et prospere.
     * Pour les type prospere, aucun document bon de commande n'est créer dans l'ancien application donc par défaut
     * on met celle du type aprentiv
     * @param $data
     * @return \Exception|string
     */
    private function createDocBDCAprentiv($data)
    {
        $docword = new WordService();
        $docword->createdocword()
            ->createheaderlogobdc();
        $this->addcontentbdc($docword, $data);
        $fichier = $docword->createfooterlogobdc()
            ->saveDocument("Bon_De_Commande_".$data["contact"]["id"].".docx");

        return $fichier;
    }

    /**
     * Fonction pour créer le document bon de commande pour les contact de type proform
     *
     * @param array $data
     *
     * @return \Exception|string
     */
    private function createDocBDCProform($data)
    {
        $docword = new WordService();
        $docword->createdocword()
            ->createheaderlogobdcproform();
        $this->addcontentbdcproform($docword, $data);
        $fichier = $docword->createfooterlogobdcproform()
            ->saveDocument("Bon_De_Commande_".$data["contact"]["id"].".docx","Contact");

        return $fichier;
    }

    /**
     * Fonction pour la crétion de document convention
     *
     * @param $templatehtml
     * @param $contact
     *
     * @return \Exception|string
     */
    public function createDocConvention($templatehtml,$contact, FormationDossier $dossier = null)
    {
        $data = $this->preparebdcdata($contact);
        
        // APR-209 : Dossier > Fiche > Document Convention papier > Bug sur le choix de la structure (entité)
        if ($dossier) {
            $data['dossier'] = $dossier;
            $data['contact']['type'] = $dossier->getIdStructure() ? $dossier->getIdStructure()->getId() : 0;
        }
        
        $docword = new WordService();
        $docword->createdocword()
            ->createheaderlogoconvention($data);
        $this->addcontentconvention($templatehtml,$docword,$data);

        return $docword->saveDocument("Convention_".$data["contact"]["id"].".docx","Contact");
    }

    public function createDocRDV(Contact $contact)
    {
        $secteuractivite = $contact->getIdSecteur() ? $this->entitymanager->getRepository(SecteurActivite::class)->find($contact->getIdSecteur()) : null;
        $commercial = $this->entitymanager->getRepository(Collaborateur::class)->find($contact->getCommercial());
        $contactlieedata = $this->entitymanager->getRepository(Contact::class)->findBy(["contactLiee" => $contact->getId()]);
        //$contactadressedata = $this->entitymanager->getRepository(Adresse::class)->findBy(["idContact" => $contact->getId()]);
        $contactadressedata = $this->entitymanager->getRepository(Adresse::class)->findAdressesContactPrintData($contact->getId());
        //dd($contactadressedata);
        $opcacontact = $contact->getOpca();
        $telephone = $this->entitymanager->getRepository(Telephone::class)->findBy(["idContact" => $contact->getId()]);
        $email = $this->entitymanager->getRepository(Mail::class)->findOneBy(["idContact" => $contact->getId()]);
        // APR-169 : Fiche client / propect > Editer un document > RDV > Bugs sur les dates notes
        $othercomment = $this->entitymanager->getRepository(ContactNote::class)->findBy(
            ["idTableContact" => $contact->getId()],
            ['dateAdd' => 'DESC']
        );
        $dossiers = $this->entitymanager->getRepository(FormationDossier::class)->getAllContactDossier($contact->getId());
        
        $sctact = !is_null($secteuractivite) ? $secteuractivite->getSecteur() : "";
        $cmr = !is_null($commercial) ? $commercial->getNomPrenom() : "";
        $opca = !is_null($opcacontact) ? $opcacontact->getNomStr() : "";
        $represantant = $contact->getNom(). " ".$contact->getPrenom();
        if($contact->getInterlocuteur() !== ContactConst::IS_INTERLOCUTEUR){
            foreach($contactlieedata as $ctn){
                if($ctn->getInterlocuteur() === ContactConst::IS_INTERLOCUTEUR){
                    $represantant = $ctn->getNom(). " ".$ctn->getPrenom();
                }
            }
        }
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('DocPrint/Templates/templateRDV.xlsx');
        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->getCell("G1")->setValue(date("d/m/Y"));
        $worksheet->getCell("G2")->setValue(date("H:i"));

        $worksheet->getCell("C5")->setValue($contact->getNomStr());
        $worksheet->getCell("C6")->setValue($contact->getNoSiret());
        $worksheet->getCell("C7")->setValue($contact->getNoNaf());
        $worksheet->getCell("C8")->setValue($contact->getEffectif());
        $worksheet->getCell("C9")->setValue($sctact);
        $worksheet->getCell("B13")->setValue($represantant);
        $worksheet->getCell("C18")->setValue($cmr);
        $worksheet->getCell("F17")->setValue($opca);
        $worksheet->getCell("H17")->setValue($contact->getNoAdherent());
        $i = 5;
       /* foreach($contactadressedata as $adresse){
            $worksheet->getCell("F".$i)->setValue($adresse["adresse"]. " ".$adresse["ville"]." ".$adresse["codePostal"]);
            $i++;
        }*/
        // N'afficher qu'une seule adresse et la mettre en 2 lignes
        if ($contactadressedata) {
            $adresse = current($contactadressedata);
            $j = $i + 1;
            $worksheet->getCell("F".$i)->setValue($adresse["adresse"]);
            $worksheet->getCell("F".$j)->setValue($adresse["codePostal"]." ".$adresse["ville"]);
        }
        if(!is_null($email)){
            $worksheet->getCell("F9")->setValue($email->getMail());
        }
        foreach($telephone as $phone){
            if($phone->getidTypeTel() == self::TYPE_TELEPHONE){
                $worksheet->getCell("F7")->setValue($phone->getTel());
            }
            elseif($phone->getidTypeTel() == self::TYPE_FAX){
                $worksheet->getCell("H7")->setValue($phone->getTel());
            }
            elseif($phone->getidTypeTel() == self::TYPE_PORTABLE){
                $worksheet->getCell("F8")->setValue($phone->getTel());
            }
        }
        if($contact->getInterlocuteur() !== ContactConst::IS_INTERLOCUTEUR){
            foreach($contactlieedata as $ctn){
                if($ctn->getInterlocuteur() === ContactConst::IS_INTERLOCUTEUR){
                    $telephone = $this->entitymanager->getRepository(Telephone::class)->findBy(["idContact" => $ctn->getId()]);
                    $email = $this->entitymanager->getRepository(Mail::class)->findOneBy(["idContact" => $ctn->getId()]);
                    if(!is_null($email) && $email != "@"){
                        $worksheet->getCell("F9")->setValue($email->getMail());
                    }

                    foreach($telephone as $phone){
                        if($phone->getidTypeTel() == self::TYPE_TELEPHONE){
                            $worksheet->getCell("F7")->setValue($phone->getTel());
                            $worksheet->getCell("D13")->setValue($phone->getTel());
                        }
                        elseif($phone->getidTypeTel() == self::TYPE_FAX){
                            $worksheet->getCell("H7")->setValue($phone->getTel());
                        }
                        elseif($phone->getidTypeTel() == self::TYPE_PORTABLE){
                            $worksheet->getCell("F8")->setValue($phone->getTel());
                        }
                    }
                }
            }
        }

        if(count($othercomment) > 0){
            $debut = 22;
            foreach($othercomment as $key => $comment){
                $row = $debut + $key;
                
                $dateCreation = $comment->getDateAdd();
                $spreadsheet->getActiveSheet()->insertNewRowBefore($row,1);
                $worksheet->mergeCells("C".$row.":H".$row);
                $worksheet->getCell("B".$row)->setValue($dateCreation->format('d/m/Y'));
                $worksheet->getCell("C".$row)->setValue($comment->getTexteNote());
                $i++;
            }
        }

        if(count($dossiers) > 0){
            $debut=37;
            foreach($dossiers as $key => $dossier){
                $row = $debut + $key;
                $spreadsheet->getActiveSheet()->insertNewRowBefore($row,1);
                $worksheet->mergeCells("D".$row.":G".$row);
                $worksheet->getCell("B".$row)->setValue($dossier["structure"]);
                $worksheet->getCell("C".$row)->setValue($dossier["dateEnvoi"]);
                $worksheet->getCell("D".$row)->setValue($dossier["nom"]);
                $worksheet->getCell("E".$row)->setValue($dossier["totalHt"]);
            }
        }
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $rep = self::TARGET_FILE."/".date("Y-m-d");
        if(!is_dir($rep)){
            mkdir($rep);
        }
        $nomfile = "RDV_Contact".$contact->getId().".xlsx";
        $data["document"] = $rep."/".$nomfile;
        $pathfichier = $data["document"];
        $writer->save($data["document"]);

        return $pathfichier;
    }
    /**
     * Fonction pour créer les documents ordre de mission
     *
     * @param $templatehtml
     * @param Contact $contact
     *
     * @return \Exception|string
     */
    public function createDocOMI($templatehtml, Contact $contact)
    {
        $docword = new WordService();
        $text1 = "La réception du présent ordre de mission signé par le formateur vaut contrat de prestation.";
        $data = $this->preparebdcdata($contact);
        $docword->createdocword()
            ->createheaderlogoomi();
        $this->addcontentomi($docword,$data);
        $docword->addcontenttemplate($templatehtml,$docword);
        $docword->addfootersigned()
            ->createfooterlogoomi($text1);

        return $docword->saveDocument("Order_De_Mission_".$data["contact"]["id"].".docx","Contact");
    }

    /**
     * Fonction pour ajouter les contenus dans un document bon de commande pour les aprentiv et prospere
     * @param $docword
     * @param array $data
     * @return mixed
     */
    private function addcontentbdc($docword, array $data)
    {
        $sections = $docword->getsectiondoc();
        $sectionStyle = $sections->getStyle();
        $sectionStyle->setMarginRight(400);
        $sectionStyle->setMarginLeft(400);
        $sectionStyle->setMarginTop(400);

        $sections->addText('BON DE COMMANDE FORMATIONS ', array('name'=> 'arial','size' => 19),array('bold' => true,'align' => 'center'));
        $sections->addTextBreak(0);
        $sections->addText('Analyse des besoins ', array('name'=> 'arial','size' => 16),array('bold' => true,'align' => 'center'));

        $table = $sections->addTable('myTable');

        $datefr = Date::MOIS_FR;

        $table->addRow();
        $table->addCell(600)->addText('Client :', array('name'=> 'arial','size' => 10,'underline'=>'single'));
        $table->addCell(3000)->addText($data['contact']['nomSociete']."	", array('name'=> 'arial','size' => 10,'bold' => true));
        $table->addCell(1200)->addText('Interlocuteur : ', array('name'=> 'arial','size' => 10,'underline'=>'single'));
        $table->addCell(3000)->addText($data['contact']["interlocuteur"], array('name'=> 'arial','size' => 10,'bold' => true));
        $table->addCell(800)->addText('Date : ', array('name'=> 'arial','size' => 10,'underline'=>'single'));
        $table->addCell(2000)->addText(date("d")." ".$datefr[date("m") - 1]." ".date("Y"), array('name'=> 'arial','size' => 10,'bold' => true));

        $table->addRow();
        $table->addCell(1200)->addText('Adresse :', array('name'=> 'arial','size' => 10,'underline'=>'single'));
        $table->addCell(3000)->addText($data["adresse"]["adresse"], array('name'=> 'arial','size' => 10,'bold' => true));
        $table->addCell(1800)->addText('Code postal : ', array('name'=> 'arial','size' => 10,'underline'=>'single'));
        $table->addCell(3000)->addText($data["adresse"]["codePostal"], array('name'=> 'arial','size' => 10,'bold' => true));
        $table->addCell(800)->addText('Ville : ', array('name'=> 'arial','size' => 10,'underline'=>'single'));
        $table->addCell(2000)->addText($data['adresse']['ville'], array('name'=> 'arial','size' => 10,'bold' => true));

        $sections->addTextBreak(-1);

        $styleTable = array('borderSize' => 6, 'borderColor' => '999999');
        $cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center');
        $cellRowContinue = array('vMerge' => 'continue');
        $cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
        $cellHCentered = array('align' => 'center');
        $cellVCentered = array('valign' => 'center');
        $docword->getdocwordphp()->addTableStyle('ColspanRowspan2', $styleTable);
        $table = $sections->addTable('ColspanRowspan2');

        $table->addRow();
        $cell1 = $table->addCell(900, $cellRowSpan);
        $textrun1 = $cell1->addTextRun($cellHCentered);
        $textrun1->addText('Priorité');
        $cell11 = $table->addCell(2500, $cellRowSpan);
        $textrun11 = $cell11->addTextRun($cellHCentered);
        $textrun11->addText('Compétence envisagée');
        $cell111 = $table->addCell(1400, $cellRowSpan);
        $textrun11 = $cell111->addTextRun($cellHCentered);
        $textrun11->addText('Durée Prévisionnelle');
        $cell2 = $table->addCell(1600, $cellColSpan);
        $textrun2 = $cell2->addTextRun($cellHCentered);
        $textrun2->addText('Environnement informatique');
        $table->addCell(700, $cellRowSpan)->addText('Inter', null, $cellHCentered);
        $table->addCell(700, $cellRowSpan)->addText('Intra', null, $cellHCentered);
        $table->addCell(2400, $cellRowSpan)->addText('Stagiaire(s)', null, $cellHCentered);
        $table->addCell(1500, $cellRowSpan)->addText('TARIF HT/jour', null, $cellHCentered);
        $table->addCell(3700, $cellRowSpan)->addText('Objectifs particuliers / Commentaires', null, $cellHCentered);

        $table->addRow();
        $table->addCell(null, $cellRowContinue);
        $table->addCell(null, $cellRowContinue);
        $table->addCell(null, $cellRowContinue);
        $table->addCell(800, $cellVCentered)->addText('PC', null, $cellHCentered);
        $table->addCell(800, $cellVCentered)->addText('MAC', null, $cellHCentered);
        $table->addCell(null, $cellRowContinue);
        $table->addCell(null, $cellRowContinue);
        $table->addCell(null, $cellRowContinue);
        $table->addCell(null, $cellRowContinue);
        $table->addCell(null, $cellRowContinue);
        ;

        for($i = 1; $i <= 4; $i++) {
            $table->addRow();
            $table->addCell(900)->addTextBreak(2);
            $table->addCell(2500)->addTextBreak(2);
            $table->addCell(1400)->addTextBreak(2);
            $table->addCell(900)->addTextBreak(2);
            $table->addCell(900)->addTextBreak(2);
            $table->addCell(700)->addTextBreak(2);
            $table->addCell(700)->addTextBreak(2);
            $table->addCell(2400)->addTextBreak(2);
            $table->addCell(1500)->addTextBreak(2);
            $table->addCell(3700)->addTextBreak(2);

        }

        $sections->addTextBreak(0);
        $sections->addText('Sous réserve de la prise en charge de votre organisme collecteur. ', array('name'=> 'arial','size' => 8));
        $sections->addTextBreak(0);
        $sections->addText('Les tarifs indiqués sur ce bon de commande sont valables 6 mois à compter de la date de signature.', array('name'=> 'arial','size' => 8));
        $sections->addTextBreak(0);
        $sections->addText('Tout report de date de stage doit nous parvenir minimum 3 jours ouvrables avant la date prévue.', array('name'=> 'arial','size' => 8));
        $sections->addTextBreak(0);
        $sections->addText('     CACHET / SIGNATURE', array('name'=> 'arial','size' => 9));

        return $docword;
    }

    /**
     * Fonction pour ajouter les contenus dans un document bon de commande pour les proform
     * @param $docword
     * @param array $data
     */
    private function addcontentbdcproform($docword, array $data)
    {
        $sections = $docword->getsectiondoc();
        $sections->addTextBreak(4);

        $sections->addText(htmlspecialchars("\t\t\t\t\t\t").'BON DE COMMANDE ', array('name'=> 'arial','size' => 18,'bold' => true),array('align' => 'center'));
        $sections->addTextBreak(3);
        $sections->addText(htmlspecialchars("\t\t\t\t\t\t\t\t\t").$data['contact']['nomSociete'], array('name'=> 'arial','size' => 10,'bold' => true));
        $sections->addTextBreak(0);
        $sections->addText(htmlspecialchars("\t\t\t\t\t\t\t\t\t").$data["adresse"]["adresse"], array('name'=> 'arial','size' => 10,'bold' => true));
        $sections->addTextBreak(0);
        $sections->addText(htmlspecialchars("\t\t\t\t\t\t\t\t\t").$data["adresse"]["codePostal"]." ".$data["adresse"]['ville'], array('name'=> 'arial','size' => 10,'bold' => true));
        $sections->addTextBreak(1);

        $styleTable = array('borderSize' => 3, 'borderColor' => '999999');
        $cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center');
        $cellRowSpan2 = array('borderSize' => 3, 'borderColor' => '999999','vMerge' => 'restart', 'valign' => 'center');
        $cellHCentered = array('align' => 'center');
        $docword->getdocwordphp()->addTableStyle('myTable', $styleTable);
        $table = $sections->addTable('myTable');
        $table->addRow();

        $table->addCell(2000, $cellRowSpan)->addTextRun($cellHCentered)->addText('Type de stage', array('name'=> 'arial','size' => 8,'bold' => true));
        $table->addCell(900, $cellRowSpan)->addTextRun($cellHCentered)->addText('Durée totale', array('name'=> 'arial','size' => 8,'bold' => true));
        $table->addCell(1200, $cellRowSpan)->addTextRun($cellHCentered)->addText('Durée Par Session', array('name'=> 'arial','size' => 8,'bold' => true));
        $table->addCell(2000, $cellRowSpan)->addTextRun($cellHCentered)->addText('Formateur', array('name'=> 'arial','size' => 8,'bold' => true));
        $table->addCell(2000, $cellRowSpan)->addTextRun($cellHCentered)->addText('Lieu de stage', array('name'=> 'arial','size' => 8,'bold' => true));
        $table->addCell(800, $cellRowSpan)->addTextRun($cellHCentered)->addText('Inter Intra', array('name'=> 'arial','size' => 8,'bold' => true));
        $table->addCell(2000, $cellRowSpan)->addTextRun($cellHCentered)->addText('Nom des stagiaires', array('name'=> 'arial','size' => 8,'bold' => true));
        $table->addCell(1000, $cellRowSpan)->addTextRun($cellHCentered)->addText('Coût', array('name'=> 'arial','size' => 8,'bold' => true));

        for($i = 1; $i <= 4; $i++) {

            $table->addRow();
            $table->addCell(2000)->addTextBreak(1);
            $table->addCell(900)->addTextBreak(1);
            $table->addCell(1200)->addTextBreak(1);
            $table->addCell(2000)->addTextBreak(1);
            $table->addCell(2000)->addTextBreak(1);
            $table->addCell(800)->addTextBreak(1);
            $table->addCell(2000)->addTextBreak(1);
            $table->addCell(1000)->addTextBreak(1);

        }

        $sections->addTextBreak(1);
        $sections->addText("Objects particuliers :", array('name'=> 'arial','size' => 10,'bold' => true));
        $sections->addTextBreak(0);
        $table = $sections->addTable('myTable2');
        $table->addRow();
        $table->addCell(10900,$styleTable)->addTextBreak(2);

        $table = $sections->addTable('myTable3');
        $table->addRow();
        $table->addCell(3000)->addText('');
        $table->addCell(2000,$cellRowSpan2)->addTextRun($cellHCentered)->addText('LANGUES &#9744;', array('name'=> 'arial','size' => 10,'bold' => true));
        $table->addCell(2000,$cellRowSpan2)->addTextRun($cellHCentered)->addText('MAC &#9744;', array('name'=> 'arial','size' => 10,'bold' => true));
        $table->addCell(2000,$cellRowSpan2)->addTextRun($cellHCentered)->addText('PC &#9744;', array('name'=> 'arial','size' => 10,'bold' => true));

        $table = $sections->addTable('myTable4');
        $table->addRow();
        $table->addCell(10900,$cellRowSpan2)->addText('Nombre de sessions par semaine : '.htmlspecialchars("\t\t\t\t")."Début de stage prévu le :", array('name'=> 'arial','size' => 10));
        $table->addRow();
        $table->addCell(10900,$cellRowSpan2)->addText('Budget pris en charge par la société : ', array('name'=> 'arial','size' => 10));
        $table->addRow();
        $table->addCell(10900,$cellRowSpan2)->addText("Montant de l'accord pris en charge par votre organisme collecteur :", array('name'=> 'arial','size' => 10));

        $sections->addTextBreak(0);
        $sections->addText("Sous réserve de la prise en charge de votre organisme collecteur.", array('name'=> 'arial','size' => 10,'italic' => true),array('align' => 'center'));
        $sections->addTextBreak(0);
        $sections->addText("Tout report de date doit nous parvenir minimum 3 jours ouvrables avant la date prévue.", array('name'=> 'arial','size' => 10));

        $sections->addTextBreak(2);
        $sections->addText("CACHET".htmlspecialchars("\t\t\t\t\t\t")."Nom du responsable : ".$data["contact"]["interlocuteur"], array('name'=> 'arial','size' => 10));
        $sections->addTextBreak(0);
        $sections->addText("SIGNATURE.".htmlspecialchars("\t\t\t\t\t\t")."Date : ".date("d-m-Y"), array('name'=> 'arial','size' => 10));

    }

    /**
     * Fonction pour ajouter du contenu dans les documents convention
     *
     * @param $templatehtml
     * @param $docword
     *
     * @param array $data
     */
    private function addcontentconvention($templatehtml, $docword, array $data)
    {
        $dossier = $data['dossier'];
        $contact = $data['contact'];

        //dd($contact);
        $this->addcontenttemplate($templatehtml,$docword);
        $sections = $docword->getsectiondoc();
        $table = $sections->addTable('convention');
        $table->addRow();

        $table->addCell(7500)->addText("Pour l’entreprise : ".$data["contact"]["nomSociete"], array('name'=> 'Arial','size' => 9));
        $table->addCell(2500)->addText("Pour l’organisme : ", array('name'=> 'Arial','size' => 9));
        $table->addRow();
        $table->addCell(7500)->addText("Cachet et Signature ", array('name'=> 'Arial','size' => 9));
        $table->addCell(2500)->addText("Cachet et Signature ", array('name'=> 'Arial','size' => 9));
        if ($dossier != null)
        { 
            if ($dossier->getIdStructure()->getId() == 2) 
                { 
                    $sections->addImage('crm/images/sign_pro.jpg', array(
                        'width' => 150,
                        'height' => 50,
                        'positioning' => Image::POSITION_RELATIVE,
                        'wrappingStyle' => 'square',
                        'posHorizontal'    => Image::POSITION_HORIZONTAL_RIGHT,
                        'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
                        'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
                        'posVertical' => Image::POSITION_VERTICAL_TOP,
                    ));
                }
                else 
                {
                    $sections->addImage('crm/images/sign_apr.jpg', array(
                        'width' => 150,
                        'height' => 50,
                        'positioning' => Image::POSITION_RELATIVE,
                        'wrappingStyle' => 'square',
                        'posHorizontal'    => Image::POSITION_HORIZONTAL_RIGHT,
                        'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
                        'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
                        'posVertical' => Image::POSITION_VERTICAL_TOP,
                ));
            }
       }
       elseif ($contact != null){
        if ($contact['structure'] == 2) 
        { 
            $sections->addImage('crm/images/sign_pro.jpg', array(
                'width' => 150,
                'height' => 50,
                'positioning' => Image::POSITION_RELATIVE,
                'wrappingStyle' => 'square',
                'posHorizontal'    => Image::POSITION_HORIZONTAL_RIGHT,
                'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
                'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
                'posVertical' => Image::POSITION_VERTICAL_TOP,
            ));
        }
        else 
        {
            $sections->addImage('crm/images/sign_apr.jpg', array(
                'width' => 150,
                'height' => 50,
                'positioning' => Image::POSITION_RELATIVE,
                'wrappingStyle' => 'square',
                'posHorizontal'    => Image::POSITION_HORIZONTAL_RIGHT,
                'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
                'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
                'posVertical' => Image::POSITION_VERTICAL_TOP,
        ));
    }
       }
    }

    /**
     * Fonction pour ajouter des conteus pour les documents ordre de mission
     *
     * @param $docword
     * @param $data
     */
    private function addcontentomi($docword,$data)
    {
        $styleTable = array('borderSize' => 6, 'borderColor' => '000000');
        $docword->getdocwordphp()->addTableStyle('ColspanRowspan2', $styleTable);
        $table = $docword->getsectionDoc()->addTable('ColspanRowspan2');
        $table->addRow();
        $cell1 = $table->addCell(6000);
        $textrun1 = $cell1->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun1->addText('  FORMATEUR : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $textrun1->addText('<w:br/>  Nom: '.$data["dossier"]["nomformateur"].'  <w:br/>  Société: '.$data["dossier"]["nomsocformateur"], array('name'=> 'calibri','size' => 10));
        $cell11 = $table->addCell(6000);
        $textrun11 = $cell11->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun11->addText('  CLIENT : '.$data["contact"]['nomSociete'], array('name'=> 'calibri','size' => 10,'bold' => true));
        $textrun11->addText('<w:br/>  '.$data["adresse"]['adresse'].' <w:br/>  '.$data["adresse"]['codePostal'].' '.$data["adresse"]['ville'], array('name'=> 'calibri','size' => 10));
        $textrun11->addText('<w:br/>  Tel : telephone<w:br/>  Port : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $textrun11->addText('<w:br/>Personne à contacter : '.$data["contact"]["interlocuteur"], array('name'=> 'calibri','size' => 10,'bold' => true,'underline'=> 'single'));
        $table->addRow();
        $typeinit ='INTRA';
        if($data["dossier"]["typestage"]=="R")
        {
            $typeinit ="INTER";
        }
        elseif ($data["dossier"]["typestage"]=="S") {
            $typeinit ="Sous-traitance";
        }
        $cell2 = $table->addCell(6000);
        $textrun2 = $cell2->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun2->addText(' Type de formation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell22 = $table->addCell(6000);
        $textrun22 = $cell22->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun22->addText($typeinit, array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $cell3 = $table->addCell(6000);
        $textrun3 = $cell3->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun3->addText(' Durée de la formation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell33 = $table->addCell(6000);
        $textrun33 = $cell33->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun33->addText($data["dossier"]["dureeJours"].'jour(s) / '.$data["dossier"]["dureeHeures"].'heure(s)', array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $cell4 = $table->addCell(6000);
        $textrun4 = $cell4->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun4->addText(' Dates de stage : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell44 = $table->addCell(6000);
        $textrun44 = $cell44->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun44->addText(' ', array('name'=> 'calibri','size' => 10));

        $table->addRow();

        $cell5 = $table->addCell(6000);
        $textrun5 = $cell5->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun5->addText(' Lieu de formation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell55 = $table->addCell(6000);
        $textrun55 = $cell55->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun55->addText($data["dossier"]["lieu"], array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $tarifsJ = 0;$tarifsH = 0;
        if(doubleval($data["dossier"]["pvTarifJ"]) > 0)
            $tarifsJ = doubleval($data["dossier"]["pvTarifJ"]);
        if(doubleval($data["dossier"]["pvTarifDj"]) > 0)
            $tarifsJ = doubleval($data["dossier"]["pvTarifDj"])*2;
        if(doubleval($data["dossier"]["pvTarifH"]) > 0)
            $tarifsH = doubleval($data["dossier"]["pvTarifH"]);
        $cell6 = $table->addCell(6000);
        $textrun6 = $cell6->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun6->addText(' Taux Horaire/Journalier de la prestation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell66 = $table->addCell(6000);
        $textrun66 = $cell66->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun66->addText(number_format(doubleval($tarifsJ), 0, ',', ' ').' € HT /jour ou '.number_format(doubleval($tarifsH), 0, ',', ' ').' € HT /heure', array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $stagiaire = $data["stagiaires"];
        $nstag = count($stagiaire);
        $cell7 = $table->addCell(6000);
        $textrun7 = $cell7->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun7->addText(' Effectifs : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell77 = $table->addCell(6000);
        $textrun77 = $cell77->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun77->addText($nstag, array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $cell8 = $table->addCell(6000);
        $textrun8 = $cell8->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun8->addText(' Nom du (des) stagiaire(s) : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell88 = $table->addCell(6000);
        $textrun88 = $cell88->addTextRun(['spaceAfter' => 0,'size' => 1]);
        foreach ($stagiaire as $stag) {
            $textrun88->addText($stag['nomInterlocuteur'].' '.$stag['prenom'].'<w:br/>', array('name'=> 'calibri','size' => 10));
        }
        $docword->getsectionDoc()->addTextBreak(0);
    }

    /**
     * Fonction general pour ajouter du contenu à partir d'un template twig dans un document
     *
     * @param $templatehtml
     * @param $docword
     */
    private function addcontenttemplate($templatehtml,$docword)
    {
        $sections = $docword->getsectiondoc();
        \PhpOffice\PhpWord\Shared\Html::addHtml($sections, $templatehtml, false);
    }

    /**
     * Fonction pour preparer les données à ajouter dans les documents du contact bon de commande,ordre de mission, convention
     * @param Contact $contact
     * @return array
     */
    public function preparebdcdata(?Contact $contact): array
    {
        $contactdata = $this->entitymanager->getRepository(Contact::class)->findContactPrintData($contact->getId());
        $contactlieedata = $this->entitymanager->getRepository(Contact::class)->findContactLieePrintData($contact->getId());
        $contactadressedata = $this->entitymanager->getRepository(Adresse::class)->findAdressesContactPrintData($contact->getId());
        $contactdata["interlocuteur"] = $contactdata["civilite"]." ".$contactdata["nomInterlocuteur"]. " ".$contactdata["prenom"];
        $sCommercial = '';
        if ($contact->getCommercial()) {
            $commercial = $this->entitymanager->getRepository(Collaborateur::class)->find($contact->getCommercial());
            $sCommercial = $commercial->getNomPrenom();
        }
        $contactdata["commercial"] = $sCommercial;
        $contactdata["opca"] = "";
        
        if(!is_null($contact->getOpca())){
            
            if ($contact->getOpca()->getId() && $contact->getOpca()->getId() != 0) {
                $opca = $this->entitymanager->getRepository(Contact::class)->find($contact->getOpca());
                $contactdata["opca"] = !is_null($opca) ? $opca->getnomStr() : "";
            }
            
        }
        
        $contactdata["structure"] = $contact->getStructure() != null ? $contact->getStructure()->getId() : 0;
        if($contactdata["interlocuteur"] !== ContactConst::IS_INTERLOCUTEUR && count($contactlieedata) > 0){
            foreach($contactlieedata as $cntct){
                if($cntct["interlocuteur"] === ContactConst::IS_INTERLOCUTEUR){
                    $contactdata["interlocuteur"] = $cntct["civilite"]." ".$cntct["nomInterlocuteur"]. " ".$cntct["prenom"];
                    $contactdata["telephone"] = $cntct["telephone"];
                    $contactdata["portable"] = $cntct["portable"];
                }
            }
        }
        $data["adresse"] = [
            "adresse" => "",
            "compAdresse"=>"",
            "codePostal"=>"",
            "ville"=>"",
            "principale"=>0,
        ];
        if(array_key_exists(0,$contactadressedata)){
            $data["adresse"] = $contactadressedata[0];
        }
        if((int)$data["adresse"]["principale"] != 1){
            foreach ($contactadressedata as $cntadr){
                if((int)$cntadr["principale"] == 1){
                    $data["adresse"] = $cntadr;
                }
            }
        }
        $data["contact"] = $contactdata;
        $data["dossier"] = $this->entitymanager->getRepository(Dossier::class)->getDossierContactData($contact->getId());
        $data["stagiaires"] = array();
        if($data["dossier"] && $data["dossier"]["id"] > 0){
            $data["stagiaires"] = $this->entitymanager->getRepository(Contact::class)->findContactStagiaireData($data["dossier"]["id"]);
        }

        return $data;
    }

    /**
     * @param array $acontact
     * @throws \Exception
     */
    public function addContactSocData(array $acontact = [])
    {
        $idc = $acontact[0]->getId();
        foreach ( $acontact as $contact ) {
            $idc = $contact->getId() ? $contact->getId(): $idc;
            $telcont = $this->entitymanager->getRepository(Telephone::class)->findOneBy(["idContact" => $contact->getId(),"idTypeTel" => self::TYPE_TELEPHONE]);
            $faxcont = $this->entitymanager->getRepository(Telephone::class)->findOneBy(["idContact" => $contact->getId(),"idTypeTel" => self::TYPE_FAX]);
            $portcont = $this->entitymanager->getRepository(Telephone::class)->findOneBy(["idContact" => $contact->getId(),"idTypeTel" => self::TYPE_PORTABLE]);
            $mailcont = $this->entitymanager->getRepository(Mail::class)->findOneBy(["idContact" => $contact->getId()]);
            if(null != $contact->getTelephone()){
                $tel = (null === $telcont) ? new Telephone() : $telcont;
                $tel->setTel($contact->getTelephone());
                $tel->setIdContact($idc);
                $tel->setDateAdd(new \DateTime("now"));
                $tel->setIdTypeTel(self::TYPE_TELEPHONE);
                $this->entitymanager->persist($tel);
            }
            elseif(null === $contact->getTelephone() && null != $telcont){
                $tel = $telcont;
                $tel->setTel(null);
                $tel->setIdContact(null);
                $tel->setDateAdd(new \DateTime("now"));
                $tel->setIdTypeTel(self::TYPE_TELEPHONE);
                $this->entitymanager->persist($tel);
            }
            if(null != $contact->getFax()){
                $tel = (null === $faxcont) ? new Telephone() : $faxcont;
                $tel->setTel($contact->getFax());
                $tel->setIdContact($idc);
                $tel->setDateAdd(new \DateTime("now"));
                $tel->setIdTypeTel(self::TYPE_FAX);
                $this->entitymanager->persist($tel);
            }
            elseif(null === $contact->getFax() && null != $faxcont){
                $tel = $faxcont;
                $tel->setTel(null);
                $tel->setIdContact(null);
                $tel->setDateAdd(new \DateTime("now"));
                $tel->setIdTypeTel(self::TYPE_FAX);
                $this->entitymanager->persist($tel);
            }
            if(null != $contact->getPortable()){
                $tel = (null === $portcont) ? new Telephone() : $portcont;
                $tel->setTel($contact->getPortable());
                $tel->setIdContact($idc);
                $tel->setDateAdd(new \DateTime("now"));
                $tel->setIdTypeTel(self::TYPE_PORTABLE);
                $this->entitymanager->persist($tel);
            }
            elseif(null === $contact->getPortable() && null != $portcont){
                $tel = $portcont;
                $tel->setTel(null);
                $tel->setIdContact(null);
                $tel->setDateAdd(new \DateTime("now"));
                $tel->setIdTypeTel(self::TYPE_PORTABLE);
                $this->entitymanager->persist($tel);
            }
            if(null != $contact->getEmail()){
                $mail = (null === $mailcont) ? new Mail() : $mailcont;
                $mail->setMail($contact->getEmail());
                $mail->setIdContact($contact);
                $this->entitymanager->persist($mail);
            }
            elseif(null === $contact->getEmail() && null != $mailcont){
                $mail = $mailcont;
                $mail->setMail(null);
                $mail->setIdContact(null);
                $this->entitymanager->persist($mail);
            }
        }
        $this->entitymanager->flush();
    }

    public function setContactSocData(array $acontact = []):void
    {
        foreach($acontact as $contact){
            $tel = $this->entitymanager->getRepository(Telephone::class)->findBy(["idContact" => $contact->getId()]);
            $mail = $this->entitymanager->getRepository(Mail::class)->findOneBy(["idContact" => $contact->getId()]);
            if(!is_null($mail)){
                $contact->setEmail($mail->getMail());
            }
            foreach($tel as $telfaxport){
                switch($telfaxport->getIdTypeTel()){
                    case self::TYPE_TELEPHONE :
                        $contact->setTelephone($telfaxport->getTel());
                        break;
                    case self::TYPE_FAX :
                        $contact->setFax($telfaxport->getTel());
                        break;
                    case self::TYPE_PORTABLE :
                        $contact->setPortable($telfaxport->getTel());
                        break;
                    default:
                        $contact->setTelephone($telfaxport->getTel());
                }
            }
        }
    }

    public function deletecontact($contact)
    {
        try{
            $oEntityManager = $this->entitymanager;
            $oContact = $oEntityManager->getRepository(Contact::class)->find($contact);

            $siteweb = $oEntityManager->getRepository(Url::class)->findBy(["idContact" => $oContact->getId()]);
            foreach($siteweb as $site){
                $site->setIdContact(null);
                $oEntityManager->flush();
            }

            /*$facturesLiees = $oEntityManager->getRepository(Facture::class)->findBy(['idOpca' => $oContact]);
            foreach ($facturesLiees as $facturesLiee) {
                $facturesLiee->setIdOpca(null);
                $oEntityManager->flush();
            }

            $dossiers = $oEntityManager->getRepository(FormationDossier::class)->findBy(["idClient" => $oContact]);
            foreach($dossiers as $dossier){
                $dossier->setIdClient(null);
                $oEntityManager->flush();
            }*/

            $mails = $oEntityManager->getRepository(Mail::class)->findBy(["idContact" => $oContact->getId()]);
            foreach ($mails as $mail){
                $mail->setIdContact(null);
                $oEntityManager->flush();
            }

            $tel = $oEntityManager->getRepository(Telephone::class)->findBy(["idContact" => $oContact->getId()]);
            foreach($tel as $telephone){
                $telephone->setIdContact(null);
                $oEntityManager->flush();
            }

            $adresses = $oEntityManager->getRepository(Adresse::class)->findBy(["idContact" => $oContact->getId()]);
            foreach($adresses as $adress){
                $adress->setIdContact(null);
                $oEntityManager->flush();
            }

            $contacts = $oEntityManager->getRepository(Contact::class)->findBy(["contactLiee" => $oContact->getId()]);
            foreach ($contacts as $cont){
                $cont->setContactLiee(null);
                $oEntityManager->flush();
            }

            $contactsopca = $oEntityManager->getRepository(Contact::class)->findBy(["opca" => $oContact->getId()]);
            foreach ($contactsopca as $cont){
                $cont->setOpca(null);
                $oEntityManager->flush();
            }

            $comments = $oEntityManager->getRepository(ContactNote::class)->findBy(["idTableContact" => $oContact->getId()]);
            foreach($comments as $comment){
                $comment->setIdTableContact(null);
                $oEntityManager->flush();
            }

            $societeliees = $oEntityManager->getRepository(SocieteLiee::class)->findBy(["idContact" => $oContact->getId()]);
            foreach($societeliees as $societeliee){
                $societeliee->setIdContact(null);
                $oEntityManager->flush();
            }

            $oEntityManager->remove($oContact);
            $oEntityManager->flush();

            return true;
        }
        catch (DBALException $ex){
            return $ex->getMessage();
        }
        catch(\Exception $ex){
            return $ex->getMessage();
        }
    }
    

}