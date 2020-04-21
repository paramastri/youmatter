<?php

$namespace =  'Phalcon\Init\Tanyajawab\Controllers\Web';

// ARTIKEL

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

// TANYA

$router->addGet('/tanya', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'tanya'
]);

$router->addPost('/tanya', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'storetanya'
]);

$router->addGet('/pertanyaansaya',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'pertanyaansaya'
]);

$router->addGet('/listpertanyaansaya',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'listpertanyaansaya'
]);

$router->addGet('/listpertanyaansayaview/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'listpertanyaansayaview'
]); 

$router->addGet('/pertanyaansayadet/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'pertanyaansayadet'
]);

$router->addGet('/editpertanyaan/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'editpertanyaan'
]);

$router->addPost('/storeeditpertanyaan',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'storeeditpertanyaan'
]);

$router->addGet('/hapuspertanyaan/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'hapuspertanyaan'
]);

return $router;