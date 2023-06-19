<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1BilanPedaListe
 *
 * @ORM\Table(name="1_bilan_peda_liste", indexes={@ORM\Index(name="code", columns={"code"})})
 * @ORM\Entity
 */
class BilanPedaListe
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
     * @ORM\Column(name="code", type="string", length=5, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib", type="string", length=100, nullable=true)
     */
    private $lib;


}
