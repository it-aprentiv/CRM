<?php


namespace App\Form;

use App\Entity\Civilite;
use App\Entity\ContactNote;
use App\Entity\LeadNote;
use App\Form\DataTransformer\CiviliteTransformer;
use App\Repository\CollaborateurRepository;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeadType extends AbstractType
{
    private $civilitetransformer;

    public function __construct(CiviliteTransformer $civilitetransformer)
    {
        $this->civilitetransformer = $civilitetransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $exceptedcollab = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }
        $builder
            ->add('societe', TextType::class, [
                'required' => false
            ])
            ->add('civilite', EntityType::class, [
                'class'         => Civilite::class,
                'choice_label'  => 'civilite',
                'required'      => false,
            ])
            ->add('nom', TextType::class, [
                'required' => false
            ])
            ->add('prenom', TextType::class, [
                'required' => false
            ])
            ->add('telephone', TextType::class, [
                'required' => false
            ])
            ->add('email', TextType::class, [
                'required' => false
            ])
            ->add('ville', TextType::class, [
                'required' => false
            ])
            ->add('commercial', EntityType::class, [
                'class' => \App\Entity\Collaborateur::class,
                'required' => false,
                'choice_label' => 'nomPrenom',
                'attr' => [
                    'required' => 'required',
                ],
                'query_builder' => function (CollaborateurRepository $c) use ($exceptedcollab) {
                    return $c->findAllCollaborateur($exceptedcollab);
                },
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
            ]])
            ->add('statut', ChoiceType::class,[
                'choices' => [
                    'En cours' => 'En cours',
                    'Devenu client' => 'Devenu client',
                    'Devenu prospect' => 'Devenu prospect',
                    'Sans suite' => 'Sans suite',
            ]])
            ->add('commentaires', CollectionType::class,[
                "entry_type"    => NoteType::class,
                'attr'          => [ 'label' => false ],
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'required'      => false,
                'entry_options' => ['data_class' => LeadNote::class]
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