<?php

return array(
    'dashboard' => [
        'namespace' => 'Its\Example\Dashboard',
        'webControllerNamespace' => 'Its\Example\Dashboard\Presentation\Web\Controller',
        'apiControllerNamespace' => '',
        'className' => 'Its\Example\Dashboard\Module',
        'path' => APP_PATH . '/modules/dashboard/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'index',
        'defaultAction' => 'home',
    ],

    'tanyajawab' => [
        'namespace' => 'Its\Example\Tanyajawab',
        'webControllerNamespace' => 'Its\Example\Tanyajawab\Presentation\Web\Controller',
        'apiControllerNamespace' => '',
        'className' => 'Its\Example\Tanyajawab\Module',
        'path' => APP_PATH . '/modules/tanyajawab/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'index',
        'defaultAction' => 'home',
    ],
);