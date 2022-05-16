<?php

namespace App\Form;

use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\FormationDossier;
use App\Entity\FormationDossierNote;
use App\Entity\FormationDossierStatut;
use App\Entity\Structure;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\DataTransformer\SocieteObjectTransformer;
use App\Form\Type\CrmMoneyType;
use App\Form\Type\StructureType;
use App\Repository\CollaborateurRepository;
use App\Repository\ContactRepository;
use App\Repository\StructureRepository;
use App\Utils\DateUtils;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossierType extends AbstractType
{
    private $contactRepository;
    private $structureRepository;
    private $societeobjectransformer;
    
    public function __construct(
        ContactRepository $contactRepository, 
        DateTimeTransformer $datetimetransformer,
        StructureRepository $stuctureRepository,
        SocieteObjectTransformer $societeobjecttransformer
    ){
        $this->contactRepository = $contactRepository;
        $this->datetimetransformer = $datetimetransformer;
        $this->structureRepository = $stuctureRepository;
        $this->societeobjectransformer = $societeobjecttransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $exceptedcollab = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }
        
        $builder
            ->add('idClient', EntityType::class, [
                'class' => Contact::class,
                'label_attr' => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'choice_label' => 'nomStr',
                'required' => true,
                /*'query_builder' => function (ContactRepository $cr) {
                    return $cr->findAllClient();
                },*/
                'choices' => [],
                'placeholder' => '-- Société --',
                'attr' => [
                    'required' => 'required'
                ],
                'data' => $this->getClientData($options['data']->getIdClient())
            ])
            ->add('idStructure', StructureType::class, [
                'label_attr' => [ 'class' => "font-weight-bold required" ],
                'required' => false,
                'choice_label' => 'structure',
                'attr' => [
                    'required' => 'required',
                ],
                'data' => $this->getStructureData($options['data']->getIdStructure()),
            ])
            ->add('dossierType', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'INTRA' => 'INTRA',
                    'INTER' => 'INTER',
                    'SOUS-TRAITANCE' => 'SOUS-TRAITANCE',
                    'À DISTANCE' => 'À DISTANCE'
                ],
                'attr' => [
                    'required' => 'required',
                ],
            ])
            ->add('idCommercial', EntityType::class, [
                'class' => Collaborateur::class,
                'required' => false,
                'choice_label' => 'nomPrenom',
                'attr' => [
                    'required' => 'required',
                ],
                'query_builder' => function (CollaborateurRepository $c)  use ($exceptedcollab) {
                    return $c->findAllCollaborateur($exceptedcollab);
                },
            ])
            ->add('idStatut', EntityType::class, [
                'class' => FormationDossierStatut::class,
                'required' => false,
                'choice_label' => 'statut',
                'attr' => [
                    'required' => 'required',
                ],
            ])
            ->add('idOpca', EntityType::class, [
                'class' => Contact::class,
                'choice_label' => 'nomStr',
                'choices'       => [],
                'placeholder' => '-- OPCO --',
                'attr'          => [
                    'required' => 'required',
                ],
                'data' => $this->getOpcaData($options['data']->getIdOpca())
                
            ])
            ->add('ref', TextType::class,[
                'required' => false,
                'attr' => array(
                    'readonly' => true,
                ),
            ])
            ->add('mntDemande', CrmMoneyType::class,
                [
                    'required' => false,
                ])
            ->add('lieu', TextType::class,
                [
                    'required' => false,
                ])
            ->add('nom', ChoiceType::class,
                [
                    'attr' => [
                        'required' => 'required',
                    ]
                ])
            ->add('themeformation', TextType::class,[
                'required' => true,
            ])
            ->add('themegeneral', TextType::class,
                [
                    'required' => true,
                ])
            ->add('dateDebutPeriode', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'data' => $options['formated_formation_dates'] ? ($options['formated_formation_dates']['date_debut'] ? $options['formated_formation_dates']['date_debut']['dateD'] : null) : null
            ])
            ->add('dateFinPeriode', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'data' => $options['formated_formation_dates'] ? ($options['formated_formation_dates']['date_fin'] ? $options['formated_formation_dates']['date_fin']['dateF'] : null) : null
            ])
            ->add('dispositif', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Region' => 'Region',
                    'Pole emploi' => 'Pole emploi',
                    'PF' => 'PF',
                    'CPF' => 'CPF',
                    'POEI' => 'POEI',
                    'PP' => 'PP',
                    'AIF' => 'AIF',
                    'CIF' => 'CIF',
                    'CP' => 'CP',
                    'DOM' => 'DOM',
                    'LOC' => 'LOC',
                    'PF Part' => 'PF Part',
                    'PF TNS' => 'PF TNS',
                    'Prest' => 'Prest',
                    'FNE' => 'FNE',
                    'MDD' => 'MDD',
                    'AO' => 'AO',
                    'autres' => 'autres',
                ],
                'attr' => [
                    'required' => 'required',
                ],
            ])
            ->add('dureeJours', HiddenType ::class, [
                'required' => false,
                'data' => $options['formated_formation_dates'] ? $options['formated_formation_dates']['total_jours_n'] + $options['formated_formation_dates']['total_jours_n1'] : 0
            ])
            ->add('dureeHeures', HiddenType ::class, [
                'required' => false,
                'data' => $options['formated_formation_dates'] ? $options['formated_formation_dates']['total_heures_n'] + $options['formated_formation_dates']['total_heures_n1'] : 0
            ])
            ->add('ndossopca', TextType::class,[
                'required' => false,
            ])
            ->add('durparjour', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0.5' => '0.5',
                    '1' => '1',
                    '1.5' => '1.5',
                    '2' => '2',
                    '2.5' => '2.5',
                    '3' => '3',
                    '3.5' => '3.5',
                    '4' => '4',
                    '4.5' => '4.5',
                    '5' => '5',
                    '5.5' => '5.5',
                    '6' => '6',
                    '6.5' => '6.5',
                    '7' => '7',
                    '7.5' => '7.5',
                    '8' => '8',
                ],
                'attr' => [
                    'required' => 'required',
                ],
            ])
            ->add('tauxCom', ChoiceType::class,
                [
                    'required' => false,
                    'choices' => [
                        '0' => '0',
                        '2' => '2',
                        '4' => '4',
                        '10' => '10'
                    ]
                ])
            ->add(
                'mntMarge',
                CrmMoneyType::class,
                [
                    'required' => false,
                    'attr' => array(
                        'readonly' => true,
                    ),
                ]
            )
            ->add('mntAccorde', CrmMoneyType::class,[
                'required' => false,
            ])
            ->add('dateAccord', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'data' => DateUtils::verifyDate($options['data']->getDateAccord()) ? $options['data']->getDateAccord() : null,
                'attr'          => [
                    'class' => 'js-datepicker text-center date',
                    'autocomplete' => 'off'
                ],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('datesDossier', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => [
                    'class' => 'js-datepicker text-center date',
                    'autocomplete' => 'off'
                ],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'data' => DateUtils::verifyDate($options['data']->getDatesDossier()) ? $options['data']->getDatesDossier() : null,
            ])
            ->add('datesigntext', ChoiceType::class, [
                'mapped' =>false,
                'data'=> $options['signature'],
                'choices' => $this->getMonths()
            ])
            ->add('dateEnvoi', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => [
                    'class' => 'js-datepicker text-center date',
                    'autocomplete' => 'off'
                ],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('dateSignature', DateType::class, [
                'widget' => 'single_text',
                'attr'          => [
                    'class' => 'text-center date',
                    'autocomplete' => 'off'
                ],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',

            ])
            ->add('factures', CollectionType::class,[
                'entry_type' => FacturationType::class,
                'attr'          => [
                    'label' => false
                ],
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'required'      => false,
                'entry_options' => [
                    'isReadOnly'=> $options['isModif'],
                    'legal_mode' => $options['facturation.legal_mode']
                ]
            ])
            ->add('avoirs', CollectionType::class,[
                'entry_type' => AvoirType::class,
                'attr'          => [
                    'label' => false
                ],
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'required'      => false,
                'entry_options' => [
                    'isReadOnly'=> $options['isModif'],
                    'legal_mode' => $options['facturation.legal_mode']
                ]
            ])
            ->add('stagiaires', CollectionType::class,[
                'entry_type' => StagiaireType::class,
                'allow_add' => true,
                'allow_delete'  => true,
                'label' => false,
                'mapped' =>false,
                'required'      => false,
                'by_reference' =>false,
            ])
             ->add('commentaires', CollectionType::class, [
                 "entry_type"    => NoteType::class,
                 'attr'          => [
                     'label' => false
                 ],
                 'by_reference'  => false,
                 'allow_add'     => true,
                 'allow_delete'  => true,
                 'entry_options' => [
                     'date_format' => 'd/m/Y',
                     'data_class' => FormationDossierNote::class
                 ],
                 "required" => false

            ])
        ;
        $builder->get("dateEnvoi")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateEnvoi")->resetViewTransformers();
        $builder->get("dateSignature")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateSignature")->resetViewTransformers();
        $builder->get("idClient")->addModelTransformer($this->societeobjectransformer);
        $builder->get("idClient")->resetViewTransformers();
        $builder->get("idOpca")->addModelTransformer($this->societeobjectransformer);
        $builder->get("idOpca")->resetViewTransformers();

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormationDossier::class,
            'signature' => null,
            'isModif' => false,
            'facturation.legal_mode' => true,
            'formated_formation_dates' => null
        ]);
    }
    
    /**
     * Hack : Entity of type 'App\Entity\FactureStatut' for IDs id(0) was not found
     *
     */
    public function getStructureData(?Structure $oStructure) {

        if (is_null($oStructure) || $oStructure->getId() == 0) {
            return null;
        }

        return $this
                ->structureRepository
                ->find($oStructure->getId())
        ;
    }

    /**
     * HAck V1 : lien contact supprimé ou orphelin :(
     * @param Contact $oContact
     * @return type
     */
    public function getClientData(?Contact $oContact) {
         if (is_null($oContact) || in_array($oContact->getId(), [75530])) {
            return null;
        }

        return $this
                ->contactRepository
                ->find($oContact->getId())
        ;
    }
    
    /**
     * HAck V1 : lien contact supprimé ou orphelin :(
     * @param Contact $oContact
     * @return type
     */
    public function getOpcaData(?Contact $oContact) {
         if (is_null($oContact) || ($oContact instanceof Contact && $oContact->getId() == 0)) {
            return null;
        }

        return $this
                ->contactRepository
                ->find($oContact->getId())
        ;
    }
    
    public function getMonths() {
        
        return [
            "Janvier" => "Janvier",
            "Février" => "Février",
            "Mars" => "Mars",
            "Avril" => "Avril",
            "Mai" => "Mai",
            "Juin" => "Juin",
            "Juillet" => "Juillet",
            "Août" => "Août",
            "Septembre" => "Septembre",
            "Octobre" => "Octobre",
            "Novembre" => "Novembre",
            "Décembre" => "Décembre"
        ];
    }
    
}