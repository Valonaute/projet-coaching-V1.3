<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8EQJvCH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8EQJvCH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8EQJvCH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8EQJvCH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8EQJvCH\App_KernelDevDebugContainer([
    'container.build_hash' => '8EQJvCH',
    'container.build_id' => 'd32c6b04',
    'container.build_time' => 1687446021,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8EQJvCH');