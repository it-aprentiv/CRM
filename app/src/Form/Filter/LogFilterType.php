<?php

namespace App\Form\Filter;

use App\Entity\Log;
use App\Entity\Utilisateur;
use App\Form\Type\CrmDateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class LogFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label'      => 'Nomutilisateur',
                'required'          => false,
                'label'             => false,
                'attr'              => [ 'required' => true ],
            ])
            ->add('creation',  DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd-MM-yyyy',
            ]);
            $builder->get("creation")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection'   => false,
            'class'             => 'list-filter'
        ]);
    }

    public function getBlockPrefix()
    {
        return "";
    }

}
