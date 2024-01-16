<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Likedb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_like';
    protected $primaryKey       = 'like_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['like_id', 'user_id', 'blog_id', 'blog_title', 'likes', 'priority'];

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

    function getLike(){
        return $this->table('tbl_like')->get();
    }

    function countLikes($blog_id){
        return $this->table('tbl_like')->where('blog_id', $blog_id)->get();
    }
}
