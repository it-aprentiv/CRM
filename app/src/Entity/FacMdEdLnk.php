<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 3FacMdEdLnk
 *
 * @ORM\Table(name="3_fac_md_ed_lnk")
 * @ORM\Entity
 */
class FacMdEdLnk
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
     * @ORM\Column(name="id_enc_dec", type="integer", nullable=true)
     */
    private $idEncDec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=true)
     */
    private $idFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idMoyenRglmnt;

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
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva_prev", type="integer", nullable=true)
     */
    private $idTvaPrev;

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
     * @ORM\Column(name="idb_enc_dec", type="integer", nullable=true)
     */
    private $idbEncDec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture", type="integer", nullable=true)
     */
    private $idbFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idbMoyenRglmnt;

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
     * @var int|null
     *
     * @ORM\Column(name="idb_tva", type="integer", nullable=true)
     */
    private $idbTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_tva_prev", type="integer", nullable=true)
     */
    private $idbTvaPrev;

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
     * @ORM\Column(name="prct_rglmnt_ed", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctRglmntEd;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prct_rglmnt_fm", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctRglmntFm;

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
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;


}
