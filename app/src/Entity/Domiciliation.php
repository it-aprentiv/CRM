<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * 1Domiciliation
 *
 * @ORM\Table(name="1_domiciliation", indexes={
 *     @ORM\Index(name="client", columns={"client"}),
 *     @ORM\Index(name="type", columns={"type"}),
 *     @ORM\Index(name="salle", columns={"salle"}),
 *     @ORM\Index(name="statut", columns={"statut"}),
 *     @ORM\Index(name="commercial", columns={"commercial"}),
 * })
 * @ORM\Entity(repositoryClass="App\Repository\DomiciliationRepository")
 */
class Domiciliation
{

    const TABLE_NAME = '1_domiciliation';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Contact
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact")
     * @ORM\JoinColumn(name="client", nullable=false)
     */
    private $client;

    /**
     * @var Typedom
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Typedom")
     * @ORM\JoinColumn(name="type", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=100, nullable=false)
     */
    private $ref;

    /**
     * @var Salle
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Salle")
     * @ORM\JoinColumn(name="salle", nullable=true)
     */
    private $salle;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="text", length=65535, nullable=false)
     */
    private $lieu;

    /**
     * @var FormationDossierStatut
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossierStatut")
     * @ORM\JoinColumn(name="statut", nullable=false)
     */
    private $statut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="signature", type="date", nullable=false)
     */
    private $signature;

    /**
     * @var float
     *
     * @ORM\Column(name="fixe", type="float", precision=10, scale=0, nullable=true)
     */
    private $fixe;

    /**
     * @var float
     *
     * @ORM\Column(name="recu", type="float", precision=10, scale=0, nullable=true)
     */
    private $recu;

    /**
     * @var int
     *
     * @ORM\Column(name="tva", type="integer", nullable=true)
     */
    private $tva;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="accord", type="date", nullable=true)
     */
    private $accord;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="debut", type="date", nullable=false)
     */
    private $debut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="fin", type="date", nullable=false)
     */
    private $fin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbj", type="integer", nullable=true)
     */
    private $nbj;

    /**
     * @var int
     *
     * @ORM\Column(name="nbh", type="integer", nullable=true)
     */
    private $nbh;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="creation", type="date", nullable=false)
     */
    private $creation;

    /**
     * @var Collaborateur
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Collaborateur")
     * @ORM\JoinColumn(name="commercial", nullable=false)
     */
    private $commercial;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="encaissement", type="date", nullable=true)
     */
    private $encaissement;

    /**
     * @var int
     *
     * @ORM\Column(name="payeur", type="integer", nullable=true)
     */
    private $payeur;

    /**
     * @var int
     *
     * @ORM\Column(name="commission", type="integer", nullable=true)
     */
    private $commission;

    /**
     * @var boolean
     *
     * @ORM\Column(name="partenaire", type="boolean", nullable=false)
     */
    private $partenaire = false;

    /**
     * @var FactureDomiciliation
     *
     * @ORM\OneToOne(targetEntity="FactureDomiciliation", mappedBy="domiciliation", cascade={"persist", "remove"})
     */
    private $facture;

    /**
     *
     * @ORM\OneToMany(targetEntity="App\Entity\DomiciliationNote", mappedBy="domiciliation", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     *
     */
    private $commentaires;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $statutPaiementCommission;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tauxCommission;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Domiciliation
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Contact $client
     *
     * @return Domiciliation
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Typedom
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Typedom $type
     *
     * @return Domiciliation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     *
     * @return Domiciliation
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param Salle $salle
     *
     * @return Domiciliation
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     *
     * @return Domiciliation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * @return FormationDossierStatut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param FormationDossierStatut $statut
     *
     * @return Domiciliation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param DateTime $signature
     *
     * @return Domiciliation
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return float
     */
    public function getFixe()
    {
        return $this->fixe;
    }

    /**
     * @param float $fixe
     *
     * @return Domiciliation
     */
    public function setFixe($fixe)
    {
        $this->fixe = $fixe;

        return $this;
    }

    /**
     * @return float
     */
    public function getRecu()
    {
        return $this->recu;
    }

    /**
     * @param float $recu
     *
     * @return Domiciliation
     */
    public function setRecu($recu)
    {
        $this->recu = $recu;

        return $this;
    }

    /**
     * @return int
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param int $tva
     *
     * @return Domiciliation
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAccord()
    {
        return $this->accord;
    }

    /**
     * @param DateTime $accord
     *
     * @return Domiciliation
     */
    public function setAccord($accord)
    {
        $this->accord = $accord;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * @param DateTime $debut
     *
     * @return Domiciliation
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param DateTime $fin
     *
     * @return Domiciliation
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * @return int
     */
    public function getNbj()
    {
        return $this->nbj;
    }

    /**
     * @param int $nbj
     *
     * @return Domiciliation
     */
    public function setNbj($nbj)
    {
        $this->nbj = $nbj;

        return $this;
    }

    /**
     * @return int
     */
    public function getNbh()
    {
        return $this->nbh;
    }

    /**
     * @param int $nbh
     *
     * @return Domiciliation
     */
    public function setNbh($nbh)
    {
        $this->nbh = $nbh;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * @param DateTime $creation
     *
     * @return Domiciliation
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * @return Collaborateur
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * @param Collaborateur $commercial
     *
     * @return Domiciliation
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEncaissement()
    {
        return $this->encaissement;
    }

    /**
     * @param DateTime $encaissement
     *
     * @return Domiciliation
     */
    public function setEncaissement($encaissement)
    {
        $this->encaissement = $encaissement;

        return $this;
    }

    /**
     * @return int
     */
    public function getPayeur()
    {
        return $this->payeur;
    }

    /**
     * @param int $payeur
     *
     * @return Domiciliation
     */
    public function setPayeur($payeur)
    {
        $this->payeur = $payeur;

        return $this;
    }

    /**
     * @return int
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param int $commission
     *
     * @return Domiciliation
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }

    /**
     * @param boolean $partenaire
     *
     * @return $this
     */
    public function setPartenaire($partenaire)
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * @param FactureDomiciliation $facture
     *
     * @return $this
     */
    public function setFacture(?FactureDomiciliation $facture)
    {
        if ($facture instanceof FactureDomiciliation) {
            $facture->setDomiciliation($this);
        }
        $this->facture = $facture;

        return $this;
    }

    /**
     * @return FactureDomiciliation
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * @param mixed $commentaires
     */
    public function setCommentaires($commentaires): void
    {
        $this->commentaires->clear();
        foreach ($commentaires as $com) {
            $this->addCommentaires($com);
        }
    }

    public function addCommentaires(DomiciliationNote $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $commentaire->setIdTable($this->getId());
            $commentaire->setDomiciliation($this);
            $this->commentaires[] = $commentaire;
        }

        return $this;
    }

    public function getCommentaires()
    {

        return $this->commentaires
            ->matching(NoteRepository::notDeletedCriteria());
    }

    public function getTablename()
    {
        return self::TABLE_NAME;
    }

    public function getStatutPaiementCommission(): ?int
    {
        return $this->statutPaiementCommission;
    }

    public function setStatutPaiementCommission(?int $statutPaiementCommission): self
    {
        $this->statutPaiementCommission = $statutPaiementCommission;

        return $this;
    }

    public function getTauxCommission(): ?int
    {
        return $this->tauxCommission;
    }

    public function setTauxCommission(?int $tauxCommission): self
    {
        $this->tauxCommission = $tauxCommission;

        return $this;
    }
}
