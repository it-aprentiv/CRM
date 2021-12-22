<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormationCatalogue
 *
 * @ORM\Table(name="1_formation_catalogue")
 * @ORM\Entity(repositoryClass="App\Repository\FormationCatalogueRepository")
 */
class FormationCatalogue
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
     *
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_formation", type="string", length=255, nullable=true)
     */
    private $nomFormation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cat", type="integer", nullable=true)
     */
    private $idCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cat", type="integer", nullable=true)
     */
    private $idbCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sous_cat", type="integer", nullable=true)
     */
    private $idSousCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_sous_cat", type="integer", nullable=true)
     */
    private $idbSousCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_code_peda", type="integer", nullable=true)
     */
    private $idCodePeda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_code_peda", type="integer", nullable=true)
     */
    private $idbCodePeda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_niveau", type="integer", nullable=true)
     */
    private $idNiveau;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_niveau", type="integer", nullable=true)
     */
    private $idbNiveau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectifs", type="text", length=0, nullable=true)
     */
    private $objectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="programme", type="string", length=255, nullable=true)
     */
    private $programme;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_h", type="integer", nullable=true)
     */
    private $dureeH;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_j", type="integer", nullable=true)
     */
    private $dureeJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_intra", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $prixIntra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_inter", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $prixInter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_intra", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutIntra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_inter", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutInter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intra_inter", type="string", length=1, nullable=true)
     */
    private $intraInter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="publier_sur_site", type="integer", nullable=true)
     */
    private $publierSurSite;

    /**
     * @var DateTime
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
     * @var Structure
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure")
     * @ORM\JoinColumn(name="id_structure", referencedColumnName="id", nullable=true)
     */
    private $idStructure;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=300, nullable=true)
     */
    private $type;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="tar_ht_h", type="string", length=200, nullable=true)
     */
    private $tarHtH;

    /**
     * @var string
     *
     * @ORM\Column(name="tar_ht_dj", type="string", length=200, nullable=true)
     */
    private $tarHtDj;

    /**
     * @var string
     *
     * @ORM\Column(name="tar_j", type="string", length=200, nullable=true)
     */
    private $tarJ;

    /**
     *
     * @ORM\OneToMany(targetEntity="App\Entity\FormationCatalogueNote", mappedBy="formationCatalogue", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     *
     */
    private $commentaires;

    /**
     * @ORM\Column(type="float", name="cout_h", nullable=true)
     */
    private $coutH;

    /**
     * @ORM\Column(type="float", name="cout_j", nullable=true)
     */
    private $coutJ;

    /**
     * @ORM\Column(type="float", name="cout_demi_j", nullable=true)
     */
    private $coutDemiJ;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieuFormation;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }


    public function getCoutH(): ?float
    {
        return $this->coutH;
    }

    public function setCoutH(?float $coutH): self
    {
        $this->coutH = $coutH;

        return $this;
    }

    public function getCoutJ(): ?float
    {
        return $this->coutJ;
    }

    public function setCoutJ(?float $coutJ): self
    {
        $this->coutJ = $coutJ;

        return $this;
    }

    public function getCoutDemiJ(): ?float
    {
        return $this->coutDemiJ;
    }

    public function setCoutDemiJ(?float $coutDemiJ): self
    {
        $this->coutDemiJ = $coutDemiJ;

        return $this;
    }

    public function getLieuFormation(): ?string
    {
        return $this->lieuFormation;
    }

    public function setLieuFormation(?string $lieuFormation): self
    {
        $this->lieuFormation = $lieuFormation;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdb(): ?int
    {
        return $this->idb;
    }

    public function getNomFormation(): ?string
    {
        return $this->nomFormation;
    }

    public function setNomFormation(?string $nomFormation): self
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    public function getIdCat(): ?int
    {
        return $this->idCat;
    }

    public function setIdCat(?int $idCat): self
    {
        $this->idCat = $idCat;

        return $this;
    }

    public function getIdbCat(): ?int
    {
        return $this->idbCat;
    }

    public function setIdbCat(?int $idbCat): self
    {
        $this->idbCat = $idbCat;

        return $this;
    }

    public function getIdSousCat(): ?int
    {
        return $this->idSousCat;
    }

    public function setIdSousCat(?int $idSousCat): self
    {
        $this->idSousCat = $idSousCat;

        return $this;
    }

    public function getIdbSousCat(): ?int
    {
        return $this->idbSousCat;
    }

    public function setIdbSousCat(?int $idbSousCat): self
    {
        $this->idbSousCat = $idbSousCat;

        return $this;
    }

    public function getIdCodePeda(): ?int
    {
        return $this->idCodePeda;
    }

    public function setIdCodePeda(?int $idCodePeda): self
    {
        $this->idCodePeda = $idCodePeda;

        return $this;
    }

    public function getIdbCodePeda(): ?int
    {
        return $this->idbCodePeda;
    }

    public function setIdbCodePeda(?int $idbCodePeda): self
    {
        $this->idbCodePeda = $idbCodePeda;

        return $this;
    }

    public function getIdNiveau(): ?int
    {
        return $this->idNiveau;
    }

    public function setIdNiveau(?int $idNiveau): self
    {
        $this->idNiveau = $idNiveau;

        return $this;
    }

    public function getIdbNiveau(): ?int
    {
        return $this->idbNiveau;
    }

    public function setIdbNiveau(?int $idbNiveau): self
    {
        $this->idbNiveau = $idbNiveau;

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

    public function getProgramme(): ?string
    {
        return $this->programme;
    }

    public function setProgramme(?string $programme): self
    {
        $this->programme = $programme;

        return $this;
    }

    public function getDureeH(): ?int
    {
        return $this->dureeH;
    }

    public function setDureeH(?int $dureeH): self
    {
        $this->dureeH = $dureeH;

        return $this;
    }

    public function getDureeJ(): ?int
    {
        return $this->dureeJ;
    }

    public function setDureeJ(?int $dureeJ): self
    {
        $this->dureeJ = $dureeJ;

        return $this;
    }

    public function getPrixIntra(): ?string
    {
        return $this->prixIntra;
    }

    public function setPrixIntra(?string $prixIntra): self
    {
        $this->prixIntra = $prixIntra;

        return $this;
    }

    public function getPrixInter(): ?string
    {
        return $this->prixInter;
    }

    public function setPrixInter(?string $prixInter): self
    {
        $this->prixInter = $prixInter;

        return $this;
    }

    public function getCoutIntra(): ?string
    {
        return $this->coutIntra;
    }

    public function setCoutIntra(?string $coutIntra): self
    {
        $this->coutIntra = $coutIntra;

        return $this;
    }

    public function getCoutInter(): ?string
    {
        return $this->coutInter;
    }

    public function setCoutInter(?string $coutInter): self
    {
        $this->coutInter = $coutInter;

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

    public function getPublierSurSite(): ?int
    {
        return $this->publierSurSite;
    }

    public function setPublierSurSite(?int $publierSurSite): self
    {
        $this->publierSurSite = $publierSurSite;

        return $this;
    }

    public function getDateAdd(): ?DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(DateTimeInterface $dateAdd): self
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

    public function getDateMaj(): ?DateTimeInterface
    {
        return $this->dateMaj;
    }

    public function setDateMaj(?DateTimeInterface $dateMaj): self
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

    public function getIdStructure(): ?Structure
    {
        return $this->idStructure;
    }

    public function setIdStructure(Structure $idStructure): self
    {
        $this->idStructure = $idStructure;

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

    public function getDateDebut(): ?DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getTarHtH(): ?string
    {
        return $this->tarHtH;
    }

    public function setTarHtH(?string $tarHtH): self
    {
        $this->tarHtH = $tarHtH;

        return $this;
    }

    public function getTarHtDj(): ?string
    {
        return $this->tarHtDj;
    }

    public function setTarHtDj(?string $tarHtDj): self
    {
        $this->tarHtDj = $tarHtDj;

        return $this;
    }

    public function getTarJ(): ?string
    {
        return $this->tarJ;
    }

    public function setTarJ(?string $tarJ): self
    {
        $this->tarJ = $tarJ;

        return $this;
    }

    /**
     * @return Collection|FormationCatalogueNote[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(FormationCatalogueNote $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setFormationCatalogue($this);
        }

        return $this;
    }

    public function removeCommentaire(FormationCatalogueNote $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getFormationCatalogue() === $this) {
                $commentaire->setFormationCatalogue(null);
            }
        }

        return $this;
    }

}
