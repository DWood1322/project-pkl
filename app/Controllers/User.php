<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('welcome_message');
    }
}