<?php

namespace App\Entity\Filter;


class FactureFilter
{
    private $structure;
    private $dateCreation;
    private $ref;
    private $noDossierRef;
    private $numDossierOpca;
    private $destinataire;
    private $client;
    private $opca;
    private $intituleStage;
    private $commercial;
    private $statut;

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
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * @param mixed $destinataire
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;
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
    public function getNumDossierOpca()
    {
        return $this->numDossierOpca;
    }

    /**
     * @param mixed $noDossierOpca
     */
    public function setNumDossierOpca($numDossierOpca)
    {
        $this->numDossierOpca = $numDossierOpca;
    }

    /**
     * @return mixed
     */
    public function getNoDossierRef()
    {
        return $this->noDossierRef;
    }

    /**
     * @param mixed $noDossierRef
     */
    public function setNoDossierRef($noDossierRef)
    {
        $this->noDossierRef = $noDossierRef;
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
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
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
    public function setStatut($statut)
    {
        $this->statut = $statut->getId();
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


}