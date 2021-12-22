<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Treso
 *
 * @ORM\Table(name="1_treso", indexes={@ORM\Index(name="num_cybergest", columns={"num_cybergest"})})
 * @ORM\Entity
 */
class Treso
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
     * @ORM\Column(name="num_cybergest", type="integer", nullable=true)
     */
    private $numCybergest = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_operation", type="datetime", nullable=true)
     */
    private $dateOperation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valeur", type="datetime", nullable=true)
     */
    private $dateValeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="debit", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $debit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="credit", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $credit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat_cte", type="string", length=255, nullable=true)
     */
    private $etatCte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cat_sous_cat_cte", type="string", length=255, nullable=true)
     */
    private $catSousCatCte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib1_cybergest", type="string", length=255, nullable=true)
     */
    private $lib1Cybergest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib2_cybergest", type="string", length=255, nullable=true)
     */
    private $lib2Cybergest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_complet", type="string", length=255, nullable=true)
     */
    private $libComplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moyen_payment", type="string", length=50, nullable=true)
     */
    private $moyenPayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tva_percue", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $tvaPercue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tva_payee", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $tvaPayee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_periode_declaration", type="integer", nullable=true)
     */
    private $idPeriodeDeclaration = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="justificatif", type="string", length=10, nullable=true)
     */
    private $justificatif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien_fichier", type="text", length=0, nullable=true)
     */
    private $lienFichier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarques", type="string", length=50, nullable=true)
     */
    private $remarques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="solde", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $solde;

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
