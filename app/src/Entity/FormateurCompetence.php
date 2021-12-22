<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormateurCompetence
 *
 * @ORM\Table(name="1_formateur_competence")
 * @ORM\Entity
 */
class FormateurCompetence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=true)
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
     * @ORM\Column(name="id_competence", type="integer", nullable=true)
     */
    private $idCompetence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_competence", type="integer", nullable=true)
     */
    private $idbCompetence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_niv_maitrise", type="integer", nullable=true)
     */
    private $idNivMaitrise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_niv_maitrise", type="integer", nullable=true)
     */
    private $idbNivMaitrise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_demi_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutDemiJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_h", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutH;

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
     * @ORM\Column(name="id_formateur", type="integer", nullable=true)
     */
    private $idFormateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_formateur", type="integer", nullable=true)
     */
    private $idbFormateur;

    /**
     * @var int
     *
     * @ORM\Column(name="total_ht", type="integer", nullable=false)
     */
    private $totalHt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdb(): ?int
    {
        return $this->idb;
    }

    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    public function setIdContact(?int $idContact): self
    {
        $this->idContact = $idContact;

        return $this;
    }

    public function getIdbContact(): ?int
    {
        return $this->idbContact;
    }

    public function setIdbContact(?int $idbContact): self
    {
        $this->idbContact = $idbContact;

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

    public function getIdCompetence(): ?int
    {
        return $this->idCompetence;
    }

    public function setIdCompetence(?int $idCompetence): self
    {
        $this->idCompetence = $idCompetence;

        return $this;
    }

    public function getIdbCompetence(): ?int
    {
        return $this->idbCompetence;
    }

    public function setIdbCompetence(?int $idbCompetence): self
    {
        $this->idbCompetence = $idbCompetence;

        return $this;
    }

    public function getIdNivMaitrise(): ?int
    {
        return $this->idNivMaitrise;
    }

    public function setIdNivMaitrise(?int $idNivMaitrise): self
    {
        $this->idNivMaitrise = $idNivMaitrise;

        return $this;
    }

    public function getIdbNivMaitrise(): ?int
    {
        return $this->idbNivMaitrise;
    }

    public function setIdbNivMaitrise(?int $idbNivMaitrise): self
    {
        $this->idbNivMaitrise = $idbNivMaitrise;

        return $this;
    }

    public function getCoutJ(): ?string
    {
        return $this->coutJ;
    }

    public function setCoutJ(?string $coutJ): self
    {
        $this->coutJ = $coutJ;

        return $this;
    }

    public function getCoutDemiJ(): ?string
    {
        return $this->coutDemiJ;
    }

    public function setCoutDemiJ(?string $coutDemiJ): self
    {
        $this->coutDemiJ = $coutDemiJ;

        return $this;
    }

    public function getCoutH(): ?string
    {
        return $this->coutH;
    }

    public function setCoutH(?string $coutH): self
    {
        $this->coutH = $coutH;

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

    public function getIdFormateur(): ?int
    {
        return $this->idFormateur;
    }

    public function setIdFormateur(?int $idFormateur): self
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

    public function getTotalHt(): ?int
    {
        return $this->totalHt;
    }

    public function setTotalHt(int $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }


}
