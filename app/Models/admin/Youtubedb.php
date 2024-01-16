<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Youtubedb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_youtube';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'title', 'link', 'code', 'image', 'status'];

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

    function getYoutube(){
        return $this->table('tbl_youtube')->get();
    }

    function getYoutubeSingle($id){
        $query = $this->table('tbl_youtube')->where('id', $id)->get();
		return $query;    
    }
    
    function insertYoutube1($data) {
        $query = $this->table('tbl_youtube')->insert($data);
		return $query;
    }

    function deleteYoutube1($id) {
        $query = $this->table('tbl_youtube')->where('id' , $id)->delete();
		return $query;
    }
}

