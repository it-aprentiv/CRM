<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.55O2wBe' shared service.

return $this->privates['.service_locator.55O2wBe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'security' => ['privates', 'security.helper', 'getSecurity_HelperService', false],
    'utilisateurManager' => ['privates', 'App\\Manager\\UtilisateurManager', 'getUtilisateurManagerService', false],
], [
    'em' => '?',
    'security' => '?',
    'utilisateurManager' => 'App\\Manager\\UtilisateurManager',
]);
