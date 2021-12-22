<?php

namespace App\Form;

use App\Entity\SocieteLiee;
use App\Form\DataTransformer\SocieteTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocieteLieeType extends AbstractType
{

    private $societetransformer;

    public function __construct(SocieteTransformer $societetransformer)
    {
        $this->societetransformer = $societetransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idSociete1', ChoiceType::class,[
                'label'         => false,
                'required'      => false,
                'choices'       => [],
                'attr'          => [
                    'id'    => "societelie1",
                    'class' => "sosieteliee societelie1",
                ]
            ])
            ->add('idSociete2', ChoiceType::class,[
                'label'         => false,
                'required'      => false,
                'choices'       => [],
                'attr'          => [
                    'id'    => "societelie2",
                    'class' => "sosieteliee societelie2",
                ]
            ])
            ->add('idSociete3', ChoiceType::class,[
                'label'         => false,
                'required'      => false,
                'choices'       => [],
                'attr'          => [
                    'id'    => "societelie3",
                    'class' => "sosieteliee societelie3",
                ]
            ])
            ->add('idSociete4', ChoiceType::class,[
                'label'         => false,
                'required'      => false,
                'choices'       => [],
                'attr'          => [
                    'id'    => "societelie4",
                    'class' => "sosieteliee societelie4",
                ]
            ])
        ;
        $builder->get("idSociete1")->addModelTransformer($this->societetransformer);
        $builder->get("idSociete2")->addModelTransformer($this->societetransformer);
        $builder->get("idSociete3")->addModelTransformer($this->societetransformer);
        $builder->get("idSociete4")->addModelTransformer($this->societetransformer);
        $builder->get('idSociete1')->resetViewTransformers();
        $builder->get('idSociete2')->resetViewTransformers();
        $builder->get('idSociete3')->resetViewTransformers();
        $builder->get('idSociete4')->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SocieteLiee::class,
        ]);
    }
}
