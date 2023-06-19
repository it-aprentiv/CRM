<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Ndf
 *
 * @ORM\Table(name="1_ndf")
 * @ORM\Entity
 */
class Ndf
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
     * @var int|null
     *
     * @ORM\Column(name="id_mode_reglement", type="integer", nullable=true)
     */
    private $idModeReglement = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_mode_reglement", type="integer", nullable=true)
     */
    private $idbModeReglement = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_mode_reglement_avances", type="integer", nullable=true)
     */
    private $idModeReglementAvances = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_mode_reglement_avances", type="integer", nullable=true)
     */
    private $idbModeReglementAvances = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_etat", type="integer", nullable=true)
     */
    private $idEtat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_etat", type="integer", nullable=true)
     */
    private $idbEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_ndf", type="string", length=10, nullable=true)
     */
    private $noNdf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ndf", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateNdf = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut_periode", type="datetime", nullable=true)
     */
    private $dateDebutPeriode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_periode", type="datetime", nullable=true)
     */
    private $dateFinPeriode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ht", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantHt = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_tva", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantTva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ttc", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantTtc = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="restant_a_regler", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $restantARegler = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_reglement", type="string", length=50, nullable=true)
     */
    private $refReglement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reglement", type="datetime", nullable=true)
     */
    private $dateReglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_avances", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantAvances = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_reglement_avances", type="string", length=50, nullable=true)
     */
    private $refReglementAvances;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reglement_avances", type="datetime", nullable=true)
     */
    private $dateReglementAvances;

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
     * @ORM\Column(name="id_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idMoyenRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moyen_rglmnt_avances", type="integer", nullable=true)
     */
    private $idMoyenRglmntAvances;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=true)
     */
    private $idStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_moyen_rglmnt", type="integer", nullable=true)
     */
    private $idbMoyenRglmnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_moyen_rglmnt_avances", type="integer", nullable=true)
     */
    private $idbMoyenRglmntAvances;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

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
     * @var int|null
     *
     * @ORM\Column(name="no_ref", type="integer", nullable=true)
     */
    private $noRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;


}
