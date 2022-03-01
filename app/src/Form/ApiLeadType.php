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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
                'label'=>'Société'
            ])
            ->add('civilite', EntityType::class, [
                'class'         => Civilite::class,
                'choice_label'  => 'civilite',
                'required'      => false,
            ])
            ->add('nom', TextType::class, [
                'required' => true
            ])
            ->add('prenom', TextType::class, [
                'required' => true
            ])
            ->add('telephone', TextType::class, [
                'required' => true
            ])
            ->add('email', TextType::class, [
                'required' => true
            ])
            ->add('ville', TextType::class, [
                'required' => false
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
                'required' => true
            ])
            ->add('typerequest', ChoiceType::class,[
                'label'=>'Type de demande',
                'choices'=>[
                    'Particulier' =>'Particulier',
                    'Entreprise'=>'Entreprise'
                ],
                'required' => true
            ])
            ->add('financement', ChoiceType::class,[
                'choices'=>[
                    'Particulier' =>'Particulier',
                    'Entreprise'=>'Entreprise'
                ],
                'label'=>'Financement',
                'attr'=>[
                    'placeholder'=>'Financement'
                ]
            ])
            ->add('periode', ChoiceType::class,[
                'choices'=>[
                    'Dés que possible'=>'Dés que possible',
                    'Dans 1 mois'=>'1 mois',
                    'Dans 3 mois'=>'3 mois',
                    'Dans 3 mois '=>'3 mois'
                ]
            ])
            ->add('message', TextareaType::class)
            ->add('envoyer', SubmitType::class,[
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn btn-primary'
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