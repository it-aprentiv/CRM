<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity de gestion des notes sur encaissement
 *
 * @ORM\Entity(repositoryClass="App\Repository\EncaissementNoteRepository")
 */
class EncaissementNote extends Note
{
    
     /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Encaissement", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $encaissement;
    
    private $nomTable = "1_encaissement";
    const NOM_TABLE = "1_encaissement";
    
    public function getNomTable() {
        return $this->nomTable;
    }

        
    public function getEncaissement(): ?Encaissement
    {
        return $this->encaissement;
    }

    public function setEncaissement(?Encaissement $encaissement): self
    {
        $this->encaissement = $encaissement;

        return $this;
    }
    
}
