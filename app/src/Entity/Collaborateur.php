<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1Collaborateur
 *
 * @ORM\Table(name="1_collaborateur", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="idb", columns={"idb"})})
 * @ORM\Entity(repositoryClass="App\Repository\CollaborateurRepository")
 */
class Collaborateur
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
     * @ORM\Column(name="idb", type="integer", nullable=false)
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_prenom", type="string", length=255, nullable=true)
     */
    private $nomPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="initiales", type="string", length=10, nullable=true)
     */
    private $initiales;

    /**
     * @var int|null
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact", cascade={"persist"})
     * @ORM\JoinColumn(name="id_contact", referencedColumnName="id", nullable=true)
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
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    /**
     * @var Avoir
     *
     * @ORM\OneToMany(targetEntity="Avoir", mappedBy="idResponsable", cascade={"persist"})
     */
    //private $avoir;

    /**
     * @var Facture
     *
     * @ORM\OneToMany(targetEntity="Facture", mappedBy="idResponsable", cascade={"persist"})
     */
    //private $facture;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdb(): int
    {
        return $this->idb;
    }

    /**
     * @param int $idb
     */
    public function setIdb(int $idb): void
    {
        $this->idb = $idb;
    }

    /**
     * @return string|null
     */
    public function getNomPrenom(): ?string
    {
        return $this->nomPrenom;
    }

    /**
     * @param string|null $nomPrenom
     */
    public function setNomPrenom(?string $nomPrenom): void
    {
        $this->nomPrenom = $nomPrenom;
    }

    /**
     * @return string|null
     */
    public function getInitiales(): ?string
    {
        return $this->initiales;
    }

    /**
     * @param string|null $initiales
     */
    public function setInitiales(?string $initiales): void
    {
        $this->initiales = $initiales;
    }

    /**
     * @return int|null
     */
    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    /**
     * @param int|null $idContact
     */
    public function setIdContact(?int $idContact): void
    {
        $this->idContact = $idContact;
    }

    /**
     * @return int|null
     */
    public function getIdbContact(): ?int
    {
        return $this->idbContact;
    }

    /**
     * @param int|null $idbContact
     */
    public function setIdbContact(?int $idbContact): void
    {
        $this->idbContact = $idbContact;
    }

    /**
     * @return int|null
     */
    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    /**
     * @param int|null $idUser
     */
    public function setIdUser(?int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function __toString()
    {
        return $this->getNomPrenom();
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Avoir
     */
//    public function getAvoir()
//    {
//        return $this->avoir;
//    }

    /**
     * @param Avoir $avoir
     * @return Collaborateur
     */
//    public function setAvoir($avoir)
//    {
//        if ($avoir instanceof Avoir) {
//            $avoir->setIdResponsable($this);
//        }
//        $this->avoir = $avoir;

//        return $this;
//    }

    /**
     * @return Facture
     */
//    public function getFacture()
//    {
//        return $this->facture;
//    }

    /**
     * @param Facture $facture
     * @return Collaborateur
     */
//    public function setFacture($facture)
//    {
//        if ($facture instanceof Facture) {
//            $facture->setIdResponsable($this);
//        }
//        $this->facture = $facture;

//        return $this;
//    }

}
