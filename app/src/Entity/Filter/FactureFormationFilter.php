<?php
/**
 * file FactureFormationFilter.php
 */

namespace App\Entity\Filter;


class FactureFormationFilter
{
    private $structure;
    private $numFacture;
    private $formateur;
    private $client;
    private $dateReception;
    private $dateFacture;
    private $mois;
    private $intitule;
    private $heureFait;
    private $heureRestant;
    private $montantHT;
    private $dateValidation;
    
    public function getDateFacture() {
        return $this->dateFacture;
    }

    public function setDateFacture($dateFacture) {
        $this->dateFacture = $dateFacture;
        return $this;
    }

        public function getStructure() {
        return $this->structure;
    }

    public function getNumFacture() {
        return $this->numFacture;
    }

    public function getFormateur() {
        return $this->formateur;
    }

    public function getClient() {
        return $this->client;
    }

    public function getDateReception() {
        return $this->dateReception;
    }

    public function getMois() {
        return $this->mois;
    }

    public function getIntitule() {
        return $this->intitule;
    }

    public function getHeureFait() {
        return $this->heureFait;
    }

    public function getHeureRestant() {
        return $this->heureRestant;
    }

    public function getMontantHT() {
        return $this->montantHT;
    }

    public function getDateValidation() {
        return $this->dateValidation;
    }

    public function setStructure($structure) {
        $this->structure = $structure;
        return $this;
    }

    public function setNumFacture($numFacture) {
        $this->numFacture = $numFacture;
        return $this;
    }

    public function setFormateur($formateur) {
        $this->formateur = $formateur;
        return $this;
    }

    public function setClient($client) {
        $this->client = $client;
        return $this;
    }

    public function setDateReception($dateReception) {
        $this->dateReception = $dateReception;
        return $this;
    }

    public function setMois($mois) {
        $this->mois = $mois;
        return $this;
    }

    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    public function setHeureFait($heureFait) {
        $this->heureFait = $heureFait;
        return $this;
    }

    public function setHeureRestant($heureRestant) {
        $this->heureRestant = $heureRestant;
        return $this;
    }

    public function setMontantHT($montantHT) {
        $this->montantHT = $montantHT;
        return $this;
    }

    public function setDateValidation($dateValidation) {
        $this->dateValidation = $dateValidation;
        return $this;
    }
    
}