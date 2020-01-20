<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?= $this->session->flashdata('pesan'); ?>
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Tables - Print, Excel, CSV, PDF Buttons</h5>
                                <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Updated</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $no =1;
                                          foreach($user as $u){?>
                                            <tr>
                                                <td><?= $no;?></td>
                                                <td><?= $u['nama'];?></td>
                                                <td><?= $u['email'];?></td>
                                                <td><?= $u['status'];?></td>
                                                <td><?= $u['updated_at'];?></td>
                                                <td>
                                                  <?php if( $u['status'] == "AKTIF"){?>
                                                    <form action="<?= base_url()?>index.php/Admin_event/ubah_status_user" method="POST">
                                                    <input type="hidden" name="id_user" value="<?= $u['id']?>">
                                                    <input type="hidden" name="status" value="TIDAK AKTIF">
                                                    <input type="submit" class="btn btn-danger btn-sm" value="NONAKTIFKAN">
                                                    </form>
                                                  
                                                  <?php }else{?>
                                                    <form action="<?= base_url()?>index.php/Admin_event/ubah_status_user" method="POST">
                                                    <input type="hidden" name="id_user" value="<?= $u['id']?>">
                                                    <input type="hidden" name="status" value="AKTIF">
                                                    <input type="submit" class="btn btn-primary btn-sm" value="AKTIFKAN">
                                                    </form>
                                                  <?php }?>
                                                  
                                                </td>
                                            </tr>
                                          <?php 
                                        $no++;
                                        }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Updated</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>

            </div>