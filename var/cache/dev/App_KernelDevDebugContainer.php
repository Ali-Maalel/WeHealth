<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHevTIDd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHevTIDd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHevTIDd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHevTIDd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHevTIDd\App_KernelDevDebugContainer([
    'container.build_hash' => 'HevTIDd',
    'container.build_id' => 'e8efa61e',
    'container.build_time' => 1678289695,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHevTIDd');
