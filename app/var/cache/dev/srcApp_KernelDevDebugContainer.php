<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ8rry1M\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ8rry1M/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ8rry1M.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ8rry1M\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQ8rry1M\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Q8rry1M',
    'container.build_id' => '8e642846',
    'container.build_time' => 1640001463,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ8rry1M');
