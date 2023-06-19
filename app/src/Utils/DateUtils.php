<?php

/**
 * file DateUtils.php
 */

namespace App\Utils;

class DateUtils {

    const months = [
        1 => "Janvier",
        2 => "Février",
        3 => "Mars",
        4 => "Avril",
        5 => "Mai",
        6 => "Juin",
        7 => "Juillet",
        8 => "Août",
        9 => "Septembre",
        10 => "Octobre",
        11 => "Novembre",
        12 => "Décembre",
    ];

    public static function getFrenchMonth($mois)
    {
        $mois = (int) $mois;
        $aMonth = self::months;

        if (!isset($aMonth[$mois])) {
            throw new \Exception("mois indéfini !");
        } else {
            return $aMonth[$mois];
        }
    }

    public static function verifyDate(?\DateTime $oDateTime)
    {
        if (!$oDateTime) {
            return false;
        }
        
        if ((int) $oDateTime->format('Y') < 1990) {
            return false;
        }
        
        return checkdate((int) $oDateTime->format('m'), (int) $oDateTime->format('d'), (int) $oDateTime->format('Y'));
    }

}
