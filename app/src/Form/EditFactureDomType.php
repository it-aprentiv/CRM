<?php


namespace App\Form;


use App\Constants\Structure as StructureConst;
use App\Entity\FactDomNote;
use App\Entity\FactureDomiciliation;
use App\Entity\Payeur;
use App\Entity\Structure;
use App\Form\Type\CrmDateType;
use App\Form\Type\CrmMoneyType;
use App\Repository\FactureStatutRepository;
use App\Repository\StructureRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditFactureDomType extends AbstractType
{
    /**
     * @var FactureStatutRepository
     */
    private $statutRepository;
    private $structureRepository;

    public function __construct(FactureStatutRepository $statutRepository, StructureRepository $structureRepository)
    {
        $this->statutRepository = $statutRepository;
        $this->structureRepository = $structureRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $collaborateur = $options['attr']['collaborateur'];
        
        $builder
            ->add('statut', ChoiceType::class, [
                'choices' => $this->getStatutChoice(),
                'required' => false
            ])
            ->add('dateestimepaiement', CrmDateType::class, [
                'label' => 'Date estimation de paiement',
                'attr' => [
                    'readonly' => 'true'
                ]
            ])
            ->add('date', CrmDateType::class, [
                'label' => 'Date de facturation',
                'attr' => [
                    'readonly' => 'true'
                ]
            ])
            ->add('numero', TextType::class, [
                'label' => 'Numéro Facture',
                'attr' => [
                    'readonly' => true
                ]
            ])
            ->add('montant', CrmMoneyType::class, [
                'label' => 'Tarif normal'
            ])
            // APR-116 : Suppression tarif réduit
//            ->add('remise', CrmMoneyType::class, [
//                'label' => 'Tarif réduit',
//                'required' => false
//            ])
            ->add('ht', CrmMoneyType::class, [
                'label' => 'HT TOTAL',
                'attr' => [
                    'readonly' => 'true'
                ]
            ])
            // Retour client : champ payeur toujours = client pour dom/loc
//            ->add('payeur', EntityType::class, [
//                'class' => Payeur::class,
//                'choice_label' => 'libelle',
//                'required' => false,
//                'placeholder' => 'Selectionnez'
//            ])
            ->add('tvaTotal', CrmMoneyType::class, [
                'label' => 'TVA TOTAL',
                'attr' => ['readonly' => true]
            ])
            ->add('tva', NumberType::class, [
                'attr' => [
                    'class' => 'taux-tva',
                ],
                'label' => 'TVA',
                'data' => empty($options['data']->getTva()) ? 20 : $options['data']->getTva()
            ])
            ->add('ttc', CrmMoneyType::class, [
                'label' => 'TTC TOTAL',
                'attr' => ['readonly' => true]
            ])
            ->add('structure', EntityType::class, [
                'class' => Structure::class,
                'choice_label' => 'structure',
                'choices' => $this->structureRepository->findBy(['id' => StructureConst::PROFORM])
            ])
            ->add('domiciliation', EditDomByFactType::class,["attr" => ["editform" => $collaborateur]])
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
                    'data_class' => FactDomNote::class
                ]

            ])
        ;
    }

    public function getStatutChoice()
    {
        $status = $this->statutRepository->findAll();

        $statutChoice = ['Selectionnez' => ''];

        foreach ($status as $factureStatut) {
            $statutChoice[$factureStatut->getStatut()] = $factureStatut->getId();
        }

        return $statutChoice;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FactureDomiciliation::class,
        ]);
    }
}