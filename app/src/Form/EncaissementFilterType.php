<?php

namespace App\Form;

use App\Entity\Encaissement;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Repository\CommissionStatutRepository;
use App\Repository\EncaissementRepository;
use App\Repository\FormationDossierRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EncaissementFilterType extends AbstractType
{
    private $dateTimeTransformer;
    private $formationDossierRepository;
    private $encaissementRepository;
    private $commissionStatutRepository;


    public function __construct(DateTimeTransformer $dateTimeTransformer, 
        FormationDossierRepository $formationDossierRepository,
        EncaissementRepository $encaissementRepository,
        CommissionStatutRepository $commissionStatutRepository
    ) {
        $this->dateTimeTransformer = $dateTimeTransformer;
        $this->dateTimeTransformer->setFormat('d/m/Y');
        $this->dateTimeTransformer->setNullable(true);
        $this->formationDossierRepository = $formationDossierRepository;
        $this->encaissementRepository = $encaissementRepository;
        $this->commissionStatutRepository = $commissionStatutRepository;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('source', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    Encaissement::SOURCE_DOSSIER => Encaissement::SOURCE_DOSSIER,
                    Encaissement::SOURCE_DOMLOC => Encaissement::SOURCE_DOMLOC
                ],
                'placeholder' => '--Source--'
            ])
            ->add('numDossier')
            ->add('numFacture')
            ->add('payeur', ChoiceType::class, [
                'required' => false,
                'choices' => $this->getPayeursChoices(),
                'placeholder' => '--Payeur--'
            ])
            ->add('dateEncaissement', Type\CrmDateType::class, [
                'required' => false
            ])
            ->add('dateEncaissement2', Type\CrmDateType::class, [
                'required' => false
            ])
            ->add('tauxCommission', ChoiceType::class, [
                'choices' => $this->getTauxCommissionsChoices(),
                'required' => false,
                'placeholder' => '--Comm--'
            ])
            ->add('commercial', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('statutCommission', ChoiceType::class, [
                'choices' => $this->getStatutsCommissionsChoices(),
                'required' => false,
                'placeholder' => '--Statut Commission--'
            ])
        ;
        
        // Modification format date
        $builder->get('dateEncaissement')->addModelTransformer($this->dateTimeTransformer);
        $builder->get('dateEncaissement2')->addModelTransformer($this->dateTimeTransformer);
        // Hack Autocompletion commercial
        $builder->get('commercial')->resetViewTransformers();
    }
    
    private function getTauxCommissionsChoices() {
        $tauxCommissions = $this->formationDossierRepository->getTauxCommissions();
        $choices = array();
        
        foreach ($tauxCommissions as $taux) {
            $choices[$taux['tauxCom']] = $taux['tauxCom'];
        }
        
        return $choices;
    }
    
    /**
     * Liste des payeurs
     * @return type
     */
    private function getPayeursChoices() {
        $payeurs = $this->encaissementRepository->getPayeurs();
        $choices = array();
        
        foreach ($payeurs as $payeur) {
            $choices[$payeur['payeur']] = $payeur['payeur'];
        }
        
        return $choices;
    }
    
    /**
     * Liste des statuts commissions
     */
    private function getStatutsCommissionsChoices() {
        $statuts = $this->commissionStatutRepository->getAvailableStatuts();
        $choices = array();
        
        foreach ($statuts as $statut) {
            $choices[$statut['statut']] = $statut['statut'];
        }
        
        return $choices;
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
    
}
