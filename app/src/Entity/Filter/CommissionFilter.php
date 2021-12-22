<?php


namespace App\Entity\Filter;


use DateTime;

class CommissionFilter
{
    /**
     * @var string
     */
    private $clientID;
    /**
     * @var string
     */
    private $refDossier;
    /**
     * @var DateTime
     */
    private $dateSign;
    /**
     * @var float
     */
    private $montantDemande;
    /**
     * @var float
     */
    private $montantAccorde;
    /**
     * @var float
     */
    private $montantFacture;
    /**
     * @var float
     */
    private $montantEncaisse;
    /**
     * @var float
     */
    private $tauxComm;
    /**
     * @var float
     */
    private $montantCom;
    /**
     * @var string
     */
    private $cial;
    
    private $userId;
    
    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

        /**
     * @var string
     */
    private $statutCom;

    /**
     * @return string
     */
    public function getClientID(): ?string
    {
        return $this->clientID;
    }

    /**
     * @param string $clientID
     *
     * @return CommissionFilter
     */
    public function setClientID(string $clientID): CommissionFilter
    {
        $this->clientID = $clientID;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefDossier(): ?string
    {
        return $this->refDossier;
    }

    /**
     * @param string $refDossier
     *
     * @return CommissionFilter
     */
    public function setRefDossier(string $refDossier): CommissionFilter
    {
        $this->refDossier = $refDossier;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateSign(): ?DateTime
    {
        return $this->dateSign;
    }

    /**
     * @param DateTime $dateSign
     *
     * @return CommissionFilter
     */
    public function setDateSign(?DateTime $dateSign): CommissionFilter
    {
        $this->dateSign = $dateSign;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontantDemande(): ?float
    {
        return $this->montantDemande;
    }

    /**
     * @param float $montantDemande
     *
     * @return CommissionFilter
     */
    public function setMontantDemande(float $montantDemande): CommissionFilter
    {
        $this->montantDemande = $montantDemande;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontantAccorde(): ?float
    {
        return $this->montantAccorde;
    }

    /**
     * @param float $montantAccorde
     *
     * @return CommissionFilter
     */
    public function setMontantAccorde(float $montantAccorde): CommissionFilter
    {
        $this->montantAccorde = $montantAccorde;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontantFacture(): ?float
    {
        return $this->montantFacture;
    }

    /**
     * @param float $montantFacture
     *
     * @return CommissionFilter
     */
    public function setMontantFacture(float $montantFacture): CommissionFilter
    {
        $this->montantFacture = $montantFacture;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontantEncaisse(): ?float
    {
        return $this->montantEncaisse;
    }

    /**
     * @param float $montantEncaisse
     *
     * @return CommissionFilter
     */
    public function setMontantEncaisse(float $montantEncaisse): CommissionFilter
    {
        $this->montantEncaisse = $montantEncaisse;

        return $this;
    }

    /**
     * @return float
     */
    public function getTauxComm(): ?float
    {
        return $this->tauxComm;
    }

    /**
     * @param float $tauxComm
     *
     * @return CommissionFilter
     */
    public function setTauxComm(float $tauxComm): CommissionFilter
    {
        $this->tauxComm = $tauxComm;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontantCom(): ?float
    {
        return $this->montantCom;
    }

    /**
     * @param float $montantCom
     *
     * @return CommissionFilter
     */
    public function setMontantCom(float $montantCom): CommissionFilter
    {
        $this->montantCom = $montantCom;

        return $this;
    }

    /**
     * @return string
     */
    public function getCial(): ?string
    {
        return $this->cial;
    }

    /**
     * @param string $cial
     *
     * @return CommissionFilter
     */
    public function setCial(string $cial): CommissionFilter
    {
        $this->cial = $cial;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatutCom(): ?string
    {
        return $this->statutCom;
    }

    /**
     * @param string $statutCom
     *
     * @return CommissionFilter
     */
    public function setStatutCom(string $statutCom): CommissionFilter
    {
        $this->statutCom = $statutCom;

        return $this;
    }


}