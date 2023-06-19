<?php

namespace App\Form;

use App\Entity\ContactType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactTypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idb')
            ->add('typeContact')
            ->add('typeFrmJuri')
            ->add('idFrmJuri')
            ->add('idbFrmJuri');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactType::class,
        ]);
    }
}
