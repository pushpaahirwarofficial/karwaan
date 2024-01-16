<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Eventdb;

class Event extends BaseController
{
    public function index()
    {
        $eventdb=new Eventdb();
        $data['users']=$eventdb->getEvent();
        $paginateData = $eventdb->paginate(4);
        $data = [
            'users' => $paginateData,
            'pager' => $eventdb->pager,
        ];
        return view('event', $data);
    }
}
