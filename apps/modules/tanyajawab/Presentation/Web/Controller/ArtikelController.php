<?php

namespace Its\Example\Tanyajawab\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

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