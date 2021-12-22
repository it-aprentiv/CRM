<?php
/**
 * file MoneyUtils.php
 */

namespace App\Utils;


class MoneyUtils
{
    public static function format($money){

        if (!is_numeric($money)) {
            return '';
        }

        return number_format($money, 2, ',', ' ');
    }
}