<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\KategoriModel;

class Kategori extends BaseController
{
    public function index()
    {
        $data=[
            'introText'=>'<p>Berikut Adalah Data Kategori</p>',
            'judulHalaman'=>'Data Kategori',
            'kategori'=>$this->kategori->findAll()
        ];
        return view('kategori/kategori',$data);
    }

    public function tambah()
    {
        $data=[
            'introText'=>'<p>Silahkan Anda Masukkan Data Pada Form Kategori</p>',
            'judulHalaman'=>'Form Tambah',
        ];
        return view('kategori/tambah-kategori',$data);
    }

    public function simpan()
    {
        $data=[
            'nama_kategori'=>$this->request->getVar('txtKategori')
        ];
        $this->kategori->save($data);
        return redirect()->to('kategori');
    }

    public function hapus($id){
        $syarat=[
            'id_kategori'=>$id
        ];
        $this->kategori->where($syarat)->delete();
        return redirect()->to('kategori');
    }

    public function edit($id){
        $syarat=[
            'id_kategori'=>$id
        ];
            $data=[
                'introText'=>'<p>Silahkan Anda Edit Data Pada Form</p>',
                'judulHalaman'=>'Form Edit',
                'kategori'=>$this->kategori->where($syarat)->findAll()
            ];
            return view('kategori/edit-kategori',$data);
    }

    public function update(){

        $data=[
            'id_kategori'=>$this->request->getVar('id_kategori'),
            'nama_kategori'=>$this->request->getVar('txtKategori'),
        ];
        $this->kategori->update($this->request->getVar('id_kategori'),$data);
        return redirect()->to('kategori');
    }
}

