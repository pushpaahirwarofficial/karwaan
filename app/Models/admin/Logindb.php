<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Logindb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_adminlogin';
    protected $primaryKey       = 'al_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['al_id', 'al_username', 'al_email', 'al_password', 'al_status', 'al_createdate'];

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

    public function loginUser($param = array())
{
    $sql = 'SELECT * FROM tbl_adminlogin WHERE al_email = :al_email: AND al_password = :al_password:';
    $rowData = $this->query($sql,$param);
    return $rowData->getRow();
}
}
