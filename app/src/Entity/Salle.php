<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle", uniqueConstraints={@ORM\UniqueConstraint(name="libelle", columns={"libelle"})})
 * @ORM\Entity
 */
class Salle
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifnormal", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifnormal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tarifreduit", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifreduit = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getTarifnormal(): ?float
    {
        return $this->tarifnormal;
    }

    public function setTarifnormal(float $tarifnormal): self
    {
        $this->tarifnormal = $tarifnormal;

        return $this;
    }

    public function getTarifreduit(): ?float
    {
        return $this->tarifreduit;
    }

    public function setTarifreduit(float $tarifreduit): self
    {
        $this->tarifreduit = $tarifreduit;

        return $this;
    }

}
