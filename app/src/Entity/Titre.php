<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5Titre
 *
 * @ORM\Table(name="5_titre")
 * @ORM\Entity
 */
class Titre
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
     * @ORM\Column(name="titre", type="string", length=30, nullable=true)
     */
    private $titre;


}
