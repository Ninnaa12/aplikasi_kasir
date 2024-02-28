<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        $data=[
            'introText'=>'<p>Berikut Adalah Data Pengguna</p>',
            'judulHalaman'=>'Data Pengguna',
            'pengguna'=>$this->pengguna->getPengguna()
        ];
        return view('pengguna/pengguna',$data);
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function tambah()
    {
        $data=[
            'introText'=>'<p>Silahkan Anda Masukkan Data Pada Form Pengguna</p>',
            'judulHalaman'=>'Form Tambah',
            'pengguna'=>$this->pengguna->getPengguna()
        ];
        return view('pengguna/tambah-pengguna',$data);
    }

    public function simpanPengguna()
    {
        $data=[
            'nama_user'=>$this->request->getVar('txtNamaPengguna'),
            'Password'=>$this->request->getVar('txtPassword'),
            'level'=>$this->request->getVar('txtLevel')
        ];
        $this->pengguna->save($data);
        return redirect()->to('/tampil-pengguna');
    }

    public function hapus($id){
        $syarat=[
            'id_user'=>$id
        ];
        $this->pengguna->where($syarat)->delete();
        return redirect()->to('/tampil-pengguna');
    }

    public function edit($id=null){
        $syarat=[
            'id_user'=>$id
        ];

            $data=[
                'introText'=>'<p>Silahkan Anda Edit Data Pada Form</p>',
                'judulHalaman'=>'Form Edit',
                'pengguna'=>$this->pengguna->where($syarat)->findAll()
            ];
            return view('pengguna/edit-pengguna',$data);
    }

    public function update(){

        $data=[
            // 'id_user'=>$this->request->getVar('id_user'),
            'nama_user'=>$this->request->getVar('txtNamaPengguna'),
            'Password'=>$this->request->getVar('txtPassword'),
            'level'=>$this->request->getVar('txtLevel')
        ];
        $this->pengguna->update($this->request->getVar('id_user'),$data);
        return redirect()->to('/tampil-pengguna');
    }
}
