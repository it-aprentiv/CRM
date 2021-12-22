<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Avoir
 *
 * @ORM\Table(name="1_avoir", indexes={@ORM\Index(name="id_structure", columns={"id_structure"}), @ORM\Index(name="idb_structure", columns={"idb_structure"}), @ORM\Index(name="id_affaire", columns={"id_affaire"}), @ORM\Index(name="idb_affaire", columns={"idb_affaire"})})
 * @ORM\Entity(repositoryClass="App\Repository\AvoirRepository")
 */
class Avoir
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="no_ref", type="integer", nullable=true)
     */
    private $noRef;

    /**
     * @var int
     *
     * @ORM\Column(name="factureid", type="integer", nullable=true)
     */
    private $factureid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure")
     * @ORM\JoinColumn(name="id_structure", referencedColumnName="id", nullable=true)
     **/
     private $idStructure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_structure", type="integer", nullable=true)
     */
    private $idbStructure;

    /**
     * @var Contact|null
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_contact", referencedColumnName="id", nullable=true)
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
     * @ORM\Column(name="id_devis_reference", type="integer", nullable=true)
     */
    private $idDevisReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_reference", type="integer", nullable=true)
     */
    private $idbDevisReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_affaire", type="integer", nullable=true)
     */
    private $idAffaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_affaire", type="integer", nullable=true)
     */
    private $idbAffaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_devis_ref", type="string", length=50, nullable=true)
     */
    private $noDevisRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_facture", type="string", length=50, nullable=true)
     */
    private $noFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intitule_facture", type="string", length=150, nullable=true)
     */
    private $intituleFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details", type="text", length=0, nullable=true)
     */
    private $details;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_emission", type="datetime", nullable=true)
     */
    private $dateEmission;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditions_reglement", type="string", length=255, nullable=true)
     */
    private $conditionsReglement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reglement_final", type="datetime", nullable=true)
     */
    private $dateReglementFinal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=true)
     */
    private $idStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht", type="string", length=50, nullable=true)
     */
    private $totalHt = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pourcentage_remise", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $pourcentageRemise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_remise_fixe", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantRemiseFixe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_final_remise", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantFinalRemise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pourcentage_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $pourcentageTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $montantTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalTtc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd ;

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
     * @ORM\Column(name="date_rglmnt_final", type="datetime", nullable=true)
     */
    private $dateRglmntFinal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dest1", type="string", length=1, nullable=true)
     */
    private $dest1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dest2", type="string", length=1, nullable=true)
     */
    private $dest2;

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
     * @ORM\Column(name="id_contact_opca", type="integer", nullable=true)
     */
    private $idContactOpca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_contact_str", type="integer", nullable=true)
     */
    private $idContactStr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devis_ref", type="integer", nullable=true)
     */
    private $idDevisRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_facture_cli", type="integer", nullable=true)
     */
    private $idFactureCli;

    /**
     * @var Contact|null
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="id_opca", referencedColumnName="id", nullable=true)
     */
    private $idOpca;

    /**
     * @var Collaborateur
     * @ORM\ManyToOne(targetEntity="App\Entity\Collaborateur", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id_responsable", referencedColumnName="id", nullable=true)
     */
    private $idResponsable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_str_ref", type="integer", nullable=true)
     */
    private $idStrRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

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
     * @ORM\Column(name="idb_contact_opca", type="integer", nullable=true)
     */
    private $idbContactOpca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact_str", type="integer", nullable=true)
     */
    private $idbContactStr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_devis_ref", type="integer", nullable=true)
     */
    private $idbDevisRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_facture_cli", type="integer", nullable=true)
     */
    private $idbFactureCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_opca", type="integer", nullable=true)
     */
    private $idbOpca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_responsable", type="integer", nullable=true)
     */
    private $idbResponsable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_str_ref", type="integer", nullable=true)
     */
    private $idbStrRef;

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
     * @var string|null
     *
     * @ORM\Column(name="no_dossier_ref", type="string", length=30, nullable=true)
     */
    private $noDossierRef;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prct_marge", type="float", precision=10, scale=0, nullable=true)
     */
    private $prctMarge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reste_a_regler", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $resteARegler;

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
     * @var string|null
     *
     * @ORM\Column(name="total_regle", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalRegle = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;

    /**
     * @var FormationDossier|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossier", inversedBy="avoirs")
     * @ORM\JoinColumn(name="id_dossier", referencedColumnName="id", nullable=true)
     */
    private $idDossier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_dossier", type="integer", nullable=true)
     */
    private $idbDossier;

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
     * @var float|null
     *
     * @ORM\Column(name="duree_heures", type="float", precision=10, scale=0, nullable=true)
     */
    private $dureeHeures;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_jours", type="integer", nullable=true)
     */
    private $dureeJours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_accord", type="string", length=50, nullable=true)
     */
    private $refAccord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_rest_du", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $mntRestDu = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_regle_ht", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $totalRegleHt = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="opca_clt", type="string", length=30, nullable=false)
     */
    private $opcaClt;

    /**
     * @var string
     *
     * @ORM\Column(name="nature_avoir", type="string", length=300, nullable=true)
     */
    private $natureAvoir;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Avoir
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNoRef()
    {
        return $this->noRef;
    }

    /**
     * @param int|null $noRef
     * @return Avoir
     */
    public function setNoRef($noRef)
    {
        $this->noRef = $noRef;

        return $this;
    }

    /**
     * @return int
     */
    public function getFactureid()
    {
        return $this->factureid;
    }

    /**
     * @param int $factureid
     * @return Avoir
     */
    public function setFactureid($factureid)
    {
        $this->factureid = $factureid;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param null|string $ref
     * @return Avoir
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return Structure|null
     */
    public function getIdStructure()
    {
        return $this->idStructure;
    }

    /**
     * @param Structure|null $idStructure
     * @return Avoir
     */
    public function setIdStructure($idStructure)
    {
        $this->idStructure = $idStructure;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbStructure()
    {
        return $this->idbStructure;
    }

    /**
     * @param int|null $idbStructure
     * @return Avoir
     */
    public function setIdbStructure($idbStructure)
    {
        $this->idbStructure = $idbStructure;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getIdContact(): ?Contact
    {
        return $this->idContact;
    }

    /**
     * @param Contact|null $idContact
     * @return Avoir
     */
    public function setIdContact(?Contact $idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbContact()
    {
        return $this->idbContact;
    }

    /**
     * @param int|null $idbContact
     * @return Avoir
     */
    public function setIdbContact($idbContact)
    {
        $this->idbContact = $idbContact;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdDevisReference()
    {
        return $this->idDevisReference;
    }

    /**
     * @param int|null $idDevisReference
     * @return Avoir
     */
    public function setIdDevisReference($idDevisReference)
    {
        $this->idDevisReference = $idDevisReference;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbDevisReference()
    {
        return $this->idbDevisReference;
    }

    /**
     * @param int|null $idbDevisReference
     * @return Avoir
     */
    public function setIdbDevisReference($idbDevisReference)
    {
        $this->idbDevisReference = $idbDevisReference;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdAffaire()
    {
        return $this->idAffaire;
    }

    /**
     * @param int|null $idAffaire
     * @return Avoir
     */
    public function setIdAffaire($idAffaire)
    {
        $this->idAffaire = $idAffaire;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbAffaire()
    {
        return $this->idbAffaire;
    }

    /**
     * @param int|null $idbAffaire
     * @return Avoir
     */
    public function setIdbAffaire($idbAffaire)
    {
        $this->idbAffaire = $idbAffaire;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNoDevisRef()
    {
        return $this->noDevisRef;
    }

    /**
     * @param null|string $noDevisRef
     * @return Avoir
     */
    public function setNoDevisRef($noDevisRef)
    {
        $this->noDevisRef = $noDevisRef;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNoFacture()
    {
        return $this->noFacture;
    }

    /**
     * @param null|string $noFacture
     * @return Avoir
     */
    public function setNoFacture($noFacture)
    {
        $this->noFacture = $noFacture;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIntituleFacture()
    {
        return $this->intituleFacture;
    }

    /**
     * @param null|string $intituleFacture
     * @return Avoir
     */
    public function setIntituleFacture($intituleFacture)
    {
        $this->intituleFacture = $intituleFacture;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param null|string $details
     * @return Avoir
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateEmission()
    {
        return $this->dateEmission;
    }

    /**
     * @param \DateTime|null $dateEmission
     * @return Avoir
     */
    public function setDateEmission($dateEmission)
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getConditionsReglement()
    {
        return $this->conditionsReglement;
    }

    /**
     * @param null|string $conditionsReglement
     * @return Avoir
     */
    public function setConditionsReglement($conditionsReglement)
    {
        $this->conditionsReglement = $conditionsReglement;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateReglementFinal()
    {
        return $this->dateReglementFinal;
    }

    /**
     * @param \DateTime|null $dateReglementFinal
     * @return Avoir
     */
    public function setDateReglementFinal($dateReglementFinal)
    {
        $this->dateReglementFinal = $dateReglementFinal;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdStatut()
    {
        return $this->idStatut;
    }

    /**
     * @param int|null $idStatut
     * @return Avoir
     */
    public function setIdStatut($idStatut)
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbStatut()
    {
        return $this->idbStatut;
    }

    /**
     * @param int|null $idbStatut
     * @return Avoir
     */
    public function setIdbStatut($idbStatut)
    {
        $this->idbStatut = $idbStatut;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTotalHt()
    {
        return $this->totalHt;
    }

    /**
     * @param null|string $totalHt
     * @return Avoir
     */
    public function setTotalHt($totalHt)
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPourcentageRemise()
    {
        return $this->pourcentageRemise;
    }

    /**
     * @param null|string $pourcentageRemise
     * @return Avoir
     */
    public function setPourcentageRemise($pourcentageRemise)
    {
        $this->pourcentageRemise = $pourcentageRemise;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMontantRemiseFixe()
    {
        return $this->montantRemiseFixe;
    }

    /**
     * @param null|string $montantRemiseFixe
     * @return Avoir
     */
    public function setMontantRemiseFixe($montantRemiseFixe)
    {
        $this->montantRemiseFixe = $montantRemiseFixe;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMontantFinalRemise()
    {
        return $this->montantFinalRemise;
    }

    /**
     * @param null|string $montantFinalRemise
     * @return Avoir
     */
    public function setMontantFinalRemise($montantFinalRemise)
    {
        $this->montantFinalRemise = $montantFinalRemise;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPourcentageTva()
    {
        return $this->pourcentageTva;
    }

    /**
     * @param null|string $pourcentageTva
     * @return Avoir
     */
    public function setPourcentageTva($pourcentageTva)
    {
        $this->pourcentageTva = $pourcentageTva;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMontantTva()
    {
        return $this->montantTva;
    }

    /**
     * @param null|string $montantTva
     * @return Avoir
     */
    public function setMontantTva($montantTva)
    {
        $this->montantTva = $montantTva;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTotalTtc()
    {
        return $this->totalTtc;
    }

    /**
     * @param null|string $totalTtc
     * @return Avoir
     */
    public function setTotalTtc($totalTtc)
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime|null $dateCreation
     * @return Avoir
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime|null $dateAdd
     * @return Avoir
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdUserAdd()
    {
        return $this->idUserAdd;
    }

    /**
     * @param int|null $idUserAdd
     * @return Avoir
     */
    public function setIdUserAdd($idUserAdd)
    {
        $this->idUserAdd = $idUserAdd;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * @param \DateTime|null $dateMaj
     * @return Avoir
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdUserMaj()
    {
        return $this->idUserMaj;
    }

    /**
     * @param int|null $idUserMaj
     * @return Avoir
     */
    public function setIdUserMaj($idUserMaj)
    {
        $this->idUserMaj = $idUserMaj;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStatutRst()
    {
        return $this->statutRst;
    }

    /**
     * @param bool|null $statutRst
     * @return Avoir
     */
    public function setStatutRst($statutRst)
    {
        $this->statutRst = $statutRst;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getConditionsRglmnt()
    {
        return $this->conditionsRglmnt;
    }

    /**
     * @param null|string $conditionsRglmnt
     * @return Avoir
     */
    public function setConditionsRglmnt($conditionsRglmnt)
    {
        $this->conditionsRglmnt = $conditionsRglmnt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateRef()
    {
        return $this->dateRef;
    }

    /**
     * @param \DateTime|null $dateRef
     * @return Avoir
     */
    public function setDateRef($dateRef)
    {
        $this->dateRef = $dateRef;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateRglmntFinal()
    {
        return $this->dateRglmntFinal;
    }

    /**
     * @param \DateTime|null $dateRglmntFinal
     * @return Avoir
     */
    public function setDateRglmntFinal($dateRglmntFinal)
    {
        $this->dateRglmntFinal = $dateRglmntFinal;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDest1()
    {
        return $this->dest1;
    }

    /**
     * @param null|string $dest1
     * @return Avoir
     */
    public function setDest1($dest1)
    {
        $this->dest1 = $dest1;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDest2()
    {
        return $this->dest2;
    }

    /**
     * @param null|string $dest2
     * @return Avoir
     */
    public function setDest2($dest2)
    {
        $this->dest2 = $dest2;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdActivite()
    {
        return $this->idActivite;
    }

    /**
     * @param int|null $idActivite
     * @return Avoir
     */
    public function setIdActivite($idActivite)
    {
        $this->idActivite = $idActivite;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdCondRglmnt()
    {
        return $this->idCondRglmnt;
    }

    /**
     * @param int|null $idCondRglmnt
     * @return Avoir
     */
    public function setIdCondRglmnt($idCondRglmnt)
    {
        $this->idCondRglmnt = $idCondRglmnt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdContactOpca()
    {
        return $this->idContactOpca;
    }

    /**
     * @param int|null $idContactOpca
     * @return Avoir
     */
    public function setIdContactOpca($idContactOpca)
    {
        $this->idContactOpca = $idContactOpca;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdContactStr()
    {
        return $this->idContactStr;
    }

    /**
     * @param int|null $idContactStr
     * @return Avoir
     */
    public function setIdContactStr($idContactStr)
    {
        $this->idContactStr = $idContactStr;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdDevisRef()
    {
        return $this->idDevisRef;
    }

    /**
     * @param int|null $idDevisRef
     * @return Avoir
     */
    public function setIdDevisRef($idDevisRef)
    {
        $this->idDevisRef = $idDevisRef;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdFactureCli()
    {
        return $this->idFactureCli;
    }

    /**
     * @param int|null $idFactureCli
     * @return Avoir
     */
    public function setIdFactureCli($idFactureCli)
    {
        $this->idFactureCli = $idFactureCli;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getIdOpca()
    {
        return $this->idOpca;
    }

    /**
     * @param Contact|null $idOpca
     * @return Avoir
     */
    public function setIdOpca($idOpca)
    {
        $this->idOpca = $idOpca;

        return $this;
    }

    /**
     * @return Collaborateur|null
     */
    public function getIdResponsable(): ?Collaborateur
    {
        return $this->idResponsable;
    }


    public function setIdResponsable(?Collaborateur $idResponsable)
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdStrRef()
    {
        return $this->idStrRef;
    }

    /**
     * @param int|null $idStrRef
     * @return Avoir
     */
    public function setIdStrRef($idStrRef)
    {
        $this->idStrRef = $idStrRef;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdTva()
    {
        return $this->idTva;
    }

    /**
     * @param int|null $idTva
     * @return Avoir
     */
    public function setIdTva($idTva)
    {
        $this->idTva = $idTva;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbActivite()
    {
        return $this->idbActivite;
    }

    /**
     * @param int|null $idbActivite
     * @return Avoir
     */
    public function setIdbActivite($idbActivite)
    {
        $this->idbActivite = $idbActivite;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbCondRglmnt()
    {
        return $this->idbCondRglmnt;
    }

    /**
     * @param int|null $idbCondRglmnt
     * @return Avoir
     */
    public function setIdbCondRglmnt($idbCondRglmnt)
    {
        $this->idbCondRglmnt = $idbCondRglmnt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbContactOpca()
    {
        return $this->idbContactOpca;
    }

    /**
     * @param int|null $idbContactOpca
     * @return Avoir
     */
    public function setIdbContactOpca($idbContactOpca)
    {
        $this->idbContactOpca = $idbContactOpca;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbContactStr()
    {
        return $this->idbContactStr;
    }

    /**
     * @param int|null $idbContactStr
     * @return Avoir
     */
    public function setIdbContactStr($idbContactStr)
    {
        $this->idbContactStr = $idbContactStr;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbDevisRef()
    {
        return $this->idbDevisRef;
    }

    /**
     * @param int|null $idbDevisRef
     * @return Avoir
     */
    public function setIdbDevisRef($idbDevisRef)
    {
        $this->idbDevisRef = $idbDevisRef;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbFactureCli()
    {
        return $this->idbFactureCli;
    }

    /**
     * @param int|null $idbFactureCli
     * @return Avoir
     */
    public function setIdbFactureCli($idbFactureCli)
    {
        $this->idbFactureCli = $idbFactureCli;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbOpca()
    {
        return $this->idbOpca;
    }

    /**
     * @param int|null $idbOpca
     * @return Avoir
     */
    public function setIdbOpca($idbOpca)
    {
        $this->idbOpca = $idbOpca;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbResponsable()
    {
        return $this->idbResponsable;
    }

    /**
     * @param int|null $idbResponsable
     * @return Avoir
     */
    public function setIdbResponsable($idbResponsable)
    {
        $this->idbResponsable = $idbResponsable;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbStrRef()
    {
        return $this->idbStrRef;
    }

    /**
     * @param int|null $idbStrRef
     * @return Avoir
     */
    public function setIdbStrRef($idbStrRef)
    {
        $this->idbStrRef = $idbStrRef;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbTva()
    {
        return $this->idbTva;
    }

    /**
     * @param int|null $idbTva
     * @return Avoir
     */
    public function setIdbTva($idbTva)
    {
        $this->idbTva = $idbTva;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMntMarge()
    {
        return $this->mntMarge;
    }

    /**
     * @param null|string $mntMarge
     * @return Avoir
     */
    public function setMntMarge($mntMarge)
    {
        $this->mntMarge = $mntMarge;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMntRem()
    {
        return $this->mntRem;
    }

    /**
     * @param null|string $mntRem
     * @return Avoir
     */
    public function setMntRem($mntRem)
    {
        $this->mntRem = $mntRem;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMntTtc()
    {
        return $this->mntTtc;
    }

    /**
     * @param null|string $mntTtc
     * @return Avoir
     */
    public function setMntTtc($mntTtc)
    {
        $this->mntTtc = $mntTtc;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMntTva()
    {
        return $this->mntTva;
    }

    /**
     * @param null|string $mntTva
     * @return Avoir
     */
    public function setMntTva($mntTva)
    {
        $this->mntTva = $mntTva;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNoDossierRef()
    {
        return $this->noDossierRef;
    }

    /**
     * @param null|string $noDossierRef
     * @return Avoir
     */
    public function setNoDossierRef($noDossierRef)
    {
        $this->noDossierRef = $noDossierRef;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrctMarge()
    {
        return $this->prctMarge;
    }

    /**
     * @param float|null $prctMarge
     * @return Avoir
     */
    public function setPrctMarge($prctMarge)
    {
        $this->prctMarge = $prctMarge;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getResteARegler()
    {
        return $this->resteARegler;
    }

    /**
     * @param null|string $resteARegler
     * @return Avoir
     */
    public function setResteARegler($resteARegler)
    {
        $this->resteARegler = $resteARegler;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTauxRem()
    {
        return $this->tauxRem;
    }

    /**
     * @param float|null $tauxRem
     * @return Avoir
     */
    public function setTauxRem($tauxRem)
    {
        $this->tauxRem = $tauxRem;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTotalCoutHt()
    {
        return $this->totalCoutHt;
    }

    /**
     * @param null|string $totalCoutHt
     * @return Avoir
     */
    public function setTotalCoutHt($totalCoutHt)
    {
        $this->totalCoutHt = $totalCoutHt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTotalHtAvantRem()
    {
        return $this->totalHtAvantRem;
    }

    /**
     * @param null|string $totalHtAvantRem
     * @return Avoir
     */
    public function setTotalHtAvantRem($totalHtAvantRem)
    {
        $this->totalHtAvantRem = $totalHtAvantRem;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTotalRegle()
    {
        return $this->totalRegle;
    }

    /**
     * @param null|string $totalRegle
     * @return Avoir
     */
    public function setTotalRegle($totalRegle)
    {
        $this->totalRegle = $totalRegle;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     * @return Avoir
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getIdDossier(): FormationDossier
    {
        return $this->idDossier;
    }


    public function setIdDossier(?FormationDossier $idDossier): self
    {
        $this->idDossier = $idDossier;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdbDossier()
    {
        return $this->idbDossier;
    }

    /**
     * @param int|null $idbDossier
     * @return Avoir
     */
    public function setIdbDossier($idbDossier)
    {
        $this->idbDossier = $idbDossier;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateDebutPeriode()
    {
        return $this->dateDebutPeriode;
    }

    /**
     * @param \DateTime|null $dateDebutPeriode
     * @return Avoir
     */
    public function setDateDebutPeriode($dateDebutPeriode)
    {
        $this->dateDebutPeriode = $dateDebutPeriode;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateFinPeriode()
    {
        return $this->dateFinPeriode;
    }

    /**
     * @param \DateTime|null $dateFinPeriode
     * @return Avoir
     */
    public function setDateFinPeriode($dateFinPeriode)
    {
        $this->dateFinPeriode = $dateFinPeriode;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDureeHeures()
    {
        return $this->dureeHeures;
    }

    /**
     * @param float|null $dureeHeures
     * @return Avoir
     */
    public function setDureeHeures($dureeHeures)
    {
        $this->dureeHeures = $dureeHeures;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDureeJours()
    {
        return $this->dureeJours;
    }

    /**
     * @param int|null $dureeJours
     * @return Avoir
     */
    public function setDureeJours($dureeJours)
    {
        $this->dureeJours = $dureeJours;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRefAccord()
    {
        return $this->refAccord;
    }

    /**
     * @param null|string $refAccord
     * @return Avoir
     */
    public function setRefAccord($refAccord)
    {
        $this->refAccord = $refAccord;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMntRestDu()
    {
        return $this->mntRestDu;
    }

    /**
     * @param null|string $mntRestDu
     * @return Avoir
     */
    public function setMntRestDu($mntRestDu)
    {
        $this->mntRestDu = $mntRestDu;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTotalRegleHt()
    {
        return $this->totalRegleHt;
    }

    /**
     * @param null|string $totalRegleHt
     * @return Avoir
     */
    public function setTotalRegleHt($totalRegleHt)
    {
        $this->totalRegleHt = $totalRegleHt;

        return $this;
    }

    /**
     * @return string
     */
    public function getOpcaClt()
    {
        return $this->opcaClt;
    }

    /**
     * @param string $opcaClt
     * @return Avoir
     */
    public function setOpcaClt($opcaClt)
    {
        $this->opcaClt = $opcaClt;

        return $this;
    }

    /**
     * @return string
     */
    public function getNatureAvoir()
    {
        return $this->natureAvoir;
    }

    /**
     * @param string $natureAvoir
     * @return Avoir
     */
    public function setNatureAvoir($natureAvoir)
    {
        $this->natureAvoir = $natureAvoir;

        return $this;
    }


}
