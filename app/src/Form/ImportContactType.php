<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ImportContactType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       // make a form using contact options
       $builder
            ->add("path",HiddenType::class,array(
                "label"=>"",
                "empty_data"=>$options["data"]["path"],
            ))
            ->add("nomSociete",ChoiceType::class,[
                "label"=>"Société",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("nomContact",ChoiceType::class,[
                "label"=>"Nom du contact",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("prenomContact",ChoiceType::class,[
                "label"=>"Prénom du contact",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("noSiret",ChoiceType::class,[
                "label"=>"Numéro de siret",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("noNaf",ChoiceType::class,[
                "label"=>"Numéro NAF",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("sexe",ChoiceType::class,[
                "label"=>"Sexe",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("effectif",ChoiceType::class,[
                "label"=>"Effectif",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("typeSociete",ChoiceType::class,[
                "label"=>"Type de société",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("secteurActivite",ChoiceType::class,[
                "label"=>"Secteur d'activité",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("adresse",ChoiceType::class,[
                "label"=>"Adresse",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("codePostal",ChoiceType::class,[
                "label"=>"Code postal",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("ville",ChoiceType::class,[
                "label"=>"Ville",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("qualite",ChoiceType::class,[
                "label"=>"Qualité",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("telephone",ChoiceType::class,[
                "label"=>"Téléphone",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("email",ChoiceType::class,[
                "label"=>"Email",
                "choices"=>$options["data"]["choices"]
            ])
            ->add("siteWeb",ChoiceType::class,[
                "label"=>"Site web",
                "choices"=>$options["data"]["choices"]
            ]);
    
    }
   
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}