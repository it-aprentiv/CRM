<?php

namespace App\Entity;

use App\Repository\GestionSceanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="gestion_sceance")
 * @ORM\Entity(repositoryClass=GestionSceanceRepository::class)
 */
class GestionSceance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=FormationDossier::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $dossier_id;

    /**
     * @ORM\Column(name="dossier_id", type="string", length=255)
     */
    private $intitule;

    /**
     * @ORM\Column(name="intitule", type="integer")
     */
    private $participants_number;

    /**
     * @ORM\Column(name="participants_number", type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(name="status", type="time")
     */
    private $lastupdate;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="lastupdateby", nullable=false)
     */
    private $lastupdateby;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="createdid", nullable=false)
     */
    private $createdid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDossierId(): ?FormationDossier
    {
        return $this->dossier_id;
    }

    public function setDossierId(FormationDossier $dossier_id): self
    {
        $this->dossier_id = $dossier_id;

        return $this;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getParticipantsNumber(): ?int
    {
        return $this->participants_number;
    }

    public function setParticipantsNumber(int $participants_number): self
    {
        $this->participants_number = $participants_number;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLastupdate(): ?\DateTimeInterface
    {
        return $this->lastupdate;
    }

    public function setLastupdate(\DateTimeInterface $lastupdate): self
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    public function getLastupdateby(): ?User
    {
        return $this->lastupdateby;
    }

    public function setLastupdateby(?User $lastupdateby): self
    {
        $this->lastupdateby = $lastupdateby;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getCreatedid(): Collection
    {
        return $this->createdid;
    }

    public function addCreatedid(User $createdid): self
    {
        if (!$this->createdid->contains($createdid)) {
            $this->createdid[] = $createdid;
            $createdid->setStop($this);
        }

        return $this;
    }

    public function removeCreatedid(User $createdid): self
    {
        if ($this->createdid->removeElement($createdid)) {
            // set the owning side to null (unless already changed)
            if ($createdid->getStop() === $this) {
                $createdid->setStop(null);
            }
        }

        return $this;
    }
}
