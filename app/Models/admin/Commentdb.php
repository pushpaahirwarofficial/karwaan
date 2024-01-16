<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Commentdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_comment';
    protected $primaryKey       = 'comment_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['comment_id', 'user_id', 'user_name' , 'blog_id','blog_title', 'comments', 'date', 'priority'];

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

    function getComment($blog_id){
        return $this->table('tbl_comment')->where('blog_id', $blog_id)->get();
    }

    public function count_comments()
    {
        $countComments = table('tbl_comment')->countAll();
        return $countComments;
    }
}
