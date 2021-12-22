<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 27/12/2019
 * Time: 09:36
 */

namespace App\Entity\Filter;


use App\Entity\Contact;
use App\Entity\FormateurStatut;

class FormationFilter
{
    private $entite;
    private $mois;
    private $dateOM;
    private $formateurOrganisme;
    //private $statutFormateur;
    private $cial;
    private $client;
    private $intitule;
    private $type;
    private $domaineCompetence;
    private $dureeEnJour;
    private $dureeEnHeure;
    private $nbStagiaire;
    private $demandeur;
    private $montantAchatHT;
    private $montantVenteHT;
    private $diffAchatVente;
    private $pourcentage;
    private $pourcentageAchatHT;

    /**
     * @return mixed
     */
    public function getEntite() {
        return $this->entite;
    }

    /**
     * @param $entite
     * @return $this
     */
    public function setEntite($entite) {
        $this->entite = $entite;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMois(): ?int
    {
        return $this->mois;
    }

    /**
     * @param $mois
     * @return $this
     */
    public function setMois(?int $mois): self {
        $this->mois = $mois;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOM(): ?\DateTime {
        return $this->dateOM;
    }

    /**
     * @param $dateOM
     * @return $this
     */
    public function setDateOM(?\DateTime $dateOM): self {
        $this->dateOM = $dateOM;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFormateurOrganisme(): ?Contact {
        return $this->formateurOrganisme;
    }

    /**
     * @param $formateurOrganisme
     * @return $this
     */
    public function setFormateurOrganisme(?Contact $formateurOrganisme): self {
        $this->formateurOrganisme = $formateurOrganisme;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatutFormateur(): ?FormateurStatut
    {
        return $this->statutFormateur;
    }

    /**
     * @param $statutFormateur
     * @return $this
     */
    public function setStatutFormateur(?FormateurStatut $statutFormateur): self
    {
        $this->statutFormateur = $statutFormateur;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCial() {
        return $this->cial;
    }

    /**
     * @param $cial
     * @return $this
     */
    public function setCial($cial) {
        $this->cial = $cial;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClient() {
        return $this->client;
    }

    /**
     * @param $client
     * @return $this
     */
    public function setClient($client) {
        $this->client = $client;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * @param $intitule
     * @return $this
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDomaineCompetence() {
        return $this->domaineCompetence;
    }

    /**
     * @param $domaineCompetence
     * @return $this
     */
    public function setDomaineCompetence($domaineCompetence) {
        $this->domaineCompetence = $domaineCompetence;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDureeEnJour() {
        return $this->dureeEnJour;
    }

    /**
     * @param $dureeEnJour
     * @return $this
     */
    public function setDureeEnJour($dureeEnJour) {
        $this->dureeEnJour = $dureeEnJour;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDureeEnHeure() {
        return $this->dureeEnHeure;
    }

    /**
     * @param $dureeEnHeure
     * @return $this
     */
    public function setDureeEnHeure($dureeEnHeure) {
        $this->dureeEnHeure = $dureeEnHeure;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbStagiaire() {
        return $this->nbStagiaire;
    }

    /**
     * @param $nbStagiaire
     * @return $this
     */
    public function setNbStagiaire($nbStagiaire) {
        $this->nbStagiaire = $nbStagiaire;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDemandeur() {
        return $this->demandeur;
    }

    /**
     * @param $demandeur
     * @return $this
     */
    public function setDemandeur($demandeur) {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontantAchatHT() {
        return $this->montantAchatHT;
    }

    /**
     * @param $montantAchatHT
     * @return $this
     */
    public function setMontantAchatHT($montantAchatHT) {
        $this->montantAchatHT = $montantAchatHT;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontantVenteHT() {
        return $this->montantVenteHT;
    }

    /**
     * @param $montantVenteHT
     * @return $this
     */
    public function setMontantVenteHT($montantVenteHT) {
        $this->montantVenteHT = $montantVenteHT;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiffAchatVente() {
        return $this->diffAchatVente;
    }

    /**
     * @param $diffAchatVente
     * @return $this
     */
    public function setDiffAchatVente($diffAchatVente) {
        $this->diffAchatVente = $diffAchatVente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPourcentage() {
        return $this->pourcentage;
    }

    /**
     * @param $pourcentage
     * @return $this
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPourcentageAchatHT() {
        return $this->pourcentageAchatHT;
    }

    /**
     * @param $pourcentageAchatHT
     * @return $this
     */
    public function setPourcentageAchatHT($pourcentageAchatHT) {
        $this->pourcentageAchatHT = $pourcentageAchatHT;

        return $this;
    }
}