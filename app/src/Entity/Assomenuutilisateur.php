<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assomenuutilisateur
 *
 * @ORM\Table(name="assomenuutilisateur", indexes={@ORM\Index(name="FK_ASSOMENUUTILISATEUR2", columns={"IDMENU"})})
 * @ORM\Entity
 */
class Assomenuutilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDUTILISATEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idutilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="IDMENU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmenu;


}
