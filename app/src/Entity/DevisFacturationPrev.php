<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1DevisFacturationPrev
 *
 * @ORM\Table(name="1_devis_facturation_prev", indexes={@ORM\Index(name="id_devis", columns={"id_devis"})})
 * @ORM\Entity
 */
class DevisFacturationPrev
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
     * @ORM\Column(name="id_devis", type="integer", nullable=true)
     */
    private $idDevis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis", type="integer", nullable=true)
     */
    private $idbDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis_detail", type="integer", nullable=true)
     */
    private $idDevisDetail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_detail", type="integer", nullable=true)
     */
    private $idbDevisDetail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cout", type="integer", nullable=true)
     */
    private $idCout;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cout", type="integer", nullable=true)
     */
    private $idbCout;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cli_prct_reglement", type="integer", nullable=true)
     */
    private $cliPrctReglement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_mnt_reglement", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $cliMntReglement = '0.0000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cli_date_prev_fac", type="datetime", nullable=true)
     */
    private $cliDatePrevFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cli_date_prev_encaissement", type="datetime", nullable=true)
     */
    private $cliDatePrevEncaissement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="four_prct_reglement", type="integer", nullable=true)
     */
    private $fourPrctReglement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="four_mnt_reglement", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $fourMntReglement = '0.0000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="four_date_prev_fac", type="datetime", nullable=true)
     */
    private $fourDatePrevFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="four_date_prev_encaissement", type="datetime", nullable=true)
     */
    private $fourDatePrevEncaissement;

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
