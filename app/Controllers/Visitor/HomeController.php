<?php

namespace App\Controllers\Visitor;

use App\Controllers\Visitor\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('visitor/home/index');
    }
}
