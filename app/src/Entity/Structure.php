<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Constants\Structure as StructureConst;

/**
 * 1Structure
 *
 * @ORM\Table(name="1_structure")
 * @ORM\Entity
 */
class Structure
{

    const PROSPERE = StructureConst::PROSPERE;

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
     * @ORM\Column(name="lib_court", type="string", length=4, nullable=true)
     */
    private $libCourt;

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
     * @var string|null
     *
     * @ORM\Column(name="structure", type="string", length=50, nullable=true)
     */
    private $structure;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="App\Entity\Contact", mappedBy="structure", cascade={"persist"})
     *
     */
    private $contacts;
    
    /**
     * @var boolean|null
     *
     * @ORM\Column(name="deleted_at", type="boolean", nullable=false, options={"default":false})
     */
    private $deletedAt;


    public function __toString() {
        return $this->structure;
    }
    
    public function __construct()
    {
        $this->contacts = new ArrayCollection();
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
     * @return Structure
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return Structure
     */
    public function setIdb($idb)
    {
        $this->idb = $idb;

        return $this;
    }



    /**
     * @return null|string
     */
    public function getLibCourt()
    {
        return $this->libCourt;
    }

    /**
     * @param null|string $libCourt
     * @return Structure
     */
    public function setLibCourt($libCourt)
    {
        $this->libCourt = $libCourt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime $dateAdd
     * @return Structure
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
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
     * @return Structure
     */
    public function setIdUserAdd($idUserAdd)
    {
        $this->idUserAdd = $idUserAdd;

        return $this;
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
     * @return Structure
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;

        return $this;
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
     * @return Structure
     */
    public function setIdUserMaj($idUserMaj)
    {
        $this->idUserMaj = $idUserMaj;

        return $this;
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
     * @return Structure
     */
    public function setStatutRst($statutRst)
    {
        $this->statutRst = $statutRst;

        return $this;
    }

    public function getStructure(): ?string
    {
        return $this->structure;
    }

    public function setStructure(?string $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function addContacts(Contact $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->setStructure($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->contains($contact)) {
            $this->contacts->removeElement($contact);
            // set the owning side to null (unless already changed)
            if ($contact->getStructure() === $this) {
                $contact->setStructure(null);
            }
        }

        return $this;
    }

    public function getContacts() {
        $aContacts = [];
        if(!empty($this->contacts)){
            foreach ($this->contacts as $contact) {
                if($contact){
                    $aContacts [] = $contact;
                }
            }
        }

        return $aContacts;
    }

    /**
     * @param ArrayCollection $contacts
     * @return Structure
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeletedAt(): ?bool {
        return $this->deletedAt;
    }

    /**
     * @param bool|null $deletedAt
     */
    public function setDeletedAt(?bool $deletedAt): void {
        $this->deletedAt = $deletedAt;
    }
}
