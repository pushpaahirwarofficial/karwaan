<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Recycle extends BaseController
{
    public function index()
    {
        return view('admin/admin_recycle');
    }
}
