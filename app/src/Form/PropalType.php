<?php

namespace App\Form;

use App\Entity\Collaborateur;
use App\Entity\Competence;
use App\Entity\Contact;
use App\Entity\DevisStatut;
use App\Entity\Propal;
use App\Entity\Structure;
use App\Form\DataTransformer\CompetenceTransformer;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\DataTransformer\IntituleTransformer;
use App\Form\DataTransformer\SocieteObjectTransformer;
use App\Form\DataTransformer\VilleTransformer;
use App\Form\Type\StructureType;
use App\Repository\CollaborateurRepository;
use App\Repository\StructureRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PropalType extends AbstractType
{
    private $datetimetransformer;
    private $societeobjecttransformer;
    private $villetransformer;
    private $competenceTransformer;
    private $structureRepository;

    public function __construct(DateTimeTransformer $datetimetransformer,
                                SocieteObjectTransformer $societeobjecttransformer,
                                VilleTransformer $villetransformer, 
                                CompetenceTransformer $competenceTransformer,
                                StructureRepository $structureRepository
       )
    {
        $datetimetransformer->setNullable(true);
        $this->datetimetransformer = $datetimetransformer;
        $this->societeobjecttransformer = $societeobjecttransformer;
        $this->villetransformer = $villetransformer;
        $this->competenceTransformer = $competenceTransformer;
        $this->structureRepository = $structureRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $excepted = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $excepted = $options['attr']['editform'];
        }
        $builder
            ->add('statutpropal', EntityType::class, [
                'class'             => DevisStatut::class,
                'choice_label'      => 'statutDevis',
                'required'          => false,
                'attr'              => ['required' => true],
                'label'             => false,
            ])
            ->add('entitypropal', StructureType::class, [
                'choice_label'      => 'structure',
                'label'             => false,
                'required'          => false,
                'attr'              => [ 'required' => true ],
                'data' => $this->getStructureData($options['data']->getEntityPropal()),
            ])
            ->add('commercialpropal', EntityType::class, [
                'class'             => Collaborateur::class,
                'choice_label'      => 'nom_prenom',
                'required'          => false,
                'label'             => false,
                'attr'              => [ 'required' => true ],
                'query_builder' => function (CollaborateurRepository $c) use ($excepted) {
                    return $c->findAllCollaborateur($excepted);
                },
            ])
            ->add('clientpropal', EntityType::class, [
                'class'             => Contact::class,
                'choice_label'      => 'nomStr',
                'choices'           => [],
                'required'          => false,
                'label'             => false,
                'attr'              => [ 'required' => true],
            ])
            ->add('nom')
            ->add('prenom')
            ->add('type',ChoiceType::class, [
                'label'             => false,
                'required'          => false,
                'choices'           => [
                                        'Entreprise'  => 1,
                                        'Particulier' => 2, ],
                'attr'              => [ 'required' => true ]
            ])
            ->add('telephone',TextType::class,[
                'attr'              => [ 'class' => 'telephone-format', 'required' => false],
                'required'          => false,
            ])
            ->add('email', EmailType::class,[
                'required'          => false,
                'attr'              => [ 'required' => false],
            ])
            ->add('adresse')
            ->add('codepostal',TextType::class,[
                'attr'              => [ 'class' => 'number-format', 'required' => false],
                'required'          => false,
            ])
            ->add('ville', ChoiceType::class, [
                'label'             => false,
                'label_attr'        => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'          => ['class' => 'col-sm-2'],
                'required'          => false,
                'empty_data'        => null,
                'attr'              => [ 'class' => 'contact_adresse_ville',],
            ])
            ->add('besoin')
            ->add('prerequis',TextareaType::class,[
                'attr'              => [ 'required' => true],
            ])
            ->add('objectif',TextareaType::class,[
                'attr'              => [ 'required' => true],
            ])
            ->add('durreh',TextType::class,[
                'attr'              => [ 'class' => 'number-format', 'required' => false],
                'required'          => false
            ])
            ->add('durrej',TextType::class,[
                'attr'              => [ 'class' => 'number-format', 'required' => false],
                'required'          => false
            ])
            ->add('datedebutpropal',DateType::class, [
                'widget'            => 'single_text',
                'html5'             => false,
                'attr'              => ['class' => 'js-datepicker text-center date', 'required' => false, 'autocomplete' => 'off'],
                'required'          => false,
                'input'             => 'datetime',
                'format'            => 'dd/MM/yyyy',
                'empty_data'              => null,
            ])
            ->add('datefinpropal',DateType::class, [
                'widget'            => 'single_text',
                'html5'             => false,
                'attr'              => ['class' => 'js-datepicker text-center date', 'required' => false, 'autocomplete' => 'off'],
                'required'          => false,
                'input'             => 'datetime',
                'format'            => 'dd/MM/yyyy',
                'empty_data'              => null,
            ])
            ->add('lieupropal')
            ->add('dateedition', DateType::class, [
                'widget'            => 'single_text',
                'html5'             => false,
                'attr'              => ['class' => 'text-center date', 'autocomplete' => 'off', 'readOnly' => true],
                'required'          => false,
                'input'             => 'datetime',
                'format'            => 'dd/MM/yyyy',
                'empty_data'              => null,
            ])
            ->add('daterelance',DateType::class, [
                'widget'            => 'single_text',
                'html5'             => false,
                'attr'              => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'          => false,
                'input'             => 'datetime',
                'format'            => 'dd/MM/yyyy',
                'empty_data'              => null,
            ])
            ->add('formation', EntityType::class,[
                'class' => Competence::class,
                'choices' => [],
                'attr'              => [ 'required' => true],
                'required'          => false
            ])
            ->add('personnes',TextType::class,[
                'attr'              => [ 'required' => true],
            ])
            ->add('coutht', Type\CrmMoneyType::class,[
                'required'          => false
            ])
            ->add('montantTVA', NumberType::class,[
                'required'          => false,
                'empty_data'        => 20, // APR-204
                'attr' => ['class' => 'tva_format']
            ])
            ->add('coutTTC', Type\CrmMoneyType::class,[
                'mapped'    => false,
                'attr' => ['readOnly' => true],
                'required'          => false
            ])
            ->add('typepropal', ChoiceType::class,[
                'choices' => [
                    'Client' => 'Client',
                    'Prospect' => 'Prospect'
                    ]])
            ->add('fiabilite', ChoiceType::class,[
                'choices' => [
                    'Froid' => 'Froid',
                    'Tiede' => 'Tiede',
                    'Chaud' => 'Chaud',
            ]])        
        ;
        $builder->get("clientpropal")->addModelTransformer($this->societeobjecttransformer);
        $builder->get("clientpropal")->resetViewTransformers();
        $builder->get("ville")->addModelTransformer($this->villetransformer);
        $builder->get("ville")->resetViewTransformers();
        $builder->get("datedebutpropal")->addModelTransformer($this->datetimetransformer);
        $builder->get("datedebutpropal")->resetViewTransformers();
        $builder->get("datefinpropal")->addModelTransformer($this->datetimetransformer);
        $builder->get("datefinpropal")->resetViewTransformers();
        $builder->get("daterelance")->addModelTransformer($this->datetimetransformer);
        $builder->get("daterelance")->resetViewTransformers();
        $builder->get("dateedition")->addModelTransformer($this->datetimetransformer);
        $builder->get("dateedition")->resetViewTransformers();
        $builder->get("formation")->addModelTransformer($this->competenceTransformer);
        $builder->get("formation")->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Propal::class,
        ]);
    }
    
    /**
     * Hack : Entity of type 'App\Entity\Structure' for IDs id(0) was not found
     *
     */
    public function getStructureData(?Structure $oStructure) {

        if (is_null($oStructure) || $oStructure->getId() == 0) {
            return null;
        }

        return $this
                ->structureRepository
                ->find($oStructure->getId())
        ;
    }
}
