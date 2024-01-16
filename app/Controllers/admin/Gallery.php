<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Gallerydb;

class Gallery extends BaseController
{
    public $gallerydb;
    public function __construct()    
    {
        $this->gallerydb = new Gallerydb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->gallerydb->getGallery();
            return view('admin/admin_gallery', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function viewImage($gl_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows1'] = $this->gallerydb->getImageSingle($gl_id);
            return view('admin/admin_gallery_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function addImage()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            return view('admin/commonpages/header')
                  .view('admin/admin_gallery_add')
                  .view('admin/commonpages/footer');

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function insertImage()
{
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            helper(['form']);
            $rules = [
                'gl_name' => 'required|min_length[8]',
                'gl_alt' => 'required|min_length[8]',
                'gl_priority' => 'required',
                'gl_img' => 'max_size[gl_img,2048]|is_image[gl_img]',
            ];
            if($this->validate($rules)) {
                $file = $this->request->getFile('gl_img');
                if($file == "") {
                    $data = array(
                        "gl_name" => $this->request->getVar('gl_name'),
                        "gl_type" => $this->request->getVar('gl_type'),
                        "gl_alt" => $this->request->getVar('gl_alt'),
                        "gl_priority" => $this->request->getVar('gl_priority'),
                    );
                    $result = $this->gallerydb->insertGallery1($data);
                } else {    
                    $newName1 = $file->getClientName();     
                    $file_ext = substr($newName1, strripos($newName1, '.'));
		            $newName="K_gallery_".rand(4500,9050).$file_ext;
                    $file->move('../public/assest/user/images/gallery/',$newName);
                    $data = array(
                        "gl_name" => $this->request->getVar('gl_name'),
                        "gl_type" => $this->request->getVar('gl_type'),
                        "gl_alt" => $this->request->getVar('gl_alt'),
                        "gl_priority" => $this->request->getVar('gl_priority'),
                        "gl_img" => $newName,
                    );
                    $result = $this->gallerydb->insertGallery1($data);                   
                }
                    
            if($result>0) {
                return redirect()->to('/gallery/getData_gallery');  
            } else {
                return redirect()->to('/gallery/add_gallery');  
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/commonpages/header')
                  .view('admin/admin_gallery_add', $errData)
                  .view('admin/commonpages/footer');
        }
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
}

public function deleteImage($gl_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->gallerydb->find($gl_id);
            //echo $data['gl_img'];
            $imagefile = $data['gl_img'];
            if($imagefile == "") {
                $this->gallerydb->deleteImage1($gl_id);
            } else {
                if(file_exists("assest/user/images/gallery/".$imagefile)) {
                    unlink("assest/user/images/gallery/".$imagefile);
                }
                $this->gallerydb->deleteImage1($gl_id);
            }
            return redirect()->to('/gallery/getData_gallery');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }

    public function editImage($gl_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->gallerydb->getImageSingle($gl_id);
            return view('admin/admin_gallery_update', $data);
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateImage($gl_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    {
            helper(['form']);
            $rules = [
                'gl_name' => 'required|min_length[8]',
                'gl_alt' => 'required|min_length[8]',
                'gl_priority' => 'required',
            ];
            if($this->validate($rules)) {
                $data = array(
                    "gl_name" => $this->request->getVar('gl_name'),
                    "gl_type" => $this->request->getVar('gl_type'),
                    "gl_alt" => $this->request->getVar('gl_alt'),
                    "gl_priority" => $this->request->getVar('gl_priority'),
                );
                $this->gallerydb->update($gl_id, $data);
                return redirect()->to('gallery/getData_gallery');
            } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->gallerydb->getImageSingle($gl_id);
                return view('admin/commonpages/header')
                  .view('admin/admin_gallery_update', $data)
                  .view('admin/commonpages/footer');
            }
                       
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateImageImage($gl_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                'gl_img' => 'max_size[gl_img,2048]|is_image[gl_img]',
                ];
            if($this->validate($rules)) {
                $data = $this->gallerydb->find($gl_id);
                $old_img_name = $data['gl_img'];
                $file = $this->request->getFile('gl_img');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/gallery/".$old_img_name) && !empty($old_img_name)) 
                    {
                        unlink("assest/user/images/gallery/".$old_img_name);
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_gallery_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/gallery/',$newName);
                    } else {
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_gallery_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/gallery/',$newName);
                    }
                } else {
                    $newName = $old_img_name;                
                }            
                $data = [
                    "gl_img" => $newName,
                ];
                $this->gallerydb->update($gl_id, $data);
                return redirect()->to('gallery/getData_gallery'); 
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->gallerydb->getImageSingle($gl_id);
                return view('admin/admin_gallery_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

}
