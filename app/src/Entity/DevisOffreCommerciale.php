<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1DevisOffreCommerciale
 *
 * @ORM\Table(name="1_devis_offre_commerciale")
 * @ORM\Entity
 */
class DevisOffreCommerciale
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
     * @ORM\Column(name="id_propal", type="integer", nullable=false)
     */
    private $idPropal;

    /**
     * @var string
     *
     * @ORM\Column(name="intrainter", type="string", length=200, nullable=false)
     */
    private $intrainter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_stage", type="datetime", nullable=false)
     */
    private $dateStage;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=false)
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_h", type="integer", nullable=false)
     */
    private $dureeH;

    /**
     * @var float
     *
     * @ORM\Column(name="cout", type="float", precision=10, scale=0, nullable=false)
     */
    private $cout = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="offre_commercial", type="float", precision=10, scale=0, nullable=false)
     */
    private $offreCommercial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant = '0';


}
