<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5NoteAction
 *
 * @ORM\Table(name="5_note_action")
 * @ORM\Entity
 */
class NoteAction
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
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_action", type="string", length=20, nullable=true)
     */
    private $nomAction;

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
     * @ORM\Column(name="action", type="string", length=20, nullable=true)
     */
    private $action;

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
    public function getNomAction(): ?string
    {
        return $this->nomAction;
    }

    /**
     * @param string|null $nomAction
     */
    public function setNomAction(?string $nomAction): void
    {
        $this->nomAction = $nomAction;
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
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param string|null $action
     */
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }


}
