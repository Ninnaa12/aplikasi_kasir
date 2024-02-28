<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index')
//$routes->get/post('/nama_routes', 'Controller::method)

//$routes->get('/', 'Home::index');
// $routes->post('/dashboard', 'Pengguna::dashboard');
//login
$routes->get('/', 'Login::index');
$routes->post('/', 'Login::prosesLogin');
$routes->get('/proses-login', 'Login::prosesLogin');
// $routes->post('/proseslogin', 'Login::prosesLogin');
$routes->get('/dashboard', 'Pengguna::dashboard');
$routes->get('/logout', 'Login::logout');

//produk
$routes->get('/tampil-produk', 'Produk::tampilProduk');
$routes->get('/tambah-produk', 'Produk::tambah');
$routes->post('/simpan-produk', 'Produk::simpanProduk');
$routes->get('/edit-produk/(:num)', 'Produk::edit/$1');
$routes->get('/hapus-produk/(:num)', 'Produk::hapus/$1');
$routes->post('/update-produk', 'Produk::update');

//pengguna
$routes->get('tampil-pengguna', 'Pengguna::index');
$routes->get('/tambah-pengguna', 'Pengguna::tambah');
$routes->post('/simpan-pengguna', 'Pengguna::simpanPengguna');
$routes->get('/edit-pengguna/(:num)', 'Pengguna::edit/$1');
$routes->get('/hapus-pengguna/(:num)', 'Pengguna::hapus/$1');
$routes->post('/update-pengguna', 'Pengguna::update');

//satuan
$routes->get('satuan', 'Satuan::index');
$routes->get('/tambah-satuan','Satuan::tambah');
$routes->post('/simpan-satuan','Satuan::simpan');
$routes->get('/edit-satuan/(:num)', 'Satuan::edit/$1');
$routes->get('/hapus-satuan/(:num)', 'Satuan::hapus/$1');
$routes->post('/update-satuan', 'Satuan::update');

//kategori
$routes->get('kategori', 'Kategori::index');
$routes->get('/tambah-kategori','Kategori::tambah');
$routes->post('/simpan-kategori','Kategori::simpan');
$routes->get('/edit-kategori/(:num)', 'Kategori::edit/$1');
$routes->get('/hapus-kategori/(:num)', 'Kategori::hapus/$1');
$routes->post('/update-kategori', 'Kategori::update');

//penjualan
$routes->get('tampil-penjualan', 'Penjualan::index');
$routes->get('/tambah-penjualan','Penjualan::tambah');
$routes->post('/simpan-penjualan','Penjualan::simpan');
$routes->get('/edit-penjualan/(:num)', 'Penjualan::edit/$1');
$routes->get('/hapus-penjualan/(:num)', 'Penjualan::hapus/$1');
$routes->post('/update-penjualan', 'Penjualan::update');

//laporan
//$routes->get('/', 'Laporan::index');
//$routes->post('/', 'Laporan::prosesLogin');
//$routes->get('/laporan', 'Laporan::tampilLaporan');
$routes->get('/laporan', 'Laporan::tampilLaporan');
$routes->get('/pdf_view', 'Laporan::index');  
$routes->get('/pdf/generate', 'Laporan::generate');