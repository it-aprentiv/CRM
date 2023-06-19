<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 2Mail
 *
 * @ORM\Table(name="2_mail", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="id_contact", columns={"id_contact"})})
 *
 * @ORM\Entity(repositoryClass="App\Repository\MailRepository")
 */
class Mail
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
     * @ORM\Column(name="idb", type="integer", nullable=true)
     */
    private $idb;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Contact", cascade={"persist"})
     * @ORM\JoinColumn(name="id_contact", referencedColumnName="id", nullable=true)
     */
    private $idContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_contact", type="integer", nullable=true)
     */
    private $idbContact = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type_mail", type="integer", nullable=true)
     */
    private $idTypeMail = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type_mail", type="integer", nullable=true)
     */
    private $idbTypeMail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=true)
     */
    private $remarque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="principal", type="string", length=3, nullable=true)
     */
    private $principal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd ;

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
     * @var string|null
     *
     * @ORM\Column(name="remarques", type="string", length=50, nullable=true)
     */
    private $remarques;


    public function __construct()
    {
        $this->dateAdd = new \DateTime();
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getIdb()
    {
        return $this->idb;
    }

    /**
     * @return int|null
     */
    public function getIdContact() : ?Contact
    {
        return $this->idContact;
    }

    /**
     * @return int|null
     */
    public function getIdbContact()
    {
        return $this->idbContact;
    }

    /**
     * @return null|string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return int|null
     */
    public function getIdTypeMail()
    {
        return $this->idTypeMail;
    }

    /**
     * @return int|null
     */
    public function getIdbTypeMail()
    {
        return $this->idbTypeMail;
    }

    /**
     * @return null|string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * @return null|string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * @return int|null
     */
    public function getIdUserAdd()
    {
        return $this->idUserAdd;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * @return int|null
     */
    public function getIdUserMaj()
    {
        return $this->idUserMaj;
    }

    /**
     * @return bool|null
     */
    public function getStatutRst()
    {
        return $this->statutRst;
    }

    /**
     * @return null|string
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * @param int $id
     * @return Mail
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param int $idb
     * @return Mail
     */
    public function setIdb($idb)
    {
        $this->idb = $idb;

        return $this;
    }

    /**
     * @param int|null $idContact
     * @return Mail
     */
    public function setIdContact(?Contact $idContact):self
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * @param int|null $idbContact
     * @return Mail
     */
    public function setIdbContact($idbContact)
    {
        $this->idbContact = $idbContact;

        return $this;
    }

    /**
     * @param null|string $mail
     * @return Mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @param int|null $idTypeMail
     * @return Mail
     */
    public function setIdTypeMail($idTypeMail)
    {
        $this->idTypeMail = $idTypeMail;

        return $this;
    }

    /**
     * @param int|null $idbTypeMail
     * @return Mail
     */
    public function setIdbTypeMail($idbTypeMail)
    {
        $this->idbTypeMail = $idbTypeMail;

        return $this;
    }

    /**
     * @param null|string $remarque
     * @return Mail
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * @param null|string $principal
     * @return Mail
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * @param \DateTime $dateAdd
     * @return Mail
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * @param int|null $idUserAdd
     * @return Mail
     */
    public function setIdUserAdd($idUserAdd)
    {
        $this->idUserAdd = $idUserAdd;

        return $this;
    }

    /**
     * @param \DateTime|null $dateMaj
     * @return Mail
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    /**
     * @param int|null $idUserMaj
     * @return Mail
     */
    public function setIdUserMaj($idUserMaj)
    {
        $this->idUserMaj = $idUserMaj;

        return $this;
    }

    /**
     * @param bool|null $statutRst
     * @return Mail
     */
    public function setStatutRst($statutRst)
    {
        $this->statutRst = $statutRst;

        return $this;
    }

    /**
     * @param null|string $remarques
     * @return Mail
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }


}
