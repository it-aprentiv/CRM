<?php

namespace App\Form;

use App\Entity\CommissionStatut;
use App\Entity\Encaissement;
use App\Entity\EncaissementNote;
use App\Form\DataTransformer\OpcaTransformer;
use App\Form\DataTransformer\SocieteTransformer;
use App\Form\Type\StructureType;
use App\Manager\CommissionManager;
use App\Manager\FactureManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EncaissementType extends AbstractType {

    protected $factureManager;
    protected $commissionManager;
    protected $opcaTransformer;
    protected $societeTransformer;
    protected $em;

    public function __construct(FactureManager $factureManager,
        CommissionManager $commissionManager,
        OpcaTransformer $opcaTransformer,
        SocieteTransformer $societeTransformer,
        EntityManagerInterface $em
    )
    {
        $this->factureManager = $factureManager;
        $this->commissionManager = $commissionManager;
        $this->opcaTransformer = $opcaTransformer;
        $this->societeTransformer = $societeTransformer;
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('structure', StructureType::class, [
                'label' => 'structure'
        ]);

        $fMntHtEncaisse = $this->factureManager->getFloatAmount($options['encaissement_infos']['montant_ht_facture']);
        
        // APR-154 : Factures/Avoir dossiers > Encaissement facture : Calcul montant encaissé = montant TTC facture - montant TTC avoir
        $fMontantTTCAvoir = isset($options['encaissement_infos']['montant_ttc_avoir']) ? floatval($options['encaissement_infos']['montant_ttc_avoir']) : 0;
        $fMntTtcEncaisse = $this->computeMontantTTCFacture($options['encaissement_infos']) - $fMontantTTCAvoir;
        
        if ($options['source'] === Encaissement::SOURCE_DOSSIER) {
            // Pour encaissement dom/loc, c'est toujours un client qui est destinataire, 
            // il n'y a pas de notion d'OPCA et payeur == Client
            $builder
                ->add('opca', ChoiceType::class, [
                    'mapped' => false,
                    'required' => false,
                    'label' => 'OPCA',
                    'empty_data' => null
                ])
                ->add('payeur', ChoiceType::class, [
                    'choices' => $this->getPayeurChoices(),
                    'data' => $options['data']->getPayeur(),
                    'required' => false,
                    'attr' => [
                        'readonly' => $options['source'] == Encaissement::SOURCE_DOMLOC ? 'true' : null
                    ]
            ]);

            $builder
                ->get('opca')
                ->resetViewTransformers()
                ->addViewTransformer($this->opcaTransformer)
            ;

            $builder
                ->add('typereglopca', ChoiceType::class, [
                    'expanded' => true,
                    'label' => 'Type Reglement',
                    'choices' => [
                        'Chèque' => 'cheque',
                        'Virement' => 'virement'
                    ],
                    'attr' => [
                        'class' => 'opca_choice choice-payeur'
                    ],
            ]);

            // Règlement client
            $builder
                ->add('chequeattencaiss', ChoiceType::class, [
                    'expanded' => true,
                    'choices' => [
                        'Oui' => 1,
                        'Non' => 0
                    ],
                    'attr' => [
                        'class' => 'cli_choice choice-payeur'
                    ],
                    'label' => "Chèque en attente d'encaissement ?"
                ])
                ->add('numcheque', null, [
                    'label' => 'N° Chèque',
                    'attr' => [
                        'class' => 'cli_choice choice-payeur'
                    ],
                ])
                ->add('datecheque', Type\CrmDateType::class, [
                    'label' => 'Date du chèque',
                    'attr' => [
                        'class' => 'js-datepicker text-center cli_choice choice-payeur',
                        'autocomplete' => 'off'
                    ],
                ])
                ->add('mntantReglementclient', Type\CrmMoneyType::class, [
                    'label' => 'Montant',
                    'required' => false,
                    'attr' => [
                        'class' => 'cli_choice choice-payeur money-format',
                        'autocomplete' => 'off'
                    ],
                ])
                ->add('dtvalidite', Type\CrmDateType::class, [
                    'label' => 'Date de validité',
                    'widget' => 'single_text',
                    'attr' => [
                        'class' => 'js-datepicker text-center cli_choice choice-payeur',
                        'autocomplete' => 'off'
                    ],
                ])
            ;

            //        $fMntHtEncaisse = null;
//        $fMntTtcEncaisse = null;
//        $oEncaissement = $builder->getData();
//        $bHasId = $oEncaissement instanceof Encaissement && (!is_null($oEncaissement->getId()));

            

            // Montant HT Encaissé = Montant HT Facture - Montant HT avoir
            // /!\ Le montant de la commission est basé sur le montant HT encaissé
            if (isset($options['encaissement_infos']['montant_ht_avoir'])) {
                $fMntHtEncaisseAvoir = $this->factureManager->getFloatAmount($options['encaissement_infos']['montant_ht_avoir']);
                $fMntHtEncaisse = $fMntHtEncaisse - $fMntHtEncaisseAvoir;
            }


            /* if ($bHasId){
              $fMntHtEncaisse = $oEncaissement->getMntHt();
              $fMntTtcEncaisse = $oEncaissement->getMntTtc();
              } */


            // Commission sur la facturation
            $builder
                ->add('taux_commission', ChoiceType::class, [
                    'mapped' => false,
                    'choices' => [
                        0 => 0,
                        2 => 2,
                        4 => 4,
                        10 => 10,
                    ],
                    'data' => $options['encaissement_infos']['taux_commission']
                ])
                ->add('montant_commission', Type\CrmMoneyType::class, [
                    'mapped' => false,
                    'label' => 'Montant Commission',
                    'data' => $this->commissionManager->computeMontantCommission($fMntHtEncaisse, $options['encaissement_infos']['taux_commission'])
                ])
                ->add('statut_paiement_commission', EntityType::class, [
                    'mapped' => false,
                    'required' => false,
                    'class' => CommissionStatut::class,
                    'choice_label' => 'statut',
                    'data' => $this->commissionManager->findCommissionStatutById($options['encaissement_infos']['statut_paiement'])
                ])

            ;
        }

        $builder
            ->add('commercial', TextType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Commercial',
                'data' => $options['encaissement_infos']['commercial']
            ])
            ->add('societes', ChoiceType::class, [
                'mapped' => false,
                'multiple' => true,
                'attr' => ['multiple' => 'multiple']
            ])
            //
            ->add('typereglclient', ChoiceType::class, [
                'label' => 'Type de règlement',
                'choices' => $this->getTypeReglementClientChoices($options['source']),
                'attr' => [
                    'class' => 'cli_choice choice-payeur'
                ],
                'required' => true
            ])
            ->add('montantHTEncaisse', Type\CrmMoneyType::class, [
                'mapped' => false,
                'label' => 'Montant HT encaissé',
                'data' => $fMntHtEncaisse
            ])
            ->add('montantTTCEncaisse', Type\CrmMoneyType::class, [
                'mapped' => false,
                'label' => 'Montant TTC encaissé',
                'data' => $fMntTtcEncaisse
            ])
            ->add('dateReelleEncaiss', Type\CrmDateType::class, [
                'label' => 'Date encaissement',
                'widget' => 'single_text',
                'attr' => ['class' => 'date-until-now text-center', 'autocomplete' => 'off']
            ])
            ->add('restedu', Type\CrmMoneyType::class, [
                'label' => 'Reste dû',
                'attr' => ['class' => 'money-format']
            ])
            ->add('commentaires', CollectionType::class, [
                "entry_type" => NoteType::class,
                'attr' => [
                    'label' => false
                ],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true,
                'required' => true,
                'entry_options' => [
                    'date_format' => 'd/m/Y',
                    'data_class' => EncaissementNote::class
                ]
            ])
        ;

        $builder
            ->get('societes')
            ->resetViewTransformers()
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Encaissement::class,
            'payeur' => null,
            'encaissement_infos' => null,
            'source' => Encaissement::SOURCE_DOSSIER
        ]);
    }

    /**
     * Choix payeurs de l'encaissement
     * @return array
     */
    private function getPayeurChoices()
    {

        return [
            'OPCA' => 'OPCA',
            'Client' => 'CLIENT',
            'Autre' => null
        ];
    }

    /**
     * Calcul montant TTC facture encaissement
     */
    private function computeMontantTTCFacture($aEncaissementInfos)
    {

        return $this->factureManager->computeTTC($aEncaissementInfos['montant_ht_facture'], $aEncaissementInfos['montant_tva_facture']);
    }

    /**
     * APR-79 : Choix type règlement client 
     * 
     * @param type $source
     * @return string
     */
    private function getTypeReglementClientChoices($source)
    {

        $choices = [
            'Chèque' => 'cheque',
            'Carte bancaire' => 'cb',
            'Virement' => 'virement',
            'Espèces' => 'especes'
        ];

//        if ($source === Encaissement::SOURCE_DOMLOC) {
//            $choices['Chèque'] = 'cheque';
//        }

        return $choices;
    }

}
