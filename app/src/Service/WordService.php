<?php

namespace App\Service;

use App\Entity\Propal;
use Doctrine\ORM\EntityManager;
use Exception;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\Style\Image;
use PhpOffice\PhpWord\Style\Language;

class WordService
{

    const OPCA_AGEFOS = "AGEFOS";
    const OPCA_AGEFICE = "AGEFICE";
    /**
     * @var PhpWord
     */
    private $docword;

    /**
     * @var
     */
    private $section;

    CONST TARGET_FILE = "DocPrint";

    /**
     * WordService constructor.
     */
    public function __construct()
    {
        $this->docword = new PhpWord();
        $this->section = null;
        $this->docword->getSettings()->setThemeFontLang(new Language(Language::FR_FR));
    }


    /**
     * @param string $name
     * @param array $options
     *
     * @return WordService
     */
    public function createdocword(): self
    {
        $this->docword->getCompatibility()->setOoxmlVersion(15);

        return $this;
    }

    /**
     * Fonction pour la création du header du bon de commande (image à gauche du titre)
     *
     * @return WordService
     */
    public function createheaderlogobdc(): self
    {

        $sections= $this->docword->addSection();
        $this->setsectiondoc($sections);
        $sectionStyle = $sections->getStyle();
        $sectionStyle->setOrientation($sectionStyle::ORIENTATION_LANDSCAPE);
        $sectionStyle->setMarginTop(1500);
        $sections->addImage('crm/images/DocPrint/aprentiv.png', array(
            'width' => 200,
            'height' => 110,
            'positioning' => Image::POSITION_RELATIVE,
            'wrappingStyle' => 'square',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
            'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
            'posVertical' => Image::POSITION_VERTICAL_TOP,
        ));


        return $this;
    }

    /**
     *
     * @return WordService
     */
    public function createheaderlogobdcproform(): self
    {
        $sections= $this->docword->addSection();
        $this->setsectiondoc($sections);
        $sectionStyle = $sections->getStyle();
        $sectionStyle->setMarginTop(380);
        $sectionStyle->setMarginLeft(840);
        $sectionStyle->setMarginRight(840);
        $sectionStyle->setMarginBottom(380);
        $sections->addImage('crm/images/DocPrint/logo_proform.png', array(
            'width' => 280,
            'height' => 90,
            'positioning' => Image::POSITION_RELATIVE,
            'wrappingStyle' => 'square',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
            'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
            'posVertical' => Image::POSITION_VERTICAL_TOP,
        ));

        return $this;
    }

