<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Contactdb;

class Contact extends BaseController
{
    public function index() 
    {
        return view('contact');
    }

    public function contactUs()
    {
        helper(['form']);
            $rules = [
                'Username' => 'required|min_length[3]',
                'Useremail' => 'required|valid_email[c_email]',
                'Userphone' => 'required',
                'Usersubject' => 'required|min_length[3]',
                'Usermessage' => 'required|min_length[3]',
            ];
           if($this->validate($rules)) {
           $contactMe = new Contactdb();
            $data = array(
            "c_name"=>$this->request->getVar('Username'), 
            "c_email"=>$this->request->getVar('Useremail'),
            "c_phone"=>$this->request->getVar('Userphone'),
            "c_subject"=>$this->request->getVar('Usersubject'),
            "c_msg"=>$this->request->getVar('Usermessage'),
            );
            $r = $contactMe->createUser($data);
            if($r>0) {
                return redirect()->to('home');
            } else {
                return redirect()->route('contact/getContact');
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('contact', $errData);
        }
    }
}
