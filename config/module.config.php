<?php

$config      = [];

$configFiles = [
    include __DIR__ . '/autoload/module_layout.config.php',
    include __DIR__ . '/autoload/navigator.config.php',
    include __DIR__ . '/autoload/router.config.php',
    include __DIR__ . '/autoload/translator.config.php',
    include __DIR__ . '/autoload/view_manager.config.php'    
];

foreach ($configFiles as $configFile) {
    $config = \Zend\Stdlib\ArrayUtils::merge($config, $configFile);
}

return $config;