<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 2NotesLien
 *
 * @ORM\Table(name="2_notes_lien")
 * @ORM\Entity
 */
class NotesLien
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
     * @var int|null
     *
     * @ORM\Column(name="id_note_1", type="integer", nullable=true)
     */
    private $idNote1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_note_2", type="integer", nullable=true)
     */
    private $idNote2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_note_1", type="integer", nullable=true)
     */
    private $idbNote1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_note_2", type="integer", nullable=true)
     */
    private $idbNote2;


}
