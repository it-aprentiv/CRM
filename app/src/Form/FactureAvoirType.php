<?php

namespace App\Form;

use App\Entity\Avoir;
use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\Facture;
use App\Entity\FactureNote;
use App\Entity\FactureStatut;
use App\Form\DataTransformer\OpcaObjectTransformer;
use App\Form\DataTransformer\SocieteObjectTransformer;
use App\Form\Type\CrmDateType;
use App\Form\Type\CrmMoneyType;
use App\Repository\AvoirRepository;
use App\Repository\CollaborateurRepository;
use App\Repository\ContactRepository;
use App\Repository\FactureRepository;
use App\Repository\FactureStatutRepository;
use App\Repository\StructureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureAvoirType extends AbstractType {

    private $em;
    private $oFactureStatutRepository;
    private $oContactRepository;
    private $oFactureRepository;
    private $oAvoirRepository;
    private $oStructureRepository;

    private $societetransformer;
    private $opcaobjecttransformer;
    
    public function __construct(EntityManagerInterface $em, 
        FactureStatutRepository $oFactureStatutRepository,
        ContactRepository $oContactRepository,
        FactureRepository $oFactureRepository,
        StructureRepository $oStructureRepository,
        AvoirRepository $oAvoirRepository,
        SocieteObjectTransformer $societetransformer,
        OpcaObjectTransformer $opcaobjecttransformer
    ) {
        $this->em = $em;
        $this->oFactureStatutRepository = $oFactureStatutRepository;
        $this->oContactRepository = $oContactRepository;
        $this->oFactureRepository = $oFactureRepository;
        $this->oAvoirRepository = $oAvoirRepository;
        $this->oStructureRepository = $oStructureRepository;
        $this->societetransformer = $societetransformer;
        $this->opcaobjecttransformer = $opcaobjecttransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $exceptedcollab = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }
        $builder
            ->add('dest1', ChoiceType::class, [
                'choices' => [
                    'OPCO' => 'O',
                    'CLIENT' => 'C',
                    'AUTRE' => null
                ],
                'required' => false,
                'attr' => [ 'required' => true],
            ])
            ->add('ref', null, [
                'label' => 'N°Facture',
                'attr' => [
                    'readOnly' => true
                ]
            ])
            ->add('idStructure', ChoiceType::class, [
                'choices' => [
                    'aprentiv' => 1,
                    'proform' => 2,
                    'prospère' => 3
                ],
                'placeholder' => '-- Structure --',
                'data' => $options['data']->getIdStructure()
            ])
            ->add('idStatut', EntityType::class, [
                'class' => FactureStatut::class,
                'required' => false,
                'choice_label' => 'statut',
                'data' => $this->getFactureStatutData($options['data']->getIdStatut()),
                'attr' => [ 'required' => true],
            ])
            ->add('idContact', EntityType::class, [
                'class' => Contact::class,
                'required' => false,
                'choice_label' => 'nomStr',
                'choices' => [],
//                'query_builder' => function(ContactRepository $c) {
//                    return $c->getQuerySocietes();
//                },
                //'data' => $this->getContactData($options['data']->getIdContact()),
                'attr' => [ 'required' => true],
            ])
            ->add('totalHt', CrmMoneyType::class, [
                'label' => 'HTN',
                'required' => false,
                'attr' => [
                    'class' => 'mnthtnfact money-format',
                    'data-ttlht' => 'ttlhtfct',
                    'readOnly' => $this->setReadOnly($options['context'])
                ],
            ])
            ->add('idOpca', EntityType::class, [
                'required' => false,
                'class' => Contact::class,
                'choice_label' => 'nomStr',
                'choices' => [],
//                'query_builder' => function (ContactRepository $cr) {
//                    return $cr->findAllOPCA();
//                },
                //'data' => $this->getContactData($options['data']->getIdOpca()),
                'attr' => [ 'required' => true],
            ])
            ->add('idResponsable', EntityType::class, [
                'class' => Collaborateur::class,
                'required' => false,
                'choice_label' => 'nomPrenom',
                'attr' => [ 'required' => true],
                'query_builder' => function (CollaborateurRepository $c) use($exceptedcollab) {
                    return $c->findAllCollaborateur($exceptedcollab);
                },
            ])
            ->add('intituleFacture')
            ->add('pourcentageTva', PercentType::class, [
                'invalid_message' => 'Le montant n\'est pas valide',
                'attr' => [
                    'data-ht' => '#facture_avoir_totalRegleHt',
                    'data-tva' => '#facture_avoir_mntTva',
                    'data-ttc' => '#facture_avoir_totalRegle',
                    'class' => 'money-format taux-tva-fact',
                ],
                'type' => 'integer',
                'data' =>  $options['data'] && $options['data'] instanceof Facture ? number_format($options['data']->getPourcentageTva(), 2) : 0
            ])
            ->add('dateCreation', CrmDateType::class, [
                'required' => false,
                'label' => 'Date',
                'attr' => [
                    'readOnly' => $this->setReadOnly($options['context']),
                    'class' => 'js-datepicker text-center', 
                    'autocomplete' => 'off'
                ]
            ])
            ->add('mntTva', CrmMoneyType::class, [
                'attr' => [
                    'class' => 'money-format',
                    'readOnly' => $this->setReadOnly($options['context'])
                ],
                'label' => 'MONTANT TVA',
                'required' => false,
            ])
            ->add('resteARegler', CrmMoneyType::class, [
                'label' => 'HTN+1',
                'required' => false,
                'attr' => [
                    'class' => 'mnthtnfact money-format',
                    'data-ttlht' => 'ttlhtfct',
                    'readOnly' => $this->setReadOnly($options['context'])
                ],
            ])
            ->add('commentaires', CollectionType::class, [
                "entry_type" => NoteType::class,
                'attr' => [
                    'label' => false
                ],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true,
                'entry_options' => [
                    'date_format' => 'd/m/Y',
                    'data_class' => FactureNote::class
                ]
            ])
            ->add('totalRegle', CrmMoneyType::class, [
                'label' => 'TOTAL TTC',
                'attr' => [
                    'readOnly' => $this->setReadOnly($options['context'])
                ]
            ])
            ->add('totalRegleHt', CrmMoneyType::class, [
                'label' => 'TOTAL HT',
                'attr' => [
                    'class' => "ttlhtfct form-control money-format",
                    'readonly' => $this->setReadOnly($options['context']),
                ],
            ])
            ->add('idAvoirLiee', AvoirFactType::class, [
                'data' => $this->getAvoirLieeData($options['data']->getIdAvoirLiee()),
                'context' => $options['context']
            ]) //Avoir Type
        //->add('idDossier') // Dossier choice
        ;
        $builder->get('idContact')->addModelTransformer($this->societetransformer);
        $builder->get('idContact')->resetViewTransformers();
        $builder->get('idOpca')->addModelTransformer($this->opcaobjecttransformer);
        $builder->get('idOpca')->resetViewTransformers();
        
        
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Facture::class,
            'structure_choice' => null,
            'context' => 'edit'
        ]);
    }

    /**
     * Hack : Entity of type 'App\Entity\FactureStatut' for IDs id(0) was not found
     *
     * @param FactureStatut|null $oFactureStatut
     *
     * @return FactureStatut|null
     */
    public function getFactureStatutData(?FactureStatut $oFactureStatut) {

        if (is_null($oFactureStatut) || $oFactureStatut->getId() == 0) {
            return null;
        }

        return $this
                ->oFactureStatutRepository
                ->find($oFactureStatut->getId())
        ;
    }

    /**
     * Hack : Entity of type 'App\Entity\Contact' for IDs id(0) was not found
     *
     * @param Contact|null $oContact
     *
     * @return Contact|null
     */
    public function getContactData(?Contact $oContact) {

        if (is_null($oContact) || !$oContact || $oContact->getId() == 0) {
            return null;
        }

        return $this->oContactRepository->find($oContact->getId());
    }

    /**
     * Hack : Entity of type 'App\Entity\Avoir' for IDs id(0) was not found
     *
     * @param Avoir|null $oAvoir
     *
     * @return Avoir|null
     */
    public function getAvoirLieeData(?Avoir $oAvoir) {

        if (is_null($oAvoir) || $oAvoir->getId() == 0) {
            return null;
        }

        return $this->oAvoirRepository->find($oAvoir->getId());
    }

    
    /**
     * Retourne si un champ doit être readonly ou non
     * selon le contexte (edition ou création)
     * @param type $sContext
     */
    public function setReadOnly($sContext) {
        
        // Lors de la création de facture : ne pas mettre readonly les champs
        if ($sContext == 'create') {
            return false;
        }
        
        return true;
    }
    
    /**
     * 
     * @param type $iStructureId
     */
    public function getStructureData($iStructureId) {
        
        return $this->oStructureRepository->find($iStructureId);
    }
    
}
