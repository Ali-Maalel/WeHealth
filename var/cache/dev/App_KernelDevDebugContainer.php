<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPw8XWbU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPw8XWbU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPw8XWbU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPw8XWbU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPw8XWbU\App_KernelDevDebugContainer([
    'container.build_hash' => 'Pw8XWbU',
    'container.build_id' => '2777d3a0',
    'container.build_time' => 1678359391,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPw8XWbU');
