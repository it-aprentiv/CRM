<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1ClientCa2012
 *
 * @ORM\Table(name="1_client_ca_2012")
 * @ORM\Entity
 */
class ClientCa2012
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
     * @var int|null
     *
     * @ORM\Column(name="id_client", type="integer", nullable=true)
     */
    private $idClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_client", type="integer", nullable=true)
     */
    private $idbClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $ca;


}
