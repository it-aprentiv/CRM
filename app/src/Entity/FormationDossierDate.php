<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormationDossierDate
 *
 * @ORM\Table(name="1_formation_dossier_date")
 * @ORM\Entity(repositoryClass="App\Repository\FormationDossierDateRepository")
 */
class FormationDossierDate
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
     * @var int
     *
     * @ORM\Column(name="idb", type="integer", nullable=true)
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
     * @ORM\Column(name="date_d", type="datetime", nullable=true)
     */
    private $dateD;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_f", type="datetime", nullable=true)
     */
    private $dateF;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var FormationDossier
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossier",inversedBy="formationDate")
     * @ORM\JoinColumn(name="id_dossier", referencedColumnName="id", nullable=false)
     */
      private $idDossier;

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
     * @ORM\Column(name="idb_dossier", type="integer", nullable=true)
     */
    private $idbDossier;

    /**
     * @var float|null
     *
     * @ORM\Column(name="nb_h", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbH = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_fac", type="string", length=50, nullable=true)
     */
    private $refFac;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_matin", type="boolean", nullable=true)
     */
    private $hasMatin;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_am", type="boolean", nullable=true)
     */
    private $hasAm;
    /**
     * @var string|null
     *
     * @ORM\Column(name="d_heure_m", type="string", length=6, nullable=true)
     */
    private $dHeureM;
    /**
     * @var string|null
     *
     * @ORM\Column(name="f_heure_m", type="string", length=6, nullable=true)
     */
    private $fHeureM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="d_heure_am", type="string", length=6, nullable=true)
     */
    private $dHeureAm;
    /**
     * @var string|null
     *
     * @ORM\Column(name="f_heure_am", type="string", length=6, nullable=true)
     */
    private $fHeureAm;
    /**
     * @var string
     *
     * @ORM\Column(name="jours_semaine", type="text", length=12, nullable=true)
     */
    private $joursSemaine;

    /**
     *
     * @ORM\Column(name="nbrj_n", type="integer", nullable=true)
     */
    private $nbrjN = '0';

    /**
     *
    @ORM\Column(name="nbrj_n1", type="integer", nullable=true)
     */
    private $nbrjN1 = '0';
    /**
     * @var float|null
     *
     * @ORM\Column(name="nbrh_n", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbrhN = '0';
    /**
     * @var float|null
     *
     * @ORM\Column(name="nbrh_n1", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbrhN1 = '0';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdb(): int
    {
        return $this->idb;
    }

    /**
     * @param int $idb
     */
    public function setIdb(int $idb): void
    {
        $this->idb = $idb;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime|null $dateAdd
     */
    public function setDateAdd(?\DateTime $dateAdd): void
    {
        $this->dateAdd = $dateAdd;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateD(): ?\DateTime
    {
        return $this->dateD;
    }

    /**
     * @param \DateTime|null $dateD
     */
    public function setDateD(?\DateTime $dateD): void
    {
        $this->dateD = $dateD;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateF(): ?\DateTime
    {
        return $this->dateF;
    }

    /**
     * @param \DateTime|null $dateF
     */
    public function setDateF(?\DateTime $dateF): void
    {
        $this->dateF = $dateF;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateMaj(): ?\DateTime
    {
        return $this->dateMaj;
    }

    /**
     * @param \DateTime|null $dateMaj
     */
    public function setDateMaj(?\DateTime $dateMaj): void
    {
        $this->dateMaj = $dateMaj;
    }

    /**
     * @return int|null
     */
    public function getIdDossier(): ?int
    {
        return $this->idDossier;
    }

    /**
     * @param int|null $idDossier
     */
    public function setIdDossier(FormationDossier $idDossier)
    {
        $this->idDossier = $idDossier;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdUserAdd(): ?int
    {
        return $this->idUserAdd;
    }

    /**
     * @param int|null $idUserAdd
     */
    public function setIdUserAdd(?int $idUserAdd): void
    {
        $this->idUserAdd = $idUserAdd;
    }

    /**
     * @return int|null
     */
    public function getIdUserMaj(): ?int
    {
        return $this->idUserMaj;
    }

    /**
     * @param int|null $idUserMaj
     */
    public function setIdUserMaj(?int $idUserMaj): void
    {
        $this->idUserMaj = $idUserMaj;
    }

    /**
     * @return int|null
     */
    public function getIdbDossier(): ?int
    {
        return $this->idbDossier;
    }

    /**
     * @param int|null $idbDossier
     */
    public function setIdbDossier(?int $idbDossier): void
    {
        $this->idbDossier = $idbDossier;
    }

    /**
     * @return float|null
     */
    public function getNbH(): ?float
    {
        return $this->nbH;
    }

    /**
     * @param float|null $nbH
     */
    public function setNbH(?float $nbH): void
    {
        $this->nbH = $nbH;
    }

    /**
     * @return bool|null
     */
    public function getStatutRst(): ?bool
    {
        return $this->statutRst;
    }

    /**
     * @param bool|null $statutRst
     */
    public function setStatutRst(?bool $statutRst): void
    {
        $this->statutRst = $statutRst;
    }

    /**
     * @return string|null
     */
    public function getMnt(): ?string
    {
        return $this->mnt;
    }

    /**
     * @param string|null $mnt
     */
    public function setMnt(?string $mnt): void
    {
        $this->mnt = $mnt;
    }

    /**
     * @return string|null
     */
    public function getRefFac(): ?string
    {
        return $this->refFac;
    }

    /**
     * @param string|null $refFac
     */
    public function setRefFac(?string $refFac): void
    {
        $this->refFac = $refFac;
    }

    /**
     * @return bool|null
     */
    public function getHasAm()
    {
        return $this->hasAm;
    }

    /**
     * @param bool|null $hasAm
     * @return FormationDossierDate
     */
    public function setHasAm($hasAm)
    {
        $this->hasAm = $hasAm;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDHeureM()
    {
        return $this->dHeureM;
    }

    /**
     * @param null|string $dHeureM
     * @return FormationDossierDate
     */
    public function setDHeureM($dHeureM)
    {
        $this->dHeureM = $dHeureM;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFHeureM()
    {
        return $this->fHeureM;
    }

    /**
     * @param null|string $fHeureM
     * @return FormationDossierDate
     */
    public function setFHeureM($fHeureM)
    {
        $this->fHeureM = $fHeureM;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDHeureAm()
    {
        return $this->dHeureAm;
    }

    /**
     * @param null|string $dHeureAm
     * @return FormationDossierDate
     */
    public function setDHeureAm($dHeureAm)
    {
        $this->dHeureAm = $dHeureAm;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFHeureAm()
    {
        return $this->fHeureAm;
    }

    /**
     * @param null|string $fHeureAm
     * @return FormationDossierDate
     */
    public function setFHeureAm($fHeureAm)
    {
        $this->fHeureAm = $fHeureAm;

        return $this;
    }

    /**
     * @return string
     */
    public function getJoursSemaine()
    {
        return $this->joursSemaine;
    }

    /**
     * @param string $joursSemaine
     * @return FormationDossierDate
     */
    public function setJoursSemaine($joursSemaine)
    {
        $this->joursSemaine = $joursSemaine;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasMatin()
    {
        return $this->hasMatin;
    }

    /**
     * @param bool|null $hasMatin
     * @return FormationDossierDate
     */
    public function setHasMatin($hasMatin)
    {
        $this->hasMatin = $hasMatin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbrjN()
    {
        return $this->nbrjN;
    }

    /**
     * @param mixed $nbrjN
     * @return FormationDossierDate
     */
    public function setNbrjN($nbrjN)
    {
        $this->nbrjN = $nbrjN;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbrjN1()
    {
        return $this->nbrjN1;
    }

    /**
     * @param mixed $nbrjN1
     * @return FormationDossierDate
     */
    public function setNbrjN1($nbrjN1)
    {
        $this->nbrjN1 = $nbrjN1;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getNbrhN()
    {
        return $this->nbrhN;
    }

    /**
     * @param float|null $nbrhN
     * @return FormationDossierDate
     */
    public function setNbrhN($nbrhN)
    {
        $this->nbrhN = $nbrhN;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getNbrhN1()
    {
        return $this->nbrhN1;
    }

    /**
     * @param float|null $nbrhN1
     * @return FormationDossierDate
     */
    public function setNbrhN1($nbrhN1)
    {
        $this->nbrhN1 = $nbrhN1;

        return $this;
    }
}
