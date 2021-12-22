<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\ContactAdresseType;
use App\Entity\TypeAdresse;
use App\Form\DataTransformer\TypeAdresseTransformer;
use App\Form\DataTransformer\VilleTransformer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class AdresseType extends AbstractType
{

    private $villetransformer;
    private $typeadresseTransformer;

    public function __construct(VilleTransformer $villetransformer, TypeAdresseTransformer $typeadresseTransformer)
    {
        $this->villetransformer = $villetransformer;
        $this->typeadresseTransformer = $typeadresseTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse', TextType::class,[
                'label'             => 'N°,voie,nom de la voie',
                'label_attr'        => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'          => ['class' => 'col-sm-3'],
                'required'          => false,
            ])
            ->add('codePostal', TextType::class,[
                'label'             => 'Code postal',
                'label_attr'        => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'          => ['class' => 'col-sm-2'],
                'attr'              => [ 'class' => 'number-format'],
                'required'          => false,
            ])
            ->add('idVille', ChoiceType::class, [
                'label'             => 'Ville',
                'label_attr'        => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'          => ['class' => 'col-sm-2'],
                'required'          => false,
                'empty_data'        => null,
                'attr'              => [ 'class' => 'contact_adresse_ville', ]
            ])
            ->add('principal', CheckboxType::class, [
                'label'             => 'Principale',
                'label_attr'        => [ 'class' => "font-weight-bold text-center col-sm-12 label-checkbox-c"],
                'attr'              => ['class' => 'checkbox-c'],
                'row_attr'          => ['class' => 'col-sm-1'],
                'required'          => false,
            ])
            ->add('type_adresse', EntityType::class, [
                'class'             => ContactAdresseType::class,
                'placeholder' => 'Sélectionnez',
                'choice_label'      => 'typeAdresse',
                'label'             => 'Type Adresse',
                'label_attr'        => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'          => ['class' => 'col-sm-2'],
                'required'          => false,
            ])
            ->add('comp_adresse', TextType::class,[
                'label'             => 'Infos accès',
                'label_attr'        => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'          => ['class' => 'col-sm-2'],
                'required'          => false,
            ]);
        $builder->get("idVille")->addModelTransformer($this->villetransformer);
//        $builder->get("type_adresse")->addModelTransformer($this->typeadresseTransformer);
        $builder->get("idVille")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
            'attr' => [
                'class' => "adresseformadded"
            ]
        ]);
    }
}
