<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire pour les FormationDossierNote
 *
 * @ORM\Entity(repositoryClass="App\Repository\FormationDossierNoteRepository")
 */
class FormationDossierNote extends Note
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationDossier", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $formationDossier;
    private $nomTable = "1_formation_dossier";
    const NOM_TABLE = "1_formation_dossier";

    /**
     * @return mixed
     */
    public function getFormationDossier()
    {
        return $this->formationDossier;
    }

    /**
     * @param mixed $formationDossier
     * @return FormationDossierNote
     */
    public function setFormationDossier(?FormationDossier $formationDossier)
    {
        $this->formationDossier = $formationDossier;

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
     */
    public function setNomTable($nomTable)
    {
        $this->nomTable = $nomTable;
    }


}