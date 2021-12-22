<?php

namespace App\Form\Filter;

use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\DevisStatut;
use App\Entity\Structure;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\DataTransformer\SocieteObjectTransformer;
use App\Form\DataTransformer\VilleTransformer;
use App\Form\Type\StructureType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropalFilterType extends AbstractType
{

    private $societeobjecttransformer;

    public function __construct(SocieteObjectTransformer $societeobjecttransformer)
    {
        $this->societeobjecttransformer = $societeobjecttransformer;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('statutpropal', EntityType::class, [
                'class' => DevisStatut::class,
                'choice_label'  => 'statutDevis',
                'required'      => false,
                'attr'          => ['required' => true],
                'label'         => false,
            ])
            ->add('entitypropal', StructureType::class, [
                'choice_label'  => 'structure',
                'label'         => false,
                'required'      => false,
                'attr'          => [ 'required' => true ],
            ])
            ->add('commercial', EntityType::class, [
                'class'             => Collaborateur::class,
                'choice_label'      => 'nom_prenom',
                'required'          => false,
                'label'             => false,
                'attr'              => [ 'required' => true ],
            ])
            ->add('client', EntityType::class, [
                'class'             => Contact::class,
                'choice_label'      => 'nomStr',
                'choices'           => [],
                'required'          => false,
                'label'             => false,
                'attr'              => [ 'required' => true],
            ])
            ->add('type',ChoiceType::class, [
                'label'         => false,
                'required'      => false,
                'choices'       => [
                    'Entreprise'  => 1,
                    'Particulier' => 2,
                ],
                'attr'          => [ 'required' => true ]
            ]);

        $builder->get("client")->resetViewTransformers();

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
