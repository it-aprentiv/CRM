<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\MakerBundle\Str;

/**
 * 1Facture
 *
 * @ORM\Table(name="1_facture", indexes={@ORM\Index(name="id_structure", columns={"id_structure"}), @ORM\Index(name="idb_structure", columns={"idb_structure"}), @ORM\Index(name="id_affaire", columns={"id_affaire"}), @ORM\Index(name="idb_affaire", columns={"idb_affaire"})})
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
 */
class Facture
{
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
     * @ORM\Column(name="no_ref", type="integer", nullable=true)
     */
    private $noRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=100, nullable=true)
     */
    private $ref;

    /**
     * @var Avoir
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Avoir")
     * @ORM\JoinColumn(name="id_avoir_liee", referencedColumnName="id", nullable=true)
     */
    private $idAvoirLiee;


    /**
     * @var int|null
     *
     * @ORM\Column(name="id_structure", type="integer", nullable=true)
     */
    private $idStructure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_structure", type="integer", nullable=true)
     */
    private $idbStructure;

    /**
     * @var Contact|null
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_contact", referencedColumnName="id", nullable=true)
     */
    private $idContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact", type="integer", nullable=true)
     */
    private $idbContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis_reference", type="integer", nullable=true)
     */
    private $idDevisReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_reference", type="integer", nullable=true)
     */
    private $idbDevisReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_affaire", type="integer", nullable=true)
     */
    private $idAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_affaire", type="integer", nullable=true)
     */
    private $idbAffaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_devis_ref", type="string", length=50, nullable=true)
     */
    private $noDevisRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_facture", type="string", length=50, nullable=true)
     */
    private $noFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intitule_facture", type="text", length=65535, nullable=true)
     */
    private $intituleFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details", type="text", length=0, nullable=true)
     */
    private $details;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_emission", type="datetime", nullable=true)
     */
    private $dateEmission;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditions_reglement", type="string", length=255, nullable=true)
     */
    private $conditionsReglement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reglement_final", type="datetime", nullable=true)
     */
    private $dateReglementFinal;

    /**
     * @var FactureStatut|null
     * @ORM\ManyToOne(targetEntity="App\Entity\FactureStatut")
     * @ORM\JoinColumn(name="id_statut", referencedColumnName="id", nullable=true)
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
     * @ORM\Column(name="total_ht", type="string", length=50, nullable=true)
     */
    private $totalHt = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pourcentage_remise", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $pourcentageRemise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_remise_fixe", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantRemiseFixe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_final_remise", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantFinalRemise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pourcentage_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $pourcentageTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalTtc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

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
     * @var string|null
     *
     * @ORM\Column(name="conditions_rglmnt", type="string", length=255, nullable=true)
     */
    private $conditionsRglmnt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ref", type="datetime", nullable=true)
     */
    private $dateRef;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rglmnt_final", type="datetime", nullable=true)
     */
    private $dateRglmntFinal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dest1", type="string", length=100, nullable=true)
     */
    private $dest1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dest2", type="string", length=1, nullable=true)
     */
    private $dest2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_activite", type="integer", nullable=true)
     */
    private $idActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cond_rglmnt", type="integer", nullable=true)
     */
    private $idCondRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact_opca", type="integer", nullable=true)
     */
    private $idContactOpca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact_str", type="integer", nullable=true)
     */
    private $idContactStr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis_ref", type="integer", nullable=true)
     */
    private $idDevisRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture_cli", type="integer", nullable=true)
     */
    private $idFactureCli;

    /**
     * @var Contact|null
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_opca", referencedColumnName="id", nullable=true)
     */
    private $idOpca;

    /**
     * @var Collaborateur
     * @ORM\ManyToOne(targetEntity="App\Entity\Collaborateur")
     * @ORM\JoinColumn(name="id_responsable", referencedColumnName="id", nullable=true)
     */
    private $idResponsable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_str_ref", type="integer", nullable=true)
     */
    private $idStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_activite", type="integer", nullable=true)
     */
    private $idbActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cond_rglmnt", type="integer", nullable=true)
     */
    private $idbCondRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact_opca", type="integer", nullable=true)
     */
    private $idbContactOpca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact_str", type="integer", nullable=true)
     */
    private $idbContactStr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_ref", type="integer", nullable=true)
     */
    private $idbDevisRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture_cli", type="integer", nullable=true)
     */
    private $idbFactureCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_opca", type="integer", nullable=true)
     */
    private $idbOpca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_responsable", type="integer", nullable=true)
     */
    private $idbResponsable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_str_ref", type="integer", nullable=true)
     */
    private $idbStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_tva", type="integer", nullable=true)
     */
    private $idbTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_marge", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_rem", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntRem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_dossier_ref", type="string", length=100, nullable=true)
     */
    private $noDossierRef;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prct_marge", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reste_a_regler", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $resteARegler = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="taux_rem", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxRem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cout_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCoutHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht_avant_rem", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHtAvantRem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_regle", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalRegle = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;

    /**
     * @var FormationDossier|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossier", inversedBy="factures")
     * @ORM\JoinColumn(name="id_dossier", referencedColumnName="id", nullable=true)
     */
    private $idDossier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_dossier", type="integer", nullable=true)
     */
    private $idbDossier;

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
     * @var float|null
     *
     * @ORM\Column(name="duree_heures", type="float", precision=10, scale=0, nullable=true)
     */
    private $dureeHeures;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_jours", type="integer", nullable=true)
     */
    private $dureeJours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_accord", type="string", length=50, nullable=true)
     */
    private $refAccord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_rest_du", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $mntRestDu = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_regle_ht", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalRegleHt = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="opca_clt", type="string", length=30, nullable=true)
     */
    private $opcaClt;

    /**
     * @var string
     *
     * @ORM\Column(name="encaisse", type="string", length=30, nullable=true)
     */
    private $encaisse;

    /**
     * @var string
     *
     * @ORM\Column(name="natureavoir", type="string", length=200, nullable=true)
     */
    private $natureavoir;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FactureNote", mappedBy="facture", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $commentaires;

    public function __construct()
    {
        $this->dateAdd = new \DateTime();
        $this->commentaires = new ArrayCollection();
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

    public function getNoRef(): ?int
    {
        return $this->noRef;
    }

    public function setNoRef(int $noRef): self
    {
        $this->noRef = $noRef;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;


        return $this;
    }

    public function getIdAvoirLiee(): ?Avoir
    {
        
        if ($this->idAvoirLiee && $this->idAvoirLiee->getId() == 0) {
            return null;
        }
        
        return $this->idAvoirLiee;
    }

    public function setIdAvoirLiee(?Avoir $idAvoirLiee): self
    {
        $this->idAvoirLiee = $idAvoirLiee;

        return $this;
    }

    public function getIdStructure(): ?int
    {
        return $this->idStructure;
    }
    /** APR-190: il y a des clients qui n'a pas de structure: le champ doit être nullable */
    public function setIdStructure($idStructure): self
    {
        $this->idStructure = $idStructure;

        return $this;
    }

    public function getIdbStructure(): ?int
    {
        return $this->idbStructure;
    }

    public function setIdbStructure(int $idbStructure): self
    {
        $this->idbStructure = $idbStructure;

        return $this;
    }

    public function getIdContact(): ?Contact
    {
        return $this->idContact;
    }

    public function setIdContact(?Contact $idContact): self
    {
        $this->idContact = $idContact;

        return $this;
    }

    public function getIdbContact(): ?int
    {
        return $this->idbContact;
    }

    public function setIdbContact(int $idbContact): self
    {
        $this->idbContact = $idbContact;

        return $this;
    }

    public function getIdDevisReference(): ?int
    {
        return $this->idDevisReference;
    }

    public function setIdDevisReference(int $idDevisReference): self
    {
        $this->idDevisReference = $idDevisReference;

        return $this;
    }

    public function getIdbDevisReference(): ?int
    {
        return $this->idbDevisReference;
    }

    public function setIdbDevisReference(int $idbDevisReference): self
    {
        $this->idbDevisReference = $idbDevisReference;

        return $this;
    }

    public function getIdAffaire(): ?int
    {
        return $this->idAffaire;
    }

    public function setIdAffaire(int $idAffaire): self
    {
        $this->idAffaire = $idAffaire;

        return $this;
    }

    public function getIdbAffaire(): ?int
    {
        return $this->idbAffaire;
    }

    public function setIdbAffaire(int $idbAffaire): self
    {
        $this->idbAffaire = $idbAffaire;

        return $this;
    }

    public function getNoDevisRef(): ?string
    {
        return $this->noDevisRef;
    }

    public function setNoDevisRef(string $noDevisRef): self
    {
        $this->noDevisRef = $noDevisRef;

        return $this;
    }

    public function getNoFacture(): ?string
    {
        return $this->noFacture;
    }

    public function setNoFacture(string $noFacture): self
    {
        $this->noFacture = $noFacture;

        return $this;
    }

    public function getIntituleFacture(): ?string
    {
        return $this->intituleFacture;
    }

    public function setIntituleFacture(string $intituleFacture): self
    {
        $this->intituleFacture = $intituleFacture;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): self
    {
        $this->details = $details;

        return $this;
    }

    public function getDateEmission(): ?\DateTimeInterface
    {
        return $this->dateEmission;
    }

    public function setDateEmission(\DateTimeInterface $dateEmission): self
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    public function getConditionsReglement(): ?string
    {
        return $this->conditionsReglement;
    }

    public function setConditionsReglement(string $conditionsReglement): self
    {
        $this->conditionsReglement = $conditionsReglement;

        return $this;
    }

    public function getDateReglementFinal(): ?\DateTimeInterface
    {
        return $this->dateReglementFinal;
    }

    public function setDateReglementFinal(\DateTimeInterface $dateReglementFinal): self
    {
        $this->dateReglementFinal = $dateReglementFinal;

        return $this;
    }

    public function getIdStatut(): ?FactureStatut
    {
        return $this->idStatut;
    }

    public function setIdStatut(FactureStatut $idStatut): self
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    public function getIdbStatut(): ?int
    {
        return $this->idbStatut;
    }

    public function setIdbStatut(int $idbStatut): self
    {
        $this->idbStatut = $idbStatut;

        return $this;
    }

    public function getTotalHt(): ?string
    {
        return $this->totalHt;
    }

    public function setTotalHt(string $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    public function getPourcentageRemise(): ?string
    {
        return $this->pourcentageRemise;
    }

    public function setPourcentageRemise(?string $pourcentageRemise): self
    {
        $this->pourcentageRemise = $pourcentageRemise;

        return $this;
    }

    public function getMontantRemiseFixe(): ?string
    {
        return $this->montantRemiseFixe;
    }

    public function setMontantRemiseFixe(?string $montantRemiseFixe): self
    {
        $this->montantRemiseFixe = $montantRemiseFixe;

        return $this;
    }

    public function getMontantFinalRemise(): ?string
    {
        return $this->montantFinalRemise;
    }

    public function setMontantFinalRemise(?string $montantFinalRemise): self
    {
        $this->montantFinalRemise = $montantFinalRemise;

        return $this;
    }

    public function getPourcentageTva(): ?string
    {
        return $this->pourcentageTva;
    }

    public function setPourcentageTva(?string $pourcentageTva): self
    {
        $this->pourcentageTva = $pourcentageTva;

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getIdUserAdd(): ?int
    {
        return $this->idUserAdd;
    }

    public function setIdUserAdd(int $idUserAdd): self
    {
        $this->idUserAdd = $idUserAdd;

        return $this;
    }

    public function getDateMaj(): ?\DateTimeInterface
    {
        return $this->dateMaj;
    }

    public function setDateMaj(\DateTimeInterface $dateMaj): self
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    public function getIdUserMaj(): ?int
    {
        return $this->idUserMaj;
    }

    public function setIdUserMaj(int $idUserMaj): self
    {
        $this->idUserMaj = $idUserMaj;

        return $this;
    }

    public function getStatutRst(): ?bool
    {
        return $this->statutRst;
    }

    public function setStatutRst(bool $statutRst): self
    {
        $this->statutRst = $statutRst;

        return $this;
    }

    public function getConditionsRglmnt(): ?string
    {
        return $this->conditionsRglmnt;
    }

    public function setConditionsRglmnt(string $conditionsRglmnt): self
    {
        $this->conditionsRglmnt = $conditionsRglmnt;

        return $this;
    }

    public function getDateRef(): ?\DateTimeInterface
    {
        return $this->dateRef;
    }

    public function setDateRef(\DateTimeInterface $dateRef): self
    {
        $this->dateRef = $dateRef;

        return $this;
    }

    public function getDateRglmntFinal(): ?\DateTimeInterface
    {
        return $this->dateRglmntFinal;
    }

    public function setDateRglmntFinal(\DateTimeInterface $dateRglmntFinal): self
    {
        $this->dateRglmntFinal = $dateRglmntFinal;

        return $this;
    }

    public function getDest1(): ?string
    {
        return $this->dest1;
    }

    public function setDest1(?string $dest1): self
    {
        $this->dest1 = $dest1;

        return $this;
    }

    public function getDest2(): ?string
    {
        return $this->dest2;
    }

    public function setDest2(?string $dest2): self
    {
        $this->dest2 = $dest2;

        return $this;
    }

    public function getIdActivite(): ?int
    {
        return $this->idActivite;
    }

    public function setIdActivite(int $idActivite): self
    {
        $this->idActivite = $idActivite;

        return $this;
    }

    public function getIdCondRglmnt(): ?int
    {
        return $this->idCondRglmnt;
    }

    public function setIdCondRglmnt(int $idCondRglmnt): self
    {
        $this->idCondRglmnt = $idCondRglmnt;

        return $this;
    }

    public function getIdContactOpca(): ?int
    {
        return $this->idContactOpca;
    }

    public function setIdContactOpca(int $idContactOpca): self
    {
        $this->idContactOpca = $idContactOpca;

        return $this;
    }

    public function getIdContactStr(): ?int
    {
        return $this->idContactStr;
    }

    public function setIdContactStr(int $idContactStr): self
    {
        $this->idContactStr = $idContactStr;

        return $this;
    }

    public function getIdDevisRef(): ?int
    {
        return $this->idDevisRef;
    }

    public function setIdDevisRef(int $idDevisRef): self
    {
        $this->idDevisRef = $idDevisRef;

        return $this;
    }

    public function getIdFactureCli(): ?int
    {
        return $this->idFactureCli;
    }

    public function setIdFactureCli(int $idFactureCli): self
    {
        $this->idFactureCli = $idFactureCli;

        return $this;
    }

    public function getIdOpca(): ?Contact
    {
        return $this->idOpca;
    }

    public function setIdOpca(?Contact $idOpca): self
    {
        $this->idOpca = $idOpca;

        return $this;
    }

    public function getIdResponsable(): ?Collaborateur
    {
        return $this->idResponsable;
    }

    public function setIdResponsable(?Collaborateur $idResponsable): self
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }

    public function getIdStrRef(): ?int
    {
        return $this->idStrRef;
    }

    public function setIdStrRef(int $idStrRef): self
    {
        $this->idStrRef = $idStrRef;

        return $this;
    }

    public function getIdTva(): ?int
    {
        return $this->idTva;
    }

    public function setIdTva(int $idTva): self
    {
        $this->idTva = $idTva;

        return $this;
    }

    public function getIdbActivite(): ?int
    {
        return $this->idbActivite;
    }

    public function setIdbActivite(int $idbActivite): self
    {
        $this->idbActivite = $idbActivite;

        return $this;
    }

    public function getIdbCondRglmnt(): ?int
    {
        return $this->idbCondRglmnt;
    }

    public function setIdbCondRglmnt(int $idbCondRglmnt): self
    {
        $this->idbCondRglmnt = $idbCondRglmnt;

        return $this;
    }

    public function getIdbContactOpca(): ?int
    {
        return $this->idbContactOpca;
    }

    public function setIdbContactOpca(int $idbContactOpca): self
    {
        $this->idbContactOpca = $idbContactOpca;

        return $this;
    }

    public function getIdbContactStr(): ?int
    {
        return $this->idbContactStr;
    }

    public function setIdbContactStr(int $idbContactStr): self
    {
        $this->idbContactStr = $idbContactStr;

        return $this;
    }

    public function getIdbDevisRef(): ?int
    {
        return $this->idbDevisRef;
    }

    public function setIdbDevisRef(int $idbDevisRef): self
    {
        $this->idbDevisRef = $idbDevisRef;

        return $this;
    }

    public function getIdbFactureCli(): ?int
    {
        return $this->idbFactureCli;
    }

    public function setIdbFactureCli(int $idbFactureCli): self
    {
        $this->idbFactureCli = $idbFactureCli;

        return $this;
    }

    public function getIdbOpca(): ?int
    {
        return $this->idbOpca;
    }

    public function setIdbOpca(int $idbOpca): self
    {
        $this->idbOpca = $idbOpca;

        return $this;
    }

    public function getIdbResponsable(): ?int
    {
        return $this->idbResponsable;
    }

    public function setIdbResponsable(int $idbResponsable): self
    {
        $this->idbResponsable = $idbResponsable;

        return $this;
    }

    public function getIdbStrRef(): ?int
    {
        return $this->idbStrRef;
    }

    public function setIdbStrRef(int $idbStrRef): self
    {
        $this->idbStrRef = $idbStrRef;

        return $this;
    }

    public function getIdbTva(): ?int
    {
        return $this->idbTva;
    }

    public function setIdbTva(int $idbTva): self
    {
        $this->idbTva = $idbTva;

        return $this;
    }

    public function getMntMarge(): ?string
    {
        return $this->mntMarge;
    }

    public function setMntMarge(string $mntMarge): self
    {
        $this->mntMarge = $mntMarge;

        return $this;
    }

    public function getMntRem(): ?string
    {
        return $this->mntRem;
    }

    public function setMntRem(string $mntRem): self
    {
        $this->mntRem = $mntRem;

        return $this;
    }

    public function getMntTtc(): ?string
    {
        return $this->mntTtc;
    }

    public function setMntTtc(string $mntTtc): self
    {
        $this->mntTtc = $mntTtc;

        return $this;
    }

    public function getMntTva(): ?string
    {
        return $this->mntTva;
    }

    public function setMntTva(string $mntTva): self
    {
        $this->mntTva = $mntTva;

        return $this;
    }

    public function getNoDossierRef(): ?string
    {
        return $this->noDossierRef;
    }

    public function setNoDossierRef(string $noDossierRef): self
    {
        $this->noDossierRef = $noDossierRef;

        return $this;
    }

    public function getPrctMarge(): ?float
    {
        return $this->prctMarge;
    }

    public function setPrctMarge(float $prctMarge): self
    {
        $this->prctMarge = $prctMarge;

        return $this;
    }

    public function getResteARegler(): ?string
    {
        return $this->resteARegler;
    }

    public function setResteARegler(?string $resteARegler): self
    {
        $this->resteARegler = $resteARegler;

        return $this;
    }

    public function getTauxRem(): ?float
    {
        return $this->tauxRem;
    }

    public function setTauxRem(float $tauxRem): self
    {
        $this->tauxRem = $tauxRem;

        return $this;
    }

    public function getTotalCoutHt(): ?string
    {
        return $this->totalCoutHt;
    }

    public function setTotalCoutHt(string $totalCoutHt): self
    {
        $this->totalCoutHt = $totalCoutHt;

        return $this;
    }

    public function getTotalHtAvantRem(): ?string
    {
        return $this->totalHtAvantRem;
    }

    public function setTotalHtAvantRem(string $totalHtAvantRem): self
    {
        $this->totalHtAvantRem = $totalHtAvantRem;

        return $this;
    }

    public function getTotalRegle(): ?string
    {
        return $this->totalRegle;
    }

    public function setTotalRegle(string $totalRegle): self
    {
        $this->totalRegle = $totalRegle;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdDossier(): ?FormationDossier
    {
        return $this->idDossier;
    }

    public function setIdDossier(?FormationDossier $idDossier = null): self
    {
        $this->idDossier = $idDossier;

        return $this;
    }

    public function getIdbDossier(): ?int
    {
        return $this->idbDossier;
    }

    public function setIdbDossier(int $idbDossier): self
    {
        $this->idbDossier = $idbDossier;

        return $this;
    }

    public function getDateDebutPeriode(): ?\DateTimeInterface
    {
        return $this->dateDebutPeriode;
    }

    public function setDateDebutPeriode(\DateTimeInterface $dateDebutPeriode): self
    {
        $this->dateDebutPeriode = $dateDebutPeriode;

        return $this;
    }

    public function getDateFinPeriode(): ?\DateTimeInterface
    {
        return $this->dateFinPeriode;
    }

    public function setDateFinPeriode(\DateTimeInterface $dateFinPeriode): self
    {
        $this->dateFinPeriode = $dateFinPeriode;

        return $this;
    }

    public function getDureeHeures(): ?float
    {
        return $this->dureeHeures;
    }

    public function setDureeHeures(float $dureeHeures): self
    {
        $this->dureeHeures = $dureeHeures;

        return $this;
    }

    public function getDureeJours(): ?int
    {
        return $this->dureeJours;
    }

    public function setDureeJours(int $dureeJours): self
    {
        $this->dureeJours = $dureeJours;

        return $this;
    }

    public function getRefAccord(): ?string
    {
        return $this->refAccord;
    }

    public function setRefAccord(string $refAccord): self
    {
        $this->refAccord = $refAccord;

        return $this;
    }

    public function getMntRestDu(): ?string
    {
        return $this->mntRestDu;
    }

    public function setMntRestDu(string $mntRestDu): self
    {
        $this->mntRestDu = $mntRestDu;

        return $this;
    }

    public function getTotalRegleHt(): ?string
    {
        return $this->totalRegleHt;
    }

    public function setTotalRegleHt(string $totalRegleHt): self
    {
        $this->totalRegleHt = $totalRegleHt;

        return $this;
    }

    public function getOpcaClt(): ?string
    {
        return strtoupper($this->opcaClt);
    }

    public function setOpcaClt(?string $opcaClt): self
    {
        $this->opcaClt = $opcaClt;

        return $this;
    }

    public function getEncaisse(): ?string
    {
        return $this->encaisse;
    }

    public function setEncaisse(string $encaisse): self
    {
        $this->encaisse = $encaisse;

        return $this;
    }

    public function getNatureavoir(): ?string
    {
        return $this->natureavoir;
    }

    public function setNatureavoir(string $natureavoir): self
    {
        $this->natureavoir = $natureavoir;

        return $this;
    }

    /**
     * @return Collection|FactureNote[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(FactureNote $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setFacture($this);
        }

        return $this;
    }

    public function removeCommentaire(FactureNote $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getFacture() === $this) {
                $commentaire->setFacture(null);
            }
        }

        return $this;
    }

    /**
     * getter for imaginary property "num_avoir"
     */
    public function getNum_avoir(){
        
        return $this->idAvoirLiee instanceof Avoir && $this->idAvoirLiee->getId() !== 0 ? $this->idAvoirLiee->getRef() : null;
    }

    /**
     * getter for imaginary property "avoirMontantTTC"
     *
     * @return string|null
     */
    public function getAvoirMontantTTC(){
        // APR-154
        return $this->idAvoirLiee instanceof Avoir ? $this->idAvoirLiee->getTotalTtc() : null;
    }

    /**
     * getter for imaginary property "avoirMontantTva"
     *
     * @return string|null
     */
    public function getAvoirMontantTva(){
        return $this->idAvoirLiee instanceof Avoir ? $this->idAvoirLiee->getMntTva() : null;
    }
}
