<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?= $this->session->flashdata('pesan'); ?>
                        <div class="page-header">
                            <h2 class="pageheader-title">Data User</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>index.php/Admin_view" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Fitur</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Users</li>
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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-12">
                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahAdmin">Tambah Admin</a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data - User terdaftar</h5>
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" 
                                    style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Level</th>
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
                                                <td><?= $u['LEVEL'];?></td>
                                                <td><?= $u['updated_at'];?></td>
                                                <td>                                                  
                                                    <a class="btn btn-danger btn-sm"
                                                        href="#"  
                                                        id="hapusAdminId" 
                                                        class="btn btn-primary btn-sm" 
                                                        data-toggle="modal"
                                                        data-id="<?= $u['id'];?>"
                                                        data-nama="<?= $u['nama'];?>"
                                                        data-target="#hapusAdmin">HAPUS</a>
                                                  
                                                    <a class="btn btn-primary btn-sm"
                                                        href="#"
                                                        id="ubahAdminId" 
                                                        class="btn btn-primary btn-sm" 
                                                        data-toggle="modal"
                                                        data-id="<?= $u['id'];?>"
                                                        data-nama="<?= $u['nama'];?>"
                                                        data-email="<?= $u['email'];?>"
                                                        data-password="<?= $u['password'];?>"
                                                        data-level="<?= $u['LEVEL'];?>"
                                                        data-target="#ubahAdmin"
                                                     >UBAH</a>
                                                 

                                                  
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


<!-- modal tambah sub indikator -->
<div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ubah Sub Indikator </h5>
                  <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
              </div>
              <form action="<?= base_url()?>index.php/Admin_event/ubah_sub_indikator" method="POST">
              <div class="modal-body">
                <div class="card-body">
                <div class="form-group">
                        <label >Nama</label>
                        <input type="hidden" name="indikator">
                        <input class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Indikator" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Username</label>
                        <input type="hidden" name="indikator">
                        <input class="form-control form-control-lg"  type="text" name="username" required="" placeholder="Indikator" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input class="form-control form-control-lg" type="password" name="password" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label for="JKs">Level</label>
                    <select name="jenis_kelamin" class="form-control" >
                        <option value="ADMIN">ADMIN</option>
                        <option value="SUPER">SUPER</option>
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


<!-- modal ubah sub indikator -->
<div class="modal fade" id="ubahAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ubah Sub Indikator </h5>
                  <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
              </div>
              <form action="<?= base_url()?>index.php/Admin_event/ubah_sub_indikator" method="POST">
              <div class="modal-body">
                <div class="card-body">
                    
                    <div class="form-group">
                        <label >Nama</label>
                        <input type="hidden" name="id_admin">
                        <input class="form-control form-control-lg"  type="text" name="nama" required="" placeholder="Indikator" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Username</label>
                        <input class="form-control form-control-lg"  type="text" name="username" required="" placeholder="Indikator" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input class="form-control form-control-lg" type="password" name="password" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label for="JKs">Level</label>
                    <select name="jenis_kelamin" class="form-control" >
                        <option value="ADMIN">ADMIN</option>
                        <option value="SUPER">SUPER</option>
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

<!-- modal hapus indikator -->
<div class="modal fade" id="hapusAdmin" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Yakin Menghapus analisa?</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <p>Semua data tidak bisa dikembalikan alias hapus permanen!</p>
            </div>
            <div class="modal-footer">
            <form id="formHapus" action="" method="POST">
                <a class="btn btn-info" data-dismiss="modal">Batal</a>
                <input type="hidden" name="id" >
                <input type="submit" class="btn btn-danger" value="Oke,Hapus">
            </form>
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).on("click", "#ubahAdminId", function() {
        console.log("ubah");
    //   $('input[name="id"]').val($(this).data('id'));
    //   $('input[name="nama"]').val($(this).data('nama'));
    //   $('select[name="urut"]').val($(this).data('urut'));
    //  $('textarea[name="ket"]').val($(this).data('ket'));
     
});
$(document).on("click", "#hapusAdminId", function() {
        console.log("hehe");
        // $('#judulModal').text("Yakin Menghapus Admin "+$(this).data('nama')+"?");
        // $('#formHapus').attr('action','<?= base_url()?>index.php/Admin_event/hapus_sub_indikator');
        // $('input[name="id"]').val($(this).data('id'));

});

</script>