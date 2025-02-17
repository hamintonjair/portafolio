<?php 
namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Session\Session;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function doLogin()
    {
        $model = new UsuarioModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

         if ($user && password_verify($password, $user['password'])) {
            session()->set('isLoggedIn', true);
            return redirect()->to('dashboard/proyectos');
        } else {
            return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
        }
        
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}