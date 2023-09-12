<?php

namespace App\Controllers\Main;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('Main/home');
    }

    public function docs()
    {
        return view('Main/docs');
    }

    public function about()
    {
        return view('Main/about');
    }

    public function signin()
    {
        return view('Main/signin');
    }

    public function signup()
    {
        return view('Main/signup');
    }

}
