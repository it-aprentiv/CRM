<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * 1Encaissement
 *
 * @ORM\Table(name="1_encaissement", indexes={@ORM\Index(name="id_facture", columns={"id_facture"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="idb_facture", columns={"idb_facture"})})
 * @ORM\Entity(repositoryClass="App\Repository\EncaissementRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Encaissement {

    CONST SOURCE_DOSSIER = 'dossier';
    CONST SOURCE_DOMLOC = 'domiciliation/location';

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
     * @var string|null
     *
     * @ORM\Column(name="no_ref", type="string", length=255, nullable=true)
     */
    private $noRef;

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
     * @var int|null
     *
     * @ORM\Column(name="id_detail_affaire", type="integer", nullable=true)
     */
    private $idDetailAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_detail_affaire", type="integer", nullable=true)
     */
    private $idbDetailAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=true)
     */
    private $idFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture", type="integer", nullable=true)
     */
    private $idbFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_detail_facture", type="integer", nullable=true)
     */
    private $idDetailFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_detail_facture", type="integer", nullable=true)
     */
    private $idbDetailFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture_encaiss", type="integer", nullable=true)
     */
    private $idFactureEncaiss;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture_encaiss", type="integer", nullable=true)
     */
    private $idbFactureEncaiss;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_piece", type="integer", nullable=true)
     */
    private $idPiece;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_piece", type="integer", nullable=true)
     */
    private $idbPiece;

    /**
     * @ORM\ManyToOne(targetEntity="Structure")
     * @ORM\JoinColumn(name="id_structure", nullable=true)
     */
    private $structure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_structure", type="integer", nullable=true)
     */
    private $idbStructure;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="date_prev_encaiss", type="datetime", nullable=true)
     */
    private $datePrevEncaiss;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="date_reelle_encaiss", type="datetime", nullable=true)
     */
    private $dateReelleEncaiss;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moyen_reglement", type="integer", nullable=true)
     */
    private $idMoyenReglement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_moyen_reglement", type="integer", nullable=true)
     */
    private $idbMoyenReglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_total_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTotalTva;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

    /**
     * @var DateTime|null
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
     * @ORM\Column(name="payeur", type="string", length=255, nullable=true)
     */
    private $payeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_comm", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntComm;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="date_paiement_comm", type="datetime", nullable=true)
     */
    private $datePaiementComm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut_comm", type="integer", nullable=true)
     */
    private $idStatutComm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut_comm", type="integer", nullable=true)
     */
    private $idbStatutComm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="texte_rmq", type="string", length=255, nullable=true)
     */
    private $texteRmq;

    /**
     * @var string
     *
     * @ORM\Column(name="chequeattencaiss", type="string", length=30, nullable=true)
     */
    private $chequeattencaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="numcheque", type="string", length=100, nullable=true)
     */
    private $numcheque;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="datecheque", type="datetime", nullable=true)
     */
    private $datecheque;

    /**
     * @ORM\Column(name="mntant_reglementclient", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $mntantReglementclient;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dtvalidite", type="datetime", nullable=true)
     */
    private $dtvalidite;

    /**
     * @var string
     *
     * @ORM\Column(name="typereglclient", type="string", length=100, nullable=true)
     */
    private $typereglclient;

    /**
     * @var string
     *
     * @ORM\Column(name="typereglopca", type="string", length=100, nullable=true)
     */
    private $typereglopca;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_encaisse", type="string", length=200, nullable=true)
     */
    private $montantEncaisse;

    /**
     * @var string
     *
     * @ORM\Column(name="restedu", type="string", length=200, nullable=false)
     */
    private $restedu;

    /**
     * @ORM\OneToMany(targetEntity="EncaissementNote", mappedBy="encaissement", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $commentaires;

    /**
     * @ORM\Column(type="string", length=50, options={"default" : "dossier"})
     */
    private $source = "dossier";

    public function __construct() {
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getIdb(): ?int {
        return $this->idb;
    }

    public function setIdb(int $idb): self {
        $this->idb = $idb;

        return $this;
    }

    public function getNoRef(): ?string {
        return $this->noRef;
    }

    public function setNoRef(?string $noRef): self {
        $this->noRef = $noRef;

        return $this;
    }

    public function getIdAffaire(): ?int {
        return $this->idAffaire;
    }

    public function setIdAffaire(?int $idAffaire): self {
        $this->idAffaire = $idAffaire;

        return $this;
    }

    public function getIdbAffaire(): ?int {
        return $this->idbAffaire;
    }

    public function setIdbAffaire(?int $idbAffaire): self {
        $this->idbAffaire = $idbAffaire;

        return $this;
    }

    public function getIdDetailAffaire(): ?int {
        return $this->idDetailAffaire;
    }

    public function setIdDetailAffaire(?int $idDetailAffaire): self {
        $this->idDetailAffaire = $idDetailAffaire;

        return $this;
    }

    public function getIdbDetailAffaire(): ?int {
        return $this->idbDetailAffaire;
    }

    public function setIdbDetailAffaire(?int $idbDetailAffaire): self {
        $this->idbDetailAffaire = $idbDetailAffaire;

        return $this;
    }

    public function getIdFacture(): ?int {
        return $this->idFacture;
    }

    public function setIdFacture(?int $idFacture): self {
        $this->idFacture = $idFacture;

        return $this;
    }

    public function getIdbFacture(): ?int {
        return $this->idbFacture;
    }

    public function setIdbFacture(?int $idbFacture): self {
        $this->idbFacture = $idbFacture;

        return $this;
    }

    public function getIdDetailFacture(): ?int {
        return $this->idDetailFacture;
    }

    public function setIdDetailFacture(?int $idDetailFacture): self {
        $this->idDetailFacture = $idDetailFacture;

        return $this;
    }

    public function getIdbDetailFacture(): ?int {
        return $this->idbDetailFacture;
    }

    public function setIdbDetailFacture(?int $idbDetailFacture): self {
        $this->idbDetailFacture = $idbDetailFacture;

        return $this;
    }

    public function getIdFactureEncaiss(): ?int {
        return $this->idFactureEncaiss;
    }

    public function setIdFactureEncaiss(?int $idFactureEncaiss): self {
        $this->idFactureEncaiss = $idFactureEncaiss;

        return $this;
    }

    public function getIdbFactureEncaiss(): ?int {
        return $this->idbFactureEncaiss;
    }

    public function setIdbFactureEncaiss(?int $idbFactureEncaiss): self {
        $this->idbFactureEncaiss = $idbFactureEncaiss;

        return $this;
    }

    public function getIdPiece(): ?int {
        return $this->idPiece;
    }

    public function setIdPiece(?int $idPiece): self {
        $this->idPiece = $idPiece;

        return $this;
    }

    public function getIdbPiece(): ?int {
        return $this->idbPiece;
    }

    public function setIdbPiece(?int $idbPiece): self {
        $this->idbPiece = $idbPiece;

        return $this;
    }

    public function getIdbStructure(): ?int {
        return $this->idbStructure;
    }

    public function setIdbStructure(?int $idbStructure): self {
        $this->idbStructure = $idbStructure;

        return $this;
    }

    public function getDatePrevEncaiss(): ?DateTimeInterface {
        return $this->datePrevEncaiss;
    }

    public function setDatePrevEncaiss(?DateTimeInterface $datePrevEncaiss): self {
        $this->datePrevEncaiss = $datePrevEncaiss;

        return $this;
    }

    public function getDateReelleEncaiss(): ?DateTimeInterface {
        return $this->dateReelleEncaiss;
    }

    public function setDateReelleEncaiss(?DateTimeInterface $dateReelleEncaiss): self {
        $this->dateReelleEncaiss = $dateReelleEncaiss;

        return $this;
    }

    public function getIdMoyenReglement(): ?int {
        return $this->idMoyenReglement;
    }

    public function setIdMoyenReglement(?int $idMoyenReglement): self {
        $this->idMoyenReglement = $idMoyenReglement;

        return $this;
    }

    public function getIdbMoyenReglement(): ?int {
        return $this->idbMoyenReglement;
    }

    public function setIdbMoyenReglement(?int $idbMoyenReglement): self {
        $this->idbMoyenReglement = $idbMoyenReglement;

        return $this;
    }

    public function getMntHt(): ?string {
        return $this->mntHt;
    }

    public function setMntHt(?string $mntHt): self {
        $this->mntHt = $mntHt;

        return $this;
    }

    public function getMntTtc(): ?string {
        return $this->mntTtc;
    }

    public function setMntTtc(?string $mntTtc): self {
        $this->mntTtc = $mntTtc;

        return $this;
    }

    public function getMntTotalTva(): ?string {
        return $this->mntTotalTva;
    }

    public function setMntTotalTva(?string $mntTotalTva): self {
        $this->mntTotalTva = $mntTotalTva;

        return $this;
    }

    public function getDateAdd(): ?DateTimeInterface {
        return $this->dateAdd;
    }

    public function setDateAdd(DateTimeInterface $dateAdd): self {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getIdUserAdd(): ?int {
        return $this->idUserAdd;
    }

    public function setIdUserAdd(?int $idUserAdd): self {
        $this->idUserAdd = $idUserAdd;

        return $this;
    }

    public function getDateMaj(): ?DateTimeInterface {
        return $this->dateMaj;
    }

    public function setDateMaj(?DateTimeInterface $dateMaj): self {
        $this->dateMaj = $dateMaj;

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

    public function getPayeur(): ?string {
        return $this->payeur;
    }

    public function setPayeur(?string $payeur): self {
        $this->payeur = $payeur;

        return $this;
    }

    public function getMntComm(): ?string {
        return $this->mntComm;
    }

    public function setMntComm(?string $mntComm): self {
        $this->mntComm = $mntComm;

        return $this;
    }

    public function getDatePaiementComm(): ?DateTimeInterface {
        return $this->datePaiementComm;
    }

    public function setDatePaiementComm(?DateTimeInterface $datePaiementComm): self {
        $this->datePaiementComm = $datePaiementComm;

        return $this;
    }

    public function getIdStatutComm(): ?int {
        return $this->idStatutComm;
    }

    public function setIdStatutComm(?int $idStatutComm): self {
        $this->idStatutComm = $idStatutComm;

        return $this;
    }

    public function getIdbStatutComm(): ?int {
        return $this->idbStatutComm;
    }

    public function setIdbStatutComm(?int $idbStatutComm): self {
        $this->idbStatutComm = $idbStatutComm;

        return $this;
    }

    public function getTexteRmq(): ?string {
        return $this->texteRmq;
    }

    public function setTexteRmq(?string $texteRmq): self {
        $this->texteRmq = $texteRmq;

        return $this;
    }

    public function getChequeattencaiss(): ?string {
        $isEnAttente = true;

        if (empty($this->typereglopca) && $this->chequeattencaiss == 'oui') {
            $isEnAttente = true;
        } else if (empty($this->typereglopca) && $this->chequeattencaiss == 'non') {
            $isEnAttente = false;
        }

        return $isEnAttente;
    }

    public function setChequeattencaiss(?string $chequeattencaiss): self {
        $this->chequeattencaiss = $chequeattencaiss;

        return $this;
    }

    public function getNumcheque(): ?string {
        return $this->numcheque;
    }

    public function setNumcheque(?string $numcheque): self {
        $this->numcheque = $numcheque;

        return $this;
    }

    public function getDatecheque(): ?DateTimeInterface {
        return $this->datecheque;
    }

    public function setDatecheque(?DateTimeInterface $datecheque): self {
        $this->datecheque = $datecheque;

        return $this;
    }

    public function getMntantReglementclient(): ?string {
        return $this->mntantReglementclient;
    }

    public function setMntantReglementclient(?string $mntantReglementclient): self {
        $this->mntantReglementclient = $mntantReglementclient;

        return $this;
    }

    public function getDtvalidite(): ?DateTimeInterface {
        return $this->dtvalidite;
    }

    public function setDtvalidite(?DateTimeInterface $dtvalidite): self {
        $this->dtvalidite = $dtvalidite;

        return $this;
    }

    public function getTypereglclient(): ?string {
        return $this->typereglclient;
    }

    public function setTypereglclient(?string $typereglclient): self {
        $this->typereglclient = $typereglclient;

        return $this;
    }

    public function getTypereglopca(): ?string {
        return $this->typereglopca;
    }

    public function setTypereglopca(?string $typereglopca): self {
        $this->typereglopca = $typereglopca;

        return $this;
    }

    public function getMontantEncaisse(): ?string {
        return $this->montantEncaisse;
    }

    public function setMontantEncaisse(string $montantEncaisse): self {
        $this->montantEncaisse = $montantEncaisse;

        return $this;
    }

    public function getRestedu(): ?string {
        return $this->restedu;
    }

    public function setRestedu(string $restedu): self {
        $this->restedu = $restedu;

        return $this;
    }

    public function getStructure(): ?Structure {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): self {
        $this->structure = $structure;

        return $this;
    }

    /**
     * @param mixed $commentaires
     */
    public function setCommentaires($commentaires): void {
        $this->commentaires->clear();
        foreach ($commentaires as $com) {
            $this->addCommentaires($com);
        }
    }

    public function addCommentaires(EncaissementNote $commentaire): self {
        if (!$this->commentaires->contains($commentaire)) {
            $commentaire->setIdTable($this->getId());
            $commentaire->setEncaissement($this);
            $this->commentaires[] = $commentaire;
        }

        return $this;
    }

    public function getCommentaires() {

        return $this->commentaires
                ->matching(NoteRepository::notDeletedCriteria());
    }

    public function getSource(): ?string {
        return $this->source;
    }

    public function setSource(string $source): self {
        $this->source = $source;

        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue() {
        $this->dateAdd = new \DateTime();
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue() {
        $this->dateMaj = new \DateTime();
    }
    

}
