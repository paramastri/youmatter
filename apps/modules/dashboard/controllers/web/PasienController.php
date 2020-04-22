<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Pasien;
use Phalcon\Init\Dashboard\Models\Psikolog;
use Phalcon\Init\Dashboard\Models\Admin;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;

class PasienController extends Controller
{

    public function pasienAction()
    {
        $_isPasien= $this->session->get('pasien');
        if ($_isPasien) {
            $this->response->redirect('halamanpasien');
        }
        $_isPsi= $this->session->get('psikolog');
        if ($_isPsi) {
            $this->response->redirect('halamanpsikolog');
        }
        $_isAd= $this->session->get('admin');
        if ($_isAd) {
            $this->response->redirect('halamanadmin');
        }
        $this->view->pick('daftarpasien');
    }

    public function storeregisterAction(){

        $pasien = new Pasien();
        $pasien->username = $this->request->getPost('username');
        $pasien->email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $pasien->password = $this->security->hash($password);
        $user = Pasien::findFirst("username = '$pasien->username'");
        if ($user) { 
            // $this->flashSession->error("Gagal register. Username telah digunakan.");
            // return $this->response->redirect('daftarpasien');
            echo "username sudah digunakan.";
        }
        else
        {
            $pasien->save();
            // printf (strlen($pasien->password));
            // echo "masuk";
            return $this->response->redirect('pasien');
        }
        
    }

    public function storeloginAction()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        $user = Pasien::findFirst("username = '$username'");
            if ($user){
                if($this->security->checkHash($pass, $user->password)){
                    $this->session->set(
                        'pasien',
                        [
                            'id' => $user->id,
                            'username' => $user->username,
                        ]
                    );
                    // echo "Masuk bos mantap";
                    (new Response())->redirect('halamanpasien')->send();
                }
                else{
                    echo "Gagal masuk sebagai pasien. Silakan cek kembali username dan password anda.";
                    // $this->response->redirect('loginadmin');
                }
            }
            else{
                // $this->flashSession->error("Gagal masuk sebagai admin. Silakan cek kembali username dan password anda.");
                echo "Akun tidak ditemukan.";
                    // $this->response->redirect('loginadmin');
            }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("pasien");
    }

    public function halamanpasienAction()
    {   
        $id = $this->session->get('pasien');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('pasien')->send();          
        }
        $this->view->pick('halamanpasien');
    }
}