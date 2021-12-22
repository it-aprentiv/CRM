<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1EncaissementReglOpca
 *
 * @ORM\Table(name="1_encaissement_regl_opca")
 * @ORM\Entity
 */
class EncaissementReglOpca
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_encaissement", type="integer", nullable=false)
     */
    private $idEncaissement;

    /**
     * @var string
     *
     * @ORM\Column(name="cheque", type="string", length=90, nullable=false)
     */
    private $cheque;

    /**
     * @var string
     *
     * @ORM\Column(name="virement", type="string", length=90, nullable=false)
     */
    private $virement;


}
