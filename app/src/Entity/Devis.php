<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Devis
 *
 * @ORM\Table(name="1_devis", indexes={@ORM\Index(name="id_statut_devis", columns={"id_statut_devis"}), @ORM\Index(name="id_commercial", columns={"id_commercial"})})
 * @ORM\Entity
 */
class Devis
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
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=true)
     */
    private $idContact = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact", type="integer", nullable=true)
     */
    private $idbContact = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact_cli", type="integer", nullable=true)
     */
    private $idContactCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact_cli", type="integer", nullable=true)
     */
    private $idbContactCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type_affaire", type="integer", nullable=true)
     */
    private $idTypeAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type_affaire", type="integer", nullable=true)
     */
    private $idbTypeAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_affaire", type="integer", nullable=true)
     */
    private $idAffaire = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_affaire", type="integer", nullable=true)
     */
    private $idbAffaire = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_responsable", type="integer", nullable=true)
     */
    private $idResponsable = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_responsable", type="integer", nullable=true)
     */
    private $idbResponsable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="intitule_devis", type="string", length=150, nullable=true)
     */
    private $intituleDevis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail", type="text", length=0, nullable=true)
     */
    private $detail;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_emission", type="datetime", nullable=true)
     */
    private $dateEmission;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validation", type="datetime", nullable=true)
     */
    private $dateValidation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type_cond_rglmnt", type="integer", nullable=true)
     */
    private $idTypeCondRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type_cond_rglmnt", type="integer", nullable=true)
     */
    private $idbTypeCondRglmnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditions_reglement", type="string", length=255, nullable=true)
     */
    private $conditionsReglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="budget_ref", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $budgetRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_du_budget_ref", type="integer", nullable=true)
     */
    private $prctDuBudgetRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="budget_max", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $budgetMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht_avant_rem", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHtAvantRem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_rem", type="integer", nullable=true)
     */
    private $prctRem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_rem", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantRem = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cout", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCout;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_marge", type="integer", nullable=true)
     */
    private $prctMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_marge", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantMarge;

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
     * @ORM\Column(name="montant_tva", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantTva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ttc", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalTtc = '0.0000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut_devis", type="integer", nullable=true)
     */
    private $idStatutDevis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut_devis", type="integer", nullable=true)
     */
    private $idbStatutDevis;

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
     * @var string|null
     *
     * @ORM\Column(name="conditions_rglmnt", type="string", length=255, nullable=true)
     */
    private $conditionsRglmnt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ref", type="datetime", nullable=true)
     */
    private $dateRef;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validite", type="datetime", nullable=true)
     */
    private $dateValidite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details", type="text", length=0, nullable=true)
     */
    private $details;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_activite", type="integer", nullable=true)
     */
    private $idActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cond_rglmnt", type="integer", nullable=true)
     */
    private $idCondRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact_str", type="integer", nullable=true)
     */
    private $idContactStr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis_cli", type="integer", nullable=true)
     */
    private $idDevisCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis_statut", type="integer", nullable=true)
     */
    private $idDevisStatut;

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
     * @ORM\Column(name="idb_activite", type="integer", nullable=true)
     */
    private $idbActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cond_rglmnt", type="integer", nullable=true)
     */
    private $idbCondRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact_str", type="integer", nullable=true)
     */
    private $idbContactStr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_cli", type="integer", nullable=true)
     */
    private $idbDevisCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_statut", type="integer", nullable=true)
     */
    private $idbDevisStatut;

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
     * @var string|null
     *
     * @ORM\Column(name="mnt_marge", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_rem", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntRem;

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
     * @var float|null
     *
     * @ORM\Column(name="taux_rem", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxRem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_cout_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCoutHt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_commercial", type="integer", nullable=true)
     */
    private $idCommercial;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DevisNote", mappedBy="devis", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $commentaires;

    public function __construct() {
    }
}
