<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\LaporanModel;
use App\Models\ProdukModel;
use Dompdf\Dompdf;

class Laporan extends BaseController
{
    public function index()
    {
        $data =[
            'produk' => $this->produk->getProduk()
        ];
        return view('laporan/pdf_view');
    }

    public function tampilLaporan()
    {
        $produk = NEW ProdukModel;
        $data =[
            'produk'=>$this->produk->getLaporanProduk()
        ];

        // $listProduk = $this->produk->getLaporanProduk();

        return view('laporan/laporan', $data);
    }

    public function generate()
    {
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $data =[
            'produk'=> $this->produk->getLaporanProduk()
        ];

        // load HTML content
        $dompdf->loadHtml(view('laporan/pdf_view'));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}