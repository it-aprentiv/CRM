<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="note_nom_table", indexes={@ORM\Index(name="id_note", columns={"id_note"})}))
 * @ORM\Entity(repositoryClass="App\Repository\NoteNomTableRepository")
 */
class NoteNomTable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_note;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomtable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdNote(): ?int
    {
        return $this->id_note;
    }

    public function setIdNote(int $id_note): self
    {
        $this->id_note = $id_note;

        return $this;
    }

    public function getNomtable(): ?string
    {
        return $this->nomtable;
    }

    public function setNomtable(string $nomtable): self
    {
        $this->nomtable = $nomtable;

        return $this;
    }
}
