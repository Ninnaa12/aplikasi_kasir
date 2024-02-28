<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\models\ProdukModel;

class Produk extends BaseController
{

    public function tampilProduk()
    {
        $data=[
            'introText'=>'<p>Berikut Adalah Data Produk</p>',
            'judulHalaman'=>'Data Produk',
            'produk'=>$this->produk->getProduk()  
        ];
        return view('produk/produk',$data);
    }

    public function tambah()
    {
        $data=[
            'introText'=>'<p>Silahkan Anda Masukkan Data Pada Form Produk</p>',
            'judulHalaman'=>'Form Tambah',
            'produk'=>$this->produk->findAll(),
            'satuan'=>$this->satuan->findAll(),
            'kategori'=>$this->kategori->findAll()
        ];
        return view('produk/tambah-produk',$data);
    }

    public function simpanProduk()
    {
        $data=[
            'nama_produk'=>$this->request->getVar('txtNamaProduk'),
            'kode_produk'=>$this->request->getVar('txtKodeProduk'),
            'harga_beli'=>$this->request->getVar('txtHargaBeli'),
            'harga_jual'=>$this->request->getVar('txtHargaJual'),
            'id_satuan'=>$this->request->getVar('txtSatuan'),
            'id_produk'=>$this->request->getVar('txtKategori'),
            'stok'=>$this->request->getVar('txtStok')
        ];
        $this->produk->save($data);
        return redirect()->to('/tampil-produk');
    }

    public function hapus($id){
        $syarat=[
            'id_produk'=>$id
        ];
        $this->produk->where($syarat)->delete();
        return redirect()->to('/tampil-produk');
    }

    public function edit($id){
        $syarat=[
            'id_produk'=>$id
        ];

            $data=[
                'introText'=>'<p>Silahkan Anda Edit Data Pada Form</p>',
                'judulHalaman'=>'Form Edit',
                'produk'=>$this->produk->where($syarat)->findAll(),
                'satuan'=>$this->satuan->findAll(),
                'kategori'=>$this->kategori->findAll()
            ];
            return view('produk/edit-produk',$data);
    }

    public function update(){

        $data=[
            'id_produk'=>$this->request->getVar('txtProduk'),
            'nama_produk'=>$this->request->getVar('txtNamaProduk'),
            'kode_produk'=>$this->request->getVar('txtKodeProduk'),
            'harga_beli'=>$this->request->getVar('txtHargaBeli'),
            'harga_jual'=>$this->request->getVar('txtHargaJual'),
            'nama_satuan'=>$this->request->getVar('txtSatuan'),
            'nama_kategori'=>$this->request->getVar('txtKategori'),
            'stok'=>$this->request->getVar('txtStok'),
        ];
        $this->produk->update($this->request->getVar('id_produk'),$data);
        return redirect()->to('/tampil-produk');
    }
}
