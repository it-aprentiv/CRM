<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5Qualite
 *
 * @ORM\Table(name="5_qualite", uniqueConstraints={@ORM\UniqueConstraint(name="nom_qualite", columns={"nom_qualite"})})
 * @ORM\Entity
 */
class Qualite
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
     * @var string|null
     *
     * @ORM\Column(name="nom_qualite", type="string", length=100, nullable=false, unique=true)
     */
    private $nomQualite;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getNomQualite(): ?string
    {
        return $this->nomQualite;
    }

    /**
     * @param string|null $nomQualite
     */
    public function setNomQualite(string $nomQualite): void
    {
        $this->nomQualite = $nomQualite;
    }

}
