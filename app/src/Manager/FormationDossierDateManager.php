<?php

namespace App\Manager;

use App\Entity\FormationDossier;
use App\Entity\FormationDossierDate;
use App\Repository\FormationDossierRepository;
use App\Utils\DateUtils;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;

class FormationDossierDateManager {

    private $formationDossierRepository;
    private $em;
    
    public function __construct(
        FormationDossierRepository $formationDossierRepository,
        EntityManagerInterface $em
    ) {
        $this->formationDossierRepository = $formationDossierRepository;
        $this->em = $em;
    }
    
    /**
     * Calcul des informations pour les dates de formations
     * @param type $aFormationDates : informations sur la date
     */
    public function formatFormationDates($aFormationDates = [], $sContext = "update")
    {
        $aResponse = $this->initFormationDatesInfos();
        // Date debut et date fin formation
        $aResponse['date_debut'] = count($aFormationDates) > 0 ? reset($aFormationDates) : null;
        $aResponse['date_fin'] = count($aFormationDates) > 0 ? end($aFormationDates) : null;
        // Calcul nombre de jours et heures N et N+1

        $aDaysAndHours = $this->computeDaysAndHoursNN1($aFormationDates, $sContext);
        $aResponse['total_heures_n'] = $aDaysAndHours['total_hours_n'];
        $aResponse['total_heures_n1'] = $aDaysAndHours['total_hours_n1'];
        $aResponse['total_jours_n'] = $aDaysAndHours['total_days_n'];
        $aResponse['total_jours_n1'] = $aDaysAndHours['total_days_n1'];
        $aResponse['total_jours'] = $aDaysAndHours['total_days_n'] + $aDaysAndHours['total_days_n1'];
        $aResponse['total_heures'] = $aDaysAndHours['total_hours_n'] + $aDaysAndHours['total_hours_n1'];
        $aResponse['calendar'] = $aDaysAndHours['calendar'];
        $aResponse['calendar_text'] = $aDaysAndHours['calendar_text'];
        $aResponse['hour_start_am'] = $aDaysAndHours['hour_start_am'];;
        $aResponse['hour_end_am'] = $aDaysAndHours['hour_end_am'];;
        $aResponse['hour_start_pm'] = $aDaysAndHours['hour_start_pm'];;
        $aResponse['hour_end_pm'] = $aDaysAndHours['hour_end_pm'];;
        $aResponse['dates'] = $aFormationDates;

        return $aResponse;
    }

    private function initFormationDatesInfos()
    {
        return [
            'total_heures_n' => 0,
            'total_jours_n' => 0,
            'total_heures_n1' => 0,
            'total_jours_n1' => 0,
            'total_heures' => 0,
            'total_jours' => 0,
            'dates_info' => 0,
        ];
    }

