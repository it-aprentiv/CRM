<?php
/**
 * file DevisNote.php
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DevisNote Class pour les commentaires dans Devis
 *
 * @ORM\Entity(repositoryClass="App\Repository\DevisNoteRepository")
 */
class DevisNote extends Note
{
    const NOM_TABLE = "1_devis";

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Devis", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $devis;

    /**
     * @return null|Devis
     */
    public function getDevis(){
        return $this->devis;
    }

    /**
     * @param null|Devis $devis
     * @return $this
     */
    public function setDevis($devis){
        $this->devis = $devis;

        return $this;
    }

    public function getNomTable() {
        return self::NOM_TABLE;
    }
}