<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Gallerydb;
use App\Models\Albumdb;

class Gallery extends BaseController
{
    public function index()
    {
        $gallerydb=new Gallerydb();
        $paginateData = $gallerydb->paginate(8);
        $data = [
            'usr1' => $paginateData,
            'pager' => $gallerydb->pager,
        ];
        return view('gallery', $data);
    }

    public function album($gl_alt)
    {
        $albumdb=new Albumdb();
        $data['row1'] = $albumdb->getAlbum($gl_alt);
        return view('album', $data);
        
    }

    public function image($gl_img)
    {
        $albumdb=new Albumdb();
        $data['row2'] = $albumdb->getImage($gl_img);
        return view('album', $data);
        
    }
}
