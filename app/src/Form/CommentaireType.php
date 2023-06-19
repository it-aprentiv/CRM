<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 11/12/2019
 * Time: 09:44
 */

namespace App\Form;

use App\Entity\Collaborateur;
use App\Entity\DossierNote;
use App\Entity\NoteActionStatut;
use App\Repository\CollaborateurRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\NoteAction;
use App\Repository\NoteActionRepository;
use App\Repository\NoteActionStatutRepository;
use App\Form\DataTransformer\DateTimeTransformer;

class CommentaireType extends AbstractType
{
    private $datetimetransformer;
    public function __construct(
        DateTimeTransformer $datetimetransformer
    )
    {
        $this->datetimetransformer = $datetimetransformer;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateAdd', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy'
            ])
            ->add('texteNote', TextType::class, [
                'required' => false,
                'label' => 'Commentiares',
            ])
            ->add('idNomAction', EntityType::class, [
                'class' => NoteAction::class,
                'placeholder' => 'Selectionnez',
                'choice_label' => 'nomAction',
                'label' => 'Action',
                'required' => false,
            ])
            ->add('dateAction', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('idUserAction', EntityType::class, [
                'class' => Collaborateur::class,
                'required' => false,
                'placeholder' => 'Selectionnez',
                'choice_label' => 'nomPrenom',
                'label' => 'Qui',
                'query_builder' => function (CollaborateurRepository $cr) {
                    return $cr->getQueryCollaborateurList();
                }
            ])
            ->add('idActionStatut', EntityType::class, [
                'required' => false,
                'class' => NoteActionStatut::class,
                'placeholder'=> 'Selectionnez',
                'choice_label' => 'actionStatut',
                'label' => 'Statut action',
            ])
        ;
        $builder->get("dateAdd")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateAdd")->resetViewTransformers();
        $builder->get("dateAction")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateAction")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => DossierNote::class,
        ]);
    }
}