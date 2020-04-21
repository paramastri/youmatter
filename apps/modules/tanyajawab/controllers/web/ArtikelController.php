<?php

namespace Phalcon\Init\Tanyajawab\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Tanyajawab\Models\Artikel;
use Phalcon\Init\Dahsboard\Models\Psikolog;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class ArtikelController extends Controller
{

    public function artikelAction()
    {
    	$artikels = Artikel::find();
        $this->view->artikels = $artikels;
        $this->view->pick('artikel');
    }

    public function tulisartikelAction()
    {
        $this->view->pick('tulisartikel');
    }

    public function storeartikelAction()
    {
        $artikel = new Artikel();
        $artikel->id_psikolog = $this->session->get('psikolog')['id'];
        $artikel->penulis = $this->request->getPost('penulis');
        $artikel->kode = $this->request->getPost('kode');
        $artikel->judul = $this->request->getPost('judul');
        $artikel->isi = $this->request->getPost('isi');
        $artikel->save();
        return $this->response->redirect('artikelsaya');
    }
}