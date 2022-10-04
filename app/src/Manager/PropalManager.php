<?php

namespace App\Manager;

use App\Constants\Date;
use App\Entity\Adresse;
use App\Entity\Competence;
use App\Entity\Propal;
use App\Service\WordService;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Ville;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Style\Image;

class PropalManager
{
    public function generatedoc (Propal $propal, EntityManagerInterface $entitymanager)
    {
        $docword = new TemplateProcessor("DocPrint/Templates/FichePPL_template.docx");
        $client = $propal->getClientpropal();
        $nomclient = !is_null($client) ? $client->getNomStr() : "";
        $adresrepo = $entitymanager->getRepository(Adresse::class);
        $contactadressedata = !is_null($client) ? $adresrepo->findAdressesContactPrintData($client->getId()) : null;
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
        $adresseclient = $propal->getAdresse();
        $codepostal = $propal->getCodepostal();
        $IdVille = $propal->getVille();
        if ($IdVille != null)
        {        
            $ville =  $entitymanager->getRepository(\App\Entity\Ville::class)->find($IdVille);
            $docword->setValue("ville",$ville);
        }
        else
        {
            $docword->setValue("ville","");

        }
        $datepropal = !is_null($propal->getDatedebutpropal())? $propal->getDatedebutpropal()->format("d/m/Y") : "-";
        $datepropal .= !is_null($propal->getDatefinpropal())? " au ".$propal->getDatefinpropal()->format("d/m/Y") : "";
        $datefr = Date::MOIS_FR;
        $docword->setValue("nomclient",$nomclient);
        $docword->setValue("adresseclient",$adresseclient);
        $docword->setValue("codepostal",$codepostal);             
        $docword->setValue("datedujour", date("d")." ".$datefr[date("m") - 1]." ".date("Y"));
        
        $sCompetence = "";
        // APR-105 : Champ Besoin > Formation = Compétence
        if ($propal->getFormation() instanceof Competence) {
            $sCompetence = $propal->getFormation()->getCompetence();
        }
        
        $docword->setValue("formation", $sCompetence);
        $docword->setValue("obectif", $propal->getObjectif());
        $docword->setValue("personne", $propal->getPersonnes());
        $docword->setValue("prerequis",$propal->getPrerequis());
        $docword->setValue("duree",$propal->getDurrej());
        $docword->setValue("horaires", $propal->getDurreh());
        $docword->setValue("lieu",$propal->getLieupropal());
        $docword->setValue("date", $datepropal);
        $docword->setValue("tva", $propal->getMontantTVA());
        

        // APR-131
        $tva = $propal->getMontantTVA() ? $propal->getMontantTVA() : 0;
        $montantHT = $propal->getCoutht() ? $propal->getCoutht() : ""; 
        $montantTTC = floatval($montantHT) + (floatval($montantHT) * $tva / 100);
        $montantTTCTxt = $montantTTC > 0 ? number_format($montantTTC, 2, ',', ' ') . " €"  : '';
        $montahtHTTxt = !empty($montantHT) ? number_format($montantHT, 2, ',', ' ') . " €" : '';
        $tvaTxt = $tva > 0 ? "{".$tva."%}" : '';
            
        $tvaMnt = floatval($montantHT) / 100 * $propal->getMontantTVA();
        $docword->setValue("tvaMnt", number_format($tvaMnt, 2, ',', ' '));
        $docword->setValue("cout", $montahtHTTxt);
        $docword->setValue("tvaTxt", $tvaTxt);
        $docword->setValue("coutTTC", $montantTTCTxt);

        $nomfile = 'DocPrint/Propal/'.date("Y-m-d").'/Proposition_commerciale.docx';
        $rep = 'DocPrint/Propal/'.date("Y-m-d");
        if(!is_dir($rep)){
            mkdir($rep);
        }
        $docword->saveAs($nomfile);

        return $nomfile;
    }

