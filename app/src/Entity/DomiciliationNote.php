<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire pour les domiciliations
 *
 * @ORM\Entity(repositoryClass="App\Repository\DomiciliationNoteRepository")
 */
class DomiciliationNote extends Note
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Domiciliation", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $domiciliation;

    const NOM_TABLE = "1_domiciliation";

    public function getDomiciliation(){
        return $this->domiciliation;
    }

    public function setDomiciliation($domiciliation){
        $this->domiciliation = $domiciliation;

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