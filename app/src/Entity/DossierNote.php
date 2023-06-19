<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 19/12/2019
 * Time: 15:14
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Dossier;

/**
 * Commentaire pour la formation
 * @ORM\Entity(repositoryClass="App\Repository\DossierNoteRepository")
 */
class DossierNote extends Note
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Dossier", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $formation;

    const NOM_TABLE = '1_dossier';

    public function getFormation(): ?Dossier{
        return $this->formation;
    }

    public function setFormation(?Dossier $formation): self{
        $this->formation = $formation;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomTable(): string
    {
        return self::NOM_TABLE;
    }

}