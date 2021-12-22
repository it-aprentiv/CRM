<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

abstract class NoteMere
{

    /**
     * @var string|null
     *
     * @ORM\Column(name="texte_note", type="text", length=0, nullable=true)
     */
    protected $texteNote;
    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_action_statut", type="integer", nullable=true)
     */
    protected $idbActionStatut;
    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur")
     * @ORM\JoinColumn(name="id_user_add", referencedColumnName="IDUTILISATEUR", nullable=true)
     */
    protected $idUserAdd;
    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    protected $note;
    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_action", type="integer", nullable=true)
     */
    protected $idbAction;
    /**
     * @var int|null
     *
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    protected $idb;
    /**
     * @var int|null
     * @ORM\ManyToOne(targetEntity="App\Entity\NoteActionStatut")
     * @ORM\JoinColumn(name="id_action_statut", referencedColumnName="id", nullable=true)
     */
    protected $idActionStatut;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_maj", type="integer", nullable=true)
     */
    protected $idUserMaj;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    protected $dateMaj;
    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\NoteAction")
     * @ORM\JoinColumn(name="id_nom_action", nullable=true)
     */
    protected $idAction;
    /*/**
     * @var int|null
     * @ORM\ManyToOne(targetEntity="App\Entity\NoteAction")
     * @ORM\JoinColumn(name="id_nom_action", referencedColumnName="id", nullable=true)
     */
    protected $idNomAction;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="rappelleur", type="integer", nullable=true)
     */
    protected $rappelleur;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    protected $deletedAt;
    /**
     * @var int|null
     * @ORM\Column(name="id_table", type="integer", nullable=true)
     */
    protected $idTable;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_action", type="datetime", nullable=true)
     */
    protected $dateAction;
    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_con", type="string", length=100, nullable=true)
     */
    protected $nomCon;
    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_table", type="integer", nullable=true)
     */
    protected $idbTable;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    protected $dateAdd;
    /**
     * @var Utilisateur
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur")
     * @ORM\JoinColumn(name="id_user_action", referencedColumnName="IDUTILISATEUR", nullable=true)
     */
    protected $idUserAction;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    protected $statutRst;
    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_nom_action", type="integer", nullable=true)
     */
    protected $idbNomAction;

    public function __construct()
    {
        $this->dateAdd = new \DateTime();
        $this->dateAction = new \DateTime();
    }

    public function setIdAction(?NoteAction $idAction): Note
    {
        $this->idAction = $idAction;

        return $this;
    }

    public function getIdUserAction(): ?Utilisateur
    {
        if ($this->idUserAction && $this->idUserAction->getIdutilisateur() == 0) {
            $this->idUserAction = null;
        }
        
        return $this->idUserAction;
    }

    public function getIdbTable(): ?int
    {
        return $this->idbTable;
    }

    public function setIdUserAction(?Utilisateur $idUserAction): Note
    {
        
        $this->idUserAction = $idUserAction;
        // APR-178: Save idUserAction to rappelleur
        
        if ($idUserAction) {
            $this->rappelleur = $idUserAction->getIdutilisateur();
        }

        return $this;
    }

    public function setIdbNomAction(?int $idbNomAction): Note
    {
        $this->idbNomAction = $idbNomAction;

        return $this;
    }

    public function getIdb(): ?int
    {
        return $this->idb;
    }

    public function setIdUserMaj(?int $idUserMaj): Note
    {
        $this->idUserMaj = $idUserMaj;

        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function __toString()
    {
        return (string)$this->getId();
    }

    public function setDateAction(?\DateTimeInterface $dateAction): Note
    {
        $this->dateAction = $dateAction;

        return $this;
    }

    public function getIdActionStatut(): ?NoteActionStatut
    {
        
        if ($this->idActionStatut && $this->idActionStatut->getId() == 0) {
            $this->idActionStatut = null;
        }
        
        return $this->idActionStatut;
    }

    public function setIdbActionStatut(?int $idbActionStatut): Note
    {
        $this->idbActionStatut = $idbActionStatut;

        return $this;
    }

    public function setStatutRst(?bool $statutRst): Note
    {
        $this->statutRst = $statutRst;

        return $this;
    }

    public function setNomCon(?string $nomCon): Note
    {
        $this->nomCon = $nomCon;

        return $this;
    }

    public function setRappelleur($rappelleur): Note
    {
        $this->rappelleur = $rappelleur;

        return $this;
    }

    public function setIdb(?int $idb): Note
    {
        $this->idb = $idb;

        return $this;
    }

    public function getIdAction(): ?NoteAction
    {
        if ($this->idAction instanceof NoteAction && $this->idAction->getId() == 0) {
            $this->idAction = null;
        }
        
        return $this->idAction;
    }

    public function getIdTable(): ?Dossier
    {
        return $this->idTable;
    }

    public function setIdbTable(?int $idbTable): Note
    {
        $this->idbTable = $idbTable;

        return $this;
    }

    public function setIdUserAdd(?Utilisateur $idUserAdd): Note
    {
        if($this->getIdUserAdd() === null) {
            $this->idUserAdd = $idUserAdd;
        }
        elseif(!is_null($this->getIdUserAdd())){
            $this->idUserAdd = $this->getIdUserAdd();
        }

        return $this;
    }

    public function getIdUserMaj(): ?int
    {
        return $this->idUserMaj;
    }

    public function getDateAction(): ?\DateTimeInterface
    {
        
        if (!$this->dateAction || ($this->dateAction instanceof \DateTime && $this->dateAction->format('Y') < 2000)) {
            return null;
        }
        
        return $this->dateAction;
    }

    public function getNomCon(): ?string
    {
        return $this->nomCon;
    }

    public function setTexteNote(?string $texteNote): Note
    {
        $this->texteNote = $texteNote;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    /**
     * @param int|null $idActionStatut
     * @return Note
     */
    public function setIdActionStatut(?NoteActionStatut $idActionStatut): Note
    {
        $this->idActionStatut = $idActionStatut;

        return $this;
    }

    public function getIdbAction(): ?int
    {
        return $this->idbAction;
    }

    /**
     * @param int|null $idTable
     * @return Note
     */
    public function setIdTable(?int $idTable): Note
    {
        $this->idTable = $idTable;

        return $this;
    }

    public function getRappelleur()
    {
        
        if (!$this->rappelleur) {
            return null;
        }
        
        return $this->rappelleur;
    }

    public function getDateMaj(): ?\DateTimeInterface
    {
        return $this->dateMaj;
    }

    public function getIdNomAction(): ?NoteAction
    {
        return $this->idNomAction;
    }

    public function getIdUserAdd(): ?Utilisateur
    {
        if ($this->idUserAdd && $this->idUserAdd->getIdutilisateur() == 0) {
            $this->idUserAdd = null;
        }
        
        return $this->idUserAdd;
    }

    public function setNote(?string $note): Note
    {
        $this->note = $note;

        return $this;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): Note
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function setIdbAction(?int $idbAction): Note
    {
        $this->idbAction = $idbAction;

        return $this;
    }

    public function getStatutRst(): ?bool
    {
        return $this->statutRst;
    }

    public function getTexteNote(): ?string
    {
        return $this->texteNote;
    }

    public function setIdNomAction(?NoteAction $idNomAction): Note
    {
        $this->idNomAction = $idNomAction;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): Note
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getIdbActionStatut(): ?int
    {
        return $this->idbActionStatut;
    }

    abstract public function getNomTable();

    public function getIdbNomAction(): ?int
    {
        return $this->idbNomAction;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setDateMaj(?\DateTimeInterface $dateMaj): Note
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }
}