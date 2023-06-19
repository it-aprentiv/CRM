<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5ContactOrigine
 *
 * @ORM\Table(name="5_contact_origine")
 * @ORM\Entity
 */
class ContactOrigine
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
     * @ORM\Column(name="origine", type="string", length=50, nullable=true)
     */
    private $origine;


}
