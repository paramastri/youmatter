<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
// use Phalcon\Init\Dashboard\Models\Users;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;

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
        $_isAdmin = $this->session->get('admin');
        $_isPasien = $this->session->get('pasien');
        $_isPsikolog = $this->session->get('psikolog');
        if ($_isAdmin) {
            $this->response->redirect('halamanadmin');
        }
        if ($_isPasien) {
            $this->response->redirect('halamanpasien');
        }
        if ($_isPsikolog) {
            $this->response->redirect('halamanpsikolog');
        }
        $this->view->pick('home');
    }

    public function artikelAction()
    {
        $this->view->pick('artikel');
    }

    public function route404Action()
    {
        $this->view->pick('error');
    }




}   