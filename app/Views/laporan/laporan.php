<?=$this->extend('dashboard'); ?>

<?=$this->section('content'); ?>
          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h3 class="mt-30">Laporan Produk</h3>
                  <div class="text-start">
                    <div class="col-sm-2">
                      <form method="POST" > 
                    </div>
                    <div class="btn-print mt-30">
                  <a href="<?=site_url('pdf_view'); ?>" class="main-btn danger-btn-light square-btn btn-hover">Print PDF</a>
                  </div>
                      </form>
                  <div class="table-wrapper table-responsive mt-30">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Harga Beli</th>
                          <th>Harga Jual</th>
                          <th>Stok</th>
                          <!-- <th style="text-align: center;">Aksi</th> -->
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 1; ?>
                <?php foreach ($produk as $baris): ?>
                  <tr>
                  <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $baris->nama_produk ?></td>
                                    <td><?= $baris->harga_beli ?></td>
                                    <td><?= $baris->harga_jual ?></td>
                                    <td><?= $baris->stok ?></td>
                                </tr>
                  </tr>
                <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

<?=$this->endSection(); ?>