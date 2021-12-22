<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Manager\UtilisateurManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{

    private $utilisateurManager;

    public function __construct(UtilisateurManager $utilisateurManager)
    {
        $this->utilisateurManager = $utilisateurManager;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $userMenusAccess = array();

        foreach ($options['user_menus'] as $idUser => $user) {
            $userMenusAccess = $user['menu_access'];
        }
        
        $currentUser = $options['data'];
        
        $builder
            ->add('nomutilisateur', null, [
                'required' => true
            ])
            ->add('username', null, [
                'required' => true,
                'label' => 'Prénom(s)'
            ])
            ->add('password', HiddenType::class, [
                'data' => !empty($options['data']->getPassword()) ? $options['data']->getPassword() : '**'
            ])
            ->add('newPassword', TextType::class, [
                'required' => false,
                'mapped' => false
            ])
            ->add('poste')
            /*->add('droit')*/
            ->add('isAdmin', ChoiceType::class, [
                'mapped' => false,
                'choices' => [
                    'Oui' => 1,
                    'Non' => 0
                ],
                'data' => $currentUser->hasRole('ROLE_ADMIN')
            ]);

        // Gestion des droits d'accès sur les menu pour un utilisateur
        if ($options['context'] === 'super_admin') {
            foreach ($options['menus'] as $menu) {
                $builder->add('menu' . $menu->getIdmenu(), ChoiceType::class, [
                    'mapped' => false,
                    'choices' => [
                        'Aucune' => -1,
                        'Lecture' => 0,
                        'Lecture et Ecriture' => 1
                    ],
                    'attr' => [
                        'class' => 'utilisateur-menu'
                    ],
                    'label' => $menu->getNommenu(),
                    'property_path' => 'menu' . $menu->getIdmenu(),
                    'choice_attr' => function ($choice, $key, $value) use ($menu, $userMenusAccess) {

                        if (isset($userMenusAccess[$menu->getNommenu()])) {

                            if ($value == $userMenusAccess[$menu->getNommenu()]) {
                                return array('selected' => 'selected');
                            }
                        }

                        return array();
                    }
                ]);
            }
        } else {
            // Formulaire Utilisateur > Profil
            // Suppression du champ isAdmin
            $builder
                ->remove('isAdmin')
                ->remove('poste', null, [
                    'required' => true
                ])
            ;
        }
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'menus' => [],
            'user_menus' => [],
            'context' => 'super_admin'
        ]);
    }
}
