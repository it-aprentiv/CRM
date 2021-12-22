<?php
/**
 * Created by PhpStorm.
 * User: d.andoniraina
 * Date: 06/12/2019
 * Time: 15:49
 */

namespace App\Entity\Filter;


class FormationDossierFilter
{
    private $structure;
    private $moisSignature;
    private $anneeSignature;
    private $dateCreation;
    private $numInterne;
    private $client;
    private $intituleStage;
    private $dateFinStage;
    private $dateEstimeRecep;
    private $montantSigne;
    private $montantAccorde;
    private $dateEstimeCloture;
    private $statusDossier;
    private $opca;
    private $commercial;

    /**
     * @return mixed
     */
    public function getAnneeSignature()
    {
        return $this->anneeSignature;
    }

    /**
     * @param mixed $anneeSignature
     */
    public function setAnneeSignature($anneeSignature)
    {
        $this->anneeSignature = $anneeSignature;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * @param mixed $commercial
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getDateEstimeCloture()
    {
        return $this->dateEstimeCloture;
    }

    /**
     * @param mixed $dateEstimeCloture
     */
    public function setDateEstimeCloture($dateEstimeCloture)
    {
        $this->dateEstimeCloture = $dateEstimeCloture;
    }

    /**
     * @return mixed
     */
    public function getDateEstimeRecep()
    {
        return $this->dateEstimeRecep;
    }

    /**
     * @param mixed $dateEstimeRecep
     */
    public function setDateEstimeRecep($dateEstimeRecep)
    {
        $this->dateEstimeRecep = $dateEstimeRecep;
    }

    /**
     * @return mixed
     */
    public function getIntituleStage()
    {
        return $this->intituleStage;
    }

    /**
     * @param mixed $intituleStage
     */
    public function setIntituleStage($intituleStage)
    {
        $this->intituleStage = $intituleStage;
    }

    /**
     * @return mixed
     */
    public function getMoisSignature()
    {
        return $this->moisSignature;
    }

    /**
     * @param mixed $moisSignature
     */
    public function setMoisSignature($moisSignature)
    {
        $this->moisSignature = $moisSignature;
    }

    /**
     * @return mixed
     */
    public function getMontantAccorde()
    {
        return $this->montantAccorde;
    }

    /**
     * @param mixed $montantAccordé
     */
    public function setMontantAccorde($montantAccorde)
    {
        $this->montantAccorde = $montantAccorde;
    }

    /**
     * @return mixed
     */
    public function getMontantSigne()
    {
        return $this->montantSigne;
    } 

    /**
     * @param mixed $montantSigne
     */
    public function setMontantSigne($montantSigne)
    {
        $this->montantSigne = $montantSigne;
    }

    /**
     * @return mixed
     */
    public function getNumInterne()
    {
        return $this->numInterne;
    }

    /**
     * @param mixed $numInterne
     */
    public function setNumInterne($numInterne)
    {
        $this->numInterne = $numInterne;
    }

    /**
     * @return mixed
     */
    public function getOpca()
    {
        return $this->opca;
    }

    /**
     * @param mixed $opca
     */
    public function setOpca($opca)
    {
        $this->opca = $opca;
    }

    /**
     * @return mixed
     */
    public function getStatusDossier()
    {
        return $this->statusDossier;
    }

    /**
     * @param mixed $statusDossier
     */
    public function setStatusDossier($statusDossier)
    {
        $this->statusDossier = $statusDossier->getId();
    }

    /**
     * @return mixed
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param mixed $structure
     */
    public function setStructure($structure)
    {
        $this->structure = $structure->getId();
    }

    /**
     * @return mixed
     */
    public function getDateFinStage()
    {
        return $this->dateFinStage;
    }

    /**
     * @param mixed $dateFinStage
     */
    public function setDateFinStage($dateFinStage)
    {
        $this->dateFinStage = $dateFinStage;
    }
}