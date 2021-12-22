<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5StagiaireCsp
 *
 * @ORM\Table(name="5_stagiaire_csp")
 * @ORM\Entity
 */
class StagiaireCsp
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
     * @ORM\Column(name="csp", type="string", length=50, nullable=true)
     */
    private $csp;


}
