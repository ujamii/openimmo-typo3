<?php

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

$loader = ComposerAutoloaderInit90ff3e7cce3d7f9ef4facf9d2a45c3ff::getLoader();
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;