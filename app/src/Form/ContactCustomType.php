<?php

namespace App\Form;

use App\Constants\Contact as ContactConst;
use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use App\Entity\Civilite;
use App\Entity\Qualite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\DataTransformer\CiviliteTransformer;
use App\Form\DataTransformer\QualiteTransformer;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactCustomType extends AbstractType
{

    private $civilitetransformer;
    private $qualitetransformer;

    public function __construct(CiviliteTransformer $civilitetransformer,
                                QualiteTransformer $qualitetransformer)
    {
        $this->civilitetransformer = $civilitetransformer;
        $this->qualitetransformer = $qualitetransformer;

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCivilite', EntityType::class, [
                'class'         => Civilite::class,
                'choice_label'  => 'civilite',
                'required'      => true,
                'label' => "Civilité",
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center col-sm-1'],
            ])
            ->add('nom', TextType::class,[
                'required' => true,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center col-sm-1'],
            ])
            ->add('prenom', TextType::class,[
                'required' => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center col-sm-1'],
            ])
            ->add('qualite', EntityType::class,[
                'class'         => Qualite::class,
                'choice_label'  => 'nom_qualite',
                'label'         => 'Qualité',
                'required'      => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center col-sm-1'],
            ])
            ->add('interlocuteur', ChoiceType::class,[
                'label'     => 'Interlocuteur',
                'choices'   => [
                    "Non" => ContactConst::NOT_INTERLOCUTEUR,
                    "Oui" => ContactConst::IS_INTERLOCUTEUR
                ],
                'required'  => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center"
                ],
                'row_attr' => ['class' => 'text-center col-sm-1'],
                'data' => "oui"
            ])
            ->add("Telephone", TextType::class,[
                'required' => true,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'attr' => [ 'class' => 'telephone-format', 'pattern' => '.{14,14}', "maxlength" =>"14"],
                'row_attr' => ['class' => 'text-center col-sm-2'],
             ])
            ->add("Portable", TextType::class,[
                'required' => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-2"
                ],
                'attr' => [ 'class' => 'telephone-format', 'pattern' => '.{14,14}', "maxlength" =>"14"],
                'row_attr' => ['class' => 'text-center col-sm-2'],
            ])
            ->add("Email", EmailType::class,[
                'required' => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center col-sm-2'],
            ])
            ->add("Fax", TextType::class,[
                'required' => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'attr' => [ 'class' => 'telephone-format', 'pattern' => '.{14,14}', "maxlength" =>"14"],
                'row_attr' => ['class' => 'text-center col-sm-1'],
            ])
            ;
        $builder->get("idCivilite")->addModelTransformer($this->civilitetransformer);
        $builder->get("qualite")->addModelTransformer($this->qualitetransformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'attr' => [
                'class' => "p-r"
            ]
        ]);
    }
}