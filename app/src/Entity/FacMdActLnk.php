<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 3FacMdActLnk
 *
 * @ORM\Table(name="3_fac_md_act_lnk")
 * @ORM\Entity
 */
class FacMdActLnk
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_prev", type="datetime", nullable=true)
     */
    private $datePrev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reel", type="datetime", nullable=true)
     */
    private $dateReel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_action", type="integer", nullable=true)
     */
    private $idAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=true)
     */
    private $idFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moyen_rglmt", type="integer", nullable=true)
     */
    private $idMoyenRglmt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_mvnt_divers", type="integer", nullable=true)
     */
    private $idMvntDivers;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut_rglmnt", type="integer", nullable=true)
     */
    private $idStatutRglmnt;

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
     * @ORM\Column(name="idb_action", type="integer", nullable=true)
     */
    private $idbAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture", type="integer", nullable=true)
     */
    private $idbFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_moyen_rglmt", type="integer", nullable=true)
     */
    private $idbMoyenRglmt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_mvnt_divers", type="integer", nullable=true)
     */
    private $idbMvntDivers;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut_rglmnt", type="integer", nullable=true)
     */
    private $idbStatutRglmnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ht_prev", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntHtPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ttc_prev", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTtcPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_tva_prev", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTvaPrev;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prct_action", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctAction;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prct_fact_md", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctFactMd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rem", type="string", length=255, nullable=true)
     */
    private $rem;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;

    /**
     * @var float|null
     *
     * @ORM\Column(name="taux_tva", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxTva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="taux_tva_prev", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxTvaPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;


}
