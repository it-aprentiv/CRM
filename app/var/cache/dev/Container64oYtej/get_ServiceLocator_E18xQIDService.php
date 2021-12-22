<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.E18xQID' shared service.

return $this->privates['.service_locator.E18xQID'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
    'form.factory' => ['services', 'form.factory', 'getForm_FactoryService.php', true],
    'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
    'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
    'router' => ['services', 'router', 'getRouterService', false],
    'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService.php', true],
    'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
    'serializer' => ['services', 'serializer', 'getSerializerService.php', true],
    'session' => ['services', 'session', 'getSessionService.php', true],
    'twig' => ['services', 'twig', 'getTwigService', false],
], [
    'doctrine' => '?',
    'form.factory' => '?',
    'http_kernel' => '?',
    'parameter_bag' => '?',
    'request_stack' => '?',
    'router' => '?',
    'security.authorization_checker' => '?',
    'security.csrf.token_manager' => '?',
    'security.token_storage' => '?',
    'serializer' => '?',
    'session' => '?',
    'twig' => '?',
]);
