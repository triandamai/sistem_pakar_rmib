<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Tabs</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">UI Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tabs</li>
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
                        <!-- ============================================================== -->
                        <!-- vertical tabs  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-12">
                        <?= $this->session->flashdata('pesan'); ?>
                            <div class="section-block">
                                <h5 class="section-title">Vertical tabs</h5>
                                <p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface..</p>
                            </div>
                            <div class="tab-vertical">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                  <?php
                                  $no =1;
                                  foreach($indikator as $i){?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="home-vertical-tab" data-toggle="tab" href="#tab-<?=$i['id'];?>" role="tab" aria-controls="home" aria-selected="true"><?= $i->nama;?> #<?= $no;?></a>
                                    </li>
                                  <?php 
                                  $no++;
                                }?>
                                </ul>
                                <div class="tab-content" id="myTabContent3">
                                <?php
                                  $no =1;
                                  foreach($indikator as $j){?>
                                    <div class="tab-pane fade show active" id="tab-<?=$j['id'];?>" role="tabpanel" aria-labelledby="home-vertical-tab">
                                        <div class="row">
                                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalDetail">Detail Indikator</a>
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambahIndikator">Tambah Indikator</a>
                                                    <h5 class="mb-0">Data Tables - Print, Excel, CSV, PDF Buttons</h5>
                                                    <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Position</th>
                                                                    <th>Office</th>
                                                                    <th>Age</th>
                                                                    <th>Start date</th>
                                                                    <th>Salary</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tiger Nixon</td>
                                                                    <td>System Architect</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>61</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>$320,800</td>
                                                                    <td>
                                                                          <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalDetail">Detail</a>
                                                                        <!-- Modal -->
                                                                            <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Analisa</h5>
                                                                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>Woohoo, You are readng this text in a modal! Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                                                                                            <!-- <a href="#" class="btn btn-primary">Ubah</a> -->
                                                                                        </div>
                                                                                    </div>
                                                                               </div>
                                                                            </div>
                                                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus">Hapus</a>
                                                                            <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                  <div class="modal-dialog" role="document">
                                                                                      <div class="modal-content">
                                                                                          <div class="modal-header">
                                                                                              <h5 class="modal-title" id="exampleModalLabel">Yakin Menghapus analisa?</h5>
                                                                                              <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                  <span aria-hidden="true">&times;</span>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div class="modal-body">
                                                                                              <p>Semua data tidak bisa dikembalikan alias hapus permanen!</p>
                                                                                          </div>
                                                                                          <div class="modal-footer">
                                                                                              <a href="#" class="btn btn-info" data-dismiss="modal">Batal</a>
                                                                                              <a href="#" class="btn btn-danger">Oke</a>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </td>
                                                                          </tr>
                                                                      </tbody>
                                                                      <tfoot>
                                                                          <tr>
                                                                              <th>Name</th>
                                                                              <th>Position</th>
                                                                              <th>Office</th>
                                                                              <th>Age</th>
                                                                              <th>Start date</th>
                                                                              <th>Salary</th>
                                                                              <th>Action</th>
                                                                          </tr>
                                                                      </tfoot>
                                                                  </table>
                                                                </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
                                             </div>
                                          </div>
                                        </div>
                                    </div>
                                  <?php 
                                  $no++;
                                }?>
                                </div>



<div class="modal fade" id="modalTambahIndikator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Indikator</h5>
                  <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
              </div>
              <form action="<?= base_url()?>index.php/Admin_event/tambah_indikator" method="POST">
              <div class="modal-body">
               
                      <div class="card-body">
                          <div class="form-group">
                              <label for="JKs">Nama Indikator</label>
                              <input class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Nama" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="JKs">NO Urut</label>
                            <select name="urut" class="form-control" id="JK">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </div>
                        </div>
                      </div>
                
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                <input type="submit"  class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>