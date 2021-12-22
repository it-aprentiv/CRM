<?php
/**
 * file DomiciliationFilter.php
 */

namespace App\Entity\Filter;


use App\Entity\Contact;
use App\Entity\FormationDossierStatut;

class DomiciliationFilter
{
    private $ref;
    private $client;
    private $debut;
    private $fin;
    private $montantAccorde;
    private $montantFacture;
    private $montantRegle;
    private $montantDu;
    private $statut;
    private $refFacture;
    private $dateEmission;
    private $dateEnc;

    /**
     * @return mixed
     */
    public function getRef() {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref){
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getClient(): ?Contact {

        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient(?Contact $client){
        $this->client = $client;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDebut(): ?\DateTime {
        return $this->debut;
    }

    /**
     * @param mixed $debut
     */
    public function setDebut(?\DateTime $debut){
        $this->debut = $debut;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFin(): ?\DateTime {
        return $this->fin;
    }

    /**
     * @param mixed $fin
     */
    public function setFin(?\DateTime $fin){
        $this->fin = $fin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontantAccorde() {
        return $this->montantAccorde;
    }

    /**
     * @param mixed $montantAccorde
     */
    public function setMontantAccorde($montantAccorde){
        $this->montantAccorde = $montantAccorde;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontantFacture() {
        return $this->montantFacture;
    }

    /**
     * @param mixed $montantFacture
     */
    public function setMontantFacture($montantFacture){
        $this->montantFacture = $montantFacture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontantRegle() {
        return $this->montantRegle;
    }

    /**
     * @param mixed $montantRegle
     */
    public function setMontantRegle($montantRegle){
        $this->montantRegle = $montantRegle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontantDu() {
        return $this->montantDu;
    }

    /**
     * @param mixed $montantDu
     */
    public function setMontantDu($montantDu){
        $this->montantDu = $montantDu;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatut(): ?FormationDossierStatut {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut(?FormationDossierStatut $statut){
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefFacture() {
        return $this->refFacture;
    }

    /**
     * @param mixed $refFacture
     */
    public function setRefFacture($refFacture){
        $this->refFacture = $refFacture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateEmission(): ?\DateTime {
        return $this->dateEmission;
    }

    /**
     * @param mixed $dateEmission
     */
    public function setDateEmission(?\DateTime $dateEmission){
        $this->dateEmission = $dateEmission;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateEnc(): ?\DateTime {
        return $this->dateEnc;
    }

    /**
     * @param mixed $dateEnc
     */
    public function setDateEnc(?\DateTime $dateEnc){
        $this->dateEnc = $dateEnc;

        return $this;
    }
}