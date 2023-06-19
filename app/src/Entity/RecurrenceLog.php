<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1RecurrenceLog
 *
 * @ORM\Table(name="1_recurrence_log")
 * @ORM\Entity
 */
class RecurrenceLog
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
     * @ORM\Column(name="id_reccur", type="integer", nullable=true)
     */
    private $idReccur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut_action", type="integer", nullable=true)
     */
    private $idStatutAction;

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
     * @ORM\Column(name="idb_reccur", type="integer", nullable=true)
     */
    private $idbReccur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut_action", type="integer", nullable=true)
     */
    private $idbStatutAction;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;


}
