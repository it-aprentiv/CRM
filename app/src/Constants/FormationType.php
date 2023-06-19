<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 05/12/2019
 * Time: 09:52
 */

namespace App\Constants;


class FormationType
{
    const FORMATION_INTRA = "Intra";
    const FORMATION_INTER = "Inter";
    const FORMATION_SOUS_TRAITANCE = "Sous-traitance";

    const TYPE_INTRA = "A";
    const TYPE_INTER = "R";
    const TYPE_SOUS_TRAITANCE = "S";

    public static $formationType = [
        self::FORMATION_INTRA => self::FORMATION_INTRA,
        self::FORMATION_INTER => self::FORMATION_INTER,
        self::FORMATION_SOUS_TRAITANCE => self::FORMATION_SOUS_TRAITANCE,
    ];

}