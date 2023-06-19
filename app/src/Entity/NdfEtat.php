<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5NdfEtat
 *
 * @ORM\Table(name="5_ndf_etat")
 * @ORM\Entity
 */
class NdfEtat
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
     * @ORM\Column(name="etat_ndf", type="string", length=50, nullable=true)
     */
    private $etatNdf;


}
