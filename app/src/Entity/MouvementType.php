<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5MouvementType
 *
 * @ORM\Table(name="5_mouvement_type")
 * @ORM\Entity
 */
class MouvementType
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
     * @ORM\Column(name="type_mvnt", type="string", length=50, nullable=true)
     */
    private $typeMvnt;


}
