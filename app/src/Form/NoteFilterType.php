<?php


namespace App\Form;


use App\Constants\Note as NoteConstant;
use App\Entity\ContactNote;
use App\Entity\DevisNote;
use App\Entity\DomiciliationNote;
use App\Entity\DossierNote;
use App\Entity\EncaissementNote;
use App\Entity\FactureNote;
use App\Entity\Filter\NoteFilter;
use App\Entity\FormationDossierNote;
use App\Entity\LeadNote;
use App\Entity\NoteAction;
use App\Entity\NoteActionStatut;
use App\Form\Type\CrmDateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $aFilterableNote = [
            ContactNote::NOM_TABLE, DevisNote::NOM_TABLE, FormationDossierNote::NOM_TABLE,
            FactureNote::NOM_TABLE, EncaissementNote::NOM_TABLE, DomiciliationNote::NOM_TABLE, 
            LeadNote::NOM_TABLE
        ];
        $aNomTable = [];
        foreach ($aFilterableNote as $nom){
            $sLib = NoteConstant::getTableLibelle($nom);
            $aNomTable[$sLib] = $nom;
        }

        $builder
            ->add('nomTable', ChoiceType::class, [
                'choices' => $aNomTable,
                'placeholder' => "Module",
                'required' => false
            ])
            ->add('nomStr')
            ->add('dateAdd', CrmDateType::class, [
                'required' => false
            ])
//            ->add('nomutilisateur')
            ->add('author', EntityType::class, [
                'class' => \App\Entity\Utilisateur::class,
                'required' => false,
                'placeholder' => "Auteur"
            ])
            ->add('texteNote')
            ->add('nomAction', EntityType::class, [
                'required' => false,
                'class' => NoteAction::class,
                'placeholder' => "Action",
                'choice_label' => 'nom_action'
            ])
            ->add('dateAction', CrmDateType::class, [
                'required' => false
            ])
            ->add('rappelleur', EntityType::class, [
                'class' => \App\Entity\Utilisateur::class,
                'required' => false,
                'placeholder' => "Responsable",
            ])
            // ajouté le 14/04 pour mettre en place le champ 'statut' pour filtrer la recherche par statut.
            ->add('actionStatut', EntityType::class,[
                'required'      => false,
                'class' => NoteActionStatut::class,
                'placeholder' => 'Statut',
                'choice_label'  => 'action_statut',
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