<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5ContactType
 *
 * @ORM\Table(name="5_contact_type")
 * @ORM\Entity(repositoryClass="App\Repository\ContactTypeRepository")
 */
class ContactType
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
     */
    private $idb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_contact", type="string", length=50, nullable=true)
     *
     */
    private $typeContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_frm_juri", type="string", length=2, nullable=true)
     */
    private $typeFrmJuri;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_frm_juri", type="integer", nullable=true)
     */
    private $idFrmJuri;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_frm_juri", type="integer", nullable=true)
     */
    private $idbFrmJuri;


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
    public function getTypeContact(): ?string
    {
        return $this->typeContact;
    }

    /**
     * @param string|null $typeContact
     */
    public function setTypeContact(?string $typeContact): void
    {
        $this->typeContact = $typeContact;
    }

    /**
     * @return string|null
     */
    public function getTypeFrmJuri(): ?string
    {
        return $this->typeFrmJuri;
    }

    /**
     * @param string|null $typeFrmJuri
     */
    public function setTypeFrmJuri(?string $typeFrmJuri): void
    {
        $this->typeFrmJuri = $typeFrmJuri;
    }

    /**
     * @return int|null
     */
    public function getIdFrmJuri(): ?int
    {
        return $this->idFrmJuri;
    }

    /**
     * @param int|null $idFrmJuri
     */
    public function setIdFrmJuri(?int $idFrmJuri): void
    {
        $this->idFrmJuri = $idFrmJuri;
    }

    /**
     * @return int|null
     */
    public function getIdbFrmJuri(): ?int
    {
        return $this->idbFrmJuri;
    }

    /**
     * @param int|null $idbFrmJuri
     */
    public function setIdbFrmJuri(?int $idbFrmJuri): void
    {
        $this->idbFrmJuri = $idbFrmJuri;
    }
}
