<?php

namespace App\Form;

use App\Entity\Civilite;
use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\ContactNote;
use App\Entity\ContactType as CT;
use App\Entity\Qualite;
use App\Entity\SecteurActivite;
use App\Entity\Structure;
use App\Form\DataTransformer\CiviliteTransformer;
use App\Form\DataTransformer\ContactTypeTransformer;
use App\Form\DataTransformer\DateTimeTransformer;
use App\Form\DataTransformer\OpcaTnsTransformer;
use App\Form\DataTransformer\OpcaTransformer;
use App\Form\DataTransformer\QualiteTransformer;
use App\Form\DataTransformer\SecteurActiviteTnsTransformer;
use App\Form\DataTransformer\SecteurActiviteTransformer;
use App\Form\DataTransformer\SiteWebTransformer;
use App\Form\DataTransformer\SocieteLieeTransformer;
use App\Form\DataTransformer\StructureTransformer;
use App\Form\Type\EntityToTextType;
use App\Form\Type\StructureType;
use App\Repository\CollaborateurRepository;
use App\Repository\ContactRepository;
use App\Repository\ContactTypeRepository;
use App\Repository\SecteurActiviteRepository;
use App\Repository\StructureRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{

    private $contactRepository;
    private $structureRepository;
    private $SecteurActiviteTransformer;
    private $civilitetransformer;
    private $contacttypetransformer;
    private $qualitetransformer;
    private $societelietransformer;
    private $opcatnstranformer;
    private $opcatransformer;
    private $structuretransformer;
    private $datetimetransformer;
    private $secteuractivitetnstransfo;


    public function __construct(ContactRepository $contactRepository,
                                SecteurActiviteTransformer $secteurActivitetransformer,
                                CiviliteTransformer $civilitetransformer,
                                ContactTypeTransformer $contacttypetransformer,
                                QualiteTransformer $qualitetransformer,
                                SocieteLieeTransformer $societelietransformer,
                                OpcaTnsTransformer $opcatnstransformer,
                                OpcaTransformer $opcatransformer,
                                StructureTransformer $structuretransformer,
                                DateTimeTransformer $datetimetransformer,
                                SiteWebTransformer $sitewebtransformer,
                                SecteurActiviteTnsTransformer $secteuractivitetnstransfo,
                                StructureRepository $structureRepository
                                )
    {
        $this->contactRepository            = $contactRepository;
        $this->SecteurActiviteTransformer   = $secteurActivitetransformer;
        $this->civilitetransformer          = $civilitetransformer;
        $this->contacttypetransformer       = $contacttypetransformer;
        $this->qualitetransformer           = $qualitetransformer;
        $this->societelietransformer        = $societelietransformer;
        $this->opcatnstranformer            = $opcatnstransformer;
        $this->opcatransformer              = $opcatransformer;
        $this->structuretransformer         = $structuretransformer;
        $this->datetimetransformer          = $datetimetransformer;
        $this->sitewebtransformer           = $sitewebtransformer;
        $this->secteuractivitetnstransfo    = $secteuractivitetnstransfo;
        $this->structureRepository = $structureRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $exceptedcollab = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }
        $builder
            ->add('nomStr', TextType::class, [
                'label'     => "Société",
                'required'  => false,
            ])
            ->add('noSiret', TextType::class, [
                'label'     => "Siret entreprise",
                'required'  => false,
            ])
            ->add('noNaf', TextType::class, [
                'label'     => 'NAF entreprise',
                'required'  => false,
            ])
            //AJOUT DU CHAMP SEXE DANS LE FORM, IL SERT A STOCKER LES ID OPCO 
            ->add('sexe', TextType::class, [
                'label'     => 'sexe',
                'required'  => false,
            ])
            // Table 5_activite
//            ->add('idSecteur', EntityType::class, [
//                'class'         => SecteurActivite::class,
//                'choice_label'  => 'secteur',
//                'label'         => false,
//                'required'      => false,
//                'attr'          => [ 'class' => 'activite_secteur ctn', 'required' => true ],
//                'query_builder' => function (SecteurActiviteRepository $sa) {
//                    return $sa->findallSecteur();
//                },
//            ])
            // APR-121 : Rendre autocompletion : Activités entreprises 
            ->add('idSecteur', EntityType::class, [
                'choices'       => [],
                'class'     => SecteurActivite::class,
                'choice_label' => 'secteur',
                'required'      => true,
                'attr'          => [
                    'required' => 'required',
                    'class' => 'activite_secteur ctn'
                ]
            ])
            ->add('effectif', TextType::class, [
                'label'     => 'Nbr salairiés',
                'required'  => false,
                'attr'      => ['class' => 'number-format']
            ])
            /*->add('opca', EntityType::class, [
                'class' => Contact::class,
                'choice_label'  => 'nomStr',
                'query_builder' => function (ContactRepository $cr) {
                    return $cr->findAllOPCA();
                },
                'required'      => false,
                'attr'          => [ 'class' => 'contact_opca_added' ],
            ])*/
            ->add('opca', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('structure', StructureType::class,[
                'choice_label'  => 'structure',
                'label'         => false,
                'required'      => false,
                'attr'          => ['required' => 'required'],
                'data' => $this->getStructureData($options['data']->getStructure()),
            ])
            ->add('noAdherent', TextType::class,[
                'required' => false,
            ])
            ->add('id_commercial', EntityType::class, [
                'class' => Collaborateur::class,
                'required' => false,
                'choice_label' => 'nomPrenom',
                'attr' => [
                    'required' => 'required',
                ],
                'query_builder' => function (CollaborateurRepository $c) use ($exceptedcollab) {
                    return $c->findAllCollaborateur($exceptedcollab);
                },
            ])
            ->add('siretTns', TextType::class,[
                'required' => false,
            ])
            ->add('nafTns', TextType::class,[
                'required' => false,
            ])
            ->add('activiteTns', EntityType::class, [
                'class'         => SecteurActivite::class,
                'choices'   => [],
                'choice_label'  => 'secteur',
                'label'         => false,
                'required'      => false,
                'attr'          => [ 'class' => 'activite_secteur tns', 'required' => false ],
//                'query_builder' => function (SecteurActiviteRepository $sa) {
//                    return $sa->findallSecteur();
//                },
            ])
            //->add('idOpcaTns', TextType::class)
            /*->add('idOpcaTns', EntityType::class, [
                'class'         => Contact::class,
                'choice_label'  => 'nomStr',
                'query_builder' => function (ContactRepository $cr) {
                    //return $cr->findAllOPCATNS();
                    return $cr->findAllOPCA();
                },
                'required'      => false,
            ])*/
            ->add('idOpcaTns', ChoiceType::class, [
                'required' => false,
                'empty_data' => null
            ])
            ->add('idCivilite', EntityType::class, [
                'class'         => Civilite::class,
                'choice_label'  => 'civilite',
                'required'      => true,
            ])
            ->add('nom', TextType::class,[
                'required' => true,
            ])
            ->add('prenom', TextType::class,[
                'required' => true,
            ])
            ->add('id_type', EntityType::class, [
                'class'         => CT::class,
                'choice_label'  => 'type_contact',
                'query_builder' => function (ContactTypeRepository $ctr) {
                    return $ctr->findClientProspetContactType();
                },
                'required'      => false,
                'attr'          => [ 'required' => true],
            ])
            ->add('metro', TextType::class,[
                'required' => false,
            ])
            ->add('adresses', CollectionType::class, [
                'entry_type'    => AdresseType::class,
                'attr'          => [
                    'label' => false
                ],
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'required'      => false,
            ])
            ->add('qualite', EntityType::class,[
                'class'         => Qualite::class,
                'choice_label'  => 'nom_qualite',
                'label'         => false,
                'required'      => false,
                'attr'          => [ "class" => "qualite_added_new" ],
            ])
            ->add('interlocuteur', ChoiceType::class,[
                'label'     => false,
                'choices'   => [
                    "" => '',
                    "Oui" => 'oui',
                    "Non" => 'non'
                ],
                //'data' => 'oui',
                'required'  => false
            ])
            ->add('siteweb', EntityToTextType::class)
            ->add('soldeDate', DateType::class, [
                'widget'        => 'single_text',
                'html5'         => false,
                'attr'          => ['class' => 'js-datepicker text-center date', 'autocomplete' => 'off'],
                'required'      => false,
                'input'         => 'datetime',
                'format'        => 'dd/MM/yyyy',
            ])
            ->add('solde', TextType::class,[
                'required'  => false,
                'attr'      => ['class' => 'money-format']
            ])
            ->add('commentaires', CollectionType::class,[
                "entry_type"    => NoteType::class,
                'attr'          => [ 'label' => false ],
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'required'      => false,
                'entry_options' => ['data_class' => ContactNote::class]
            ])
            ->add('societelie', CollectionType::class,[
                'entry_type'        => SocieteLieeType::class,
                'allow_add'         => true,
                'label'             => false,
                'allow_delete'      => true,
                'required'          => false,
            ])
            ->add('contactsoc', CollectionType::class,[
                    'entry_type'        => ContactCustomType::class,
                    'allow_add'         => true,
                    'label'             => false,
                    'allow_delete'      => true,
                    'required'          => false,
                ]
            )
            ->add("Telephone", TextType::class,[
                'required'      => false,
                'label_attr'    => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'      => ['class' => 'text-center sm-2'],
                'attr'          => ['class' => 'telephone-format', "maxlength" =>"14", "pattern" => ".{14,14}"],
            ])
            ->add("numero", TextType::class,[
                'required'      => false,
                'label_attr'    => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'      => ['class' => 'text-center sm-2'],
                'attr'          => ['class' => 'telephone-format', "maxlength" =>"14", "pattern" => ".{14,14}"],
            ])
            ->add("Fax", TextType::class,[
                'required'      => false,
                'label_attr'    => [ 'class' => "font-weight-bold text-center col-sm-12"],
                'row_attr'      => ['class' => 'text-center col-sm-2'],
                'attr'          => ['class' => 'telephone-format'],
            ])
            ->add("Portable", TextType::class,[
                'required'      => false,
                'label_attr'    => [ 'class' => "font-weight-bold text-center col-sm-2" ],
                'row_attr'      => ['class' => 'text-center col-sm-1'],
                'attr'          => ['class' => 'telephone-format', "maxlength" =>"14", "pattern" => ".{14,14}"],
            ])
            ->add("Email", EmailType::class,[
                'required'      => false,
                'label_attr'    => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'      => ['class' => 'text-center col-sm-2'],
            ])
            ->add("adresseEmail", EmailType::class,[
                'required'      => false,
                'label_attr'    => [ 'class' => "font-weight-bold text-center col-sm-12" ],
                'row_attr'      => ['class' => 'text-center col-sm-2'],
            ])
            ->add('origine', ChoiceType::class,[
                'choices' => [
                    'Site web' => 'Site web',
                    'Réseaux sociaux' => 'Reseaux sociaux',
                    'Leboncoin' => 'Leboncoin',
                    'Google' => 'Google',
                    'Email' => 'Email',
                    'Bouche à oreille' => 'Bouche a oreille',
                    'EDOF' => 'EDOF',
                    'Pole Emploi' => 'Pole Emploi',
            ]])
            ->add('statutlead', ChoiceType::class,[
                'choices' => [
                    'En cours' => 'En cours',
                    'Devenu client' => 'Devenu client',
                    'Devenu prospect' => 'Devenu prospect',
                    'Sans suite' => 'Sans suite',
            ]])
            ->add('villeLead', TextType::class, [
                'label'     => "Ville",
                'required'  => false,
            ])      
            /*->add('competence', ChoiceType::class,
                [
                    'attr' => [
                        'entry_type'        => CompetenceType::class,

                        'required' => 'required',
                    ]
                ])    ->add('themeformation', TextType::class,[
                'entry_type'        => CompetenceType::class,

                'required' => true,
            ])
            ->add('themegeneral', TextType::class,
                [
                    'entry_type'        => CompetenceType::class,

                    'required' => true,
                ])
                */
        
            ;
            $builder->get("siteweb")->addModelTransformer($this->sitewebtransformer);
            $builder->get("idSecteur")->addModelTransformer($this->SecteurActiviteTransformer);
            $builder->get("idCivilite")->addModelTransformer($this->civilitetransformer);
            $builder->get("qualite")->addModelTransformer($this->qualitetransformer);
            $builder->get("societelie")->addModelTransformer($this->societelietransformer);
            $builder->get("idOpcaTns")->addModelTransformer($this->opcatnstranformer);
            $builder->get("opca")->addModelTransformer($this->opcatransformer);
            $builder->get("soldeDate")->addModelTransformer($this->datetimetransformer);
            $builder->get("soldeDate")->resetViewTransformers();
            $builder->get("activiteTns")->addModelTransformer($this->secteuractivitetnstransfo);
            $builder->get('opca')->resetViewTransformers();
            $builder->get('idOpcaTns')->resetViewTransformers();

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'contact_type' => 'client_prospect',
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
