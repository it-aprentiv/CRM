<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1DevisCout
 *
 * @ORM\Table(name="1_devis_cout")
 * @ORM\Entity
 */
class DevisCout
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
     * @ORM\Column(name="id_devis", type="integer", nullable=true)
     */
    private $idDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis", type="integer", nullable=true)
     */
    private $idbDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis_detail", type="integer", nullable=true)
     */
    private $idDevisDetail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_detail", type="integer", nullable=true)
     */
    private $idbDevisDetail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_parent", type="integer", nullable=true)
     */
    private $idbParent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_structure", type="integer", nullable=true)
     */
    private $idStructure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_structure", type="integer", nullable=true)
     */
    private $idbStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_devis_fournisseur", type="string", length=50, nullable=true)
     */
    private $refDevisFournisseur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_devis", type="integer", nullable=true)
     */
    private $prctDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_devis_detail", type="integer", nullable=true)
     */
    private $prctDevisDetail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantHt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_tva", type="integer", nullable=true)
     */
    private $idbTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantTtc;

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
