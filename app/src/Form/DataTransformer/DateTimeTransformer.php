<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Form\DataTransformer;

use DateTime;
use Symfony\Component\Form\DataTransformerInterface;


/**
 * Description of DateTimeTransformer
 */
class DateTimeTransformer implements DataTransformerInterface {

    private $format = 'd/m/Y';
    private $bAcceptNull = false;

    /**
     * Transforms an object (DateTime) to a string.
     *
     * @param  DateTime|null $datetime
     * @return string
     */
    public function transform($datetime) {
        
        if (!$datetime instanceof \DateTime || null === $datetime || empty($datetime) ) {
            return null;
        }
        
        /**
         * Hack date avec année < 2010 : 1970 par exemple
         */
        if ($datetime instanceof \DateTime && $datetime->format('Y') < 2010) {
            return null;
        }
        
        
        return $datetime->format($this->format);
    }

    /**
     *
     * @param mixed $datetime
     *
     * @return DateTime|false|mixed|null
     *
     * @throws \Exception
     */

    public function reverseTransform($datetime)
    {
        // datetime optional
        if (!$datetime && !$this->bAcceptNull) {
            return new DateTime();
        } elseif (!$datetime) {
            return null;
        }
        if ($datetime instanceof DateTime) {
            return $datetime;
        }

        return date_create_from_format($this->format, $datetime) !== false ? date_create_from_format($this->format, $datetime) : null;
    }

    public function setFormat($sFormat){
        $this->format = $sFormat;
    }

    public function setNullable($bIsNullable){
        $this->bAcceptNull = $bIsNullable;
    }
}
