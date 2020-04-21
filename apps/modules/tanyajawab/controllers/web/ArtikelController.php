<?php

namespace Phalcon\Init\Tanyajawab\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Tanyajawab\Models\Artikel;
use Phalcon\Init\Tanyajawab\Models\Pertanyaan;
use Phalcon\Init\Dahsboard\Models\Psikolog;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
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
    	$id = $this->session->get('psikolog');
        if ($id == NULL) {
            (new Response())->redirect('psikolog')->send();          
        }
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

    public function artikelsayaAction()
    {
    	$id = $this->session->get('psikolog');
        if ($id == NULL) {
            (new Response())->redirect('psikolog')->send();          
        }
        $this->view->pick('artikelsaya');
    }

    public function listartikelsayaAction()
    {
        $id = $this->session->get('psikolog')['id'];
        $artikels = Artikel::find([
            "id_psikolog='$id'",
            ]);
        $data = array();

        foreach ($artikels as $artikel) {
                
            $data[] = array(
                'id' => $artikel->id,
                'kode' => $artikel->kode,
                'penulis' => $artikel->penulis,
                'judul' => $artikel->judul,
                'link' => $artikel->id,
            );

        }
        
        $content = json_encode($data);
        return $this->response->setContent($content);
    }

    public function artikelsayadetAction($id)
    {   
        $ids = $this->session->get('psikolog');
        if ($ids == NULL) {
        (new Response())->redirect('psikolog')->send();          
        }
        $this->view->pick('artikelsayadet');
        $this->view->data = Artikel::findFirst("id='$id'");
    }

    public function editartikelAction($id)
    {
        $_isPsikolog = $this->session->get('psikolog');
        if (!$_isPsikolog) 
        {
            $this->response->redirect('psikolog');
        }

        $data = Artikel::findFirst("id='$id'");
        $this->view->pick('editartikel');
        $this->view->data = $data;
    }

    public function storeeditartikelAction()
    {
        $id = $this->request->getPost('id');
        $artikel = Artikel::findFirst("id='$id'");
        $penulis = $this->request->getPost('penulis');
        $kode = $this->request->getPost('kode');
        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');
        $artikel->penulis = $penulis;
        $artikel->kode = $kode;
        $artikel->judul = $judul;
        $artikel->isi = $isi;
        $artikel->save();
        $this->response->redirect('artikelsayadet'.'/'.$id);
    }

    public function hapusartikelAction($id){
    	$artikel = Artikel::findFirst("id='$id'");
    	$pertanyaan = Pertanyaan::findFirst("id='$artikel->kode'");
        $pertanyaan->status = 0;
        $pertanyaan->save();
        $this->db->query("delete from artikel where id='".$id."'");
        // $this->db->query("update pertanyaan set status='0' where id='".$artikel->kode."'");
        $this->response->redirect('artikelsaya');
    }

}