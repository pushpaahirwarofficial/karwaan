<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Achievement extends BaseController
{
    public $achievementdb;
    public function __construct()    
    {
        $this->achievementdb = new \App\Models\Admin\Achievementdb();
    }
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows']=$this->achievementdb->getAchievement();
                return view('admin/admin_achievement', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function achievementView($achieve_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['rows1'] = $this->achievementdb->getAchievementSingle($achieve_id);
            return view('admin/admin_achievement_view', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function addAchievement()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            return view('admin/commonpages/header')
                  .view('admin/admin_achievement_add')
                  .view('admin/commonpages/footer');

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function insertAchievement()  
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            helper(['form']);
            $rules = [
                'achieve_name' => 'required|min_length[8]',
                'achieve_alt' => 'required|min_length[8]',
                'achieve_priority' => 'required|numeric',
                'achieve_type' => 'required',
                'achieve_img' => 'max_size[achieve_img,2048]|is_image[achieve_img]',
            ];
            if($this->validate($rules)) { 
                $file = $this->request->getFile('achieve_img');          
                if($file == "") {
                    $data = array(
                    "achieve_name" => $this->request->getVar('achieve_name'),
                    "achieve_alt" => $this->request->getVar('achieve_alt'),
                    "achieve_priority" => $this->request->getVar('achieve_priority'),
                    "achieve_type" => $this->request->getVar('achieve_type'),
                );
                $result = $this->achievementdb->insertAchievement1($data);
                } else{
                $newName1 = $file->getClientName();     
                $file_ext = substr($newName1, strripos($newName1, '.'));
		        $newName="K_achievement_".rand(4500,9050).$file_ext;   
                $file->move('../public/assest/user/images/achievement/',$newName);
                $data = array(
                "achieve_name" => $this->request->getVar('achieve_name'),
                "achieve_alt" => $this->request->getVar('achieve_alt'),
                "achieve_priority" => $this->request->getVar('achieve_priority'),
                "achieve_type" => $this->request->getVar('achieve_type'),
                "achieve_img" => $newName,
            );
                $result = $this->achievementdb->insertAchievement1($data);
                }
                if($result>0) {
                return redirect()->to('/achievement/getData_achievement');  
                } else {
                    return redirect()->to('/achievement/add_achievement');  
                }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/commonpages/header')
                  .view('admin/admin_achievement_add', $errData)
                  .view('admin/commonpages/footer');
         }

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    
}

    public function deleteAchievement($achieve_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->achievementdb->find($achieve_id);
            //echo $data['sld_image'];
            $imagefile = $data['achieve_img'];
            if($imagefile == "") {
                $this->achievementdb->deleteAchievement1($achieve_id);
            } else{
                if(file_exists("assest/user/images/achievement/".$imagefile)) {
                    unlink("assest/user/images/achievement/".$imagefile);
                }
                $this->achievementdb->deleteAchievement1($achieve_id);
            }
            return redirect()->to('/achievement/getData_achievement');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }

    public function editAchievement($achieve_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->achievementdb->getAchievementSingle($achieve_id);
            return view('admin/admin_achievement_update', $data);
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateAchievement($achieve_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    {
            helper(['form']);
            $rules = [
                'achieve_name' => 'required|min_length[8]',
                'achieve_alt' => 'required|min_length[8]',
                'achieve_priority' => 'required|numeric',
                'achieve_type' => 'required',
            ];
            if($this->validate($rules)) {
                $data = [
                    "achieve_name" => $this->request->getVar('achieve_name'),
                    "achieve_alt" => $this->request->getVar('achieve_alt'),
                    "achieve_priority" => $this->request->getVar('achieve_priority'),
                    "achieve_type" => $this->request->getVar('achieve_type'),
                ];
                $this->achievementdb->update($achieve_id, $data);
                return redirect()->to('achievement/getData_achievement');
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->achievementdb->getAchievementSingle($achieve_id);
                return view('admin/admin_achievement_update', $data);
            }                  
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateAchievementImage($achieve_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                'achieve_img' => 'max_size[achieve_img,2048]|is_image[achieve_img]',
            ];
            if($this->validate($rules)) {
                $data = $this->achievementdb->find($achieve_id);
                $old_img_name = $data['achieve_img'];
                $file = $this->request->getFile('achieve_img');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/achievement/".$old_img_name) && !empty($old_img_name)) 
                    {
                        unlink("assest/user/images/achievement/".$old_img_name);
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_achievement_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/achievement/',$newName);
                    } else {
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));
                        $newName="K_achievement_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/achievement/',$newName);
                    }
                } else {
                    $newName = $old_img_name;                
                }            
                $data = [
                    "achieve_img" => $newName,
                ];
                $this->achievementdb->update($achieve_id, $data);
                return redirect()->to('achievement/getData_achievement');
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->achievementdb->getAchievementSingle($achieve_id);
                return view('admin/admin_achievement_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

}
