<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public $contactdb;
    public function __construct()    
    {
        $this->contactdb = new \App\Models\Admin\Contactdb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->contactdb->getContacts();
            return view('admin/admin_contact', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function viewContact($contact_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows'] = $this->contactdb->getContactSingle($contact_id);
            return view('admin/admin_contact_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function deleteContact($contact_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    { 
            $this->contactdb->deleteContact1($contact_id);
            return redirect()->to('/contact/getData_contact');           
        } else {
               return redirect()->to('/admin/admin_initial');
        }
    }
}
