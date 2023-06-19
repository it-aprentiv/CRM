<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormateurCompetence1
 *
 * @ORM\Table(name="1_formateur_competence1")
 * @ORM\Entity
 */
class FormateurCompetence1
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
     * @ORM\Column(name="id_contact", type="integer", nullable=true)
     */
    private $idContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact", type="integer", nullable=true)
     */
    private $idbContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cat", type="integer", nullable=true)
     */
    private $idCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_cat", type="integer", nullable=true)
     */
    private $idbCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sous_cat", type="integer", nullable=true)
     */
    private $idSousCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_sous_cat", type="integer", nullable=true)
     */
    private $idbSousCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_competence", type="integer", nullable=true)
     */
    private $idCompetence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_competence", type="integer", nullable=true)
     */
    private $idbCompetence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_niv_maitrise", type="integer", nullable=true)
     */
    private $idNivMaitrise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_niv_maitrise", type="integer", nullable=true)
     */
    private $idbNivMaitrise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_demi_j", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutDemiJ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cout_h", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $coutH;

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_formateur", type="integer", nullable=true)
     */
    private $idFormateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_formateur", type="integer", nullable=true)
     */
    private $idbFormateur;


}
