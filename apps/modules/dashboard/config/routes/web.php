<?php

$namespace =  'Phalcon\Init\Dashboard\Controllers\Web';

$router->addGet('/psikolog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'psikolog',
    'action' => 'psikolog'
]);


// ADMIN

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

$router->addGet('/loginadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'loginadmin'
]);

$router->addPost('/loginadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'storelogin'
]);

$router->addGet('/logoutadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'logout'
]);

$router->addGet('/halamanadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'halamanadmin'
]);

// PASIEN

$router->addGet('/pasien', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pasien',
    'action' => 'pasien'
]);

$router->addPost('/daftarpasien', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pasien',
    'action' => 'storeregister'
]);

$router->addPost('/loginpasien', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pasien',
    'action' => 'storelogin'
]);

$router->addGet('/logoutpasien', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pasien',
    'action' => 'logout'
]);

$router->addGet('/halamanpasien', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pasien',
    'action' => 'halamanpasien'
]);

return $router;