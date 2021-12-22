<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormationActionDetail
 *
 * @ORM\Table(name="1_formation_action_detail")
 * @ORM\Entity
 */
class FormationActionDetail
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
     * @ORM\Column(name="id_action", type="integer", nullable=true)
     */
    private $idAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_action", type="integer", nullable=true)
     */
    private $idbAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_detail_action", type="datetime", nullable=true)
     */
    private $dateDetailAction;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_debut", type="datetime", nullable=true)
     */
    private $heureDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_fin", type="datetime", nullable=true)
     */
    private $heureFin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_adresse", type="integer", nullable=true)
     */
    private $idAdresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_adresse", type="integer", nullable=true)
     */
    private $idbAdresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_formateur", type="integer", nullable=true)
     */
    private $idFormateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_formateur", type="integer", nullable=true)
     */
    private $idbFormateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=true)
     */
    private $idStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

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
