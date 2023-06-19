<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpcaFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('opca')
            ->add('telephone')
//            ->add('fax')
            ->add('email')
//            ->add('siteWeb')
            ->add('adresse')
            ->add('compAdresse')
            ->add('codePostal')
            ->add('ville');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection'   => false,
            'class'             => 'list-filter',
        ]);
    }

    public function getBlockPrefix()
    {
        return "";
    }
}
