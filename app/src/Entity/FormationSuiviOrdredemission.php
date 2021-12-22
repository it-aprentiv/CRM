<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormationSuiviOrdredemission
 *
 * @ORM\Table(name="1_formation_suivi_ordredemission", indexes={@ORM\Index(name="idFormation", columns={"idFormation"})})
 * @ORM\Entity(repositoryClass="App\Repository\SuiviOMRepository")
 */
class FormationSuiviOrdredemission
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Dossier", inversedBy="suiviMissions")
     * @ORM\JoinColumn(name="idFormation", referencedColumnName="id")
     */
    private $idFormation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="recepFac", type="date", nullable=true)
     */
    private $recepfac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moisFac", type="string", length=50, nullable=true)
     */
    private $moisfac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="heureFait", type="integer", nullable=true)
     */
    private $heurefait;

    /**
     * @var int|null
     *
     * @ORM\Column(name="heureRestant", type="integer", nullable=true)
     */
    private $heurerestant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFac", type="date", nullable=true)
     */
    private $datefac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numFac", type="string", length=100, nullable=true)
     */
    private $numfac;

    /**
     * @var float|null
     *
     * @ORM\Column(name="montantHT", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantht;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateValidation", type="date", nullable=true)
     */
    private $dateValidation ;

    public function __construct()
    {
        $this->dateValidation = new \DateTime();
        $this->datefac = new \DateTime();
        $this->recepfac = new \DateTime();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdFormation() {
        return $this->idFormation;
    }

    public function setIdFormation($idFormation) {
        $this->idFormation = $idFormation;
        return $this;
    }

    public function getMoisfac() {
        return $this->moisfac;
    }

    public function setMoisfac($moisfac) {
        $this->moisfac = $moisfac;
        return $this;
    }

    public function getRecepfac() {
        return $this->recepfac;
    }

    public function setRecepfac($recepfac) {
        $this->recepfac = $recepfac;
        return $this;
    }

    public function getHeurefait() {
        return $this->heurefait;
    }

    public function setHeurefait($heurefait) {
        $this->heurefait = $heurefait;
        return $this;
    }

    public function setHeurerestant($heurerestant) {
        return $this->heurerestant = $heurerestant;
        return $this;
    }

    public function getHeurerestant() {
        return $this->heurerestant;
    }

    public function getDatefac() {
        return $this->datefac;
    }

    public function setDatefac($datefac) {
        $this->datefac = $datefac;
        return $this;
    }

    public function getNumfac() {
        return $this->numfac;
    }

    public function setNumfac($numfac) {
        $this->numfac = $numfac;
        return $this;
    }

    public function getMontantht() {
        return $this->montantht;
    }

    public function setMontantht($montantht) {
        $this->montantht = $montantht;
    }

    public function getDateValidation() {
        return $this->dateValidation;
    }

    public function setDateValidation($dateValidation) {
        $this->dateValidation = $dateValidation;
        return $this;
    }
}