    public function generatedocproform (Propal $propal, EntityManagerInterface $entitymanager)
    {        
        $docword = new TemplateProcessor("DocPrint/Templates/FichePPL_templateProform.docx");
        $client = $propal->getClientpropal();
        $nomclient = !is_null($client) ? $client->getNomStr() : "";
        $adresrepo = $entitymanager->getRepository(Adresse::class);
        $contactadressedata = !is_null($client) ? $adresrepo->findAdressesContactPrintData($client->getId()) : null;
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
        $adresseclient = $propal->getAdresse();
        $codepostal = $propal->getCodepostal();
        $IdVille = $propal->getVille();
        if ($IdVille != null)
        {        
            $ville =  $entitymanager->getRepository(\App\Entity\Ville::class)->find($IdVille);        
            $docword->setValue("ville",$ville);
        }
        else
        {
            $docword->setValue("ville","");

        }
        $datepropal = !is_null($propal->getDatedebutpropal())? $propal->getDatedebutpropal()->format("d/m/Y") : "-";
        $datepropal .= !is_null($propal->getDatefinpropal())? " au ".$propal->getDatefinpropal()->format("d/m/Y") : "";
        $datefr = Date::MOIS_FR;
        $docword->setValue("nomclient",$nomclient);
        $docword->setValue("adresseclient",$adresseclient);
        $docword->setValue("codepostal",$codepostal);
        $docword->setValue("datedujour", date("d")." ".$datefr[date("m") - 1]." ".date("Y"));
        
        $sCompetence = "";
        // APR-105 : Champ Besoin > Formation = Compétence
        if ($propal->getFormation() instanceof Competence) {
            $sCompetence = $propal->getFormation()->getCompetence();
        }
        
        $docword->setValue("formation", $sCompetence);
        $docword->setValue("obectif", $propal->getObjectif());
        $docword->setValue("personne", $propal->getPersonnes());
        $docword->setValue("prerequis",$propal->getPrerequis());
        $docword->setValue("duree",$propal->getDurrej());
        $docword->setValue("horaires", $propal->getDurreh());
        $docword->setValue("lieu",$propal->getLieupropal());
        $docword->setValue("date", $datepropal);
        $docword->setValue("tva", $propal->getMontantTVA());
        

        // APR-131
        $tva = $propal->getMontantTVA() ? $propal->getMontantTVA() : 0;
        $montantHT = $propal->getCoutht() ? $propal->getCoutht() : ""; 
        $montantTTC = floatval($montantHT) + (floatval($montantHT) * $tva / 100);
        $montantTTCTxt = $montantTTC > 0 ? number_format($montantTTC, 2, ',', ' ') . " €"  : '';
        $montahtHTTxt = !empty($montantHT) ? number_format($montantHT, 2, ',', ' ') . " €" : '';
        $tvaTxt = $tva > 0 ? "{".$tva."%}" : '';
            
        $tvaMnt = floatval($montantHT) * ($propal->getMontantTVA() / 100);
        $docword->setValue("tvaMnt", number_format($tvaMnt, 2, ',', ' '));
        $docword->setValue("cout", $montahtHTTxt);
        $docword->setValue("tvaTxt", $tvaTxt);
        $docword->setValue("coutTTC", $montantTTCTxt);

        $nomfile = 'DocPrint/Propal/'.date("Y-m-d").'/Proposition_commerciale.docx';
        $rep = 'DocPrint/Propal/'.date("Y-m-d");
        if(!is_dir($rep)){
            mkdir($rep);
        }
        $docword->saveAs($nomfile);

        return $nomfile;
    }
     /**
     * Fonction pour la génération de fichier word conventio,
     * @param $templatehtml
     *
     * @return Exception|string|void
     */
    public function createDocConv($templatehtml, $propal) {
        $fichier = null;
        $docword = new WordService();
        $docword->createdocword()
                ->createheaderpourconvention($propal);
        $docword->addcontenttemplate($templatehtml, $docword);
        $sections = $docword->getsectiondoc();
        $table = $sections->addTable('convention');
        $table->addRow();

        $table->addCell(7500)->addText("Pour l’entreprise : ".$propal->getClientpropal(), array('name'=> 'Arial','size' => 9));
        $table->addCell(2500)->addText("Pour l’organisme : ", array('name'=> 'Arial','size' => 9));
        $table->addRow();
        $table->addCell(7500)->addText("Cachet et Signature ", array('name'=> 'Arial','size' => 9));
        $table->addCell(2500)->addText("Cachet et Signature ", array('name'=> 'Arial','size' => 9));
        if ($propal->getEntityPropal() == 'proform') 
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
       
        $fichier = $docword->saveDocument("Convention.docx");

        return $fichier;
    }

}