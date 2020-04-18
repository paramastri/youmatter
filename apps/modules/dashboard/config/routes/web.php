<?php

$namespace =  'Phalcon\Init\Dashboard\Controllers\Web';

$router->addGet('/psikolog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'psikolog',
    'action' => 'psikolog'
]);

$router->addGet('/pasien', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pasien',
    'action' => 'pasien'
]);

// ADMIN: login

$router->addGet('/daftaradmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'daftaradmin'
]);

$router->addPost('/daftaradmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'storeregister'
]);

$router->addPost('/loginadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'storelogin'
]);

// ADMIN: halaman

$router->addPost('/halamanadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'halamanadmin'
]);

return $router;