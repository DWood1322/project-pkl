<?php

namespace App\Controllers\Main;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
// use Firebase\JWT\JWT;

class Dashboard extends BaseController
{
    use ResponseTrait;
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
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
        helper(['form']);
        if ($this->request->getMethod() === 'post') {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        

        $userModel = new UserModel();

        $user = $userModel->where('username',$username)->first();

        if(!$user){
            return $this->respond(['status'=>false,'massage'=>'Username atau password salah'],401);
        }

        if(!password_verify($password,$user['password'])){
          
               
            return $this->respond(['status'=>false,'massage'=>'Username atau password salah'],401);
        }
        $datasession = [
            'sesusername' => $username,
            
             ];
        $this->session->set($datasession);
        // $key = getenv("JWT_SECRET");
        // $iat =time();
        // $exp = $iat + (60*60);

        // $payload =[
        //     'iss'=>'ci4_jwt',
        //     'sub'=>'tokenlogin',
        //     'iat'=>$iat,
        //     'exp'=>$exp,
        //     'email'=>$email
        // ];
        // $token = JWT::encode($payload, $key, "HS256");
        return redirect()->to('home');
    } else {
        // Jika halaman diakses secara langsung, tampilkan tampilan login
        return view('Main/signin');
    }
    }
    

    public function signup()
    {
        helper(['form']);

        // Jika metode yang digunakan adalah GET, tampilkan halaman registrasi
        if ($this->request->getMethod() === 'get') {
            return view('Main/signup');
        }
        $rules = [
            'email' => [
                'rules'=>'required|valid_email|is_unique[users.email]'
            ],
            'username' => [
                'rules'=>'required|is_unique[users.username]'
            ],
            'password' => [
                'rules'=>'required|min_length[6]'
            ],
            'confirm_password' => [
                'rules'=>'required|matches[password]'
            ],
        ];
        if($this->validate($rules)){
            $userModel = new UserModel();

            $userData = [
                'username'=> $this->request->getVar('username'),
                'email'=> $this->request->getVar('email'),
                'password'=>password_hash($this->request->getVar('password'),PASSWORD_BCRYPT),
            ];
            $userModel->save($userData);
            return redirect()->to('/sign-in')->with('success', 'Pendaftaran berhasil. Silakan login.');

        }else{
            $response =[
                'status'=> false,
                'errors'=> $this->validator->getErrors()
            ];
            return $this->respond($response,422);
        }
    }
    public function home()
    {

        return view('welcome_message');
    }

}
