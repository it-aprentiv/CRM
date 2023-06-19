<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1MouvementDivers
 *
 * @ORM\Table(name="1_mouvement_divers")
 * @ORM\Entity
 */
class MouvementDivers
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ref", type="datetime", nullable=true)
     */
    private $dateRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_affaire", type="integer", nullable=true)
     */
    private $idAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_detail_affaire", type="integer", nullable=true)
     */
    private $idDetailAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_etat", type="integer", nullable=true)
     */
    private $idEtat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idMoyenRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_note_de_frais", type="integer", nullable=true)
     */
    private $idNoteDeFrais;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_str_ref", type="integer", nullable=true)
     */
    private $idStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_structure", type="integer", nullable=true)
     */
    private $idStructure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

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
     * @ORM\Column(name="idb_affaire", type="integer", nullable=true)
     */
    private $idbAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_detail_affaire", type="integer", nullable=true)
     */
    private $idbDetailAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_etat", type="integer", nullable=true)
     */
    private $idbEtat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idbMoyenRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_note_de_frais", type="integer", nullable=true)
     */
    private $idbNoteDeFrais;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_str_ref", type="integer", nullable=true)
     */
    private $idbStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_structure", type="integer", nullable=true)
     */
    private $idbStructure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_tva", type="integer", nullable=true)
     */
    private $idbTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type", type="integer", nullable=true)
     */
    private $idbType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_ref", type="integer", nullable=true)
     */
    private $noRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reste_a_regler", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $resteARegler;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_regle", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalRegle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;


}
