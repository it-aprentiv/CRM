<?php

namespace App\Form;

use App\Constants\Facture;
use App\Entity\Collaborateur;
use App\Entity\FactureStatut;
use App\Form\DataTransformer\StringDateTimeTransformer;
use App\Form\Type\StructureType;
use App\Repository\ContactRepository;
use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Structure ;

class FactureFilterType extends AbstractType
{
    private $datetimetransformer;

    public function __construct(StringDateTimeTransformer $datetimetransformer)
    {
        $this->datetimetransformer = $datetimetransformer;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('structure', StructureType::class, [
                'placeholder' => '-- Structure --',
                'choice_label' => 'structure',
                'required' => false
            ])
            ->add('dateCreation',  DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd-MM-yyyy',
            ])
            ->add('ref')
            ->add('noDossierRef')
            ->add('numDossierOpca')
            ->add('destinataire', ChoiceType::class, [
                'placeholder' => 'Destinataire',
                'choices' => [
                    'OPCA' => Facture::DESTINATAIRE_OPCA,
                    'Client' => Facture::DESTINATAIRE_CLIENT,
                    'Autre' => Facture::DESTINATAIRE_AUTRES,
                ],
                'required' => false
            ])
            ->add('client', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('opca',ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('intituleStage')
            ->add('commercial',  ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('statut', EntityType::class, [
                'placeholder' => '-- Status --',
                'class' => FactureStatut::class,
                'choice_label' => 'statut',
                'required' => false
            ]);
        $builder->get('commercial')->resetViewTransformers();
        $builder->get('client')->resetViewTransformers();
        $builder->get('opca')->resetViewTransformers();
        $builder->get("dateCreation")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return "";
    }
}