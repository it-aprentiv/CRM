<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5Ville
 *
 * @ORM\Table(name="5_ville")
 * @ORM\Entity(repositoryClass="App\Repository\VilleRepository")
 */
class Ville
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
     * @ORM\Column(name="idb", type="integer", nullable=false)
     */
    private $idb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_pays", type="integer", nullable=true)
     */
    private $idPays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_pays", type="integer", nullable=true)
     */
    private $idbPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_postal", type="string", length=10, nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_ville", type="string", length=50, nullable=true)
     */
    private $nomVille;

    /** 
     * @var int|null
     *
     * @ORM\Column(name="id_region", type="integer", nullable=true)
     */
    private $idRegion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_region", type="integer", nullable=true)
     */
    private $idbRegion;

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
     * @var string|null
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    public function __toString(){
        // to show the name of the Category in the select
        return $this->nomVille;
        // to show the id of the Category in the select
        // return $this->id;
    }

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
     * @return int
     */
    public function getIdb(): int
    {
        return $this->idb;
    }

    /**
     * @param int $idb
     */
    public function setIdb(int $idb): void
    {
        $this->idb = $idb;
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
     * @return string|null
     */
    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    /**
     * @param string|null $nomVille
     */
    public function setNomVille(?string $nomVille): void
    {
        $this->nomVille = $nomVille;
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
     * @return \DateTime
     */
    public function getDateAdd(): \DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime $dateAdd
     */
    public function setDateAdd(\DateTime $dateAdd): void
    {
        $this->dateAdd = $dateAdd;
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
    public function getCp(): ?string
    {
        return $this->cp;
    }

    /**
     * @param string|null $cp
     */
    public function setCp(?string $cp): void
    {
        $this->cp = $cp;
    }


}
