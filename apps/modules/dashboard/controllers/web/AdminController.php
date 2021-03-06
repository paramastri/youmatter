<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Admin;
use Phalcon\Init\Dashboard\Models\Psikolog;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;
use Phalcon\Flash\Session;
use Phalcon\Mvc\Model\Query;

class AdminController extends Controller
{
    public function daftaradminAction()
    {   
        $this->view->pick('daftaradmin');
    }

    public function storeregisterAction(){

        $admin = new Admin();
        $admin->username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $admin->password = $this->security->hash($password);
        $user = Admin::findFirst("username = '$admin->username'");
        if ($user) { 
            // $this->flashSession->error("Gagal register. Username telah digunakan.");
            // return $this->response->redirect('daftaradmin');
            echo "username sudah digunakan.";
        }
        else
        {
            $admin->save();
            // printf (strlen($admin->password));
            // echo "masuk";
            return $this->response->redirect('loginadmin');
        }
        
    }

    public function loginadminAction()
    {
        $_isAdmin = $this->session->get('admin');
        if ($_isAdmin) {
            $this->response->redirect('halamanadmin');
        }
        $_isPsi= $this->session->get('psikolog');
        if ($_isPsi) {
            $this->response->redirect('halamanpsikolog');
        }
        $_isPas= $this->session->get('pasien');
        if ($_isPas) {
            $this->response->redirect('halamanpasien');
        }
        $this->view->pick('loginadmin');
    }

    public function storeloginAction()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        $user = Admin::findFirst("username = '$username'");
            if ($user){
                if($this->security->checkHash($pass, $user->password)){
                    $this->session->set(
                        'admin',
                        [
                            'id' => $user->id,
                            'username' => $user->username,
                        ]
                    );
                    // echo "Masuk bos mantap";
                    (new Response())->redirect('halamanadmin')->send();
                }
                else{
                    // echo "Gagal masuk sebagai admin. Silakan cek kembali username dan password anda.";
                    $this->flashSession->error("Gagal masuk sebagai admin. Silakan cek kembali username dan password anda.");
                    $this->response->redirect('loginadmin');
                }
            }
            else{
                $this->flashSession->error("Akun admin tidak ditemukan.");
                // echo "Akun tidak ditemukan.";
                    $this->response->redirect('loginadmin');
            }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("loginadmin");
    }

    public function halamanadminAction()
    {   
        $id = $this->session->get('admin');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        $this->view->pick('halamanadmin');
    }

    public function listpsikologAction()
    {
        $listusers = Psikolog::find();
        $data = array();

        foreach ($listusers as $listuser)
        {

            if($listuser->status == 1)
            {
                $status_sekarang = "Sudah";
            }
            else
            {
                $status_sekarang = "Belum";
            }

            $data[] = array(
                'username' => $listuser->username,
                'status' => $status_sekarang,
                'link' => $listuser->id,
            );
        }

        $content = json_encode($data);
        return $this->response->setContent($content);

    }

    public function listpsikologviewAction($id)
    {

    }

    public function verifdetailAction($id)
    {   
        $ids = $this->session->get('admin');
        if ($ids == NULL) {
            (new Response())->redirect('loginadmin')->send();          
        }

        $_isID = Psikolog::findFirst("id='$id'");
        if($_isID)
        {
            $this->view->pick('verifdetail');
            $this->view->data = Psikolog::findFirst("id='$id'");
        }
        else{
            $this->flashSession->error("Akun psikolog tidak ditemukan.");
            $this->response->redirect('halamanadmin');
        }
        
    }
    
    public function verifpsikologAction($id)
    {
        $_isID = Psikolog::findFirst("id='$id'");
        if($_isID)
        {
            $user = Psikolog::findFirst("id='$id'");
            $user->status = 1;
            $user->save();
            return $this->response->redirect('verifdetail' . '/' . $id);
        }
        else{
            $this->flashSession->error("Akun psikolog tidak ditemukan.");
            $this->response->redirect('halamanadmin');
        }
        // $user = Psikolog::findFirst("id='$id'");
        // $user->status = 1;
        // $user->save();
        // return $this->response->redirect('verifdetail' . '/' . $id);
    }

    public function unverifpsikologAction($id)
    {
        $_isID = Psikolog::findFirst("id='$id'");
        if($_isID)
        {
            $user = Psikolog::findFirst("id='$id'");
            $user->status = 0;
            $user->save();
            return $this->response->redirect('verifdetail' . '/' . $id);
        }
        else{
            $this->flashSession->error("Akun psikolog tidak ditemukan.");
            $this->response->redirect('halamanadmin');
        }
        // $user = Psikolog::findFirst("id='$id'");
        // $user->status = 0;
        // $user->save();
        // return $this->response->redirect('verifdetail' . '/' . $id);
       
    }
}