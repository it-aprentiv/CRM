<?php

namespace App\Manager;

use App\Constants\Contact as ContactConst;
use App\Constants\ExtractionDossierType;
use App\Entity\Competence;
use App\Constants\Date;
use App\Entity\Adresse;
use ZipArchive;
use App\Entity\Avoir;
use App\Entity\Civilite;
use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\Dossier;
use App\Entity\Facture;
use App\Entity\FormationDossier;
use App\Entity\FormationDossierDate;
use App\Entity\FormationDossierStagiaire;
use App\Entity\Ville;
use App\Repository\ContactRepository;
use App\Repository\FormationDossierDateRepository;
use App\Service\ExcelService;
use App\Service\WordService;
use App\Utils\MoneyUtils;
use DateInterval;
use DatePeriod;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\SimpleType\VerticalJc;
use PhpOffice\PhpWord\TemplateProcessor;
use Symfony\Component\DependencyInjection\ContainerInterface;
use function dd;

class FormationDossierManager {

    private $container;
    private $em;

    const HOUR_MATIN = "09:00";
    const HOUR_MIDI = "13:00";
    const HOUR_FIN_MATINEE = "14:00";
    
    const HEURE_AM_DEBUT = "09:00";
    const HEURE_AM_FIN = "14:00";
    const HEURE_PM_DEBUT = "13:00";
    const HEURE_PM_FIN = "18:00";

    public function __construct(ContainerInterface $container, EntityManagerInterface $em) {
        $this->container = $container;
        $this->em = $em;
    }

    public function insererFactDossier($dossier, $iddossier) {
        $num_code = rand(1, 9999);
        $now = date('m-Y');
        $fa = "FA";
        $tiret = "-";
        $reffacture = $fa . $num_code . $tiret . $now;
    }

    public function extractToExcel($aHeader, $aData, $aParams, $sType, $aAlias = [], $aFilters = []) {
        /** @var ExcelService $phpSpreadSheet */
        $phpSpreadSheet = $this->container->get('crm.app.service.excel');
        $sTitle = $aParams['title'];
        $sSheetTitle = $aParams['sheettitle'];

        /** @var Spreadsheet $oSpreadSheet */
        $oSpreadSheet = $phpSpreadSheet->generateWorkSheet();
        $oSpreadSheet->getDefaultStyle()->getAlignment()->setWrapText(true);
        $oSheet = $oSpreadSheet->getActiveSheet();
        $this->configureExtractionSheet($oSheet, $sType);

        $iRow = 1;
        $oSheet->setCellValue("A$iRow", $sTitle);
        $aTitleStyle = array(
            'font' => array(
                'bold' => true,
                'color' => array('rgb' => '5DBCD2'),
                'size' => 15,
                'name' => 'Verdana'
        ));
        $oSheet->getStyle("A$iRow")->applyFromArray($aTitleStyle);
        $aAlphabet = range('A', 'Z');
        $iNbCol = count($aHeader);
        $iLastCol = 'A';
        if ($iNbCol > 1) {
            $iLastCol = $aAlphabet[$iNbCol - 1];
            $oSheet->mergeCells("A1:{$iLastCol}1");
        }
        
        // Debut APR-218 : Suivi des commission > Extraction > Mises en forme
        // Afficher le nom du commercial
        if ($sType == ExtractionDossierType::GESTION_SUIVI_COM) {
            $oCollaborateurRepo = $this->em->getRepository(Collaborateur::class);
            $oCollaborateur = null;
            
            if (!empty($aFilters) && isset($aFilters['commercial'])) {
                $oCollaborateur = $oCollaborateurRepo->find(intval($aFilters['commercial']));
                
                if ($oCollaborateur) {
                    $iRow++;
                    $oSheet->setCellValue("A$iRow", $oCollaborateur->getNomPrenom());
                }
            }
        }
        // Fin APR-218
        
        // limité à 31 caractère par PhpSpreadsheet
        $oSheet->setTitle(substr($sSheetTitle, 0, 31));

        $fAddRow = function ($aRow, $iRow, $aAlias = []) use ($oSheet, $aHeader, $aAlphabet) {
            $i = 0;
            
            foreach ($aHeader as $key => $value) {
                // use alias if key key defined in alias
                $sKey = array_key_exists($key, $aAlias) ? $aAlias[$key] : $key;
                $oSheet->setCellValue($aAlphabet[$i] . $iRow, $aRow[$sKey]);
                
                // APR-218 : Suivi des commissions > Liste > Mettre un bouton : Extraction
                // 3. Pour toutes les colonnes montants : mettre au format monétaire les cellules (ou rajouter le symbole € à la fin du montant)
                if (in_array($key, ['mntDemande', 'mntDossierAcc', 'facTotalRegle', 'montencaiss', 'montantcom'])) {
                    $oSheet->getStyle($aAlphabet[$i] . $iRow, $aRow[$sKey])
                        ->getNumberFormat()
                        ->setFormatCode(NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);
                }
                
                $i++;
            }
        };

        $iRow += 2;
        $fAddRow($aHeader, $iRow);
        $oSheet->getStyle("A$iRow:$iLastCol$iRow")
            ->getFont()->setBold(true);
        $iRow++;
        
        foreach ($aData as $data) {
            $fAddRow($data, $iRow, $aAlias);
            $iRow++;
        }

        return $phpSpreadSheet->saveInTemp($oSpreadSheet);
    }

    /**
     * Fonction pour la génération de fichier word ECD
     * @param $templatehtml
     * @param $dossier
     * @param $structure
     *
     * @return Exception|string|void
     */
    public function createDocECD($templatehtml, $dossier, $structure) {
        $fichier = null;
        $docword = new WordService();
        $docword->createdocword()
            ->createheaderlogo($structure);
        $docword->addcontenttemplate($templatehtml, $docword);
        
        // APR-213
         // Génération du footeur du courrier IMP
        if ($structure == 2) { 
            // Ajout footer proform
            $fichier = $docword->createfooterlogoemarg();
        } else {
            // Ajout footer Aprentiv
            $fichier = $docword->createfooterlogoomi();
        }
        
        
        $fichier = $docword->saveDocument("ECD_" . $dossier->getId() . ".docx", "Dossier");

        return $fichier;
    }

    /**
     * Fonction pour la génération de fichier word IMP
     * @param $templatehtml
     * @param $dossier
     * @param $structure
     *
     * @return Exception|string|void
     */
    public function createDocIMP($templatehtml, $dossier, $structure) {
        $fichier = null;
        $docword = new WordService();
        $docword->createdocword()
            ->createheaderlogo($structure);
        
        // Génération du contenu du document courrier IMP
        $docword->addcontenttemplate($templatehtml, $docword);
        
        // Génération du footeur du courrier IMP
        if ($structure == 2) { 
            // Ajout footer proform
            $fichier = $docword->createfooterlogoemarg();
        } else {
            // Ajout footer Aprentiv
            $fichier = $docword->createfooterlogoomi();
        }
        
        $fichier = $docword->saveDocument("IMP_" . $dossier->getId().date('_d-m-Y_His_') . ".docx", "Dossier");

        return $fichier;
    }

    /**
     * Fonction pour la génération de fichier word ELE
     * @param $templatehtml
     * @param $dossier
     * @param $structure
     *
     * @return Exception|string|void
     */
    public function createDocELE($templatehtml, $dossier, $structure) {
        $fichier = null;
        $docword = new WordService();
        $docword->createdocword()
            ->createheaderlogo($structure);
        $docword->addcontenttemplate($templatehtml, $docword);
        
        // APR-213
         // Génération du footeur du courrier IMP
        if ($structure == 2) { 
            // Ajout footer proform
            $fichier = $docword->createfooterlogoemarg();
        } else {
            // Ajout footer Aprentiv
            $fichier = $docword->createfooterlogoomi();
        }
        
        
        $fichier = $docword->saveDocument("ELE_" . $dossier->getId() . ".docx", "Dossier");

        return $fichier;
    }

