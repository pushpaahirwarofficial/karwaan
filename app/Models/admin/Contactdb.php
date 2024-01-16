<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Contactdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_contact';
    protected $primaryKey       = 'contact_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['c_name', 'c_email', 'c_phone', 'c_subject', 'c_msg', 'c_time'];

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

    function getContacts(){
        return $this->table('tbl_contact')->get();
    }

    function getContactSingle($contact_id){
        $query = $this->table('tbl_contact')->where('contact_id', $contact_id)->get();
		return $query;    
    }

    function deleteContact1($contact_id) {
        $query = $this->table('tbl_contact')->where('contact_id' , $contact_id)->delete();
		return $query;
    }
}
