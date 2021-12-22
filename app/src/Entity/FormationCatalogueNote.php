<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire pour les FormationCatalogue
 *
 * @ORM\Entity(repositoryClass="App\Repository\FormationCatalogueNoteRepository")
 */
class FormationCatalogueNote extends Note
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FormationCatalogue", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $formationCatalogue;

    const NOM_TABLE = "1_formation_catalogue";

    /**
     * @return mixed
     */
    public function getFormationCatalogue()
    {
        return $this->formationCatalogue;
    }

    /**
     * @param mixed $formationCatalogue
     * @return formationCatalogueNote
     */
    public function setFormationCatalogue(?FormationCatalogue $formationCatalogue)
    {
        $this->formationCatalogue = $formationCatalogue;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomTable()
    {
        return self::NOM_TABLE;
    }

}