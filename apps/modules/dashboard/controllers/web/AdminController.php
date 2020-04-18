<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Admin;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

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
            $this->flashSession->error("Gagal register. Username telah digunakan.");
            return $this->response->redirect('daftaradmin');
        }
        else
        {
            $admin->save();
            $this->response->redirect('loginadmin');
        }
        
    }

    public function loginadminAction()
    {
        $this->view->pick('loginadmin');
    }

    public function storeloginAction()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        $user = admin::findFirst("username = '$username'");
            if ($user){
                if($this->security->checkHash($pass, $user->password)){
                    $this->session->set(
                        'admin',
                        [
                            'id' => $user->id,
                            'username' => $user->username
                        ]
                    );

                    (new Response())->redirect('admin/list')->send();
                }
                else{
                    $this->flashSession->error("Gagal masuk sebagai admin. Silakan cek kembali username dan password anda.");
                    $this->response->redirect('loginadmin');
                }
            }
            else{
                $this->flashSession->error("Gagal masuk sebagai admin. Silakan cek kembali username dan password anda.");
                    $this->response->redirect('loginadmin');
            }
    }

    public function halamanadminAction()
    {   
        $this->view->pick('halamanadmin');
    }
}