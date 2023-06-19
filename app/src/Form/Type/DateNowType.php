<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class DateNowType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->addModelTransformer(new CallbackTransformer(
            function ($date) {
                if ($date == null) {
                    $date = new \DateTime('now');
                }
                if ($date instanceof \DateTime) {
                    $sDate = $date->format('d/m/Y');
                } else {
                    $sDate = $date;
                }

                return $sDate;
            },
            function ($string) {
                // transform the string back to an array
                return $string ? date_create_from_format('d/m/Y', $string) : null;
            }
        ));
    }

    public function getParent() {
        return DateType::class;
    }
}