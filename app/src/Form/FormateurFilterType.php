<?php


namespace App\Form;


use App\Entity\FormateurStatut;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormateurFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomStr')
            ->add('nom')
            ->add('prenom')
            ->add('competence')
            ->add('statut', EntityType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Statut du formateur'
                ],
                'class' => FormateurStatut::class,
                'choice_label' => 'statut',
            ])
        ;
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