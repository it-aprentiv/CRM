<?php

namespace App\Entity\Filter;

/**
 *  Classe permettant de filtrer les encaissement
 *  Les propriétés sont les critères de recherche
 *  Utilisé avec la classe Form App\Entity\EncaissementFilterType.php
 */
class EncaissementFilter
{
    private $id;
    private $numDossier;
    private $numFacture;
    private $payeur;
    private $dateEncaissement;
    private $tauxCommission;
    private $commercial;
    private $statutCommission;
    private $source; // Facture dossier ou dom/loc


    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
    }


    public function getSource() {
        return $this->source;
    }

    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

        
    public function getNumDossier() {
        return $this->numDossier;
    }

    public function getNumFacture() {
        return $this->numFacture;
    }

    public function getPayeur() {
        return $this->payeur;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateEncaissement() {
        return $this->dateEncaissement;
    }

    public function getTauxCommission() {
        return $this->tauxCommission;
    }

    public function getCommercial() {
        return $this->commercial;
    }

    public function getStatutCommission() {
        return $this->statutCommission;
    }

    public function setNumDossier($numDossier) {
        $this->numDossier = $numDossier;
        return $this;
    }

    public function setNumFacture($numFacture) {
        $this->numFacture = $numFacture;
        return $this;
    }

    public function setPayeur($payeur) {
        $this->payeur = $payeur;
        return $this;
    }

    public function setDateEncaissement($dateEncaissement) {
        $this->dateEncaissement = $dateEncaissement;
        return $this;
    }

    public function setTauxCommission($tauxCommission) {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }

    public function setCommercial($commercial) {
        $this->commercial = $commercial;
        return $this;
    }

    public function setStatutCommission($statutCommission) {
        $this->statutCommission = $statutCommission;
        return $this;
    }

}
