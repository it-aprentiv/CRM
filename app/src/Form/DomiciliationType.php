<?php

namespace App\Form;



use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\Domiciliation;
use App\Entity\DomiciliationNote;
use App\Entity\FactureDomiciliation;
use App\Entity\FormationDossierStatut;
use App\Entity\Salle;
use App\Entity\Typedom;
use App\Form\DataTransformer\ContactTransformer;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\Type\CrmMoneyType;
use App\Repository\CollaborateurRepository;
use App\Repository\ContactRepository;
use App\Repository\FormationDossierStatutRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DomiciliationType extends AbstractType
{

    private $contactRepository;
    private $contactTransformer;
    private $dateTimeTransformer;
    private $container;
    private $clientOption;

    public function __construct(ContactRepository $contactRepository,
                                ContactTransformer $contactTransformer,
                                DateTimeTransformer $dateTimeTransformer,
                                ContainerInterface $container
    ){
        $this->contactRepository = $contactRepository;
        $this->contactTransformer = $contactTransformer;
        $this->dateTimeTransformer = $dateTimeTransformer;
        $this->dateTimeTransformer->setFormat('d/m/Y');
        $this->container = $container;
        $this->clientOption = [
            'class' => Contact::class,
            'label' => 'Client',
            'choice_label' => 'nomStr',
            'attr' => [ 'required' => 'required' ],
            'invalid_message' => 'Invalide client',
            'empty_data' => null,
            'choices' => [],
            'placeholder' => "Client"
        ];
    }

    /**
     * Construction formulaire Domiciliation
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $exceptedcollab = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }
        //dd($exceptedcollab);

        /** @var Domiciliation $oDomiciliation */
        $oDomiciliation = $builder->getData();
        // définition du choix client si existant
        $oClient = $oDomiciliation->getClient();
        if ($oClient) {
            $this->clientOption['choices'] = [$oClient];
        }

        $oFacture = $oDomiciliation->getFacture();
        if ($oFacture instanceof FactureDomiciliation && $oFacture->getIdfacturedom()) {
            $bDisableFacture = false;
        } else {
            $bDisableFacture = true;
        }
        $oType = $oDomiciliation->getType();
        if ($oType instanceof Typedom && (Typedom::DOMICILIATION === $oType->getLibelle())) {
            $bRequiredInDom = false;
        } else {
            $bRequiredInDom = true;
        }

        $builder->add('id', HiddenType::class, [
                'required' => false
            ])
            ->add('client', EntityType::class, $this->clientOption )
            ->add('type', EntityType::class, [
                'class' => Typedom::class,
                'label' => 'Type',
                'choice_label' => 'libelle',
                'placeholder' => 'Sélectionnez'
            ])
            ->add('partenaire', ChoiceType::class,[
                'label' => 'Partenaire',
                'choices'   => [
                    "Non" => 0,
                    "Oui" => 1
                ],
                'required'  => true,
            ])
            ->add('ref', TextType::class, [
                'label' => 'N° de ref',
                'attr' => [
                    //'readonly' => true // APR-222 : Au cas ou besoin d'ajuster la réf fiche
                ]
            ])
            ->add('salle', EntityType::class, [
                'class' => Salle::class,
                'label' => 'Salles',
                'choice_label' => 'libelle',
                'required' => $bRequiredInDom,
                'placeholder' => 'Sélectionnez',
                'choice_attr' => function($choice, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['title' => $choice->getTarifnormal()];
                }
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'data' => $this->container->getParameter('adresse_apprentiv'),
                'attr' => [
                    'readonly' => true
                ]
            ])
            ->add('statut', EntityType::class, [
                'class' => FormationDossierStatut::class,
                'label' => 'Statut',
                'choice_label' => 'statut',
                'placeholder' => '',
                'query_builder' => function (FormationDossierStatutRepository $formDossierStatuRepo){
                    return $formDossierStatuRepo->selectAllStatutQuery();
                }
            ])
            ->add($builder->create('signature', TextType::class, [
                    'label' => 'Date signature',
                    'attr' => [
                        'class' => 'datepicker',
                        'autocomplete' => 'off'
                    ],
                    'required' => false
                ])->addModelTransformer($this->dateTimeTransformer)
            )
            ->add('fixe', CrmMoneyType::class, [
                'label' => "Montant fix&eacute"
            ])
            // APR-111 : Supprimer le chap Date accord            
//            ->add($builder->create('accord', TextType::class, [
//                    'label' => "Date accord",
//                    'attr' => [
//                        'class' => 'datepicker',
//                        'autocomplete' => 'off'
//                    ]
//                ])->addModelTransformer($this->dateTimeTransformer)
//            )
            ->add($builder->create('debut', TextType::class, [
                    'label' => "D&eacutebut p&eacuteriode",
                    'attr' => [
                        'class' => 'datepicker',
                        'autocomplete' => 'off'
                    ]
                ])->addModelTransformer($this->dateTimeTransformer)
            )
            ->add($builder->create('fin', TextType::class, [
                    'label' => "Fin p&eacuteriode",
                    'attr' => [
                        'class' => 'datepicker',
                        'autocomplete' => 'off'
                    ]
                ])->addModelTransformer($this->dateTimeTransformer)
            )
            ->add('nbj', IntegerType::class, [
                'label' => 'Nb J',
                'required' =>  $this->getDurationRequiredValue($oDomiciliation, $bRequiredInDom),
                'attr' => [
                    'min' => "0"
                ]
            ])
            ->add('nbh', IntegerType::class, [
                'label' => 'Nb H',
                'required' => $this->getDurationRequiredValue($oDomiciliation, $bRequiredInDom, "hour"),
                'attr' => [
                    'min' => "0"
                ]
            ])
            ->add($builder->create('creation', Type\CrmDateType::class, [
                    'required' => false,
                    'label' => "Date cr&eacutetion",
                    'attr' => [
                        'class' => 'datepicker text-center',
                        'autocomplete' => 'off'
                    ],
                    'data' => $options['is_create'] ? (new \DateTime()) : $options['data']->getCreation() // APR-221 : 1. Date de création : mettre la date du jour (transformer en champ caché)
                ])
            )
            ->add('commercial', EntityType::class, [
                'label' => 'Commercial',
                'class' => Collaborateur::class,
                'choice_label' => 'nomPrenom',
                'placeholder' => 'Sélectionnez',
                'query_builder' => function (CollaborateurRepository $c) use ($exceptedcollab) {
                    return $c->findAllCollaborateur($exceptedcollab);
                },
            ])
            ->add('facture', FactureDomiciliationType::class, [
                'default_disabled' => $bDisableFacture
            ])
            ->add('commentaires', CollectionType::class,[
                "entry_type"    => NoteType::class,
                'attr'          => [
                    'label' => false
                ],
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'required'      => true,
                'entry_options' => [
                    'date_format' => 'd/m/Y',
                    'data_class' => DomiciliationNote::class
                ]
            ])
            ->addEventListener(FormEvents::SUBMIT, [$this, 'onSubmit'])
        ;

        $builder->get('client')->addModelTransformer($this->contactTransformer);
        $builder->get('client')->resetViewTransformers();
    }

    public function onSubmit(FormEvent $event){
        $oDom = $event->getData();

        if (!$oDom) {
            return;
        }

        // update client select boxe
        $oClient = $oDom->getClient();
        if ($oClient instanceof Contact) {
            $oForm = $event->getForm();
            $oForm->remove('client');
            $this->clientOption['choices'] = [$oClient];
            $oForm->add('client', EntityType::class, $this->clientOption);
        }

        // mettre un facture null si donnée vide
        $oFacture = $oDom->getFacture();
        if ($oFacture instanceof FactureDomiciliation) {
            $bIsNull = $oFacture->getIdfacturedom() === null;
            $bIsNull = $bIsNull && ($oFacture->getNumero() === null);
            $bIsNull = $bIsNull && ($oFacture->getMontant() === null);
            $bIsNull = $bIsNull && ($oFacture->getDate() === null);
            $oFacture = $bIsNull ? null : $oFacture;
        }

        $oDom->setFacture($oFacture);
        $event->setData($oDom);
    }

    
    /**
     * Retour APR-59 : Si location : un des valeurs NbJ ou NbH est obligatoire
     * Au chargement : on rend obligatoire le champ (nbj ou nbh) qui a une valeur > 0 
     * 
     * @param Domiciliation $oDomiciliation
     * @param type $bRequiredInDom
     * @param type $duration
     * @return boolean
     */
    public function getDurationRequiredValue(Domiciliation $oDomiciliation, $bRequiredInDom, $duration = 'day') {
        $bRequired = false;
        
        if ('day' == $duration && intval($oDomiciliation->getNbj()) > 0) {
            return true;
        } else if ('hour' == $duration && intval($oDomiciliation->getNbh()) > 0) {

            return true;
        }
        
        return $bRequired;
    }
    
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Domiciliation::class,
            'is_create' => false 
        ]);
    }
}