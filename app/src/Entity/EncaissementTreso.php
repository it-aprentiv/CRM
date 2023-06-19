<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1EncaissementTreso
 *
 * @ORM\Table(name="1_encaissement_treso")
 * @ORM\Entity
 */
class EncaissementTreso
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
     * @var int|null
     *
     * @ORM\Column(name="id_encaissement", type="integer", nullable=true)
     */
    private $idEncaissement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_encaissement", type="integer", nullable=true)
     */
    private $idbEncaissement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_treso", type="integer", nullable=true)
     */
    private $idTreso;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_treso", type="integer", nullable=true)
     */
    private $idbTreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_maj", type="integer", nullable=true)
     */
    private $idUserMaj;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;


}
