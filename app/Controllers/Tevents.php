<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Teventdb;

class Tevents extends BaseController
{
    public function events()
    {
        $teventdb=new Teventdb();
        $tevent['teventtype']=$teventdb->getTEvent();
        $tevent['tevents']=$teventdb->getTEventDetails();
        return view('theatricalEvents', $tevent);
    }

    public function event($type)
    {
        $teventdb=new Teventdb();
        $tevent['tevents']=$teventdb->getUser($type);
        return view('commonpages/header.php')
               .view('theatricalEvent', $tevent)
               .view('commonpages/footer.php');
    }

}
