<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 5CritFinOpca
 *
 * @ORM\Table(name="5_crit_fin_opca")
 * @ORM\Entity(repositoryClass="App\Repository\CritFinOpcaRepository")
 */
class CritFinOpca
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
     * @ORM\Column(name="id_opca", type="integer", nullable=false)
     */
    private $idOpca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="dispositif", type="string", length=100, nullable=false)
     */
    private $dispositif;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=false)
     */
    private $commentaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOpca(): ?int
    {
        return $this->idOpca;
    }

    public function setIdOpca(int $idOpca): self
    {
        $this->idOpca = $idOpca;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDispositif(): ?string
    {
        return $this->dispositif;
    }

    public function setDispositif(string $dispositif): self
    {
        $this->dispositif = $dispositif;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

}
