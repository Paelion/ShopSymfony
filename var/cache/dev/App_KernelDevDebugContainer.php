<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL5FKf4p\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL5FKf4p/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerL5FKf4p.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerL5FKf4p\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerL5FKf4p\App_KernelDevDebugContainer([
    'container.build_hash' => 'L5FKf4p',
    'container.build_id' => 'dcf6a1af',
    'container.build_time' => 1585151379,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL5FKf4p');
