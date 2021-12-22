<?php

namespace App\Manager;

use App\Entity\Droitspecifique;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UtilisateurManager {

    const ACCESS_NO_ACCESS = -1;
    const ACCESS_READ_ONLY = 0;
    const ACCESS_WRITE = 1;

    private $encoder;
    private $em;

    public function __construct(UserPasswordEncoderInterface $encoder, EntityManagerInterface $em) {
        $this->encoder = $encoder;
        $this->em = $em;
    }

    /**
     * Associe les utilisateurs et leur droit sur les menus
     * @param array $users
     * @return array
     */
    public function prepareUserMenuMapping(array $users = array()) {
        $usersMenusMapping = array();

        foreach ($users as $user) {
            $usersMenusMapping[$user['idutilisateur']]['idutilisateur'] = $user['idutilisateur'];
            $usersMenusMapping[$user['idutilisateur']]['nomutilisateur'] = $user['nomutilisateur'];
            $usersMenusMapping[$user['idutilisateur']]['prenomutilisateur'] = $user['prenomutilisateur'];
            $usersMenusMapping[$user['idutilisateur']]['droit'] = $user['droit'];
            $usersMenusMapping[$user['idutilisateur']]['poste'] = $user['poste'];
            $usersMenusMapping[$user['idutilisateur']]['menu_access'][$user['nommenu']] = $user['ecriture'];
        }

        return $usersMenusMapping;
    }

    /**
     * Retourne le droit d'utilisateur pour un ensemble de droit donnée en paramètre
     * @param array $userMenuAccess : liste de droit d'accès [gestion, création, ...]
     * @return int
     */
    public function getUserMenuAccess(array $userMenuAccess) {
        $menuAccess = self::ACCESS_NO_ACCESS;

        foreach ($userMenuAccess as $access) {
            if ('gestion' == $access) {
                $menuAccess = self::ACCESS_WRITE;
                break;
            } else if ('creation' == $access) {
                $menuAccess = self::ACCESS_READ_ONLY;
            }
        }

        return $menuAccess;
    }

    /**
     * Encode un password donné en paramètre
     *
     * @param Utilisateur $utilisateur
     * @param $plainPassword
     * @return Utilisateur
     */
    public function encodePassword(Utilisateur $utilisateur, $plainPassword) {
        $encoded = $this->encoder->encodePassword($utilisateur, $plainPassword);
        $utilisateur->setPassword($encoded);

        return $utilisateur;
    }

    /**
     * Mise à jour des droits utilisateurs pour chaque menus
     * 
     * @param int $utilisateurId
     * @param array $menus
     */
    public function updateMenuUtilisateurMapping(int $utilisateurId, array $menus, $userForm) {
        //Suppression des menus existants
        $droitspecifiqueRepository = $this->em->getRepository(Droitspecifique::class);
        $droitspecifiqueRepository->removeMenuUtilisateurMapping($utilisateurId);
        // Réaffectation des droits pour chaque menu à l'utilisateur
        foreach ($menus as $menu) {
            $menuAccessValue = $userForm->get('menu' . $menu->getIdmenu())->getData();

            if ($menuAccessValue < 0) {
                continue;
            }
            // Mapping droit / utilisateur : insertion dans la base
            $newDroitSpecifique = new Droitspecifique();
            $newDroitSpecifique->setUtilisateur($utilisateurId);
            $newDroitSpecifique->setMenu($menu->getIdmenu());
            $newDroitSpecifique->setEcriture($menuAccessValue);
            // Persist
            $this->em->persist($newDroitSpecifique);
        }

        return $this->em->flush();
    }

}
