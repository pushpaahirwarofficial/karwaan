<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public $blogdb;
    public $commentsdb;
    public $replydb;
    public $likedb;
    public $countingdb;
    public $session1;

    public function __construct()    
    {
        $this->blogdb = new \App\Models\Admin\Blogdb();
        $this->commentdb = new \App\Models\Admin\Commentdb();
        $this->replydb = new \App\Models\Admin\Replydb();
        $this->likedb = new \App\Models\Admin\Likedb();
        $this->countingdb = new \App\Models\Admin\Countingdb();
        $this->session1 = \Config\Services::session();
    }

    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $data['countComment']=$this->countingdb->count_comments();
            $data['countReply']=$this->countingdb->count_reply();
            $data['countLike']=$this->countingdb->count_like();
            $data['rows']=$this->blogdb->getBlogs();
                return view('admin/admin_blog', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function getblogsview1($blog_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $result2 = $this->blogdb->getBlogsView($blog_id);
            foreach($result2->getResult() as $row) {
            $session1 = session();
            $sd = [
                'blog_id' => $row->blog_id,
            ];
            $this->session1->set($sd);
            }
            $data['rows']=$this->blogdb->getBlogsView($blog_id);
            $data['rows1']=$this->commentdb->getComment($blog_id);
            $data['rows2']=$this->replydb->getReply($blog_id);
            $data['like']=$this->likedb->countLikes($blog_id);
            //print_r($data); die;
                return  view('admin/commonpages/header')
                        .view('admin/admin_blog_view', $data)
                        .view('admin/commonpages/header');
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function addReply1($blog_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {           
            helper(['form']);
            $rules = [
                'rply' => 'required|max_length[250]|min_length[3]',
            ];
            if($this->validate($rules)) {
            $data = array(
                "reply" => $this->request->getVar('rply'),
                "comment_id" => $this->request->getVar('comment_id'),
                "user_id" => $this->request->getVar('user_id'),
                "blog_id" => $this->request->getVar('blog_id'),
                "blog_title" => $this->request->getVar('blog_title'),
                "priority" => $this->request->getVar('priority'),
            );

            $result = $this->replydb->insert($data);
            return redirect()->to('/blogs/view_blog/'.$blog_id);
            } else {
                $data['rows']=$this->blogdb->getBlogsView($blog_id);
                $data['rows1']=$this->commentdb->getComment($blog_id);
                $data['rows2']=$this->replydb->getReply($blog_id);
                $data['validation'] = $this->validator;
                return view('admin/commonpages/header')
                      .view('admin/admin_blog_view', $data)
                      .view('admin/commonpages/footer');
            }

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function deleteComment1($comment_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $blgID = $this->session1->get('blog_id');
            $res = $this->commentdb->delete($comment_id);
            return redirect()->to('/blogs/view_blog/'.$blgID);
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function deleteReply1($reply_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $blgID = $this->session1->get('blog_id');
            $res = $this->replydb->delete($reply_id);
            return redirect()->to('/blogs/view_blog/'.$blgID);
	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }


    

    public function getblogsadd1()
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
                      .view('admin/admin_blog_add')
                      .view('admin/commonpages/footer');
    
            } else {
                return redirect()->to('/admin/admin_initial');
        }

	    } else {
            return redirect()->to('/admin/admin_initial');
        }
    }

    public function insertBlogDB()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))   
	    {   
            helper(['form']);
            $rules = [
                'blog_title' => 'required|min_length[8]',
                'blog_desc' => 'required|min_length[8]',
                'blog_date' => 'required',
                'blog_img' => 'max_size[blog_img,2048]|is_image[blog_img]',
            ];
            if($this->validate($rules)) {
                $file = $this->request->getFile('blog_img');
                if($file == '') {
                    $data = array(
                    "blog_title" => $this->request->getVar('blog_title'),
                    "blog_desc" => $this->request->getVar('blog_desc'),
                    "blog_date" => $this->request->getVar('blog_date'),
                    "blog_twitter" => $this->request->getVar('blog_twitter'),
                    "blog_fb" => $this->request->getVar('blog_fb'),
                    "blog_priority" => $this->request->getVar('blog_priority'),
                );
                } else {
                    $newName1 = $file->getRandomName();
                    $file_ext = substr($newName1, strripos($newName1, '.'));
                    $newName="K_blog_".rand(4500,9050).$file_ext;
                    $file->move('../public/assest/user/images/blog/',$newName);
                    $data = array(
                    "blog_title" => $this->request->getVar('blog_title'),
                    "blog_desc" => $this->request->getVar('blog_desc'),
                    "blog_date" => $this->request->getVar('blog_date'),
                    "blog_twitter" => $this->request->getVar('blog_twitter'),
                    "blog_fb" => $this->request->getVar('blog_fb'),
                    "blog_priority" => $this->request->getVar('blog_priority'),
                    "blog_img" => $newName,
                );
                }
                $result = $this->blogdb->insertBlog($data);
                if($result>0) {
                return redirect()->to('/blogs/getData_blog');  
            } else {
                return redirect()->to('/blogs/getData_blog');  
            }
        } else {
            $errData['validation'] = $this->validator;
            return view('admin/commonpages/header')
                  .view('admin/admin_blog_add', $errData)
                  .view('admin/commonpages/footer');
        }

	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    }

    public function editBlog($blog_id)
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data['rows'] = $this->blogdb->getBlogsView($blog_id);
            return view('admin/admin_blog_update', $data);
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateBlog($blog_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    {
            helper(['form']);
            $rules = [
                'blog_title' => 'required|min_length[8]',
                'blog_desc' => 'required|min_length[8]',
                'blog_date' => 'required',
            ];
            if($this->validate($rules)) { 
            $data = [
                    "blog_title" => $this->request->getVar('blog_title'),
                    "blog_desc" => $this->request->getVar('blog_desc'),
                    "blog_date" => $this->request->getVar('blog_date'),
                    "blog_twitter" => $this->request->getVar('blog_twitter'),
                    "blog_fb" => $this->request->getVar('blog_fb'),
                    "blog_priority" => $this->request->getVar('blog_priority'),
            ];
            $this->blogdb->update($blog_id, $data);
            return redirect()->to('blogs/getData_blog');   
        } else {
            $data['rows'] = $this->blogdb->getBlogsView($blog_id);
            $data['validation'] = $this->validator;
            return view('admin/admin_blog_update', $data);
        }        
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function updateBlogImage($blog_id)
    {
        $session = session();
        $session_data = $session->get('al_id');  
        if(isset($session_data))
	    { 
            helper(['form', 'url']);
            $rules = [
                    'blog_img' => 'max_size[blog_img,2048]|is_image[blog_img]',
                ];
            if($this->validate($rules)) {
                $data = $this->blogdb->find($blog_id);
                $old_img_name = $data['blog_img'];
                $file = $this->request->getFile('blog_img');
                if(isset($file))
                {
                    if(file_exists("assest/user/images/blog/".$old_img_name) && !empty($old_img_name)) 
                    {
                        unlink("assest/user/images/blog/".$old_img_name);
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));    
                        $newName="K_blog_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/blog/',$newName);
                    } else {
                        $newName1 = $file->getClientName();                
                        $file_ext = substr($newName1, strripos($newName1, '.'));    
                        $newName="K_blog_".rand(4500,9050).$file_ext;
                        $file->move('../public/assest/user/images/blog/',$newName);
                    }
                    
                } else {
                    $newName = $old_img_name;                
                }            
                $data = [
                    "blog_img" => $newName,
                ];
                $this->blogdb->update($blog_id, $data);
                return redirect()->to('blogs/getData_blog'); 
             } else {
                $data['validation'] = $this->validator;
                $data['rows'] = $this->blogdb->getBlogsView($blog_id);
                return view('admin/admin_blog_update', $data);
                     
            }
                      
        } else {
            return redirect()->to('/admin/admin_initial');           
        }
    }

    public function deleteBlog($blog_id) 
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {
            $data = $this->blogdb->find($blog_id);
            //echo $data['sld_image'];
            $imagefile = $data['blog_img'];
            if($imagefile == '') {
                $this->blogdb->deleteBlog($blog_id);
            } else {
                if(file_exists("assest/user/images/blog/".$imagefile)) {
                    unlink("assest/user/images/blog/".$imagefile);
                }
                $this->blogdb->deleteBlog($blog_id);
            }
            return redirect()->to('/blogs/getData_blog');           
            } else {
               return redirect()->to('/admin/admin_initial');
        }
    }

}
