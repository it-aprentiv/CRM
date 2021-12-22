<?php
namespace App\Security\Voter;

use App\Repository\MenuRepository;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

/**
 * Description of CrmVoter
 *
 */
class CrmVoter extends Voter{
    
    const READ = 'view';
    const WRITE = 'edit';
    
    private $menuRepository;
    
    public function __construct(MenuRepository $menuRepository) {
        $this->menuRepository = $menuRepository;
    }


    protected function supports($attribute, $subject): bool {
        if (!in_array($attribute, [self::READ, self::WRITE])) {
            return false;
        }
        
        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token): bool {
        $checkAccess = $this->menuRepository->hasUserAccessToMenu($token->getUser()->getIdutilisateur(), $subject, $attribute);
        
        return count($checkAccess) > 0;
    }

}
