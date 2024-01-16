<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Newsletter extends BaseController
{
    public $newsletterdb;
    public function __construct()    
    {
        $this->newsletterdb = new \App\Models\Admin\Newsletterdb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->newsletterdb->getNewsletter();
            return view('admin/admin_newsletter', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function viewNewletter($id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows'] = $this->newsletterdb->getNewsletterSingle($id);
            return view('admin/admin_newsletter_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function deleteNewletter($id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    { 
            $this->newsletterdb->deleteNewsletter1($id);
            return redirect()->to('/newsletter/getData_newsletter');           
        } else {
               return redirect()->to('/admin/admin_initial');
        }
    }
}
