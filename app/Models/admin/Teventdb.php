<?php

namespace App\Models\Admin;

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
    protected $allowedFields    = ['tevent_id', 'title', 'type', 'playdate', 'writer', 'director', 'music', 'actors', 'youtube_links', 'images'];

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

    function getTevents() {
        return $this->table('tbl_tevent')->get();
    }

    function getSingleTevent($tevent_id) {
        $query = $this->table('tbl_tevent')->where('tevent_id', $tevent_id)->get();
		return $query;    
    }

    function insertTevent($data) {
        $query = $this->table('tbl_tevent')->insert($data);
		return $query;    
    }

    function deleteTevent1($tevent_id) {
        $query = $this->table('tbl_slider')->where('tevent_id' , $tevent_id)->delete();
		return $query;
    }

}
