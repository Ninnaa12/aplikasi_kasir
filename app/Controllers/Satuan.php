<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\SatuanModel;

class Satuan extends BaseController
{
    public function index()
    {
        $data=[
            'introText'=>'<p>Berikut Adalah Data Satuan</p>',
            'judulHalaman'=>'Data Satuan',
            'satuan'=>$this->satuan->findAll()
        ];
        return view('satuan/satuan',$data);
    }

    public function tambah()
    {
        $data=[
            'introText'=>'<p>Silahkan Anda Masukkan Data Pada Form Satuan</p>',
            'judulHalaman'=>'Form Tambah',
        ];
        return view('satuan/tambah-satuan',$data);
    }

    public function simpan()
    {
        $data=[
            'nama_satuan'=>$this->request->getVar('txtSatuan')
        ];
        $this->satuan->save($data);
        return redirect()->to('satuan');
    }

    public function hapus($id){
        $syarat=[
            'id_satuan'=>$id
        ];
        $this->satuan->where($syarat)->delete();
        return redirect()->to('satuan');
    }

    public function edit($id){
        $syarat=[
            'id_satuan'=>$id
        ];

            $data=[
                'introText'=>'<p>Silahkan Anda Edit Data Pada Form</p>',
                'judulHalaman'=>'Form Edit',
                'satuan'=>$this->satuan->where($syarat)->findAll()
            ];
            return view('satuan/edit-satuan',$data);
    }

    public function update(){

        $data=[
            'id_satuan'=>$this->request->getVar('id_satuan'),
            'nama_satuan'=>$this->request->getVar('txtSatuan'),
        ];
        $this->satuan->update($this->request->getVar('id_satuan'),$data);
        return redirect()->to('satuan');
    }
}
