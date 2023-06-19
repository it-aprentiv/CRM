<?php


namespace App\Form;

use App\Entity\Civilite;
use App\Entity\FormateurNote;
use App\Form\DataTransformer\CiviliteTransformer;
use App\Form\DataTransformer\SiteWebTransformer;
use App\Form\Type\EntityToTextType;
use App\Repository\AdresseRepository;
use App\Repository\ContactRepository;
use App\Repository\UrlRepository;
use App\Entity\Contact;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormateurType extends AbstractType
{
    private $contactRepository;
    private $adresseRepository;
    private $urlRepository;
    private $sitewebtransformer;
    private $civilitetransformer;

    public function __construct(ContactRepository $contactRepository, AdresseRepository $adresseRepository,
                                UrlRepository $urlRepository, SiteWebTransformer $sitewebtransformer,
                                CiviliteTransformer $civilitetransformer

    )
    {
        $this->contactRepository = $contactRepository;
        $this->adresseRepository = $adresseRepository;
        $this->urlRepository = $urlRepository;
        $this->sitewebtransformer = $sitewebtransformer;
        $this->civilitetransformer = $civilitetransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', HiddenType::class, [
                'required' => false
            ])
            ->add('idStatutFmt', ChoiceType::class, [
                'choices' => [
                    'Actif' => 1,
                    'Inactif' => 2,
                    'Classé(e)' => 3,
                    'Potentiel' => 4
                ],
                'expanded' => true,
                'attr' => [
                    'class' => "form-check form-check-inline",
                ],
                'label_attr' => [
                    "class" => "form-check-label font-weight-bold",
                ]
            ])
            ->add('nomStr', TextType::class, [
                'label' => 'Société ou Organisme',
                'required' => true
            ])
            ->add('noSiret', TextType::class, [
                'label' => 'N° SIRET',
                'required' => true
            ])
            ->add('nsecuritesocial', TextType::class,[
                'label' => 'N° Sécurité Sociale',
                'required' => false
            ])
            ->add('pieceIdentite', TextType::class,[
                'label' => "Piéce d'identité",
                'required' => true
            ])
            ->add('valididtePieceIdentite', TextType::class, [
                'label' => 'Validité',
                'required' => true,
                'attr'      => [ 'class' => 'datepicker' ]
            ])
            ->add('idCivilite', EntityType::class, [
                'class'         => Civilite::class,
                'choice_label'  => 'civilite',
                'required'      => true,
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true
            ])
            ->add('Competenceformateur', TextType::class,[
                'label' => 'Compétence/Spécialité',
                'required' => true
            ])
            ->add('siteweb', EntityToTextType::class)
            ->add("Telephone", TextType::class,[
                'required' => true,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center sm-2'],
            ])
            ->add("Fax", TextType::class,[
                'required' => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center col-sm-2'],
            ])
            ->add("Portable", TextType::class,[
                'required' => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-2"
                ],
                'row_attr' => ['class' => 'text-center col-sm-1'],
            ])
            ->add("Email", EmailType::class,[
                'required' => false,
                'label_attr' => [
                    'class' => "font-weight-bold text-center col-sm-12"
                ],
                'row_attr' => ['class' => 'text-center col-sm-2'],
            ])
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
            ->add('formateurcommentaires', CollectionType::class,[
                "entry_type"    => NoteType::class,
                'attr'          => [
                    'label' => false
                ],
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'required'      => true,
                'entry_options' => [
                    'date_format' => 'd/m/Y',
                    'data_class' => FormateurNote::class,
                    'disabled_fields' => ['idAction','idActionStatut']
                ]
            ])
        ;
        $builder->get("siteweb")->addModelTransformer($this->sitewebtransformer);
        $builder->get("idCivilite")->addModelTransformer($this->civilitetransformer);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);

    }
}