<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Admin;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;

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
                    echo "Gagal masuk sebagai admin. Silakan cek kembali username dan password anda.";
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
}