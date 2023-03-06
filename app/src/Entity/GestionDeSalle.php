<?php

namespace App\Entity;

use App\Repository\GestionDeSalleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * Gestion des salles
 *
 * @ORM\Table(name="gestion_de_salle", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass=GestionDeSalleRepository::class)
 */
class GestionDeSalle
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nom_prenom", type="string", length=255, nullable=false)
     */
    private $salle_name;

    /**
     * @var \DateTimeInterface
     * @ORM\Column(name="date_debut", type="datetime", nullable=false)
     */
    private $date_debut;

    /**
     * @var \DateTimeInterface
     * @ORM\Column(name="date_fin", type="datetime", nullable=false)
     */
    private $date_fin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalleName(): ?string
    {
        return $this->salle_name;
    }

    public function setSalleName(string $salle_name): self
    {
        $this->salle_name = $salle_name;

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
