<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormateurFormation
 *
 * @ORM\Table(name="1_formateur_formation")
 * @ORM\Entity
 */
class FormateurFormation
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
     * @ORM\Column(name="id_contact", type="integer", nullable=true)
     */
    private $idContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact", type="integer", nullable=true)
     */
    private $idbContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cat", type="integer", nullable=true)
     */
    private $idCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cat", type="integer", nullable=true)
     */
    private $idbCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sous_cat", type="integer", nullable=true)
     */
    private $idSousCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_sous_cat", type="integer", nullable=true)
     */
    private $idbSousCat;

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
     * @ORM\Column(name="cout_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_demi_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutDemiJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_h", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutH;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_niv_maitrise", type="integer", nullable=true)
     */
    private $idNivMaitrise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_niv_maitrise", type="integer", nullable=true)
     */
    private $idbNivMaitrise;

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
     * @var int|null
     *
     * @ORM\Column(name="id_societe", type="integer", nullable=true)
     */
    private $idSociete;

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
     * @var int
     *
     * @ORM\Column(name="total_ht", type="integer", nullable=false)
     */
    private $totalHt;

    /**
     * @var int
     *
     * @ORM\Column(name="id_structure", type="integer", nullable=false)
     */
    private $idStructure;

    /**
     * @var string
     *
     * @ORM\Column(name="num_ordre_mission", type="string", length=200, nullable=false)
     */
    private $numOrdreMission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ordre_mission", type="date", nullable=false)
     */
    private $dateOrdreMission;

    /**
     * @var int
     *
     * @ORM\Column(name="id_statut_om", type="integer", nullable=false)
     */
    private $idStatutOm;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_formation", type="string", length=200, nullable=false)
     */
    private $lieuFormation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_statut_form", type="integer", nullable=false)
     */
    private $idStatutForm;

    /**
     * @var int
     *
     * @ORM\Column(name="durstage_j", type="integer", nullable=false)
     */
    private $durstageJ;

    /**
     * @var int
     *
     * @ORM\Column(name="durstage_h", type="integer", nullable=false)
     */
    private $durstageH;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_stage_du", type="date", nullable=false)
     */
    private $dateStageDu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_stage_au", type="date", nullable=false)
     */
    private $dateStageAu;

    /**
     * @var string
     *
     * @ORM\Column(name="cout_form_j", type="string", length=200, nullable=false)
     */
    private $coutFormJ;

    /**
     * @var string
     *
     * @ORM\Column(name="cout_form_demi_j", type="string", length=200, nullable=false)
     */
    private $coutFormDemiJ;

    /**
     * @var string
     *
     * @ORM\Column(name="cout_form_h", type="string", length=200, nullable=false)
     */
    private $coutFormH;

    /**
     * @var string
     *
     * @ORM\Column(name="total_form_ht", type="string", length=200, nullable=false)
     */
    private $totalFormHt;

    /**
     * @var string
     *
     * @ORM\Column(name="id_type", type="string", length=30, nullable=false)
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="intit_stage", type="string", length=200, nullable=false)
     */
    private $intitStage;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_formateur", type="string", length=300, nullable=false)
     */
    private $statutFormateur;

}
