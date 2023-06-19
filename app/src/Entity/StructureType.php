<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5StructureType
 *
 * @ORM\Table(name="5_structure_type")
 * @ORM\Entity
 */
class StructureType
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
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_structure", type="string", length=50, nullable=true)
     */
    private $typeStructure;


}
