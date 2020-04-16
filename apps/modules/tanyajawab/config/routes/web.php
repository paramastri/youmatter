<?php

$namespace = 'Its\Example\Tanyajawab\Presentation\Web\Controller';

$router->addGet('/artikel', [
	'namespace' => $namespace,
	'module' => 'tanyajawab',
	'controller' => 'artikel',
	'action' => 'artikel'
]);

//route -route lain

return $router;