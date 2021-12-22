<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\DependencyInjection\Tests\Compiler\F;

/**
 * Class FactDomNote
 * @package App\Entity
 * @ORM\Entity()
 */
class FactDomNote extends Note
{
    const NOM_TABLE = "1_facture_domiciliation";

    /**
     * @var FactureDomiciliation
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FactureDomiciliation", inversedBy="commentaires")
     * @ORM\JoinColumn(name="id_table", referencedColumnName="idfacturedom", nullable=true)
     */
    private $factureDom;

    /**
     * @return FactureDomiciliation|null
     */
    public function getFactureDom(): ?FactureDomiciliation
    {
        return $this->factureDom;
    }

    /**
     * @param FactureDomiciliation $factureDom
     *
     * @return FactDomNote
     */
    public function setFactureDom(FactureDomiciliation $factureDom): self
    {
        $this->factureDom = $factureDom;

        return $this;
    }

    public function getNomTable(): string
    {
        return self::NOM_TABLE;
    }
}