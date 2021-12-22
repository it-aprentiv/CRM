<?php

/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 05/12/2019
 * Time: 13:24
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\FormationCatalogue;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Constants\FormationType as typeFormation;
use App\Form\DataTransformer\MoneyTransformer;
use App\Form\Type\CrmMoneyType;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use App\Entity\FormationCatalogueNote;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\File;

class FormationCatalogueType extends AbstractType {

    private $dateTimetransformer;
    private $typeFormation;
    private $moneyTransformer;
    private $authorizationCheckerInterface;

    public function __construct(DateTimeTransformer $datetimetranformer,
        MoneyTransformer $moneyTransformer,
        AuthorizationCheckerInterface $authorizationCheckerInterface
    ) {
        $this->dateTimetransformer = $datetimetranformer;
        $this->moneyTransformer = $moneyTransformer;
        $this->authorizationCheckerInterface = $authorizationCheckerInterface;
    }

    private function convertLetterToWord(string $text) {
        switch ($text) {
            case "R" :
                $type = typeFormation::FORMATION_INTER;
                break;
            case "S" :
                $type = typeFormation::FORMATION_SOUS_TRAITANCE;
                break;
            default:
                $type = typeFormation::FORMATION_INTRA;
                break;
        }

        return $type;
    }

    public function setTypeFormation($typeFormation) {
        $this->typeFormation = $typeFormation;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $this->setTypeFormation($options['typeFormation']);
        $labelChoice = $this->convertLetterToWord($this->typeFormation);
        $builder
            ->add('nomFormation', TextType::class, [
                'required' => true,
            ])
            ->add('intraInter', ChoiceType::class, [
                'choices' => [
                    $labelChoice => $this->typeFormation,
                ],
                'attr' => [
                    'readonly' => true,
                ],
                'required' => true,
            ])
            ->add('lieuFormation', TextType::class, [
                'required' => false,
             ])
            ->add('commentaires', CollectionType::class, [
                'entry_type' => NoteType::class,
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true,
                'required' => false,
                'entry_options' => [
                    'date_format' => 'd/m/Y',
                    'data_class' => FormationCatalogueNote::class
                ]
            ]);

        //Afficher pour les type intra, inter
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $formEvent) {
            $form = $formEvent->getForm();

            if ($this->typeFormation != "S") {
                $form

                    ->add('dureeH', IntegerType::class, [
                        'required' => true,
                    ])
                    ->add('dureeJ', IntegerType::class, [
                        'required' => true,
                    ])
                    ->add('dateDebut', DateType::class, [
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => [
                            'class' => 'datepicker'
                        ],
                        'input' => 'datetime',
                        'format' => 'dd/MM/yyyy',
                    ])
                    ->add('dateFin', DateType::class, [
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => [
                            'class' => 'datepicker'
                        ],
                        'input' => 'datetime',
                        'format' => 'dd/MM/yyyy',
                ]);

                $form
                    ->add('tarJ', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('tarHtDj', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('tarHtH', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('coutJ', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('coutDemiJ', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('coutH', CrmMoneyType::class, [
                        'required' => false,
                ]);
            }
        });

    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => FormationCatalogue::class,
            'typeFormation' => '',
        ]);
    }

}
