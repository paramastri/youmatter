<?php

namespace Its\Example\Tanyajawab\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

class TanyaController extends Controller
{

    public function tanyaAction()
    {
    	$this->view->pick('tanya');
    }
}