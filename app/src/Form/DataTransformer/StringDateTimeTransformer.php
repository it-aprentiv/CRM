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
class StringDateTimeTransformer implements DataTransformerInterface {

    /**
     * Transforms an object (DateTime) to a string.
     *
     * @param  DateTime|null $datetime
     * @return string
     */
    public function transform($datetime)
    {
        return $datetime->format("d/m/Y");
    }

    /**
     * Transforms a string to an object (DateTime).
     *
     * @param  string $datetime
     * @return DateTime|null
     */
    public function reverseTransform($datetime)
    {
        // datetime optional
        if ( !$datetime ) {
            return new \DateTime('now');
        }
        if ( is_string($datetime) ) {
            return date_create_from_format('d/m/Y', $datetime) !== false ? date_create_from_format('d/m/Y', $datetime) : new \DateTime('now');
        }
        else {
            return $datetime;
        }
    }

}
