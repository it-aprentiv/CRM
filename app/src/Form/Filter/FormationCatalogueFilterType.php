<?php

namespace App\Form\Filter;

use App\Entity\Filter\FormationCatalogueFilter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationCatalogueFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'inter' => 'R',
                    'intra' => 'A'
                ],
                'required' => false,
                'placeholder' => 'Type de catalogue',
                'label' => 'Type'
            ])
            ->add('nomFormation', TextType::class, [
                'label' => 'Intitulé',
                'attr' => [
                    'placeholder' => 'Intitulé de catalogue'
                ],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormationCatalogueFilter::class
        ]);
    }
}
