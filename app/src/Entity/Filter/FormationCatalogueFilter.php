<?php


namespace App\Entity\Filter;


class FormationCatalogueFilter
{
    private $nomFormation;

    private $type;

    /**
     * @return mixed
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * @param mixed $nomFormation
     *
     * @return FormationCatalogueFilter
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;

        return $this;
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
     *
     * @return FormationCatalogueFilter
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}