<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Commentaire pour les FormationDossierNote
 *
 * @ORM\Entity(repositoryClass="App\Repository\FactureNoteRepository")
 */
class FactureNote extends Note
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Facture", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="id", nullable=true)
     */
    private $facture;

    const NOM_TABLE = "1_facture";

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        $this->facture = $facture;

        return $this;
    }

    public function getNomTable(): string {
        return self::NOM_TABLE;
    }
}