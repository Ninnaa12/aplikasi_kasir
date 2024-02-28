<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PenggunaModel;
class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function prosesLogin()
    {
        $validasiForm = [
            'username' => 'required',
            'password' => 'required'
        ];

        if ($this->validate($validasiForm)){
                $user = $this->request->getPost('username');
                $pass = $this->request->getPost('password');

                $whereLogin = [
                    'username'=>$user,
                    'password'=>$pass
                ];

                $ceklogin =$this->pengguna->where($whereLogin)->findAll();



            if (count($ceklogin) == 1) {

                $dataSession = [
                    'id_user' => $ceklogin[0]['id_user'],
                    'nama_user' => $ceklogin[0]['nama_user'],
                    'password' => $ceklogin[0]['password'],
                    'level' => $ceklogin[0]['level'],
                    'sudahkahLogin' => true               
                ];

                session()->set($dataSession);
                return redirect()->to('/dashboard');
            } else {
                // pesan kesalahan jika login gagal
                return redirect()->to('/login')->with('pesan','<div class="alert lert-danger" role= </div>')->withInput();
            }
        } else {
            return redirect()->to('/dashboard')->with('pesan','<div> class="alert alert danger" role="alert"</div>');
        }
        return view('login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
