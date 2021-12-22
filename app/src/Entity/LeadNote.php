<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class LeadNote Class pour les commentaires dans lead
 *
 * @ORM\Entity(repositoryClass="App\Repository\LeadNoteRepository")
 */
class LeadNote extends Note
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Lead", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $idTableLead;

    private $nomTable = "lead";
    const NOM_TABLE = "lead";

    /**
     * @return mixed
     */
    public function getIdTableLead()
    {
        return $this->idTableLead;
    }

    /**
     * @param mixed $idTableLead
     * @return LeadNote
     */
    public function setIdTableLead($idTableLead):void
    {
        $this->idTableLead = $idTableLead;
    }

    /**
     * @return string
     */
    public function getNomTable(): string
    {
        return $this->nomTable;
    }

}