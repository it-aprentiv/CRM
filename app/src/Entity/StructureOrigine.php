<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5StructureOrigine
 *
 * @ORM\Table(name="5_structure_origine")
 * @ORM\Entity
 */
class StructureOrigine
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
     * @ORM\Column(name="origine_structure", type="string", length=50, nullable=true)
     */
    private $origineStructure;


}
