<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Doc
 *
 * @ORM\Table(name="1_doc")
 * @ORM\Entity
 */
class Doc
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
     * @ORM\Column(name="nom_doc", type="string", length=255, nullable=true)
     */
    private $nomDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fichier_nom", type="string", length=100, nullable=true)
     */
    private $fichierNom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fichier_taille", type="integer", nullable=true)
     */
    private $fichierTaille;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fichier_date", type="datetime", nullable=true)
     */
    private $fichierDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fichier_dir", type="text", length=0, nullable=true)
     */
    private $fichierDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=true)
     */
    private $idStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_statut", type="integer", nullable=true)
     */
    private $idbStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type", type="integer", nullable=true)
     */
    private $idbType;

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
     * @ORM\OneToMany(targetEntity="App\Entity\Contact", mappedBy="id_doc")
     */
    private $contact;


}
