<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVWHuuMc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVWHuuMc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVWHuuMc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVWHuuMc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVWHuuMc\App_KernelDevDebugContainer([
    'container.build_hash' => 'VWHuuMc',
    'container.build_id' => 'f2c33183',
    'container.build_time' => 1685519642,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVWHuuMc');
