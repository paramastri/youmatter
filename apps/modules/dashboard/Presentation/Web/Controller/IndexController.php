<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return "<h1>Homepages!</h1>";
    }

    public function homeAction()
    {
        $this->view->pick('home');
    }

    public function artikelAction()
    {
    	$this->view->pick('artikel');
    }

    public function adminAction()
    {
        echo "yeay";
    }
}