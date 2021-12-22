<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 2Adresse
 *
 * @ORM\Table(name="2_adresse", indexes={@ORM\Index(name="id_contact", columns={"id_contact"}), @ORM\Index(name="code_postal", columns={"code_postal"}), @ORM\Index(name="idb_contact", columns={"idb_contact"})})
 * @ORM\Entity(repositoryClass="App\Repository\AdresseRepository")
 */
class Adresse
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
     * @var int|null
     *
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=true)
     *
     */
    private $idContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact", type="integer", nullable=true)
     */
    private $idbContact = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_adresse", type="string", length=100, nullable=true)
     */
    private $compAdresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_ville", type="integer", nullable=true)
     */
    private $idVille;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_ville", type="integer", nullable=true)
     */
    private $idbVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_postal", type="string", length=7, nullable=true)
     */
    private $codePostal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_region", type="integer", nullable=true)
     */
    private $idRegion = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_region", type="integer", nullable=true)
     */
    private $idbRegion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_pays", type="integer", nullable=true)
     */
    private $idPays = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_pays", type="integer", nullable=true)
     */
    private $idbPays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type_adresse", type="integer", nullable=true)
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeAdresse")
     * @ORM\JoinColumn(name="id", nullable=true)
     */
    private $idTypeAdresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type_adresse", type="integer", nullable=true)
     */
    private $idbTypeAdresse = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=true)
     */
    private $remarque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="principal", type="string", length=3, nullable=true)
     */
    private $principal;

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
     * @ORM\Column(name="adress_rank", type="string", length=30, nullable=true)
     */
    private $adressRank;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ContactAdresseType")
     * @ORM\JoinColumn(name="type_adresse", referencedColumnName="id_type_adresse", nullable=true)
     */
    private $typeAdresse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact", inversedBy="adresses")
     * @ORM\JoinColumn(name="id_contact", referencedColumnName="id", nullable=true)
     */
    private $idTableContact;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getIdb(): ?int
    {
        return $this->idb;
    }

    /**
     * @param int|null $idb
     */
    public function setIdb(?int $idb): void
    {
        $this->idb = $idb;
    }

    /**
     * @return int|null
     */
    public function getIdContact(): ?Contact
    {
        return $this->idContact;
    }

    /**
     * @param int|null $idContact
     */
    public function setIdContact(?Contact $idContact): void
    {
        $this->idContact = $idContact;
    }

    /**
     * @return int|null
     */
    public function getIdbContact(): ?int
    {
        return $this->idbContact;
    }

    /**
     * @param int|null $idbContact
     */
    public function setIdbContact(?int $idbContact): void
    {
        $this->idbContact = $idbContact;
    }

    /**
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * @param string|null $adresse
     */
    public function setAdresse(?string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string|null
     */
    public function getCompAdresse(): ?string
    {
        return $this->compAdresse;
    }

    /**
     * @param string|null $compAdresse
     */
    public function setCompAdresse(?string $compAdresse): void
    {
        $this->compAdresse = $compAdresse;
    }

    /**
     * @return int|null
     */
    public function getIdVille(): ?int
    {
        return $this->idVille;
    }

    /**
     * @param int|null $idVille
     */
    public function setIdVille(?int $idVille): void
    {
        $this->idVille = $idVille;
    }

    /**
     * @return int|null
     */
    public function getIdbVille(): ?int
    {
        return $this->idbVille;
    }

    /**
     * @param int|null $idbVille
     */
    public function setIdbVille(?int $idbVille): void
    {
        $this->idbVille = $idbVille;
    }

    /**
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * @param string|null $codePostal
     */
    public function setCodePostal(?string $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return int|null
     */
    public function getIdRegion(): ?int
    {
        return $this->idRegion;
    }

    /**
     * @param int|null $idRegion
     */
    public function setIdRegion(?int $idRegion): void
    {
        $this->idRegion = $idRegion;
    }

    /**
     * @return int|null
     */
    public function getIdbRegion(): ?int
    {
        return $this->idbRegion;
    }

    /**
     * @param int|null $idbRegion
     */
    public function setIdbRegion(?int $idbRegion): void
    {
        $this->idbRegion = $idbRegion;
    }

    /**
     * @return int|null
     */
    public function getIdPays(): ?int
    {
        return $this->idPays;
    }

    /**
     * @param int|null $idPays
     */
    public function setIdPays(?int $idPays): void
    {
        $this->idPays = $idPays;
    }

    /**
     * @return int|null
     */
    public function getIdbPays(): ?int
    {
        return $this->idbPays;
    }

    /**
     * @param int|null $idbPays
     */
    public function setIdbPays(?int $idbPays): void
    {
        $this->idbPays = $idbPays;
    }

    /**
     * @return int|null
     */
    public function getIdTypeAdresse(): ?int
    {
        return $this->idTypeAdresse;
    }

    /**
     * @param int|null $idTypeAdresse
     */
    public function setIdTypeAdresse(?int $idTypeAdresse): void
    {
        $this->idTypeAdresse = $idTypeAdresse;
    }

    /**
     * @return int|null
     */
    public function getIdbTypeAdresse(): ?int
    {
        return $this->idbTypeAdresse;
    }

    /**
     * @param int|null $idbTypeAdresse
     */
    public function setIdbTypeAdresse(?int $idbTypeAdresse): void
    {
        $this->idbTypeAdresse = $idbTypeAdresse;
    }

    /**
     * @return string|null
     */
    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    /**
     * @param string|null $remarque
     */
    public function setRemarque(?string $remarque): void
    {
        $this->remarque = $remarque;
    }

    /**
     * @return boolean|null
     */
    public function getPrincipal(): ?bool
    {
        return (bool)$this->principal;
    }

    /**
     * @param string|null $principal
     */
    public function setPrincipal(?string $principal): void
    {
        $this->principal = $principal;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTimeInterface $dateAdd
     */
    public function setDateAdd(?\DateTimeInterface $dateAdd): void
    {
        $this->dateAdd = (null === $dateAdd) ? new \DateTime() : $dateAdd;
    }

    /**
     * @return int|null
     */
    public function getIdUserAdd(): ?int
    {
        return $this->idUserAdd;
    }

    /**
     * @param int|null $idUserAdd
     */
    public function setIdUserAdd(?int $idUserAdd): void
    {
        $this->idUserAdd = $idUserAdd;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateMaj(): ?\DateTime
    {
        return $this->dateMaj;
    }

    /**
     * @param \DateTime|null $dateMaj
     */
    public function setDateMaj(?\DateTime $dateMaj): void
    {
        $this->dateMaj = $dateMaj;
    }

    /**
     * @return int|null
     */
    public function getIdUserMaj(): ?int
    {
        return $this->idUserMaj;
    }

    /**
     * @param int|null $idUserMaj
     */
    public function setIdUserMaj(?int $idUserMaj): void
    {
        $this->idUserMaj = $idUserMaj;
    }

    /**
     * @return bool|null
     */
    public function getStatutRst(): ?bool
    {
        return $this->statutRst;
    }

    /**
     * @param bool|null $statutRst
     */
    public function setStatutRst(?bool $statutRst): void
    {
        $this->statutRst = $statutRst;
    }

    /**
     * @return string|null
     */
    public function getAdressRank(): ?string
    {
        return $this->adressRank;
    }

    /**
     * @param string|null $adressRank
     */
    public function setAdressRank(?string $adressRank): void
    {
        $this->adressRank = $adressRank;
    }

    /**
     * @return int|null
     */
    public function getTypeAdresse(): ?ContactAdresseType
    {
        return $this->typeAdresse;
    }

    /**
     * @param int|null $typeAdresse
     */
    public function setTypeAdresse(?ContactAdresseType $typeAdresse): void
    {
        $this->typeAdresse = $typeAdresse;
    }

    public function getIdTableContact(): ?Contact
    {
        return $this->idTableContact;
    }

    public function setIdTableContact(?Contact $idTableContact): self
    {
        $this->idTableContact = $idTableContact;

        return $this;
    }


}