    /**
     * @param WordService $docWord
     * @param FormationDossier $oDossier
     */
    private function buildPagedeGarde(&$docWord, $oDossier, $aPost, FormationDossierDateRepository $formationDossierDateRepository) {
        $stagiaires = $this->getStagiaireDossier($oDossier);
        $nomstagiaires = "";
        foreach ($stagiaires as $stagiaire) {
            $nomstagiaires .= $stagiaire->getNom() . " " . $stagiaire->getPrenom() . "<w:br/>";
        }
        $sFancyTableStyleName = "Fancy Table";
        $aFancyTableStyle = ['borderSize' => 2, 'borderColor' => '000000', 'cellMargin' => 50, 'cellSpacing' => 0, 'align' => 'center'];
        $aFancyFirstRowStyle = ['borderBottomSize' => 18, 'borderBottomColor' => '000000'];
        $aBold = ['bold' => true];
        $aTextRunConfig = ['spaceAfter' => 0, 'size' => 1];

        $oPhpWord = $docWord->getdocwordphp();
        $oPhpWord->setDefaultFontName('calibri');
        $oPhpWord->setDefaultFontSize(12);

        /** @var Section $oSection */
        $oSection = $docWord->getsectiondoc();
        $oPhpWord->addTableStyle($sFancyTableStyleName, $aFancyTableStyle, $aFancyFirstRowStyle);
        
        // Ajout tableau
        $oTable = $oSection->addTable($sFancyTableStyleName);
        $oTable->addRow();
        
        // Debut Première colonne
        // APR-212 : Mettre l'initiale du commercial sur le premier tableau en haut à gauche
        $sAcronymCommercial = "";
        
        if (!empty($oDossier->getIdCommercial())) {
            $aNomCommercial = explode(" ", $oDossier->getIdCommercial()->getNomPrenom());
            
            foreach ($aNomCommercial as $word) {
                if (isset($word[0])) {
                    $sAcronymCommercial .= strtoupper($word[0]);
                }
            }
        }
        
        $oTable->addCell(4000, [
            'bgColor' => '7fbdef',
            'borderSize' => 2, 'borderColor' => '7fbdef'
        ])->addText($sAcronymCommercial, ['size' => 14]); // APR-212 : Mettre l'initiale du commercial sur le premier tableau en haut à gauche
        // Fin première colonne
        
        // Deuxième colonne
        $oInfoGenCell = $oTable->addCell(8000, [
            'alignment' => 'right', 'bgColor' => '7fbdef',
            'borderSize' => 2, 'borderColor' => '7fbdef'
        ]);
        $oTextRunInfoGen = $oInfoGenCell->addTextRun($aTextRunConfig);
        //$oTextRunInfoGen->addText($oDossier->getNumeroInterne(), ['bold' => true, 'size' => 25]);
        $oTextRunInfoGen->addText($oDossier->getRef(), ['bold' => true, 'size' => 25]);
        $oTextRunInfoGen->addTextBreak();
        $oTextRunInfoGen->addText("Société : ", $aBold);
        // Fix : Document corrompu par nom société contenant des caractères spéciaux : Ex : BONNEVILLE & ASSOCIES
        // Ajout echappement par htmlentities
        $sSociete = str_replace("&", "&amp;", $aPost['client']);
        $oTextRunInfoGen->addText($sSociete);
        $oTextRunInfoGen->addTextBreak();

        /** @var ContactRepository $contactRepository */
        $contactRepository = $this->em->getRepository(Contact::class);
        $aClient = $contactRepository->findContactDataCivil($oDossier->getIdClient()->getId());
        if ($aClient['qualite'] === 'responsable') {
            $sResponsable = $aClient['civilite'] . " "
                . strtoupper($aClient['nom'])
                . $aClient['prenom'];
        } else {
            $sResponsable = "";
        }
        $oTextRunInfoGen->addText("Responsable : ", $aBold);
        $oTextRunInfoGen->addText($sResponsable);
        $oTextRunInfoGen->addTextBreak();

        if ($aClient['interlocuteur'] === ContactConst::IS_INTERLOCUTEUR) {
            $sInterlocuteur = $aClient['civilite'] . " "
                . strtoupper($aClient['nom'])
                . " ". $aClient['prenom'];
        } else {
            $sInterlocuteur = "";
        }

        $oTextRunInfoGen->addText("Interlocuteur : ", $aBold);
        $oTextRunInfoGen->addText($sInterlocuteur);
        $oTextRunInfoGen->addTextBreak();

        $oTextRunInfoGen->addText($aClient['adresse']);
        $oTextRunInfoGen->addTextBreak();
        $oTextRunInfoGen->addText($aClient['codepostal'] . " " . $aClient['ville']);
        $oTextRunInfoGen->addTextBreak();

        $oTextRunInfoGen->addText("Tel : ", $aBold);
        $sTel = '';
        $sFax = '';
        if ($aClient['telephone']) {
            $sTel = $aClient['telephone'];
        } else if ($aClient['portable']) {
            $sTel = $aClient['portable'];
        }
        if ($aClient['fax']) {
            $sFax = $aClient['fax'];
        }
        $oTextRunInfoGen->addText("$sTel  Fax: $sFax");
        $oTextRunInfoGen->addTextBreak();

        $sEmail = $aClient['email'] === "@" ? "" : $aClient['email'];
        $oTextRunInfoGen->addText("Email : ", $aBold);
        $oTextRunInfoGen->addText($sEmail);
        $oTextRunInfoGen->addTextBreak();

        $oTextRunInfoGen->addText("Siret : ", $aBold);
        $oTextRunInfoGen->addText($aClient['siret']);

        $oTable->addRow();

        $sOpca = isset($aPost['opca']) ? htmlspecialchars($aPost['opca']) : '';
        $oTable->addCell(4000, [
            'valign' => "bottom", 'bgColor' => '7fbdef',
            'gridSpan' => 2,
            'borderSize' => 2, 'borderColor' => '7fbdef'
        ])->addText($sOpca, ['size' => 14]);

        $oTable->addRow();
        $oTimeTextRun = $oTable->addCell(7000, ['bgColor' => '7fbdef', 'borderRightSize' => 0, 'borderRightColor' => 'transparent'])
            ->addTextRun($aTextRunConfig);
        //$oTimeTextRun->addTextBreak();
        $oTimeTextRun->addText("CONTENU : ", $aBold);
        $oTimeTextRun->addText($aPost['intitstage']);
        $oTimeTextRun->addTextBreak();

        $oTimeTextRun->addText("DATE de STAGE : ", $aBold);
        $oTimeTextRun->addText(" Du " . str_replace("/", "-", $aPost['datedebut']) . " au " .str_replace("/", "-", $aPost['datefin']) );
        $oTimeTextRun->addTextBreak();

        $oTimeTextRun->addText("CALENDRIER : ", $aBold);
        //$datestagecomplet = $this->em->getRepository(FormationDossierDate::class)->getDossierDate($oDossier->getId());
        $datestagecomplet = $formationDossierDateRepository->getDossierDate($oDossier->getId());

        
        $isNewFormationDate = (1 === count($datestagecomplet) && $datestagecomplet[0]["joursSemaine"] != null && $datestagecomplet[0]["nbH"] != null);
        
        if ($isNewFormationDate) {
            $datestagecomplet = $this->generatenewdate($datestagecomplet);
        }
        
        $aNbJoursEtHeures = $this->calculNbJetHr($datestagecomplet);
        
        if ($isNewFormationDate) {
            //$dateFormation = $this->em->getRepository(FormationDossierDate::class)->getDossierDate($oDossier->getId());
            $dateFormation = $formationDossierDateRepository->getDossierDate($oDossier->getId());
            $aNbJoursEtHeures['nbH'] = $dateFormation[0]['nbH'];
            $aNbJoursEtHeures['nbJ'] = $dateFormation[0]['nbrjN'];
        }
        
        $calendrier = $this->generatedateformationdossier($datestagecomplet);
        $dateStage = $calendrier[1];
        $cal = '';
        
        foreach ($dateStage as $key => $value) {
            $calTxt = "";
            foreach ($value as $indice => $jour) {
                $calTxt .= $jour;
                if ($indice < count($value) - 1)
                    $calTxt .= ",";
            }
            $calTxt .= " " . $key;
            $cal .= $calTxt . '<w:br/>';
        }
        
        $oTimeTextRun->addText($cal);
        $oTimeTextRun->addText("DUREE : ", $aBold);
        $oTimeTextRun->addText($aNbJoursEtHeures['nbJ'] . ' jours /  ' . $aNbJoursEtHeures['nbH'] . ' heures');
        $oTimeTextRun->addTextBreak();

        $oTimeTextRun->addText("MONTANT D.I.P.C : ", $aBold);
        $fMontant = !empty($aPost['montant']) ? floatval(str_replace(" ", "", $aPost['montant'])) : "";
        $sMontant = MoneyUtils::format($fMontant);
        $oTimeTextRun->addText("$sMontant € HT");
        //$oTimeTextRun->addTextBreak();

        $oStagiaireTextRun = $oTable->addCell(5000, ['bgColor' => '7fbdef', 'valign' => 'center']);
        $oStagiaireTextRun->addText("Stagiaire(s) : ", $aBold);
        $oStagiaireTextRun->addText($nomstagiaires);
        $oTable->addRow();

        $oTimeTextRun = $oTable->addCell(7000, ['bgColor' => '7fbdef', 'valign' => 'center']);
        $oTimeTextRun->addText("DATE D'EXPEDITION", ['bold' => true, 'size' => 24, 'color' => 'blue']);
        $oTimeTextRun->addText("", ['bold' => true, 'size' => 24, 'color' => 'blue']);
        $oStagiaireTextRun = $oTable->addCell(5000, ['bgColor' => '7fbdef', 'valign' => 'center']);
        $oStagiaireTextRun->addText("DATE FIN DE STAGE", ['bold' => true, 'size' => 24, 'color' => 'red']);
        $oStagiaireTextRun->addText($aPost["datefin"], ['bold' => true, 'size' => 24, 'color' => 'red']);

        $fancyTableFontStyle3 = ['bold' => true, 'size' => 11, 'name' => 'calibri'];
        $fancyTableFontStyle4 = ['size' => 11, 'name' => 'calibri'];
        $tableFoot = $oSection->addTable($sFancyTableStyleName, $aFancyTableStyle, $aFancyFirstRowStyle);
        $tableFoot->addRow();
        $tableFoot->addCell(2500)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText("Dates", $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));
        $tableFoot->addCell(9500)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Suivi dossier', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));

