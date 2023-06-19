<?php

namespace App\Form;

use App\Entity\Domiciliation;
use App\Entity\FormationDossier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditStatusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        if ($options['source'] == 'domiciliation/location') {
            $options['data_class'] = Domiciliation::class;
            $builder
                ->add('statutPaiementCommission', ChoiceType::class, [
                    'choices'   => $options['stat_choice'],
                    'required' => false
                ])
            ;
        } else {
            $builder
                ->add('payencaiss', ChoiceType::class, [
                    'choices'   => $options['stat_choice'],
                    'required' => false
                ])
            ;
        }
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'stat_choice' => null,
            'source' => 'dossier'
        ]);
    }
}
