<?php

namespace App\Form;

use App\Repository\UtilisateurRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurFilterType extends AbstractType
{

    protected $utilisateurRepository;

    public function __construct(UtilisateurRepository $utilisateurRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPrenom')
            ->add('poste', ChoiceType::class, [
                'choices' => $this->getAvailablePostesChoices(),
                'required' => false,
                'placeholder' => '-- POSTE --'
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return "";
    }

    private function getAvailablePostesChoices() {
        $postes = $this->utilisateurRepository->getAvailablePostes();
        $choices = array();

        foreach ($postes as $key => $poste) {
            if (!empty($poste['poste'])) {
                $choices[$poste['poste']] = $poste['poste'];
            }
        }
        
        return $choices;
    }

}
