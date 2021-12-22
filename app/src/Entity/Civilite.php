<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5Civilite
 *
 * @ORM\Table(name="5_civilite")
 * @ORM\Entity(repositoryClass="App\Repository\CiviliteRepository")
 */
class Civilite
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
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="civilite", type="string", length=30, nullable=true)
     */
    private $civilite;

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
    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    /**
     * @param string|null $civilite
     */
    public function setCivilite(?string $civilite): void
    {
        $this->civilite = $civilite;
    }


}
