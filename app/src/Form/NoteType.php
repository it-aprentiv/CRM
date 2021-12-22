<?php

namespace App\Form;

use App\Entity\Collaborateur;
use App\Entity\Note;
use App\Entity\NoteAction;
use App\Entity\NoteActionStatut;
use App\Entity\Utilisateur;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\DataTransformer\NoteActionTransformer;
use App\Form\DataTransformer\StatusActionTransformer;
use App\Form\Type\DateNowType;
use App\Repository\NoteActionStatutRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class NoteType extends AbstractType
{

    private $noteactiontransformer;
    private $noteactionstatuttransformer;
    private $datetimetransformer;
    private $security;


    public function __construct(NoteActionTransformer $noteactiontransformer,
                                StatusActionTransformer $statusactiontransformer,
                                DateTimeTransformer $datetimetransformer,
                                NoteActionStatutRepository $noteactionstatutrepository,
                                Security $security)
    {
        $this->noteactiontransformer = $noteactiontransformer;
        $this->noteactionstatuttransformer = $statusactiontransformer;
        $this->datetimetransformer = $datetimetransformer;
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $this->security->getUser();
        $aAllField = array_fill_keys(['dateAdd', 'texteNote', 'idAction', 'dateAction', 'idUserAction', 'idActionStatut'], false);
        $aDisabled = array_fill_keys($options['disabled_fields'], true);
        $aDisableStatus = array_merge($aAllField, $aDisabled);
        $exceptedcollab = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }
        $builder
            ->add('id', HiddenType::class, [
                'required' => false
            ])
            ->add('dateAdd', DateNowType::class, [
                'widget'        => 'single_text',
                'html5'         => false,
                'attr'          => ['class' => 'js-datepicker-note text-center note-date-add', 'required' => true],
                'required'      => true,
                'row_attr'      => ['class' => 'col-sm-2'],
                'format' => $options['date_format'],
                'disabled' => $aDisableStatus['dateAdd'],
                'label'         => false
            ])
            ->add('texteNote', TextareaType::class,[
                'label'     => false,
                'required' => false,
                'attr'      => ["required" => false, 'class' => 'note-texte'],
            ])
            ->add("idAction", EntityType::class,[
                'class' => NoteAction::class,
                'choice_label'  => 'nom_action',
                'required'      => false,
                'disabled' => $aDisableStatus['idAction'],
                'label'         => false,
                'row_attr' => ['class' => 'col-sm-2'],
                'placeholder' => '',
                'attr' => ['class' => "note-action"]
            ])
            ->add('dateAction', DateType::class, [
                'widget'        => 'single_text',
                'html5'         => false,
                'attr'          => ['class' => 'js-datepicker-note text-center note-date-action', 'autocomplete' => 'off'],
                'required'      => false,
                'row_attr'      => ['class' => 'col-sm-2'],
                'format' => $options['date_format'],
                'disabled' => $aDisableStatus['dateAction'],
                'label'         => false,
                'empty_data'    => null
            ])
            ->add('idUserAction', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'nomutilisateur',
                'query_builder' => function (UtilisateurRepository $er) { 
                         return $er->createQueryBuilder('u')
                        ->orderBy('u.nomutilisateur', 'ASC');                                               
                }, 
                'choice_attr' => function(Utilisateur $choice, $key, $value) {
                    if ($choice->getConnecter() == '0') {
                        return ['disabled' => true];
                    }

                    return [];
                },
                'required'      => false,
                'disabled' => $aDisableStatus['idUserAction'],
                'label'         => false,
                'row_attr'      => ['class' => 'col-sm-2'],
                'placeholder' => ''
            ])
            ->add('idActionStatut', EntityType::class,[
                "class" => NoteActionStatut::class,
                'choice_label'  => 'action_statut',
                'required'      => false,
                'disabled' => $aDisableStatus['idActionStatut'],
                'label'         => false,
                'row_attr' => ['class' => 'col-sm-2'],
                'placeholder' => '',
                'attr' => ['class' => "note-action-statut"]
            ])
        ;
        
//        $builder->addEventListener(FormEvents::POST_SET_DATA, function ($event) {
//            
//            if ($event->getData()) {
//                $form = $event->getForm();
//                dump($form->getData());
//            }
//            
//            //dump($event->getData()); //Return NULL for embedded forms, and the entity for non-embedded forms
//        });
        
        $builder->get("dateAdd")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateAdd")->resetViewTransformers();
        $builder->get("dateAction")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateAction")->resetViewTransformers();

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($user) {
            $form = $event->getForm();
            $form->add('idUserAdd', EntityType::class, [
                'class'         => Utilisateur::class,
                'attr'          => [ 'class' => 'd-none', 'required' => true],
                'required'      => true,
                'choice_label'  => 'nomutilisateur',
                'choices'       => [$user],
                'label'         => false,
            ]);
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'    => Note::class,
            'date_format' => 'd/m/Y',
            'attr' => [
                'class' => 'comment_contains_form'
            ],
            'disabled_fields' => []
        ]);
    }
}
