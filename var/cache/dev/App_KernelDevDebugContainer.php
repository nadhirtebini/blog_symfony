<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container680ywGP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container680ywGP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container680ywGP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container680ywGP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container680ywGP\App_KernelDevDebugContainer([
    'container.build_hash' => '680ywGP',
    'container.build_id' => '98276ba4',
    'container.build_time' => 1717671579,
], __DIR__.\DIRECTORY_SEPARATOR.'Container680ywGP');
