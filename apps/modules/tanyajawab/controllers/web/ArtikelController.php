<?php

namespace Phalcon\Init\Tanyajawab\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
// use Phalcon\Init\Dashboard\Models\Users;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class ArtikelController extends Controller
{

    public function artikelAction()
    {
        $this->view->pick('artikel');
    }

    public function tulisartikelAction()
    {
        $this->view->pick('tulisartikel');
    }
}