<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Newsletterdb;

class StayTouch extends BaseController
{
    public $newsletterdb;
    public function __construct()    
    {
        $this->newsletterdb = new Newsletterdb();
    }

    public function index() 
    {
        return view('index');
    }

    public function insertEmail()
    {
        helper(['form']);
            $rules = [
                'email' => 'required',
            ];
           if($this->validate($rules)) {
            $data = array(
            "email"=>$this->request->getVar('email'),
            );
            $r = $this->newsletterdb->insertEmail1($data);
            if($r>0) {
                return redirect()->to('/');
            } else {
                return redirect()->to('/');
            }
            
        } else {
            $errData['validation'] = $this->validator;
            return view('index', $errData);
        }
    }
}
