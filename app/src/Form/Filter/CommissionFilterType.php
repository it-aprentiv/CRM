<?php

namespace App\Form\Filter;

use App\Entity\Collaborateur;
use App\Form\DataTransformer\StringDateTimeTransformer;
use App\Form\Type\CrmDateType;
use App\Repository\CollaborateurRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommissionFilterType extends AbstractType
{
    private $datetimetransformer;

    public function __construct(StringDateTimeTransformer $datetimetransformer)
    {
        $this->datetimetransformer = $datetimetransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientID')
            ->add('refDossier')
            ->add('montantAccorde')
            ->add('montantCom')
            ->add('montantDemande')
            ->add('montantFacture')
            ->add('montantEncaisse')
            ->add('dateSign',  CrmDateType::class, [
                'required' => false
            ])
            ->add('tauxComm')
            ->add('cial', EntityType::class, [
                'class' => Collaborateur::class,
                'required' => false,
                'placeholder' => '--Commercial--',
                'label' => 'Commercial',
                'query_builder' => function (CollaborateurRepository $cr) {
                    return $cr->findAllCollaborateur();
                }
                
            ])
            ->add('statutCom', ChoiceType::class, [
                'choices'   => $options['stat_choice'],
                'required' => false
            ])
        ;


        $builder->get("dateSign")->resetViewTransformers();

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'stat_choice' => null
        ]);
    }
}
