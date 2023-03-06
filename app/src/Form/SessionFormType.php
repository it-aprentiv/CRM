<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Sessions;
use App\Repository\ContactRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class,[
                'label' => 'Nom de la session',
                'required' => true
            ])
            ->add('cout_formateur',NumberType::class,[
                'label' => 'Coût BSPP',
                'required' => true,
                'attr' =>[
                    'scale' => 2,
                    'min' => 0,
                    'step' => 0.01,
                ],
                'data' => 0,
            ])
            ->add('cout_bspp',NumberType::class,[
                'label' => 'Coût BSPP',
                'required' => true,
                'attr' =>[
                    'scale' => 2,
                    'min' => 0,
                    'step' => 0.01,
                ],
                'data' => 0,
            ])
            ->add('cout_visite',NumberType::class,[
                'label' => 'Coût BSPP',
                'required' => true,
                'attr' =>[
                    'scale' => 2,
                    'min' => 0,
                    'step' => 0.01,
                ],
                'data' => 0,
            ])
            ->add('cout_jury',NumberType::class,[
                'label' => 'Coût BSPP',
                'required' => true,
                'attr' =>[
                    'scale' => 2,
                    'min' => 0,
                    'step' => 0.01,
                ],
                'data' => 0,
            ])
            ->add('date_debut',DateType::class,[
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'label' => 'Date de fin',
                'required' => true,
            ])
            ->add('date_fin',DateType::class,[
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'label' => 'Date de fin',
                'required' => true,
            ])
            ->add('formateurFormation',EntityType::class,[
                'class' => Contact::class,
                'choice_label' => 'nom',
                'label' => false,
                'required' => true,
                'attr' => ['class' => 'formateur_formation ctn'],
                'query_builder' => function (ContactRepository $er) {
                    return $er->getQueryFormateur();
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sessions::class,
        ]);
    }
}
