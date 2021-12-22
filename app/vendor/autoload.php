<?php

if (\PHP_VERSION_ID < 50600) {
    echo sprintf("Fatal Error: composer.lock was created for PHP version 5.6.40 or higher but the current PHP version is %d.%d.%d.\n", PHP_MAJOR_VERSION, PHP_MINOR_VERSION, PHP_RELEASE_VERSION);
    exit(1);
}

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInit69b80b3c91ece68e0e6a721f32102234::getLoader();
