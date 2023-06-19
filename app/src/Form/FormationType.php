<?php


namespace App\Form;

use App\Entity\Competence;
use App\Entity\OrdredemissionStatut;
use App\Form\DataTransformer\IntituleTransformer;
use App\Form\Type\StructureType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use App\Entity\Dossier;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Repository\ContactRepository;
use App\Entity\Contact;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Entity\DossierNote;
use App\Constants\FormationType as typeFormation;
use App\Form\DataTransformer\MoneyTransformer;
use App\Form\Type\CrmMoneyType;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class FormationType extends AbstractType {

    private $dateTimetransformer;
    private $typeFormation;
    private $moneyTransformer;
    private $authorizationCheckerInterface;
    private $intituletransformer;

    public function __construct(DateTimeTransformer $datetimetranformer,
        MoneyTransformer $moneyTransformer,
        AuthorizationCheckerInterface $authorizationCheckerInterface,
        IntituleTransformer $intituletransformer
    ) {
        $this->dateTimetransformer = $datetimetranformer;
        $this->moneyTransformer = $moneyTransformer;
        $this->authorizationCheckerInterface = $authorizationCheckerInterface;
        $this->intituletransformer = $intituletransformer;
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
            ->add('dossierType', ChoiceType::class, [
                'choices' => [
                    $labelChoice => $this->typeFormation,
                ],
                'attr' => [
                    'readonly' => true,
                ],
                'required' => true,
            ])
            ->add('idStructure', StructureType::class, [
                'placeholder' => 'Selectionnez',
                'choice_label' => 'structure',
                'required' => true,
            ])
            ->add('ref', TextType::class, [
                'required' => true,
                'attr' => [
                    'maxlength' => 10,
                    'readonly' => true,
                ]
            ])
            ->add('dateAccord', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => [
                    'class' => 'js-datepicker',
                    'autocomplete' => 'off'
                ],
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('idStatut', EntityType::class, [
                'class' => OrdredemissionStatut::class,
                'placeholder' => 'Selectionnez',
                'choice_label' => 'omiStatut',
                'required' => true,
            ])
            ->add('lieu', TextType::class, [
                'required' => false,
        ]);

        // Afficher seulement pour sous traitance
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $formEvent) {
            $form = $formEvent->getForm();
            if ($this->typeFormation === "S") {
                $form->add('soustraitance', TextType::class, [
                    'required' => false,
                ]);
            }
        });

        //Cacher pour les types autre que inter
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $formEvent) {
            $form = $formEvent->getForm();

            if ($this->typeFormation != "R") {
                $form->add('idClient', EntityType::class, [
                    'class' => Contact::class,
                    'placeholder' => 'Selectionnez',
                    'choice_label' => 'nomStr',
                    'required' => true,
                    /*'query_builder' => function (ContactRepository $cr) {
                        return $cr->getQuerySocietes();
                    },*/
                    'query_builder' => function (ContactRepository $cr) {
                        return $cr->findAllClient();
                    },
                ]);
            }
        });

        //Afficher pour les type intra, inter
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $formEvent) {
            $form = $formEvent->getForm();

            if ($this->typeFormation != "S") {
                $form
                    ->add('idFormateur', EntityType::class, [
                        'class' => Contact::class,
                        'placeholder' => 'Selectionnez',
                        'choice_label' => 'nom',
                        'required' => true,
                        'query_builder' => function (ContactRepository $cr) {
                            return $cr->getQueryFormateur();
                        }
                    ])
                    ->add('dureeHeures', TextType::class, [
                        'required' => true,
                    ])
                    ->add('dureeJours', TextType::class, [
                        'required' => true,
                    ])
                    ->add('dateDebutPeriode', DateType::class, [
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => [
                            'class' => 'js-datepicker'
                        ],
                        'input' => 'datetime',
                        'format' => 'dd/MM/yyyy',
                    ])
                    ->add('dateFinPeriode', DateType::class, [
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => [
                            'class' => 'js-datepicker',
                            'autocomplete' => 'off'
                        ],
                        'input' => 'datetime',
                        'format' => 'dd/MM/yyyy',
                ]);

                // Afficher si et seulement si l'utilisateur a le role ADMIN
//                    if($this->authorizationCheckerInterface->isGranted('ROLE_ADMIN')) {
                $form
                    ->add('pvTarifJ', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('pvTarifDj', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('pvTarifH', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('pfmteurJ', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('pfmteurDj', CrmMoneyType::class, [
                        'required' => false,
                    ])
                    ->add('pfmteurH', CrmMoneyType::class, [
                        'required' => false,
                ]);
//                    }

                $form
                    ->add('stagiaires', CollectionType::class, [
                        'entry_type' => StagiaireType::class,
                        'allow_add' => true,
                        'allow_delete' => true,
                        'required' => false,
                    ])
                ;
            }
        });


        /*$builder
            ->add('nom', TextType::class, [
                'required' => true,
        ]);*/
        $builder
        ->add('nom', EntityType::class,
            [
                'class' => Competence::class,
                'choice_label' => 'competence',
                'label'     =>'Intitulé',
                'required' => false,
                'attr'      => [ 'required' => 'required'],
            ]);
        // Afficher si l'utitisateur a le role ADMIN
        if ($this->authorizationCheckerInterface->isGranted('ROLE_ADMIN')) {
            $builder
                ->add('pvTotalHt', CrmMoneyType::class, [
                    'required' => false,
                ])
                ->add('pfmteurTotalHt', CrmMoneyType::class, [
                    'required' => false,
            ]);
        }
        $builder
            ->add('suiviMissions', CollectionType::class, [
                'entry_type' => SuiviMissionType::class,
                'allow_add' => true,
                'allow_delete' => true,
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
                    'data_class' => DossierNote::class
                ]
        ]);
        $builder->get('nom')->addModelTransformer($this->intituletransformer);
        $builder->get('nom')->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Dossier::class,
            'typeFormation' => '',
        ]);
    }

}
