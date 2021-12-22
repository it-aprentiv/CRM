<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1FormateurCommentdisp
 *
 * @ORM\Table(name="1_formateur_commentdisp")
 * @ORM\Entity(repositoryClass="App\Repository\FormateurCommentdispRepository")
 */
class FormateurCommentdisp
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
     * @ORM\Column(name="id_formateur", type="integer", nullable=true)
     */
    private $idFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilites", type="text", length=65535, nullable=true)
     */
    private $disponibilite;

    /**
     * @return int
     */
    public function getId(): ?int
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
    public function getIdFormateur()
    {
        return $this->idFormateur;
    }

    /**
     * @param int $idFormateur
     */
    public function setIdFormateur(int $idFormateur): void
    {
        $this->idFormateur = $idFormateur;
    }

    /**
     * @return string|null
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param $commentaires
     * @return $this
     */
    public function setCommentaire($commentaires): self
    {
        $this->commentaire = $commentaires;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisponibilite():?string
    {
        return $this->disponibilite;
    }

    /**
     * @param $disponibilites
     * @return $this
     */
    public function setDisponibilite(?string $disponibilites): self
    {
        $this->disponibilite = $disponibilites;
        return $this;
    }


}
