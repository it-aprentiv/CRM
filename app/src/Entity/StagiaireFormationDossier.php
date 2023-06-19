<?php
/**
 * Created by PhpStorm.
 * User: kella
 * Date: 08/01/2020
 * Time: 10:34
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaires pour les Formations
 * @ORM\Entity(repositoryClass="App\Repository\StagiaireFormationDossierRepository")
 */
class StagiaireFormationDossier extends FormationDossierStagiaire
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossier", inversedBy="stagiaires", cascade={"persist"})
     * @ORM\JoinColumn(name="id_dossier", referencedColumnName="id", nullable=true)
     */
    private $formationdossierstagiaire;

    /**
     * @var string
     */
    private $nomTable = '1_formation_dossier';

    /**
     * @return mixed
     */
    public function getFormationdossierstagiaire()
    {
        return $this->formationdossierstagiaire;
    }

    /**
     * @param mixed $formationdossierstagiaire
     * @return StagiaireFormationDossier
     */
    public function setFormationdossierstagiaire($formationdossierstagiaire)
    {
        $this->formationdossierstagiaire = $formationdossierstagiaire;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomTable()
    {
        return $this->nomTable;
    }

    /**
     * @param string $nomTable
     * @return StagiaireFormationDossier
     */
    public function setNomTable($nomTable)
    {
        $this->nomTable = $nomTable;

        return $this;
    }



}