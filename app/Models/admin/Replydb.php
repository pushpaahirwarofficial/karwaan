<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Replydb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_reply';
    protected $primaryKey       = 'reply_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['reply_id' ,'comment_id', 'user_id', 'user_name' , 'blog_id','blog_title', 'reply', 'date', 'priority'];

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

    function getReply($blog_id){
        return $this->table('tbl_reply')->where('blog_id', $blog_id)->get();
    }
}
