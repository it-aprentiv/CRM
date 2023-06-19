<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Affaire
 *
 * @ORM\Table(name="1_affaire")
 * @ORM\Entity
 */
class Affaire
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
     * @ORM\Column(name="date_debut_prev", type="datetime", nullable=true)
     */
    private $dateDebutPrev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut_reel", type="datetime", nullable=true)
     */
    private $dateDebutReel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_prev", type="datetime", nullable=true)
     */
    private $dateFinPrev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_reel", type="datetime", nullable=true)
     */
    private $dateFinReel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_activite", type="integer", nullable=true)
     */
    private $idActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_client", type="integer", nullable=true)
     */
    private $idClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact_cli", type="integer", nullable=true)
     */
    private $idContactCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_responsable", type="integer", nullable=true)
     */
    private $idResponsable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=true)
     */
    private $idStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_str_ref", type="integer", nullable=true)
     */
    private $idStrRef;

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
     * @ORM\Column(name="idb_activite", type="integer", nullable=true)
     */
    private $idbActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_client", type="integer", nullable=true)
     */
    private $idbClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact_cli", type="integer", nullable=true)
     */
    private $idbContactCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_responsable", type="integer", nullable=true)
     */
    private $idbResponsable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_str_ref", type="integer", nullable=true)
     */
    private $idbStrRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_marge_prev", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntMargePrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_marge_reel", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntMargeReel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_ref", type="integer", nullable=true)
     */
    private $noRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_affaire", type="string", length=200, nullable=true)
     */
    private $nomAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_marge_prev", type="integer", nullable=true)
     */
    private $prctMargePrev;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_marge_reel", type="integer", nullable=true)
     */
    private $prctMargeReel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=5, nullable=true)
     */
    private $ref;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cout_ht_prev", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCoutHtPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cout_ht_reel", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCoutHtReel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht_prev", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHtPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht_reel", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHtReel;


}
