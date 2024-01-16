<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Youtube extends BaseController
{
    public $youtubedb;
    public function __construct()    
    {
        $this->youtubedb = new \App\Models\Admin\Youtubedb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->youtubedb->getYoutube();
            return view('admin/admin_youtube', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function viewYoutube($id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows'] = $this->youtubedb->getYoutubeSingle($id);
            return view('admin/admin_youtube_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function addYoutube()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            return view('admin/commonpages/header')
                  .view('admin/admin_youtube_add')
                  .view('admin/commonpages/footer');

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function insertYoutube()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'title' => 'required|min_length[8]',
                'link' => 'required|min_length[8]',
                'code' => 'required|min_length[8]',
                'image' => 'max_size[image,2048]|is_image[image]',
            ];
            if($this->validate($rules)) {
                $file = $this->request->getFile('image');
                if($file == "") {
                    $data = array(
                    "title" => $this->request->getVar('title'),
                    "link" => $this->request->getVar('link'),
                    "code" => $this->request->getVar('code'),
                    "status" => $this->request->getVar('status'),
                );
                } else {
                    $newName1 = $file->getClientName();
                    $file_ext = substr($newName1, strripos($newName1, '.'));
		            $newImage="K_videoImage_".rand(4500,9050).$file_ext;
                    $file->move('../public/assest/user/images/youtube/',$newImage);
                    $data = array(
                    "title" => $this->request->getVar('title'),
                    "link" => $this->request->getVar('link'),
                    "code" => $this->request->getVar('code'),
                    "status" => $this->request->getVar('status'),
                    "image" => $newImage,
                );
                }                
            $result = $this->youtubedb->insertYoutube1($data);
            if($result>0) {
                return redirect()->to('/youtube/getData_youtube');  
            } else {
                return redirect()->to('/youtube/admin_youtube_add');  
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/commonpages/header')
                  .view('admin/admin_youtube_add', $errData)
                  .view('admin/commonpages/footer');
        }
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function editYoutube($id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->youtubedb->getYoutubeSingle($id);
            return view('admin/admin_youtube_update', $data);
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateYoutube($id)  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'title' => 'required|min_length[8]',
                'link' => 'required|min_length[8]',
                'code' => 'required|min_length[8]',
            ];
            if($this->validate($rules)) {
            $data = array(
                "title" => $this->request->getVar('title'),
                "link" => $this->request->getVar('link'),
                "code" => $this->request->getVar('code'),
                "status" => $this->request->getVar('status'),
            );
            $this->youtubedb->update($id, $data);
            return redirect()->to('/youtube/getData_youtube'); 
        } else {
            $data['validation'] = $this->validator;
            $data['rows'] = $this->youtubedb->getYoutubeSingle($id);
            return view('admin/admin_youtube_update', $data);
        }          
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }


    public function updateYoutubeImage($id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                    'image' => 'max_size[image,2048]|is_image[image]',
                ];
            if($this->validate($rules)) {
                $data = $this->youtubedb->find($id);
                $old_img_name = $data['image'];
                $file = $this->request->getFile('image');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/youtube/".$old_img_name) && !empty($old_img_name)) 
                    {
                        unlink("assest/user/images/youtube/".$old_img_name);
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_youtube_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/youtube/',$newName);
                    } else {
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_youtube_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/youtube/',$newName);
                    }
                } else {
                    $newName = $old_img_name;                
                }            
                $data = [
                    "image" => $newName,
                ];
                $this->youtubedb->update($id, $data);
                return redirect()->to('youtube/getData_youtube'); 
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->youtubedb->getYoutubeSingle($id);
                return view('admin/admin_youtube_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function deleteYoutube($id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->youtubedb->find($id);
            $fileImage = $data['image'];
            if($fileImage == "") {

            } else {
                if(file_exists("assest/user/images/youtube/".$fileImage)) {
                    unlink("assest/user/images/youtube/".$fileImage);
                }
            }
            $this->youtubedb->deleteYoutube1($id);
            return redirect()->to('/youtube/getData_youtube');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }

}
