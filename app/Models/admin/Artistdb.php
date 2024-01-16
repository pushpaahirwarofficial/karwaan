<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Artistdb extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_artistdata';
    protected $primaryKey       = 'artist_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['artist_id', 'image_video', 'type', 'status'];

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

    function getArtistDB(){
        return $this->table('tbl_artistdata')->orderBy('artist_id', 'ASC')->get();
    }

    function getArtist1($artist_id){
        return $this->table('tbl_artistdata')->where('artist_id', $artist_id)->get();
    }

    function insertArtist1($data) {
        $query = $this->table('tbl_artistdata')->insert($data);
		return $query;
    }

   function getData() {
        $builder = $this->table('tbl_artistdata');
        $builder->select('*');
        $builder->join('tbl_artist', 'tbl_artistdata.artist_id = tbl_artist.ar_id', 'left');
        $query = $builder->get();
        return $query;
   }

   function getArtistView($artist_id){
        $builder = $this->table('tbl_artistdata');
        $builder->select('*');
        $builder->join('tbl_artist', 'tbl_artistdata.artist_id = tbl_artist.ar_id', 'left');
        $builder->where($artist_id);
        $query = $builder->get();
        return $query;

}


}
