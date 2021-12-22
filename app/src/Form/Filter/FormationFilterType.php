<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 27/12/2019
 * Time: 09:32
 */

namespace App\Form\Filter;

use App\Entity\Contact;
use App\Entity\Filter\FormationFilter;
use App\Entity\FormateurStatut;
use App\Form\Type\StructureType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Form\Type\CrmDateType;
use App\Form\Type\CrmMoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Structure;
use App\Constants\FormationType as type;
use App\Repository\ContactRepository;
use App\Repository\FormateurStatutRepository;

class FormationFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('entite', StructureType::class, [
                'choice_label' => 'structure',
                'required' => true,
            ])
            ->add('mois', ChoiceType::class, [
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
                'required' => false,
            ])
            ->add('dateOM', DateType::class, [
                'widget'        => 'single_text',
                'html5' => false,
                'attr' => [
                    'class' => 'js-datepicker',
                    'autocomplete' => 'off'
                ],
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('formateurOrganisme', EntityType::class, [
                'class' => Contact::class,
                'choice_label' => 'nom',
                'query_builder' => function (ContactRepository $cr) {
                    return $cr->getQueryFormateur();
                }
            ])
            /*->add('statutFormateur', EntityType::class, [
                'class' => FormateurStatut::class,
                'choice_label' => 'statut',
                'query_builder' => function(FormateurStatutRepository $fr) {
                    return $fr->getQueryListStatutFormateur();
                }
            ])*/
            ->add('cial', TextType::class, [
                'attr' => [
                    'readonly' => true,
                ]
            ])
            ->add('client', EntityType::class, [
                'class' => Contact::class,
                'choice_label' => 'nom',
                'query_builder' => function (ContactRepository $cr) {
                    return $cr->getQuerySocietes();
                },
            ])
            ->add('intitule')
            ->add('type', ChoiceType::class, [
                'choices' => type::$formationType
            ])
            ->add('domaineCompetence', TextType::class, [
                'attr' => [
                    'readonly' => true,
                ]
            ])
            ->add('dureeEnJour')
            ->add('dureeEnHeure')
            ->add('nbStagiaire', IntegerType::class, [
                'attr' => [
                    'min' => 0,
                ]
            ])
            ->add('demandeur', TextType::class, [
                'attr' => [
                    'readonly' => true,
                ]
            ])
            ->add('montantAchatHT', CrmMoneyType::class)
            ->add('montantVenteHT', CrmMoneyType::class)
            ->add('diffAchatVente', CrmMoneyType::class, [
                'attr' => [
                    'readonly' => true,
                ]
            ] )
            ->add('pourcentage', textType::class, [
                'attr' => [
                    'readonly' => true,
                ]
            ])
            ->add('pourcentageAchatHT', TextType::class, [
                'attr' => [
                    'readonly' => true,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => FormationFilter::class,
            'csrf_protection' => false,
            'required' => false,
            'method' => 'GET',
            'label' => false
        ]);
    }

    public function getBlockPrefix() {
        return 'filter';
    }
}