<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Pp1.fpB' shared service.

return $this->privates['.service_locator.Pp1.fpB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'formateurCommentdispRepository' => ['privates', 'App\\Repository\\FormateurCommentdispRepository', 'getFormateurCommentdispRepositoryService.php', true],
    'formateurRepository' => ['privates', 'App\\Repository\\FormateurRepository', 'getFormateurRepositoryService.php', true],
    'noteRepository' => ['privates', 'App\\Repository\\NoteRepository', 'getNoteRepositoryService.php', true],
], [
    'formateurCommentdispRepository' => 'App\\Repository\\FormateurCommentdispRepository',
    'formateurRepository' => 'App\\Repository\\FormateurRepository',
    'noteRepository' => 'App\\Repository\\NoteRepository',
]);
