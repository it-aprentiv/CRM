<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5FactureStatut
 *
 * @ORM\Table(name="5_facture_statut")
 * @ORM\Entity(repositoryClass="App\Repository\FactureStatutRepository")
 */
class FactureStatut
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
     *
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=50, nullable=true)
     */
    private $statut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

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
     * @return \DateTime|null
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime|null $dateAdd
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * @param \DateTime|null $dateMaj
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;
    }

    /**
     * @return int
     */
    public function getId()
    {
        
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdb()
    {
        return $this->idb;
    }

    /**
     * @param int $idb
     */
    public function setIdb($idb)
    {
        $this->idb = $idb;
    }

    /**
     * @return int|null
     */
    public function getIdUserAdd()
    {
        return $this->idUserAdd;
    }

    /**
     * @param int|null $idUserAdd
     */
    public function setIdUserAdd($idUserAdd)
    {
        $this->idUserAdd = $idUserAdd;
    }

    /**
     * @return int|null
     */
    public function getIdUserMaj()
    {
        return $this->idUserMaj;
    }

    /**
     * @param int|null $idUserMaj
     */
    public function setIdUserMaj($idUserMaj)
    {
        $this->idUserMaj = $idUserMaj;
    }

    /**
     * @return null|string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param null|string $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return bool|null
     */
    public function getStatutRst()
    {
        return $this->statutRst;
    }

    /**
     * @param bool|null $statutRst
     */
    public function setStatutRst($statutRst)
    {
        $this->statutRst = $statutRst;
    }

}
