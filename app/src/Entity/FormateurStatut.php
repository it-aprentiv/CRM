<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5FormateurStatut
 *
 * @ORM\Table(name="5_formateur_statut", indexes={@ORM\Index(name="statut", columns={"statut"})})
 * @ORM\Entity(repositoryClass="App\Repository\FormateurStatutRepository")
 */
class FormateurStatut
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
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=25, nullable=true)
     */
    public $statut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

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
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime|null $date
     * @return FormateurStatut
     */
    public function setDateAdd(?\DateTime $date): self
    {
        $this->dateAdd = $date;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param null|string $statut
     * @return FormateurStatut
     */
    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateMaj(): ?\DateTime
    {
        return $this->dateMaj;
    }

    /**
     * @param \DateTime|null $date
     * @return FormateurStatut
     */
    public function setDateMaj(?\DateTime $date): self
    {
        $this->dateMaj = $date;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdUserAdd(): ?int
    {
        return $this->idUserAdd;
    }

    /**
     * @param int|null $idUser
     * @return FormateurStatut
     */
    public function setIdUserAdd(?int $idUser) : self
    {
        $this->idUserAdd = $idUser;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdUserMaj(): ?int {
        return $this->idUserMaj;
    }

    /**
     * @param int|null $idUser
     * @return FormateurStatut
     */
    public function setIdUserMaj(?int $idUser): self
    {
        $this->idUserMaj = $idUser;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStatutRst(): ?bool
    {
        return $this->statutRst;
    }

    /**
     * @param bool|null $statut
     * @return FormateurStatut
     */
    public function setStatutRst(?bool $statut): self
    {
        $this->statutRst = $statut;
        return $this;
    }
}
