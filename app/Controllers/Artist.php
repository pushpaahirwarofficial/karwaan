<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Artistdb;
use App\Models\ArtistDatadb;

class Artist extends BaseController
{
    public function index() 
    {
        $artistdatadb=new ArtistDatadb();
        $data['users']=$artistdatadb->getArtistData();
        return   view('commonpages/header')
                .view('artist', $data)
                .view('commonpages/footer');
    }

    public function editProfileByID($id) 
    {
        $artistdatadb1=new ArtistDatadb();  
        $Artistdb1=new Artistdb();
        $data['users']=$artistdatadb1->getArtistData();
        $data['row1']=$artistdatadb1->getUser($id);
        $data['data']=$Artistdb1->getUserVideo($id);
        $data['videos']=$Artistdb1->getUserVideo($id);
        
       //print_r($data['row1']);
       return view('commonpages/header')
              .view('artist', $data)
              .view('commonpages/footer');
    }

}
