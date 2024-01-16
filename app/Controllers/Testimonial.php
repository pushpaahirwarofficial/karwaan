<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Testimonialdb;

class Testimonial extends BaseController
{
    public function index()
    {
        $testimonialdb=new Testimonialdb();
        $paginateData = $testimonialdb->paginate(15);
        $data = [
            'users' => $paginateData,
            'pager' => $testimonialdb->pager,
        ];
        return view('testimonial', $data);
    }
}
