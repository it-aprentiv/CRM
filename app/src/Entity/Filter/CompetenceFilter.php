<?php

namespace App\Entity\Filter;

class CompetenceFilter
{
    private $intitule;

    public function getIntitule()
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): void
    {
        $this->intitule = $intitule;
    }

}