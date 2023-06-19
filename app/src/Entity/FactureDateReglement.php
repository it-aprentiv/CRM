<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FactureDateReglement
 *
 * @ORM\Table(name="1_facture_date_reglement", indexes={@ORM\Index(name="id_facture", columns={"id_facture"}), @ORM\Index(name="idb_facture", columns={"idb_facture"})})
 * @ORM\Entity
 */
class FactureDateReglement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=true)
     */
    private $idFacture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture", type="integer", nullable=true)
     */
    private $idbFacture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="%_reglement", type="integer", nullable=true)
     */
    private $pourcentReglement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_reglement", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $mntReglement = '0.0000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_prev_reglement", type="datetime", nullable=true)
     */
    private $datePrevReglement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reel_reglement", type="datetime", nullable=true)
     */
    private $dateReelReglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut_reglement", type="string", length=4, nullable=true)
     */
    private $statutReglement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_maj", type="integer", nullable=true)
     */
    private $idUserMaj;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;


}
