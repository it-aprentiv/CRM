<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormationDossierStagiaire
 *
 * @ORM\Table(name="1_formation_dossier_stagiaire")
 * @ORM\Entity
 */
class FormationDossierStagiaire
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
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossier", inversedBy="stagiaires")
     * @ORM\JoinColumn(name="id_dossier", referencedColumnName="id", nullable=true)
     */
    private $dossier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_dossier", type="integer", nullable=true)
     */
    private $idbDossier;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact", inversedBy="formationDossierStagiaires" ,cascade={"persist"} )
     * @ORM\JoinColumn(name="id_stagiaire", referencedColumnName="id", nullable=true)
     */
    private $stagiaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_stagiaire", type="integer", nullable=true)
     */
    private $idbStagiaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
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

    public function __construct()
    {
        $this->dateAdd = new \DateTime('now');
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
     * @return FormationDossierStagiaire
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return FormationDossierStagiaire
     */
    public function setIdb(?int $idb): self
    {
        $this->idb = $idb;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDossier()
    {
        return $this->dossier;
    }

    /**
     * @param $dossier
     * @return FormationDossierStagiaire
     */
    public function setDossier($dossier)
    {
        $this->dossier = $dossier;

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
     * @return FormationDossierStagiaire
     */
    public function setIdbDossier($idbDossier)
    {
        $this->idbDossier = $idbDossier;

        return $this;
    }

    public function getStagiaire(): ?Contact
    {
        return $this->stagiaire;
    }


    public function setStagiaire(?Contact $idStagiaire) : self
    {
        $this->stagiaire = $idStagiaire;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getIdbStagiaire()
    {
        return $this->idbStagiaire;
    }

    /**
     * @param int|null $idbStagiaire
     * @return FormationDossierStagiaire
     */
    public function setIdbStagiaire($idbStagiaire)
    {
        $this->idbStagiaire = $idbStagiaire;

        return $this;
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
     * @return FormationDossierStagiaire
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
     * @return FormationDossierStagiaire
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
     * @return FormationDossierStagiaire
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
     * @return FormationDossierStagiaire
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
     * @return FormationDossierStagiaire
     */
    public function setStatutRst($statutRst)
    {
        $this->statutRst = $statutRst;

        return $this;
    }


}
