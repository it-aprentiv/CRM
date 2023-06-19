<?php
/**
 * file DomiciliationFilterType.php
 */

namespace App\Form\Filter;


use App\Entity\Contact;
use App\Entity\Filter\DomiciliationFilter;
use App\Entity\FormationDossierStatut;
use App\Form\Type\CrmDateType;
use App\Form\Type\CrmMoneyType;
use App\Repository\ContactRepository;
use App\Repository\FormationDossierStatutRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DomiciliationFilterType extends AbstractType
{
    private $contactRepository;
    private $clientOption;

    public function __construct(ContactRepository $contactRepository
    ) {
        $this->contactRepository = $contactRepository;
        $this->clientOption = [
            'class' => Contact::class,
            'label' => 'Client',
            'choice_label' => 'nomStr',
            'invalid_message' => 'Invalide client',
            'empty_data' => null,
            'choices' => []
        ];
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('ref', TextType::class)
            ->add('client', EntityType::class, $this->clientOption)
            ->add('debut', CrmDateType::class)
            ->add('fin', CrmDateType::class)
//            ->add('montantAccorde', CrmMoneyType::class)
            ->add('montantFacture', CrmMoneyType::class)
            ->add('montantRegle', CrmMoneyType::class)
            ->add('montantDu', NumberType::class, [
                'grouping' => true,
                'input' => 'number'
            ])
            ->add('statut', EntityType::class, [
                'class' => FormationDossierStatut::class,
                'label' => 'Statut',
                'choice_label' => 'statut',
                'placeholder' => '-- Statut --',
                'query_builder' => function (FormationDossierStatutRepository $formDossierStatuRepo){
                    return $formDossierStatuRepo->selectAllStatutQuery();
                }
            ])
            ->add('refFacture', TextType::class)
            ->add('dateEmission', CrmDateType::class)
            ->add('dateEnc', CrmDateType::class)
            ->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmit'])
            ->addEventListener(FormEvents::SUBMIT, [$this, 'onSubmit'])
        ;

        $builder->get('client')->resetViewTransformers();
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => DomiciliationFilter::class,
            'csrf_protection' => false,
            'required' => false,
            'method' => 'GET',
            'label' => false
        ]);
    }


    public function onPreSubmit(FormEvent $event){
        $data = $event->getData();
        if (isset($data['client'])) {
            $oContact = $this->contactRepository->find($data['client']);
            // supprimer la valeur du champ si client non existant
            if ($oContact instanceof Contact) {
                $data['client'] = $oContact;
            } else {
                unset($data['client']);
            }
            $event->setData($data);
        }
    }

    public function onSubmit(FormEvent $event){
        /** @var DomiciliationFilter $oFilter */
        $oFilter = $event->getData();
        $oClient = $oFilter->getClient();
        // ajouter le client au choix
        if ($oClient instanceof Contact) {
            $oForm = $event->getForm();
            $oForm->remove('client');
            $this->clientOption['choices'][] = $oClient;
            $oForm->add('client', EntityType::class, $this->clientOption);
        }
    }
}