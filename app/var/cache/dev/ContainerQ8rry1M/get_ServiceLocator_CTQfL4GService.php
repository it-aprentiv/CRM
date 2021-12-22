<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.CTQfL4G' shared service.

return $this->privates['.service_locator.CTQfL4G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'adresseRepository' => ['privates', 'App\\Repository\\AdresseRepository', 'getAdresseRepositoryService.php', true],
    'contactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService.php', true],
    'mailRepository' => ['privates', 'App\\Repository\\MailRepository', 'getMailRepositoryService.php', true],
    'telephoneRepository' => ['privates', 'App\\Repository\\TelephoneRepository', 'getTelephoneRepositoryService.php', true],
    'villeRepository' => ['privates', 'App\\Repository\\VilleRepository', 'getVilleRepositoryService.php', true],
], [
    'adresseRepository' => 'App\\Repository\\AdresseRepository',
    'contactRepository' => 'App\\Repository\\ContactRepository',
    'mailRepository' => 'App\\Repository\\MailRepository',
    'telephoneRepository' => 'App\\Repository\\TelephoneRepository',
    'villeRepository' => 'App\\Repository\\VilleRepository',
]);
