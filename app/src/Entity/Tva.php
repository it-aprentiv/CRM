<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5Tva
 *
 * @ORM\Table(name="5_tva")
 * @ORM\Entity
 */
class Tva
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
     * @var string|null
     *
     * @ORM\Column(name="lib_tva", type="string", length=20, nullable=true)
     */
    private $libTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="taux_tva", type="decimal", precision=6, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $tauxTva = '0.0000';

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
     * @return string|null
     */
    public function getLibTva(): ?string
    {
        return $this->libTva;
    }

    /**
     * @param string|null $libTva
     */
    public function setLibTva(?string $libTva): void
    {
        $this->libTva = $libTva;
    }

    /**
     * @return string|null
     */
    public function getTauxTva(): ?string
    {
        return $this->tauxTva;
    }

    /**
     * @param string|null $tauxTva
     */
    public function setTauxTva(?string $tauxTva): void
    {
        $this->tauxTva = $tauxTva;
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

}
