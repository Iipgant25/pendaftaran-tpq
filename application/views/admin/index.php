
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
                                        <h6 class="m-0 font-weight-bold text-primary">Data Santri</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                              <th>Nama Santri</th>
                                              <th>Nama Ayah</th>
                                              <th>Nama Ibu</th>
                                              <th>Nama Wali</th>
                                              <th>Tahun Ajaran</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($santri as $da) : ?>
                                            <tr>
                                                <td><?= $da['nama_santri']; ?></td>
                                                <td><?= $da['nama_ayah']; ?></td>
                                                <td><?= $da['nama_ibu']; ?></td>
                                                <td><?= $da['nama_wali']; ?></td>
                                                <td><?= $da['tahun_ajaran']; ?></td>
                                                <td>
                                                  <a href="<?= base_url('admin/detail/') . $da['id_santri']; ?>" class="btn btn-primary mb-2">Detail</a>
                                                    <?php if ($da['aprove'] == 1 ) { ?>
                                                        <a href="<?= base_url('admin/aprove/') . $da['id_santri']; ?>" class="btn btn-success mb-2" onclick="return confirm('apakah anda yakin akan mengaprove santri ini?')">Aprove</a>
                                                    <?php }?>
                                                  
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
