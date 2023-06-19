<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormateurFormationDateStage
 *
 * @ORM\Table(name="1_formateur_formation_date_stage")
 * @ORM\Entity
 */
class FormateurFormationDateStage
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
     * @var int
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     */
    private $idFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_formation", type="datetime", nullable=false)
     */
    private $dateFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="time", nullable=false)
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="time", nullable=false)
     */
    private $fin;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;


}
