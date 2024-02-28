<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Kategori</h4>
                    <form class="forms-sample" method="POST"action="<?= site_url('simpan-kategori');?>">
                      <div class="form-group">
                        <label for="exampleInputnamakategori1">Nama Kategori</label>
                        <input class="form-control" name="txtKategori" type="text" placeholder="Nama Kategori">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                  </div>
                </div>
              </div>
              <?=$this->endSection();?>