    /**
     *
     * @param array $data
     * @return WordService
     */
    public function createheaderlogoconvention(array $data): self
    {
        $adr="47 Rue Vivienne 75002 PARIS";
        $srt="Siret : 443 287 263 000 34";
        $naf="Numéro de Déclaration d’existence : 11 75 372 18 75";
        $ttl="APRENTIV’ CONSEIL";
        
        if($data["contact"]["type"] == 2){
            $srt="Siret : 489 748 772 00022";
            $naf="Numéro de Déclaration d’existence : 11 75 408 35 75";
            $ttl="PROFORM FRANCE";
        }
        elseif($data["contact"]["type"] == 3){
            $ttl="PROSPERE";
            $srt="Siret :";
            $naf="Numéro de Déclaration d’existence : ";
        }


        $this->docword->setDefaultParagraphStyle(
            array(
                'spaceAfter' => Converter::pointToTwip(0),
                'spacing' => 110,
                'lineHeight' => 1,
            ));
        $PidPageSettings = array(
            'headerHeight'=> Converter::inchToTwip(.2),
            'footerHeight'=> Converter::inchToTwip(.2),
            'marginLeft'  => Converter::inchToTwip(.75),
            'marginRight' => Converter::inchToTwip(.75),
            'marginTop'   => 0,
            'marginBottom'=> 0,
        );
        $sections = $this->docword->addSection($PidPageSettings);
        $this->setsectiondoc($sections);
        $sections->addImage('crm/images/DocPrint/conventionde.png', array(
            'width' => 480,
            'height' => 35,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => 'margin',
            'posVerticalRel' => 'line',
        ));
        $sections->addText('Entre les soussignés : ', array('name'=> 'Arial','size' => 9),array('underline' => 'dash'));
        $sections->addTextBreak(0);
        $sections->addText("L’organisme de formation : ".htmlspecialchars("\t\t\t\t\t")."Le client :", array('name'=> 'Arial','size' => 9,'bold' => true));
        $sections->addTextBreak(0);
        $sections->addText($ttl.htmlspecialchars("\t\t\t\t\t\t").$data["contact"]["nomSociete"], array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText($adr.htmlspecialchars("\t\t\t\t\t").$data["adresse"]["adresse"], array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText("".htmlspecialchars("\t\t\t\t\t\t\t\t").$data["adresse"]["codePostal"]." ".$data["adresse"]["ville"], array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText($srt.htmlspecialchars("\t\t\t\t\t\t")."Siret : ".$data["contact"]["siret"], array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText($naf.htmlspecialchars("\t\t\t\t\t\t")."", array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText("Représenté par Monsieur Pascal MUNIER - Directeur général".htmlspecialchars("\t\t\t\t\t\t")."", array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(1);


        return $this;
    }

    /**
     *
     * @param int $structure
     * @param array $dataentente
     * @param array $PidPageSettings
     *
     * @return $this
     */
    public function createheaderlogo($structure = 0, array $dataentente = array(), array $PidPageSettings = [], $bAddTextBreakAfter = true)
    {
        if (empty($PidPageSettings)) {
            $PidPageSettings = array(
                'headerHeight'=> Converter::inchToTwip(.0),
                'footerHeight'=> Converter::inchToTwip(.0),
                'marginLeft'  => Converter::inchToTwip(.75),
                'marginRight' => Converter::inchToTwip(.75),
                'marginTop'   => 0,
                'marginBottom'=> 0,
            );
        }

        $sections= $this->docword->addSection($PidPageSettings);
        $this->setsectiondoc($sections);

        if ($bAddTextBreakAfter) {
            $sections->addTextBreak(1);
        }
        
        $header = $sections->addHeader();
        $tableEntete = $header->addTable('myTableEntete');

        $tableEntete->addRow();
        $tableEntete->addCell(3000)->addText("", array('name'=> 'arial','size' => 10));

        $tableEntete->addRow();
        $image = $structure === 2 ? 'crm/images/DocPrint/logo_proform.png': 'crm/images/DocPrint/aprentiv.png';
        $tableEntete->addCell()->addImage($image, array(
            'width' => 110,
            'height' => 55,
            'positioning' => Image::POSITION_RELATIVE,
            'wrappingStyle' => 'square',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
            'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
            'posVertical' => Image::POSITION_VERTICAL_TOP,
        ));

        return $this;
    }

        /**
     *
     * @param array $dataentente
     * @param array $PidPageSettings
     * @return $this
     */
    public function createheaderpourconvention(Propal $propal, EntityManager $em)
    {

        $adr="47 Rue Vivienne 75002 PARIS";
        $srt="Siret : 443 287 263 000 34";
        $naf="Numéro de Déclaration d’existence : 11 75 372 18 75";
        $ttl="APRENTIV’ CONSEIL";
        $currentVille = "";
        $IdVille = $propal->getVille();
        if ($IdVille != null)
        {        
            $ville = $em->getRepository(\App\Entity\Ville::class)->find($IdVille);        
            $currentVille = $ville->getNomVille();
        }
        else
        {
            $currentVille = "";
        }
        if($propal->getEntitypropal() == "proform"){
            $srt="Siret : 489 748 772 00022";
            $naf="Numéro de Déclaration d’existence : 11 75 408 35 75";
            $ttl="PROFORM FRANCE";
        }
        elseif($propal->getEntitypropal() == "prospere"){
            $ttl="PROSPERE";
            $srt="Siret :";
            $naf="Numéro de Déclaration d’existence : ";
        }


        $this->docword->setDefaultParagraphStyle(
            array(
                'spaceAfter' => Converter::pointToTwip(0),
                'spacing' => 110,
                'lineHeight' => 1,
            ));
        $PidPageSettings = array(
            'headerHeight'=> Converter::inchToTwip(.2),
            'footerHeight'=> Converter::inchToTwip(.2),
            'marginLeft'  => Converter::inchToTwip(.75),
            'marginRight' => Converter::inchToTwip(.75),
            'marginTop'   => 300,
            'marginBottom'=> 0,
        );
        $sections = $this->docword->addSection($PidPageSettings);
        $this->setsectiondoc($sections);
        $sections->addImage('crm/images/DocPrint/conventionde.png', array(
            'width' => 480,
            'height' => 35,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => 'margin',
            'posVerticalRel' => 'line',
        ));
        $sections->addText('Entre les soussignés : ', array('name'=> 'Arial','size' => 9),array('underline' => 'dash'));
        $sections->addTextBreak(0);
        $sections->addText("L’organisme de formation : ".htmlspecialchars("\t\t\t\t\t")."Le client :", array('name'=> 'Arial','size' => 9,'bold' => true));
        $sections->addTextBreak(0);
        $sections->addText($ttl.htmlspecialchars("\t\t\t\t\t\t").$propal->getClientpropal(), array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText($adr.htmlspecialchars("\t\t\t\t\t").$propal->getAdresse(), array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText("".htmlspecialchars("\t\t\t\t\t\t\t\t").$propal->getCodepostal()." ".$currentVille, array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(0);
        $sections->addText($naf.htmlspecialchars("\t\t\t\t\t\t")."", array('name'=> 'Arial','size' => 9));
        $sections->addTextBreak(1);
        return $this;




        if (empty($PidPageSettings)) {
            $PidPageSettings = array(
                'headerHeight'=> Converter::inchToTwip(.0),
                'footerHeight'=> Converter::inchToTwip(.0),
                'marginLeft'  => Converter::inchToTwip(.75),
                'marginRight' => Converter::inchToTwip(.75),
                'marginTop'   => 0,
                'marginBottom'=> 0,
            );
        }

        $sections= $this->docword->addSection($PidPageSettings);
        $this->setsectiondoc($sections);

        if ($bAddTextBreakAfter) {
            $sections->addTextBreak(1);
        }
        
        $header = $sections->addHeader();
        $tableEntete = $header->addTable('myTableEntete');

        $tableEntete->addRow();
        $tableEntete->addCell(3000)->addText("", array('name'=> 'arial','size' => 10));

        $tableEntete->addRow();
        $image = $structure === 2 ? 'crm/images/DocPrint/logo_proform.png': 'crm/images/DocPrint/aprentiv.png';
        $tableEntete->addCell()->addImage($image, array(
            'width' => 110,
            'height' => 55,
            'positioning' => Image::POSITION_RELATIVE,
            'wrappingStyle' => 'square',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
            'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
            'posVertical' => Image::POSITION_VERTICAL_TOP,
        ));

        return $this;
    }

    /**
     * Fonction pour ajouter l'image footer d'un document (barre avec numero fisc)
     *
     * @param array $arraywidth : ["width"=>integer,"height"=>int]
     *
     * @return WordService
     */
    public function createfooterlogobdc($arraywidth = ["width" => 800,"height" =>90], $structure = 1): self
    {
        $footer = $this->section->createFooter();
        if($structure == 2) {
            $footer->addImage('crm/images/DocPrint/foot_proform.jpg', array(
                'width' => $arraywidth["width"],
                'height' => $arraywidth["height"],
                'wrappingStyle' => 'square',
                'posVerticalRel' => 'line',
            ));

        } else {
            $footer->addImage('crm/images/DocPrint/foot.jpg', array(
                'width' => $arraywidth["width"],
                'height' => $arraywidth["height"],
                'wrappingStyle' => 'square',
                'posVerticalRel' => 'line',
            ));
        }


        return $this;
    }

    /**
     * Fonction pour ajouter le footer logo proform dans un document
     *
     * @return WordService
     */
    public function createfooterlogobdcproform(): self
    {
        $footer = $this->section->createFooter();
        $footer->addImage('crm/images/DocPrint/foot_proform.jpg', array(
            'width' => 500,
            'height' => 60,
            'wrappingStyle' => 'square',
            'posVerticalRel' => 'line',
        ));

        return $this;
    }

    /**
     * Fonction pour créer le header (image) logo aprentiv dans un document
     * (exemple ordre de mission dans client/prospect > voir)
     *
     * @return WordService
     */
    public function createheaderlogoomi(string  $ref = "") : self
    {
        $PidPageSettings = array(
            'headerHeight'=> Converter::inchToTwip(.0),
            'footerHeight'=> Converter::inchToTwip(.0),
            'marginLeft'  => Converter::inchToTwip(.75),
            'marginRight' => Converter::inchToTwip(.75),
            'marginTop'   => 0,
            'marginBottom'=> 0,
        );

        $sections= $this->docword->addSection($PidPageSettings);
        $this->setsectiondoc($sections);

        $sections->addTextBreak(1);
        $header = $sections->addHeader();
        $tableEntete = $header->addTable('myTableEntete');

        $tableEntete->addRow();
        $tableEntete->addCell(3000)->addText("", array('name'=> 'arial','size' => 10));

        $tableEntete->addRow();
        $tableEntete->addCell()->addImage('crm/images/DocPrint/aprentiv.png', array(
            'width' => 110,
            'height' => 55,
            'positioning' => Image::POSITION_RELATIVE,
            'wrappingStyle' => 'square',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
            'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
            'posVertical' => Image::POSITION_VERTICAL_TOP,
        ));
        $tableEntete->addCell(7000)->addText('ORDRE DE MISSION<w:br/>'.$ref, array('name'=> 'arial','size' => 14,'bold' => true),array('align' => 'center'));
        $tableEntete->addCell(3000)->addText("<w:br/><w:br/><w:br/>Date : ".date("d-m-Y"), array('name'=> 'arial','size' => 10));

        return $this;
    }

    /**
     * Fonnction pour ajouter le footer d'un document avec un texte au milieu des deux petit image +
     * image footer avec numero fisc (exemple client/prospect > voir > ordre de mission)
     *
     * @param string $textefooter
     */
    public function createfooterlogoomi($textefooter = "")
    {
        $footer = $this->section->createFooter();
        if($textefooter != ""){
            $footer->addText($textefooter, array('name'=> 'calibri','size' => 10));
        }
        $table33 = $footer->addTable();
        $table33->addRow();
        $table33->addCell(4000)->addImage('crm/images/DocPrint/imgl.jpg', array(
            'width' => 75,
            'height' => 40,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posVerticalRel' => 'line',
        ));
        $table33->addCell(16000)->addTextRun()->addText(" ", array('name'=> 'calibri','size' => 10));
        $table33->addCell(4000)->addImage('crm/images/DocPrint/imgr.jpg', array(
            'width' => 65,
            'height' => 40,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_RIGHT,
            'posVerticalRel' => 'line',
        ));
        $footer ->addImage('crm/images/DocPrint/foot.jpg', array(
            'width' => 500,
            'height' => 35,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posVerticalRel' => 'line',
        ));
    }
    /**
     * Fonnction pour ajouter le footer d'un document avec un texte au milieu des deux petit image +
     * image footer avec numero fisc (exemple client/prospect > voir > ordre de mission)
     *
     * @param string $textefooter
     */
    public function createfooterlogoamaergagefice()
    {
        $footer = $this->section->createFooter();
        $table33 = $footer->addTable();
        $table33->addRow();
        $table33->addCell()->addImage('crm/images/DocPrint/imgr.jpg', array(
            'width' => 65,
            'height' => 40,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_RIGHT,
            'posVerticalRel' => 'line',
        ));
        $table33->addCell()->addImage('crm/images/DocPrint/imgl.jpg', array(
            'width' => 75,
            'height' => 40,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posVerticalRel' => 'line',
        ));
        $footer ->addImage('crm/images/DocPrint/foot.jpg', array(
            'width' => 700,
            'height' => 35,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posVerticalRel' => 'line',
        ));
    }


    public function createfooterlogoamaergapre()
    {
        $footer = $this->section->createFooter();
        $table33 = $footer->addTable();
        $table33->addRow();
        $table33->addCell()->addImage('crm/images/DocPrint/imgr.jpg', array(
            'width' => 65,
            'height' => 40,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_RIGHT,
            'posVerticalRel' => 'line',
        ));/*
        $table33->addCell()->addImage('crm/images/DocPrint/imgl.jpg', array(
            'width' => 75,
            'height' => 40,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posVerticalRel' => 'line',
        ));*/
        $footer ->addImage('crm/images/DocPrint/foot.jpg', array(
            'width' => 600,
            'height' => 35,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posVerticalRel' => 'line',
        ));
    }
    /**
     * Fonction pour ajouter une partie de signature dans un document
     *
     * @return $this
     */
    public function addfootersigned()
    {
        $tableSignature = $this->section->addTable('myTableSignature');
        $tableSignature->addRow();
        $cell9 = $tableSignature->addCell(5500);
        $textrun9 = $cell9->addTextRun();
        $textrun9->addText('Pour Aprentiv’Conseil', array('name'=> 'calibri','size' => 10,'bold' => true));
        $cell9->addImage('crm/images/DocPrint/signature.jpg', array(
            'width' => 100,
            'height' => 80,
            'positioning' => Image::POSITION_RELATIVE,
            'wrappingStyle' => 'square',
            'posHorizontal'    => Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => Image::POSITION_RELATIVE_TO_COLUMN,
            'posVerticalRel' => Image::POSITION_RELATIVE_TO_LINE,
            'posVertical' => Image::POSITION_VERTICAL_TOP,
        ));
        $cell99 =$tableSignature->addCell(5000);
        $textrun99 = $cell99->addTextRun();
        $textrun99->addText('Signature du formateur <w:br/>', array('name'=> 'calibri','size' => 10,'bold' => true));
        $textrun99->addText('(précédée de la mention « bon pour accord ») ', array('name'=> 'calibri','size' => 10));
        $cell999 = $tableSignature->addCell(2000);
        $cell999->addTextRun();

        return $this;
    }

    public function createheaderlogoemarg($dossier,$contact, $structure,$opca,$nomstagiaire,$datestage,$isagefosagefice = false,$isagefos = false)
    {
        $imageentete = 'crm/images/DocPrint/aprentiv.png';
        $width = 110;
        $height = 65;
        $titre = "ATTESTATION DE PRESENCE INDIVIDUELLE";

        if ( 2 === $structure ){
            $imageentete = 'crm/images/DocPrint/logo_proform.png';
            $width = 150;
            $height = 80;
            $titre = "FEUILLE D’EMARGEMENT INDIVIDUELLE - ".htmlspecialchars($contact->getnomStr());
        }

        $fancyTableStyleName = 'Fancy Table';
        $fancyTableStyle = array('borderSize' => 2, 'borderColor' => '000000', 'align' => 'center');
        $fancyTableStyle2 = array('borderSize' => 2,'borderColor' => '000000', 'align' => 'center');
        $fancyTableStyleAGEFOS = array('borderSize' => 2, 'borderColor' => '000000', 'align' => 'right');
        $fancyTableFirstRowStyle = array('borderSize' => 6,'borderColor' => '000000');
        $fancyTableCellStyle = array('valign' => 'center');
        $fancyTableCellStyleStag2AGEFOS = array('gridSpan' => 2,'valign' => 'center');
        $fancyTableFontStyle = array('bold' => false, 'size' => 10, 'name' => 'calibri', 'valign' => 'center');

        if ( $isagefosagefice) {
            $PidPageSettings = array(
                'headerHeight'=> \PhpOffice\PhpWord\Shared\Converter::inchToTwip(.16),
                'footerHeight'=> \PhpOffice\PhpWord\Shared\Converter::inchToTwip(.32),
                'footerHeight'=> \PhpOffice\PhpWord\Shared\Converter::inchToTwip(.32),
                'marginLeft'  => \PhpOffice\PhpWord\Shared\Converter::inchToTwip(.75),
                'marginRight' => \PhpOffice\PhpWord\Shared\Converter::inchToTwip(.75),
                'marginTop'   => 0,
                'marginBottom'=> 0,
                'orientation' => 'landscape',
                'pageSizeW' => 16500,
            );

            $sections = $this->docword->addSection($PidPageSettings);
            $this->setsectiondoc($sections);
            $header = $sections->addHeader();
            $tableE = $header->addTable('Entete Table');
            $tableE->addRow();
            $tableE->addCell(1000)->addImage($imageentete, array(
                'width' => $width,
                'height' => $height,
                'align' => 'left',
                'wrappingStyle' => 'square',
                'positioning' => 'absolute',
                'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
                'posVerticalRel' => 'line',
                'marginLeft' => 150,
                'marginTop' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0),
            ));
            $tableE->addCell(25000)->addTextRun(['spaceAfter' => 0,'size' => 1, 'align' => 'center'])->addText(htmlspecialchars("\t")."<w:br/>".$titre.htmlspecialchars("\t"), array('name'=> 'calibri','size' => 20,'bold' => true));
            if(1 === $structure && $isagefos){
                $tableE->addCell(4000)->addImage('crm/images/DocPrint/paritaire.jpeg', array(
                    'width' => 150,
                    'height' => 60,
                    'align' => 'right',
                    'wrappingStyle' => 'square',
                    'positioning' => 'absolute',
                    'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_RIGHT,
                    'posVerticalRel' => 'line',
                    'marginRight' => 150,
                    'marginTop' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0),
                ));
            }
            $sectionStyle = $this->getsectiondoc()->getStyle(); // half inch left margin
            $sectionStyle->setMarginTop(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(2));
            $sections->addTextBreak(0);
            $table = $sections->addTable($fancyTableStyleAGEFOS);
            $table->addRow();
            if (1 === $structure) {
                //$this->docword->addTableStyle($fancyTableStyleAGEFOS);
                $table->addCell(3900, $fancyTableCellStyle)->addText(' SOCIETE : ' . htmlspecialchars($contact->getnomStr()), $fancyTableFontStyle);
                $table->addCell(3900, $fancyTableCellStyle)->addText(' Stagiaire : ' . htmlspecialchars($nomstagiaire), $fancyTableFontStyle);
                $table->addCell(4400, $fancyTableCellStyle)->addText(' Intitulé du stage : ' . htmlspecialchars($dossier->getNom()), $fancyTableFontStyle);
                $table->addRow();
                $table->addCell(3900, $fancyTableCellStyle)->addText(' Lieu : ' . htmlspecialchars($dossier->getLieu()), $fancyTableFontStyle);
                $table->addCell(3900, $fancyTableCellStyle)->addText(' Durée : ' . $datestage[3] . " J/ " . $datestage[0] . " H", $fancyTableFontStyle);
                $table->addCell(4400, $fancyTableCellStyle)->addText(' Dates : ' . "Du " . $dossier->getDateDebutPeriode()->format('d-m-Y') . " au " . $dossier->getDateFinPeriode()->format('d-m-Y'), $fancyTableFontStyle);
            } else {
                //$this->docword->addTableStyle($fancyTableStyleName, $fancyTableStyle, $fancyTableFirstRowStyle);
                $table->addCell(8000, $fancyTableCellStyle)->addText(' Intitulé du stage bbb : ' . htmlspecialchars($dossier->getNom()), $fancyTableFontStyle);
                $table->addCell(8000, $fancyTableCellStyle)->addText(' Stagiaire : ' . htmlspecialchars($nomstagiaire), $fancyTableFontStyle);
                $table->addRow();
                $table->addCell(8000, $fancyTableCellStyleStag2AGEFOS)->addText(' Lieu de stage : ' . htmlspecialchars($dossier->getLieu()), $fancyTableFontStyle);
                $table->addRow();
                $table->addCell(8000, $fancyTableCellStyle)->addText(' Dates du stage: ' . "Du " . $dossier->getDateDebutPeriode()->format('d-m-Y') . " au " . $dossier->getDateFinPeriode()->format('d-m-Y'), $fancyTableFontStyle);
                $table->addCell(8000, $fancyTableCellStyle)->addText(' Durée du stage : ' . $datestage[3] . " J/ " . $datestage[0] . " H", $fancyTableFontStyle);
            }
            $sections->addTextBreak(1);
        }
        else{
            $sections = $this->docword->addSection(array('marginLeft' => 200, 'marginRight' => 300, 'marginTop' => 500));
            $this->setsectiondoc($sections);
            $header = $sections->addHeader();
            $tableE = $header->addTable($fancyTableStyleName,$fancyTableCellStyle,$fancyTableFirstRowStyle);
            $tableE->addRow();
            $this->docword->setDefaultParagraphStyle(
                array(
                    'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0),
                    'spacing' => 120,
                    'lineHeight' => 1,
                )
            );
            $tableE->addCell(3500)->addImage($imageentete, array(
                'width' => $width,
                'height' => $height,
                'wrappingStyle' => 'square',
                'positioning' => 'absolute',
                'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
                'posVerticalRel' => 'line',
            ));
            $col = $tableE->addCell();
            $col->addTextRun()->addText("".htmlspecialchars("\t").$titre.htmlspecialchars("\t")."<w:br/>", array('name'=> 'calibri','size' => 20,'bold' => true), array('spaceBefore' =>  \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0), 'spaceAfter' =>  \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0)));
            //$this->docword->addTableStyle($fancyTableStyleName, $fancyTableStyle, $fancyTableFirstRowStyle);
            $sections->addTextBreak(1);
            
            $sDateDebut = $dossier->getDateDebutPeriode() ? $dossier->getDateDebutPeriode()->format('d-m-Y') : '...';
            $sDateFin = $dossier->getDateFinPeriode() ? $dossier->getDateFinPeriode()->format('d-m-Y') : '...';
            
            if (1 === $structure) {
                $col->addTextRun(['spaceAfter' => 0, 'size' => 1])->addText('Entreprise : ' . htmlspecialchars($contact->getnomstr()), $fancyTableFontStyle);
                $col->addTextRun(['spaceAfter' => 0, 'size' => 1])->addText('Nom-Prénom du stagiaire : ' . htmlspecialchars($nomstagiaire), $fancyTableFontStyle);
                $col->addTextRun(['spaceAfter' => 0, 'size' => 1])->addText('Intitulé du stage : ' . htmlspecialchars($dossier->getNom()), $fancyTableFontStyle);
                $col->addTextRun(['spaceAfter' => 0, 'size' => 1])->addText('Durée : '.$datestage[3].'J  '.$datestage[0].'H', $fancyTableFontStyle); // APR-214 : Suppression du / avant le H
                
                $col->addTextRun(['spaceAfter' => 0, 'size' => 1])->addText("Dates : Du " . $sDateDebut . " au " . $sDateFin, $fancyTableFontStyle);
                $col->addTextRun(['spaceAfter' => 0, 'size' => 1])->addText("Lieu du stage : " . htmlspecialchars($dossier->getLieu()), $fancyTableFontStyle);
            } else {

                $table = $sections->addTable($fancyTableStyle2);
                $table->addRow(400);
                $table->addCell(5000, $fancyTableCellStyle)->addText(' Intitulé du stage : ' . htmlspecialchars($dossier->getNom()), $fancyTableFontStyle);
                $table->addCell(5000, $fancyTableCellStyle)->addText(' Stagiaire : ' . htmlspecialchars($nomstagiaire), $fancyTableFontStyle);
                $table->addRow(400);
                $table->addCell(10000, $fancyTableCellStyleStag2AGEFOS)->addText(' Lieu de stage : ' . htmlspecialchars($dossier->getLieu()), $fancyTableFontStyle);
                $table->addRow(400);
                $table->addCell(5000, $fancyTableCellStyle)->addText(' Dates du stage: ' . "Du " . $sDateDebut . " au " . $sDateFin, $fancyTableFontStyle);
                $table->addCell(5000, $fancyTableCellStyle)->addText(' Durée du stage : '.$datestage[3].' J/ '.$datestage[0].' H', $fancyTableFontStyle);
            }
            $sections->addTextBreak(1);
        }

        return $this;
    }

    public function createfooterlogoemarg()
    {
        $footer = $this->getsectiondoc()->createFooter();
        $tablefooter = $footer->addTable();
        $tablefooter->addRow();
        $tablefooter->addCell();/*->addImage('crm/images/DocPrint/imgr.jpg', array(
            'width' => 65,
            'height' => 40,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_RIGHT,
            'posVerticalRel' => 'line',
        ));*/
        $footer ->addImage('crm/images/DocPrint/foot_proform.jpg', array(
            'width' => 700,
            'height' => 50,
            'wrappingStyle' => 'square',
            'positioning' => 'absolute',
            'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
            'posVerticalRel' => 'line',
        ));
    }

    /**
     * Fonction pour sauvegarder un document word créer dans Public/DocPrint/typeDoc/nomfichier
     *
     * @param $nomfile : Le nom du fichier
     * @param string $path : Le dossier ou sera garder le dossier
     *
     * @return Exception|string : Le chemin du dossier sauvegarder
     */
    public function saveDocument($nomfile,$path = "Contact")
    {
        try {
            $rep = self::TARGET_FILE."/".$path."/".date("Y-m-d");
            if(!is_dir($rep)){
                mkdir($rep);
            }
            $data["document"] = $rep."/".$nomfile;
            $pathfichier = $data["document"];
            $objWriter = IOFactory::createWriter($this->docword, 'Word2007');
            $objWriter->save($data['document']);

            return $pathfichier;
        }
        catch (Exception $ex){

            return $ex;
        }
    }

    /**
     * Fonction pour ajouter le contenu d'un template twig dans un document word
     *
     * @param $templatehtml : le rendu de template
     * @param $docword : Le document à laquelle on ajoute le template
     *
     */
    public function addcontenttemplate($templatehtml,$docword)
    {
        $sections = $docword->getsectiondoc();
        \PhpOffice\PhpWord\Shared\Html::addHtml($sections, $templatehtml, false);
    }

    /**
     * Fonction pour avoir la section courant d'un document phpword
     *
     * @return phpword->section
     */
    public function getsectiondoc()
    {
        return $this->section;
    }

    /**
     *
     * @param $section
     */
    public function setsectiondoc($section)
    {
        $this->section = $section;
    }

    /**
     *
     * @return PhpWord
     */
    public function getdocwordphp()
    {
        return $this->docword;
    }
}