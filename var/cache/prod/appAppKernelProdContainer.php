<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTvYru2e\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTvYru2e/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerTvYru2e.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerTvYru2e\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerTvYru2e\appAppKernelProdContainer([
    'container.build_hash' => 'TvYru2e',
    'container.build_id' => 'f8c8fe36',
    'container.build_time' => 1699966101,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTvYru2e');