        for ($i = 0; $i < 8; $i++) {
            $tableFoot->addRow();
            $tableFoot->addCell(1500)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText("", $fancyTableFontStyle4);
            $tableFoot->addCell(7500)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText("", $fancyTableFontStyle4);
        }
    }

    /**
     * Générer le document word : Dossier > Fiche > Page de garde
     * 
     * @param type $dossier
     * @param type $structure
     * @param type $aPost
     * @return type
     */
    public function createDocPageGarde(FormationDossier $dossier, $structure, $aPost,FormationDossierDateRepository $formationDossierDateRepository ) {
        $docword = new WordService();
        $aPidPageSettings = array(
            'headerHeight' => Converter::inchToTwip(.0),
            'footerHeight' => Converter::inchToTwip(.0),
            'marginLeft' => Converter::inchToTwip(.25),
            'marginRight' => Converter::inchToTwip(.25),
            'marginTop' => 0,
            'marginBottom' => 0,
        );
        
        // Générer le header du document
        $docword->createdocword()
            ->createheaderlogo($structure, [], $aPidPageSettings, [], false);
        // Générer le contenu du document
        $this->buildPagedeGarde($docword, $dossier, $aPost, $formationDossierDateRepository);
        // Générer le footer du document
        $docword->createfooterlogobdc(["width" => 500, "height" => 60], $structure);
        $fichier = $docword->saveDocument("Page_de_garde_" . $dossier->getRef(). date('_Y-m-d_His_')  . ".docx", "Dossier");

        return $fichier;
    }
    
    /**
     * Génération document word : Emmargement papier
     * 
     * @param FormationDossier $dossier
     * @param type $stagiaireid
     * @return type
     */
    public function CreateEmargDoc(FormationDossier $dossier, $stagiaireid, FormationDossierDateRepository $formationDossierDateRepository) {
        $fichier = null;
        $contact = $dossier->getIdClient();
        $opca = !is_null($dossier->getIdOpca()) ? trim($dossier->getIdOpca()->getNomStr()) : (!is_null($contact->getOpca()) ? trim($contact->getOpca()->getNomStr()) : "");
        $structure = !is_null($dossier->getIdStructure()) ? $dossier->getIdStructure()->getId() : (!is_null($contact->getStructure()) ? $contact->getStructure()->getId() : 0);
        $stagiaire = $this->em->getRepository(Contact::class)->find($stagiaireid);
        $nomstagiaire = !is_null($stagiaire) ? $stagiaire->getNom() . " " . $stagiaire->getPrenom() : " ";
        //$datestagecomplet = $this->em->getRepository(FormationDossierDate::class)->getDossierDate($dossier->getId());
        $datestagecomplet = $formationDossierDateRepository->getDossierDate($dossier->getId());

        if (1 === count($datestagecomplet) && $datestagecomplet[0]["joursSemaine"] != null && $datestagecomplet[0]["nbH"] != null) {
            $datestagecomplet = $this->generatenewdate($datestagecomplet);
        }
        
        // Calcul des informations : dates de stage
        $datestage = $this->generatedateformationdossier($datestagecomplet);
        
        $docword = new WordService();
        $isagefosagefice = $this->isMatchingopca($opca);
        $isagefos = $this->isMatchingopcaagefos($opca);
        
        // Génération du header du document emargement papier
        $docword->createdocword()
            ->createheaderlogoemarg($dossier, $contact, $structure, $opca, $nomstagiaire, $datestage);
        
        // Génération du Contenu du document
        $this->createcontentemmargement($docword, $datestage, $datestagecomplet, $nomstagiaire);
        
        // Génération footer
        if (1 === $structure && $isagefosagefice) {
            $docword->createfooterlogoamaergagefice();
        } elseif (2 === $structure) {
            $docword->createfooterlogoemarg();
        } else {
            $docword->createfooterlogoamaergapre();
        }
        
        $fichier = $docword->saveDocument("Emargement_" . $dossier->getIdClient() . '_' . $nomstagiaire . ".docx", "Emmargement");
        
        return $fichier;
    }

    /**
     * Génération contenu de l'emmargement papier 
     * 
     * @param type $docword
     * @param type $isagefos
     * @param type $datahoraire
     * @param type $datestagecomplet
     * @param type $nomstagiaire
     */
    private function createcontentemmargement($docword, $datahoraire, $datestagecomplet, $nomstagiaire) {
        $fancyTableStyleName = 'Fancy Table';
        $fancyTableStyle = array('borderSize' => 2, 'borderColor' => '000000', 'align' => 'center', 'valign'=> 'center', 'v-text-anchor' => 'middle');
        $fancyTableFirstRowStyle = array('borderBottomColor' => '000000');
        $fancyTableCellStyle = array('valign' => 'center');
        $fancyTableCellStyleStag = array('gridSpan' => 4, 'bgColor' => '000000');
        $fancyTableCellStyleStag2 = array('gridSpan' => 2, 'bgColor' => 'cccccc');
        $fancyTableCellStyleStag2AGEFOS = array('gridSpan' => 2);
        $fancyTableCellStyleForm = array('gridSpan' => 5, 'bgColor' => 'cccccc');
        $fancyTableFontStyle = array('bold' => true, 'size' => 10, 'name' => 'calibri', 'valign' => 'center');
        $fancyTableFontStyleAGEFOS = array('bold' => true, 'size' => 9, 'name' => 'calibri', 'valign' => 'center');
        $fancyTableFontStyle3 = array('bold' => true, 'size' => 11, 'name' => 'calibri');
        $fancyTableFontStyle4 = array('size' => 11, 'name' => 'calibri');
        $fancyTableFontStyle4AGEFOS = array('size' => 9, 'name' => 'calibri', 'valign' => 'center');
        $cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center');
        $cellRowSpan2 = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'cccccc');
        $cellRowContinue = array('vMerge' => 'continue');
        $cellbgColor = array('bgColor' => 'cccccc');
        $sections = $docword->getsectiondoc();
        
        // Test si journée complet 
        $isAmPm = $this->isAmPmStage($datestagecomplet);
        // APR-214 : Mise en forme : alignement vertical des lignes + Fix : horaires
        $aDatesAmPm = $this->horaireStageAmPm($datestagecomplet);
    
            // Génération des templates pour les dossiers non AGEFOS
            // Template journée complet : matin et après-midi
            if ($isAmPm) {
                // Mode journée complet : avec 2 colonne : matin + Arpès-midi
                $table = $sections->addTable($fancyTableStyle);
                $table->addRow();
                $table->addCell(2000, $cellRowSpan2)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Dates', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0, 'valign'=> 'center'));
                $table->addCell(3600, $fancyTableCellStyleStag2)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('MATIN', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));
                $table->addCell(3600, $fancyTableCellStyleStag2)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('APRES-MIDI', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));

                $table->addRow();
                $table->addCell(null, $cellRowContinue);
                $table->addCell(2000, $cellbgColor)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Horaires', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));
                $table->addCell(2600, $cellbgColor)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Signature stagiaire', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));
                $table->addCell(2000, $cellbgColor)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Horaires', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));
                $table->addCell(2600, $cellbgColor)->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Signature stagiaire', $fancyTableFontStyle3, array('align' => 'center', 'spaceAfter' => 0));
                
