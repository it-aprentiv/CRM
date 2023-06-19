<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 02/01/2020
 * Time: 15:06
 */

namespace App\Manager;

use App\Constants\Date;
use App\Constants\FormationType;
use App\Constants\Contact as ContactConst;
use App\Entity\Adresse;
use App\Entity\Contact;
use App\Entity\ContactNote;
use App\Entity\Dossier;
use App\Entity\FormationDossier;
use App\Entity\FormationSuiviOrdredemission;
use App\Entity\Mail;
use App\Entity\Telephone;
use App\Constants\Structure as StructConst;
use App\Repository\DossierRepository;
use App\Service\ExcelService;
use App\Service\WordService;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Component\DependencyInjection\ContainerInterface;


class FormationManager
{
    private $entityManager;
    private $container;
    private $dossierRepo;

    CONST TARGET_FILE = "DocPrint/Formation";

    /**
     * ContactManager constructor.
     */
    public function __construct(EntityManagerInterface $em, ContainerInterface $container)
    {
        $this->entityManager = $em;
        $this->container = $container;
    }

    /**
     * Fonction pour cr�er les documents ordre de mission
     *
     * @param $templatehtml
     * @param Contact $contact
     *
     * @return \Exception|string
     */
    public function createDocOMI($templatehtml, Contact $contact = null, Dossier $dossier)
    {
        $data = $this->prepareOMData($contact, $dossier);
        $sRefOM = is_null($dossier->getRefOrdreMission()) ? '' : $dossier->getRefOrdreMission();
        $text = "La réception du présent ordre de mission signé par le formateur vaut contrat de prestation.";
        $docword = new WordService();
        $docword->createdocword()
            ->createheaderlogoomi($sRefOM);
        $this->addContentOmi($docword, $data);    
        $docword->addContentTemplate($templatehtml, $docword);  
        $docword->addfootersigned()
            ->createfooterlogoomi($text);
        return $docword->saveDocument("order_de_mission_" . $dossier->getId() . ".docx");
    }

    /**
     * Fonction pour preparer les donn�es � ajouter dans les documents ordre de mission
     * @param Contact $contact
     * @return array
     */
    private function prepareOMData(Contact $contact = null, Dossier $dossier) {
        if($contact) {
            $em = $this->entityManager;
            $contactData = $em->getRepository(Contact::class)->findContactPrintData($contact->getId());
            $contactLieeData = $em->getRepository(Contact::class)->findContactLieePrintData($contact->getId());
            $contactAdresseData = $em->getRepository(Adresse::class)->findAdressesContactPrintData($contact->getId());
            if(array_key_exists(0,$contactAdresseData)){
                $data["adresse"] = $contactAdresseData[0];
            }
            if(isset($data) && (int)$data["adresse"]["principale"] != 1){
                foreach ($contactAdresseData as $cntadr){
                    if((int)$cntadr["principale"] == 1){
                        $data["adresse"] = $cntadr;
                    }
                }
            }
            if($contactData["interlocuteur"] === ContactConst::IS_INTERLOCUTEUR){
                $contactData["interlocuteur"] = $contactData["nomInterlocuteur"]." ".$contactData["prenom"];
            }
            elseif(count($contactLieeData) > 0){
                foreach ($contactLieeData as $ct){
                    if($ct["interlocuteur"] === ContactConst::IS_INTERLOCUTEUR){
                        $contactData["interlocuteur"] = $ct["nomInterlocuteur"]." ".$ct["prenom"];
                    }
                }
            }
            else{
                $contactData["interlocuteur"] = "";
            }
            $data["contact"] = $contactData;
            $data["dossier"] = $this->entityManager->getRepository(Dossier::class)->getDossierContactDataBy($contact->getId(), $dossier->getId());
        } else {
            $data["contact"] = null;
            $data['dossier'] = $this->entityManager->getRepository(Dossier::class)->getDossierDataBy($dossier->getId());
        }

        $data["stagiaires"] = array();
        if($data["dossier"] && $data["dossier"]["id"] > 0){
            $data["stagiaires"] = $this->entityManager->getRepository(Contact::class)->getStagiairesData($data["dossier"]["id"]);
        }

        return $data;
    }

