<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\Type\CrmDateType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Form/Type/CrmDateType.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/DataTransformerInterface.php';
include_once $this->targetDirs[3].'/src/Form/DataTransformer/DateTimeTransformer.php';

return $this->privates['App\\Form\\Type\\CrmDateType'] = new \App\Form\Type\CrmDateType(($this->privates['App\\Form\\DataTransformer\\DateTimeTransformer'] ?? ($this->privates['App\\Form\\DataTransformer\\DateTimeTransformer'] = new \App\Form\DataTransformer\DateTimeTransformer())));
