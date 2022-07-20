<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use KMS\FroalaEditorBundle\Form\Type\FroalaEditorType;

class MailingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('from', ChoiceType::class, [
                'label' => 'Email de l\'expéditeur',
                'choices' => [
                    'no-reply@aprentiv.com' => 'no-reply@aprentiv.com',
                    'contact@aprentiv.com' => 'contact@aprentiv.com',
                    'pascal@aprentiv.com' => 'pascal@aprentiv.com',
                ],
                'required' => true,
            ])
            ->add('to', TextType::class, [
                'label' => 'Email du destinataire',
                'required' => true,
            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet',
                'required' => true,
            ])
            ->add('body', FroalaEditorType::class, [
                'language'      => 'fr',
                'toolbarSticky' => true,
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
