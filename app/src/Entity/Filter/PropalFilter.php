<?php


namespace App\Entity\Filter;


class PropalFilter
{
    private $statutpropal;
    private $structure;
    private $commercial;
    private $client;
    private $type;
    private $entitypropal;

    /**
     * @return mixed
     */
    public function getStatutpropal()
    {
        return $this->statutpropal;
    }

    /**
     * @param mixed $statutpropal
     */
    public function setStatutpropal($statutpropal): void
    {
        $this->statutpropal = $statutpropal;
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
    public function setStructure($structure): void
    {
        $this->structure = $structure;
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
    public function setCommercial($commercial): void
    {
        $this->commercial = $commercial;
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
    public function setClient($client): void
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getEntitypropal()
    {
        return $this->entitypropal;
    }

    /**
     * @param mixed $entitypropal
     */
    public function setEntitypropal($entitypropal): void
    {
        $this->entitypropal = $entitypropal;
    }


}