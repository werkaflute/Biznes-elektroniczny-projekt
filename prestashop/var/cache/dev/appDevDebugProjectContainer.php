<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVbojvs0\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVbojvs0/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVbojvs0.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVbojvs0\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVbojvs0\appDevDebugProjectContainer([
    'container.build_hash' => 'Vbojvs0',
    'container.build_id' => '24e6c670',
    'container.build_time' => 1604605389,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVbojvs0');
