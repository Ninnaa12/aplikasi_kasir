<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<a class="btn btn-gradient-primary me-2" href="<?= site_url('tambah-penjualan');?>">Tambah</a>
 <table class="table table-sm table-striped table-bordered">
    <thead>
    <tr>
        <th>No</th>        
        <th>No Faktur</th>
        <th>Tanggal Jual</th>
        <th>Waktu</th>
        <th>Grand Total</th>
        <th>Cash</th>
        <th>Change</th>
        <th>Total Harga</th>
        <th>Aksi</th>
    </tr>
    </thead>
<?php
if(isset($penjualan)) :
    $html =null;
    $no = null;
    foreach($penjualan as $baris) :
        $no++;
        $html .='<tr>';
        $html .='<td>'. $no.'</td>';
        $html .='<td>'. $baris['no_faktur'].'</td>';
        $html .='<td>'. $baris['tgl_penjualan'].'</td>';
        $html .='<td>'. $baris['waktu'].'</td>';
        $html .='<td>'. $baris['grand_total'].'</td>';
        $html .='<td>'. $baris['cash'].'</td>';
        $html .='<td>'. $baris['change'].'</td>';
        $html .='<td>'. $baris['total_harga'].'</td>';
        $html .='<td align="center">
        <a href="'.site_url('edit-penjualan/'.$baris['id_penjualan']).'" class="btn btn-primary btn-sm fw-bold">...</a>
        <a href="'.site_url('hapus-penjualan/'.$baris['id_penjualan']).'" OnClick="return confirm(\'Anda Yakin ?\')" class="btn btn-danger btn-sm fw-bold">X</a>
        </td>';
        $html .='</tr>';
    endforeach;
    echo $html;    
endif;
?>
</table>
<?=$this->endSection();?>


