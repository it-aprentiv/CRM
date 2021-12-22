<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Competence
 *
 * @ORM\Table(name="1_competence")
 * @ORM\Entity(repositoryClass="App\Repository\CompetenceRepository")
 *
 */
class Competence
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
    private $idb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="competence", type="text", length=65535, nullable=true)
     */
    private $competence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="themeformation", type="text", length=65535, nullable=true)
     */
    private $themeformation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cat", type="integer", nullable=true)
     */
    private $idbCat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="themegenerale", type="text", length=65535, nullable=true)
     */
    private $themegenerale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_sous_cat", type="integer", nullable=true)
     */
    private $idbSousCat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $catalogueProgramme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $evaluation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossier", inversedBy="competences")
     */
    private $formationDossier;

    public function __construct()
    {
        $this->dateAdd = new \DateTime();
    }

    public function __toString()
    {
        return (string)$this->getCompetence();

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
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdb()
    {
        return $this->idb;
    }

    /**
     * @param int $idb
     */
    public function setIdb($idb)
    {
        $this->idb = $idb;
    }

    /**
     * @return null|string
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * @param null|string $competence
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;
    }

    /**
     * @return null|string
     */
    public function getThemeformation()
    {
        return $this->themeformation;
    }

    /**
     * @param null|string $themeformation
     */
    public function setThemeformation($themeformation)
    {
        $this->themeformation = $themeformation;
    }

    /**
     * @return int|null
     */
    public function getIdbCat()
    {
        return $this->idbCat;
    }

    /**
     * @param int|null $idbCat
     */
    public function setIdbCat($idbCat)
    {
        $this->idbCat = $idbCat;
    }

    /**
     * @return null|string
     */
    public function getThemegenerale()
    {
        return $this->themegenerale;
    }

    /**
     * @param null|string $themegenerale
     */
    public function setThemegenerale($themegenerale)
    {
        $this->themegenerale = $themegenerale;
    }

    /**
     * @return int|null
     */
    public function getIdbSousCat()
    {
        return $this->idbSousCat;
    }

    /**
     * @param int|null $idbSousCat
     */
    public function setIdbSousCat($idbSousCat)
    {
        $this->idbSousCat = $idbSousCat;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime $dateAdd
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
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
     */
    public function setIdUserAdd($idUserAdd)
    {
        $this->idUserAdd = $idUserAdd;
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
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;
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
     */
    public function setIdUserMaj($idUserMaj)
    {
        $this->idUserMaj = $idUserMaj;
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
     */
    public function setStatutRst($statutRst)
    {
        $this->statutRst = $statutRst;
    }

    /**
     * @return mixed
     */
    public function getFormationDossier(): FormationDossier
    {
        return $this->formationDossier;
    }

    /**
     * @param mixed $formationDossier
     * @return Competence
     */
    public function setFormationDossier(FormationDossier $formationDossier): self
    {
        $this->formationDossier = $formationDossier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCatalogueProgramme()
    {
        return $this->catalogueProgramme;
    }

    /**
     * @param mixed $catalogueProgramme
     */
    public function setCatalogueProgramme($catalogueProgramme): void
    {
        $this->catalogueProgramme = $catalogueProgramme;
    }

    /**
     * @return mixed
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * @param mixed $evaluation
     */
    public function setEvaluation($evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

}
