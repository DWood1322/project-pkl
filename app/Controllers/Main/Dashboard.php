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
     // $this->session->set($datasession);
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

    public function signin()
{
    helper(['form']);
    $data = []; // Initialize an empty array to hold data for the view
    
    if ($this->request->getMethod() === 'post') {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            $data['alert'] = ['status' => 'danger', 'message' => 'Username kosong'];
        } elseif (!password_verify($password, $user['password'])) {
            $data['alert'] = ['status' => 'danger', 'message' => 'Password salah'];
        } else {
            // Create a session variable upon successful sign-in
            $session = session();
            $session->set('sesusername', $username);

            return redirect()->to('/home');
        }
    }

    // Pass the data array to the view
    return view('Main/signin', $data);
}

public function logout()
{
    // Load the session library if not already loaded
    $session = session();

    // Unset or destroy session variables related to authentication
    $session->remove('sesusername'); // Unset a specific session variable
    // Alternatively, you can destroy the entire session
    $session->destroy();

    // Redirect to the sign-in page or any other page as needed
    return redirect()->to('/sign-in'); // Change '/signin' to your actual login page URL
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
                'rules' => 'required|valid_email|is_unique[users.email]'
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]'
            ],
            'password' => [
                'rules' => 'required|min_length[6]'
            ],
            'confirm_password' => [
                'rules' => 'required|matches[password]'
            ],
        ];
        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $userData = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            ];
            $userModel->save($userData);
            return redirect()->to('/sign-in')->with('success', 'Pendaftaran berhasil. Silakan login.');
        } else {
            $response = [
                'status' => false,
                'errors' => $this->validator->getErrors()
            ];
            return $this->respond($response, 422);
        }
    }

    public function main()
    {

        return view('welcome_message');
    }

    public function home()
    {
        return view('Main/home');
    }
}
