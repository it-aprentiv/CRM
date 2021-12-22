<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5NdfTypeFrais
 *
 * @ORM\Table(name="5_ndf_type_frais")
 * @ORM\Entity
 */
class NdfTypeFrais
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
     * @ORM\Column(name="type_frais", type="string", length=50, nullable=true)
     */
    private $typeFrais;


}
