<?php

namespace App\Controllers\Main;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('Main/dashboard');
    }

    public function docs()
    {
        return view('Main/docs');
    }

    // public function about()
    // {
    //     return view('Main/about');
    // }

    public function signin()
    {
        return view('Main/signin');
    }

    public function signup()
    {
        return view('Main/signup');
    }

    public function home()
    {
        return view('Main/home');
    }

}
