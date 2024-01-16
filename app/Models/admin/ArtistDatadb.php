<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ArtistDatadb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_artist';
    protected $primaryKey       = 'ar_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['ar_id', 'ar_name', 'ar_designation', 'ar_about', 'ar_discription', 'ar_group', 'ar_fb', 'ar_twitter', 'ar_insta', 'ar_linkedin', 'ar_email', 'ar_priority', 'ar_date', 'ar_img'];

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

    function getArtist(){
        return $this->table('tbl_artist')->orderBy('ar_priority', 'ASC')->get();
    }

    function getArtistSingle($ar_id){
        $query = $this->table('tbl_artist')->where('ar_id', $ar_id)->get();
		return $query;    
    } 

    function insertArtist($data) {
        $query = $this->table('tbl_artist')->insert($data);
		return $query;
    }

    function deleteArtist($ar_id) {
        $query = $this->table('tbl_artist')->where('ar_id' , $ar_id)->delete();
		return $query;
    }

}
