<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1DevisDatePayment
 *
 * @ORM\Table(name="1_devis_date_payment")
 * @ORM\Entity
 */
class DevisDatePayment
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
     * @ORM\Column(name="date_prev_encaissement", type="datetime", nullable=true)
     */
    private $datePrevEncaissement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_prev_fac", type="datetime", nullable=true)
     */
    private $datePrevFac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis", type="integer", nullable=true)
     */
    private $idDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moyen_rglmt", type="integer", nullable=true)
     */
    private $idMoyenRglmt;

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
     * @ORM\Column(name="idb_devis", type="integer", nullable=true)
     */
    private $idbDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_moyen_rglmt", type="integer", nullable=true)
     */
    private $idbMoyenRglmt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_rglmnt", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_rglmnt", type="integer", nullable=true)
     */
    private $prctRglmnt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;


}
