<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormationDossierDateStage
 *
 * @ORM\Table(name="1_formation_dossier_date_stage")
 * @ORM\Entity
 */
class FormationDossierDateStage
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
     * @ORM\Column(name="id_dossier", type="integer", nullable=false)
     */
    private $idDossier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_stage", type="datetime", nullable=false)
     */
    private $dateStage;

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
