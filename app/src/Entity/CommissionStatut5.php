<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5CommissionStatut
 *
 * @ORM\Table(name="5_commission_statut")
 * @ORM\Entity
 */
class CommissionStatut5
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
     * @ORM\Column(name="statut", type="string", length=255, nullable=true)
     */
    private $statut;


}
