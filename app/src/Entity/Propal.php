<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropalRepository")
 */
class Propal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DevisStatut")
     */
    private $statutpropal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure")
     */
    private $entitypropal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     */
    private $clientpropal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Collaborateur")
     */
    private $commercialpropal;



    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $besoin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $durreh;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $durrej;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datedebutpropal;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datefinpropal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieupropal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $prerequis;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $objectif;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateedition;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $daterelance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $codepostal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Competence")
     */
    private $formation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $personnes;

    /**
     * @ORM\Column(type="string", length=25 ,nullable=true)
     */
    private $coutht;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $montantTVA;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $typepropal;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $fiabilite;

    public function __toString()
    {
        return (string)$this->getStatutpropal();
        return (string)$this->getCommercialpropal();
        return (string)$this->getFormation();
        return (string)$this->getClientpropal();
        return (string)$this->getAdresse();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatutpropal(): ?DevisStatut
    {
        return $this->statutpropal;
    }

    public function setStatutpropal(?DevisStatut $statutpropal): self
    {
        $this->statutpropal = $statutpropal;

        return $this;
    }

    public function getEntitypropal(): ?Structure
    {
        return $this->entitypropal;
    }

    public function setEntitypropal(?Structure $entitypropal): self
    {
        $this->entitypropal = $entitypropal;

        return $this;
    }

    public function getClientpropal(): ?Contact
    {
        return $this->clientpropal;
    }

    public function setClientpropal(?Contact $clientpropal): self
    {
        $this->clientpropal = $clientpropal;

        return $this;
    }

    public function getCommercialpropal(): ?Collaborateur
    {
        return $this->commercialpropal;
    }

    public function setCommercialpropal(?Collaborateur $commercialpropal): self
    {
        $this->commercialpropal = $commercialpropal;

        return $this;
    }

    public function getBesoin(): ?string
    {
        return $this->besoin;
    }

    public function setBesoin(?string $besoin): self
    {
        $this->besoin = $besoin;

        return $this;
    }

    public function getDurreh(): ?int
    {
        return $this->durreh;
    }

    public function setDurreh(?int $durreh): self
    {
        $this->durreh = $durreh;

        return $this;
    }

    public function getDurrej(): ?int
    {
        return $this->durrej;
    }

    public function setDurrej(?int $durrej): self
    {
        $this->durrej = $durrej;

        return $this;
    }

    public function getDatedebutpropal(): ?\DateTime
    {
        return $this->datedebutpropal;
    }

    public function setDatedebutpropal(?\DateTime $datedebutpropal): self
    {
        $this->datedebutpropal = $datedebutpropal;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatefinpropal()
    {
        return $this->datefinpropal;
    }

    /**
     * @param mixed $datefinpropal
     */
    public function setDatefinpropal(?\DateTime $datefinpropal): void
    {
        $this->datefinpropal = $datefinpropal;
    }



    public function getLieupropal(): ?string
    {
        return $this->lieupropal;
    }

    public function setLieupropal(?string $lieupropal): self
    {
        $this->lieupropal = $lieupropal;

        return $this;
    }

    public function getPrerequis(): ?string
    {
        return $this->prerequis;
    }

    public function setPrerequis(?string $prerequis): self
    {
        $this->prerequis = $prerequis;

        return $this;
    }

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(?string $objectif): self
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getDateedition(): ?\DateTime
    {
        return $this->dateedition;
    }

    public function setDateedition(?\DateTime $dateedition): self
    {
        $this->dateedition = $dateedition;

        return $this;
    }

    public function getDaterelance(): ?\DateTimeInterface
    {
        return $this->daterelance;
    }

    public function setDaterelance(?\DateTimeInterface $daterelance): self
    {
        $this->daterelance = $daterelance;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(?string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?int
    {
        return $this->ville;
    }

    public function setVille(?int $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getFormation(): ?Competence
    {
        return $this->formation;
    }

    public function setFormation(?Competence $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getPersonnes(): ?string
    {
        return $this->personnes;
    }

    public function setPersonnes(?string $personnes): self
    {
        $this->personnes = $personnes;

        return $this;
    }

    public function getCoutht(): ?string
    {
        return $this->coutht;
    }

    public function setCoutht(?string $coutht): self
    {
        $this->coutht = $coutht;

        return $this;
    }

    public function getMontantTVA(): ?float
    {
        return $this->montantTVA;
    }

    public function setMontantTVA(?float $montantTVA): self
    {
        $this->montantTVA = $montantTVA;

        return $this;
    }

    public function getTypepropal(): ?string
    {
        return $this->typepropal;
    }

    public function setTypepropal(?string $typepropal): string
    {
        $this->typepropal = $typepropal;

        return $this;
    }

    public function getFiabilite(): ?string
    {
        return $this->fiabilite;
    }

    public function setFiabilite(?string $fiabilite): string
    {
        $this->fiabilite = $fiabilite;

        return $this;
    }
}
