<?php

namespace App\Entity;

use App\Repository\FormateurCommentdispRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\NoteRepository;

/**
 * 1Contact
 *
 * @ORM\Table(name="1_contact", indexes={@ORM\Index(name="prenom", columns={"prenom"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_opca", columns={"id_opca"}), @ORM\Index(name="idb", columns={"idb"}), @ORM\Index(name="idb_opca", columns={"idb_opca"}), @ORM\Index(name="nom", columns={"nom"}), @ORM\Index(name="no_naf", columns={"no_naf"}), @ORM\Index(name="statut_rst", columns={"statut_rst"}), @ORM\Index(name="id_commercial", columns={"id_commercial"}), @ORM\Index(name="id_type", columns={"id_type"}), @ORM\Index(name="idb_commercial", columns={"idb_commercial"}), @ORM\Index(name="idb_type", columns={"idb_type"}), @ORM\Index(name="nom_str", columns={"nom_str"})})
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ContactType")
     * @ORM\JoinColumn(name="id_type", nullable=true)
     */
    private $idType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type", type="integer", nullable=true)
     */
    private $idbType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_frm_juri", type="integer", nullable=true)
     */
    private $idFrmJuri;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_frm_juri", type="integer", nullable=true)
     */
    private $idbFrmJuri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nsecuritesocial", type="string", length=100, nullable=true)
     */
    private $nsecuritesocial;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Dossier", inversedBy="stagiaires")
     * @ORM\JoinColumn(name="id_formation_liee", referencedColumnName="id", nullable=true)
     */
    private $idFormationLiee;

    /**
     * @var string
     *
     * @ORM\Column(name="piece_identite", type="string", length=100, nullable=false)
     */
    private $pieceIdentite = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="valididte_piece_identite", type="string", length=100, nullable=true)
     */
    private $valididtePieceIdentite = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_str", type="string", length=200, nullable=true)
     */
    private $nomStr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_str_sec", type="string", length=255, nullable=true)
     */
    private $nomStrSec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_str", type="string", length=10, nullable=true)
     */
    private $noStr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_ape", type="string", length=50, nullable=true)
     */
    private $codeApe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauetude", type="string", length=100, nullable=true)
     */
    private $niveauetude;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_origine", type="integer", nullable=true)
     */
    private $idOrigine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_origine", type="integer", nullable=true)
     */
    private $idbOrigine;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure", inversedBy="contacts")
     * @ORM\JoinColumn(name="id_type_tructure", referencedColumnName="id", nullable=true)
     **/
    private $structure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type_structure", type="integer", nullable=true)
     */
    private $idbTypeStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_structure", type="string", length=10, nullable=true)
     */
    private $noStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_secondaire", type="string", length=255, nullable=true)
     */
    private $nomSecondaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_opca", nullable=true)
     */
    private $opca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_opca", type="integer", nullable=true)
     */
    private $idbOpca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_adherent", type="string", length=30, nullable=true)
     */
    private $noAdherent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_orig", type="integer", nullable=true)
     */
    private $idOrig;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_orig", type="integer", nullable=true)
     */
    private $idbOrig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rdv_valide", type="string", length=20, nullable=true)
     */
    private $rdvValide;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Collaborateur")
     * @ORM\JoinColumn(name="id_commercial", nullable=true)
     */
    private $commercial;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_commercial", type="integer", nullable=true)
     */
    private $idbCommercial;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_secteur", type="integer", nullable=true)
     *
     */
    private $idSecteur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_secteur", type="integer", nullable=true)
     */
    private $idbSecteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="effectif", type="string", length=20, nullable=true)
     */
    private $effectif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_naf", type="string", length=50, nullable=true)
     */
    private $noNaf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_siret", type="string", length=50, nullable=true)
     */
    private $noSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_rm", type="string", length=50, nullable=true)
     */
    private $noRm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_ti", type="string", length=50, nullable=true)
     */
    private $noTi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="metro", type="string", length=50, nullable=true)
     */
    private $metro;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_civilite", type="integer", nullable=true)
     */
    private $idCivilite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_civilite", type="integer", nullable=true)
     */
    private $idbCivilite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_titre", type="integer", nullable=true)
     */
    private $idTitre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_titre", type="integer", nullable=true)
     */
    private $idbTitre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_fonction", type="integer", nullable=true)
     */
    private $idFonction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_fonction", type="integer", nullable=true)
     */
    private $idbFonction;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_embauche", type="datetime", nullable=true)
     */
    private $dateEmbauche;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_csp", type="integer", nullable=true)
     */
    private $idCsp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_csp", type="integer", nullable=true)
     */
    private $idbCsp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naiss", type="datetime", nullable=true)
     */
    private $dateNaiss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=true)
     */
    private $sexe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=true)
     */
    private $idStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss", type="string", length=30, nullable=true)
     */
    private $ss;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="actif", type="boolean", nullable=true)
     */
    private $actif = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_min_h", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutMinH;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_max_h", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutMaxH;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_min_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutMinJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_max_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutMaxJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien_cv", type="string", length=255, nullable=true)
     */
    private $lienCv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solde", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $solde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="solde_date", type="datetime", nullable=true)
     */
    private $soldeDate ;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="delais_reponse_opca", type="boolean", nullable=true)
     */
    private $delaisReponseOpca;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="delais_rglmt_opca", type="boolean", nullable=true)
     */
    private $delaisRglmtOpca;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="delais_encaiss_opca", type="boolean", nullable=true)
     */
    private $delaisEncaissOpca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_maj", type="integer", nullable=true)
     */
    private $idUserMaj;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut_fmt", type="integer", nullable=true)
     */
    private $idStatutFmt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut_fmt", type="integer", nullable=true)
     */
    private $idbStatutFmt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_societe", type="integer", nullable=true)
     */
    private $idSociete;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_societe", type="integer", nullable=true)
     */
    private $idbSociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formateur_societe", type="string", length=255, nullable=true)
     */
    private $formateurSociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zone_geo", type="string", length=255, nullable=true)
     */
    private $zoneGeo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Siret_tns", type="string", length=50, nullable=true)
     */
    private $siretTns = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Naf_tns", type="string", length=50, nullable=true)
     */
    private $nafTns = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activite_tns", type="string", length=50, nullable=true)
     */
    private $activiteTns = '';

    /**
     * @var string
     *
     * @ORM\Column(name="id_opca_tns", type="string", length=50, nullable=true)
     */
    private $idOpcaTns = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Budget", type="string", length=100, nullable=false)
     */
    private $budget = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_budget", type="datetime", nullable=true, options={"default"="1970-01-01 00:00:00"})
     */
    private $dateBudget;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=200, nullable=true)
     */
    private $qualite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="interlocuteur", type="string", length=150, nullable=true, options={"default"="non"})
     */
    private $interlocuteur = 'non';

    /**
     * @var string
     *
     * @ORM\Column(name="societeFormStag", type="string", length=200, nullable=true)
     */
    private $societeformstag;

    private $siteweb;

    private $codePostal;

    private $idVille;

    private $idContact;

    private $tel;

    private $idTypeTel;

    private $mail;


    private $societelie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FormationDossierStagiaire", mappedBy="stagiaire", cascade={"persist"})
     */
    private $formationDossierStagiaires;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ContactNote", mappedBy="idTableContact", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FormateurNote", mappedBy="noteformateur", cascade={"persist"})
     */
    private $formateurcommentaires;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Adresse", mappedBy="idTableContact", cascade={"persist"})
     */
    private $adresses;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact", inversedBy="contactsoc")
     * @ORM\JoinColumn(name="contact_liee", referencedColumnName="id", nullable=true)
     */
    private $contactLiee;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contact", mappedBy="contactLiee", cascade={"persist"})
     */
    private $contactsoc;

    /**
     * @var string|null
     */
    private $Telephone;
    /**
     * @var string|null
     */
    private $Fax;
    /**
     * @var string|null
     */
    private $Portable;
    /**
     * @var string|null
     */
    private $Email;

    private $opcas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Competenceformateur;

    /**
     * @var string
     *
     * @ORM\Column(name="origine", type="string", length=50, nullable=true)
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="statutlead", type="string", length=50, nullable=true)
     */
    private $statutlead;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero", type="string", length=14, nullable=true)
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresseEmail", type="string", length=50, nullable=true)
     */
    private $adresseEmail;

     /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    private $villeLead;

    /**
     * @var string|null
     * 
     * @ORM\Column(name="statusclient", type="string", length=50, nullable=true)
     */
    private $statusClient;

    /**
     * @ORM\OneToMany(targetEntity=Sessions::class, mappedBy="contact", orphanRemoval=true)
     */
    private $sessions;

    /**
     * @ORM\OneToMany(targetEntity=ThematiquesFormations::class, mappedBy="formatteur")
     */
    private $thematiquesFormations;

    public function __construct()
    {
        $this->contactsoc = new ArrayCollection();
        $this->societelie = new ArrayCollection();
        $this->codePostal = new ArrayCollection();
        $this->idVille = new ArrayCollection();
        $this->idContact = new ArrayCollection();
        $this->tel = new ArrayCollection();
        $this->idTypeTel = new ArrayCollection();
        $this->mail = new ArrayCollection();
        $this->dateNaissance = new \DateTime();
        $this->commentaires = new ArrayCollection();
        $this->adresses = new ArrayCollection();
        $this->formationDossierStagiaires = new ArrayCollection();
        $this->formateurcommentaires = new ArrayCollection();
        $this->opcas = new ArrayCollection();
        $this->sessions = new ArrayCollection();
        $this->thematiquesFormations = new ArrayCollection();
    }
    public function __toString()
    {
        return (string)$this->getNomStr();
        return (string)$this->getIdCommercial();


    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdb(): ?int {
        return $this->idb;
    }

    public function setIdb(int $idb): self {
        $this->idb = $idb;

        return $this;
    }

    public function getIdType(): ?ContactType {

        return $this->idType;
    }

    /**
     * @param ContactType|null $idType
     * @return Contact|null
     */
    public function setIdType(?ContactType $idType): self
    {
        $this->idType = $idType;

        return $this;
    }

    public function getIdbType(): ?int {
        return $this->idbType;
    }

    public function setIdbType(?int $idbType): self {
        $this->idbType = $idbType;

        return $this;
    }

    public function getIdFrmJuri(): ?int {
        return $this->idFrmJuri;
    }

    public function setIdFrmJuri(?int $idFrmJuri): self {
        $this->idFrmJuri = $idFrmJuri;

        return $this;
    }

    public function getIdbFrmJuri(): ?int {
        return $this->idbFrmJuri;
    }

    public function setIdbFrmJuri(?int $idbFrmJuri): self {
        $this->idbFrmJuri = $idbFrmJuri;

        return $this;
    }

    public function getNsecuritesocial(): ?string {
        return $this->nsecuritesocial;
    }

    public function setNsecuritesocial($nsecuritesocial): self {
        $this->nsecuritesocial = $nsecuritesocial;

        return $this;
    }

    public function getIdFormationLiee(): ?Dossier {
        return $this->idFormationLiee;
    }

    public function setIdFormationLiee(?Dossier $idFormationLiee): self {
        $this->idFormationLiee = $idFormationLiee;

        return $this;
    }

    public function getPieceIdentite(): ?string {
        return $this->pieceIdentite;
    }

    public function setPieceIdentite(string $pieceIdentite): self {
        $this->pieceIdentite = $pieceIdentite;

        return $this;
    }

    public function getValididtePieceIdentite(): ?string {
        return $this->valididtePieceIdentite;
    }

    public function setValididtePieceIdentite(?string $valididtePieceIdentite): self {
        $this->valididtePieceIdentite = $valididtePieceIdentite;

        return $this;
    }

    public function getNomStr(): ?string {
        return $this->nomStr;
    }

    public function setNomStr(?string $nomStr): self {
        $this->nomStr = $nomStr;

        return $this;
    }

    public function getNomStrSec(): ?string {
        return $this->nomStrSec;
    }

    public function setNomStrSec(?string $nomStrSec): self {
        $this->nomStrSec = $nomStrSec;

        return $this;
    }

    public function getNoStr(): ?string {
        return $this->noStr;
    }

    public function setNoStr(?string $noStr): self {
        $this->noStr = $noStr;

        return $this;
    }

    public function getNom(): ?string {
        return ucwords($this->nom);
    }

    public function setNom(?string $nom): self {
        $this->nom = ucwords($nom);

        return $this;
    }

    public function getPrenom(): ?string {
        return ucwords($this->prenom);
    }

    public function setPrenom(?string $prenom): self {
        $this->prenom = ucwords($prenom);

        return $this;
    }

    public function getCodeApe(): ?string {
        return $this->codeApe;
    }

    public function setCodeApe(?string $codeApe): self {
        $this->codeApe = $codeApe;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTime $dateNaissance): self {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    public function getNiveauetude(): ?string {
        return $this->niveauetude;
    }

    public function setNiveauetude(string $niveauetude): self {
        $this->niveauetude = $niveauetude;

        return $this;
    }

    public function getIdOrigine(): ?int {
        return $this->idOrigine;
    }

    public function setIdOrigine(?int $idOrigine): self {
        $this->idOrigine = $idOrigine;

        return $this;
    }

    public function getIdbOrigine(): ?int {
        return $this->idbOrigine;
    }

    public function setIdbOrigine(?int $idbOrigine): self {
        $this->idbOrigine = $idbOrigine;

        return $this;
    }

    public function getIdTypeTructure(): ?Structure {

        return $this->structure;
    }

    public function setIdTypeTructure(?Structure $idTypeTructure): self {
        $this->structure = $idTypeTructure;

        return $this;
    }

    public function getIdbTypeStructure(): ?int {
        return $this->idbTypeStructure;
    }

    public function setIdbTypeStructure(?int $idbTypeStructure): self {
        $this->idbTypeStructure = $idbTypeStructure;

        return $this;
    }

    public function getNoStructure(): ?string {
        return $this->noStructure;
    }

    public function setNoStructure(?string $noStructure): self {
        $this->noStructure = $noStructure;

        return $this;
    }

    public function getNomSecondaire(): ?string {
        return $this->nomSecondaire;
    }

    public function setNomSecondaire(?string $nomSecondaire): self {
        $this->nomSecondaire = $nomSecondaire;

        return $this;
    }

    public function getRemarques(): ?string {
        return $this->remarques;
    }

    public function setRemarques(?string $remarques): self {
        $this->remarques = $remarques;

        return $this;
    }

    /*public function getIdOpca(): ?int {

        return $this->idOpca;
    }

    public function setIdOpca(?int $idOpca): self {
        $this->idOpca = $idOpca;

        return $this;
    }*/

    public function getIdbOpca(): ?int {
        return $this->idbOpca;
    }

    public function setIdbOpca(?int $idbOpca): self {
        $this->idbOpca = $idbOpca;

        return $this;
    }

    public function getNoAdherent(): ?string {
        return $this->noAdherent;
    }

    public function setNoAdherent(?string $noAdherent): self {
        $this->noAdherent = $noAdherent;

        return $this;
    }

    public function getIdOrig(): ?int {
        return $this->idOrig;
    }

    public function setIdOrig(?int $idOrig): self {
        $this->idOrig = $idOrig;

        return $this;
    }

    public function getIdbOrig(): ?int {
        return $this->idbOrig;
    }

    public function setIdbOrig(?int $idbOrig): self {
        $this->idbOrig = $idbOrig;

        return $this;
    }

    public function getRdvValide(): ?string {
        return $this->rdvValide;
    }

    public function setRdvValide(?string $rdvValide): self {
        $this->rdvValide = $rdvValide;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdCommercial(): ?Collaborateur
    {
        return $this->commercial;
    }

    /**
     * @param int|null $id_commercial
     */
    public function setIdCommercial(?Collaborateur $id_commercial): void
    {
        $this->commercial = $id_commercial;
    }



    public function getIdbCommercial(): ?int {
        return $this->idbCommercial;
    }

    public function setIdbCommercial(?int $idbCommercial): self {
        $this->idbCommercial = $idbCommercial;

        return $this;
    }

    public function getIdSecteur(): ?int {
        return $this->idSecteur;
    }

    public function setIdSecteur(?int $idSecteur): self {
        $this->idSecteur = $idSecteur;

        return $this;
    }

    public function getIdbSecteur(): ?int {
        return $this->idbSecteur;
    }

    public function setIdbSecteur(?int $idbSecteur): self {
        $this->idbSecteur = $idbSecteur;

        return $this;
    }

    public function getEffectif(): ?string {
        return $this->effectif;
    }

    public function setEffectif(?string $effectif): self {
        $this->effectif = $effectif;

        return $this;
    }

    public function getNoNaf(): ?string {
        return $this->noNaf;
    }

    public function setNoNaf(?string $noNaf): self {
        $this->noNaf = $noNaf;

        return $this;
    }

    public function getNoSiret(): ?string {
        return $this->noSiret;
    }

    public function setNoSiret(?string $noSiret): self {
        $this->noSiret = $noSiret;

        return $this;
    }

    public function getNoRm(): ?string {
        return $this->noRm;
    }

    public function setNoRm(?string $noRm): self {
        $this->noRm = $noRm;

        return $this;
    }

    public function getNoTi(): ?string {
        return $this->noTi;
    }

    public function setNoTi(?string $noTi): self {
        $this->noTi = $noTi;

        return $this;
    }

    public function getMetro(): ?string {
        return $this->metro;
    }

    public function setMetro(?string $metro): self {
        $this->metro = $metro;

        return $this;
    }

    public function getIdCivilite(): ?int {
        return $this->idCivilite;
    }

    public function setIdCivilite(?int $idCivilite): self {
        $this->idCivilite = $idCivilite;

        return $this;
    }

    public function getIdbCivilite(): ?int {
        return $this->idbCivilite;
    }

    public function setIdbCivilite(?int $idbCivilite): self {
        $this->idbCivilite = $idbCivilite;

        return $this;
    }

    public function getIdTitre(): ?int {
        return $this->idTitre;
    }

    public function setIdTitre(?int $idTitre): self {
        $this->idTitre = $idTitre;

        return $this;
    }

    public function getIdbTitre(): ?int {
        return $this->idbTitre;
    }

    public function setIdbTitre(?int $idbTitre): self {
        $this->idbTitre = $idbTitre;

        return $this;
    }

    public function getIdFonction(): ?int {
        return $this->idFonction;
    }

    public function setIdFonction(?int $idFonction): self {
        $this->idFonction = $idFonction;

        return $this;
    }

    public function getIdbFonction(): ?int {
        return $this->idbFonction;
    }

    public function setIdbFonction(?int $idbFonction): self {
        $this->idbFonction = $idbFonction;

        return $this;
    }

    public function getDateEmbauche(): ?\DateTimeInterface {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(?\DateTimeInterface $dateEmbauche): self {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getIdCsp(): ?int {
        return $this->idCsp;
    }

    public function setIdCsp(?int $idCsp): self {
        $this->idCsp = $idCsp;

        return $this;
    }

    public function getIdbCsp(): ?int {
        return $this->idbCsp;
    }

    public function setIdbCsp(?int $idbCsp): self {
        $this->idbCsp = $idbCsp;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface {
        return $this->dateNaiss;
    }

    public function setDateNaiss(?\DateTimeInterface $dateNaiss): self {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getSexe(): ?string {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self {
        $this->sexe = $sexe;

        return $this;
    }

    public function getIdStatut(): ?int {
        return $this->idStatut;
    }

    public function setIdStatut(?int $idStatut): self {
        $this->idStatut = $idStatut;

        return $this;
    }

    public function getIdbStatut(): ?int {
        return $this->idbStatut;
    }

    public function setIdbStatut(?int $idbStatut): self {
        $this->idbStatut = $idbStatut;

        return $this;
    }

    public function getSs(): ?string {
        return $this->ss;
    }

    public function setSs(?string $ss): self {
        $this->ss = $ss;

        return $this;
    }

    public function getActif(): ?bool {
        return $this->actif;
    }

    public function setActif(?bool $actif): self {
        $this->actif = $actif;

        return $this;
    }

    public function getCoutMinH(): ?string {
        return $this->coutMinH;
    }

    public function setCoutMinH(?string $coutMinH): self {
        $this->coutMinH = $coutMinH;

        return $this;
    }

    public function getCoutMaxH(): ?string {
        return $this->coutMaxH;
    }

    public function setCoutMaxH(?string $coutMaxH): self {
        $this->coutMaxH = $coutMaxH;

        return $this;
    }

    public function getCoutMinJ(): ?string {
        return $this->coutMinJ;
    }

    public function setCoutMinJ(?string $coutMinJ): self {
        $this->coutMinJ = $coutMinJ;

        return $this;
    }

    public function getCoutMaxJ(): ?string {
        return $this->coutMaxJ;
    }

    public function setCoutMaxJ(?string $coutMaxJ): self {
        $this->coutMaxJ = $coutMaxJ;

        return $this;
    }

    public function getLienCv(): ?string {
        return $this->lienCv;
    }

    public function setLienCv(?string $lienCv): self {
        $this->lienCv = $lienCv;

        return $this;
    }

    public function getSolde(): ?string {
        return $this->solde;
    }

    public function setSolde(?string $solde): self {
        $this->solde = $solde;

        return $this;
    }

    public function getSoldeDate(): ?\Datetime {
        return $this->soldeDate;
    }

    public function setSoldeDate(?\DateTime $soldeDate): self {
        $this->soldeDate = (null === $soldeDate) ? new \DateTime() : $soldeDate;

        return $this;
    }

    public function getDelaisReponseOpca(): ?bool {
        return $this->delaisReponseOpca;
    }

    public function setDelaisReponseOpca(?bool $delaisReponseOpca): self {
        $this->delaisReponseOpca = $delaisReponseOpca;

        return $this;
    }

    public function getDelaisRglmtOpca(): ?bool {
        return $this->delaisRglmtOpca;
    }

    public function setDelaisRglmtOpca(?bool $delaisRglmtOpca): self {
        $this->delaisRglmtOpca = $delaisRglmtOpca;

        return $this;
    }

    public function getDelaisEncaissOpca(): ?bool {
        return $this->delaisEncaissOpca;
    }

    public function setDelaisEncaissOpca(?bool $delaisEncaissOpca): self {
        $this->delaisEncaissOpca = $delaisEncaissOpca;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface {
        return $this->dateAdd;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self {
        $this->dateAdd = (null === $dateAdd) ? new \DateTime() : $dateAdd;

        return $this;
    }

    public function getIdUserAdd(): ?int {
        return $this->idUserAdd;
    }

    public function setIdUserAdd(?int $idUserAdd): self {
        $this->idUserAdd = $idUserAdd;

        return $this;
    }

    public function getDateMaj(): ?\DateTimeInterface {
        return $this->dateMaj;
    }

    public function setDateMaj(?\DateTimeInterface $dateMaj): self {

        $this->dateMaj = (null === $dateMaj) ? new \DateTime() : $dateMaj;

        return $this;
    }

    public function getIdUserMaj(): ?int {
        return $this->idUserMaj;
    }

    public function setIdUserMaj(?int $idUserMaj): self {
        $this->idUserMaj = $idUserMaj;

        return $this;
    }

    public function getStatutRst(): ?bool {
        return $this->statutRst;
    }

    public function setStatutRst(?bool $statutRst): self {
        $this->statutRst = $statutRst;

        return $this;
    }

    public function getIdStatutFmt(): ?int {
        return $this->idStatutFmt;
    }

    public function setIdStatutFmt(?int $idStatutFmt): self {
        $this->idStatutFmt = $idStatutFmt;

        return $this;
    }

    public function getIdbStatutFmt(): ?int {
        return $this->idbStatutFmt;
    }

    public function setIdbStatutFmt(?int $idbStatutFmt): self {
        $this->idbStatutFmt = $idbStatutFmt;

        return $this;
    }

    public function getIdSociete(): ?int {
        return $this->idSociete;
    }

    public function setIdSociete(?int $idSociete): self {
        $this->idSociete = $idSociete;

        return $this;
    }

    public function getIdbSociete(): ?int {
        return $this->idbSociete;
    }

    public function setIdbSociete(?int $idbSociete): self {
        $this->idbSociete = $idbSociete;

        return $this;
    }

    public function getFormateurSociete(): ?string {
        return $this->formateurSociete;
    }

    public function setFormateurSociete(?string $formateurSociete): self {
        $this->formateurSociete = $formateurSociete;

        return $this;
    }

    public function getZoneGeo(): ?string {
        return $this->zoneGeo;
    }

    public function setZoneGeo(?string $zoneGeo): self {
        $this->zoneGeo = $zoneGeo;

        return $this;
    }

    public function getSiretTns(): ?string {
        return $this->siretTns;
    }

    public function setSiretTns(?string $siretTns): self {
        $this->siretTns = $siretTns;

        return $this;
    }

    public function getNafTns(): ?string {
        return $this->nafTns;
    }

    public function setNafTns(?string $nafTns): self {
        $this->nafTns = $nafTns;

        return $this;
    }

    public function getActiviteTns(): ?string {
        return $this->activiteTns;
    }

    public function setActiviteTns(?string $activiteTns): self {
        $this->activiteTns = $activiteTns;

        return $this;
    }

    public function getIdOpcaTns(): ?string {
        return $this->idOpcaTns;
    }

    public function setIdOpcaTns(?string $idOpcaTns): self {
        $this->idOpcaTns = $idOpcaTns;

        return $this;
    }

    public function getBudget(): ?string {
        return $this->budget;
    }

    public function setBudget(string $budget): self {
        $this->budget = $budget;

        return $this;
    }

    public function getDateBudget(): ?\DateTimeInterface {
        return $this->dateBudget;
    }

    public function setDateBudget(?\DateTimeInterface $dateBudget): self {

        $this->dateBudget = (null === $dateBudget) ? new \DateTime() : $dateBudget;

        return $this;
    }

    public function getQualite(): ?string {
        return $this->qualite;
    }

    public function setQualite(?string $qualite): self {
        $this->qualite = $qualite;

        return $this;
    }

    public function getInterlocuteur(): ?string {
        return $this->interlocuteur;
    }

    public function setInterlocuteur(?string $interlocuteur): self {
        $this->interlocuteur = $interlocuteur;

        return $this;
    }

    public function getSocieteformstag(): ?string {
        return $this->societeformstag;
    }

    public function setSocieteformstag(string $societeformstag): self {
        $this->societeformstag = $societeformstag;

        return $this;
    }

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function getOpca(): ?self
    {
        if ($this->opca instanceof Contact && $this->opca->getId() == 0) {
            return null;
        }
        
        return $this->opca;
    }

    public function setOpca(?self $opca): self
    {
        $this->opca = $opca;

        return $this;
    }

    public function getCommercial(): ?Collaborateur
    {
        return $this->commercial;
    }

    public function setCommercial(?Collaborateur $commercial): self
    {
        $this->commercial = $commercial;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getCodePostal(): ArrayCollection
    {
        return $this->codePostal;
    }

    /**
     * @param int|null $codePostal
     */
    public function setCodePostal($codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return ArrayCollection
     */
    public function getIdVille()
    {
        return $this->idVille;
    }

    /**
     * @param ArrayCollection $idVille
     */
    public function setIdVille($idVille): void
    {
        $this->idVille = $idVille;
    }

    /**
     * @return mixed
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * @param mixed $idContact
     */
    public function setIdContact($idContact): void
    {
        $this->idContact = $idContact;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getIdTypeTel()
    {
        return $this->idTypeTel;
    }

    /**
     * @param mixed $idTypeTel
     */
    public function setIdTypeTel($idTypeTel): void
    {
        $this->idTypeTel = $idTypeTel;
    }

    /**
     * @return ArrayCollection
     */
    public function getMail(): ?ArrayCollection
    {
        return $this->mail;
    }

    /**
     * @param ArrayCollection $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * @param mixed $siteweb
     */
    public function setSiteweb($siteweb): void
    {
        $this->siteweb = $siteweb;
    }

    /**
     * @return ArrayCollection
     */
    public function getSocietelie(): ?ArrayCollection
    {
        return $this->societelie;
    }

    /**
     * @param ArrayCollection $societelie
     */
    public function setSocietelie(?ArrayCollection $societelie): void
    {
        $this->societelie = $societelie;
    }

    /**
    /**
     * @return int|null
     *
    public function getIdbTypeTructure(): ?Structure
    {
        return $this->idbTypeTructure;
    }

    /**
     * @param int|null $idbTypeTructure
     * @return Object Contact
     *
    public function setIdbTypeTructure(?Structure $idbTypeTructure): self
    {
        $this->idbTypeTructure = $idbTypeTructure;

        return $this;
    }
    */


    public function addSiteweb(Url $siteweb): self
    {
        if (!$this->siteweb->contains($siteweb)) {
            $this->siteweb[] = $siteweb;
            $siteweb->setIdContact($this->getId());
        }

        return $this;
    }

    public function removeSiteweb(Url $siteweb): self
    {
        if ($this->siteweb->contains($siteweb)) {
            $this->siteweb->removeElement($siteweb);
            // set the owning side to null (unless already changed)
            if ($siteweb->getIdContact() === $this) {
                $siteweb->setIdContact(null);
            }
        }

        return $this;
    }

    /*
    /**
     * @return int
     *
    public function getIdFormationDossier(): FormationDossier
    {
        return $this->idFormationDossier;
    }

    /**
     * @param int $idFormationDossier
     * @return Contact
     *
    public function setIdFormationDossier(FormationDossier $idFormationDossier): self
    {
        $this->idFormationDossier = $idFormationDossier;

        return $this;
    }
    */

    /**
     * @return Collection|ContactNote[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires
            ->matching(NoteRepository::notDeletedCriteria());
    }

    public function addCommentaire(ContactNote $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $commentaire->setIdTableContact($this);
            $this->commentaires[] = $commentaire;
        }

        return $this;
    }

    public function removeCommentaire(ContactNote $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getIdTableContact() === $this) {
                $commentaire->setIdTableContact(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|FormateurNote[]
     */
    public function getFormateurcommentaires(): Collection
    {
        return $this->formateurcommentaires->matching(NoteRepository::notDeletedCriteria());
    }

    /**
     * @param mixed $formateurcommentaire
     */
    public function setFormateurcommentaires($formateurcommentaire): void
    {
        $this->formateurcommentaires->clear();
        foreach ($formateurcommentaire as $commentaire) {
            $this->addFormateurCommentaires($commentaire);
        }
    }

    public function addFormateurCommentaires(FormateurNote $formateurcomment): self
    {
        if (!$this->formateurcommentaires->contains($formateurcomment)) {

            $formateurcomment->setNoteformateur($this);
            $this->formateurcommentaires[] = $formateurcomment;
        }

        return $this;
    }

    /**
     * @return Collection|Adresse[]
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(Adresse $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setIdTableContact($this);
        }

        return $this;
    }

    public function removeAdress(Adresse $adress): self
    {
        if ($this->adresses->contains($adress)) {
            $this->adresses->removeElement($adress);
            // set the owning side to null (unless already changed)
            if ($adress->getIdTableContact() === $this) {
                $adress->setIdTableContact(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getContactsoc(): Collection
    {
        return $this->contactsoc;
    }

    public function addContactsoc(self $contactsoc): self
    {
        if (!$this->contactsoc->contains($contactsoc)) {
            $contactsoc->setContactLiee($this);
            $this->contactsoc[] = $contactsoc;
        }

        return $this;
    }

    public function removeContactsoc(self $contactsoc): self
    {
        if ($this->contactsoc->contains($contactsoc)) {
            $this->contactsoc->removeElement($contactsoc);
            // set the owning side to null (unless already changed)
            if ($contactsoc->getContactLiee() === $this) {
                $contactsoc->setContactLiee(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactLiee()
    {
        return $this->contactLiee;
    }

    /**
     * @param mixed $contact_liee
     */
    public function setContactLiee(?self $contact_liee): void
    {
        $this->contactLiee = $contact_liee;
    }
    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    /**
     * @return mixed
     */
    public function getFormationDossierStagiaires()
    {
        return $this->formationDossierStagiaires;
    }

    /**
     * @param string|null $Telephone
     */
    public function setTelephone(?string $Telephone): void
    {
        $this->Telephone = $Telephone;
    }

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->Fax;
    }

    /**
     * @param string|null $Fax
     */
    public function setFax(?string $Fax): void
    {
        $this->Fax = $Fax;
    }

    /**
     * @return string|null
     */
    public function getPortable(): ?string
    {
        return $this->Portable;
    }

    /**
     * @param string|null $Portable
     */
    public function setPortable(?string $Portable): void
    {
        $this->Portable = $Portable;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @param string|null $Email
     */
    public function setEmail(?string $Email): void
    {
        $this->Email = $Email;
    }


    /**
     * @param mixed $formationDossierStagiaires
     * @return Contact
     */
    public function setFormationDossierStagiaires(?FormationDossierStagiaire $formationDossierStagiaires)
    {
        $this->formationDossierStagiaires = $formationDossierStagiaires;

        return $this;
    }

    public function addFormationDossierStagiaire(FormationDossierStagiaire $formationDossier) :self
    {
        $formationDossier->setStagiaire($this);
        $this->formationDossierStagiaires[] = $formationDossier;

        return $this;
    }

    public function removeFormationDossierStagiaire(FormationDossierStagiaire $formationDossier) {

        $this->formationDossierStagiaires->removeElement($formationDossier);
    }

    public function addOpcas(Contact $contactOpca) :self{
    $this->opcas[] = $contactOpca;

    $contactOpca->setOpcas($contactOpca);

    return $this;
    }

    public function getOpcas(){
    return $this->opcas;
    }

    public function setOpcas($opcas){
    $this->opcas = $opcas;

    return $this;
    }

    public function getCompetenceformateur(): ?string
    {
        return $this->Competenceformateur;
    }

    public function setCompetenceformateur(?string $Competenceformateur): self
    {
        $this->Competenceformateur = $Competenceformateur;

        return $this;
    }

    public function getOrigine(): ?string {
        return $this->origine;
    }

    public function setOrigine(?string $origine): self {
        $this->origine = $origine;

        return $this;
    }
    public function getStatutlead(): ?string {
        return $this->statutlead;
    }

    public function setStatutlead(?string $statutlead): self {
        $this->statutlead = $statutlead;

        return $this;
    }
    
    public function getNumero(): ?string {
        return $this->numero;
    }

    public function setNumero(?string $numero): self {
        $this->numero = $numero;

        return $this;
    }

    public function getAdresseEmail(): ?string {
        return $this->adresseEmail;
    }

    public function setAdresseEmail(?string $adresseEmail): self {
        $this->adresseEmail = $adresseEmail;

        return $this;
    }

    public function getVilleLead(): ?string {
        return $this->villeLead;
    }

    public function setVilleLead(?string $villeLead): self {
        $this->villeLead = ucfirst(strtolower($villeLead));

        return $this;
    }

    public function getStatusClient(): ?string {
        return $this->statusClient;
    }

    public function setStatusClient(?string $statusClient): self {
        $this->statusClient = $statusClient;

        return $this;
    }

    /**
     * @return Collection|Sessions[]
     */
    public function getSessions(): Collection
    {
        return $this->sessions;
    }

    public function addSession(Sessions $session): self
    {
        if (!$this->sessions->contains($session)) {
            $this->sessions[] = $session;
            $session->setFormateurFormation($this);
        }

        return $this;
    }

    public function removeSession(Sessions $session): self
    {
        if ($this->sessions->removeElement($session)) {
            // set the owning side to null (unless already changed)
            if ($session->getFormateurFormation() === $this) {
                $session->setFormateurFormation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ThematiquesFormations[]
     */
    public function getThematiquesFormations(): Collection
    {
        return $this->thematiquesFormations;
    }

    public function addThematiquesFormation(ThematiquesFormations $thematiquesFormation): self
    {
        if (!$this->thematiquesFormations->contains($thematiquesFormation)) {
            $this->thematiquesFormations[] = $thematiquesFormation;
            $thematiquesFormation->setFormatteur($this);
        }

        return $this;
    }

    public function removeThematiquesFormation(ThematiquesFormations $thematiquesFormation): self
    {
        if ($this->thematiquesFormations->removeElement($thematiquesFormation)) {
            // set the owning side to null (unless already changed)
            if ($thematiquesFormation->getFormatteur() === $this) {
                $thematiquesFormation->setFormatteur(null);
            }
        }

        return $this;
    }

}

