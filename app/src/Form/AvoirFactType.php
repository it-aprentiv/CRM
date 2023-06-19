<?php


namespace App\Form;

use App\Entity\Avoir;
use App\Entity\Facture;
use App\Form\Type\CrmDateType;
use App\Form\Type\CrmMoneyType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvoirFactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('idStructure', StructureType::class)
            ->add('dateCreation', CrmDateType::class, [
                'required' => false,
                'attr' => [
                    'readOnly' => $this->setReadOnly($options['context']),
                    'class' => 'js-datepicker text-center', 
                    'autocomplete' => 'off'
                ]
            ])
            ->add('natureAvoir', TextType::class, [
                'label'=>'Nature Avoir',
                'required' => false,
            ])
            ->add('ref', null, [
                'label' => 'N°Avoir',
                'attr' => [
                    'readonly' => true
                ]
            ])
            ->add('mntTtc', HiddenType::class)
            ->add('montantHTN', CrmMoneyType::class, [
                'label' => 'HTN',
                'mapped' => false,
                'required' => false,
                'data' => $options['data'] ? $options['data']->getTotalHt() : "",
                'attr'      => [
                    'class' => 'mnthtnfactavoir money-format',
                    'data-ttlht' => 'ttlhtfctavr',
                    //'readOnly' => $this->setReadOnly($options['context'])
                ]
            ])
            ->add('totalHt', CrmMoneyType::class, [
                'label' => 'TOTAL HT',
                'required' => false,
                'attr' => [
                    'class' => 'ttlhtfctavr money-format',
                    'readonly' => $this->setReadOnly($options['context'])
                ],
            ])
            ->add('pourcentageTva', PercentType::class, [
                'invalid_message' => 'Le montant n\'est pas valide',
                'attr' => [
                    'data-ht' => '#facture_avoir_idAvoirLiee_totalHt',
                    'data-tva' => '#facture_avoir_idAvoirLiee_mntTva',
                    'data-ttc' => '#facture_avoir_idAvoirLiee_totalTtc',
                    'class' => 'money-format taux-tva-factavoir',
                ],
                'required' => false,
                'type' => 'integer',
                'data' => $options['data'] && $options['data'] instanceof Avoir ? $options['data']->getPourcentageTva() : 0
            ])
            ->add('mntTva', CrmMoneyType::class, [
                'attr' => [
                    'class' => 'money-format',
                    'readonly' => $this->setReadOnly($options['context'])
                ],
                'label' => 'MONTANT TVA',
                'required' => false,
            ])
            ->add('totalTtc', CrmMoneyType::class, [
                'attr' => [
                    'readonly' => $this->setReadOnly($options['context'])
                ],
                'label' => 'TOTAL TTC',
                'required' => false,
            ])
            ->add('intituleFacture', TextareaType::class,[
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avoir::class,
            'context' => 'edit'
        ]);
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
}