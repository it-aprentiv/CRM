<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1CommissionStatut
 *
 * @ORM\Table(name="1_commission_statut")
 * @ORM\Entity(repositoryClass="App\Repository\CommissionStatutRepository")
 */
class CommissionStatut
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
     * @ORM\Column(name="statut", type="string", length=255, nullable=true)
     */
    private $statut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdb(): ?int
    {
        return $this->idb;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
