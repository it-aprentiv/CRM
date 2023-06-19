<?php


namespace App\Form;


use App\Entity\Collaborateur;
use App\Entity\Contact;
use App\Entity\Domiciliation;
use App\Repository\CollaborateurRepository;
use App\Repository\ContactRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditDomByFactType extends AbstractType
{
    private $clientOption = [];
    private $contactRepo;

    public function __construct(ContactRepository $contactRepository){
        $this->contactRepo = $contactRepository;
        $this->clientOption = [
            'class' => Contact::class,
            'label' => 'Client',
            'choice_label' => 'nomStr',
            'invalid_message' => 'Invalide client',
            'empty_data' => null,
            'choices' => [],
            'placeholder' => 'Client'
        ];
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $exceptedcollab = null;
        if(isset($options['attr']) && isset($options['attr']['editform']) && $options['attr']['editform']) {
            $exceptedcollab = $options['attr']['editform'];
        }
        $builder
            ->add('client', EntityType::class, $this->clientOption)
            ->add('commercial', EntityType::class, [
                'class' => Collaborateur::class,
                'required' => true,
                'choice_label' => 'nomPrenom',
                'query_builder' => function (CollaborateurRepository $c) use ($exceptedcollab) {
                    return $c->findAllCollaborateur($exceptedcollab);
                },
            ])
            ->addEventListener(FormEvents::POST_SET_DATA, [$this, 'onPostSetData'])
            ->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmit'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Domiciliation::class
        ]);
    }

    public function onPostSetData(FormEvent $event){
        /** @var Domiciliation $oDomiciliation */
        $oDomiciliation = $event->getData();
        $oClient = $oDomiciliation->getClient();
        // ajouter le client au choix
        if ($oClient instanceof Contact) {
            $this->setClientField($event, $oClient);
        }
    }

    public function onPreSubmit(FormEvent $event){
        $data = $event->getData();
        $oClient = $this->contactRepo->find($data['client']);

        if ($oClient instanceof Contact) {
            $this->setClientField($event, $oClient);
        }
    }

    public function setClientField(FormEvent &$event, Contact $client){
        $oForm = $event->getForm();
        $oForm->remove('client');
        $this->clientOption['choices'][] = $client;
        $oForm->add('client', EntityType::class, $this->clientOption);
    }
}