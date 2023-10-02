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
        return view('Main/index');
    }

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

        // Validasi apakah username dan password tidak kosong
        if (empty($username) || empty($password)) {
            $data['alert'] = ['status' => 'danger', 'message' => 'Username dan password harus diisi.'];
        } else {
            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if (!$user) {
                $data['alert'] = ['status' => 'danger', 'message' => 'Username atau password salah.'];
            } elseif (!password_verify($password, $user['password'])) {
                $data['alert'] = ['status' => 'danger', 'message' => 'Username atau password salah.'];
            } else {
                // Create a session variable upon successful sign-in
                $session = session();
                $session->set('sesusername', $username);

                return redirect()->to('/home');
            }
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
            'rules' => 'required|valid_email|is_unique[users.email]',
            'errors' => [
                'required' => 'Email harus diisi.',
                'valid_email' => 'Email tidak valid.',
                'is_unique' => 'Email sudah digunakan.',
            ],
        ],
        'username' => [
            'rules' => 'required|is_unique[users.username]',
            'errors' => [
                'required' => 'Username harus diisi.',
                'is_unique' => 'Username sudah digunakan.',
            ],
        ],
        'password' => [
            'rules' => 'required|min_length[6]',
            'errors' => [
                'required' => 'Password harus diisi.',
                'min_length' => 'Password harus memiliki panjang setidaknya 6 karakter.',
            ],
        ],
        'confirm_password' => [
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'Konfirmasi password harus diisi.',
                'matches' => 'Konfirmasi password tidak cocok dengan password.',
            ],
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

        // Set flash data untuk "old input"
        session()->setFlashdata('oldInput', $this->request->getPost());

        return redirect()->to('/sign-in')->with('success', 'Pendaftaran berhasil. Silakan login.');
    } else {
        $data['validation'] = $this->validator;
        return view('Main/signup', $data);
    }
}


    public function home()
    {
        // Check if 'sesusername' session variable exists
        $session = session();
        if (!$session->has('sesusername')) {
            // 'sesusername' session variable doesn't exist, show Access Denied message
            return view('Main/access_denied');
        }

        // 'sesusername' session variable exists, load the home page
        $header['title'] = 'Dashboard';
        // echo view('partial/header',$header);
        // echo view('partial/top_menu');
        // echo view('partial/side_menu');
        echo view('Main/home', $header);
        // echo view('partial/footer');
    }

    public function page()
    {
        return view('Main/index');
    }
}
