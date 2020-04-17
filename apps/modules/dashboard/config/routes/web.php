<?php

$namespace = 'Its\Example\Dashboard\Presentation\Web\Controller';


$router->addGet('/psikolog', [
	'namespace' => $namespace,
	'module' => 'dashboard',
	'controller' => 'user',
	'action' => 'psikolog'
]);

$router->addGet('/pasien', [
	'namespace' => $namespace,
	'module' => 'dashboard',
	'controller' => 'user',
	'action' => 'pasien'
]);

$router->addGet('/admin', [
	'namespace' => $namespace,
	'module' => 'dashboard',
	'controller' => 'user',
	'action' => 'loginadmin'
]);

//route -route lain

return $router;