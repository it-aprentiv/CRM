<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 10/12/2019
 * Time: 20:35
 */

namespace App\Form;

use App\Entity\Dossier;
use App\Entity\FormationSuiviOrdredemission;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class SuiviMissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('id', HiddenType::class, [
                'required' => false,
                'attr' => array(
                    'readonly' => true,
                ),
            ])
            ->add('recepfac', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Réception de la facture',
                'html5' => false,
                'attr' => [
                    'class' => 'js-datepicker'
                ],
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('moisfac', ChoiceType::class, [
                'required' => true,
                'label' => 'Mois de la formation',
                'choices' => [
                    'Janvier'   => '1',
                    'Février'   => '2',
                    'Mars'      => '3',
                    'Avril'     =>'4',
                    'Mai'       =>'5',
                    'Juin'      =>'6',
                    'Juillet'   =>'7',
                    'Août'      =>'8',
                    'Septembre' =>'9',
                    'Octobre'   =>'10',
                    'Novembre'  =>'11',
                    'Decembre'  =>'12'
                ]
            ])
            ->add('heurefait', NumberType::class, [
                'required' => false,
                'label' => "Nombre d'heure fait dans le mois"
            ])
            ->add('heurerestant', NumberType::class, [
                'required' => false,
                'label' => "Nombre d'heure restant"
            ])
            ->add('datefac', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Date de la facture',
                'html5' => false,
                'attr' => [
                    'class' => 'js-datepicker'
                ],
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('numfac', TextType::class, [
                'required' => false,
                'label' => 'N° facture',
                'attr' => ['placeholder' => 'FA-aaaz-xxx']
            ])
            ->add('montantht', MoneyType::class, [
                'required' => false,
                'label' => 'Montant HT de la facture'
            ])
            ->add('datevalidation', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Date validation',
                'html5' => false,
                'attr' => [
                    'class' => 'js-datepicker'
                ],
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => FormationSuiviOrdredemission::class,
        ]);
    }

}