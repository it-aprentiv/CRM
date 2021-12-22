<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="App\Repository\MenuRepository")
 */
class Menu
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDMENU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenu;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMMENU", type="string", length=150, nullable=false)
     */
    private $nommenu;

    /**
     * @var string
     *
     * @ORM\Column(name="URLMENU", type="string", length=200, nullable=false)
     */
    private $urlmenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="URLCREATION", type="text", length=65535, nullable=true)
     */
    private $urlcreation;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORIE", type="string", length=200, nullable=false)
     */
    private $categorie;

    /**
     * @var int
     *
     * @ORM\Column(name="ordre", type="integer", nullable=false)
     */
    private $ordre;

    public function getIdmenu(): ?int
    {
        return $this->idmenu;
    }

    public function getNommenu(): ?string
    {
        return $this->nommenu;
    }

    public function setNommenu(string $nommenu): self
    {
        $this->nommenu = $nommenu;

        return $this;
    }

    public function getUrlmenu(): ?string
    {
        return $this->urlmenu;
    }

    public function setUrlmenu(string $urlmenu): self
    {
        $this->urlmenu = $urlmenu;

        return $this;
    }

    public function getUrlcreation(): ?string
    {
        return $this->urlcreation;
    }

    public function setUrlcreation(?string $urlcreation): self
    {
        $this->urlcreation = $urlcreation;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }


}
