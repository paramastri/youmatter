<?php

$namespace = 'Its\Example\Dashboard\Presentation\Web\Controller';

$router->addGet('/artikel', [
	'namespace' => $namespace,
	'module' => 'dashboard',
	'controller' => 'index',
	'action' => 'artikel'
]);

$router->addGet('/dashboard/admin', [
	'namespace' => $namespace,
	'module' => 'dashboard',
	'controller' => 'index',
	'action' => 'admin'
]);

$router->addGet('/test', [
	'namespace' => 'Its\Example\Dashboard\Presentation\Web\Controller',
	'module' => 'dashboard',
	'controller' => 'Index',
	'action' => 'test'
]);

//route -route lain

return $router;