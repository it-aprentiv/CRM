<?php
/**
 * Created by PhpStorm.
 * User: kella
 * Date: 06/12/2019
 * Time: 16:50
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class StagiaireType extends AbstractType
{
    private $datetimetransformer;
    public function __construct(
        DateTimeTransformer $datetimetransformer
    )
    {
        $this->datetimetransformer = $datetimetransformer;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', HiddenType::class, [
                'required' => false,
                'attr' => array(
                    'readonly' => true,
                ),
            ])
            ->add('nom',TextType::class, [
                'label' => 'Nom',
                'required' => false,
            ])
            ->add('prenom',TextType::class, [
                'label' => 'Prenom',
                'required' => false,
            ])
            ->add('dateNaissance',DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'required' => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'class' => 'js-datepicker',
                    'autocomplete' => 'off'
                ],
            ])
            ->add('niveauetude', ChoiceType::class, [
                'label' => "Niveau d'etude",
                'choices' => [
                    'Sans études' => 'Sans études',
                    'BEP' => 'BEP',
                    'CAP' => 'CAP',
                    'BAC' => 'BAC',
                    'BAC+2' => 'BAC+2',
                    'BAC+3' => 'BAC+3',
                    'BAC+4' => 'BAC+4',
                    'BAC+5' => 'BAC+5',
                    'Pas connu' => 'Pas connu',
                ],
            ])
            ->add('nsecuritesocial',TextType::class, [
                'label' => 'N° sécurité social',
                'required' => false,
                'attr' => [
                    'class' => 'num_secu_social_format',
                    'pattern' => "[0-9]{13}",
                    'oninvalid' => "this.setCustomValidity('Format incorrect (13 chiffres)')",
                    'onchange' => "this.setCustomValidity('')"
                ]
            ])
            ->add('Email',TextType::class, [
                'label' => 'Email',
            ]);
        //$builder->get("dateNaissance")->addModelTransformer($this->datetimetransformer);
        //$builder->get("dateNaissance")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Contact::class,
        ));
    }

}