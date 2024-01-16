<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Youtubedb;

class Youtube extends BaseController
{
    public function index()
    {
        $youtubedb=new Youtubedb();
        //$paginateData = $youtubedb->paginate(6);
        $data['videos'] = $youtubedb->getYoutube();

        // $data = [
        //     'videos' => $paginateData,
        //     'pager' => $youtubedb->pager,
        // ];
        return view('youtube', $data);
    }

    public function singleVideo($code)
    {
        $youtubedb=new Youtubedb();
        $data['videos'] = $youtubedb->getYoutube();
        $data['video'] = $youtubedb->getUser1($code);
        //print_r($data['video']);
        return view('youtube', $data);
    }
}
