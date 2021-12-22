<?php
/**
 * Created by PhpStorm.
 * User: kella
 * Date: 23/01/2020
 * Time: 15:43
 */

namespace App\Manager;

use App\Constants\Facture as FactureConstant;
use App\Constants\Structure as StructureConst;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Repository\AvoirRepository;
use App\Entity\Avoir;

class AvoirManager
{

    private $entitymanager;
    private $container;

    /**
     * AvoirManager constructor.
     * @param EntityManagerInterface $em
     * @param ContainerInterface $container
     */
    public function __construct(EntityManagerInterface $em,  ContainerInterface $container) {
        $this->entitymanager = $em;
        $this->container = $container;
    }

    /**
     * Génrérer un numero de facture par structure
     *
     * @param $sStructure
     * @return string|null
     */
    public function generateNumero($sStructure){


        $sYear = date('Y');
        $avoirRepository = $this->entitymanager->getRepository(Avoir::class);
        $iStructure = array_key_exists($sStructure, StructureConst::TYPE_STRUCTURE) ? StructureConst::TYPE_STRUCTURE[$sStructure] : 0;

        switch ($iStructure){
            case StructureConst::APRENTIV :
                $sStrucRef = StructureConst::PREFIX_FACT_APRENTIV;
                break;
            case StructureConst::PROFORM :
                $sStrucRef = StructureConst::PREFIX_FACT_PROFORM;
                break;
            default:
                $sStrucRef = null;
        }

        if (is_null($sStrucRef)) {
            return null;
        }

        $sPrefix = "A{$sStrucRef}{$sYear}";

        $aLastRef = $avoirRepository->getLastRefByStruc($sPrefix);
        $iRef = $aLastRef ? (int) substr($aLastRef['ref'], -1, 4) : 0;
        $iRef++;
        if ($iRef > 9999) {
            return false;
        }
        $sRef = "A{$sStrucRef}{$sYear}" . str_pad($iRef, 4, '0', STR_PAD_LEFT);

        return $sRef;
    }
}