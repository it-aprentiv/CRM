<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Cout
 *
 * @ORM\Table(name="1_cout")
 * @ORM\Entity
 */
class Cout
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
     * @ORM\Column(name="id_cat", type="integer", nullable=true)
     */
    private $idCat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cat", type="integer", nullable=true)
     */
    private $idbCat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sous_cat", type="integer", nullable=true)
     */
    private $idSousCat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_sous_cat", type="integer", nullable=true)
     */
    private $idbSousCat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_fournisseur", type="integer", nullable=true)
     */
    private $idFournisseur = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_fournisseur", type="integer", nullable=true)
     */
    private $idbFournisseur = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_dossier", type="integer", nullable=true)
     */
    private $idDossier = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_dossier", type="integer", nullable=true)
     */
    private $idbDossier = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_action", type="integer", nullable=true)
     */
    private $idAction = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_action", type="integer", nullable=true)
     */
    private $idbAction = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_note_de_frais", type="integer", nullable=true)
     */
    private $idNoteDeFrais = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_note_de_frais", type="integer", nullable=true)
     */
    private $idbNoteDeFrais = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_etat", type="integer", nullable=true)
     */
    private $idEtat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_etat", type="integer", nullable=true)
     */
    private $idbEtat = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_facture", type="string", length=50, nullable=true)
     */
    private $refFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ht", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantHt = '0.0000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="id_tx_tva", type="float", precision=10, scale=0, nullable=true)
     */
    private $idTxTva = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="idb_tx_tva", type="float", precision=10, scale=0, nullable=true)
     */
    private $idbTxTva = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_tva", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $mntTva = '0.0000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_mode_reglmnt", type="integer", nullable=true)
     */
    private $idModeReglmnt = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_mode_reglmnt", type="integer", nullable=true)
     */
    private $idbModeReglmnt = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_facture", type="datetime", nullable=true)
     */
    private $dateFacture;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_prev", type="datetime", nullable=true)
     */
    private $datePrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restant_a_regler", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $restantARegler = '0.0000';

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
