<?php

$namespace =  'Phalcon\Init\Tanyajawab\Controllers\Web';

$router->addGet('/artikel', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'artikel'
]);

$router->addGet('/tulisartikel', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'tulisartikel'
]);

$router->addGet('/tanya', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'tanya'
]);

return $router;