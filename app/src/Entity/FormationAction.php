<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormationAction
 *
 * @ORM\Table(name="1_formation_action")
 * @ORM\Entity
 */
class FormationAction
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
     * @ORM\Column(name="no_action", type="integer", nullable=true)
     */
    private $noAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_action", type="string", length=255, nullable=true)
     */
    private $refAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intra_inter", type="string", length=1, nullable=true)
     */
    private $intraInter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=true)
     */
    private $idFormation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_formation", type="integer", nullable=true)
     */
    private $idbFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu_global", type="string", length=255, nullable=true)
     */
    private $lieuGlobal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_adresse_global", type="integer", nullable=true)
     */
    private $idAdresseGlobal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_adresse_global", type="integer", nullable=true)
     */
    private $idbAdresseGlobal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_h_prev", type="integer", nullable=true)
     */
    private $dureeHPrev;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_j_prev", type="integer", nullable=true)
     */
    private $dureeJPrev;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_h_effectuee", type="integer", nullable=true)
     */
    private $dureeHEffectuee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_h_restant", type="integer", nullable=true)
     */
    private $dureeHRestant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="budget_action", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $budgetAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ca_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCaHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cout_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCoutHt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="%_marge", type="integer", nullable=true)
     */
    private $pourcentMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_marge", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectifs", type="string", length=255, nullable=true)
     */
    private $objectifs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_stagiaires", type="integer", nullable=true)
     */
    private $nbStagiaires;

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

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ref", type="datetime", nullable=true)
     */
    private $dateRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_str_ref", type="integer", nullable=true)
     */
    private $idStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_str_ref", type="integer", nullable=true)
     */
    private $idbStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_ref", type="integer", nullable=true)
     */
    private $noRef;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prct_marge", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;


}
