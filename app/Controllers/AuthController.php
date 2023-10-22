<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth');
    }

    public function create()
    {
        return redirect()->to(url_to('Admin\DashboardController::index'));
    }
}
