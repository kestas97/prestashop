<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA6xdksr\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA6xdksr/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerA6xdksr.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerA6xdksr\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerA6xdksr\appProdProjectContainer([
    'container.build_hash' => 'A6xdksr',
    'container.build_id' => '786570ac',
    'container.build_time' => 1661450371,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA6xdksr');