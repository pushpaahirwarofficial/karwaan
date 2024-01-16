<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Achievementdb;

class Achievement extends BaseController
{
    public function index()
    {
        $achievementdb=new Achievementdb();
        $paginateData = $achievementdb->paginate(8);
        $data = [
            'users' => $paginateData,
            'pager' => $achievementdb->pager,
        ];
       // $data['users']=$achievementdb->getAchievement();
        return view('achievement', $data);
    }
}
