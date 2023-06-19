<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FactureDetail
 *
 * @ORM\Table(name="1_facture_detail", indexes={@ORM\Index(name="id_facture", columns={"id_facture"}), @ORM\Index(name="idb_facture", columns={"idb_facture"})})
 * @ORM\Entity
 */
class FactureDetail
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
     * @ORM\Column(name="id_facture", type="integer", nullable=true)
     */
    private $idFacture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture", type="integer", nullable=true)
     */
    private $idbFacture = '0';

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
     * @ORM\Column(name="id_detail_affaire", type="integer", nullable=true)
     */
    private $idDetailAffaire = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_detail_affaire", type="integer", nullable=true)
     */
    private $idbDetailAffaire = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_detail_devis_ref", type="integer", nullable=true)
     */
    private $idDetailDevisRef = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_detail_devis_ref", type="integer", nullable=true)
     */
    private $idbDetailDevisRef = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cat_produit", type="integer", nullable=true)
     */
    private $idCatProduit = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cat_produit", type="integer", nullable=true)
     */
    private $idbCatProduit = '0';

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
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details", type="text", length=0, nullable=true)
     */
    private $details;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_produit_unitaire", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $prixProduitUnitaire = '0.0000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="nbe_jours", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbeJours = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbe_heures", type="integer", nullable=true)
     */
    private $nbeHeures = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantite = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="%_rem", type="integer", nullable=true)
     */
    private $pourcentRem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_rem", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantRem = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalHt = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tx_tva", type="decimal", precision=10, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $txTva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ttc", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalTtc = '0.0000';

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
     * @ORM\Column(name="id_mode_calcul", type="integer", nullable=true)
     */
    private $idModeCalcul;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_mode_calcul", type="integer", nullable=true)
     */
    private $idbModeCalcul;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_parent", type="integer", nullable=true)
     */
    private $idbParent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_tva", type="integer", nullable=true)
     */
    private $idbTva;

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
     * @ORM\Column(name="prct_marge", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctMarge;

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
     * @var string|null
     *
     * @ORM\Column(name="total_ht_avant_rem", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHtAvantRem;

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
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_action", type="integer", nullable=true)
     */
    private $idAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_dossier", type="integer", nullable=true)
     */
    private $idDossier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_action", type="integer", nullable=true)
     */
    private $idbAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_dossier", type="integer", nullable=true)
     */
    private $idbDossier;


}
