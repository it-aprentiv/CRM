<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1EncaissDecaiss
 *
 * @ORM\Table(name="1_encaiss_decaiss")
 * @ORM\Entity
 */
class EncaissDecaiss
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
     * @ORM\Column(name="id_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idMoyenRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_piece", type="integer", nullable=true)
     */
    private $idPiece;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=true)
     */
    private $idStatut;

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
     * @ORM\Column(name="idb_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idbMoyenRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_piece", type="integer", nullable=true)
     */
    private $idbPiece;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

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
     * @var string|null
     *
     * @ORM\Column(name="mnt_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntHt;

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
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_rglmnt", type="string", length=50, nullable=true)
     */
    private $refRglmnt;

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
