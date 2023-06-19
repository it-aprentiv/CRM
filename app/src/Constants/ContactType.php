<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 09/12/2019
 * Time: 10:37
 */

namespace App\Constants;


class ContactType
{
    const TYPE_CLIENT = 2;
    const TYPE_OPCA = 3;
    const TYPE_STAGIAIRE = 5;
    const TYPE_FORMATEUR = 6;

    const ALL_TYPE = [
        'client' => self::TYPE_CLIENT,
        'opca' => self::TYPE_OPCA,
        'stagiaire' => self::TYPE_STAGIAIRE,
        'formateur' => self::TYPE_FORMATEUR
    ];

    public static $contactType = [
        self::TYPE_STAGIAIRE => 'Stagiaire',
        self::TYPE_FORMATEUR => 'formateur',
    ];
}