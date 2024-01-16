<?php

namespace App\Models;

use CodeIgniter\Model;

class Gallerydb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_gallery';
    protected $primaryKey       = 'gl_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['gl_id','gl_name', 'gl_type', 'gl_img', 'gl_priority', 'gl_alt', 'gl_createdate'];

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

    function getGallery(){
        return $this->table('tbl_gallery')->get();
    }
}
