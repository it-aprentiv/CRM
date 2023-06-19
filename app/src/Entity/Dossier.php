<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Constants\FormationType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * 1Dossier
 *
 * @ORM\Table(name="1_dossier", indexes={@ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="idb_client", columns={"idb_client"})})
 * @ORM\Entity(repositoryClass="App\Repository\DossierRepository") 
 * @ORM\HasLifecycleCallbacks()
 */


class Dossier
{

    const TYPE_INTRA = FormationType::TYPE_INTRA;
    const TYPE_INTER = FormationType::TYPE_INTER;
    const TYPE_SOUS_TRAITANCE = FormationType::TYPE_SOUS_TRAITANCE;

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
     * @ORM\Column(name="old_id", type="integer", nullable=true)
     */
    private $oldId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dossier_type", type="string", length=40, nullable=true)
     */
    private $dossierType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dispositif", type="string", length=100, nullable=true)
     */
    private $dispositif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="durparjour", type="string", length=100, nullable=true)
     */
    private $durparjour;

    /**
     * @var int
     *
     * @ORM\Column(name="ndossopca", type="integer", nullable=true)
     */
    private $ndossopca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_ref", type="integer", nullable=true)
     */
    private $noRef;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ref", type="datetime", nullable=true)
     */
    private $dateRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intra_inter", type="string", length=1, nullable=true)
     */
    private $intraInter;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_signature", type="datetime", nullable=true)
     */
    private $dateSignature;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_accord", type="datetime", nullable=true)
     */
    private $dateAccord;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut_periode", type="datetime", nullable=true)
     */
    private $dateDebutPeriode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_periode", type="datetime", nullable=true)
     */
    private $dateFinPeriode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dates_dossier", type="string", length=255, nullable=true)
     */
    private $datesDossier;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_envoi", type="datetime", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duree_heures", type="string", length=50, nullable=true)
     */
    private $dureeHeures;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duree_jours", type="string", length=50, nullable=true)
     */
    private $dureeJours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectifs", type="string", length=255, nullable=true)
     */
    private $objectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cout_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCoutHt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_marge", type="integer", nullable=true)
     */
    private $prctMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_marge", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_tva", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantTva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ttc", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalTtc = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_demande", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntDemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_accorde", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntAccorde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_accord", type="string", length=50, nullable=true)
     */
    private $refAccord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subrogation", type="string", length=3, nullable=true)
     */
    private $subrogation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_tva", type="integer", nullable=true)
     */
    private $idbTva;



    /**
     * idClient == idContact
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     */
    private $idClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_client", type="integer", nullable=true)
     */
    private $idbClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
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
     * @ORM\Column(name="id_formation", type="integer", nullable=true)
     */
    private $idFormation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_formation", type="integer", nullable=true)
     */
    private $idbFormation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_commercial", type="integer", nullable=true)
     */
    private $idCommercial;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_commercial", type="integer", nullable=true)
     */
    private $idbCommercial;

    /**
     * @var Contact
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_formateur", referencedColumnName="id")
     */
    private $idFormateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_formateur", type="integer", nullable=true)
     */
    private $idbFormateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_opca", type="integer", nullable=true)
     */
    private $idOpca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_opca", type="integer", nullable=true)
     */
    private $idbOpca;

    /**
     * @var OrdredemissionStatut|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\OrdredemissionStatut")
     * @ORM\JoinColumn(name="id_statut", referencedColumnName="id")
     *
     */
    private $idStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut_doc", type="integer", nullable=true)
     */
    private $idStatutDoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut_doc", type="integer", nullable=true)
     */
    private $idbStatutDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rem", type="string", length=255, nullable=true)
     */
    private $rem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectif_action", type="string", length=150, nullable=true)
     */
    private $objectifAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duree_action", type="string", length=50, nullable=true)
     */
    private $dureeAction;

    /**
     * @var Structure
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure")
     * @ORM\JoinColumn(name="id_structure", referencedColumnName="id", nullable=true)
     *
     */
    private $idStructure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_structure", type="integer", nullable=true)
     */
    private $idbStructure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pv_tarif_j", type="string", length=200, nullable=true)
     */
    private $pvTarifJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pv_tarif_dj", type="string", length=200, nullable=true)
     */
    private $pvTarifDj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pv_tarif_h", type="string", length=200, nullable=true)
     */
    private $pvTarifH;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pv_total_ht", type="string", length=200, nullable=true)
     */
    private $pvTotalHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pfmteur_j", type="string", length=200, nullable=true)
     */
    private $pfmteurJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pfmteur_dj", type="string", length=200, nullable=true)
     */
    private $pfmteurDj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pfmteur_h", type="string", length=200, nullable=true)
     */
    private $pfmteurH;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pfmteur_total_ht", type="string", length=200, nullable=true)
     */
    private $pfmteurTotalHt;

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
     * @ORM\Column(name="id_affaire", type="integer", nullable=true)
     */
    private $idAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_str_ref", type="integer", nullable=true)
     */
    private $idStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_affaire", type="integer", nullable=true)
     */
    private $idbAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_str_ref", type="integer", nullable=true)
     */
    private $idbStrRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_marge", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTva;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_prev_enc", type="datetime", nullable=true)
     */
    private $datePrevEnc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_enc", type="datetime", nullable=true)
     */
    private $dateEnc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payeur", type="string", length=255, nullable=true)
     */
    private $payeur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="taux_com", type="integer", nullable=true)
     */
    private $tauxCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_stagiaires", type="integer", nullable=true)
     */
    private $nbStagiaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payencaiss", type="string", length=400, nullable=true)
     */
    private $payencaiss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="soustraitance", type="string", length=200, nullable=true)
     */
    private $soustraitance;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contact", cascade={"persist"} , mappedBy="idFormationLiee")
     */
    private $stagiaires;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FormationSuiviOrdredemission", cascade={"persist"} , mappedBy="idFormation")
     */
    private $suiviMissions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DossierNote", cascade={"persist"} , mappedBy="formation")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $commentaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ordre_mission", type="string", length=50, nullable=true)
     */
    private $refOrdreMission;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_print_om", type="datetime", nullable=true)
     */
    private $datePrintOrdreMission;

    /*
     * @var FormateurStatut|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormateurStatut")
     * @ORM\JoinColumn(name="id_statut_formateur", referencedColumnName="id", nullable=true)
     *
     */
    //private $statutFormateur;

    public function __construct()  {
        $this->dateAccord = new \Datetime();
        $this->dateAdd = new \Datetime();
        $this->stagiaires = new ArrayCollection();
        $this->suiviMissions = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->facture = new ArrayCollection();
        $this->avoir = new ArrayCollection();
        $this->contact = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdb(): ?int
    {
        return $this->idb;
    }

    public function setIdb(int $idb): self
    {
        $this->idb = $idb;

        return $this;
    }

    public function getOldId(): ?int
    {
        return $this->oldId;
    }

    public function setOldId(?int $oldId): self
    {
        $this->oldId = $oldId;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getDossierType(): ?string
    {
        return $this->dossierType;
    }

    public function setDossierType(?string $dossierType): self
    {
        $this->dossierType = $dossierType;

        return $this;
    }

    public function getDispositif(): ?string
    {
        return $this->dispositif;
    }

    public function setDispositif(string $dispositif): self
    {
        $this->dispositif = $dispositif;

        return $this;
    }

    public function getDurparjour(): ?string
    {
        return $this->durparjour;
    }

    public function setDurparjour(?string $durparjour): self
    {
        $this->durparjour = $durparjour;

        return $this;
    }

    public function getNdossopca(): ?int
    {
        return $this->ndossopca;
    }

    public function setNdossopca(?int $ndossopca): self
    {
        $this->ndossopca = $ndossopca;

        return $this;
    }

    public function getNoRef(): ?int
    {
        return $this->noRef;
    }

    public function setNoRef(?int $noRef): self
    {
        $this->noRef = $noRef;

        return $this;
    }

    public function getDateRef(): ?\DateTimeInterface
    {
        return $this->dateRef;
    }

    public function setDateRef(?\DateTimeInterface $dateRef): self
    {
        $this->dateRef = $dateRef;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIntraInter(): ?string
    {
        return $this->intraInter;
    }

    public function setIntraInter(?string $intraInter): self
    {
        $this->intraInter = $intraInter;

        return $this;
    }

    public function getDateSignature(): ?\DateTimeInterface
    {
        return $this->dateSignature;
    }

    public function setDateSignature(?\DateTimeInterface $dateSignature): self
    {
        $this->dateSignature = $dateSignature;

        return $this;
    }

    public function getDateAccord(): ?\DateTime
    {
        return $this->dateAccord;
    }

    public function setDateAccord(?\DateTime $dateAccord): self
    {
        $this->dateAccord = $dateAccord;

        return $this;
    }

    public function getDateDebutPeriode(): ?\DateTime
    {
        return $this->dateDebutPeriode;
    }

    public function setDateDebutPeriode(?\DateTime $dateDebutPeriode): self
    {
        $this->dateDebutPeriode = $dateDebutPeriode;

        return $this;
    }

    public function getDateFinPeriode(): ?\DateTime
    {
        return $this->dateFinPeriode;
    }

    public function setDateFinPeriode(?\DateTime $dateFinPeriode): self
    {
        $this->dateFinPeriode = $dateFinPeriode;

        return $this;
    }

    public function getDatesDossier(): ?string
    {
        return $this->datesDossier;
    }

    public function setDatesDossier(?string $datesDossier): self
    {
        $this->datesDossier = $datesDossier;

        return $this;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(?\DateTimeInterface $dateEnvoi): self
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    public function getDureeHeures(): ?string
    {
        return $this->dureeHeures;
    }

    public function setDureeHeures(?string $dureeHeures): self
    {
        $this->dureeHeures = $dureeHeures;

        return $this;
    }

    public function getDureeJours(): ?string
    {
        return $this->dureeJours;
    }

    public function setDureeJours(?string $dureeJours): self
    {
        $this->dureeJours = $dureeJours;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getObjectifs(): ?string
    {
        return $this->objectifs;
    }

    public function setObjectifs(?string $objectifs): self
    {
        $this->objectifs = $objectifs;

        return $this;
    }

    public function getTotalHt(): ?string
    {
        return $this->totalHt;
    }

    public function setTotalHt(?string $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    public function getTotalCoutHt(): ?string
    {
        return $this->totalCoutHt;
    }

    public function setTotalCoutHt(?string $totalCoutHt): self
    {
        $this->totalCoutHt = $totalCoutHt;

        return $this;
    }

    public function getPrctMarge(): ?int
    {
        return $this->prctMarge;
    }

    public function setPrctMarge(?int $prctMarge): self
    {
        $this->prctMarge = $prctMarge;

        return $this;
    }

    public function getMontantMarge(): ?string
    {
        return $this->montantMarge;
    }

    public function setMontantMarge(?string $montantMarge): self
    {
        $this->montantMarge = $montantMarge;

        return $this;
    }

    public function getMontantTva(): ?string
    {
        return $this->montantTva;
    }

    public function setMontantTva(?string $montantTva): self
    {
        $this->montantTva = $montantTva;

        return $this;
    }

    public function getTotalTtc(): ?string
    {
        return $this->totalTtc;
    }

    public function setTotalTtc(?string $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    public function getMntDemande(): ?string
    {
        return $this->mntDemande;
    }

    public function setMntDemande(?string $mntDemande): self
    {
        $this->mntDemande = $mntDemande;

        return $this;
    }

    public function getMntAccorde(): ?string
    {
        return $this->mntAccorde;
    }

    public function setMntAccorde(?string $mntAccorde): self
    {
        $this->mntAccorde = $mntAccorde;

        return $this;
    }

    public function getRefAccord(): ?string
    {
        return $this->refAccord;
    }

    public function setRefAccord(?string $refAccord): self
    {
        $this->refAccord = $refAccord;

        return $this;
    }

    public function getSubrogation(): ?string
    {
        return $this->subrogation;
    }

    public function setSubrogation(?string $subrogation): self
    {
        $this->subrogation = $subrogation;

        return $this;
    }

    public function getIdTva(): ?int
    {
        return $this->idTva;
    }

    public function setIdTva(?int $idTva): self
    {
        $this->idTva = $idTva;

        return $this;
    }

    public function getIdbTva(): ?int
    {
        return $this->idbTva;
    }

    public function setIdbTva(?int $idbTva): self
    {
        $this->idbTva = $idbTva;

        return $this;
    }

    public function getIdbClient(): ?int
    {
        return $this->idbClient;
    }

    public function setIdbClient(?int $idbClient): self
    {
        $this->idbClient = $idbClient;

        return $this;
    }

    public function getIdType(): ?int
    {
        return $this->idType;
    }

    public function setIdType(?int $idType): self
    {
        $this->idType = $idType;

        return $this;
    }

    public function getIdbType(): ?int
    {
        return $this->idbType;
    }

    public function setIdbType(?int $idbType): self
    {
        $this->idbType = $idbType;

        return $this;
    }

    public function getIdFormation(): ?int
    {
        return $this->idFormation;
    }

    public function setIdFormation(?int $idFormation): self
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    public function getIdbFormation(): ?int
    {
        return $this->idbFormation;
    }

    public function setIdbFormation(?int $idbFormation): self
    {
        $this->idbFormation = $idbFormation;

        return $this;
    }

    public function getIdCommercial(): ?int
    {
        return $this->idCommercial;
    }

    public function setIdCommercial(?int $idCommercial): self
    {
        $this->idCommercial = $idCommercial;

        return $this;
    }

    public function getIdbCommercial(): ?int
    {
        return $this->idbCommercial;
    }

    public function setIdbCommercial(?int $idbCommercial): self
    {
        $this->idbCommercial = $idbCommercial;

        return $this;
    }

    public function getIdFormateur(): ?Contact
    {
        return $this->idFormateur;
    }

    public function setIdFormateur(?Contact $idFormateur): self
    {
        $this->idFormateur = $idFormateur;

        return $this;
    }

    public function getIdbFormateur(): ?int
    {
        return $this->idbFormateur;
    }

    public function setIdbFormateur(?int $idbFormateur): self
    {
        $this->idbFormateur = $idbFormateur;

        return $this;
    }

    public function getIdOpca(): ?int
    {
        return $this->idOpca;
    }

    public function setIdOpca(?int $idOpca): self
    {
        $this->idOpca = $idOpca;

        return $this;
    }

    public function getIdbOpca(): ?int
    {
        return $this->idbOpca;
    }

    public function setIdbOpca(?int $idbOpca): self
    {
        $this->idbOpca = $idbOpca;

        return $this;
    }

    public function getIdStatut(): ?OrdredemissionStatut
    {
        return $this->idStatut;
    }

    public function setIdStatut(?OrdredemissionStatut $idStatut): self
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    public function getIdbStatut(): ?int
    {
        return $this->idbStatut;
    }

    public function setIdbStatut(?int $idbStatut): self
    {
        $this->idbStatut = $idbStatut;

        return $this;
    }

    public function getIdStatutDoc(): ?int
    {
        return $this->idStatutDoc;
    }

    public function setIdStatutDoc(?int $idStatutDoc): self
    {
        $this->idStatutDoc = $idStatutDoc;

        return $this;
    }

    public function getIdbStatutDoc(): ?int
    {
        return $this->idbStatutDoc;
    }

    public function setIdbStatutDoc(?int $idbStatutDoc): self
    {
        $this->idbStatutDoc = $idbStatutDoc;

        return $this;
    }

    public function getRem(): ?string
    {
        return $this->rem;
    }

    public function setRem(?string $rem): self
    {
        $this->rem = $rem;

        return $this;
    }

    public function getObjectifAction(): ?string
    {
        return $this->objectifAction;
    }

    public function setObjectifAction(?string $objectifAction): self
    {
        $this->objectifAction = $objectifAction;

        return $this;
    }

    public function getDureeAction(): ?string
    {
        return $this->dureeAction;
    }

    public function setDureeAction(?string $dureeAction): self
    {
        $this->dureeAction = $dureeAction;

        return $this;
    }

    public function getIdStructure(): ?Structure
    {
        return $this->idStructure;
    }

    public function setIdStructure(?Structure $idStructure): self
    {
        $this->idStructure = $idStructure;

        return $this;
    }

    public function getIdbStructure(): ?int
    {
        return $this->idbStructure;
    }

    public function setIdbStructure(?int $idbStructure): self
    {
        $this->idbStructure = $idbStructure;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getIdUserAdd(): ?int
    {
        return $this->idUserAdd;
    }

    public function setIdUserAdd(?int $idUserAdd): self
    {
        $this->idUserAdd = $idUserAdd;

        return $this;
    }

    public function getPvTarifJ(): ?string
    {
        return $this->pvTarifJ;
    }

    public function setPvTarifJ(?string $pvTarifJ): self
    {
        $this->pvTarifJ = $pvTarifJ;

        return $this;
    }

    public function getPvTarifDj(): ?string
    {
        return $this->pvTarifDj;
    }

    public function setPvTarifDj(?string $pvTarifDj): self
    {
        $this->pvTarifDj = $pvTarifDj;

        return $this;
    }

    public function getPvTarifH(): ?string
    {
        return $this->pvTarifH;
    }

    public function setPvTarifH(?string $pvTarifH): self
    {
        $this->pvTarifH = $pvTarifH;

        return $this;
    }

    public function getPvTotalHt(): ?string
    {
        if ($this->pvTotalHt === '') {
            $this->pvTotalHt = null;
        }
        return $this->pvTotalHt;
    }

    public function setPvTotalHt(?string $pvTotalHt): self
    {
        if ('' === $pvTotalHt) {
            $pvTotalHt = null;
        }
        $this->pvTotalHt = $pvTotalHt;

        return $this;
    }

    public function getPfmteurJ(): ?string
    {
        return $this->pfmteurJ;
    }

    public function setPfmteurJ(?string $pfmteurJ): self
    {
        $this->pfmteurJ = $pfmteurJ;

        return $this;
    }

    public function getPfmteurDj(): ?string
    {
        return $this->pfmteurDj;
    }

    public function setPfmteurDj(?string $pfmteurDj): self
    {
        $this->pfmteurDj = $pfmteurDj;

        return $this;
    }

    public function getPfmteurH(): ?string
    {
        return $this->pfmteurH;
    }

    public function setPfmteurH(?string $pfmteurH): self
    {
        $this->pfmteurH = $pfmteurH;

        return $this;
    }

    public function getPfmteurTotalHt(): ?string
    {
        if ('' === $this->pfmteurTotalHt) {
            $this->pfmteurTotalHt = null;
        }
        return $this->pfmteurTotalHt;
    }

    public function setPfmteurTotalHt(?string $pfmteurTotalHt): self
    {
        if ('' === $pfmteurTotalHt) {
            $pfmteurTotalHt = null;
        }
        $this->pfmteurTotalHt = $pfmteurTotalHt;

        return $this;
    }

    public function getDateMaj(): ?\DateTimeInterface
    {
        return $this->dateMaj;
    }

    public function setDateMaj(?\DateTimeInterface $dateMaj): self
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    public function getIdUserMaj(): ?int
    {
        return $this->idUserMaj;
    }

    public function setIdUserMaj(?int $idUserMaj): self
    {
        $this->idUserMaj = $idUserMaj;

        return $this;
    }

    public function getStatutRst(): ?bool
    {
        return $this->statutRst;
    }

    public function setStatutRst(?bool $statutRst): self
    {
        $this->statutRst = $statutRst;

        return $this;
    }

    public function getIdAffaire(): ?int
    {
        return $this->idAffaire;
    }

    public function setIdAffaire(?int $idAffaire): self
    {
        $this->idAffaire = $idAffaire;

        return $this;
    }

    public function getIdStrRef(): ?int
    {
        return $this->idStrRef;
    }

    public function setIdStrRef(?int $idStrRef): self
    {
        $this->idStrRef = $idStrRef;

        return $this;
    }

    public function getIdbAffaire(): ?int
    {
        return $this->idbAffaire;
    }

    public function setIdbAffaire(?int $idbAffaire): self
    {
        $this->idbAffaire = $idbAffaire;

        return $this;
    }

    public function getIdbStrRef(): ?int
    {
        return $this->idbStrRef;
    }

    public function setIdbStrRef(?int $idbStrRef): self
    {
        $this->idbStrRef = $idbStrRef;

        return $this;
    }

    public function getMntMarge(): ?string
    {
        return $this->mntMarge;
    }

    public function setMntMarge(?string $mntMarge): self
    {
        $this->mntMarge = $mntMarge;

        return $this;
    }

    public function getMntTva(): ?string
    {
        return $this->mntTva;
    }

    public function setMntTva(?string $mntTva): self
    {
        $this->mntTva = $mntTva;

        return $this;
    }

    public function getDatePrevEnc(): ?\DateTimeInterface
    {
        return $this->datePrevEnc;
    }

    public function setDatePrevEnc(?\DateTimeInterface $datePrevEnc): self
    {
        $this->datePrevEnc = $datePrevEnc;

        return $this;
    }

    public function getDateEnc(): ?\DateTimeInterface
    {
        return $this->dateEnc;
    }

    public function setDateEnc(?\DateTimeInterface $dateEnc): self
    {
        $this->dateEnc = $dateEnc;

        return $this;
    }

    public function getPayeur(): ?string
    {
        return $this->payeur;
    }

    public function setPayeur(?string $payeur): self
    {
        $this->payeur = $payeur;

        return $this;
    }

    public function getTauxCom(): ?int
    {
        return $this->tauxCom;
    }

    public function setTauxCom(?int $tauxCom): self
    {
        $this->tauxCom = $tauxCom;

        return $this;
    }

    public function getNbStagiaires(): ?int
    {
        return $this->nbStagiaires;
    }

    public function setNbStagiaires(?int $nbStagiaires): self
    {
        $this->nbStagiaires = $nbStagiaires;

        return $this;
    }

    public function getPayencaiss(): ?string
    {
        return $this->payencaiss;
    }

    public function setPayencaiss(string $payencaiss): self
    {
        $this->payencaiss = $payencaiss;

        return $this;
    }

    public function getSoustraitance(): ?string
    {
        return $this->soustraitance;
    }

    public function setSoustraitance(?string $soustraitance): self
    {
        $this->soustraitance = $soustraitance;

        return $this;
    }

    public function getIdClient(): ?Contact
    {
        return $this->idClient;
    }

    public function setIdClient(?Contact $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    /********************************* STAGIAIRES *****************************/
    /**
     * Add Stagiaire
     *
     * @param Contact $stagiaire
     * @return Dossier
     */
    public function addStagiaire(Contact $stagiaire) {
        if(!$this->stagiaires->contains($stagiaire)) {
            $this->stagiaires[] = $stagiaire;
            $stagiaire->setIdFormationLiee($this);
            return $this;
        }
    }

    /**
     * Remove Stagiaire
     *
     * @param Contact $stagiaire
     */
    public function removeStagiaire(Contact $stagiaire) {
        $this->stagiaires->removeElement($stagiaire);
    }

    /**
     * Get stagiaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStagiaires()
    {
        return $this->stagiaires;
    }

    public function setStagiaires($aStagiaire) {
        $this->stagiaires = $aStagiaire;
    }
    /********************************* FIN STAGIAIRES *****************************/


    /********************************* SUIVI OM *****************************/
    /**
     * Add suiviMissions
     *
     * @param FormationSuiviOrdredemission $suiviMissions
     * @return Dossier
     */
    public function addSuiviMission(FormationSuiviOrdredemission $suiviOM) {
        if(!$this->suiviMissions->contains($suiviOM)) {
            $this->suiviMissions[] = $suiviOM;
            $suiviOM->setIdFormation($this);
        }

        return $this;
    }

    /**
     * Remove suiviMission
     *
     * @param FormationSuiviOrdredemission $suiviMission
     */
    public function removeSuiviMission(FormationSuiviOrdredemission $suiviOM) {
        $this->suiviMissions->removeElement($suiviOM);
    }

    /**
     * Get suiviMissions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSuiviMissions()
    {
        return $this->suiviMissions;
    }
    /********************************* FIN SUIVI OM *****************************/

    /********************************* COMMENTAIRES *****************************/
    /**
     * Add commentiaress
     *
     * @param Note $commentaires
     * @return Dossier
     */
    public function addCommentaire(DossierNote $commentaire) {
        if(!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setFormation($this);
        }

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param Note $commentaire
     */
    public function removeCommentaire(DossierNote $commentaire) {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    public function setCommentaires($aCommentaire) {
        $this->commentaires = $aCommentaire;
    }

    /********************************* FIN COMMENTAIRES *****************************/

    /**
     * @return FormateurStatut|null
     */
    public function getStatutFormateur(): ?FormateurStatut
    {
        return $this->statutFormateur;
    }

    /**
     * @param FormateurStatut|null $statut
     * @return Dossier
     */
    public function setStatutFormateur(?FormateurStatut $statut): self
    {
        $this->statutFormateur = $statut;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRefOrdreMission(): ?string {
        return $this->refOrdreMission;
    }

    /**
     * @param string|null $refOrdreMission
     */
    public function setRefOrdreMission(?string $refOrdreMission): self {
        $this->refOrdreMission = $refOrdreMission;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatePrintOrdreMission(): ?\DateTime
    {
        return $this->datePrintOrdreMission;
    }

    /**
     * @param \DateTime|null $datePrintOrdreMission
     */
    public function setDatePrintOrdreMission(?\DateTime $datePrintOrdreMission): void
    {
        $this->datePrintOrdreMission = $datePrintOrdreMission;
    }


}
