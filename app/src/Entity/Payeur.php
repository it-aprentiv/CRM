<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5Payeur
 *
 * @ORM\Table(name="5_payeur", uniqueConstraints={@ORM\UniqueConstraint(name="libelle", columns={"libelle"})})
 * @ORM\Entity
 */
class Payeur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     *
     * @return Payeur
     */
    public function setLibelle(string $libelle): ?Payeur
    {
        $this->libelle = $libelle;

        return $this;
    }
}
