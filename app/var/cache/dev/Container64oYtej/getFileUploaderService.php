<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\FileUploader' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/FileUploader.php';

return $this->privates['App\\Service\\FileUploader'] = new \App\Service\FileUploader(($this->targetDirs[3].'/catalogues_dir'));
