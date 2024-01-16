<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Sliderdb;
use App\Models\Eventdb;
use App\Models\Testimonialdb;

class Mainuser extends BaseController
{
    public function index()
    {   
        $sliderDb=new Sliderdb();
        $eventdb=new Eventdb();
        $testimonialdb=new Testimonialdb();
        $data['users']=$sliderDb->getSlider();
        $data['user']=$eventdb->getEvent();
        $data['rows']=array();
        $data['users1']=$testimonialdb->getTestimonial();
        return view('index',$data);
    }
}
