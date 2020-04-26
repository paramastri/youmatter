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
        $artikel->penulis = $this->session->get('psikolog')['nama'];
        $artikel->kode = $this->request->getPost('kode');
        $artikel->judul = $this->request->getPost('judul');
        $artikel->isi = $this->request->getPost('isi');
        $user = Artikel::findFirst("kode = '$artikel->kode'");
        $pertanyaan = Pertanyaan::findFirst("id='$artikel->kode'");
        if($pertanyaan)
        {
            if ($user) {
                $this->flashSession->error("Pertanyaan dengan kode tersebut sudah ditulis artikelnya. Silakan jawab pertanyaan lain.");
                return $this->response->redirect('tulisartikel');
            }            else{
                $artikel->save();
                return $this->response->redirect('artikelsaya');
            }
        }
        else{
            $this->flashSession->error("Pertanyaan dengan kode tersebut tidak ditemukan.");
            return $this->response->redirect('tulisartikel');
        }
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
        $idpsi = $this->session->get('psikolog')['id'];
        if ($ids == NULL) {
        (new Response())->redirect('psikolog')->send();          
        }

        $_isID = Artikel::findFirst("id='$id'");
        if($_isID)
        {
            if ($idpsi != $_isID->id_psikolog) {
                $this->response->redirect('artikelsaya');
            }
            $this->view->pick('artikelsayadet');
            $this->view->data = Artikel::findFirst("id='$id'");
        }
        else{
            $this->flashSession->error("Artikel tidak ditemukan.");
            $this->response->redirect('artikelsaya');
        }

    }

    public function editartikelAction($id)
    {
        $_isPsikolog = $this->session->get('psikolog');
        $idpsi = $this->session->get('psikolog')['id'];
        if (!$_isPsikolog) 
        {
            $this->response->redirect('psikolog');
        }

        $_isID = Artikel::findFirst("id='$id'");
        if($_isID)
        {
            if ($idpsi != $_isID->id_psikolog) {
                $this->response->redirect('artikelsaya');
            }
            $data = Artikel::findFirst("id='$id'");
            $this->view->pick('editartikel');
            $this->view->data = $data;
        }
        else{
            $this->flashSession->error("Artikel tidak ditemukan.");
            $this->response->redirect('artikelsaya');
        }

    }

    public function storeeditartikelAction()
    {
        $id = $this->request->getPost('id');
        $artikel = Artikel::findFirst("id='$id'");
        $penulis = $this->session->get('psikolog')['nama'];
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

        $_isID = Artikel::findFirst("id='$id'");
        $idpsi = $this->session->get('psikolog')['id'];
        if($_isID)
        {
            if ($idpsi != $_isID->id_psikolog) {
                $this->response->redirect('artikelsaya');
            }
            else{
                $artikel = Artikel::findFirst("id='$id'");
                $pertanyaan = Pertanyaan::findFirst("id='$artikel->kode'");
                $pertanyaan->status = 0;
                $pertanyaan->save();
                $this->db->query("delete from artikel where id='".$id."'");
                $this->response->redirect('artikelsaya');
            }
        }
        else{
            $this->flashSession->error("Artikel tidak ditemukan.");
            $this->response->redirect('artikelsaya');
        }

    	
    }

}