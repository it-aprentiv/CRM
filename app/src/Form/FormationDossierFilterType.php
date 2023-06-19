<?php

namespace App\Form;

use App\Entity\Collaborateur;
use App\Entity\FormationDossierStatut;
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

class FormationDossierFilterType extends AbstractType
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
            ->add('moisSignature', ChoiceType::class, [
                'placeholder' => 'Mois de signature',
                'choices' => [
                    'Janvier' => 1,
                    'Février' => 2,
                    'Mars' => 3,
                    'Avril' => 4,
                    'Mai' => 5,
                    'Juin' => 6,
                    'Juillet' => 7,
                    'Aout' => 8,
                    'Septembre' => 9,
                    'Octobre' => 10,
                    'Novembre' => 11,
                    'Décembre' => 12,
                ],
                'required' => false
            ])
            ->add('anneeSignature', ChoiceType::class, [
                'placeholder' => 'Année de signature',
                'choices' => $this->generateArrayYear(),
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
            ->add('numInterne')
            ->add('client', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('intituleStage')
            ->add('dateFinStage',  DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd-MM-yyyy',
            ])
            ->add('dateEstimeRecep',  DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd-MM-yyyy',
            ])
            ->add('montantSigne')
            ->add('montantAccorde')
            ->add('dateEstimeCloture',  DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd-MM-yyyy',
            ])
            ->add('statusDossier', EntityType::class, [
                'placeholder' => '-- Status dossier --',
                'class' => FormationDossierStatut::class,
                'choice_label' => 'statut',
                'required' => false
            ])
            ->add('opca', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('commercial',  ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ]);

        $builder->get('commercial')->resetViewTransformers();
        $builder->get('opca')->resetViewTransformers();
        $builder->get('client')->resetViewTransformers();
        $builder->get("dateCreation")->resetViewTransformers();
        $builder->get("dateFinStage")->resetViewTransformers();
        $builder->get("dateEstimeRecep")->resetViewTransformers();
        $builder->get("dateEstimeCloture")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection'   => false,
            'class'             => 'list-filter',
        ]);
    }

    public function getBlockPrefix()
    {
        return "";
    }

    private function generateArrayYear() {
        $yearNow = date("Y");
        $aYear = array();
        for($i = 0; $i < 11 ; $i++) {
            $tempYear = $yearNow - $i;
            $aYear[$tempYear] = $tempYear;
        }

        return $aYear;
    }
}