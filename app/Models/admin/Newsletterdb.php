<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Newsletterdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_newsletter';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','email', 'isRead', 'createdate'];

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


    function getNewsletter(){
        return $this->table('tbl_newsletter')->get();
    }

    function getNewsletterSingle($id){
        $query = $this->table('tbl_newsletter')->where('id', $id)->get();
		return $query;    
    }
    
    function deleteNewsletter1($id) {
        $query = $this->table('tbl_newsletter')->where('id' , $id)->delete();
		return $query;
    }

}
