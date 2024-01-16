<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Artist extends BaseController
{
    public $artistDatadb;
    public $artistdb;
    public function __construct()    
    {
        $this->artistDatadb = new \App\Models\Admin\ArtistDatadb();
        $this->artistdb = new \App\Models\Admin\Artistdb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->artistDatadb->getArtist();
                return view('admin/admin_artist', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function artistView($ar_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows1'] = $this->artistDatadb->getArtistSingle($ar_id);
            return view('admin/admin_artist_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function addArtist()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->artistDatadb->getArtist();
            return view('admin/admin_artist_add', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function insertArtist()  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {             
            helper(['form']);
            $rules = [
                'art_name' => 'required|min_length[8]',
                'art_desig' => 'required|min_length[8]',
                'art_about' => 'required|min_length[8]',
                'art_disc' => 'required|min_length[8]',
                'art_email' => 'required|valid_email',
                'art_img' => 'max_size[art_img,2048]|is_image[art_img]',
            ];
            if($this->validate($rules)) {      
                $file = $this->request->getFile('art_img');
                if($file == '') {
                    $data = array(
                    "ar_name" => $this->request->getVar('art_name'),
                    "ar_designation" => $this->request->getVar('art_desig'),
                    "ar_about" => $this->request->getVar('art_about'),
                    "ar_discription" => $this->request->getVar('art_disc'),
                    "ar_fb" => $this->request->getVar('art_facebook'),
                    "ar_twitter" => $this->request->getVar('art_twitter'),
                    "ar_insta" => $this->request->getVar('art_insta'),
                    "ar_linkedin" => $this->request->getVar('art_linkedin'),
                    "ar_email" => $this->request->getVar('art_email'),
                    "ar_priority" => $this->request->getVar('art_priority'),
                );
                $result = $this->artistDatadb->insertArtist($data);
                } else {
                    $newName = $file->getRandomName(); 
    
                    $file->move('../public/assest/user/images/artist/',$newName);
                    $data = array(
                    "ar_name" => $this->request->getVar('art_name'),
                    "ar_designation" => $this->request->getVar('art_desig'),
                    "ar_about" => $this->request->getVar('art_about'),
                    "ar_discription" => $this->request->getVar('art_disc'),
                    "ar_fb" => $this->request->getVar('art_facebook'),
                    "ar_twitter" => $this->request->getVar('art_twitter'),
                    "ar_insta" => $this->request->getVar('art_insta'),
                    "ar_linkedin" => $this->request->getVar('art_linkedin'),
                    "ar_email" => $this->request->getVar('art_email'),
                    "ar_priority" => $this->request->getVar('art_priority'),
                    "ar_group" => $this->request->getVar('ar_group'),
                    "ar_img" => $newName,
                );
                $result = $this->artistDatadb->insertArtist($data);
                }
                
            if($result>0) {
                return redirect()->to('/artist/getData_artist');  
            } else {
                return redirect()->to('/artist/add_artist');  
            }
        } else {
            $data['rows']=$this->artistDatadb->getArtist();
            $data['validation'] = $this->validator;
            return view('admin/admin_artist_add', $data);
        } 
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function insertArtistDB()  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'a_video' => 'required|min_length[8]',
                'a_img' => 'max_size[a_img,2048]|is_image[a_img]',
            ];
            if($this->validate($rules)) {      
            
                $file = $this->request->getFile('a_img');
                if($file == '') {
                    $data = array(
                    "artist_id" => $this->request->getVar('a_id'),
                    "type" => $this->request->getVar('a_type'),
                    "image_video" => $this->request->getVar('a_video'),
                    "status" => $this->request->getVar('a_status'),
                );
                $result = $this->artistdb->insertArtist1($data);
                
                } else {
                    $newName = $file->getRandomName(); 
                    $file->move('../public/assest/user/images/artist/',$newName);
                    $data = array(
                    "artist_id" => $this->request->getVar('a_id'),
                    "type" => $this->request->getVar('a_type'),
                    "image_video" => $this->request->getVar('a_video'),
                    "status" => $this->request->getVar('a_status'),
                    "image_video" => $newName,
                );
                $result = $this->artistdb->insertArtist1($data);              
                }
                if($result>0) {
                return redirect()->to('/artist/getData_artist');  
            } else {
                return redirect()->to('/admin/admin_artist_add');  
            }
        } else {
            $data['rows']=$this->artistDatadb->getArtist();
            $data['validation'] = $this->validator;
            return view('admin/admin_artist_add', $data);
        }
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function editArtist($ar_id)  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows'] = $this->artistDatadb->getArtistSingle($ar_id);
            return view("admin/admin_artist_update", $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function updateArtist($ar_id)  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'ar_name' => 'required|min_length[8]',
                'ar_desig' => 'required|min_length[8]',
                'ar_about' => 'required',
                'ar_discription' => 'required',
                'ar_email' => 'required|valid_email[ar_email]',
                //'ar_img' => 'max_size[art_img,2048]|is_image[art_img]',
            ];
            if($this->validate($rules)) {      
            $data = array(
                "ar_name" => $this->request->getVar('ar_name'),
                "ar_designation" => $this->request->getVar('ar_desig'),
                "ar_about" => $this->request->getVar('ar_about'),
                "ar_discription" => $this->request->getVar('ar_discription'),
                "ar_fb" => $this->request->getVar('ar_facebook'),
                "ar_twitter" => $this->request->getVar('ar_twitter'),
                "ar_insta" => $this->request->getVar('ar_insta'),
                "ar_linkedin" => $this->request->getVar('ar_linkedin'),
                "ar_email" => $this->request->getVar('ar_email'),
                "ar_priority" => $this->request->getVar('ar_priority'),
                //"ar_img" => $newName,
            );
            $this->artistDatadb->update($ar_id, $data);            
            return redirect()->to('/artist/edit_artist/'.$ar_id); 
        } else { 
            $data['rows'] = $this->artistDatadb->getArtistSingle($ar_id);
            $data['validation'] = $this->validator;
            return view('admin/admin_artist_update', $data);
        }
        } else {
            return redirect()->to('/admin/admin_initial');
        }
        
    }

    public function updateArtistImage($ar_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                'ar_img' => 'max_size[ar_img,2048]|is_image[ar_img]',
                ];
            if($this->validate($rules)) {
                $data = $this->artistDatadb->find($ar_id);
                $old_img_name = $data['ar_img'];
                $file = $this->request->getFile('ar_img');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/artist/".$old_img_name) && !empty($old_img_name)) 
                    {
                        unlink("assest/user/images/artist/".$old_img_name);
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_artist_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/artist/',$newName);
                    } else {
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_artist_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/artist/',$newName);
                    }
                } else {
                    $newName = $old_img_name;            
                }            
                $data = [
                    "ar_img" => $newName,
                ];
                $this->artistDatadb->update($ar_id, $data);
                return redirect()->to('artist/getData_artist'); 
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->artistDatadb->getArtistSingle($ar_id);
                return view('admin/admin_artist_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }


    public function deleteArtist($ar_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->artistDatadb->find($ar_id);
            $imagefile = $data['ar_img'];
            if($imagefile == '') {
                $this->artistDatadb->deleteArtist($ar_id);    
            } else {
                if(file_exists("assest/user/images/artist/".$imagefile)) {
                    unlink("assest/user/images/artist/".$imagefile);
                }
                $this->artistDatadb->deleteArtist($ar_id);    
            }
            return redirect()->to('/artist/getData_artist');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    } 

    public function artistData()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->artistdb->getData();
            //print_r($data);
            return view('admin/admin_artistData', $data);           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    } 

    public function artistViewData($artist_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
           $data['rows'] = $this->artistdb->getData($artist_id);
            return view('admin/admin_artistData_view', $data);           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }

    public function artistDeleteData($artist_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->artistdb->find($artist_id);
            $imagefile = $data['image_video'];
            if($imagefile == '') {
                $this->artistdb->delete($artist_id);
            } else {
                if(file_exists("assest/user/images/artist/".$imagefile)) {
                    unlink("assest/user/images/artist/".$imagefile);
                }
                $this->artistdb->delete($artist_id);
            }
            return redirect()->to('/artist/get_artistData');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }

    public function editArtistData($artist_id)  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows'] = $this->artistdb->getArtist1($artist_id);
            $data['data1']=$this->artistDatadb->getArtist();
            //print_r($data); die;

            return view("admin/admin_artistData_update", $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function updateArtistData($artist_id)  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'a_video' => 'required|min_length[8]',
                'a_img' => 'max_size[a_img,2048]|is_image[a_img]',
            ];
            if($this->validate($rules)) {      
            $data = array(
                    "artist_id" => $this->request->getVar('a_id'),
                    "image_video" => $this->request->getVar('a_video'),
                    //"a_img" => ,
            );
            $this->artistDatadb->update($ar_id, $data);            
            return redirect()->to('/artist/edit_artist/'.$ar_id); 
        } else { 
            $data['rows'] = $this->artistDatadb->getArtistSingle($ar_id);
            $data['validation'] = $this->validator;
            return view('admin/admin_artistData_update', $data);
        }
        } else {
            return redirect()->to('/admin/admin_initial');
        }
        
    }

}
