
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?=$judul;?></h1>
                    <!-- Content Row -->
                    <div class="row"> 
                    </div>
                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="<?= base_url('admin/print/'); ?>" class="btn btn-primary mb-2" target="blank"><i class="fa-solid fa-print"></i> Export All</a>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-success mb-2" data-toggle="modal" data-target="#export"><i class="fa-solid fa-print"></i> Export</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Nama Santri</th>
                                              <th>Jenis Kelamin</th>
                                              <th>Alamat</th>
                                              <th>No Telp</th>
                                              <th>Tahun Ajaran</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($santri as $da) : ?>
                                            <?php 
                                                $this->load->model('ModelUpload');
                                                $santri = $this->ModelUpload->dataDetail($da['id_santri'])->row_array();
                                            ?>
                                            <tr>
                                                <td><?= $da['nama_santri']; ?></td>
                                                <td><?= $da['jenis_kelamin']; ?></td>
                                                <td><?= $santri['alamat']; ?></td>
                                                <td><?= $santri['no_hp']; ?></td>
                                                <td><?= $santri['tahun_ajaran']; ?></td>
                                                <td>
                                                  <a href="<?= base_url('admin/print_l/') . $da['id_santri']; ?>" class="btn btn-primary mb-2"><i class="fa-solid fa-print"></i> Print</a>
                                                </td>
                                            </tr>
                                          <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->


                </div>
                <!--container-fluid -->

                    <div class="modal fade" id="export" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Tahun Ajaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/print_k/'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tahun Ajaran</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="tahun_ajaran">
                                        <option value="2022/2023">2022/2023</option>
                                        <option value="2023/2024">2023/2024</option>
                                        <option value="2024/2025">2024/2025</option>
                                        <option value="2025/2026">2025/2026</option>
                                        </select>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Print</button>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- End of Main Content -->



