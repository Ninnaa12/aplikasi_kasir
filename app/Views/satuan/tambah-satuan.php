<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Satuan</h4>
                    <form class="forms-sample" method="POST"action="<?= site_url('simpan-satuan');?>">
                      <div class="form-group">
                        <label for="exampleInputnamasatuan1">Nama Satuan</label>
                        <input class="form-control" name="txtSatuan" type="text" placeholder="Nama Satuan">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                  </div>
                </div>
              </div>
              <?=$this->endSection();?>