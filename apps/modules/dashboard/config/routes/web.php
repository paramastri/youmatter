<?php

$namespace =  'Phalcon\Init\Dashboard\Controllers\Web';

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

$router->addGet('/listpsikolog',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'listpsikolog'
]);

$router->addGet('/listpsikologview/{id}',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'listpsikologview'
]);  

$router->addGet('/verifdetail/{id}',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'verifdetail'
]);

$router->addGet('/verifpsikolog/{id}',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'verifpsikolog'
]); 

$router->addGet('/unverifpsikolog/{id}',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'unverifpsikolog'
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


// PSIKOLOG

$router->addGet('/psikolog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'psikolog',
    'action' => 'psikolog'
]);

$router->addPost('/daftarpsikolog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'psikolog',
    'action' => 'storeregister'
]);

$router->addPost('/loginpsikolog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'psikolog',
    'action' => 'storelogin'
]);

$router->addGet('/logoutpsikolog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'psikolog',
    'action' => 'logout'
]);

$router->addGet('/halamanpsikolog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'psikolog',
    'action' => 'halamanpsikolog'
]);

return $router;