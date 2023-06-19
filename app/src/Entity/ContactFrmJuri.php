<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5ContactFrmJuri
 *
 * @ORM\Table(name="5_contact_frm_juri")
 * @ORM\Entity
 */
class ContactFrmJuri
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
     * @ORM\Column(name="frm_juri", type="string", length=50, nullable=true)
     */
    private $frmJuri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_frm_juri", type="string", length=4, nullable=true)
     */
    private $typeFrmJuri;


}
