<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 3ContactLnk
 *
 * @ORM\Table(name="3_contact_lnk", indexes={@ORM\Index(name="idb_con_1", columns={"idb_con_1"}), @ORM\Index(name="id_con_1", columns={"id_con_1"})})
 * @ORM\Entity
 */
class ContactLnk
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
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var int
     *
     * @ORM\Column(name="id_con_1", type="integer", nullable=false)
     */
    private $idCon1;

    /**
     * @var int
     *
     * @ORM\Column(name="idb_con_1", type="integer", nullable=false)
     */
    private $idbCon1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_con_2", type="integer", nullable=false)
     */
    private $idCon2;

    /**
     * @var int
     *
     * @ORM\Column(name="idb_con_2", type="integer", nullable=false)
     */
    private $idbCon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_con_lnk_type", type="integer", nullable=true)
     */
    private $idConLnkType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_con_lnk_type", type="integer", nullable=true)
     */
    private $idbConLnkType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="principal", type="string", length=3, nullable=true)
     */
    private $principal;


}
