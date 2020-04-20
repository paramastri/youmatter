<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Psikolog;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;

class PsikologController extends Controller
{

    public function psikologAction()
    {
        $_isPsikolog= $this->session->get('psikolog');
        if ($_isPsikolog) {
            $this->response->redirect('halamanpsikolog');
        }
        $this->view->pick('daftarpsikolog');
    }

    public function storeregisterAction(){

        $psikolog = new Psikolog();
        $psikolog->nama = $this->request->getPost('nama');
        $psikolog->username = $this->request->getPost('username');
        $psikolog->email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $psikolog->password = $this->security->hash($password);
        $psikolog->telepon = $this->request->getPost('telepon');
        $psikolog->str = $this->request->getPost('str');
        $psikolog->status = 0;
        $user = Psikolog::findFirst("username = '$psikolog->username'");
        if ($user) { 
            // $this->flashSession->error("Gagal register. Username telah digunakan.");
            // return $this->response->redirect('daftarpsikolog');
            echo "username sudah digunakan.";
        }
        else
        {
            $psikolog->save();
            // printf (strlen($psikolog->password));
            // echo "masuk";
            return $this->response->redirect('psikolog');
        }
        
    }

    // public function storeloginAction()
    // {
    //     $username = $this->request->getPost('username');
    //     $pass = $this->request->getPost('password');
    //     $user = Psikolog::findFirst("username = '$username'");
    //         if ($user){
    //             if($this->security->checkHash($pass, $user->password)){
    //                 $this->session->set(
    //                     'psikolog',
    //                     [
    //                         'id' => $user->id,
    //                         'username' => $user->username,
    //                     ]
    //                 );
    //                 // echo "Masuk bos mantap";
    //                 (new Response())->redirect('halamanpsikolog')->send();
    //             }
    //             else{
    //                 echo "Gagal masuk sebagai psikolog. Silakan cek kembali username dan password anda.";
    //                 // $this->response->redirect('loginadmin');
    //             }
    //         }
    //         else{
    //             // $this->flashSession->error("Gagal masuk sebagai admin. Silakan cek kembali username dan password anda.");
    //             echo "Akun tidak ditemukan.";
    //                 // $this->response->redirect('loginadmin');
    //         }
    // }

    public function storeloginAction()
    {
	    $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        $user = Psikolog::findFirst("username = '$username'");
	        if ($user){
	        	if($user->status == 1){
		            if($this->security->checkHash($pass, $user->password)){
		                $this->session->set(
		                    'psikolog',
		                    [
		                        'id' => $user->id,
		                        'username' => $user->username,
		                    ]
		                );

		                (new Response())->redirect('halamanpsikolog')->send();
		            }
		            else{
		                echo "Gagal masuk sebagai psikolog. Silakan cek kembali username dan password anda.";
		                // $this->response->redirect('user/login');
		            }
		        }
		        else {
		        	echo "Lom diverif, bilang admin";
		            // $this->response->redirect('user/login');
		        }
	    	}
	        else{
	            echo "Akun tidak ditemukan";
	            // $this->response->redirect('user/login');
	        }
    }    

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("psikolog");
    }

    public function halamanpsikologAction()
    {   
        $id = $this->session->get('psikolog');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('psikolog')->send();          
        }
        $this->view->pick('halamanpsikolog');
    }

}