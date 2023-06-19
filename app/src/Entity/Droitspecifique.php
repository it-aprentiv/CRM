<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droitspecifique
 *
 * @ORM\Table(name="droitspecifique", indexes={@ORM\Index(name="utilisateur", columns={"utilisateur"})})
 * @ORM\Entity(repositoryClass="App\Repository\DroitspecifiqueRepository")
 */
class Droitspecifique
{
    /**
     * @var int
     *
     * @ORM\Column(name="utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $utilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="menu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menu;

    /**
     * @var int
     *
     * @ORM\Column(name="ecriture", type="integer", nullable=false)
     */
    private $ecriture = '0';

    public function setUtilisateur(int $utilisateurId) {
        $this->utilisateur = $utilisateurId;

        return $this;
    }

    public function getUtilisateur(): ?int
    {
        return $this->utilisateur;
    }

    public function getMenu(): ?int
    {
        return $this->menu;
    }

    public function setMenu(int $menuId) {
        $this->menu = $menuId;

        return $this;
    }

    public function getEcriture(): ?int
    {
        return $this->ecriture;
    }

    public function setEcriture(int $ecriture): self
    {
        $this->ecriture = $ecriture;

        return $this;
    }


}
