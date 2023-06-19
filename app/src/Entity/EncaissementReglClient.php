<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1EncaissementReglClient
 *
 * @ORM\Table(name="1_encaissement_regl_client")
 * @ORM\Entity
 */
class EncaissementReglClient
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
     * @var int
     *
     * @ORM\Column(name="id_encaissement", type="integer", nullable=false)
     */
    private $idEncaissement;

    /**
     * @var string
     *
     * @ORM\Column(name="cheque_attente_encaiss", type="string", length=30, nullable=false)
     */
    private $chequeAttenteEncaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="num_cheque", type="string", length=80, nullable=false)
     */
    private $numCheque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_cheque", type="datetime", nullable=false)
     */
    private $dateCheque;

    /**
     * @var string
     *
     * @ORM\Column(name="mnt_cheque", type="string", length=30, nullable=false)
     */
    private $mntCheque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_validites", type="datetime", nullable=false)
     */
    private $dateValidites;

    /**
     * @var string
     *
     * @ORM\Column(name="Carte_bancaire", type="string", length=90, nullable=false)
     */
    private $carteBancaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Virement", type="string", length=90, nullable=false)
     */
    private $virement;


}
