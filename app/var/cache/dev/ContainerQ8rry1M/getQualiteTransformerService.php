<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\DataTransformer\QualiteTransformer' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/DataTransformerInterface.php';
include_once $this->targetDirs[3].'/src/Form/DataTransformer/QualiteTransformer.php';

return $this->privates['App\\Form\\DataTransformer\\QualiteTransformer'] = new \App\Form\DataTransformer\QualiteTransformer(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
