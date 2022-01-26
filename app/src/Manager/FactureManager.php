<?php

namespace App\Manager;

use App\Constants\Date;
use App\Constants\Facture as FactureConstant;
use App\Constants\Structure as StructureConst;
use App\Constants\Typedom;
use App\Entity\Adresse;
use App\Entity\Avoir;
use App\Entity\Contact;
use App\Entity\Facture;
use App\Entity\FactureDomiciliation;
use App\Entity\FormationDossierDate;
use App\Entity\Structure;
use App\Entity\Ville;
use App\Repository\ContactRepository;
use App\Repository\FactureDomiciliationRepository;
use App\Repository\FactureRepository;
use App\Repository\FormationDossierDateRepository;
use App\Service\ExcelService;
use App\Utils\DateUtils;
use App\Utils\MoneyUtils;
use DateInterval;
use DatePeriod;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Calculation\DateTime;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpParser\Node\Expr\Clone_;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FactureManager {

    private $entitymanager;
    private $formationdossiermanager;
    private $container;
    private $factureRepository;
    
    const TARGET_FILE = "DocPrint/Facture";

    /**
     * ContactManager constructor.
     */
    public function __construct(EntityManagerInterface $em, FormationDossierManager $fm, 
        ContainerInterface $container,
        FactureRepository $factureRepository
    ) {
        $this->entitymanager = $em;
        $this->formationdossiermanager = $fm;
        $this->container = $container;
        $this->factureRepository = $factureRepository;
    }

    /**
     * Calcul Montant TTC
     *
     * @param string $montantHT
     * @param string $tva
     *
     * @return float
     */
    public function computeTTC($montantHT, $tva) {

        $fMontantHT = floatval(str_replace(",", ".", str_replace(" ", "", $montantHT)));
        $fTVA = floatval(str_replace(",", ".", str_replace(" ", "", $tva)));

        return $fMontantHT + $fTVA;
    }

    /**
     * Récupération montant
     */
    public function getFloatAmount($sAmount) {

        return floatval(str_replace(",", ".", str_replace(" ", "", $sAmount)));
    }

    /**
     * Génération d'une facture au format xlsx
     * APR-216 : La structure (entité) à prendre en compte et celle du dossier
     * 
     * @param Facture $facture
     * @param Contact|null $contact
     * @return string
     */
    public function createdocfacture(Facture $facture, ?Contact $contact, FormationDossierDateRepository $formationDossierDateRepository) {
        $contactadressedata = null;
        if (!is_null($contact)) {
            $contactadressedata = $this->entitymanager->getRepository(Adresse::class)->findOneBy(["idContact" => $contact->getId()]);
        }
        $idville = null;
        if (!is_null($contactadressedata)) {
            $idville = $contactadressedata->getIdVille();
        }
        $ville = !is_null($idville) ? $this->entitymanager->getRepository(Ville::class)->find($idville) : null;
        $ville = !is_null($ville) ? $ville->getNomVille() : "";
        $templatefiles = "factprospere.xls";
        $structure = $contact->getStructure();
        if ($facture->getIdStructure() != null && in_array($facture->getIdStructure(), [1, 2, 3])) {
            $structure = $this->entitymanager->getRepository(Structure::class)->find($facture->getIdStructure());
        }

        
        if (!is_null($structure) && StructureConst::APRENTIV === $structure->getId()) {
            if ($facture->getDest1() == "C") {
                $templatefiles = "factclientaprentiv.xls";
            } else {
                $templatefiles = "factopcaaprentiv.xls";
            }
        } elseif (!is_null($structure) && StructureConst::PROFORM === $structure->getId()) {
            if ($facture->getDest1() == "C") {
                $templatefiles = "factopcaproform.xls";
            } else {
                $templatefiles = "factopcaproform.xls";
            }
        } else { // facture not exist for other structure
//            $this->createdocfactprosper($facture, $contact, $contactadressedata, $worksheet);
            return null;
        }
        $spreadsheet = IOFactory::load('DocPrint/Templates/' . $templatefiles);
        $worksheet = $spreadsheet->getActiveSheet();
        if (!is_null($structure) && StructureConst::APRENTIV === $structure->getId()) {
            $this->createdocfactaprentiv($facture, $contact, $worksheet, $formationDossierDateRepository);
        } elseif (!is_null($structure) && StructureConst::PROFORM === $structure->getId()) {
            $this->createdocfactproform($facture, $contact, $worksheet, $formationDossierDateRepository);
        } else {
            $this->createdocfactprosper($facture, $contact, $contactadressedata, $worksheet);
        }
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $rep = self::TARGET_FILE . "/" . date("Y-m-d");
        if (!is_dir($rep)) {
            mkdir($rep);
        }
        $nomfile = "Facture_".$facture->getRef()."_". $facture->getId() . ".xlsx";
        $data["document"] = $rep . "/" . $nomfile;
        $pathfichier = $data["document"];
        $writer->save($data["document"]);

        return $pathfichier;
    }
    
    /**
     * Fonctionnalité permettant de générer un fichier avoir
     * @param Facture $avoir
     * @param Contact|null $contact
     * @return string
     */
    public function genererFichierAvoir(Avoir $avoir, ?Contact $contact, FormationDossierDateRepository $formationDossierDateRepository
    ) {
        
        $facture = $this->factureRepository->findOneBy(['idAvoirLiee' => $avoir]);
        
        if (!$facture) {
            throw new NotFoundHttpException("Erreur lors de l'édition : Pas de facture liée à l'avoir !");
        }
        
        $contactadressedata = null;
        
        if (!is_null($contact)) {
            $contactadressedata = $this->entitymanager->getRepository(Adresse::class)->findOneBy(["idContact" => $contact->getId()]);
        }
        
        $idville = null;
        if (!is_null($contactadressedata)) {
            $idville = $contactadressedata->getIdVille();
        }
        $ville = !is_null($idville) ? $this->entitymanager->getRepository(Ville::class)->find($idville) : null;
        $ville = !is_null($ville) ? $ville->getNomVille() : "";
        $templatefiles = "avoir.xlsx";
        $structure = $contact->getStructure();
        
        if ($avoir->getIdStructure() != null && in_array($avoir->getIdStructure()->getId(), [1, 2, 3])) {
            $structure = $this->entitymanager->getRepository(Structure::class)->find($avoir->getIdStructure()->getId());
        }

        $spreadsheet = IOFactory::load('DocPrint/Templates/' . $templatefiles);
        $worksheet = $spreadsheet->getActiveSheet();
        
        $this->createdocAvoiraprentiv($avoir, $contact, $worksheet, $formationDossierDateRepository);
        
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $rep = self::TARGET_FILE . "/" . date("Y-m-d");
        if (!is_dir($rep)) {
            mkdir($rep);
        }
        
        $numDossierInterne = $facture->getIdDossier()->getRef() . '-' .$facture->getIdDossier()->getDispositif();
        $nomfile = "Avoir " . $avoir->getRef() . " sur facture ". $facture->getRef() . " du " .date('d m Y') . " " .$avoir->getIdOpca()->getNomStr(). " ". $numDossierInterne . " " .$facture->getIntituleFacture() ." ".date('Ymd_hi') .".xlsx";
        $data["document"] = $rep . "/" . $nomfile;
        $pathfichier = $data["document"];
        $writer->save($data["document"]);

        return $pathfichier;
    }
    

    /**
     * @param Facture $facture
     * @param Contact $contact
     * @param $worksheet
     */
    private function createdocfactaprentiv(Facture $facture, ?Contact $contact, $worksheet, FormationDossierDateRepository $formationDossierDateRepository) {

        $aDataContact = $this->getFactureContactData($facture, $contact);
        $dossierdata = $this->getfacturedossierdata($facture, $formationDossierDateRepository);
        $nomdossier = $dossierdata["nomdossier"];
        $dateduau = $dossierdata["dateduau"];
        $res['nbJ'] = $dossierdata["res"]['nbJ'];
        $res['nbH'] = $dossierdata["res"]['nbH'];
        $nomstagiaire = $dossierdata['nomstagiaire'];
        $ndossopca = $dossierdata['ndossopca'];

        $worksheet->getCell('E8')->setValue($aDataContact['nomcontact']);
        $worksheet->getCell('E9')->setValue($aDataContact['adrcontact']);
        $worksheet->getCell('E10')->setValue($aDataContact['cpcontact'] . " " . $aDataContact['nomville']);

        $month = Date::MOIS_FR;
        $txtToday = "Paris, le " . $facture->getDateCreation()->format("d-m-Y");

        $datatotalfact = $this->getfacturetotal($facture);
        $facturedate = $facture->getDateCreation()->format("d-m-Y");

        $worksheet->getCell('E13')->setValue($txtToday);
        $worksheet->getCell('C15')->setValue("FACTURE N° " . $facture->getRef());
        if ($facture->getDest1() == "C") {
            $worksheet->getCell('A20')->setValue("Stagiaires : " . $nomstagiaire);
            $worksheet->getCell('A21')->setValue("Session de formation :  " . $facture->getIntituleFacture());
            $worksheet->getCell('A22')->setValue("Dates : " . $dateduau);
            $worksheet->getCell('A23')->setValue("Nb jour(s) : " . $res['nbJ']);
            $worksheet->getCell('A24')->setValue("Nb heure(s) : " . $res['nbH']);
            
            $worksheet->getCell('F21')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('F27')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('F28')->setValue($datatotalfact['tvatotalfact'] . " €");
            $worksheet->getCell('F29')->setValue($datatotalfact['ttctotalfact'] . " €");
            $worksheet->getCell('C33')->setValue($facturedate);
        } else {
            $worksheet->getCell('A20')->setValue("Société : " . $contact->getNomStr());
            $worksheet->getCell('A21')->setValue("Adhérent n° : " . $contact->getNoAdherent());
            $worksheet->getCell('A22')->setValue("Stagiaires : " . $nomstagiaire);
            $worksheet->getCell('A23')->setValue("Session de formation :  " . $nomdossier);
            $worksheet->getCell('A24')->setValue("Dates : " . $dateduau);
            $worksheet->getCell('A25')->setValue("Nb jour(s) : " . $res["nbJ"]);
            $worksheet->getCell('A26')->setValue("Nb heure(s) : " . $res["nbH"]);
            $worksheet->getCell('A27')->setValue("Dossier n° : " . $ndossopca);

            $worksheet->getCell('G23')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('G29')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('G30')->setValue($datatotalfact['tvatotalfact'] . " €");
            $worksheet->getCell('G31')->setValue($datatotalfact['ttctotalfact'] . " €");
            $worksheet->getCell('C33')->setValue($facturedate);
        }
    }

    /**
     * @param Facture $facture
     * @param Contact $contact
     * @param $adresse
     * @param $worksheet
     */
    private function createdocfactproform(Facture $facture, Contact $contact, $worksheet, FormationDossierDateRepository $formationDossierDateRepository) {
        $aDataContact = $this->getFactureContactData($facture, $contact);
        $dossierdata = $this->getfacturedossierdata($facture, $formationDossierDateRepository);
        // dd($dossierdata);
        $ndossopca = $dossierdata['ndossopca'];
        $nomdossier = $dossierdata["nomdossier"];
        $dateduau = $dossierdata["dateduau"];
        $res['nbJ'] = $dossierdata["res"]['nbJ'];
        $res['nbH'] = $dossierdata["res"]['nbH'];
        $nomstagiaire = $dossierdata['nomstagiaire'];

        $month = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
        $todaylong = date("d") . " " . $month[date("m") - 1] . " " . date("Y");

        $datatotalfact = $this->getfacturetotal($facture);

        $worksheet->getCell('E9')->setValue($aDataContact['nomcontact']);
        $worksheet->getCell('E10')->setValue($aDataContact['adrcontact']);
        $worksheet->getCell('E11')->setValue($aDataContact['cpcontact'] . " " . $aDataContact['nomville']);

        if ($facture->getDest1() == "C") {
            $worksheet->getCell('E13')->setValue("Paris, le " . $todaylong);
            $worksheet->getCell('B15')->setValue("Facture : " . $facture->getRef());
            $worksheet->getCell('A20')->setValue("Stagiaire(s) :" . $nomstagiaire);
            $worksheet->getCell('A21')->setValue("Session de formation : " . $nomdossier);
            $worksheet->getCell('A22')->setValue("Dates :" . $dateduau);
            $worksheet->getCell('A23')->setValue("Nb jour(s) :" . $res['nbJ']);
            $worksheet->getCell('A24')->setValue("Nb heure(s) :" . $res['nbH']);
            $worksheet->getCell('A25')->setValue("");
            $worksheet->getCell('A26')->setValue("");
            $worksheet->getCell('A27')->setValue("");

            $worksheet->getCell('G22')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('G29')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('G30')->setValue($datatotalfact['tvatotalfact'] . " €");
            $worksheet->getCell('G31')->setValue($datatotalfact['ttctotalfact'] . " €");
        } else {
            $worksheet->getCell('E13')->setValue("Paris, le " . $todaylong);
            $worksheet->getCell('B15')->setValue("FACTURE N° " . $facture->getRef());
            $worksheet->getCell('A20')->setValue("Société :" . $contact->getNomStr());
            $worksheet->getCell('A21')->setValue("Adhérent n° :" . $contact->getNoAdherent());
            $worksheet->getCell('A22')->setValue("Stagiaire(s) :" . $nomstagiaire);
            $worksheet->getCell('A23')->setValue("Session de formation : :" . $nomdossier);
            $worksheet->getCell('A24')->setValue("Dates :" . $dateduau);
            $worksheet->getCell('A25')->setValue("Nb jour(s) :" . $res['nbJ']);
            $worksheet->getCell('A26')->setValue("Nb heure(s) :" . $res['nbH']);
            $worksheet->getCell('A27')->setValue("Dossier n° :" . $ndossopca);

            $worksheet->getCell('G22')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('G29')->setValue($datatotalfact['httalfact'] . " €");
            $worksheet->getCell('G30')->setValue($datatotalfact['tvatotalfact'] . " €");
            $worksheet->getCell('G31')->setValue($datatotalfact['ttctotalfact'] . " €");
        }
    }

    /**
     * 
     * @param Avoir $avoir
     * @param Contact|null $contact
     * @param type $worksheet
     */
    private function createdocAvoiraprentiv(Avoir $avoir, ?Contact $contact, $worksheet, FormationDossierDateRepository $formationDossierDateRepository) {
        
        $facture = $this->factureRepository->findOneBy(['idAvoirLiee' => $avoir]);
        $aDataContact = $this->getFactureContactData($facture, $contact);
        $dossierdata = $this->getfacturedossierdata($facture, $formationDossierDateRepository);
        $nomdossier = $dossierdata["nomdossier"];
        $dateduau = $dossierdata["dateduau"];
        $res['nbJ'] = $dossierdata["res"]['nbJ'];
        $res['nbH'] = $dossierdata["res"]['nbH'];
        $nomstagiaire = $dossierdata['nomstagiaire'];
        $ndossopca = $dossierdata['ndossopca'];

        $worksheet->getCell('E8')->setValue($aDataContact['nomcontact']);
        $worksheet->getCell('E9')->setValue($aDataContact['adrcontact']);
        $worksheet->getCell('E10')->setValue($aDataContact['cpcontact'] . " " . $aDataContact['nomville']);

        $month = Date::MOIS_FR;
        $txtToday = "Paris, le " . date("d") . " " . $month[date("m") - 1] . " " . date("Y");

        $dataMontants = $this->getMontantsAvoir($avoir);
        $facturedate = $facture->getDateCreation()->format("d/m/Y");
        
        $worksheet->getCell('E13')->setValue($facturedate);
        $worksheet->getCell('C15')->setValue("AVOIR N° " . $avoir->getRef());
        
        $worksheet->getCell('A19')->setValue("Avoir sur facture N°: " . $facture->getRef());
        $worksheet->getCell('A20')->setValue("Stagiaires : " . $nomstagiaire);
        $worksheet->getCell('A21')->setValue("Session de formation :  " . $nomdossier);
        $worksheet->getCell('A22')->setValue("Dates : " . $dateduau);
        $worksheet->getCell('A23')->setValue("Nb jour(s) : " . $res["nbJ"]);
        $worksheet->getCell('A24')->setValue("Nb heure(s) : " . $res["nbH"]);
        $worksheet->getCell('A25')->setValue("Dossier n° : " . $ndossopca);
        
        $worksheet->getCell('F21')->setValue($dataMontants['ht_total_regle'] . " €");
        $worksheet->getCell('F27')->setValue($dataMontants['ht_total_regle'] . " €");
        $worksheet->getCell('F28')->setValue($dataMontants['mnt_tva'] . " €");
        
        $worksheet->getCell('F29')->setValue($dataMontants['mnt_ttc'] . " €");
        //$worksheet->getCell('C33')->setValue($facturedate);
    }
    
    private function getFactureContactData(Facture $facture, ?Contact $contact){

        $dossierdata = [];

        $nomstr = "";
        $opca = null;
        $idcontact = 0;
        $oContactRepo = $this->entitymanager->getRepository(Contact::class);

        if ($facture->getDest1() !== FactureConstant::DESTINATAIRE_CLIENT) {
            $opca = $facture->getIdOpca();
        }
        if (!is_null($opca) && $opca->getId() > 0) {
            // refresh opca from database
            $opca = $oContactRepo->findOneBy(['id' => $opca->getId()]);
            if ($opca instanceof Contact) {
                $nomstr = $opca->getNomStr();
                $idcontact = $opca->getId();

            }
        }
        if (($contact instanceof Contact) && $facture->getDest1() === FactureConstant::DESTINATAIRE_CLIENT) {
            $idcontact = $contact->getId();
            $nomstr = $contact->getNomStr();
        }

        $dossierdata['nomcontact'] = $nomstr;

        $adresse = null;
        if ($idcontact > 0) {
            $adresse = $this->entitymanager->getRepository(Adresse::class)->findOneBy(["idContact" => $idcontact]);
        }
        $adrcont = "";
        $cpadr = "";
        $nomville = "";
        if (!is_null($adresse)) {
            $adrcont = !is_null($adresse) ? $adresse->getAdresse() : "";
            $cpadr = (!is_null($adresse)) ? $adresse->getCodePostal() : "";
            $ville = (!is_null($adresse) && !is_null($adresse->getIdVille()) ) ? $this->entitymanager->getRepository(Ville::class)->find($adresse->getIdVille()) : null;
            $nomville = (!is_null($ville)) ? $ville->getNomVille() : "";
        }

        $dossierdata['adrcontact'] = $adrcont;
        $dossierdata['cpcontact'] = $cpadr;
        $dossierdata['nomville'] = $nomville;

        return $dossierdata;
    }

    /**
     *
     * @param Facture $facture
     * @param Contact $contact
     * @param Adresse $adresse     *
     * @param $worksheet
     */
    private function createdocfactprosper(Facture $facture, ?Contact $contact, ?Adresse $adresse, $worksheet) {
        $opca = null;
        if (!is_null($contact)) {
            $opca = $contact->getOpca();
        }
        $nomopca = !is_null($opca) ? $opca->getNomStr() : "";
        $adropca = !is_null($opca) ? $this->entitymanager->getRepository(Adresse::class)->findOneBy(["idContact" => $opca->getId()]) : null;
        $ville = !is_null($adropca) ? $this->entitymanager->getRepository(Ville::class)->find($adropca->getIdVille()) : "";
        $villeopca = !is_null($ville) && $ville != "" ? $ville->getNomVille() : "";
        $adropca = !is_null($adropca) ? $adropca->getAdresse() : "";
        $adrscnt = !is_null($adresse) ? $adresse->getAdresse() : "";
        $adrcp = !is_null($adresse) ? $adresse->getCodePostal() . " " . $ville : $ville;

        $datatotalfact = $this->getfacturetotal($facture);

        $worksheet->getCell("C5")->setValue($contact->getNomStr());
        $worksheet->getCell("C7")->setValue($adrscnt);
        $worksheet->getcell("C8")->setValue($adrcp);

        $worksheet->getCell("A1")->setValue("FACTURE : " . $facture->getRef());

        $worksheet->getCell('A13')->setValue($facture->getIntituleFacture());
        $worksheet->getCell('B13')->setValue($facture->getPourcentageTva());
        $worksheet->getCell('C13')->setValue($datatotalfact['httalfact']);
        $worksheet->getCell('D13')->setValue('1');
        $worksheet->getCell("E13")->setValue($datatotalfact['httalfact']);
        $worksheet->getCell('A14')->setValue($facture->getIntituleFacture());
        $worksheet->getCell('B14')->setValue($datatotalfact['tvatotalfact']);
        $worksheet->getCell('C14')->setValue($datatotalfact['httalfact']);
        $worksheet->getCell('D14')->setValue('1');
        $worksheet->getCell('E14')->setValue($datatotalfact['httalfact']);

        $worksheet->getCell('E30')->setValue($datatotalfact['httalfact'] . " €");
        $worksheet->getCell('E31')->setValue($datatotalfact['tvatotalfact'] . " €");
        $worksheet->getCell('E32')->setValue($datatotalfact['ttctotalfact'] . " €");
        $worksheet->getCell('E35')->setValue($facture->getDateCreation()->format("d-m-Y"));
        $worksheet->getCell('E36')->setValue("OPCA : " . $nomopca); // OPCA
        $worksheet->getCell('E37')->setValue("Adresse OPCA : " . $adropca . "(" . $villeopca . ")"); // Addresse OPCA
    }

    private function getfacturetotal(Facture $facture) {
        $data = [];
        $data['httalfact'] = number_format(floatval($facture->getTotalRegleHt()), 2, ",", " ");
        $data['tvatotalfact'] = number_format(floatval($facture->getMntTva()), 2, ",", " ");
        $data['ttctotalfact'] = number_format(floatval($facture->getTotalTtc()), 2, ",", " ");
        if ($data['ttctotalfact'] == "0,00" || (is_null($data['ttctotalfact']) && !is_null($data['httalfact']) && !is_null($data['tvatotalfact']))) {
            $data['ttctotalfact'] = number_format($facture->getTotalRegleHt() + $facture->getMntTva(), 2, ",", " ");
        }

        return $data;
    }
    
    private function getMontantsAvoir(Avoir $avoir) {
        $data = [];
        $data['ht_total_regle'] = number_format(floatval($avoir->getTotalHt()), 2, ",", " ");
        $data['mnt_tva'] = number_format(floatval($avoir->getMntTva()), 2, ",", " ");
        $fMontantTTC = floatval($avoir->getTotalRegleHt()) + floatval($avoir->getMntTva());
        $data['mnt_ttc'] = number_format($fMontantTTC, 2, ",", " ");
        
//        if ($data['mnt_ttc'] == "0,00" || (is_null($data['mnt_ttc']) && !is_null($data['ht_total_regle']) && !is_null($data['mnt_tva']))) {
//            $data['mnt_ttc'] = number_format($avoir->getTotalRegleHt() + $avoir->getMntTva(), 2, ",", " ");
//        }

        return $data;
    }

    private function getfacturedossierdata(Facture $facture, FormationDossierDateRepository $formationDossierDateRepository) {
        $iddossier = $facture->getIdDossier();
        $data['ndossier'] = "";
        $data['nomdossier'] = "";
        $data['dateduau'] = "";
        $data['res']['nbJ'] = "";
        $data['res']['nbH'] = "";
        $data['ndossopca'] = "";
        if (!is_null($iddossier)) {
            $data['ndossier'] = $iddossier->getRef();
            $iDispoLength = strlen($iddossier->getDispositif());
            // set suffixe if different from dispositif
            if (substr_compare($iddossier->getRef(), $iddossier->getDispositif(), -1 * $iDispoLength, $iDispoLength) !== 0) {
                $data['ndossier'] .= "-" . $iddossier->getDispositif();
            }

            $data['nomdossier'] = $iddossier->getNom();
            $sDateDebut = $iddossier->getDateDebutPeriode() instanceof \DateTime ? $iddossier->getDateDebutPeriode()->format("d-m-Y") : '';
            $sDateFin = $iddossier->getDateFinPeriode() instanceof \DateTime ? $iddossier->getDateFinPeriode()->format("d-m-Y") : '';
            $sDate = ($sDateDebut && $sDateFin) ? "$sDateDebut au $sDateFin" : ($sDateDebut ? $sDateDebut : $sDateFin);
            $data['dateduau'] = $sDate;
            //$datestagecomplet = $this->entitymanager->getRepository(FormationDossierDate::class)->getDossierDate($iddossier->getId());
            $datestagecomplet = $formationDossierDateRepository->getDossierDate($iddossier->getId());

            if (1 === count($datestagecomplet) && $datestagecomplet[0]["joursSemaine"] != null && $datestagecomplet[0]["nbH"] != null) {
                $datestagecomplet = $this->formationdossiermanager->generatenewdate($datestagecomplet);
            }
            $data['res'] = $this->formationdossiermanager->calculNbJetHr($datestagecomplet);
            $data['ndossopca'] = $iddossier->getNdossopca();
        }

        $stagiaires = (!is_null($iddossier) && $iddossier->getId() > 0) ? $this->formationdossiermanager->getStagiaireDossier($iddossier) : null;
        $nomstagiaire = [];
        if (!is_null($stagiaires) && count($stagiaires) > 0) {
            foreach ($stagiaires as $stagiaire) {
                $nomstagiaire[] = $stagiaire->getNom() . " " . $stagiaire->getPrenom();
            }
        }
        $data['nomstagiaire'] = implode(", ", $nomstagiaire);

        return $data;
    }

    public function extractFactureDomExcel(FactureDomiciliation $oFacture) {
        /** @var ExcelService $phpSpreadSheet */
        $phpSpreadSheet = $this->container->get('crm.app.service.excel');

        $oDomiciliation = $oFacture->getDomiciliation();
        $sTemplateDir = $this->container->getParameter('docprint_template');

        $oDDebut = $oDomiciliation->getDebut();
        if ($oDDebut instanceof \DateTime) {
            $sDate = $oDDebut->format('d ')
                . DateUtils::getFrenchMonth($oDDebut->format('m'))
                . " " . $oDDebut->format('Y');
            $iTimeDebut = $oDDebut->getTimestamp();
        } else {
            $sDate = "";
            $iTimeDebut = 0;
        }

        $oDFin = $oDomiciliation->getFin();
        if ($oDFin instanceof \DateTime && ($oDomiciliation->getFin()->getTimestamp() !== $iTimeDebut)) {
            $sDate .= " au " . $oDFin->format('d ')
                . DateUtils::getFrenchMonth($oDFin->format('m'))
                . " " . $oDFin->format('Y');
        }
        $idClient = $oDomiciliation->getClient()->getId();

        $mTva = doubleval($oFacture->getTvaTotal());

        switch ($oDomiciliation->getType()->getId()) {
            case Typedom::LOCATION :
                /** @var Spreadsheet $oSpreadSheet */
                $oSpreadSheet = $phpSpreadSheet->generateWorkSheet(realpath($sTemplateDir . "/" . FactureConstant::EXCEL_TEMPLATE_LOCATION));
                
                $bTarifReduit = $oFacture->getRemise() > 0 ? true : false;
                
                if ($bTarifReduit) {
                    $oSpreadSheet = $phpSpreadSheet->generateWorkSheet(realpath($sTemplateDir . "/" . FactureConstant::EXCEL_TEMPLATE_LOCATION_TARIF_REDUIT));
                }
                
                $oSheet = $oSpreadSheet->getActiveSheet();
                $this->setFactureDomHeader($oSheet, $oFacture->getNumero(), $idClient);
                //$oSheet->setCellValue('A13', "Paris, le " . date("d") . " " . DateUtils::getFrenchMonth(date("m")) . " " . date("Y"));
                // APR-223
                $oSheet->setCellValue('A13', "Paris, le " . $oFacture->getDate()->format("d") . " " . DateUtils::getFrenchMonth($oFacture->getDate()->format("m")) . " " . $oFacture->getDate()->format("Y"));

                $sIntitule = 'LOCATION SALLE "' . $oDomiciliation->getSalle()->getLibelle() . '"';
                $oSheet->setCellValue('A19', $sIntitule);
                $oSheet->setCellValue('A20', "Date : $sDate");
                $oSheet->setCellValue('A21', "Nb jours : " . $oDomiciliation->getNbj());
                $oSheet->setCellValue('G19', doubleval($oFacture->getHt()));

                //$iRemise = $oDomiciliation->getPartenaire() ? doubleval($oFacture->getRemise()) : 0;
                $iRemise = $bTarifReduit ? doubleval($oFacture->getRemise()) : 0;
                
                $oSheet->setCellValue('G23', -1 * $iRemise);
//                $oSheet->setCellValue('G25', $this->printMoneyValue($oFacture->getHt()));
                $oSheet->setCellValue('F26', "TVA à " . $oFacture->getTva() . "%");
                $oSheet->getColumnDimension('F')->setWidth(18);
//                $oSheet->setCellValue('G26', $this->printMoneyValue($oFacture->getTvaTotal()));
                //$oSheet->setCellValue('G26', $mTva);
                
                //$sDatePaiement = $oFacture->getDate() instanceof \DateTime ?
                //    $oFacture->getDate()->format('d/m/Y') : '';
                
                // Retour APR-59 : La date d'échéance doit être la date du jour
                $iLigneDateEchance = 30;
                
                if ($bTarifReduit) {
                    $iLigneDateEchance = 31;
                }
                
                $oSheet->setCellValue('C'.$iLigneDateEchance, date('d/m/Y'));
                break;
            case Typedom::DOMICILIATION :

                /* gestion domiciliation depot */
                /** @var FactureDomiciliationRepository $oFactureDomRepo */
                $oFactureDomRepo = $this->entitymanager->getRepository(FactureDomiciliation::class);
                $aFacturesClients = $oFactureDomRepo->getFactureByClient($idClient, Typedom::DOMICILIATION);
                $bIsFirstFacture = empty($aFacturesClients) || ($aFacturesClients[0]['id'] === $oFacture->getIdfacturedom());
                
                // APR-113 : Gestion champ dépôt de garantie
                if ($oFacture->getDepotGarantie()) { // if first facture
                    $sTemplateFile = FactureConstant::EXCEL_TEMPLATE_DOMICILIATION_DEPOT;
                } else {
                    $sTemplateFile = FactureConstant::EXCEL_TEMPLATE_DOMICILIATION;
                }
                /* fin gestion domiciliation depot */

                /** @var Spreadsheet $oSpreadSheet */
                $oSpreadSheet = $phpSpreadSheet->generateWorkSheet(realpath($sTemplateDir . "/" . $sTemplateFile));
                $oSheet = $oSpreadSheet->getActiveSheet();
                $this->setFactureDomHeader($oSheet, $oFacture->getNumero(), $idClient);
                $oSheet->setCellValue('A17', "FACTURE N°: " . $oFacture->getNumero());
                //$oSheet->setCellValue('A14', "Paris, le " . date("d") . " " . DateUtils::getFrenchMonth(date("m")) . " " . date("Y"));
                // APR-223
                $oSheet->setCellValue('A14', "Paris, le " . $oFacture->getDate()->format("d") . " " . DateUtils::getFrenchMonth($oFacture->getDate()->format("m")) . " " . $oFacture->getDate()->format("Y"));

                $sIntitule = "Domiciliation du $sDate";
                $oSheet->setCellValue('A21', $sIntitule);
                //Calcul nombre de mois entre date debut et fin
                $begin = ($oDomiciliation->getDebut())->format('Y/m/d');
                $end = ($oDomiciliation->getFin())->format('Y/m/d');
                $start_date = new \DateTime($begin);
                $end_date = new \DateTime($end);
                $end_date->modify('+1 day'); // 01-01 à 30-06 = 6mois au lieu de 5mois 29j 
                $dd = date_diff($start_date,$end_date);
                $jours = "";

                if ($dd->d > 0) {
                    //$jours = $dd->d.' jour(s)';
                    $jours = "";
                } 
                
                $oSheet->setCellValue('A22', "Durée : " . ($dd->m + ($dd->y *12) ).' mois '.$jours);
                // APR-156 : tarif mensuel = montant fixé / nombre de mois
                $fTarifMensuel = $dd->m == 0 ? $oDomiciliation->getFixe() : $oDomiciliation->getFixe() / $dd->m;
                $oSheet->setCellValue('A23', " Tarif mensuel : " . $this->printMoneyValue($fTarifMensuel) .  " HT");
                $oSheet->setCellValue('G21', doubleval($oFacture->getHt()));
//                $oSheet->setCellValue('G27', $this->printMoneyValue($oFacture->getHt()));
                $oSheet->setCellValue('F28', "TVA à " . $oFacture->getTva() . "%");
                $oSheet->getRowDimension('30')->setRowHeight(34);
//                $oSheet->setCellValue('G28', $this->printMoneyValue($oFacture->getTvaTotal()));
                $oSheet->setCellValue('G28', $mTva);
                $fTtc = doubleval($oFacture->getTtc());
//                $oSheet->setCellValue('G29', $this->printMoneyValue($fTtc));
                
                // APR-113 : Gestion champ dépôt de garantie
                if ($oFacture->getDepotGarantie()) {
                    $fDepot = doubleval($oFacture->getDepotGarantie());
                    $oSheet->setCellValue('G30', $fDepot);
                }
                $sDatePaiement = $oFacture->getDate() instanceof \DateTime ?
                    $oFacture->getDate()->format('d/m/Y') : '';
                
                // Retour APR-59 : La date d'échéance doit être la date du jour 
                // = date d'édition de la facture
                $oSheet->setCellValue('C34', date('d/m/Y'));
                break;
            default:
                $oSpreadSheet = $phpSpreadSheet->generateWorkSheet();
        }
        $sFormat = 'Xlsx';

        $oSheet->getColumnDimension('F')->setWidth(18);
        $oSheet->getColumnDimension('G')->setWidth(20);

        return $phpSpreadSheet->saveInTemp($oSpreadSheet, $sFormat);
    }

    private function printMoneyValue($fVal){
        return MoneyUtils::format(doubleval($fVal)) . " €";
    }

    private function setFactureDomHeader(Worksheet &$oSheet, $sRefFacture, $idClient) {
        /** @var ContactRepository $contactRepo */
        $contactRepo = $this->entitymanager->getRepository(Contact::class);
        $aDataClient = $contactRepo->findContactDataCivil($idClient);
        if (empty($aDataClient)) {
            return;
        }
        $oSheet->setCellValue('E8', $aDataClient['nomSociete']);
        $oSheet->setCellValue('E9', $aDataClient['adresse']);
        $oSheet->setCellValue('E10', $aDataClient['codepostal']);
        $oSheet->setCellValue('F10', $aDataClient['ville']);
        $oSheet->setCellValue('A16', "FACTURE N° $sRefFacture");
    }

    /**
     * Récupération des montant HTN et HTN+1
     * A partir des dates spécifier lors de la création d'un dossier
     */
    public function getMontantHTNHTN1(FormationDossierDate $formationDossierDate, $montantHT) {

        $oDateDebut = $formationDossierDate->getDateD();
        $oDateFin = $formationDossierDate->getDateF();
        $aMontant = [
            'HTN' => $montantHT,
            'HTN+1' => 0
        ];

        // Si la formation est n'est pas dans la même année
        if (($oDateDebut instanceof \DateTime) && ($oDateFin instanceof \DateTime) && ($oDateDebut->format('Y') != $oDateFin->format('Y'))) {
            // Nombre de jour dans l'année en cours
            $sJoursSemainesStage = $formationDossierDate->getJoursSemaine();
            $aJoursSemainesStage = explode(',', $sJoursSemainesStage);
            // Récupération de la dernière jour de l'année N
            $sEndOfYearN = date($oDateDebut->format('Y') . '-12-31');
            $oEndOfYearN = new \DateTime($sEndOfYearN);
            // Récupération de la première date de l'année N+1
            $sBeginOfYearN1 = date($oDateFin->format('Y') . '-01-01');
            $oBeginOfYearN1 = new \DateTime($sBeginOfYearN1);
            // Calcul du nombre de jour dans année en cours et année N+1
            $iNombreJoursN = $this->calculerNombreJours($oDateDebut, $oEndOfYearN, $aJoursSemainesStage);
            $iNombreJoursN1 = $this->calculerNombreJours($oBeginOfYearN1, $oDateFin, $aJoursSemainesStage);
            // Calcul du montant HT par jour
            $iMontantParJour = $this->calculerMontantHTJournalier($montantHT, $iNombreJoursN + $iNombreJoursN1);
            // Calcul montant HTN et HTN+1
            $aMontant = [
                'HTN' => ($iMontantParJour * $iNombreJoursN),
                'HTN+1' => ($iMontantParJour * $iNombreJoursN1)
            ];
        }

        return $aMontant;
    }

    /**
     * Calcul le nombre de jour total d'une formation
     * En prenant compte des choix sur la plage de date de formation 
     * et les jours de la semaine choisis lors de la création de dossier
     */
    public function calculerNombreJours(\DateTime $oDateDebut, \DateTime $oDateFin, $aJoursFormation) {
        $iNombreJours = 0;

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($oDateDebut, $interval, $oDateFin->add($interval));

        // Boucle sur l'intervale de date dans l'année en cours N
        foreach ($period as $oDtPeriode) {
            $numJourSemaine = date('w', strtotime($oDtPeriode->format('Y-m-d')));

            if (in_array($numJourSemaine, $aJoursFormation)) {
                $iNombreJours++;
            }
        }

        return $iNombreJours;
    }
    
    /**
     * 
     * @param type $montantHT
     * @param type $nbJourTotal
     */
    public function calculerMontantHTJournalier($montantHT, $nbJourTotal) {
        
        return ($montantHT * 1 / $nbJourTotal);
    }

    /**
     * Génrérer un numero de facture par structure
     *
     * @param $sStructure
     * @return string|null
     */
    public function generateNumero($sStructure){
        $sYear = date('Y');
        /** @var FactureRepository $factureRepository */
        $factureRepository = $this->entitymanager->getRepository(Facture::class);

        /** @var FactureDomiciliationRepository $factureDomRepository */
        $factureDomRepository = $this->entitymanager->getRepository(FactureDomiciliation::class);

        $iStructure = array_key_exists($sStructure, StructureConst::TYPE_STRUCTURE) ? StructureConst::TYPE_STRUCTURE[$sStructure] : 0;

        switch ($iStructure){
            case StructureConst::APRENTIV :
                $sStrucRef = StructureConst::PREFIX_FACT_APRENTIV;
                break;
            case StructureConst::PROFORM :
                $sStrucRef = StructureConst::PREFIX_FACT_PROFORM;
                break;
            default:
                $sStrucRef = null;
        }

        if (is_null($sStrucRef)) {
            return null;
        }

        $sPrefix = "F{$sStrucRef}{$sYear}";

        $aLastRefFact = $factureRepository->getLastRefByStruc($sPrefix);
        $aLastRefFact = array_merge($aLastRefFact, $factureDomRepository->getLastRefByStruc($sPrefix));
        rsort($aLastRefFact);

        $aLastRef = reset($aLastRefFact);

        $iRef = $aLastRef ? (int) substr($aLastRef['numero'], -4, 4) : 0;
        $iRef++;

        if ($iRef > 9999) {
            return false;
        }

        $sRef = "F{$sStrucRef}{$sYear}" . str_pad($iRef, 4, '0', STR_PAD_LEFT);

        return $sRef;
    }
    
    /**
     * Set destinataire facture
     * 
     * @param Facture $oFacture
     * @return string
     */
    public function setDest1(Facture $oFacture) {
        $sDest = null;
        
        if (!$oFacture->getDest1()) {
            
            if (!$oFacture->getOpcaClt()) {
                return null;
            }
            
            $sDest = $oFacture->getOpcaClt() == 'FACLT' ? 'C' : 'O';
        }
        
        return $sDest;
    }
}
