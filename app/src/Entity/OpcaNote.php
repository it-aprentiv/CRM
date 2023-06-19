<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5OpcaNote
 *
 * @ORM\Table(name="5_opca_note")
 * @ORM\Entity(repositoryClass="App\Repository\OpcaNoteRepository")
 */
class OpcaNote
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
     * @var int
     *
     * @ORM\Column(name="id_opca", type="integer", nullable=false)
     */
    private $idOpca;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOpca(): ?int
    {
        return $this->idOpca;
    }

    public function setIdOpca(int $idOpca): self
    {
        $this->idOpca = $idOpca;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }


}
