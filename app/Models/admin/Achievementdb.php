<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Achievementdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_achievement';
    protected $primaryKey       = 'achieve_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['achieve_id','achieve_name', 'achieve_img', 'achieve_priority','achieve_alt', 'achieve_type', 'createdate'];

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

    function getAchievement(){
        return $this->table('tbl_achievement')->orderBy('achieve_priority' , 'ASC')->get();
    }

    function getAchievementSingle($achieve_id){
        $query = $this->table('tbl_achievement')->where('achieve_id', $achieve_id)->get();
		return $query;    
    }

    function insertAchievement1($data) {
        $query = $this->table('tbl_achievement')->insert($data);
		return $query;
    }

    function deleteAchievement1($achieve_id) {
        $query = $this->table('tbl_achievement')->where('achieve_id' , $achieve_id)->delete();
		return $query;
    }

}
