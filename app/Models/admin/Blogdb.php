<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Blogdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_blog';
    protected $primaryKey       = 'blog_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['blog_id','blog_title', 'blog_desc', 'blog_date', 'blog_twitter', 'blog_fb', 'blog_img', 'blog_priority'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function getBlogs() {
        return $this->table('tbl_blog')->orderBy('blog_priority', 'ASC')->get();
    }

    function getBlogsView($blog_id) {
        $query = $this->table('tbl_blog')->where('blog_id', $blog_id)->get();
		return $query;    
    }

    function insertBlog($data) {
        $query = $this->table('tbl_blog')->insert($data);
		return $query;    
    }

    function deleteBlog($blog_id) {
        $query = $this->table('tbl_blog')->delete($blog_id);
		return $query;    
    }

}
