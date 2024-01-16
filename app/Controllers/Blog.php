<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Blogdb;
use App\Models\Commentsdb;
use App\Models\Replydb;
use App\Models\Likedb;

class Blog extends BaseController
{
    public $blogdb;
    public $ommentsdb;
    public $replydb;
    public $likedb;
    public $session;

    public function __construct()    
    {
        $this->blogdb = new \App\Models\Blogdb();
        $this->commentsdb = new \App\Models\Commentsdb();
        $this->replydb = new \App\Models\Replydb();
        $this->likedb = new \App\Models\Likedb();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data['users']=$this->blogdb->getBlog();
        $data['comm'] = $this->commentsdb->get();
        $data['rply'] = $this->replydb->get();
        $data['like']=$this->likedb->getLike();
        return view('blog', $data);
    }

    public function getSingleBlogDesc($blog_id)
    {
        $result2 = $this->blogdb->where('blog_id' , $blog_id)->get();
        $like2 = $this->likedb->where('blog_id' , $blog_id)->get();
            foreach($result2->getResult() as $row) {
            $session = session();
            $sd = [
                'blog_id' => $row->blog_id,
            ];
            $this->session->set($sd);
            }
        $blog['allUsr'] = $this->blogdb->getBlogLimit();
        $blog['usr'] = $this->blogdb->where('blog_id' , $blog_id)->get();
        $blog['comm'] = $this->commentsdb->where('blog_id' , $blog_id)->get();
        $blog['rply'] = $this->replydb->where('blog_id' , $blog_id)->get();
        $blog['like'] = $this->likedb->where('blog_id' , $blog_id)->get();

        return view('commonpages/header') 
              .view('blogViewDesc', $blog)
               .view('commonpages/footer');
    }

    public function addComment($blog_id) 
    {
        helper(['form']);
            $rules = [
                'user_name' => 'required|max_length[25]|min_length[3]',
                'comments' => 'required|max_length[300]|min_length[3]',
            ];
            if($this->validate($rules)) {
            $data = array(
                "blog_id" => $this->request->getVar('blog_id'),
                "user_name" => $this->request->getVar('user_name'),
                "blog_title" => $this->request->getVar('blog_title'),
                "comments" => $this->request->getVar('comments'),
                "priority" => $this->request->getVar('blog_priority'),
            );
            $result = $this->commentsdb->insert($data);
            return redirect()->to('/blogs/blog_view_desc/'.$blog_id);
            } else {
                $blog['allUsr'] = $this->blogdb->getBlogLimit();
                $blog['usr'] = $this->blogdb->where('blog_id' , $blog_id)->get();
                $blog['comm'] = $this->commentsdb->where('blog_id' , $blog_id)->get();
                $blog['rply'] = $this->replydb->where('blog_id' , $blog_id)->get();

                $blog['validation'] = $this->validator;

                return view('commonpages/header') 
                    .view('blogViewDesc', $blog)
                    .view('commonpages/footer');
            }
    }

    public function addLike($data) {
        $data = [
            'likes' => $this->request->getPost('likePost'),
        ];
        $result = $$this->likedb->insert($data);
        echo $result;
    }

    public function getSingleBlog($blog_id)
    {
        $blog['usr'] = $this->blogdb->where('blog_id' , $blog_id)->first();
        $blog['comm'] = $this->commentsdb->where('blog_id' , $blog_id)->find();
        $blog['rply'] = $this->replydb->where('blog_id' , $blog_id)->find();
        echo json_encode($blog);
    }

    public function insertComment() {
        helper(['form', 'url']);

            // $rules = [
            //     'msgText' => 'required|min_length[3]|max_length[250]',
            // ];
            $data = [
                'blog_id' => $this->request->getPost('blog_id'),
                //'blog_title' => $this->request->getPost('blog_title'),
                'user_name' => $this->request->getPost('username'),
                'comments' => $this->request->getPost('comments'),
            ];
            $result = $this->commentsdb->insert($data);
            echo json_encode($result);
            
    }
}
