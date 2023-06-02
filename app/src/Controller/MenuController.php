<?php

namespace App\Controller;

use App\Entity\Droitspecifique;
use App\Entity\Menu;
use App\Entity\User;
use App\Entity\Utilisateur;
use App\Form\MenuType;
use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MenuController extends BaseController
{
    /**
     * @Route("/menu", name="menu")
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(MenuType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $menu = $form->getData();
            $menuRepo = $this->getDoctrine()->getRepository(Menu::class);
            if($menu instanceof Menu && $menuRepo instanceof MenuRepository){
                $menu->setOrdre($menuRepo->countMenus() + 1);
                $menu->setCategorie("gestion");
            }
            $entityManager = $this->getDoctrine()->getManager();
            $user = $this->getDoctrine()->getRepository(Utilisateur::class)->findOneBy(['idutilisateur' => $this->getUser()->getidutilisateur()]);
            $entityManager->persist($menu);
            $entityManager->flush();
            $menuUtilisateur = new Droitspecifique();
            $menuUtilisateur->setMenu($menu->getIdmenu());
            $menuUtilisateur->setUtilisateur($user->getIdutilisateur());
            $menuUtilisateur->setEcriture(1);
            $entityManager->persist($menuUtilisateur);
            $entityManager->flush();
            $this->addFlash('success', 'Menu ajouté avec succès');
            return $this->redirectToRoute('menu');
        }
        $this->viewParams['form'] = $form->createView();
        return $this->render('menu/index.html.twig', $this->viewParams);
    }
}
