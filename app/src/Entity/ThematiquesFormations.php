<?php

namespace App\Entity;

use App\Repository\ThematiquesFormationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ThematiquesFormationsRepository::class)
 */
class ThematiquesFormations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $formations;

    /**
     * @ORM\Column(type="float")
     */
    private $tarif;

    /**
     * @ORM\ManyToOne(targetEntity=FormateurFormation::class, inversedBy="thematiquesFormations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormations(): ?string
    {
        return $this->formations;
    }

    public function setFormations(string $formations): self
    {
        $this->formations = $formations;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getFormateur(): ?FormateurFormation
    {
        return $this->formateur;
    }

    public function setFormateur(?FormateurFormation $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }
}
