<?php

namespace App\Form;

use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nommenu',TextType::class,[
                'label' => 'Nom du menu',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Nom du menu'
                ]
            ])
            ->add('urlmenu',TextType::class,[
                'label' => 'Url du menu',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Url du menu'
                ]
            ])
            ->add('urlcreation',TextType::class,[
                'label' => 'Url de création',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Url de création'
                ]
            ])
            ->add('categorie',HiddenType::class,[
                'label' => 'Catégorie',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Catégorie'
                ]
            ])
            ->add('ordre',HiddenType::class,[
                'label' => 'Ordre',
                'required' => true,
                'attr' =>[
                    'placeholder' => 'Ordre',
                    'scale' => 2,
                    'min' => 0,
                    'step' => 0.01,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
