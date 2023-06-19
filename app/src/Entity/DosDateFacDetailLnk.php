<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 3DosDateFacDetailLnk
 *
 * @ORM\Table(name="3_dos_date_fac_detail_lnk")
 * @ORM\Entity
 */
class DosDateFacDetailLnk
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_dossier_date", type="integer", nullable=true)
     */
    private $idDossierDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture_detail", type="integer", nullable=true)
     */
    private $idFactureDetail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_maj", type="integer", nullable=true)
     */
    private $idUserMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_dossier_date", type="integer", nullable=true)
     */
    private $idbDossierDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture_detail", type="integer", nullable=true)
     */
    private $idbFactureDetail;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=true)
     */
    private $idFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture", type="integer", nullable=true)
     */
    private $idbFacture;


}
