<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Indexdb;

class Index extends BaseController
{
    public function index()
    {
        $session = session();
        $session_data = $session->get('al_id');
        if(isset($session_data))
	    {   
            $indexdb=new Indexdb();
            $data['countAchievement']=$indexdb->count_Achievement();
            $data['countSlider']=$indexdb->count_Slider();
            $data['countArtists']=$indexdb->count_Artist();
            $data['countArtistData']=$indexdb->count_ArtistData();
            $data['countSongs']=$indexdb->count_Songs();
            $data['countVideos']=$indexdb->count_Videos();
            $data['countReviews']=$indexdb->count_Reviews();
            $data['countImages']=$indexdb->count_Images();
            $data['countContacts']=$indexdb->count_Contact();
            $data['countLetter']=$indexdb->count_Letter();
            $data['countEvents']=$indexdb->count_Event();
            $data['countTevents']=$indexdb->count_Tevent();
            $data['countBlogs']=$indexdb->count_Blog();
            return view('admin/index', $data);
	    } else {
            return redirect()->to('/admin/admin_initial');
    }
    
}

}
