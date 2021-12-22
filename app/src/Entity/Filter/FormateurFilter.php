<?php


namespace App\Entity\Filter;


class FormateurFilter
{
    private $nomStr;
    private $nom;
    private $prenom;
    private $competence;
    private $statut;

    /**
     * @return mixed
     */
    public function getNomStr()
    {
        return $this->nomStr;
    }

    /**
     * @param mixed $nomStr
     */
    public function setNomStr($nomStr): void
    {
        $this->nomStr = $nomStr;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * @param mixed $competence
     */
    public function setCompetence($competence): void
    {
        $this->competence = $competence;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }

}