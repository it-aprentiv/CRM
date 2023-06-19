<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 9SocieteLiee
 *
 * @ORM\Table(name="9_societe_liee", indexes={@ORM\Index(name="id_contact", columns={"id_contact"})})
 * @ORM\Entity(repositoryClass="App\Repository\SocieteLieRepository")
 */
class SocieteLiee
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
     * @ORM\Column(name="id_contact", type="integer", nullable=true)
     * @ORM\OneToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_contact", nullable=true)
     */
    private $idContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_societe1", type="integer", nullable=true)
     */
    private $idSociete1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_societe2", type="integer", nullable=true)
     */
    private $idSociete2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_societe3", type="integer", nullable=true)
     */
    private $idSociete3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_societe4", type="integer", nullable=true)
     */
    private $idSociete4;

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
    public function getIdContact(): int
    {
        return $this->idContact;
    }

    /**
     * @param int $idContact
     */
    public function setIdContact(?int $idContact): void
    {
        $this->idContact = $idContact;
    }

    /**
     * @return int|null
     */
    public function getIdSociete1(): ?int
    {
        return $this->idSociete1;
    }

    /**
     * @param int $idSociete1
     */
    public function setIdSociete1(?int $idSociete1): void
    {
        $this->idSociete1 = $idSociete1;
    }

    /**
     * @return int|null
     */
    public function getIdSociete2(): ?int
    {
        return $this->idSociete2;
    }

    /**
     * @param int $idSociete2
     */
    public function setIdSociete2(?int $idSociete2): void
    {
        $this->idSociete2 = $idSociete2;
    }

    /**
     * @return int|null
     */
    public function getIdSociete3(): ?int
    {
        return $this->idSociete3;
    }

    /**
     * @param int $idSociete3
     */
    public function setIdSociete3(?int $idSociete3): void
    {
        $this->idSociete3 = $idSociete3;
    }

    /**
     * @return int|null
     */
    public function getIdSociete4(): ?int
    {
        return $this->idSociete4;
    }

    /**
     * @param int $idSociete4
     */
    public function setIdSociete4(?int $idSociete4): void
    {
        $this->idSociete4 = $idSociete4;
    }



}
