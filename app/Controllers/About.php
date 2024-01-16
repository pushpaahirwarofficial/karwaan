<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Playdb;
use App\Models\Eventdb;

class About extends BaseController
{
    public function index()
    {
        $playdb=new Playdb();
        $eventdb=new Eventdb();
        $data['users']=$playdb->getPlaydb();
        $data['users1']=$eventdb->getEventUpcoming();
        return view('about', $data);
    }
}
