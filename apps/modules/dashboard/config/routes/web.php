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

//route -route lain

return $router;