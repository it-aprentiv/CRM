<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Constants\Facture as FactureConstant;

/**
 * 1FactureDomiciliation
 *
 * @ORM\Table(name="1_facture_domiciliation", indexes={@ORM\Index(name="statut", columns={"statut"}), @ORM\Index(name="iddom", columns={"iddom"}), @ORM\Index(name="payeur", columns={"payeur"})})
 * @ORM\Entity(repositoryClass="App\Repository\FactureDomiciliationRepository")
 */
class FactureDomiciliation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idfacturedom", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacturedom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero", type="string", length=100, nullable=true)
     */
    private $numero;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant = '0';

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", precision=10, scale=0, nullable=false)
     */
    private $tva = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ht", type="float", precision=10, scale=0, nullable=false)
     */
    private $ht = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ttc", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttc = '0';

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateestimepaiement", type="date", nullable=true)
     */
    private $dateestimepaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer", nullable=true)
     */
    private $statut;

    /**
     * @var Payeur
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Payeur")
     * @ORM\JoinColumn(name="payeur", referencedColumnName="id", nullable=true)
     */
    private $payeur;

    /**
     * @var Domiciliation
     *
     * @ORM\OneToOne(targetEntity="App\Entity\Domiciliation", inversedBy="facture")
     * @ORM\JoinColumn(name="iddom", referencedColumnName="id", nullable=false)
     */
    private $domiciliation;

    /**
     * @var float
     */
    private $tvaTotal;

    /**
     * @var Structure
     */
    private $structure;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FactDomNote", mappedBy="factureDom", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $commentaires;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $statutCommission;
    
    
    /**
     * APR-113
     * @var float
     *
     * @ORM\Column(name="depotGarantie", type="float", precision=10, scale=0, nullable=true)
     */
    private $depotGarantie = '0';
    

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function setIdfacturedom($id){
        $this->idfacturedom = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdfacturedom()
    {
        return $this->idfacturedom;
    }

    /**
     * @return string|null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string|null $numero
     * @return $this
     */
    public function setNumero(string $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     * @return $this
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTimeInterface $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return float
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * @param float $remise
     * @return $this
     */
    public function setRemise(?float $remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param float $tva
     * @return $this
     */
    public function setTva(float $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * @return float
     */
    public function getHt()
    {
        return $this->ht;
    }

    /**
     * @param float $ht
     * @return $this
     */
    public function setHt(float $ht)
    {
        $this->ht = $ht;

        return $this;
    }

    /**
     * @return float
     */
    public function getTtc()
    {
        return $this->ttc;
    }

    /**
     * @param float $ttc
     * @return FactureDomiciliation
     */
    public function setTtc(float $ttc)
    {
        $this->ttc = $ttc;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getDateestimepaiement()
    {

        if (is_null($this->dateestimepaiement) && ($this->date instanceof \DateTime)) {
            // APR-159 : Date estimation de paiement = Date de facturation + 1 mois
            $dateInt = new \DateInterval('P1M');
            $date = clone $this->date;
            $this->dateestimepaiement = $date->add($dateInt);
        }

        return $this->dateestimepaiement;
    }

    /**
     * @param DateTimeInterface $dateestimepaiement
     * @return FactureDomiciliation
     */
    public function setDateestimepaiement($dateestimepaiement)
    {
        $this->dateestimepaiement = $dateestimepaiement;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param $statut
     * @return FactureDomiciliation
     */
    public function setStatut($statut)
    {
        $this->statut = (int)$statut;

        return $this;
    }

    /**
     * @return Payeur|null
     */
    public function getPayeur(): ?Payeur
    {
        return $this->payeur;
    }

    /**
     * @param Payeur $payeur
     * @return $this
     */
    public function setPayeur(Payeur $payeur)
    {
        $this->payeur = $payeur;

        return $this;
    }

    /**
     * @return Domiciliation
     */
    public function getDomiciliation()
    {
        return $this->domiciliation;
    }

    /**
     * @param Domiciliation $domiciliation
     * @return $this
     */
    public function setDomiciliation(Domiciliation $domiciliation)
    {
        $this->domiciliation = $domiciliation;

        return $this;
    }

    /**
     * @return float
     */
    public function getTvaTotal(): ?float {

        $this->tvaTotal = ($this->ht * ((float) $this->tva)) / 100;

        return $this->tvaTotal;
    }

    /**
     * @param float $tvaTotal
     *
     * @return FactureDomiciliation
     */
    public function setTvaTotal(?float $tvaTotal = null): FactureDomiciliation
    {
        $this->tvaTotal = $tvaTotal;

        return $this;
    }

    /**
     * @return Structure|null
     */
    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    /**
     * @param Structure|null $structure
     *
     * @return FactureDomiciliation
     */
    public function setStructure(?Structure $structure = null): FactureDomiciliation
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * @return Collection|FactDomNote[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(FactDomNote $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setFactureDom($this);
        }

        return $this;
    }

    public function removeCommentaire(FactDomNote $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getFactureDom() === $this) {
                $commentaire->setFactureDom(null);
            }
        }

        return $this;
    }

    public function getStatutCommission(): ?int
    {
        return $this->statutCommission;
    }

    public function setStatutCommission(?int $statutCommission): self
    {
        $this->statutCommission = $statutCommission;

        return $this;
    }

    public function getDepotGarantie(): ?float
    {
        return $this->depotGarantie;
    }

    public function setDepotGarantie(?float $depotGarantie): self
    {
        $this->depotGarantie = $depotGarantie;

        return $this;
    }
}
