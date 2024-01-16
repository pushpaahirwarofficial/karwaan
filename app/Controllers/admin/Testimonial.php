<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Testimonial extends BaseController
{
    public $testimonialdb;
    public function __construct()    
    {
        $this->testimonialdb = new \App\Models\Admin\Testimonialsdb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['user']=$this->testimonialdb->getTestimonials();
            return view('admin/admin_testi', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function viewTestimonial($te_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows'] = $this->testimonialdb->getTestimonialsSingle($te_id);
            return view('admin/admin_testi_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function addTestimonial()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            return view('admin/admin_testi_add');

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function insertTestimonial()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'te_name' => 'required|min_length[8]',
                'te_discrip' => 'required|min_length[8]',
                'te_designation' => 'required|min_length[8]',
                'te_title' => 'required|min_length[8]',
                'te_img' => 'max_size[te_img,2048]|is_image[te_img]',
            ];
            if($this->validate($rules)) {
            
                $file = $this->request->getFile('te_img');
                if($file == '') {
                    $data = array(
                    "te_name" => $this->request->getVar('te_name'),
                    "te_rating" => $this->request->getVar('te_rating'), 
                    "te_discrip" => $this->request->getVar('te_discrip'),
                    "te_title" => $this->request->getVar('te_title'),
                    "te_designation" => $this->request->getVar('te_designation'),
                    "te_priority" => $this->request->getVar('te_priority'),
                );
                $result = $this->testimonialdb->insertTestimonials1($data);
                } else {
                    $newImage1 = $file->getClientName();     
                    $file_ext = substr($newImage1, strripos($newImage1, '.'));
		            $newName="K_testi_".rand(4500,9050).$file_ext;
                    
                    $file->move('../public/assest/user/images/testimonial/',$newImage);
                    $data = array(
                    "te_name" => $this->request->getVar('te_name'),
                    "te_rating" => $this->request->getVar('te_rating'), 
                    "te_discrip" => $this->request->getVar('te_discrip'),
                    "te_title" => $this->request->getVar('te_title'),
                    "te_designation" => $this->request->getVar('te_designation'),
                    "te_priority" => $this->request->getVar('te_priority'),
                    "te_img" => $newImage,
                );
                $result = $this->testimonialdb->insertTestimonials1($data);
                
                }
                if($result>0) {
                return redirect()->to('/testimonial/getData_testimonial');  
            } else {
                return redirect()->to('/youtube/admin_youtube_add');  
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/admin_testi_add', $errData);
        }

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function editTestimonial($te_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->testimonialdb->getTestimonialsSingle($te_id);
            return view('admin/admin_testi_update', $data);
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateTestimonial($te_id)  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'te_name' => 'required|min_length[8]',
                'te_discrip' => 'required|min_length[8]',
                'te_designation' => 'required|min_length[8]',
                'te_title' => 'required|min_length[8]',
            ];
            if($this->validate($rules)) {
            
            $data = array(
                "te_name" => $this->request->getVar('te_name'),
                "te_rating" => $this->request->getVar('te_rating'), 
                "te_discrip" => $this->request->getVar('te_discrip'),
                "te_title" => $this->request->getVar('te_title'),
                "te_designation" => $this->request->getVar('te_designation'),
                "te_priority" => $this->request->getVar('te_priority'),
            );
            $this->testimonialdb->update($te_id, $data);
            return redirect()->to('/testimonial/getData_testimonial');  
        } else {
            $data['validation'] = $this->validator;
            $data['rows'] = $this->testimonialdb->getTestimonialsSingle($te_id);
            return view('admin/admin_testi_update', $data);
        }         
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function updateTestimonialImage($te_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                'te_img' => 'max_size[te_img,2028]|is_image[te_img]',
                ];
            if($this->validate($rules)) {
                $data = $this->testimonialdb->find($te_id);
                $old_img_name = $data['te_img'];
                $file = $this->request->getFile('te_img');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/testimonial/".$old_img_name) && !empty($old_img_name)) 
                    {
                        unlink("assest/user/images/testimonial/".$old_img_name);
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_testimonial_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/testimonial/',$newName);
                    } else {
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_testimonial_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/testimonial/',$newName);
                    }
                } else {
                    $newName = $old_img_name;                
                }            
                $data = [
                    "te_img" => $newName,
                ];
                $this->testimonialdb->update($te_id, $data);
                return redirect()->to('testimonial/getData_testimonial'); 
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->testimonialdb->getTestimonialsSingle($te_id);
                return view('admin/admin_testi_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }


    public function deleteTestimonial($te_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->testimonialdb->find($te_id);
            $fileImage = $data['te_img'];
            if(!empty($fileImage)) {
                if(file_exists("assest/user/images/testimonial/".$fileImage)) {
                    unlink("assest/user/images/testimonial/".$fileImage);
                } 
                $this->testimonialdb->deleteTestimonials1($te_id);
            } else { 
                $this->testimonialdb->deleteTestimonials1($te_id);
            }
            return redirect()->to('/testimonial/getData_testimonial');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }
}
