<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 3ContactCatLnk
 *
 * @ORM\Table(name="3_contact_cat_lnk")
 * @ORM\Entity
 */
class ContactCatLnk
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
     * @ORM\Column(name="id_con", type="integer", nullable=true)
     */
    private $idCon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_con_cat", type="integer", nullable=true)
     */
    private $idConCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_con", type="integer", nullable=true)
     */
    private $idbCon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_con_cat", type="integer", nullable=true)
     */
    private $idbConCat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="principal", type="string", length=3, nullable=true)
     */
    private $principal;


}
