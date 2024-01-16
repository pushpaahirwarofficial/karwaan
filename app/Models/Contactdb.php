<?php

namespace App\Models;

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
    protected $allowedFields    = ['c_name', 'c_email', 'c_phone', 'c_subject', 'c_msg'];

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


    public function createUser($param = array()) 
    {
    $data = ['c_name' => $param['c_name'], 'c_email' => $param['c_email'], 'c_phone' => $param['c_phone'],'c_subject' => $param['c_subject'], 'c_msg' => $param['c_msg'] ];
    $this->save($data);
    return true;
    }

}
