<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5TypeAdresse
 *
 * @ORM\Table(name="5_type_adresse")
 * @ORM\Entity
 */
class TypeAdresse5
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_adresse", type="string", length=50, nullable=true)
     */
    private $typeAdresse;

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
     * @return int
     */
    public function getIdb(): int
    {
        return $this->idb;
    }

    /**
     * @param int $idb
     */
    public function setIdb(int $idb): void
    {
        $this->idb = $idb;
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
