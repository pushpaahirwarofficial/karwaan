<?php

namespace App\Models;

use CodeIgniter\Model;

class Testimonialdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_testimonial';
    protected $primaryKey       = 'te_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['te_name', 'te_rating', 'te_discrip', 'te_img', 'te_title', 'te_designation', 'te_priority'];

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

    function getTestimonial(){
        return $this->table('tbl_testimonial')->orderBy('te_priority', 'ASC')->get();
    }
}
