<?php

return array(
    'dashboard' => [
        'namespace' => 'Phalcon\Init\Dashboard',
        'webControllerNamespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
        'apiControllerNamespace' => 'Phalcon\Init\Dashboard\Controllers\Api',
        'className' => 'Phalcon\Init\Dashboard\Module',
        'path' => APP_PATH . '/modules/dashboard/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'index',
        'defaultAction' => 'home'
    ],

    'tanyajawab' => [
        'namespace' => 'Phalcon\Init\Tanyajawab',
        'webControllerNamespace' => 'Phalcon\Init\Tanyajawab\Controllers\Web',
        'apiControllerNamespace' => 'Phalcon\Init\Tanyajawab\Controllers\Api',
        'className' => 'Phalcon\Init\Tanyajawab\Module',
        'path' => APP_PATH . '/modules/tanyajawab/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'index',
        'defaultAction' => 'home'
    ],

);