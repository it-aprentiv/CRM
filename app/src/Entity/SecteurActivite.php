<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5SecteurActivite
 *
 * @ORM\Table(name="5_secteur_activite")
 * @ORM\Entity(repositoryClass="App\Repository\SecteurActiviteRepository")
 */
class SecteurActivite
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
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="secteur", type="string", length=150, nullable=true)
     */
    private $secteur;

    public function __toString()
    {
        return $this->getSecteur();
    }
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdb(): ?int
    {
        return $this->idb;
    }

    /**
     * @param int $idb
     */
    public function setIdb(?int $idb): void
    {
        $this->idb = $idb;
    }

    /**
     * @return string|null
     */
    public function getSecteur(): ?string
    {
        return $this->secteur;
    }

    /**
     * @param string|null $secteur
     */
    public function setSecteur(?string $secteur): void
    {
        $this->secteur = $secteur;
    }

}
