<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Recurrence
 *
 * @ORM\Table(name="1_recurrence")
 * @ORM\Entity
 */
class Recurrence
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
     * @ORM\Column(name="date_depart", type="datetime", nullable=true)
     */
    private $dateDepart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_renouv", type="datetime", nullable=true)
     */
    private $dateRenouv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_action_recur", type="integer", nullable=true)
     */
    private $idActionRecur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_action_statut", type="integer", nullable=true)
     */
    private $idActionStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_periode", type="integer", nullable=true)
     */
    private $idPeriode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_table", type="integer", nullable=true)
     */
    private $idTable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_unite_duree", type="integer", nullable=true)
     */
    private $idUniteDuree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_action", type="integer", nullable=true)
     */
    private $idUserAction;

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
     * @ORM\Column(name="idb_action_recur", type="integer", nullable=true)
     */
    private $idbActionRecur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_action_statut", type="integer", nullable=true)
     */
    private $idbActionStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_periode", type="integer", nullable=true)
     */
    private $idbPeriode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_table", type="integer", nullable=true)
     */
    private $idbTable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_unite_duree", type="integer", nullable=true)
     */
    private $idbUniteDuree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_a_creer", type="integer", nullable=true)
     */
    private $nbACreer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_cree", type="integer", nullable=true)
     */
    private $nbCree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_duree", type="integer", nullable=true)
     */
    private $nbDuree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_restant", type="integer", nullable=true)
     */
    private $nbRestant;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="no_jour_mois", type="boolean", nullable=true)
     */
    private $noJourMois;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="no_mois", type="boolean", nullable=true)
     */
    private $noMois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_table", type="string", length=50, nullable=true)
     */
    private $nomTable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;


}
