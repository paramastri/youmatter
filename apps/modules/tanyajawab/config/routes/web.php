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

$router->addPost('/storeartikel', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'storeartikel'
]);

$router->addGet('/artikelsaya', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'artikelsaya'
]);

$router->addGet('/listartikelsaya', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'listartikelsaya'
]);

$router->addGet('/artikelsayadet/{id}', [
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'artikelsayadet'
]);

$router->addGet('/editartikel/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'editartikel'
]);

$router->addPost('/storeeditartikel',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'storeeditartikel'
]);

$router->addGet('/hapusartikel/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'artikel',
    'action' => 'hapusartikel'
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

$router->addGet('/pertanyaanumum',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'pertanyaanumum'
]);

$router->addGet('/listpertanyaansaya',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'listpertanyaansaya'
]);

$router->addGet('/listpertanyaanumum',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'listpertanyaanumum'
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

$router->addGet('/pertanyaanumumdet/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'pertanyaanumumdet'
]);

$router->addGet('/jawab/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'jawab'
]); 

$router->addGet('/urungkanjawab/{id}',[
    'namespace' => $namespace,
    'module' => 'tanyajawab',
    'controller' => 'tanya',
    'action' => 'urungkanjawab'
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