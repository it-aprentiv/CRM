<?php

namespace App\Form\Filter;

use App\Entity\Collaborateur;
use App\Entity\Competence;
use App\Entity\Contact;
use App\Entity\Dossier;
use App\Entity\Filter\FactureFormationFilter;
use App\Entity\Structure;
use App\Form\Type\CrmDateType;
use App\Form\Type\CrmMoneyType;
use App\Form\Type\StructureType;
use App\Repository\ContactRepository;
use App\Utils\DateUtils;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureFormationFilterType extends AbstractType {

    private $contactRepository;
    private $clientOption;

    public function __construct(ContactRepository $contactRepository) {
        $this->contactRepository = $contactRepository;
        $this->clientOption = [
            'class' => Contact::class,
            'label' => 'Client',
            'choice_label' => 'nomStr',
            'invalid_message' => 'Invalide client',
            'empty_data' => null,
            'choices' => [],
            'placeholder' => '-- Client --',
            'attr' => ['ordre-field' => 7]
        ];
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $aMonths = array_flip(DateUtils::months);
        $builder
            ->add('structure', StructureType::class, [
                'placeholder' => '-- Structure --',
                'choice_label' => 'structure',
                'attr' => ['ordre-field' => 1]
            ])
            ->add('mois', ChoiceType::class, [
                'choices' => $aMonths,
                'placeholder' => "-- Mois --",
                'attr' => ['ordre-field' => 2]
            ])
            ->add('numFacture', TextType::class, [
                'required' => false,
                'attr' => [
                    'ordre-field' => 3,
                    'placeholder' => "--N°Facture--",
                ]
            ])
            ->add('formateur', EntityType::class, [
                'class' => Contact::class,
                'required' => false,
                'choice_label' => 'nom',
                'choice_label' => function ($contact) {
                    return $contact->getNom() . " " . $contact->getPrenom();
                },
                'placeholder' => "--Formateur--",
                'query_builder' => function (ContactRepository $cr) {
                    return $cr->getQueryFormateur();
                },
                'attr' => [
                    'ordre-field' => 4
                ]
            ])
            ->add('dateReception', CrmDateType::class, [
                'attr' => [
                    'placeholder' => "--Date réception--",
                    'ordre-field' => 5,
                    'class' => 'js-datepicker text-center',
                    'autocomplete' => 'off'
                ]
            ])
            ->add('dateFacture', CrmDateType::class, [
                'attr' => [
                    'placeholder' => "--Date facture--",
                    'ordre-field' => 5,
                    'class' => 'js-datepicker text-center',
                    'autocomplete' => 'off'
                ]
            ])
            ->add('dateValidation', CrmDateType::class, [
                'attr' => [
                    'placeholder' => "--Date validation--",
                    'ordre-field' => 5,
                    'class' => 'js-datepicker text-center',
                    'autocomplete' => 'off'
                ]
            ])
            ->add('client', ChoiceType::class, [
                'placeholder' => 'Client',
                'attr' => [
                    "ordre-field" => 4
                ]
            ])
            ->add('intitule', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => "--Intitulé--",
                    'ordre-field' => 8,
                ],
            ])
        ;

        $builder->get('client')->resetViewTransformers();
        $builder->get('intitule')->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'required' => false,
            'data_class' => FactureFormationFilter::class
        ]);
    }

    public function getBlockPrefix() {
        return "";
    }

}
