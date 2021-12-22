<?php


namespace App\Form\Filter;

use App\Entity\Collaborateur;
use App\Repository\CollaborateurRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeadFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('societe', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('statut', ChoiceType::class,[
                'choices' => [
                    'En cours' => 'En cours',
                    'Devenu client' => 'Devenu client',
                    'Devenu prospect' => 'Devenu prospect',
                    'Devenu propal' => 'Devenu propal',
                    'Sans suite' => 'Sans suite',
                ],
                'required' => false,
                'placeholder' => '-- Statut lead --',
                ])            
            ->add('nom')
            ->add('prenom')
            ->add('ville')
            ->add('commercial', EntityType::class, [
                'required' => false,
                'placeholder' => '-- Commercial --',
                'class' => Collaborateur::class,
                'choice_label' => 'nom_prenom',
                'query_builder' => function (CollaborateurRepository $c) {
                    return $c->findAllCollaborateur();
                },
            ])
            ->add('origine', ChoiceType::class,[
                'choices' => [
                    'Site web' => 'Site web',
                    'Réseaux sociaux' => 'Reseaux sociaux',
                    'Leboncoin' => 'Leboncoin',
                    'Google' => 'Google',
                    'Email' => 'Email',
                    'Bouche à oreille' => 'Bouche a oreille',
                    'EDOF' => 'EDOF',
                    'Pole Emploi' => 'Pole Emploi',
                ],
                'required' => false,
                'placeholder' => '-- Origine du lead --',
                ])
                ;
                $builder->get('societe')->resetViewTransformers();

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['csrf_protection' => false]);
    }

    public function getBlockPrefix()
    {
        return "";
    }


}