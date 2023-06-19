<?php
/**
 * file Structure.php
 */

namespace App\Constants;


class Structure
{

    const PROSPERE = 3;
    const PROFORM = 2;
    const APRENTIV = 1;

    const LIB_APRENTIV = 'aprentiv';
    const LIB_PROFORM = 'proform';
    const LIB_PROSPERE = 'prospere';

    const TYPE_STRUCTURE = [
        self::LIB_APRENTIV => self::APRENTIV,
        self::LIB_PROFORM => self::PROFORM,
        self::LIB_PROSPERE => self::PROSPERE
    ];

    const PREFIX_FACT_APRENTIV = 'AP';
    const PREFIX_FACT_PROFORM = 'PF';

    const PREFIX_OM_APRENTIV = 'AC';
    const PREFIX_OM_PROFORM = 'PF';
}