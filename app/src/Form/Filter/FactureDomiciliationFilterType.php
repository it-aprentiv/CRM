<?php


namespace App\Form\Filter;


use App\Entity\Contact;
use App\Entity\Filter\FactureDomiciliationFilter;
use App\Entity\FormationDossierStatut;
use App\Entity\Structure;
use App\Entity\Typedom;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureDomiciliationFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            /*->add('structure', EntityType::class,[
                'class'         => Structure::class,
                'choice_label'  => 'structure',
                'label'         => false,
                'required'      => false,
                'placeholder'   => 'Structure',
            ])*/
            /*->add('client', EntityType::class, [
                'class' => Contact::class,
                'choice_label' => 'nomStr',
                'query_builder' => function (ContactRepository $c) {
                    return $c->getQuerySocietes();
                },
                'required' => false,
                'placeholder' => 'Client'
            ])*/
            ->add('client', ChoiceType::class, [
                'placeholder' => 'Client',
                'required' => false
            ])
            ->add('type', EntityType::class, [
                'class' => Typedom::class,
                'choice_label' => 'libelle',
                'required' => false,
                'placeholder' => 'Type'
            ])
            ->add('dossierStatut', EntityType::class, [
                'class' => FormationDossierStatut::class,
                'choice_label' => 'statut',
                'required' => false,
                'placeholder' => 'Statut'
            ])
            ->add('numFacture')
            ->add('reference')
        ;

        $builder->get('client')->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => FactureDomiciliationFilter::class,
            ]
        );
    }
}