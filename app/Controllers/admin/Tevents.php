<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Tevents extends BaseController
{
    public $teventdb;
    public function __construct()    
    {
        $this->teventdb = new \App\Models\Admin\Teventdb();
    }

    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->teventdb->getTevents();
                return view('admin/admin_theatricalEvents', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function getTevents()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {                   
            $session = session();
            $session_data = $session->get('al_id');
            if(isset($session_data))
            {   
                return view('admin/commonpages/header')
                      .view('admin/admin_theatricalEvents_add')
                      .view('admin/commonpages/footer');
    
            } else {
                return redirect()->to('/admin/admin_initial');
        }

	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function insertTevent()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))   
	    {   
            helper(['form']);
            $rules = [
                'title' => 'required|min_length[3]',
                'type' => 'required|min_length[3]',
                'playdate' => 'required|min_length[3]',
                'writer' => 'required|min_length[3]',
                'director' => 'required|min_length[3]',
                'music' => 'required|min_length[3]',
                'actors' => 'required|min_length[3]',
            ];
            if($this->validate($rules)) {
                $data = array(
                "title" => $this->request->getVar('title'),
                "type" => $this->request->getVar('type'),
                "playdate" => $this->request->getVar('playdate'),
                "writer" => $this->request->getVar('writer'),
                "director" => $this->request->getVar('director'),
                "music" => $this->request->getVar('music'),
                "actors" => $this->request->getVar('actors'),
            );
            $result = $this->teventdb->insertTevent($data);
            if($result>0) {
                return redirect()->to('/tevents/get_event');  
            } else {
                return redirect()->to('/tevents/add_event');  
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/admin_theatricalEvents_add', $errData);
        }
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function editTEvent($tevent_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
                $data['rows']=$this->teventdb->getSingleTevent($tevent_id);
                return view('admin/admin_theatricalEvents_update', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function updateTevent($tevent_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))   
	    {   
            helper(['form']);
            $rules = [
                'title' => 'required|min_length[3]',
                'type' => 'required|min_length[3]',
                'playdate' => 'required|min_length[3]',
                'writer' => 'required|min_length[3]',
                'director' => 'required|min_length[3]',
                'music' => 'required|min_length[3]',
                'actors' => 'required|min_length[3]',
            ];
            if($this->validate($rules)) {
                $data = array(
                "title" => $this->request->getVar('title'),
                "type" => $this->request->getVar('type'),
                "playdate" => $this->request->getVar('playdate'),
                "writer" => $this->request->getVar('writer'),
                "director" => $this->request->getVar('director'),
                "music" => $this->request->getVar('music'),
                "actors" => $this->request->getVar('actors'),
            );
            $result = $this->teventdb->update( $tevent_id , $data);
            if($result>0) {
                return redirect()->to('/tevents/get_event');  
            } else {
                return redirect()->to('/tevents/add_event');  
            }
        } else {
            $data['validation'] = $this->validator;
            $data['rows']=$this->teventdb->getSingleTevent($tevent_id);
            return view('admin/admin_theatricalEvents_update', $data);
        }
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function deleteTevent($tevent_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
                $data['rows']=$this->teventdb->deleteTEvent1($tevent_id);
                return view('admin/admin_theatricalEvents', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

}
