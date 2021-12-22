<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1DevisDetail
 *
 * @ORM\Table(name="1_devis_detail", indexes={@ORM\Index(name="id_devis", columns={"id_devis"}), @ORM\Index(name="idb_devis", columns={"idb_devis"})})
 * @ORM\Entity
 */
class DevisDetail
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
    private $idDevis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis", type="integer", nullable=true)
     */
    private $idbDevis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_parent", type="integer", nullable=true)
     */
    private $idbParent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail", type="text", length=0, nullable=true)
     */
    private $detail;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="debut", type="datetime", nullable=true)
     */
    private $debut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fin", type="datetime", nullable=true)
     */
    private $fin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_mode_calcul", type="integer", nullable=true)
     */
    private $idModeCalcul;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_mode_calcul", type="integer", nullable=true)
     */
    private $idbModeCalcul;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=true)
     */
    private $idProduit = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_produit", type="integer", nullable=true)
     */
    private $idbProduit = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_produit_unitaire", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $prixProduitUnitaire = '0.0000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantite = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_unite_mesure", type="integer", nullable=true)
     */
    private $idUniteMesure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_unite_mesure", type="integer", nullable=true)
     */
    private $idbUniteMesure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_devis", type="integer", nullable=true)
     */
    private $prctDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_detail_devis", type="integer", nullable=true)
     */
    private $idDetailDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_detail_devis", type="integer", nullable=true)
     */
    private $idbDetailDevis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prct_devis_detail", type="integer", nullable=true)
     */
    private $prctDevisDetail;

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
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details", type="text", length=0, nullable=true)
     */
    private $details;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_affaire", type="integer", nullable=true)
     */
    private $idAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cat_produit", type="integer", nullable=true)
     */
    private $idCatProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_affaire", type="integer", nullable=true)
     */
    private $idbAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cat_produit", type="integer", nullable=true)
     */
    private $idbCatProduit;

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


}
