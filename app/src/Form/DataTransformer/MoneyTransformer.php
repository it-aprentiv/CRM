<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Form\DataTransformer;

use DateTime;
use Symfony\Component\Form\DataTransformerInterface;
use function dump;

/**
 * Description of DateTimeTransformer
 *
 */
class MoneyTransformer implements DataTransformerInterface {

    /**
     * Transforms money number to a string.
     *
     */
    public function transform($money) {
        if (null === $money || !is_numeric($money)) {
            return null;
        }
        
        return number_format($money, 2, ',', ' ');
    }

    /**
     * Transforms a string to money number (number).
     *
     */
    public function reverseTransform($money) {
        // datetime optional
        if (!$money && $money !== 0) {
            return;
        }
        
        $money = str_replace(" ", "", $money);
        
        return floatval($money);
    }

}
