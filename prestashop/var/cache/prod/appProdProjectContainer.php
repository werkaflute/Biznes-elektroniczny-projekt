<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2dih1zc\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2dih1zc/appProdProjectContainer.php') {
    touch(__DIR__.'/Container2dih1zc.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container2dih1zc\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container2dih1zc\appProdProjectContainer([
    'container.build_hash' => '2dih1zc',
    'container.build_id' => 'abfda632',
    'container.build_time' => 1603285553,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2dih1zc');
