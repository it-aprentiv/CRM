<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5FormationCategorie
 *
 * @ORM\Table(name="5_formation_categorie")
 * @ORM\Entity
 */
class FormationCategorie
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
     * @ORM\Column(name="categorie", type="string", length=100, nullable=true)
     */
    private $categorie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_code_peda", type="integer", nullable=true)
     */
    private $idCodePeda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_code_peda", type="integer", nullable=true)
     */
    private $idbCodePeda;

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
