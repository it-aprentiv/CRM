<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.xNrbj.U' shared service.

return $this->privates['.service_locator.xNrbj.U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'contact' => ['privates', '.errored..service_locator.xNrbj.U.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator.xNrbj.U": it references class "App\\Entity\\Contact" but no such service exists.'],
    'contactmanager' => ['privates', 'App\\Manager\\ContactManager', 'getContactManagerService.php', true],
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
], [
    'contact' => 'App\\Entity\\Contact',
    'contactmanager' => 'App\\Manager\\ContactManager',
    'em' => '?',
]);
