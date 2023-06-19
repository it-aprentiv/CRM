<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5StagiaireStatut
 *
 * @ORM\Table(name="5_stagiaire_statut")
 * @ORM\Entity
 */
class StagiaireStatut
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
     * @ORM\Column(name="statut", type="string", length=50, nullable=true)
     */
    private $statut;


}
