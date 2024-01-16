<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Sliderdb;

class Slider extends BaseController
{
    public $sliderdb;
    public function __construct()    
    {
        $this->sliderdb = new \App\Models\Admin\Sliderdb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->sliderdb->getSlider();
            return view('admin/admin_slider', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function viewSlider($sld_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows1'] = $this->sliderdb->getSliderSingle($sld_id);
            return view('admin/admin_slider_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function addSlider()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            return view('admin/commonpages/header')
                  .view('admin/admin_slider_add')
                  .view('admin/commonpages/footer');

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function insertSlider()
{
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            helper(['form']);
            $rules = [
                'sld_imagelink' => 'required|min_length[8]',
                'sld_title' => 'required|min_length[8]',
                'sld_alt' => 'required|min_length[8]',
                'sld_priority' => 'required|numeric',
                'sld_status' => 'required',
                'sld_image' => 'max_size[sld_image,2048]|is_image[sld_image]',
            ];
            if($this->validate($rules)) {
                $file = $this->request->getFile('sld_image');
                if($file == "") {
                    $data = array(
                        "sld_imagelink" => $this->request->getVar('sld_imagelink'),
                        "sld_title" => $this->request->getVar('sld_title'),
                        "sld_alt" => $this->request->getVar('sld_alt'),
                        "sld_priority" => $this->request->getVar('sld_priority'),
                        "sld_status" => $this->request->getVar('sld_status'),
                    );
                    $result = $this->sliderdb->insertSlider1($data);
                } else {    
                    $newName1 = $file->getClientName();     
                    $file_ext = substr($newName1, strripos($newName1, '.'));
		            $newName="K_slider_".rand(4500,9050).$file_ext;
                    $file->move('../public/assest/user/images/slider/',$newName);
                    $data = array(
                        "sld_imagelink" => $this->request->getVar('sld_imagelink'),
                        "sld_title" => $this->request->getVar('sld_title'),
                        "sld_alt" => $this->request->getVar('sld_alt'),
                        "sld_priority" => $this->request->getVar('sld_priority'),
                        "sld_status" => $this->request->getVar('sld_status'),
                        "sld_image" => $newName,
                    );
                    $result = $this->sliderdb->insertSlider1($data);                   
                }
                    
            if($result>0) {
                return redirect()->to('/slider/getData_slider');  
            } else {
                return redirect()->to('/slider/add_Slider');  
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/commonpages/header')
                  .view('admin/admin_slider_add', $errData)
                  .view('admin/commonpages/footer');
        }
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
}
    

    public function deleteSlider($sld_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->sliderdb->find($sld_id);
            //echo $data['sld_image'];
            $imagefile = $data['sld_image'];
            if($imagefile == "") {
                $this->sliderdb->deleteSlider1($sld_id);
            } else {
                if(file_exists("assest/user/images/slider/".$imagefile)) {
                    unlink("assest/user/images/slider/".$imagefile);
                }
                $this->sliderdb->deleteSlider1($sld_id);
            }
            
            return redirect()->to('/slider/getData_slider');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }

    public function editSlider($sld_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->sliderdb->getSliderSingle($sld_id);
            return view('admin/admin_slider_update', $data);
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateSlider($sld_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    {
            helper(['form']);
            $rules = [
                'sld_imagelink' => 'required|min_length[8]',
                'sld_title' => 'required|min_length[8]',
                'sld_alt' => 'required|min_length[8]',
                'sld_priority' => 'required|numeric',
                'sld_status' => 'required',
            ];
            if($this->validate($rules)) {
                $data = array(
                    "sld_imagelink" => $this->request->getVar('sld_imagelink'),
                    "sld_title" => $this->request->getVar('sld_title'),
                    "sld_alt" => $this->request->getVar('sld_alt'),
                    "sld_priority" => $this->request->getVar('sld_priority'),
                    "sld_status" => $this->request->getVar('sld_status'),
                );
                $this->sliderdb->update($sld_id, $data);
                return redirect()->to('slider/getData_slider');
            } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->sliderdb->getSliderSingle($sld_id);
                return view('admin/commonpages/header')
                  .view('admin/admin_slider_update', $data)
                  .view('admin/commonpages/footer');
            }
                       
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateSliderImage($sld_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                    'sld_image' => 'max_size[sld_image,2048]|is_image[sld_image]',
                ];
            if($this->validate($rules)) {
                $data = $this->sliderdb->find($sld_id);
                $old_img_name = $data['sld_image'];
                $file = $this->request->getFile('sld_image');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/slider/".$old_img_name) && empty($old_img_name)) 
                    {
                        unlink("assest/user/images/slider/".$old_img_name);
                    }
                    $newName1 = $file->getClientName();                
                    $file_ext = substr($newName1, strripos($newName1, '.'));
                    $newName="K_slider_".rand(4500,9050).$file_ext;
                    $file->move('../public/assest/user/images/slider/',$newName);
                } else {
                    $newName = $old_img_name;                
                }            
                $data = [
                    "sld_image" => $newName,
                ];
                $this->sliderdb->update($sld_id, $data);
                return redirect()->to('slider/getData_slider'); 
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->sliderdb->getSliderSingle($sld_id);
                return view('admin/admin_slider_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }


}

