<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 9Tables
 *
 * @ORM\Table(name="9_tables")
 * @ORM\Entity
 */
class Tables
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
     * @var string|null
     *
     * @ORM\Column(name="nom_table", type="string", length=255, nullable=true)
     */
    private $nomTable;

    /**
     * @var int
     *
     * @ORM\Column(name="id_max", type="integer", nullable=false)
     */
    private $idMax = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_verr", type="integer", nullable=true)
     */
    private $idUserVerr;


}
