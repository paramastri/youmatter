<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

class UserController extends Controller
{
    public function psikologAction()
    {
        $this->view->pick('daftarpsikolog');
    }

    public function pasienAction()
    {
        $this->view->pick('daftarpasien');
    }
}