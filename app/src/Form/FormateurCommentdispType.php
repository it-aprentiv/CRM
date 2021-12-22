<?php


namespace App\Form;

use App\Entity\FormateurCommentdisp;
use App\Repository\FormateurCommentdispRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class FormateurCommentdispType extends AbstractType
{
    private $formateurCommentdispRepository;

    /**
     * FormateurCommentdispType constructor.
     * @param FormateurCommentdispRepository $formateurCommentdispRepository
     */
    public function __construct(FormateurCommentdispRepository $formateurCommentdispRepository)
    {
        $this->formateurCommentdispRepository = $formateurCommentdispRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentaires', TextType::class, [
                'label' => 'commentaires',
                'required' => false
            ])
            ->add('disponibilites', TextType::class, [
                'label' => 'disponibilites',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormateurCommentdisp::class
        ]);
    }

}