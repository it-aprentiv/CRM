<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1EncaissementFactureLiee
 *
 * @ORM\Table(name="1_encaissement_facture_liee")
 * @ORM\Entity(repositoryClass="App\Repository\EncaissementFactureLieeRepository")
 */
class EncaissementFactureLiee
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
     * @ORM\Column(name="id_facture", type="integer", nullable=false)
     */
    private $idFacture;

    /**
     * @var Encaissement
     * @ORM\ManyToOne(targetEntity="App\Entity\Encaissement")
     * @ORM\JoinColumn(name="id_encaissement", referencedColumnName="id", nullable=false)
     */
    private $idEncaissement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFacture(): ?int
    {
        return $this->idFacture;
    }

    public function setIdFacture(int $idFacture): self
    {
        $this->idFacture = $idFacture;

        return $this;
    }

    public function getIdEncaissement(): ?Encaissement
    {
        return $this->idEncaissement;
    }

    public function setIdEncaissement(Encaissement $idEncaissement): self
    {
        $this->idEncaissement = $idEncaissement;

        return $this;
    }
}
