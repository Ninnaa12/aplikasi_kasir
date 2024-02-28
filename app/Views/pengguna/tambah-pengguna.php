<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Pengguna</h4>
                    <form class="forms-sample" method="POST"action="<?= site_url('simpan-pengguna');?>">
                      <div class="form-group">
                        <label for="exampleInputnamasatuan1">Nama Pengguna</label>
                        <input class="form-control" name="txtNamaPengguna" type="text" placeholder="Nama Pengguna">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputnamasatuan1">Password</label>
                        <input class="form-control" name="txtPassword" type="text" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputnamasatuan1">Level</label>
                        <input class="form-control" name="txtLevel" type="text" placeholder="Level">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                  </div>
                </div>
              </div>
              <?=$this->endSection();?>