//                for ($i = 0; $i < count($datestagecomplet); $i = $i + 2) {
//                    $table->addRow(600); // APR-214 : Augmentation de la hauteur de chaque ligne de date
//                    $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText($datestagecomplet[$i]['dateD']->format("d-m-Y"), $fancyTableFontStyle4);
//                    $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText($datestagecomplet[$i]['dateD']->format("H:i") . ' - ' . $datestagecomplet[$i]['dateF']->format("H:i"), $fancyTableFontStyle4);
//                    $table->addCell(2600, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('', $fancyTableFontStyle4);
//                    $datei1 = "";
//                    if (isset($datestagecomplet[$i + 1]['dateD']) && isset($datestagecomplet[$i + 1]['dateF'])) {
//                        $datei1 = $datestagecomplet[$i + 1]['dateD']->format("H:i") . ' - ' . $datestagecomplet[$i + 1]['dateF']->format("H:i");
//                    }
//                    $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText($datei1, $fancyTableFontStyle4);
//                    $table->addCell(2600, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('', $fancyTableFontStyle4);
//                }
                
                // Fix horaire journée complete non cohérente
                foreach ($aDatesAmPm as $date => $aDateDetail) {
                    $table->addRow(600); // APR-214 : Augmentation de la hauteur de chaque ligne de date
                    // Colonne : Date
                    $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])
                        ->addText($date, $fancyTableFontStyle4);
                    // Colonne matin
                    $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])
                        ->addText((isset($aDateDetail['am']) ? $aDateDetail['am']: ''), $fancyTableFontStyle4);
                    $table->addCell(2600, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])
                        ->addText('', $fancyTableFontStyle4);
                    // Colonne après-midi
                    $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])
                        ->addText((isset($aDateDetail['pm']) ? $aDateDetail['pm']: ''), $fancyTableFontStyle4);
                    $table->addCell(2600, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])
                        ->addText('', $fancyTableFontStyle4);
                }
                
                
            } else {
                $table = $sections->addTable($fancyTableStyle);
                $table->addRow();
                $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Dates', $fancyTableFontStyle3);
                $table->addCell(1000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Nombre ' . htmlspecialchars("\n") . ' d\'heures', $fancyTableFontStyle3);
                $table->addCell(3000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Horaires', $fancyTableFontStyle3);
                $table->addCell(4000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Signature stagiaire', $fancyTableFontStyle3);
                
                for ($i = 0; $i < count($datestagecomplet); $i++) {
                    $table->addRow(600);
                    $table->addCell(2000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText($datestagecomplet[$i]["dateD"]->format("d-m-Y"), $fancyTableFontStyle4);
                    $table->addCell(1000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText($datestagecomplet[$i]['nbH'], $fancyTableFontStyle4);
                    $table->addCell(3000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText($datestagecomplet[$i]['dateD']->format("H:i") . ' - ' . $datestagecomplet[$i]['dateF']->format("H:i"), $fancyTableFontStyle4);
                    $table->addCell(4000, ['vAlign' => 'center'])->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('');
                }
            }
            
            $sections->addTextBreak(1);
            $table = $sections->addTable();
            $table->addRow(900);
            $table->addCell(7000)->addTextRun()->addText("");

            $table->addCell(4800, array('borderSize' => 6, 'borderColor' => '006699'))->addTextRun()->addText("     J’atteste avoir reçu mon attestation de fin de formation <w:br/>     " . $nomstagiaire . "<w:br/>", array('size' => 8, 'name' => 'calibri'));
            $sections->addTextBreak(1);

            $table = $sections->addTable();

            $table->addRow(1500);
            $table->addCell(7000)->addText("");

            $formateur = $table->addCell(5000)->addTable();
            $formateur->addRow();
            $formateur->addCell(2000, array('bgColor' => 'cccccc', 'borderSize' => 6, 'borderColor' => '000000'))->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Nom du formateur', array('bold' => true, 'size' => 9, 'name' => 'calibri'), array('align' => 'center', 'spaceAfter' => 0));
            $formateur->addCell(3000, array('bgColor' => 'cccccc', 'borderSize' => 6, 'borderColor' => '000000'))->addTextRun(['spaceAfter' => 0, 'size' => 1, 'align' => 'center'])->addText('Signature du formateur', array('bold' => true, 'size' => 9, 'name' => 'calibri'), array('align' => 'center', 'spaceAfter' => 0));
            $formateur->addRow(900);
            $formateur->addCell(2000, array('borderSize' => 6, 'borderColor' => '000000'))->addTextRun()->addText('');
            $formateur->addCell(3000, array('borderSize' => 6, 'borderColor' => '000000'))->addTextRun()->addText('');
        }

    private function configureExtractionSheet(Worksheet &$oSheet, $sType) {
        $oSheet->getDefaultColumnDimension()->setWidth(18);
        switch ($sType) {
            // APR-218 : Suivi des commission > Extraction > Mises en forme
            case ExtractionDossierType::GESTION_SUIVI_COM:
                $oSheet->getDefaultColumnDimension()->setAutoSize(true);
                // Figer les colonnes en auto-resize
                foreach(range('A','Z') as $columnID) {
                    $oSheet->getColumnDimension($columnID)->setAutoSize(true);
                }
                break;
            case ExtractionDossierType::GESTION_DOSSIER_LOC :
            case ExtractionDossierType::SUIVI_ENCAISSEMENT :
                $oSheet->getColumnDimension('E')->setWidth(21);
                $oSheet->getColumnDimension('F')->setWidth(23);
                $oSheet->getColumnDimension('G')->setWidth(23);
                break;
            case ExtractionDossierType::GESTION_DOSSIER_PROS :
                $oSheet->getColumnDimension('D')->setWidth(23);
                $oSheet->getColumnDimension('E')->setWidth(23);
                break;
            default:
        }
    }

    public function generateNumFacture($idDossier) {
        $ref = '';
        $facture = $this->em->getRepository(Facture::class)->findLastFacture($idDossier);
        if ($facture) {
            $ref = $facture['ref'];
        }

        return $ref;
    }
    
    /**
     * Calcul des informations sur la date de stage 
     * 
     * @param type $datestage
     * @return int
     */
    public function generatedateformationdossier($datestage) {
        $duree = 0;
        $nbjour = 0;
        $hours = [];
        $monthyear = [];
        $hours["am"] = array();
        $hours["pm"] = array();
        $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

        foreach ($datestage as $i => $date) {
            $duree += $date['nbH'];
            $calDate = $date['dateD'] instanceof DateTime ? $date['dateD']->format('d-m-Y') : null;
            $calHD = $date['dateD'] instanceof DateTime ? $date['dateD']->format('H:i') : null;
            $calHF = $date['dateF'] instanceof DateTime ? $date['dateF']->format('H:i') : null;
            // APR-215 : Fiche dossier > Emmargement papier > Problème sur horaire et le template récupéré
            $iHeureDiff = null;
            
            if ($date['dateD'] instanceof DateTime && $date['dateF'] instanceof Datetime) {
                $iHeureDiff = $date['dateF']->diff($date['dateD'])->h;
            }
            
            $tabCalD = explode("-", $calDate);
            $days = intval($tabCalD[0]);
            $moisannee = isset($tabCalD[1]) ? $tabMois[$tabCalD[1] - 1] . " " . $tabCalD[2] : "";

            if (!in_array($calHD, $hours)) {
                if ($calHD < self::HEURE_PM_DEBUT) { // Matin
                    $hours["am"][] = $calHD;
                } else if ($calHD >= self::HEURE_PM_DEBUT) { // Après midi
                    $hours["pm"][] = $calHD;
                }
            }
            if (!in_array($calHF, $hours)) {

                if ($calHF < self::HEURE_PM_DEBUT) { // Matin
                    $hours["am"][] = $calHF;
                } else if ($calHF >= self::HEURE_PM_DEBUT) { // Après-midi
                    $hours["pm"][] = $calHF;
                }
            }
            if (array_key_exists($moisannee, $monthyear)) {
                if (!in_array($days, $monthyear[$moisannee])) {
                    $monthyear[$moisannee][] = $days;
                    $nbjour++;
                }
            } else {
                $monthyear[$moisannee] = array($days);
                $nbjour++;
            }
        }

        $arreturn[0] = $duree;
        $arreturn[1] = $monthyear;
        $arreturn[2] = $hours;
        $arreturn[3] = $nbjour;

        return $arreturn;
    }

     // check if has not matin or apres midi
    public function checkValidFormationDate ($dataDate) {
        $bHasAm = array_key_exists('hasAm', $dataDate) ? $dataDate['hasAm'] : true;
        $bHasMatin = array_key_exists('hasMatin', $dataDate) ? $dataDate['hasMatin'] : true;
        $bHasDebut = $dataDate['dateD'] instanceof DateTime;
        $bHasFin = $dataDate['dateF'] instanceof DateTime;

        return ($bHasAm || $bHasMatin) && $bHasDebut && $bHasFin && ($dataDate['nbH'] > 0);
    }
    
    /**
     * Si toutes toutes les dates ne sont pas valide alors 
     * il s'agit des dates générées par la V1
     * 
     * @param type $aDates
     * @return type
     */
    public function checkIfOldFormationDates ($aDates) {
        $iBadFormat = 0;
        
        foreach ($aDates as $date) {
            if (!$this->checkValidFormationDate($date)) {
                $iBadFormat++;
            }
        }
        
        return $iBadFormat == count($aDates);
    }
    
    /**
     *
     * @param array $datedossier
     *
     * @return mixed
     */
    public function calculNbJetHr($datedossier) {
        $nbhN = 0;
        $nbhN1 = 0;
        $nbjN = 0;
        $nbjN1 = 0;
        $data['nbJ'] = 0;
        //debut traitement date
        //$arraydatedossier = array();
        $aDates = array();
        $data['nbH'] = 0;
        
        if (count($datedossier) > 0) {
            // Dates générées par l'application V1 ?
            $bIsOldFormationDates = $this->checkIfOldFormationDates($aDates);
            // check if has not matin or apres midi
            $fCheckDay = function ($dataDate) {
                $bHasAm = array_key_exists('hasAm', $dataDate) ? $dataDate['hasAm'] : true;
                $bHasMatin = array_key_exists('hasMatin', $dataDate) ? $dataDate['hasMatin'] : true;
                $bHasDebut = $dataDate['dateD'] instanceof DateTime;
                $bHasFin = $dataDate['dateF'] instanceof DateTime;

                return ($bHasAm || $bHasMatin) && $bHasDebut && $bHasFin && ($dataDate['nbH'] > 0);
            };

            if ($fCheckDay($datedossier[0])) { // ignore invald date
                $aDates[] = $datedossier[0]['dateD']->format("Y-m-d");
                $nbhN += $datedossier[0]['nbH'];
            }
            $anneeN = null;
            if ($datedossier[0]['dateD'] instanceof DateTime) {
                $anneeN = $datedossier[0]['dateD']->format("Y");
            }
            
            for ($i = 0; $i < count($datedossier); $i++) {
                if (!$fCheckDay($datedossier[$i]) && !$bIsOldFormationDates) {
                    continue;
                }
                if (is_null($anneeN)) {
                    $anneeN = $datedossier[$i]['dateD']->format("Y");
                }
                $aDates[] = $datedossier[$i]['dateD']->format("Y-m-d");
                $dp = $datedossier[$i]['dateD']->format("Y");
                if (strcmp($dp, $anneeN) == 0) {
                    $nbhN += $datedossier[$i]['nbH'];
                } else {
                    $nbhN1 += $datedossier[$i]['nbH'];
                }
            }
            
            $journonduplique = array_unique($aDates);
            if (count($journonduplique) > 0) {
                $date = explode('-', $journonduplique[0]);
                // Year of the date
                $anneeN = $date[0];
                $nbjN++;
                unset($journonduplique[0]);
                foreach ($journonduplique as $nonDP) {
                    $date = explode('-', $nonDP);
                    // Year of the date
                    $dnp = $date[0];
                    if (strcmp($dnp, $anneeN) == 0) {
                        $nbjN++;
                    } else {
                        $nbjN1++;
                    }
                }
            }
        } 

        $data['nbJ'] = $nbjN + $nbjN1;
        $data['nbH'] = $nbhN + $nbhN1;

        return $data;
    }

    public function generatenewdate($datestage) {
        $dayexiste = explode(",", $datestage[0]["joursSemaine"]);
        $dhourm = $datestage[0]["dHeureM"];
        $fhourm = $datestage[0]["fHeureM"];
        $dhouram = $datestage[0]["dHeureAm"];
        $fhouram = $datestage[0]["fHeureAm"];
        $daystart = new DateTime($datestage[0]["dateD"]->format('d-m-Y') . " " . $dhourm . ":00");
        $daystop = new DateTime($datestage[0]["dateF"]->format('d-m-Y' . " " . $fhouram . ":00"));
        $daterange = new DatePeriod($daystart, new DateInterval('P1D'), $daystop);
        
        foreach ($daterange as $date) {
            $tdy = $date->format("N");
            if (in_array($tdy, $dayexiste)) {
                $dateD = null;
                $dateF = null;
                $nbh = 0;
                if ($datestage[0]["hasMatin"]) {
                    $dateD = new DateTime($date->format('d-m-Y ' . $dhourm));
                    $dateF = new DateTime($date->format('d-m-Y ' . $fhourm));
                    $diff = $dateD->diff($dateF);
                    $minute = ($diff->i > 0) ? $diff->i / 60 : "0";
                    $nbh = $diff->h + $minute;
                    $newdatearray[] = [
                        "nbH" => $nbh,
                        "dateD" => $dateD,
                        "dateF" => $dateF,
                    ];
                }
                if ($datestage[0]["hasAm"]) {
                    $dateD = new DateTime($date->format('d-m-Y ' . $dhouram));
                    $dateF = new DateTime($date->format('d-m-Y ' . $fhouram));
                    $diff = $dateD->diff($dateF);
                    $minute = ($diff->i > 0) ? $diff->i / 60 : "0";
                    $nbh = $diff->h + $minute;
                    $newdatearray[] = [
                        "nbH" => $nbh,
                        "dateD" => $dateD,
                        "dateF" => $dateF,
                    ];
                }
            }
        }
        
        return $newdatearray;
    }

    /**
     * @param Dossier $dossier
     *
     * @return array
     */
    public function getStagiaireDossier(FormationDossier $dossier) {
        $aFDStagiaire = $this->em->getRepository(FormationDossierStagiaire::class)->findBy(['dossier' => $dossier]);
        $stagiaires = [];
        foreach ($aFDStagiaire as $fDStagiaire) {
            $stagiaires[] = $fDStagiaire->getStagiaire();
        }

        return $stagiaires;
    }

    public function deletethis(FormationDossier $dossier) {
        $em = $this->em;
        try {
            $factures = $em->getRepository(Facture::class)->findBy(["idDossier" => $dossier]);
            foreach ($factures as $facture) {
                $facture->setIdDossier(null);
                $em->persist($facture);
                $em->flush();
            }

            $stagiaires = $em->getRepository(FormationDossierStagiaire::class)->findBy(["dossier" => $dossier]);
            foreach ($stagiaires as $stagiaire) {
                $stagiaire->setDossier(null);
                $em->persist($stagiaire);
                $em->flush();
            }
            /* $commentaires = $em->getRepository(FormationDossierNote::class)->findBy(["formationDossier" => $dossier]);
              foreach($commentaires as $commentaire){
              $commentaire->setFormationDossier(null);
              $em->persist($commentaire);
              $em->flush();
              } */
            $avoirs = $em->getRepository(Avoir::class)->findBy(["idDossier" => $dossier]);
            foreach ($avoirs as $avoir) {
                $avoir->setIdDossier(null);
                $em->persist($avoir);
                $em->flush();
            }

            $em->remove($dossier);
            $em->flush();

            return true;
        } catch (\Exception $ex) {
            return 0;
        }
    }

    /**
     * Function to teste if dossier entity opca name contains agefis or agefos (for emmargement)
     * @param string $opcaname : the name of the opca
     * @return bool : true if $opcaname contains agefis or agefos
     */
    public function isMatchingopca($opcaname): bool {

        return (preg_match("/agefice/", strtolower($opcaname)) || preg_match("/agefos/", strtolower($opcaname)));
    }

    public function isMatchingopcaagefos($opcaname): bool {

        return (preg_match("/agefos/", strtolower($opcaname)));
    }

    /**
     * Génération d'un devis papier pour un dossier utilisant un template word
     */
    public function generateDevisPapier($aParams) {
        // Chargement 
        $devisPapierDocTemplate = "";
        /**@var FormationDossier $dossier */
        $dossier = $aParams['dossier'];
        /** APR-191: Gestion header et footer pour chaque type de structure */
        $structure = $dossier->getIdStructure()->getId();
        if($structure == 2) {
            // PROFORM: header et footer
         $devisPapierDocTemplate = new TemplateProcessor("DocPrint/Templates/FichePPL_templateProform.docx");
        } else {
            //header
            $devisPapierDocTemplate = new TemplateProcessor("DocPrint/Templates/FichePPL_template.docx");

        }
       // Mise à jour des paramètres dans le ficher word
        // Client
      /*   $devisPapierDocTemplate->setValue("client_nom",$aParams['client']);
        $sCP = $aParams['o_adresse'] instanceof Adresse ? $aParams['o_adresse']->getCodePostal() : '';
        $sVille = $aParams['ville'] instanceof Ville ? $aParams['ville']->getNomVille() : '';
        $devisPapierDocTemplate->setValue("client_code_postal_ville", $sCP . " ". $sVille);
        // Info stage
        $devisPapierDocTemplate->setValue("stagiaires", implode("<w:br/>", $aParams['stagiaires']));
        $devisPapierDocTemplate->setValue("stage_intitule", $dossier->getNom());
        $devisPapierDocTemplate->setValue("stage_lieu", $dossier->getLieu());
        
        // Date debut/fin stage
        $dateFormation = isset($aParams['o_dates_formation'][0]) ? $aParams['o_dates_formation'][0] : null ;
        
        $sDateDebutFin = "Du ";
        */
        /*if ($dateFormation) {
            
            if ($dateFormation['dateD'] instanceof DateTime) {
                $sDateDebutFin .= $dateFormation['dateD']->format('d-m-Y'); 
            }
            $sDateDebutFin .= " au ";
            
            if ($dateFormation['dateF'] instanceof DateTime) {
                $sDateDebutFin .= $dateFormation['dateF']->format('d-m-Y');
            }
        }*/
       /* $aFormatedDatesStage = $aParams['formated_dates_stage'];
        $sStageHoraire = "";
        
        if ($aFormatedDatesStage) {

            if ($aFormatedDatesStage['date_debut']['dateD'] instanceof DateTime) {
                $sDateDebutFin .= $aFormatedDatesStage['date_debut']['dateD']->format('d-m-Y');
            }
            $sDateDebutFin .= " au ";

            if ($aFormatedDatesStage['date_fin']['dateD'] instanceof DateTime) {
                $sDateDebutFin .= $aFormatedDatesStage['date_fin']['dateD']->format('d-m-Y');
            }
            
            
            if (isset($aFormatedDatesStage['hour_start_am']) && !empty($aFormatedDatesStage['hour_start_am'])) {
                $sStageHoraire .=  "de " . $aFormatedDatesStage['hour_start_am'] . " à ". $aFormatedDatesStage['hour_end_am'];
            }
            
            if (isset($aFormatedDatesStage['hour_start_pm']) && !empty($aFormatedDatesStage['hour_start_pm']) ) {
                $sStageHoraire .= (isset($aFormatedDatesStage['hour_start_am']) && !empty($aFormatedDatesStage['hour_start_am']) ? " et " : "") . $aFormatedDatesStage['hour_start_pm'] . " à " . $aFormatedDatesStage['hour_end_pm'];
            }
        }

        $devisPapierDocTemplate->setValue("stage_debut_fin", $sDateDebutFin);
        $devisPapierDocTemplate->setValue("stage_dates", str_replace('/', '<w:br/>', $aParams['calendrier']));
        $devisPapierDocTemplate->setValue("stage_duree_jour", $dossier->getDureeJours() . " Jours");
        //$sDureeParStagiaire = $dateFormation && $dateFormation['nbH'] ? number_format($dateFormation['nbH'], 1, ',', ' ') . " Heures " : "";
        $sDureeParStagiaire = isset($aParams['duree_par_stagiaire']) ? $aParams['duree_par_stagiaire'] . " Heures " : "";
        $devisPapierDocTemplate->setValue("stage_duree_par_stagiaire", $sDureeParStagiaire);
        
        // APR-208 : Problème de fusion : durée par stagiaire / Horaires du stage
//        $sStageHoraire = $dateFormation && $dateFormation['dHeureM'] ? $dateFormation['dHeureM'] . "/" .$dateFormation['fHeureM'] : "";
//        $sStageHoraire .= $dateFormation && $dateFormation['dHeureAm'] ?  "-" . $dateFormation['dHeureAm'] . "/" .$dateFormation['fHeureAm'] : "";
        
        $devisPapierDocTemplate->setValue("stage_horaire", $sStageHoraire);
        // Coût
        $devisPapierDocTemplate->setValue("cout_total_ht", number_format($aParams['montant_ht'], 2, ",", " ") . " €");
        $devisPapierDocTemplate->setValue("montant_tva", number_format($aParams['montant_tva'], 2, ",", " "). " €");
        $devisPapierDocTemplate->setValue("cout_total_ttc", number_format($aParams['montant_ttc'], 2, ",", " "). " €");

*/
        // Nouvelle fonction
        $nomclient = $aParams['client'];
        $contactadressedata = $aParams['o_adresse'];
        $adressedata = [
            "adresse" => "",
            "compAdresse"=>"",
            "codePostal"=>"",
            "ville"=>"",
            "principale"=>0,
        ];
        if(array_key_exists(0,$contactadressedata)){
            $adressedata = $contactadressedata[0];
        }
        if((int)$adressedata["principale"] != 1){
            foreach ($contactadressedata as $cntadr){
                if((int)$cntadr["principale"] == 1){
                    $adressedata = $cntadr;
                }
            }
        }
        $adresseclient = $aParams['adresse'];
        $codepostal = $contactadressedata->getCodepostal();
        $IdVille = $contactadressedata->getIdVille();
        if ($IdVille != null)
        {        
            $ville =  $this->em->getRepository(\App\Entity\Ville::class)->find($IdVille);
            $devisPapierDocTemplate->setValue("ville",utf8_decode($ville));
        }
        else
        {
            $devisPapierDocTemplate->setValue("ville","");

        }
        $datepropal = !is_null($dossier->getDateDebutPeriode())? $dossier->getDateDebutPeriode()->format("d/m/Y") : "-";
        $datepropal .= !is_null($dossier->getDateFinPeriode())? " au ".$dossier->getDateFinPeriode()->format("d/m/Y") : "";
        $datefr = Date::MOIS_FR;
        $devisPapierDocTemplate->setValue("nomclient",utf8_decode($nomclient));
        $devisPapierDocTemplate->setValue("adresseclient",utf8_decode($adresseclient));
        $devisPapierDocTemplate->setValue("codepostal",$codepostal);             
        $devisPapierDocTemplate->setValue("datedujour", date("d")." ".$datefr[date("m") - 1]." ".date("Y"));
        
        $sCompetence = "";
        // APR-105 : Champ Besoin > Formation = Compétence
        if ($dossier->getNom() != '') {
            $catalogue = $this->em->getRepository(Competence::class)->findOneBy(["competence" => $dossier->getNom()]);
            $sCompetence = !is_null($catalogue) ? utf8_decode("Formation : ".$catalogue->getCompetence()): null;
        }
        $devisPapierDocTemplate->setValue("formation", $sCompetence);
        $devisPapierDocTemplate->setValue("obectif", "fgsgsd");
        $devisPapierDocTemplate->setValue("personne", implode("<w:br/>", $aParams['stagiaires']));
        $devisPapierDocTemplate->setValue("prerequis","fgdgsd");
        $devisPapierDocTemplate->setValue("duree",utf8_decode("Durée : ").$aParams["formated_dates_stage"]["total_jours"]);
        $devisPapierDocTemplate->setValue("horaires", "dfgsgs");
        $devisPapierDocTemplate->setValue("lieu",utf8_decode($aParams["ville"]));
        $devisPapierDocTemplate->setValue("date", $datepropal);
        $devisPapierDocTemplate->setValue("tva", "20");
        

        // APR-131
        $tva = 20;
        $montantHT = $dossier->getMntDemande() ? $dossier->getMntDemande() : ""; 
        $montantTTC = floatval($montantHT) + (floatval($montantHT) * $tva / 100);
        $montantTTCTxt = $montantTTC > 0 ? number_format($montantTTC, 2, ',', ' ') . " €"  : '';
        $montahtHTTxt = !empty($montantHT) ? number_format($montantHT, 2, ',', ' ') . " €" : '';
        $tvaTxt = $tva > 0 ? "{".$tva."%}" : '';
            
        $tvaMnt = floatval($montantHT) / 100 * 20;
        $devisPapierDocTemplate->setValue("tvaMnt", number_format($tvaMnt, 2, ',', ' '));
        $devisPapierDocTemplate->setValue("cout", $montahtHTTxt);
        $devisPapierDocTemplate->setValue("tvaTxt", $tvaTxt);
        $devisPapierDocTemplate->setValue("coutTTC", $montantTTCTxt);



        // Génération du nom de fichier
        $nomfile = 'DocPrint/Dossier/'.date("Y-m-d").'/devis_papier_' . $dossier->getIdClient() . '_' . $dossier . '.docx';
        $rep = 'DocPrint/Dossier/'.date("Y-m-d");
        
        if(!is_dir($rep)){
            mkdir($rep);
        }
        
        $devisPapierDocTemplate->saveAs($nomfile);

        return $nomfile;
    }
    
    /**
     * Génération d'une convocation Proform pour un dossier utilisant un template word
     */
    public function generateConvocPro($aParams) {
        // Chargement 
        $devisPapierDocTemplate = "";
        /**@var FormationDossier $dossier */
        $dossier = $aParams['dossier'];
        $stagiaire = $aParams["stagiaires"];
        $rep = 'DocPrint/Dossier/'.date("Y-m-d");
        if(!is_dir($rep)){
            mkdir($rep);
        }
        $nomfile = 'DocPrint/Dossier/'.date("Y-m-d").'/Convocation_' . $dossier->getIdClient() . '_' . $dossier . '.docx';
        $i = 1;
        $zip ="";
        $res = "";
        $time = time();
        if(count($stagiaire) === 1){
                
        }else{
            $zip = new ZipArchive;
            $res = $zip->open('DocPrint/Dossier/'.date("Y-m-d").'/Convocation_' . $dossier->getIdClient() . '_' . $dossier .$time.'.zip', ZipArchive::CREATE);
        }
        foreach ($stagiaire as $fDStagiaire) {
            $i++;
            $devisPapierDocTemplate = new TemplateProcessor("DocPrint/Templates/ConvProform.docx");
            if ($dossier->getNom() == "SST")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['SST']);
            }
            elseif ($dossier->getNom() == "MAC SST")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['MACSST']);
            }
            elseif ($dossier->getNom() == "SSIAP 1")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['SSIAP1']);
            }
            elseif ($dossier->getNom() == "RECYCLAGE SSIAP")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['RecyclageSSIAP1']);
            }
            elseif ($dossier->getNom() == "REMISE A NIVEAU SSIAP1")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['ranSSIAP1']);
            }
            elseif ($dossier->getNom() == "SSIAP 2")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['SSIAP2']);
            }
            elseif ($dossier->getNom() == "Recyclage SSIAP 2")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['RecyclageSSIAP2']);
            }
            elseif ($dossier->getNom() == "Remise à niveau SSIAP 2")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['ranSSIAP2']);
            }
            elseif ($dossier->getNom() == "SSIAP 3")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['SSIAP3']);
            }
            elseif ($dossier->getNom() == "Recyclage SSIAP 3")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['RecyclageSSIAP3']);
            }
            elseif ($dossier->getNom() == "Remise à niveau SSIAP 3")
            {
                $devisPapierDocTemplate->setValue("condition", $aParams['ranSSIAP3']);
            }
            else {
                $devisPapierDocTemplate->setValue("condition", "");
            }
            $devisPapierDocTemplate->setValue("stagiairesNom", $fDStagiaire->getStagiaire()->getNom());
            $devisPapierDocTemplate->setValue("stagiairesPrenom",$fDStagiaire->getStagiaire()->getPrenom());
            $devisPapierDocTemplate->setValue("stagiairesCivilite",$this->em->getRepository(Civilite::class)->find($fDStagiaire->getStagiaire()->getIdCivilite())->getCivilite());
            $devisPapierDocTemplate->setValue("stage_intitule", $dossier->getNom());
            
            // Date debut/fin stage
            $dateFormation = isset($aParams['o_dates_formation'][0]) ? $aParams['o_dates_formation'][0] : null ;
            
            $sDateDebutFin = "Du ";
         
            $aFormatedDatesStage = $aParams['formated_dates_stage'];
            $sStageHoraire = "";
            
            if ($aFormatedDatesStage) {
    
                if ($aFormatedDatesStage['date_debut']['dateD'] instanceof DateTime) {
                    $sDateDebutFin .= $aFormatedDatesStage['date_debut']['dateD']->format('d-m-Y');
                }
                $sDateDebutFin .= " au ";
    
                if ($aFormatedDatesStage['date_fin']['dateD'] instanceof DateTime) {
                    $sDateDebutFin .= $aFormatedDatesStage['date_fin']['dateD']->format('d-m-Y');
                }
                
                
                if (isset($aFormatedDatesStage['hour_start_am']) && !empty($aFormatedDatesStage['hour_start_am'])) {
                    $sStageHoraire .=  "de " . $aFormatedDatesStage['hour_start_am'] . " à ". $aFormatedDatesStage['hour_end_am'];
                }
                
                if (isset($aFormatedDatesStage['hour_start_pm']) && !empty($aFormatedDatesStage['hour_start_pm']) ) {
                    $sStageHoraire .= (isset($aFormatedDatesStage['hour_start_am']) && !empty($aFormatedDatesStage['hour_start_am']) ? " et " : "") . $aFormatedDatesStage['hour_start_pm'] . " à " . $aFormatedDatesStage['hour_end_pm'];
                }
            }
    
            $devisPapierDocTemplate->setValue("stage_debut_fin", $sDateDebutFin);
            $devisPapierDocTemplate->setValue("stage_dates", str_replace('/', '<w:br/>', $aParams['calendrier']));
            $devisPapierDocTemplate->setValue("stage_duree_jour", $dossier->getDureeJours() . " Jours");
            //$sDureeParStagiaire = $dateFormation && $dateFormation['nbH'] ? number_format($dateFormation['nbH'], 1, ',', ' ') . " Heures " : "";
            $sDureeParStagiaire = isset($aParams['duree_par_stagiaire']) ? $aParams['duree_par_stagiaire'] . " Heures " : "";
            $devisPapierDocTemplate->setValue("stage_duree_par_stagiaire", $sDureeParStagiaire);
            
            // APR-208 : Problème de fusion : durée par stagiaire / Horaires du stage
    //        $sStageHoraire = $dateFormation && $dateFormation['dHeureM'] ? $dateFormation['dHeureM'] . "/" .$dateFormation['fHeureM'] : "";
    //        $sStageHoraire .= $dateFormation && $dateFormation['dHeureAm'] ?  "-" . $dateFormation['dHeureAm'] . "/" .$dateFormation['fHeureAm'] : "";
            
    $stagiaireFullName = $this->em->getRepository(Civilite::class)->find($fDStagiaire->getStagiaire()->getIdCivilite())->getCivilite() ."_". $fDStagiaire->getStagiaire()->getNom() . '_' . $fDStagiaire->getStagiaire()->getPrenom();
            $devisPapierDocTemplate->setValue("stage_horaire", $sStageHoraire);
            if(count($stagiaire) === 1){
                $nomfile = 'DocPrint/Dossier/'.date("Y-m-d").'/Convocation_de_'.$stagiaireFullName.'.docx';
            }else{
                $nomfile = 'DocPrint/Dossier/'.date("Y-m-d").'/Convocation_de_' .$stagiaireFullName.'.docx';
            }

            $devisPapierDocTemplate->saveAs($nomfile);

            if ($res) {
                $zip->addFile($nomfile,'Convocation_de_' . $stagiaireFullName.'.docx');
            }

        }
        sleep(2);
        if(count($stagiaire) > 1){
            $zip->close();
            $nomfile = 'DocPrint/Dossier/'.date("Y-m-d").'/Convocation_' . $dossier->getIdClient() . '_' . $dossier .$time.'.zip';
        }       
        
        // Génération du nom de fichier
        
        

        return $nomfile;
    }
    /**
     * Gestion des anciennes dates de formations
     */
    public function generateFormationDate(FormationDossier $dossier, FormationDossierDate $oFormationDate = null) {
        $aFormationDate = [
            'dateDebut' => null,
            'dateFin' => null,
            'matin' => null,
            'am' => null,
            'd_heure_m' => null,
            'f_heure_m' => null,
            'd_heure_am' => null,
            'f_heure_am' => null,
            'f_heure_am' => null,
            'joursSemaine' => []
        ];
        /**@var FormationDossierDateRepository $formationDateRepository */
        $formationDateRepository = $this->em->getRepository(FormationDossierDate::class);
        $aFormationDates = $formationDateRepository->getDossierDate($dossier->getId());
        $iCountDates = count($aFormationDates);
        
        if ($iCountDates == 0) {
            return $aFormationDate;
        }
        
        $isOldDatas = true;
        
        foreach ($aFormationDates as $formationDate) {
            // Les anciens dates formations n'ont pas de jours de semaine
            if (!is_null($formationDate['joursSemaine'])) {
                $isOldDatas = false;
            } else {
                // calcul des jours de la semaine sélectionné
                if ($formationDate['dateD'] instanceof DateTime) {
                    $aFormationDate['joursSemaine'][] = $formationDate['dateD']->format('N');
                }
            }
        }
        
        // Traitement si anciennes données : plusieurs lignes de dates
        if ($isOldDatas) {
            $aFormationDate['dateDebut'] = $aFormationDates[0]['dateD'] instanceof \DateTime ? $aFormationDates[0]['dateD']->format('d/m/Y') : null;
            $aFormationDate['dateFin'] = $aFormationDates[$iCountDates - 1]['dateF'] instanceof \DateTime ? $aFormationDates[$iCountDates - 1]['dateF']->format('d/m/Y') : null;
            $aFormationDate['matin'] = $this->hasMatinAm($aFormationDates[0]['dateF'])['matin'];
            $aFormationDate['am'] = $this->hasMatinAm($aFormationDates[$iCountDates - 1]['dateF'])['am'];
            $aFormationDate['d_heure_m'] = $aFormationDates[0]['dateD'] instanceof \DateTime ? $aFormationDates[0]['dateD']->format('H:i') : null;
            $aFormationDate['f_heure_m'] = $aFormationDates[0]['dateF'] instanceof \DateTime ? $aFormationDates[0]['dateF']->format('H:i') : null;
            $aFormationDate['d_heure_am'] = $aFormationDates[$iCountDates - 1]['dateD'] instanceof \DateTime ? $aFormationDates[$iCountDates - 1]['dateD']->format('H:i') : null;
            $aFormationDate['f_heure_am'] = $aFormationDates[$iCountDates - 1]['dateF'] instanceof \DateTime ? $aFormationDates[$iCountDates - 1]['dateF']->format('H:i') : null;
            $aFormationDate['joursSemaine'] = array_unique($aFormationDate['joursSemaine']);
        } else {
            if ($oFormationDate) {
                $aFormationDate['dateDebut'] = ($dossier->getDateDebutPeriode()) ? $dossier->getDateDebutPeriode()->format('d/m/Y') : null;
                $aFormationDate['dateFin'] = ($dossier->getDateFinPeriode()) ? $dossier->getDateFinPeriode()->format('d/m/Y') : null;
                $aFormationDate['matin'] = $oFormationDate->getHasMatin();
                $aFormationDate['am'] = $oFormationDate->getHasAm();
                $aFormationDate['d_heure_m'] = $oFormationDate->getDHeureM();
                $aFormationDate['f_heure_m'] = $oFormationDate->getFHeureM();
                $aFormationDate['d_heure_am'] = $oFormationDate->getDHeureAm();
                $aFormationDate['f_heure_am'] = $oFormationDate->getFHeureAm();
                $aFormationDate['f_heure_am'] = $oFormationDate->getFHeureAm();

                $aFormationDate['joursSemaine'] = explode(',', $oFormationDate->getJoursSemaine());
            }
        }
        
        
        return $aFormationDate;
    }
    
    
    /**
     * Test si 
     * @param DateTime $oDate
     * @return boolean
     */
    private function hasMatinAm(\DateTime $oDate) {
       $bCheck = ['matin' => null, 'am' => null];
       
       if ($oDate->format('H') < 14) {
           $bCheck['matin'] = true;
       } else if ($oDate->format('H') >= 12) {
           $bCheck['am'] = true;
       }
       
        return $bCheck;
    }
    
    
    /**
     * APR-217 : Duplication du bouton : Extraction dans suivi commission
     * 
     * @param string $sTypeExtract
     * @return string
     */
    public function getExtractHeader($sTypeExtract) {
        switch ($sTypeExtract) {
            case ExtractionDossierType::DOSSIER_EN_ATTENTE_ACCORD :
                $aHeader = [
                    'refDossier' => "N° Dossier",
                    'dateenvoi' => "Date création",
                    'structure' => "Entité",
                    'client' => "Client",
                    'opca' => "OPCA",
                    'mntDemande' => "Montant demandé",
                    'nomDossier' => "Intitulé stage",
                    'commercial' => "Commercial"
                ];
                break;
            case ExtractionDossierType::SUIVI_ENCAISSEMENT :
                $aHeader = [
                    'refFacture' => "N° Facture",
                    'facDossRef' => "N° Dossier",
                    'structure' => 'Structure',
                    'societe' => "Client",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'mntHtFac' => "Montant HT Facture",
                    'facTotalRegle' => "Montant encaissé",
                    'dateReelEnc' => "Date encaissement",
                    'commercial' => "Commercial"
                ];
                break;
            case ExtractionDossierType::GESTION_DOSSIER_LOC :
                $aHeader = [
                    'ref' => "N° Dossier",
                    'client' => "Client",
                    'debut' => "Date début période",
                    'fin' => "Date fin période",
                    'fixe' => "Montant HT Facturé",
                    'recu' => "Montant HT réglé",
                    'du' => " Montant HT dû",
                    'ref_facture' => "Ref facture",
                    'creation' => "Date émission facture"
                ];
                break;
            case ExtractionDossierType::DOSSIER_FACT_OPCA :
            case ExtractionDossierType::DOSSIER_FACT_CLIENT :
                $aHeader = [
                    'refDossier' => "N° Dossier",
                    'structure' => "Entité",
                    'client' => "Client",
                    'opca' => "OPCA",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'refFacture' => "N° Facture",
                    'facTotalRegle' => "Montant HT Facture",
                    'factCreation' => "Date facturation",
                    'nomDossier' => "Intitulé de formation",
                    'commercial' => "Commercial"
                ];
                break;
            case ExtractionDossierType::GESTION_DOSSIER_PROS :
            case ExtractionDossierType::GESTION_DOSSIER_PROFORM :
                $aHeader = [
                    'refDossier' => "N° Dossier",
                    'dateenvoi' => "Date création",
                    'client' => "CLIENT",
                    'nomDossier' => "Intitulé stage",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'statutDossier' => "Statut dossier",
                    'commercial' => "Commercial",
                    'opca' => "OPCA"
                ];
                break;
            case ExtractionDossierType::GESTION_SUIVI_COM :
                $aHeader = [
                    'refDossier' => "Ref Dossier",
                    'societe' => "Client",
                    'dateSignature' => "Date signature",
//                    'mntDemande' => "Montant demandé",
                    'mntDemande' => "Demandé", // APR-218 : Montant demandée => Demandé
//                    'mntDossierAcc' => "Montant accordé",
                    'mntDossierAcc' => "Accordé", // APR-218
//                    'facTotalRegle' => 'Montant HT Facture',
                    'facTotalRegle' => 'HT', // APR-218
//                    'montencaiss' => "Montant Encaisse TTC",
                    'montencaiss' => "TTC", // APR-218
//                    'tauxCom' => "Taux de commission",
                    'tauxCom' => "TAUX", // APR-218
//                    'montantcom' => "Montant de la commission",
                    'montantcom' => "COM", // APR-218
                    'comsStatut' => "Statut",
                    'dateReelEnc' => "Date paiement",
                ];
                break;
            case ExtractionDossierType::EXTRACTION_PERSONNALISE :
                $aHeader = [
                    'structure' => 'Structure',
                    'dateenvoi' => "Date de création",
                    'annee' => "Année de signature",
                    'mois' => "Mois de signature",
                    'datesDossier' => "Date de l'accord",
                    'factCreation' => 'Date de facturation',
                    'dateReelEnc' => "Date d'encaissement",
                    'commercial' => "Commercial",
                    'numDossier' => "N° Dossier",
                    'dispositif' => "Dispositif",
                    'datefin' => "Date fin de période",
                    'dureeJ' => "Durée J",
                    'dureeH' => "Durée H",
                    'durparjour' => "Nombre d'heures par jour",
                    'lieu' => "Lieu de formation",
                    'mntDemande' => "Montant demandé",
                    'mntDossierAcc' => "Montant accordé",
                    'mntHtFac' => 'Montant HT Facturé',
                    'facTotalRegle' => "Montant encaissé",
                    'nomDossier' => "Intitule formation",
                    'client' => "Client",
                    'dossierType' => "type dossier",
                    'nomclient' => "Nom et prenom",
                    'opca' => "Opca",
                    'tva' => "TVA",
                ];
                break;
            default:
                $aHeader = [];
        }

        $aHeader['statutDossier'] = "Statut dossier";

        return $aHeader;
    }
    
    
    
    /**
     * Dates de stages : distinguer les horaires matinée ou après midi
     * 
     * @param type $aDatesStage
     */
    public function horaireStageAmPm($aDatesStage = []) {
        $aFormatedDatesStage = [];
        
        foreach ($aDatesStage as $date) {
            // Matinée si date début < début après midi
            if ($date['dateD'] instanceof \DateTime) {
                if ($date['dateD']->format('H:i') < self::HEURE_PM_DEBUT) {
                    $aFormatedDatesStage[$date['dateD']->format('d-m-Y')]['am'] = $date['dateD']->format('H:i') . " - " . $date['dateF']->format('H:i');
                }
                
                if ($date['dateD']->format('H:i') >= self::HEURE_PM_DEBUT) {
                    $aFormatedDatesStage[$date['dateD']->format('d-m-Y')]['pm'] = $date['dateD']->format('H:i') . " - " . $date['dateF']->format('H:i');
                }
            }
        }
        
        return $aFormatedDatesStage;
    }
    
    
    /**
     * Template emmargement : test si journée complet ou sinon demi-journée
     * @param type $aDatesStage
     */
    public function isAmPmStage($aDatesStage = []) {
        $bHasAm = false;
        $bHasPm = false;
        
        foreach ($aDatesStage as $date) {
            // Matinée si date début < début après midi
            if ($date['dateD'] instanceof \DateTime) {
                if ($date['dateD']->format('H:i') < self::HEURE_PM_DEBUT) {
                    $bHasAm = true;
                }
                
                if ($date['dateD']->format('H:i') >= self::HEURE_PM_DEBUT) {
                    $bHasPm = true;
                }
            }
        }
        
        // Retourne vrai s'il y a am + pm
        return $bHasAm && $bHasPm;
    }
}
