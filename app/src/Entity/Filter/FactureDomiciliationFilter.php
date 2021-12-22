<?php


namespace App\Entity\Filter;


use App\Entity\Contact;
use App\Entity\FormationDossierStatut;
use App\Entity\Structure;
use App\Entity\Typedom;
use phpDocumentor\Reflection\Types\Null_;

class FactureDomiciliationFilter
{
    private $numFacture;
    private $reference;

    /**
     * @var FormationDossierStatut
     */
    private $dossierStatut;

    /**
     * @var
     */
    private $statut;

    /**
     * @var Typedom
     */
    private $type;

    /**
     * @var Structure
     */
    private $structure;

    /**
     * @var Contact
     */
    private $client;

    /**
     * @return mixed
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }

    /**
     * @param mixed $numFacture
     *
     * @return FactureDomiciliationFilter
     */
    public function setNumFacture($numFacture)
    {
        $this->numFacture = $numFacture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     *
     * @return FactureDomiciliationFilter
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return Typedom|null
     */
    public function getType(): ?Typedom
    {
        return $this->type;
    }

    /**
     * @param Typedom $type
     *
     * @return FactureDomiciliationFilter
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Contact $client
     *
     * @return FactureDomiciliationFilter
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return FormationDossierStatut|null
     */
    public function getDossierStatut(): ?FormationDossierStatut
    {
        return $this->dossierStatut;
    }

    /**
     * @param FormationDossierStatut $dossierStatut
     *
     * @return FactureDomiciliationFilter
     */
    public function setDossierStatut(FormationDossierStatut $dossierStatut): self
    {
        $this->dossierStatut = $dossierStatut;

        return $this;
    }

    /**
     * @return Structure
     */
    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    /**
     * @param Structure $structure
     */
    public function setStructure(Structure $structure): void
    {
        $this->structure = $structure;
    }


}