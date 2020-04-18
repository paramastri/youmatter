<?php

namespace Phalcon\Init\Tanyajawab;

use Phalcon\Di\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Phalcon\Init\Tanyajawab\Controllers\Web' => __DIR__ . '/controllers/web',
            'Phalcon\Init\Tanyajawab\Controllers\Api' => __DIR__ . '/controllers/api',
            'Phalcon\Init\Tanyajawab\Models' => __DIR__ . '/models',
            'Phalcon\Init\Tanyajawab\Middlewares' => __DIR__ . '/middleware',
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
    }
}