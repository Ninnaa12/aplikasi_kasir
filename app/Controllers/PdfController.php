<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;

class PdfController extends BaseController
{
    public function index()
    {
        $data =[
            'produk' => $this->produk->getProduk()
        ];
        return view('laporan/pdf_view');
    }

    public function generate()
    {
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $data =[
            'produk'=> $this->produk->getProduk()
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
