<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8AYWdpF\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8AYWdpF/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container8AYWdpF.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container8AYWdpF\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container8AYWdpF\App_KernelProdContainer([
    'container.build_hash' => '8AYWdpF',
    'container.build_id' => '87523b8b',
    'container.build_time' => 1587972046,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8AYWdpF');