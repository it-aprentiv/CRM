<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5RglmntMoyen
 *
 * @ORM\Table(name="5_rglmnt_moyen")
 * @ORM\Entity
 */
class RglmntMoyen
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
     * @ORM\Column(name="type_reglement", type="string", length=50, nullable=true)
     */
    private $typeReglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_rglmnt", type="string", length=50, nullable=true)
     */
    private $typeRglmnt;


}
