<?php

namespace App\Entity\Filter;


use App\Entity\TypeAdresse;

/**
 *  Classe permettant de filtrer les contacts
 *  Les propriétés sont les critères de recherche
 *  Utilisé avec la classe Form App\Entity\ContactFilterType.php
 */
class ContactFilter
{
    private $structure; // entite
    private $idType;
    private $societe;
    private $nom;
    private $prenom;
    private $adresse;
    private $ville;
    private $codePostal;
    private $telephone;
    private $opca;
    private $commercial;
    private $email;
    private $statutlead;
    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

        /**
     * @return TypeAdresse
     */
    public function getIdType() {
        return $this->idType;
    }

    public function setIdType($idType) {
        $this->idType = $idType;
        return $this;
    }

        public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getStructure()
    {
        return $this->structure;
    }

    public function getSociete()
    {
        return $this->societe;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getOpca()
    {
        return $this->opca;
    }

    public function getCommercial()
    {
        return $this->commercial;
    }

    public function setStructure($structure)
    {
        $this->structure = $structure;
        return $this;
    }

    public function setSociete($societe)
    {
        $this->societe = $societe;
        return $this;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function setOpca($opca)
    {
        $this->opca = $opca;
        return $this;
    }

    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;
        return $this;
    }

    public function getStatutlead() {
        return $this->statutlead;
    }

    public function setStatutlead($statutlead) {
        $this->statutlead = $statutlead;
        return $this;
    }

}
