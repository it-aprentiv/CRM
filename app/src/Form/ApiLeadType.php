<?php


namespace App\Form;

use App\Entity\Civilite;
use App\Entity\ContactNote;
use App\Entity\LeadNote;
use App\Form\DataTransformer\CiviliteTransformer;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApiLeadType extends AbstractType
{
    private $civilitetransformer;

    public function __construct(CiviliteTransformer $civilitetransformer)
    {
        $this->civilitetransformer = $civilitetransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $exceptedcollab = null;
    /*    if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }*/
        $builder
            ->add('societe', TextType::class, [
                'required' => false,
                'label'=>'Société',
                'attr'=>[
                    'placeholder'=>'Veuillez renseigner le nom de votre société si vous appartenez à une'
                ]
                
            ])
            ->add('civilite', EntityType::class, [
                'class'         => Civilite::class,
                'choice_label'  => 'civilite',
                'required'      => false,
                'label'=>'Civilité'
            ])
            ->add('nom', TextType::class, [
                'required' => true,
                'attr'=>[
                    'placeholder'=>''
                ],
                'label'=>'Nom *'
            ])
            ->add('prenom', TextType::class, [
                'label'=>'Prénom *',
                'required' => true,
                'attr'=>[
                    'placeholder'=>''
                ],
            ])
            ->add('telephone', TelType::class, [
                'label'=>'Téléphone *',
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'label'=>'Email *'
            ])
            ->add('ville', ChoiceType::class, [
                'choices'=>[
                    'Paris'=>'Paris',
                    'Marseille'=>'Marseille'
                ],
                'placeholder'=>'',
                'required' => true,
                'attr'=>[

                ],
                'label'=>'Ville *'
            ])
            ->add('origine', ChoiceType::class,[
                'choices' => [
                    'Site web' => 'Site web',
                    'Réseaux sociaux' => 'Reseaux sociaux',
                    'Leboncoin' => 'Leboncoin',
                    'Google' => 'Google',
                    'Email' => 'Email',
                    'Bouche à oreille' => 'Bouche a oreille',
                    'EDOF' => 'EDOF',
                    'Pole Emploi' => 'Pole Emploi',
                    'Autre' => 'Autre'
            ],
            'attr'=>[
                'hidden'=>'hidden',
            ]])
            ->add('statut', ChoiceType::class,[
                'label' =>false,
                'choices' => [
                    'En cours' => 'En cours',
                    'Devenu client' => 'Devenu client',
                    'Devenu prospect' => 'Devenu prospect',
                    'Sans suite' => 'Sans suite',
                    
                ],
                'attr'=>[
                    'hidden'=>'hidden',
                ]])
            ->add('formation', TextType::class,[
                'required' => true,
                'label'=>'Formation*'
            ])
            ->add('typerequest', ChoiceType::class,[
                'label'=>'Type de demande *',
                'choices'=>[
                    'Particulier' =>'Particulier',
                    'Entreprise'=>'Entreprise'
                ],
                'required' => true
            ])
            ->add('financement', ChoiceType::class,[
                'choices'=>[
                    'Pôle emploi' =>'Pôle emploi',
                    'Compte personnel de formation (CPF)'=>'Compte personnel de formation (CPF)',
                    'Pôle emploi' =>'Pôle emploi',
                    'Fonds personnels'=>'Fonds personnels',
                    'Opérateur de compétence (OPCO)'=>'Opérateur de compétence (OPCO)',
                    'Autre'=>'Autre'
                ],
                'label'=>'Financement',
                'placeholder'=>'',
                'required'=>false,
                'attr'=>[
                ]
            ])
            ->add('periode', ChoiceType::class,[
                'label'=> 'Quand envisagez-vous de faire la formation ?',
                'choices'=>[
                    'Dès que possible'=>'Dès que possible',
                    'Dans 1 mois'=>'Dans 1 mois',
                    'Dans 3 mois'=>'Dans 3 mois',
                    'Dans plus de 3 mois '=>'Dans plus de 3 mois'
                ]
            ])
            ->add('message', TextareaType::class,[
                'empty_data' => '',
                'required'=>false
            ])
            ->add('envoyer', SubmitType::class,[
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn btn-primary m-auto pr-5 pl-5'
                ]
            ])
            ;
            $builder->get("civilite")->addModelTransformer($this->civilitetransformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['csrf_protection' => false]);
    }

    public function getBlockPrefix()
    {
        return "";
    }


}