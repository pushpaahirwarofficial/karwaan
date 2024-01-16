<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Eventdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_event';
    protected $primaryKey       = 'n_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['n_id','n_title', 'n_desc', 'n_date', 'n_twitter', 'n_fb', 'n_img', 'n_priority'];

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

    function getEvents() {
        return $this->table('tbl_event')->orderBy('n_priority', 'ASC')->get();
    }

    function getEventsView($n_id) {
        $query = $this->table('tbl_event')->where('n_id', $n_id)->get();
		return $query;    
    }

    function insertEvent($data) {
        $query = $this->table('tbl_event')->insert($data);
		return $query;    
    }

    function deleteEvent($n_id) {
        $query = $this->table('tbl_event')->delete($n_id);
		return $query;    
    }

    // function updateEvent1($n_id, $data) {
    //     $query = $this->table('tbl_event')->where('n_id', $n_id)->update($n_id, $data);
	// 	return $query;    
    // }

}



