<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Logindb;
use Config\Services;

class Login extends BaseController
{
    public $session;
    public $userModel;
    public function __construct()    
    {
        $this->userModel = new \App\Models\Admin\Logindb();
        $this->session = \Config\Services::session();
    }

    public function initial()
    {
        return view('admin/admin_login');
    }

    public function signin()
    {
        helper(['form']);
            $rules = [
                'emailid' => 'required|valid_email|',
                'password' => 'required|min_length[6]',
            ]; 
            if($this->validate($rules)) {         
                $data = array(
                    "al_email"=>$this->request->getVar('emailid'),
                    "al_password"=>$this->request->getVar('password')
                    );

                $user=$this->userModel->loginUser($data);
                if($user) {
                    $sessionData=[
                        'al_id'=>$user->al_id,
                        'al_username'=>$user->al_username,
                        'loggedIn'=>true
                    ]; 
                    $this->session->set($sessionData);
                    return redirect()->to('/admin_index');
                } else {
                    return redirect()->to('/admin/admin_initial');
                }
            } else {
                $errData['validation'] = $this->validator;
                return view('admin/admin_login', $errData);
            }
    }

    public function logout()
    {
        if(isset($_SESSION['loggedIn'])) {
            session_destroy();
            return redirect()->to('/admin/admin_initial');
        } else {
            return redirect()->to('/admin/admin_initial');
        }
    }
}
