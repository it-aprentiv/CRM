<?php
/**
 * file StructureType.php
 */

namespace App\Form\Type;


use App\Entity\Structure;
use App\Repository\StructureRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StructureType extends AbstractType
{

    private $structureRepo;

    public function __construct(StructureRepository $structureRepository) {
        $this->structureRepo = $structureRepository;
    }

    public function configureOptions(OptionsResolver $resolver) {
        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
        $resolver->setDefaults([
            'class' => Structure::class,
            'choice_label' => 'structure',
            'query_builder' => function (EntityRepository $repo) {
                return $this->structureRepo->getQueryListStructure();
            },
        ]);
    }

    public function getParent() {
        return EntityType::class; // TODO: Change the autogenerated stub
    }
}