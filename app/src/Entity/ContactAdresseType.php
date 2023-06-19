<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="contact_adresse_type", uniqueConstraints={@ORM\UniqueConstraint(name="type_adresse", columns={"type_adresse"})})
 * @ORM\Entity
 */
class ContactAdresseType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type_adresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_adresse", type="string", length=100, nullable=true)
     */
    private $typeAdresse;

    /**
     * @return int
     */
    public function getIdTypeAdresse(): int
    {
        return $this->idTypeAdresse;
    }

    /**
     * @param int $idTypeAdresse
     */
    public function setIdTypeAdresse(int $idTypeAdresse): void
    {
        $this->idTypeAdresse = $idTypeAdresse;
    }

    /**
     * @return string|null
     */
    public function getTypeAdresse(): ?string
    {
        return $this->typeAdresse;
    }

    /**
     * @param string|null $typeAdresse
     */
    public function setTypeAdresse(?string $typeAdresse): void
    {
        $this->typeAdresse = $typeAdresse;
    }
}
