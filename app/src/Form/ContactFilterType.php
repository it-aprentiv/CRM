<?php

namespace App\Form;

use App\Entity\Collaborateur;
use App\Entity\ContactType;
use App\Entity\Structure;
use App\Form\Type\StructureType;
use App\Repository\CollaborateurRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFilterType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('structure', StructureType::class, [
                'choice_label' => 'structure',
                'empty_data' => null,
                'required' => false
            ])
            ->add('idType', EntityType::class, [
                'class' => ContactType::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('cty')
                        ->where('cty.id IN (:ids)')
                        ->setParameter('ids', [1, 2]);
                },
                'choice_label' => 'typeContact',
                'empty_data' => null,
                'required' => false
            ])
            ->add('societe', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('adresse')
            ->add('ville')
            ->add('codePostal')
            ->add('telephone')
            ->add('opca', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('commercial', EntityType::class, [
                'required' => false,
                'placeholder' => '-- Commercial --',
                'class' => Collaborateur::class,
                'choice_label' => 'nom_prenom',
                'query_builder' => function (CollaborateurRepository $c) {
                    return $c->getQueryCollaborateurList();
                },
            ])->add('statusClient', ChoiceType::class, [
                'required' => false,
                'placeholder' => '-- Status Client --',
                'choices' => [
                    'Tous' => 'Tous',
                    'Aucun' => 'Aucun',
                    'Froid' => 'Froid',
                    'Tiede' => "Tiede",
                    'Chaud' => "Chaud",
                    'Classé définitif' => 'Classé définitif',
                ]
            ]);

        // Utilisé pour prevenir l'erreur avec autocompletion de la liste des sociétés
        $builder->get('societe')->resetViewTransformers();
        $builder->get('opca')->resetViewTransformers();
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
