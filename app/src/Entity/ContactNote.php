<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class ContactNote Class pour les commentaires dans contact
 *
 * @ORM\Entity(repositoryClass="App\Repository\ContactNoteRepository")
 */
class ContactNote extends Note
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $idTableContact;

    private $nomTable = "1_contact";
    const NOM_TABLE = "1_contact";

    /**
     * @return mixed
     */
    public function getIdTableContact()
    {
        return $this->idTableContact;
    }

    /**
     * @param mixed $idTableContact
     * @return ContactNote
     */
    public function setIdTableContact($idTableContact):void
    {
        $this->idTableContact = $idTableContact;
    }

    /**
     * @return string
     */
    public function getNomTable(): string
    {
        return $this->nomTable;
    }

}