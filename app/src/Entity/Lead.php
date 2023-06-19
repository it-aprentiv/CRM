<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeadRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="lead")
 */
class Lead
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LeadNote", mappedBy="idTableLead", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $commentaires;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $societe;

    /**
     * @ORM\Column(name="civilite", type="string", length=255, nullable=true)
     */
    private $civilite;

    /**
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Collaborateur")
     */
    private $commercial;

    /**
     * @ORM\Column(name="origine", type="string", length=255)
     */
    private $origine;

    /**
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(name="formation", type="string", length=255)
     */
    private $formation;

    /**
     * @ORM\Column(name="periode", type="string", length=255)
     */
    private $periode;

    /**
     * @ORM\Column(name="typerequest", type="string", length=255)
     */
    private $typerequest;

    /**
     * @ORM\Column(name="message", type="string", length=255, nullable=true)
     */
    private $message;

    /**
     * @ORM\Column(name="financement", type="string", length=255)
     */
    private $financement;
    
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;



    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->createdAt= new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

      /**
     * @return Collection|Lead[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires
            ->matching(NoteRepository::notDeletedCriteria());
    }

    public function addCommentaire(LeadNote $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $commentaire->setIdTableLead($this);
            $this->commentaires[] = $commentaire;
        }

        return $this;
    }

    public function removeCommentaire(LeadNote $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getIdTableLead() === $this) {
                $commentaire->setIdTableLead(null);
            }
        }

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = ucfirst(strtolower($ville));

        return $this;
    }

    public function getCommercial(): ?Collaborateur
    {
        return $this->commercial;
    }

    public function setCommercial(?Collaborateur $commercial): self
    {
        $this->commercial = $commercial;

        return $this;
    }


    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(?string $origine): self
    {
        $this->origine = $origine;

        return $this;
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    public function setPeriode(?string $periode): self
    {
        $this->periode = $periode;

        return $this;
    }

    public function getTyperequest(): ?string
    {
        return $this->typerequest;
    }

    public function setTyperequest(?string $typerequest): self
    {
        $this->typerequest = $typerequest;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getFinancement(): ?string
    {
        return $this->financement;
    }

    public function setFinancement(?string $financement): self
    {
        $this->financement = $financement;

        return $this;
    }
}
