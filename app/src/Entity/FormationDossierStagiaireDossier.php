<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 07/01/2020
 * Time: 14:48
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Dossier;


/**
 * Stagiaires pour les Formations
 * @ORM\Entity(repositoryClass="App\Repository\FormationDossierStagiaireDossierRepository")
 */
class FormationDossierStagiaireDossier extends FormationDossierStagiaire
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Dossier", inversedBy="stagiaires", cascade={"persist"})
     * @ORM\JoinColumn(name="id_dossier", referencedColumnName="id", nullable=true)
     */
    private $stagiaireDossier;

    /**
     * @var string
     */
    private $nomTable = '1_Dossier';

    /**
     * @return \App\Entity\Dossier|null
     */
    public function getDossier()
    {
        return $this->stagiaireDossier;
    }

    /**
     * @param \App\Entity\Dossier|null $dossier
     * @return FormationDossierStagiaireDossier
     */
    public function setDossier($stagiaireDossier): self
    {
        $this->stagiaireDossier = $stagiaireDossier;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomTable(): string
    {
        return $this->nomTable;
    }
}