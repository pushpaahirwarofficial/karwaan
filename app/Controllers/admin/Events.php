<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Events extends BaseController
{
    public $eventdb;
    public function __construct()    
    {
        $this->eventdb = new \App\Models\Admin\Eventdb();
    }

    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->eventdb->getEvents();
                return view('admin/admin_event', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function geteventsview1($n_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->eventdb->getEventsView($n_id);
                return  view('admin/commonpages/header')
                        .view('admin/admin_event_view', $data)
                        .view('admin/commonpages/header');
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function geteventsadd1()
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
                      .view('admin/admin_event_add')
                      .view('admin/commonpages/footer');
    
            } else {
                return redirect()->to('/admin/admin_initial');
        }

	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function insertEventDB()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))   
	    {   
            helper(['form']);
            $rules = [
                'n_title' => 'required|min_length[8]',
                'n_desc' => 'required|min_length[8]',
                'n_date' => 'required',
                'n_img' => 'max_size[n_img,2048]|is_image[n_img]',
            ];
            if($this->validate($rules)) {
                $file = $this->request->getFile('n_img');
                if($file == '') {
                    $data = array(
                    "n_title" => $this->request->getVar('n_title'),
                    "n_desc" => $this->request->getVar('n_desc'),
                    "n_date" => $this->request->getVar('n_date'),
                    "n_twitter" => $this->request->getVar('n_twitter'),
                    "n_fb" => $this->request->getVar('n_fb'),
                    "n_priority" => $this->request->getVar('n_priority'),
                );
                $result = $this->eventdb->insertEvent($data);
                } else {
                    $newName = $file->getRandomName();
                    $file->move('../public/assest/user/images/event/',$newName);
                    $data = array(
                    "n_title" => $this->request->getVar('n_title'),
                    "n_desc" => $this->request->getVar('n_desc'),
                    "n_date" => $this->request->getVar('n_date'),
                    "n_twitter" => $this->request->getVar('n_twitter'),
                    "n_fb" => $this->request->getVar('n_fb'),
                    "n_priority" => $this->request->getVar('n_priority'),
                    "n_img" => $newName,
                );
                $result = $this->eventdb->insertEvent($data);
                
                }
                if($result>0) {
                return redirect()->to('/events/getData_event');  
            } else {
                return redirect()->to('/events/add_event');  
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/commonpages/header')
                  .view('admin/admin_event_add', $errData)
                  .view('admin/commonpages/footer');
        }

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function editEvent($n_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->eventdb->getEventsView($n_id);
            return view('admin/admin_event_update', $data);
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateEvent($n_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    {
            helper(['form']);
            $rules = [
                'n_title' => 'required|min_length[8]',
                'n_desc' => 'required|min_length[8]',
                'n_date' => 'required',
                'n_img' => 'max_size[n_img,512]|is_image[n_img]',
            ];
            if($this->validate($rules)) { 
            $data = [
                    "n_title" => $this->request->getVar('n_title'),
                    "n_desc" => $this->request->getVar('n_desc'),
                    "n_date" => $this->request->getVar('n_date'),
                    "n_twitter" => $this->request->getVar('n_twitter'),
                    "n_fb" => $this->request->getVar('n_fb'),
                    "n_priority" => $this->request->getVar('n_priority'),
            ];
            $this->eventdb->update($n_id, $data);
            return redirect()->to('events/getData_event');   
        } else {
            $data['rows'] = $this->eventdb->getEventsView($n_id);
            $data['validation'] = $this->validator;
            return view('admin/admin_event_update', $data);
        }        
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateEventImage($n_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                    'new_img' => 'max_size[new_img,2048]|is_image[new_img]',
                ];
            if($this->validate($rules)) {
                $data = $this->eventdb->find($n_id);
                $old_img_name = $data['n_img'];
                $file = $this->request->getFile('new_img');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/event/".$old_img_name) && !empty($old_img_name)) 
                    {
                        unlink("assest/user/images/event/".$old_img_name);
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_event_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/event/',$newName);
                    } else {
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_event_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/event/',$newName);
                    }
                } else {
                    $newName = $old_img_name;                
                }            
                $data = [
                    "n_img" => $newName,
                ];
                $this->eventdb->update($n_id, $data);
                return redirect()->to('events/getData_event'); 
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->eventdb->getEventsView($n_id);
                return view('admin/admin_event_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function deleteEvent($n_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->eventdb->find($n_id);
            //echo $data['sld_image'];
            $imagefile = $data['n_img'];
            if($imagefile == '') {
                $this->eventdb->deleteEvent($n_id);
            } else {
                if(file_exists("assest/user/images/event/".$imagefile)) {
                    unlink("assest/user/images/event/".$imagefile);
                }
                $this->eventdb->deleteEvent($n_id);
            }
            return redirect()->to('/events/getData_event');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }
}
