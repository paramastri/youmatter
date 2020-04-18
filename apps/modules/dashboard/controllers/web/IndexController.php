<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
// use Phalcon\Init\Dashboard\Models\Users;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class IndexController extends Controller
{
    public function indexAction()
    {
        $db = $this->getDI()->get('db');

        $sql = "SELECT * from pasien";

        $result = $db->fetchAll($sql, \Phalcon\Db\Enum::FETCH_ASSOC);

        echo var_dump($result);
    }

    public function homeAction()
    {
        $this->view->pick('home');
    }

    public function artikelAction()
    {
        $this->view->pick('artikel');
    }

}   