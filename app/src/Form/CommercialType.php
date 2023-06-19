<?php

namespace App\Form;

use App\Entity\Collaborateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Repository\CollaborateurRepository;

class CommercialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomPrenom',EntityType::class,
            ['class' => Collaborateur::class,
            'query_builder' => function(CollaborateurRepository $repository) { 
                return $repository->createQueryBuilder('u')->orderBy('u.nomPrenom', 'ASC');
            },
            'choice_label' => 'nomPrenom',
            'attr'=>['class'=>'no-disabled'],
            'label'=>false,
            'placeholder'=>'Stats globales',
            'required'=>false
            ])
            ->add('valider',SubmitType::class,[
            'attr'=>['class'=>'btn-primary']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Collaborateur::class,
        ]);
    }
}