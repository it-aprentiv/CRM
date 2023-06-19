<?php

namespace App\Twig;

use App\Manager\UtilisateurManager;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\Constants\FormationType as typeFormation;

class AppExtension extends AbstractExtension
{
    private $utilisateurManager;

    public function __construct(UtilisateurManager $utilisateurManager)
    {
        $this->utilisateurManager = $utilisateurManager;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('slugify', [$this, 'slugify']),
            new TwigFilter('float', [$this, 'textNumberTofloat']),
            new TwigFilter('translateLetterToWord', [$this, 'translateLetterToWord']),
            new TwigFilter('month_letter', [$this, 'intMonthToLetter']),
            new TwigFilter('ucwords', [$this, 'phpUcwords']),
            new TwigFilter('verify_date', [$this, 'verifyDate']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('user_menu_access', [$this, 'getUserMenuAccess']),
            new TwigFunction('diff_date', [$this, 'diffDate']),
        ];
    }

    /**
     * Retourne le droit d'utilisateur pour un ensemble de droit donnée en paramètre
     * @param array $userMenuAccess : liste de droit d'accès [gestion, création, ...]
     * @return int
     */
    public function getUserMenuAccess(array $userMenuAccess)
    {

        return $this->utilisateurManager->getUserMenuAccess($userMenuAccess);
    }

    public function slugify()
    {

    }

    /**
     * Converti un text en float
     * @param null|string $textNumber
     * @return float
     */
    public function textNumberTofloat(?string $textNumber = "0"): float {
        return (float) $textNumber;
    }


    /**
     * Retourne une difference de date
     * @param \DateTime $dateBegin
     * @param \DateTime $dateEnd
     * @return bool|\DateInterval
     */
    public function diffDate(?\DateTime $dateBegin, ?\DateTime $dateEnd) {
        if($dateEnd && $dateBegin) {
            $interval = $dateBegin->diff($dateEnd);

            if ($interval->format('%a')) {
                return $interval->format('%a jour(s)');
            }
            if ($interval->format('%h')) {
                return $interval->format('%h heure(s)');
            }
            if ($interval->format('%m')) {
                return $interval->format('%m mois');
            }
        }

        return null;
    }

    public function translateLetterToWord($text) {
        switch ($text) {
            case "R" :
                $type = typeFormation::FORMATION_INTER;
                break;
            case "S" :
                $type = typeFormation::FORMATION_SOUS_TRAITANCE;
                break;
            default:
                $type = typeFormation::FORMATION_INTRA;
                break;
        }

        return $type;
    }
    
    /**
     * Renvoi le mois selon l'entrée
     * @param int $monthIdx
     * @return string
     */
    public function intMonthToLetter(int $monthIdx) {
        $months = array (1=>'Janvier',2=>'Février',3=>'Mars',4=>'Avril',5=>'Mai',6=>'Juin',7=>'Juillet',8=>'Août',9=>'Septembre',10=>'Octobre',11=>'Novembre',12=>'Décembre');
        
        if (!isset($months[$monthIdx])) {
            return "";
        }
        
        return $months[$monthIdx];
    }

    public function phpUcwords($string) {

        return ucwords($string);
    }
    
    public function verifyDate(\DateTime $date) {
        
        return \App\Utils\DateUtils::verifyDate($date);
    }
    
}