<?php
/**
 * Created by PhpStorm.
 * User: kella
 * Date: 11/12/2019
 * Time: 17:51
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Avoir;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\Type\CrmMoneyType;


class AvoirType extends AbstractType
{
    private $datetimetransformer;

    public function __construct(
        DateTimeTransformer $datetimetransformer
    ) {
        $this->datetimetransformer = $datetimetransformer;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'dateCreation',
                DateType::class,
                [
                    'widget' => 'single_text',
                    'html5' => false,
                    'attr'          => ['class' => 'datepickerFacture form-control', 'readonly' =>$options['isReadOnly'], 'autocomplete' => 'off'],
                    'required'      => false,
                    'input' => 'datetime',
                    'format' => 'dd-MM-yyyy',
                ]
            )
            ->add('ref', TextType::class,
                [
                    'attr' => [
                        'readonly' => $options['isReadOnly'] && $options['legal_mode'],
                        'class' => 'readonly-numero reference-in-collection'
                    ],
                ]
            )
            ->add('totalHt', CrmMoneyType::class,
                ['label'=>'Montant'])
            ->add('ref', TextType::class,
                ['label'=>'N° Voir'])
            ->add('opcaClt', ChoiceType::class, array(
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array('AVOPCA'=>'AVOPCA', 'AVOCLT'=>'AVOCLT'),
                'required' => false,
                'attr'          => ['readonly' =>$options['isReadOnly']],
            ))
        ;
        $builder->get("dateCreation")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateCreation")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avoir::class,
            'isReadOnly' => false,
            'legal_mode' => true
        ]);
    }

}