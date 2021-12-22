<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5OrdredemissionStatut
 *
 * @ORM\Table(name="5_ordredemission_statut", uniqueConstraints={@ORM\UniqueConstraint(name="omi_statut", columns={"omi_statut"})})
 * @ORM\Entity
 */
class OrdredemissionStatut
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
     * @ORM\Column(name="omi_statut", type="string", length=200, nullable=false)
     */
    private $omiStatut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOmiStatut(): ?string
    {
        return $this->omiStatut;
    }

    public function setOmiStatut(string $omiStatut): self
    {
        $this->omiStatut = $omiStatut;

        return $this;
    }


}
