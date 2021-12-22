<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class FormateurNote
 *
 * @ORM\Entity(repositoryClass="App\Repository\FormateurNoteRepository")
 */
class FormateurNote extends Note
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact", inversedBy="formateurcommentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $noteformateur;

    const NOM_TABLE = "1_contact_formateur";

    /**
     * @return mixed
     */
    public function getNoteformateur()
    {
        return $this->noteformateur;
    }

    /**
     * @param mixed $noteformateur
     * @return FormateurNote
     */
    public function setNoteformateur($noteformateur):void
    {
        $this->noteformateur = $noteformateur;
    }

    public function getNomTable() {
        return self::NOM_TABLE;
    }
}