<?php

namespace App\Controller;

use App\Entity\Filter\UtilisateurFilter;
use App\Entity\Utilisateur;
use App\Form\UtilisateurFilterType;
use App\Form\UtilisateurType;
use App\Manager\UtilisateurManager;
use App\Repository\AssomenuutilisateurRepository;
use App\Repository\DroitspecifiqueRepository;
use App\Repository\MenuRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\DBAL\Exception\NotNullConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use Symfony\Component\Security\Guard\Token\PostAuthenticationGuardToken;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class UtilisateurController extends BaseController {

    /**
     * @Route("/utilisateur", name="welcome/Liste_utilisateur")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(
        UtilisateurRepository $utilisateurRepository,
        PaginatorInterface $paginator,
        Request $request,
        UtilisateurManager $utilisateurManager,
        MenuRepository $menuRepository
    ) {
        
        // Filtre
        $userFilter = new UtilisateurFilter();
        $userFilterForm = $this->createForm(UtilisateurFilterType::class, $userFilter, [
            'method' => 'GET'
        ]);
        $userFilterForm->handleRequest($request);
        $this->viewParams['userFilterForm'] = $userFilterForm->createView();

        // Récupération users + pagination
        $allMenus = $menuRepository->findAll();
        $this->viewParams['all_menus'] = $allMenus;
        $usersWithDroitMenus = $utilisateurRepository->findUsersMenuQuery($userFilter)->getResult();
        $usersMenusMapping = $utilisateurManager->prepareUserMenuMapping($usersWithDroitMenus);
        $pagination = $paginator->paginate($usersMenusMapping, $request->query->get('page', 1), 20);
        $this->viewParams['pagination'] = $pagination;

        return $this->render('utilisateur/index.html.twig', $this->viewParams);
    }

    /**
     * Génère une formulaire pour création et modification d'utilisateur
     * En mode asynchrone (ajax)
     * @Route("/utilisateur/{id}/update/generate-form",
     *     name="user.update.generate-form-asynch",
     *     methods={"GET", "POST"}
     * )
     */
    public function asynchUpdateUtilisateur(
        $id,
        Request $request,
        UtilisateurRepository $utilisateurRepository,
        UtilisateurManager $utilisateurManager,
        EntityManagerInterface $em,
        DroitspecifiqueRepository $droitspecifiqueRepository,
        MenuRepository $menuRepository,
        TokenStorageInterface $ts
    ) {
        $user = new Utilisateur();
        $userId = $id;
        $userMenusMapping = array();

        if ($userId) {
            $user = $utilisateurRepository->find($userId);
            // Récupération de l'association user / menu
            $userFilter = new UtilisateurFilter();
            $userFilter->setUserId($userId);
            $userMenus = $utilisateurRepository->findUsersMenuQuery($userFilter)->getResult();
            $userMenusMapping = $utilisateurManager->prepareUserMenuMapping($userMenus);
        }

        $menus = $menuRepository->findAll();

        $userForm = $this->createForm(UtilisateurType::class, $user, [
            'menus' => $menus,
            'user_menus' => $userMenusMapping,
            'action' => $this->generateUrl('user.update.generate-form-asynch', ['id' => $userId]),
            'method' => 'POST'
        ]);

        $userForm->handleRequest($request);
        // Gestion création + mise à jour information utilisateur
        // Réception des données postées
        if ($userForm->isSubmitted()) {
            if ($userForm->isValid()) {
                // Traitement des paramètres
                $newPassword = $userForm->get('newPassword')->getData();

                // Mettre à jour le mot de passe si ce n'est pas vide
                if (!empty(trim($newPassword))) {
                    $user = $utilisateurManager->encodePassword($user, $newPassword);
                }

                // Renseigner l'ancien champ 'PASSWORD' de l'ancienne (qui est obligatoire)
                if (!$user->getPasswordOld() || is_null($user->getPasswordOld())) {
                    $user->setPasswordOld($user->getPassword() ?: "");
                }

                // MAJ ROLE utilisateion
                if ($userForm->get('isAdmin')->getData() === 1) {
                    if (!$user->hasRole('ROLE_ADMIN')) {
                        $user->addRole('ROLE_ADMIN');
                    }
                } else {
                    $user->removeRole('ROLE_ADMIN');
                    // Refresh token
                }

                // MAJ de la propriété "droit"
                $user->setDroit($user->getPoste());

                try {
                    $em->persist($user);
                    $em->flush();
                } catch (NotNullConstraintViolationException $ex) {
                    return new JsonResponse(['success' => false, 'message' => 'Vérifiez que les champs soient bien remplis !']);
                }

                $utilisateurManager->updateMenuUtilisateurMapping($user->getIdutilisateur(), $menus, $userForm);
                $this->addFlash('success', 'Utilisateur : ' . $user->getUsername() . " mis à jour !");

                return new JsonResponse(['success' => true]);
            } else {
                return new JsonResponse(['success' => false, 'message' => 'Vérifiez que les champs soient bien remplis !']);
            }
        }

        $this->viewParams['user_form'] = $userForm->createView();
        $this->viewParams['user'] = $user;
        $this->viewParams['menus'] = $menus;

        return $this->render('utilisateur/_user-form.html.twig', $this->viewParams);
    }

    /**
     * Suppression d'un utilisateur (mode asynchrone : ajax)
     *
     * @param Request $request
     * @param UtilisateurRepository $utilisateurRepository
     * @return JsonResponse
     *
     *  @Route("/utilisateur/suppression",
     *     name="user.delete-asynch",
     *     methods={"DELETE", "POST"}
     * )
     */
    public function asynchRemoveUser(
        Request $request,
        UtilisateurRepository $utilisateurRepository,
        AssomenuutilisateurRepository $assomenuutilisateurRepository
    ) {
        $userId = $request->request->get('id', 0);

        if ($userId) {
            try {
                // Suppression des droits d'accès d'utilisateur
                $assomenuutilisateurRepository->removeMenuUtilisateurMapping($userId);
                // Suppression des information utilisateur
                $utilisateurRepository->removeUser($userId);
                $this->addFlash('success', "L'utilisateur a bien été supprimé !");

                return new JsonResponse(['success' => true]);
            } catch (Exception $e) {

                return new JsonResponse(['success' => false, 'message' => $e->getMessage()]);
            }
        }

        return new JsonResponse(['success' => true]);
    }

    /**
     * Afficher / modifier profil utilisateur
     * @Route("/utilisateur/profil", name="user.view")
     */
    public function view(
        Security $security,
        UtilisateurManager $utilisateurManager,
        EntityManagerInterface $em,
        Request $request
    ) {
        $user = $security->getUser();
        $this->viewParams['user'] = $user;
        $userForm = $this->createForm(UtilisateurType::class, $user, [
            'context' => 'profil',
            'method' => 'POST'
        ]);

        $userForm->handleRequest($request);

        if ($userForm->isSubmitted()) {
            if ($userForm->isValid()) {
                // Traitement des paramètres
                $newPassword = $userForm->get('newPassword')->getData();

                // Mettre à jour le mot de passe si ce n'est pas vide
                if (!empty(trim($newPassword))) {
                    $user = $utilisateurManager->encodePassword($user, $newPassword);
                }
                // @TODO : MAJ de la propriété "droit"
                $user->setDroit($user->getPoste());
                $em->persist($user);
                $em->flush();
                $this->addFlash('success', "Les informations ont été bien mises à jour !");

                return $this->redirectToRoute('home.index');
            } else {
                $this->addFlash('warning', "Veuillez vérifier que les champs sont bien remplis !");
            }
        }

        $this->viewParams['user_form'] = $userForm->createView();

        return $this->render(
                'utilisateur/view.html.twig',
                $this->viewParams
        );
    }

}
