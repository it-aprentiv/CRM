<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\ContactType as CT;
use App\Entity\Qualite;
use App\Entity\SecteurActivite;
use App\Form\DataTransformer\QualiteTransformer;
use App\Form\DataTransformer\SecteurActiviteTransformer;
use App\Form\DataTransformer\SiteWebTransformer;
use App\Form\Type\EntityToTextType;
use App\Repository\ContactRepository;
use App\Repository\ContactTypeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpcaType extends AbstractType
{

    private $contactRepository;
    private $SecteurActiviteTransformer;
    private $qualitetransformer;
    private $sitewebtransformer;

    public function __construct(ContactRepository $contactRepository,
                                SecteurActiviteTransformer $secteurActivitetransformer,
                                QualiteTransformer $qualitetransformer,
                                SiteWebTransformer $sitewebtransformer
    )
    {
        $this->contactRepository = $contactRepository;
        $this->SecteurActiviteTransformer = $secteurActivitetransformer;
        $this->qualitetransformer = $qualitetransformer;
        $this->sitewebtransformer = $sitewebtransformer;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomStr', TextType::class, [
                'label' => "Société",
                'required' => true,
            ])
            // Table 5_activite
            ->add('idSecteur', EntityType::class, [
                    'class' => SecteurActivite::class,
                    'choice_label' => 'secteur',
                    'label'         => false,
                    'required'      => true,
                    'attr' => ['class' => 'activite_secteur ctn']
                ]
            )
            ->add('opcas', CollectionType::class, [
                'entry_type' => ContactCustomType::class,
                'attr'          => [
                    'label' => false
                ],
                'by_reference'  => false,
                'allow_add' => true,
                'allow_delete'  => true,
                'required'      => false,
            ])
//            ->add('id_type', EntityType::class, [
//                'class' => CT::class,
//                'choice_label' => 'type_contact',
//                'query_builder' => function (ContactTypeRepository $ctr) {
//                    return $ctr->findClientProspetContactType();
//                },
//                'required'      => true,
//            ])
            ->add('adresses', CollectionType::class, [
                'entry_type' => AdresseType::class,
                'attr'          => [
                    'label' => false
                ],
                'by_reference'  => false,
                'allow_add' => true,
                'allow_delete'  => true,
                'required'      => false,
            ])
            ->add('qualite', EntityType::class,[
                'class' => Qualite::class,
                'choice_label' => 'nom_qualite',
                'label' => false,
                'required'      => false,
            ])
            ->add('siteweb', EntityToTextType::class);
        $builder->get("siteweb")->addModelTransformer($this->sitewebtransformer);
        $builder->get("idSecteur")->addModelTransformer($this->SecteurActiviteTransformer);
        $builder->get("qualite")->addModelTransformer($this->qualitetransformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'contact_type' => 'client_prospect',
        ]);
    }
}