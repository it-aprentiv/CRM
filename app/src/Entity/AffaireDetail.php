<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1AffaireDetail
 *
 * @ORM\Table(name="1_affaire_detail")
 * @ORM\Entity
 */
class AffaireDetail
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
     * @ORM\Column(name="id_client_final", type="integer", nullable=true)
     */
    private $idClientFinal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=true)
     */
    private $idProduit;

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
     * @ORM\Column(name="id_unite_mesure", type="integer", nullable=true)
     */
    private $idUniteMesure;

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
     * @ORM\Column(name="idb_cat_produit", type="integer", nullable=true)
     */
    private $idbCatProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_client_final", type="integer", nullable=true)
     */
    private $idbClientFinal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_parent", type="integer", nullable=true)
     */
    private $idbParent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_produit", type="integer", nullable=true)
     */
    private $idbProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_responsable", type="integer", nullable=true)
     */
    private $idbResponsable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idb_statut", type="string", length=255, nullable=true)
     */
    private $idbStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_unite_mesure", type="integer", nullable=true)
     */
    private $idbUniteMesure;

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
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

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
     * @ORM\Column(name="prix_vente_prev", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $prixVentePrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_vente_reel", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $prixVenteReel;

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantite_prev", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantitePrev;

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantite_reel", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantiteReel;

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
