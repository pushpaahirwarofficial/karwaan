<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Sliderdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_slider';
    protected $primaryKey       = 'sld_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['sld_id' ,'sld_imagelink', 'sld_title', 'sld_image', 'sld_alt', 'sld_priority', 'sld_status'];

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

    function getSlider(){
        return $this->table('tbl_slider')->orderBy('sld_priority' , 'ASC')->get();
    }

    function getSliderSingle($sld_id){
        $query = $this->table('tbl_slider')->where('sld_id', $sld_id)->get();
		return $query;    
    }
    
    function insertSlider1($data) {
        $query = $this->table('tbl_slider')->insert($data);
		return $query;
    }

    function deleteSlider1($sld_id) {
        $query = $this->table('tbl_slider')->where('sld_id' , $sld_id)->delete();
		return $query;
    }

    // function updateSlider1($sld_id) {
    //     $query = $this->table('tbl_slider')->where('sld_id' , $sld_id)->update();
	// 	return $query;
    // }
}
