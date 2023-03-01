<?php

namespace App\Entity;

use App\Repository\SessionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionsRepository::class)
 */
class Sessions
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $cout_formateur;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $cout_bspp;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $cout_visite;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $cout_jury;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     */
    private $date_fin;

    /**
     * @var \Formateurs
     * 
     * @ORM\ManyToOne(targetEntity=Formateurs::class, inversedBy="sessions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCoutFormateur(): ?float
    {
        return $this->cout_formateur;
    }

    public function setCoutFormateur(?float $cout_formateur): self
    {
        $this->cout_formateur = $cout_formateur;

        return $this;
    }

    public function getCoutBspp(): ?float
    {
        return $this->cout_bspp;
    }

    public function setCoutBspp(?float $cout_bspp): self
    {
        $this->cout_bspp = $cout_bspp;

        return $this;
    }

    public function getCoutVisite(): ?float
    {
        return $this->cout_visite;
    }

    public function setCoutVisite(?float $cout_visite): self
    {
        $this->cout_visite = $cout_visite;

        return $this;
    }

    public function getCoutJury(): ?float
    {
        return $this->cout_jury;
    }

    public function setCoutJury(?float $cout_jury): self
    {
        $this->cout_jury = $cout_jury;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }
}
