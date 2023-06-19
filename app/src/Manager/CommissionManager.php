<?php

namespace App\Manager;

class CommissionManager
{
    protected $em;
    
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em) {
        $this->em = $em;
    }
    
    /**
     *
     * @param mixed $montantHT
     * @param mixed $tauxCommission
     *
     * @return float|int
     */
    public function computeMontantCommission($montantHT, $tauxCommission) {
        
        return ($tauxCommission * doubleval($montantHT)) / 100;
    }
    
    /**
     * 
     * @param type $iStatutId
     */
    public function findCommissionStatutById($iStatutId = null) {
        $repo = $this->em->getRepository(\App\Entity\CommissionStatut::class);
        
        if ($iStatutId) {
            return $repo->findOneBy(['id' => $iStatutId]);
        }
        
        return null;
    }
    

}