    /**
     * Calcul des heure et jour de l'année en cours (N) et l'année suivante (N+1)
     */
    private function computeDaysAndHoursNN1($aFormationDates, $sContext = "update")
    {
        $return = [
            'total_hours_n' => 0,
            'total_hours_n1' => 0,
            'total_days_n' => 0,
            'total_days_n1' => 0,
            'calendar' => array(),
            'calendar_text' => '',
            'hour_start_am' => '',
            'hour_end_am' => '',
            'hour_start_pm' => '',
            'hour_end_pm' => ''
        ];

        if (count($aFormationDates) > 0) {
            $dateDebut = count($aFormationDates) > 0 ? reset($aFormationDates) : null;
            $iSameYear = $sContext == "update" ? $dateDebut['dateD']->format('Y') : DateTime::createFromFormat('d/m/Y', $dateDebut['date_debut'])->format('Y') ;
            $iNextYear = $iSameYear + 1;
            $iCountDaysN = 0;
            $iCountHoursN = 0;
            $iCountDaysN1 = 0;
            $iCountHoursN1 = 0;
            $aAlreadyProcessedDate = [];
            $aCalendar = [];
            $sHourStartAm = "";
            $sHourEndAm = "";
            $sHourStartPm = "";
            $sHourEndPm = "";

            foreach ($aFormationDates as $date) {

                $oCurrentDate = $sContext == "update" ? $date['dateD'] : DateTime::createFromFormat('d/m/Y', $date['date_debut']);
                $oCurrentDateEnd = $sContext == "update" ? $date['dateF'] : DateTime::createFromFormat('d/m/Y', $date['date_debut']);
                $fCurrentDureeHeure = $sContext == "update" ? $date['nbH'] : $date['duree'];
                
                // Calcul des horaires
                if ($oCurrentDate->format('H') < 13) {
                    $sHourStartAm = $oCurrentDate->format('H:i');
                    $sHourEndAm = $oCurrentDateEnd->format('H:i');
                } else {
                    $sHourStartPm = $oCurrentDate->format('H:i');
                    $sHourEndPm = $oCurrentDateEnd->format('H:i');
                }
                
                // Calcul des jours et heure dans la même année
                if ($oCurrentDate->format('Y') == $iSameYear) {
                    $iCountHoursN +=  $fCurrentDureeHeure;

                    // Si la date n'est pas encore traitée alors incrémenter le nombre
                    if (!in_array($oCurrentDate->format('Y-m-d'), $aAlreadyProcessedDate)) {
                        $iCountDaysN++;
                    }
                    
                    // Calendrier de stage 
                    $aCalendar[$iSameYear][DateUtils::getFrenchMonth($oCurrentDate->format('m'))][] = $oCurrentDate->format('d');
                    
                } if ($oCurrentDate->format('Y') == $iNextYear) {
                    // Calcul des jours et heure dans l'année suivante
                    $iCountHoursN1 += $fCurrentDureeHeure;

                    // Si la date n'est pas encore traitée alors incrémenter le nombre
                    if (!in_array($oCurrentDate->format('Y-m-d'), $aAlreadyProcessedDate)) {
                        $iCountDaysN1++;
                    }
                    
                     // Calendrier de stage 
                    $aCalendar[$iNextYear][DateUtils::getFrenchMonth($oCurrentDate->format('m'))][] = $oCurrentDate->format('d');
                }

                $aAlreadyProcessedDate[] = $oCurrentDate->format('Y-m-d');
            }
            
            $return = [
                'total_hours_n' => $iCountHoursN,
                'total_hours_n1' => $iCountHoursN1,
                'total_days_n' => $iCountDaysN,
                'total_days_n1' => $iCountDaysN1,
                'calendar' => $aCalendar,
                'calendar_text' => $this->getCalendarText($aCalendar),
                'hour_start_am' => $sHourStartAm,
                'hour_end_am' => $sHourEndAm,
                'hour_start_pm' => $sHourStartPm,
                'hour_end_pm' => $sHourEndPm
            ];
        }
        
        return $return;
    }

    /**
     * Sauvegarder les dates lors de la création
     * Posté sous forme : <date>|<heure_debut>|<heure_fin|<duree>
     */
    public function savePostedNewDateItems(FormationDossier $oDossier, $aPostedDates = []) {
        
        foreach ($aPostedDates as $aPostedDate) {
            // Parse des infos 
            $aDateInfos = explode('|', $aPostedDate);
            $sDate = $aDateInfos[0];
            $sHeureDebut = $aDateInfos[1];
            $sHeureFin = $aDateInfos[2];
            $fDuree = floatval($aDateInfos[3]);
            $oDateD = DateTime::createFromFormat("d/m/Y H:i", $sDate . " ".$sHeureDebut);
            $oDateF = DateTime::createFromFormat("d/m/Y H:i", $sDate . " ".$sHeureFin);
            // Création de l'entité
            $oFormationDate = new FormationDossierDate();
            $oFormationDate->setDateD($oDateD);
            $oFormationDate->setDateF($oDateF);
            $oFormationDate->setNbH($fDuree);
            $oFormationDate->setIdDossier($oDossier);
            $this->em->persist($oFormationDate);
        }
        
        $this->em->flush();
    }
    
    
    /**
     * APR-188 : Fix numero de réference dossier invalide : non incremental
     */
    public function getLastDossierRefSequence() {
        // Récupération du dernier dossier
        $oLastDossier = $this->formationDossierRepository->findOneBy([], ['id' => 'DESC']);
        $sLastRef = $oLastDossier->getRef();
        $sIncrement = substr($sLastRef, 8);
        $sLastDate = substr($sLastRef,0,4);
        $date = new DateTime();
        
        if($date->format("Y") !== $sLastDate){
            $sIncrement = 0;
        }
        $iNextSequence = intval($sIncrement) + 1;
            
        return str_pad($iNextSequence, 4, "0", STR_PAD_LEFT);
    }
    
    
    private function getCalendarText($aCalendar) { 
        $sCalendarText = "";
        foreach($aCalendar as $year => $months) {
            foreach ($months as $month => $days) {
                // 15-12-2021  $sCalendarText .= implode(",", $days) . " ".$month . " " . $year .' ; ';
                    $sCalendarText .= implode(",", array_unique($days)) . " ".$month . " " . $year .' ; ';
            }
        }
        return $sCalendarText;
    }
    
    
    
}
