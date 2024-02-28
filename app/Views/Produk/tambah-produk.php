<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Produk</h4>
                    <div class="form-group">
                      <form class="forms-sample" method="POST" action="<?= site_url('simpan-produk');?>">
                        <label for="exampleInputkodeproduk1">Kode Produk</label>
                        <input class="form-control" name="txtKodeProduk" type="text" placeholder="Kode Produk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputnamaproduk1">Nama Produk</label>
                        <input class="form-control" name="txtNamaProduk" type="text" placeholder="Masukan Nama Produk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputhargajual1">Harga Jual</label>
                        <input class="form-control" name="txtHargaJual" type="text" placeholder="Masukan Harga Jual">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputhargajual1">Harga Beli</label>
                        <input class="form-control" name="txtHargaBeli" type="text" placeholder="Masukan Harga Beli">
                      </div>
                      <label for="exampleInputhargajual1">Id Kategori</label>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <select class="form-select" id="floatingSelect" name="txtKategori"
                          aria-label="State">
                          <?php if (isset($kategori)) {
                            $no = null;
                            foreach ($kategori as $row) {
                              $no++;
                              echo '<option value=' . $row['id_kategori'] . ' ">' . $row['nama_kategori'] . '</option>';
                            }
                          }
                          ?>
                          </select>
                          <label for="floatingSelect">Kategori Produk</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                          <select class="form-select" id="floatingSelect" name="txtSatuan"
                          aria-label="State">
                          <?php if (isset($satuan)) {
                            $no = null;
                            foreach ($satuan as $row) {
                              $no++;
                              echo '<option value=' . $row['id_satuan'] . ' ">' . $row['nama_satuan'] . '</option>';
                            }
                          }
                          ?>
                          </select>
                          <label for="floatingSelect">Satuan Produk</label>
                        </div>
                        </div>
                      <div class="form-group">
                        <label for="exampleInputstok1">Stok</label>
                        <input class="form-control" name="txtStok" type="text" placeholder="Masukan stok">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="submit">Simpan</button><div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                  </div>
                </div>
              </div>
              <?=$this->endSection();?>