<?php
/**
 * file FactureDomiciliationType.php
 */

namespace App\Form;

use App\Entity\FactureDomiciliation;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\DataTransformer\MoneyTransformer;
use App\Form\Type\CrmMoneyType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureDomiciliationType extends AbstractType
{
    private $dateTimeTransformer;
    private $moneyTransformer;

    public function __construct(DateTimeTransformer $dateTimeTransformer, MoneyTransformer $moneyTransformer) {
        $this->dateTimeTransformer = $dateTimeTransformer;
        $this->dateTimeTransformer->setFormat('d/m/Y');
        $this->dateTimeTransformer->setNullable(true);
        $this->moneyTransformer = $moneyTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $bDisabled = $options['default_disabled'];
        $builder->add('idfacturedom', HiddenType::class, [
                'attr' => [
                    'disabled' => $bDisabled
                ],
                'required' => false
            ])
            ->add('numero', TextType::class, [
                'label' => 'N° Facture',
                'attr' => [
                    'disabled' => $bDisabled,
//                    'readonly' => true  // APR-222 : Pouvoir modifier la référence de la facture
                ]
            ])
            ->add('date', TextType::class, [
                'label' => 'Date',
                'attr' => [
                    'disabled' => $bDisabled,
                    'class' => 'datepicker',
                    'autocomplete' => 'off'
                ]
            ])
            ->add('montant', CrmMoneyType::class, [
                'invalid_message' => 'Le montant n\'est pas valide',
                'attr' => [
                    'disabled' => $bDisabled,
                    'class' => 'money-format'
                ]
            ])
            ->add('depotGarantie', CrmMoneyType::class, [
                'label' => 'Dépôt de garantie',
                'required' => false,
                'attr' => [
                    'disabled' => $bDisabled,
                    'class' => 'money-format'
                ]
            ])
            ->add('remise', CrmMoneyType::class, [
                'label' => 'Tarif reduit',
                'required' => false,
                'attr' => [
                    'disabled' => $bDisabled,
                    'class' => 'money-format'
                ]
            ])
            ;

        $builder->get('date')->addModelTransformer($this->dateTimeTransformer);
    }

    public function buildView(FormView $view, FormInterface $form, array $options) {
        parent::buildView($view, $form, $options);

        // ajouter une variable à vérifier en twig
        $view->vars = array_merge($view->vars, [
            'display' => !$options['default_disabled']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => FactureDomiciliation::class,
            'default_disabled' => false
        ]);
    }
}