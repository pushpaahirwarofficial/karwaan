<?php

namespace App\Models;

use CodeIgniter\Model;

class Teventdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_tevent';
    protected $primaryKey       = 'tevent_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tevent_id', 'title', 'type', 'playdate', 'writer', 'director', 'music', 'actors', 'youtube_links', 'images', 'createdate'];

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

    function getTEvent(){
        return $this->groupBy('type')->table('tbl_tevent')->get();
    }

    function getTEventDetails(){
        return $this->table('tbl_tevent')->get();
    }

    public function getUser($type)
    {
    $sql = $this->table('tbl_tevent')->where('type', $type)->get();   
    return $sql;
    } 
}
