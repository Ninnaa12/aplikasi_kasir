<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk', 'kode_produk', 'nama_produk', 'harga_beli', 'harga_jual', 'id_satuan', 'id_kategori', 'stok'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getProduk(){
        $produk= new produkModel;
        $queryproduk = $produk->query('CALL lihatproduk()')->getResult();
        return $queryproduk;
    }

     public function getLaporanProduk(){
        $produk = new ProdukModel;
        $queryproduk = $produk->query('CALL lihatlaporan()')->getResult();
        return $queryproduk;
     }
}
