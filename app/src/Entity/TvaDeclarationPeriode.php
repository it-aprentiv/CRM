<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5TvaDeclarationPeriode
 *
 * @ORM\Table(name="5_tva_declaration_periode")
 * @ORM\Entity
 */
class TvaDeclarationPeriode
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
     * @ORM\Column(name="periode_declaration_tva", type="string", length=30, nullable=true)
     */
    private $periodeDeclarationTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mois", type="string", length=15, nullable=true)
     */
    private $mois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="annee", type="string", length=5, nullable=true)
     */
    private $annee;


}
