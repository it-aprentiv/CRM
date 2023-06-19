<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1EncaissementSocieteLiee
 *
 * @ORM\Table(name="1_encaissement_societe_liee")
 * @ORM\Entity(repositoryClass="App\Repository\EncaissementSocieteLieeRepository")
 */
class EncaissementSocieteLiee
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
     * @ORM\Column(name="id_encaissement", type="integer", nullable=false)
     */
    private $idEncaissement;

    /**
     * @var int
     *
     * @ORM\Column(name="id_societe", type="integer", nullable=false)
     */
    private $idSociete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEncaissement(): ?int
    {
        return $this->idEncaissement;
    }

    public function setIdEncaissement(int $idEncaissement): self
    {
        $this->idEncaissement = $idEncaissement;

        return $this;
    }

    public function getIdSociete(): ?int
    {
        return $this->idSociete;
    }

    public function setIdSociete(int $idSociete): self
    {
        $this->idSociete = $idSociete;

        return $this;
    }


}
