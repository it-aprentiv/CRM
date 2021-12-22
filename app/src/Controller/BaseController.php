<?php

namespace App\Controller;

use App\Entity\Menu;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;

/**
 * Base Controller : load all common objects
 */
class BaseController extends AbstractController {

    protected $entityRepository;
    protected $security;
    protected $em;
    protected $viewParams;
    protected $entityClass = null;

    public function __construct(Security $security, EntityManagerInterface $entityManager) {
        $this->security = $security;
        $this->em = $entityManager;

        // Load menus
        $menuRepository = $this->em->getRepository(Menu::class);
        $userMenus = array();
        if ($security->getUser()) {
            $userMenus['gestion'] = $menuRepository->findUserMenus(
                $security->getUser()->getIdutilisateur(),
                ['ecriture' => 0])
            ;
            $userMenus['creation'] = $menuRepository->findUserMenus(
                $security->getUser()->getIdutilisateur(),
                ['ecriture' => 1])
            ;
        }

        $this->viewParams['user_menus'] = $userMenus;

        if ($this->entityClass) {
            $this->entityRepository = $this->em->getRepository($this->entityClass);
        }
    }

    /**
     * @param $file
     *
     * @return JsonResponse|Response
     */
    public function returnFile($file)
    {
        if (!is_null($file)) {
            $response = new Response();
            $content = file_get_contents($file);
            //set headers
            $file = explode("/", $file);
            $response->headers->set('Content-Type', 'mime/type');
            $response->headers->set('Content-Disposition', 'attachment;filename="'.$file[count($file) - 1]);
            $response->setContent($content);

            return $response;
        }

        return $this->json(['error' => "Server error"]);
    }
    
}
