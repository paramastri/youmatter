<?php

namespace Phalcon\Init\Tanyajawab\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
// use Phalcon\Init\Dashboard\Models\Users;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class TanyaController extends Controller
{

    public function tanyaAction()
    {
        $this->view->pick('tanya');
    }
}