<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Penjualan</h4>
                    <form class="forms-sample" method="POST"action="<?= site_url('simpan-penjualan');?>">
                      <div class="form-group">
                        <label for="exampleInputnofaktur1">No Faktur</label>
                        <input class="form-control" name="txtNoFaktor" type="text" placeholder="No Faktur">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputtanggalpenjualan1">Tanggal Penjualan</label>
                        <input class="form-control" name="txtTanggalPenjualan" type="text" placeholder="Tanggal Penjualan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputwaktu1">Waktu</label>
                        <input class="form-control" name="txtWaktu" type="text" placeholder="Waktu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputgrandtotal1">Grand Total</label>
                        <input class="form-control" name="txtGrandTotal" type="text" placeholder="Grand Total">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputcash1">Cash</label>
                        <input class="form-control" name="txtCash" type="text" placeholder="Cash">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputchange1">Change</label>
                        <input class="form-control" name="txtChange" type="text" placeholder="Change">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputtotalharga1">Total Harga</label>
                        <input class="form-control" name="txtTotalHarga" type="text" placeholder="Total Harga">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                  </div>
                </div>
              </div>
              <?=$this->endSection();?>