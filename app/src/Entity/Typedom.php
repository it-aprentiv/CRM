<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5Typedom
 *
 * @ORM\Table(name="5_typedom", uniqueConstraints={@ORM\UniqueConstraint(name="designation", columns={"libelle"})})
 * @ORM\Entity(repositoryClass="App\Repository\TypedomRepository")
 */
class Typedom
{

    const DOMICILIATION = 'DOMICILIATION';
    const LOCATION = 'LOCATION';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


}
