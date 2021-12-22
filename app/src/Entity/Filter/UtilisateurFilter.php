<?php

namespace App\Entity\Filter;


/**
 *  Classe permettant de filtrer les contacts
 *  Les propriétés sont les critères de recherche
 *  Utilisé avec la classe Form App\Entity\ContactFilterType.php
 */
class UtilisateurFilter
{
    private $nomPrenom;
    private $droit;
    private $poste;
    private $userId;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return UtilisateurFilter
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * @param mixed $droit
     * @return UtilisateurFilter
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     * @return UtilisateurFilter
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomPrenom()
    {
        return $this->nomPrenom;
    }

    /**
     * @param mixed $nomPrenom
     * @return UtilisateurFilter
     */
    public function setNomPrenom($nomPrenom)
    {
        $this->nomPrenom = $nomPrenom;
        return $this;
    }

}
