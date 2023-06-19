<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 2Telephone
 *
 * @ORM\Table(name="2_telephone", indexes={@ORM\Index(name="id_contact", columns={"id_contact"}), @ORM\Index(name="idb_contact", columns={"idb_contact"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="idb", columns={"idb"})})
 * @ORM\Entity
 */
class Telephone
{
    const TELEPHONE = 1;
    const PORTABLE = 3;
    const FAX = 4;
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
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="indicatif", type="string", length=5, nullable=true)
     */
    private $indicatif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type_tel", type="integer", nullable=true)
     */
    private $idTypeTel = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type_tel", type="integer", nullable=true)
     */
    private $idbTypeTel = '0';

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
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
     * @ORM\Column(name="remarques", type="string", length=50, nullable=true)
     */
    private $remarques;

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
    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    /**
     * @param int|null $idContact
     */
    public function setIdContact(?int $idContact): void
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
    public function getTel(): ?string
    {
        return $this->tel;
    }

    /**
     * @param string|null $tel
     */
    public function setTel(?string $tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return string|null
     */
    public function getIndicatif(): ?string
    {
        return $this->indicatif;
    }

    /**
     * @param string|null $indicatif
     */
    public function setIndicatif(?string $indicatif): void
    {
        $this->indicatif = $indicatif;
    }

    /**
     * @return int|null
     */
    public function getIdTypeTel(): ?int
    {
        return $this->idTypeTel;
    }

    /**
     * @param int|null $idTypeTel
     */
    public function setIdTypeTel(?int $idTypeTel): void
    {
        $this->idTypeTel = $idTypeTel;
    }

    /**
     * @return int|null
     */
    public function getIdbTypeTel(): ?int
    {
        return $this->idbTypeTel;
    }

    /**
     * @param int|null $idbTypeTel
     */
    public function setIdbTypeTel(?int $idbTypeTel): void
    {
        $this->idbTypeTel = $idbTypeTel;
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
     * @return string|null
     */
    public function getPrincipal(): ?string
    {
        return $this->principal;
    }

    /**
     * @param string|null $principal
     */
    public function setPrincipal(?string $principal): void
    {
        $this->principal = $principal;
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
    public function setDateAdd(?\DateTime $dateAdd): void
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
    public function getRemarques(): ?string
    {
        return $this->remarques;
    }

    /**
     * @param string|null $remarques
     */
    public function setRemarques(?string $remarques): void
    {
        $this->remarques = $remarques;
    }



}
