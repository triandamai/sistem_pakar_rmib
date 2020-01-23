<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Histroy Analisa Akun Saya</h2>
                            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>index.php/User_view" class="breadcrumb-link">Dashboard</a></li>
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
                    <?= $this->session->flashdata('pesan'); ?>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data History - Analisa</h5>
                                <!-- <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Tempat/Tgl Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no =1; 
                                                foreach($data_hasil as $h){
                                            ?>
                                                <tr>
                                                <td><?= $no;?></td>
                                                <td><?= $h->id;?></td>
                                                <td><?= $h->nama;?></td>
                                                <td><?= $h->created_at;?></td>
                                                <td><?= $h->TTL;?></td>
                                                <td><?= $h->jenis_kelamin;?></td>
                                                <td>
                                                <?php if($h->hasil == "SELESAI"){
                                                    ?>
                                                     <a href="<?= base_url()?>index.php/User_view/hasil_analisa?hasil=<?= $h->id;?>" class="btn btn-primary btn-sm">Detail</a>
                                                    <?php
                                                }else{
                                                    ?>
                                                     <a href="#" class="btn btn-danger btn-sm">Tidak Valid</a>
                                                    <?php
                                                }?>
                                            </tr>
                                            <?php
                                                    $no++;
                                                }
                                            ?>
                                        </tbody>
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