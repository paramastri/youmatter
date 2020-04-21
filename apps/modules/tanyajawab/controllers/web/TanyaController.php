<?php

namespace Phalcon\Init\Tanyajawab\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Pasien;
use Phalcon\Init\Tanyajawab\Models\Pertanyaan;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

class TanyaController extends Controller
{

    public function tanyaAction()
    {
    	$id = $this->session->get('pasien');
        if ($id == NULL) {
            (new Response())->redirect('pasien')->send();          
        }
        $this->view->pick('tanya');
    }

    public function storetanyaAction()
    {
        $pertanyaan = new Pertanyaan();
        $pertanyaan->id_pasien = $this->session->get('pasien')['id'];
        $pertanyaan->topik = $this->request->getPost('topik');
        $pertanyaan->pertanyaan = $this->request->getPost('pertanyaan');
        $pertanyaan->status = 0;
        $pertanyaan->save();
        return $this->response->redirect('pertanyaansaya');
    }

    public function pertanyaansayaAction()
    {   
        $id = $this->session->get('pasien');
        if ($id == NULL) {
            (new Response())->redirect('pasien')->send();          
        }
        $this->view->pick('pertanyaansaya');
    }

    public function listpertanyaansayaAction()
    {
        $id = $this->session->get('pasien')['id'];
        $pertanyaans = Pertanyaan::find([
            "id_pasien='$id'",
            ]);
        $data = array();

        foreach ($pertanyaans as $pertanyaan) {

            if($pertanyaan->status == 1)
            {
                $status_sekarang = "Terjawab";
            }
            else
            {
                $status_sekarang = "Belum Terjawab";
            }
                
            $data[] = array(
                'id' => $pertanyaan->id,
                'topik' => $pertanyaan->topik,
                'pertanyaan' => $pertanyaan->pertanyaan,
                'status' => $status_sekarang,
                'link' => $pertanyaan->id,
            );

        }
        
        $content = json_encode($data);
        return $this->response->setContent($content);
    }

    public function listpertanyaansayaviewAction($id)
    {

    }

    public function pertanyaanumumAction()
    {   
        $id = $this->session->get('psikolog');
        if ($id == NULL) {
            (new Response())->redirect('psikolog')->send();          
        }
        $this->view->pick('pertanyaanumum');
    }

    public function pertanyaansayadetAction($id)
    {   
        $ids = $this->session->get('pasien');
        if ($ids == NULL) {
        (new Response())->redirect('pasien')->send();          
        }
        $this->view->pick('pertanyaansayadet');
        $this->view->data = Pertanyaan::findFirst("id='$id'");
    }

    public function pertanyaanumumdetAction($id)
    {   
        $ids = $this->session->get('psikolog');
        if ($ids == NULL) {
        (new Response())->redirect('psikolog')->send();          
        }
        $this->view->pick('pertanyaanumumdet');
        $this->view->data = Pertanyaan::findFirst("id='$id'");
    }

    public function listpertanyaanumumAction()
    {
        $pertanyaans = Pertanyaan::find();
        $data = array();

        foreach ($pertanyaans as $pertanyaan) {

            if($pertanyaan->status == 1)
            {
                $status_sekarang = "Terjawab";
            }
            else
            {
                $status_sekarang = "Belum Terjawab";
            }
                
            $data[] = array(
                'id' => $pertanyaan->id,
                'topik' => $pertanyaan->topik,
                'pertanyaan' => $pertanyaan->pertanyaan,
                'status' => $status_sekarang,
                'link' => $pertanyaan->id,
            );

        }
        
        $content = json_encode($data);
        return $this->response->setContent($content);
    }

    public function jawabAction($id)
    {
        $user = Pertanyaan::findFirst("id='$id'");
        $user->status = 1;
        $user->save();
        return $this->response->redirect('pertanyaanumumdet' . '/' . $id);
    }

    public function urungkanjawabAction($id)
    {
        $user = Pertanyaan::findFirst("id='$id'");
        $user->status = 0;
        $user->save();
        return $this->response->redirect('pertanyaanumumdet' . '/' . $id);
    }

    public function editpertanyaanAction($id)
    {
        $_isPasien = $this->session->get('pasien');
        if (!$_isPasien) 
        {
            $this->response->redirect('pasien');
        }

        $data = Pertanyaan::findFirst("id='$id'");
        $this->view->pick('editpertanyaan');
        $this->view->data = $data;
    }

    public function storeeditpertanyaanAction()
    {
        $id_pertanyaan = $this->request->getPost('id');
        $pertanyaans = Pertanyaan::findFirst("id='$id_pertanyaan'");
        $topik = $this->request->getPost('topik');
        $pertanyaan = $this->request->getPost('pertanyaan');
        $pertanyaans->topik = $topik;
        $pertanyaans->pertanyaan = $pertanyaan;
        // echo $pertanyaan->topik;
        // die();
        $pertanyaans->save();
        $this->response->redirect('pertanyaansayadet'.'/'.$id_pertanyaan);

        
      	
        // echo "ok";

        
    }

    public function hapuspertanyaanAction($id){
        $this->db->query("delete from pertanyaan where id='".$id."'");
        $this->response->redirect('pertanyaansaya');

    }

}