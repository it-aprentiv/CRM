<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity
 */
class Historique
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTORIQUE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistorique;

    /**
     * @var int
     *
     * @ORM\Column(name="IDUTILISATEUR", type="integer", nullable=false)
     */
    private $idutilisateur = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="EVENEMENT", type="text", length=65535, nullable=false)
     */
    private $evenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEHISTO", type="datetime", nullable=false)
     */
    private $datehisto;


}