    public function addContentOmi($docword, $data) {
        $styleTable = array('borderSize' => 6, 'borderColor' => '000000');
        $docword->getdocwordphp()->addTableStyle('ColspanRowspan2', $styleTable);
        $table = $docword->getsectionDoc()->addTable('ColspanRowspan2');
        $table->addRow();
        $cell1 = $table->addCell(5000);
        $textrun1 = $cell1->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun1->addText('  FORMATEUR : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $nomform = isset($data["dossier"]) ? $data["dossier"]["nomformateur"] : "";
        $nomformsoc = isset($data["dossier"]) ? $data["dossier"]["nomsocformateur"] : "";
        $textrun1->addText('<w:br/>  Nom: '.$nomform.'  <w:br/>  Société: '.$nomformsoc, array('name'=> 'calibri','size' => 10));
        $cell11 = $table->addCell(5000);
        
        $textrun11 = $cell11->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $contactSociete = ($data["contact"])? $data["contact"]['nomSociete']: " ";
        $contactAdresse = isset($data["adresse"])? $data["adresse"]['adresse']: " ";
        $contactCodePostal = isset($data["adresse"])? $data["adresse"]['codePostal']: " ";
        $contactVille = isset($data["adresse"])? $data["adresse"]['ville']: " ";

        $textrun11->addText('  CLIENT : ' . $contactSociete, array('name'=> 'calibri','size' => 10,'bold' => true));
        $textrun11->addText('<w:br/>  '.$contactAdresse.' <w:br/>  ' . $contactCodePostal . ' ' . $contactVille, array('name'=> 'calibri','size' => 10));
        $textrun11->addText('<w:br/>  Tel : '.$data["contact"]["telephone"].'<w:br/>  Port : '.$data["contact"]["portable"], array('name'=> 'calibri','size' => 10,'bold' => true));
        $textrun11->addText('<w:br/>Personne à contacter : '.$data["contact"]["interlocuteur"], array('name'=> 'calibri','size' => 10,'bold' => true,'underline'=> 'single'));
        $table->addRow();

        $typeForation = FormationType::FORMATION_INTRA;
        
        if(isset($data["dossier"]) && $data["dossier"]["typestage"] === "R") {
            $typeForation = FormationType::FORMATION_INTER;
        } elseif (isset($data["dossier"]) && $data["dossier"]["typestage"] === "S") {
            $typeForation = FormationType::FORMATION_SOUS_TRAITANCE;
        }

        $cell2 = $table->addCell(5000);
        $textrun2 = $cell2->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun2->addText(' Type de formation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell22 = $table->addCell(5000);
        $textrun22 = $cell22->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun22->addText($typeForation, array('name'=> 'calibri','size' => 10));

        if($data["dossier"]["typestage"] !== "S" || $typeForation !== FormationType::FORMATION_SOUS_TRAITANCE) { // A afficher pour les formations de type Intra et Inter 
            $table->addRow();
            $cell3 = $table->addCell(5000);
            $textrun3 = $cell3->addTextRun(['spaceAfter' => 0,'size' => 1]);
            $textrun3->addText(' Durée de la formation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
            $cell33 = $table->addCell(5000);
            $textrun33 = $cell33->addTextRun(['spaceAfter' => 0,'size' => 1]);
            $durj = isset($data["dossier"]) ? $data["dossier"]["dureeJours"] : "0";
            $durh = isset($data["dossier"]) ? $data["dossier"]["dureeHeures"] : "0";
            $textrun33->addText($durj.'jour(s) / '.$durh.'heure(s)', array('name'=> 'calibri','size' => 10));
                   
            $table->addRow();
            $cell4 = $table->addCell(5000);
            $textrun4 = $cell4->addTextRun(['spaceAfter' => 0,'size' => 1]);
            $textrun4->addText(' Dates de stage : ', array('name'=> 'calibri','size' => 10,'bold' => true));
            $cell44 = $table->addCell(5000);
            $textrun44 = $cell44->addTextRun(['spaceAfter' => 0,'size' => 1]);  

            $dateDebut = isset($data['dossier']) ? ($data['dossier']['dateDebutPeriode'])->format('d/m/Y') : '';
            $dateFin = isset($data['dossier']) ? ($data['dossier']['dateFinPeriode'])->format('d/m/Y') : '' ;
            $textPeriodeStage = $data['dossier']['dateDebutPeriode'] && $data['dossier']['dateFinPeriode'] ? 'Du '.$dateDebut.' au '. $dateFin : '';
            $textrun44->addText($textPeriodeStage, array('name'=> 'calibri','size' => 10));
        }
       
        $table->addRow();

        $cell5 = $table->addCell(5000);
        $textrun5 = $cell5->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun5->addText(' Lieu de formation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell55 = $table->addCell(5000);
        $textrun55 = $cell55->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $lieu = isset($data["dossier"]) ? $data["dossier"]["lieu"] : "";
        $textrun55->addText($lieu, array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $tarifsJ = 0;$tarifsH = 0;
        if(isset($data["dossier"]) && doubleval($data["dossier"]["pvTarifJ"]) > 0)
            $tarifsJ = doubleval($data["dossier"]["pvTarifJ"]);
        if(isset($data["dossier"]) && doubleval($data["dossier"]["pvTarifDj"]) > 0)
            $tarifsJ = doubleval($data["dossier"]["pvTarifDj"])*2;
        if(isset($data["dossier"]) && doubleval($data["dossier"]["pvTarifH"]) > 0)
            $tarifsH = doubleval($data["dossier"]["pvTarifH"]);
        $cell6 = $table->addCell(5000);
        $textrun6 = $cell6->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun6->addText(' Taux Horaire/Journalier de la prestation : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell66 = $table->addCell(5000);
        $textrun66 = $cell66->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun66->addText(number_format(doubleval($tarifsJ), 0, ',', ' ').' € HT /jour ou '.number_format(doubleval($tarifsH), 0, ',', ' ').' € HT /heure', array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $stagiaire = isset($data["stagiaires"]) ? $data["stagiaires"] : " ";
        $nstag = is_array($stagiaire) ? count($stagiaire) : 0;
        $cell7 = $table->addCell(5000);
        $textrun7 = $cell7->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun7->addText(' Effectifs : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell77 = $table->addCell(5000);
        $textrun77 = $cell77->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun77->addText($nstag, array('name'=> 'calibri','size' => 10));

        $table->addRow();
        $cell8 = $table->addCell(5000);
        $textrun8 = $cell8->addTextRun(['spaceAfter' => 0,'size' => 1]);
        $textrun8->addText(' Nom du (des) stagiaire(s) : ', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell88 = $table->addCell(5000);
        $textrun88 = $cell88->addTextRun(['spaceAfter' => 0,'size' => 1]);
        foreach ($stagiaire as $stag) {
            $textrun88->addText($stag['nomInterlocuteur'].' '.$stag['prenom'].'<w:br/>', array('name'=> 'calibri','size' => 10));
        }
        $docword->getsectionDoc()->addTextBreak(0);
    }
    
    
    /**
     * APP-70 : Génération fichier recap formateur
     * 
     * @param Dossier $oFormation
     * @return type
     */
    public function exportRecapFormation(Dossier $oFormation){
        /** @var ExcelService $oExcelService */
        $oExcelService = $this->container->get('crm.app.service.excel');
        $aData = $this->prepareDateRF($oFormation);
        $sFileTemplate = realpath($this->container->getParameter('file_template_dir'). '/FORMATEUR.xls');

        /** @var Spreadsheet $oSpreadSheet */
        $oSpreadSheet = $oExcelService->generateWorkSheet($sFileTemplate);
        $osheet = $oSpreadSheet->getActiveSheet();
        $osheet->setCellValue('B3',$aData[count($aData)-1]);
        $osheet->setCellValue('F3',\date("d/m/Y"));
        $iStart = 8;
        
        for($i = 0 ; $i < count($aData) - 1 ; $i++){
            $data = $aData[$i];
            $aStagiaires = $data["stagiares"];
            $aSuiviOM = $data["SuiviMission"];
            if($i > 0){
                $oSpreadSheet->getActiveSheet()->insertNewRowBefore($iStart,1);
            }
            foreach($aStagiaires as $key => $stagiaire){
                $osheet->setCellValue("A$iStart",$data["Date"]);
                $osheet->setCellValue("B$iStart",$data["Client"]);
                $osheet->setCellValue("D$iStart",$data["IntituleFormation"]);
                $osheet->setCellValue("C$iStart",$stagiaire);
                // Durée commandée
                $osheet->setCellValue("E$iStart",$data["DureeJours"]);
                $osheet->setCellValue("F$iStart",$data["DureeHeures"]);
                foreach($aSuiviOM as $k => $suivimission){
                    $col = $this->setColSelect((int)$suivimission["Mois"]);
                    $osheet->setCellValue("$col$iStart",$suivimission["DurreH"]);
                }
                if(isset($aStagiaires[$key + 1])){
                    $iStart++;
                    $oSpreadSheet->getActiveSheet()->insertNewRowBefore($iStart,1);
                }
            }
            $iStart++;
        }
        for($i = 8; $i < $iStart; $i++){
            $durh = $osheet->getCell("F$i")->getValue();
            $osheet->setCellValue("S$i","=".$durh."-SUM(G$i:R$i)");
        }
        foreach(["E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S"] as $col){
            $osheet->setCellValue("$col$iStart","=SUM(".$col."6:".$col.($iStart - 1).")");
        }
        $sPath = $oExcelService->saveInTemp($oSpreadSheet);

        return $sPath;
    }

    public function getDossierRepo(){
        if (!$this->dossierRepo instanceof DossierRepository) {
            $this->dossierRepo = $this->entityManager->getRepository(Dossier::class);
        }

        return $this->dossierRepo;
    }

    public function generateRefOrdreMission($iStructure){
        $sYear = date('Y');

        /** @var DossierRepository $dossierRepo */
        $dossierRepo = $this->getDossierRepo();

        switch ($iStructure) {
            case StructConst::APRENTIV :
                $sStructRef = StructConst::PREFIX_OM_APRENTIV;
                break;
            case StructConst::PROFORM :
                $sStructRef = StructConst::PREFIX_OM_PROFORM;
                break;
            default:
                $sStructRef = null;
        }

        if (is_null($sStructRef)) {
            return null;
        }

        $sPrefix = "{$sStructRef}OM{$sYear}";

        $sLastRef = $dossierRepo->getLastOMRefByStruc($sPrefix);
        $iRef = $sLastRef ? (int) substr($sLastRef, -4, 4) : 0;
        $iRef++;

        if ($iRef > 9999) {
            return null;
        }

        $sRef = $sPrefix . str_pad($iRef, 4, '0', STR_PAD_LEFT);

        return $sRef;
    }

    /**
     * APR-70 : Génération des données récap formateur
     * 
     * @param Dossier $aoFormation
     * @return type
     */
    public function prepareDateRF (Dossier $aoFormation)
    {
        $aDataRetour = [];
        $aAllFormation = $this->getDossierRepo()->findBy(["idFormateur" => $aoFormation->getIdFormateur()]);
        
        foreach ($aAllFormation as $oFormationF) {
            $aData = [];
            $aStagiaires = $oFormationF->getStagiaires()->getValues();
            $aSuiviOM = $oFormationF->getSuiviMissions()->getValues();
            $aData["DureeJours"] = $oFormationF->getDureeJours();
            $aData["DureeHeures"] = $oFormationF->getDureeHeures();
            $sNomStagiaire = "";
            $aStag = [];
            if(count($aStagiaires) > 0) {
                foreach($aStagiaires as $stagiaire){
                    $aData["stagiares"][] = $stagiaire->getNom()." ".$stagiaire->getPrenom();
                }
            }
            else{
                $aData["stagiares"][] = '';
            }

            //$aData["Stagiaire"] = substr($sNomStagiaire,0,strlen($sNomStagiaire)-1);
            if(count($aSuiviOM) > 0){
                foreach ($aSuiviOM as $oSuiviOM){
                    $aSOM = [];
                    $aSOM["Mois"] = $oSuiviOM->getMoisfac();
                    $aSOM["DurreH"] = $oSuiviOM->getHeureFait();
                    $aSOM["Mnt"] = str_replace(" ","",str_replace(",",".",$oSuiviOM->getMontantht()));
                    //$aSOM["Stagiaires"][] = $aStag;
                    $aData["SuiviMission"][] = $aSOM;
                }
            }
            elseif(0 === count($aSuiviOM)){
                $aSOM = [];
                $aSOM["Mois"] = "";
                $aSOM["DurreH"] = "";
                $aSOM["Mnt"] = 0.00;
                //$aSOM["Stagiaires"] = $aStag;
                $aData["SuiviMission"][] = $aSOM;
            }
            $dom = $oFormationF->getDatePrintOrdreMission();
            $aData["Date"] = !is_null($dom) ? $dom->format("d/m/Y") : "";
            $aData["Client"] = $oFormationF->getIdClient() ? $oFormationF->getIdClient()->getNomStr() : "";
            $aData["IntituleFormation"] = $oFormationF->getNom();
            $aDataRetour[] = $aData;
        }
        $aa = $aoFormation->getIdFormateur();
        $aDataRetour[] = !is_null($aa) ? $aa->getNom() : "";

        return $aDataRetour;
    }

    public function setColSelect(int $mois)
    {
        switch ($mois){
            case 2:
                return "H";
            case 3:
                return "I";
            case 4:
                return "J";
            case 5:
                return "K";
            case 6:
                return "L";
            case 7:
                return "M";
            case 8:
                return "N";
            case 9:
                return "O";
            case 10:
                return "P";
            case 11:
                return "Q";
            case 12:
                return "R";
            default:
                return "G";
        }
    }
}