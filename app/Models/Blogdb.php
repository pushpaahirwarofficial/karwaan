<?php

namespace App\Models;

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

    function getBlog(){
        return $this->table('tbl_blog')->orderBy('blog_date', 'DESC')->get();
    }

    function getBlogLimit(){
        return $this->table('tbl_blog')->orderBy('blog_date', 'DESC')->limit(5)->get();
    }

}
