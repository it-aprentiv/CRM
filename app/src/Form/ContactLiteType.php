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
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactLiteType extends AbstractType
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
            ->add('structure', StructureType::class,[
                'choice_label'  => 'structure',
                'label'         => false,
                'required'      => false,
                'attr'          => ['required' => 'required'],
                'data' => $this->getStructureData($options['data']->getStructure()),
            ])
            ->add('id', HiddenType::class,[
                'required' => false,
                'empty_data' => $options['data']->getId()
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
