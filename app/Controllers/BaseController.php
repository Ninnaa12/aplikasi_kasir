<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\SatuanModel;
use App\Models\PenggunaModel;
use App\Models\PenjualanModel;
use App\Models\DetailPenjualan;
use App\Models\Satuan;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Pengguna;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $pengguna;
    protected $satuan;
    protected $kategori;
    protected $produk;
    protected $penjualan;
    protected $login;
    protected $detailPenjualan;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['cekrecord'];
    
    
    

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->produk = new ProdukModel;
        $this->satuan = new SatuanModel;
        $this->kategori = new KategoriModel;
        $this->pengguna = new PenggunaModel;
        $this->penjualan = new PenjualanModel;
        $this->detailPenjualan = new DetailPenjualan;

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }
}
