<div class="container-fluid  dashboard-content">

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

             
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-12">
                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambahIndikator">Tambah Indikator</a>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-12">
                        <?= $this->session->flashdata('pesan'); ?>
                            <div class="section-block">
                                <h5 class="section-title">Simple Card Tabs</h5>
                                <p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface..</p>
                            </div>
                            <div class="simple-card">
                                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-left-0" id="home-tab-simple" data-toggle="tab" href="#indikator" role="tab" aria-controls="home" aria-selected="true">Indikator</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-simple" data-toggle="tab" href="#subindikator" role="tab" aria-controls="profile" aria-selected="false">Sub Indikator</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content" id="myTabContent5">
                                    <div class="tab-pane fade show active" id="indikator" role="tabpanel" aria-labelledby="home-tab-simple">
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
                                                                <th>No urut</th>
                                                                <th>Dibuat pada</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $no =1;
                                                            foreach($indikator as $i){?>
                                                            <tr>
                                                                <td><?= $no?></td>
                                                                <td><?= $i->nama;?></td>
                                                                <td><?= $i->no_urut;?></td>
                                                                <td><?= $i->updated_at;?></td>
                                                                <td>
                                                                <a 
                                                                href="#"
                                                                id="ubahIndikator" 
                                                                class="btn btn-primary btn-sm" 
                                                                data-toggle="modal"
                                                                data-id="<?= $i->id;?>"
                                                                data-urut="<?= $i->no_urut;?>"
                                                                data-nama="<?= $i->nama;?>" 
                                                                data-target="#modalUbahIndikator">Ubah</a>
                                                                <a 
                                                                href="#" 
                                                                id="hapusIndikator"
                                                                class="btn btn-danger btn-sm" 
                                                                data-toggle="modal"
                                                                data-id="<?= $i->id;?>"
                                                                data-urut="<?= $i->no_urut;?>"
                                                                data-nama="<?= $i->nama;?>" 
                                                                data-target="#modalHapus">Hapus</a>
                                                                <a 
                                                                href="#"
                                                                id="tambahSubIndikator" 
                                                                class="btn btn-primary btn-sm" 
                                                                data-toggle="modal"
                                                                data-id="<?= $i->id;?>"
                                                                data-urut="<?= $i->no_urut;?>"
                                                                data-nama="<?= $i->nama;?>" 
                                                                data-target="#modalTambahSubIndikator">Tambah Sub</a>
                                                                </td>
                                                            </tr>
                                                            <?php 
                                                            $no++;
                                                            }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="tab-pane fade" id="subindikator" role="tabpanel" aria-labelledby="profile-tab-simple">
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
                                                                <th>Indikator</th>
                                                                <th>Tabel</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Terakhir diubah</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $no =1;
                                                            foreach($subindikator as $si){?>
                                                            <tr>
                                                                <td><?= $no;?></td>
                                                                <td><?= $si->nama;?></td>
                                                                <td><?= $si->id_indikator;?></td>
                                                                <td><?= $si->tabel?></td>
                                                                <td><?= $si->jk;?></td>
                                                                <td><?= $si->updated_at;?></td>
                                                                <td>
                                                                <a 
                                                                href="#"
                                                                id="ubahSubIndikator" 
                                                                class="btn btn-primary btn-sm" 
                                                                data-toggle="modal"
                                                                data-id="<?= $si->id;?>"
                                                                data-nama="<?= $si->nama;?>"
                                                                data-indikator="<?= $si->id_indikator;?>"
                                                                data-tabel="<?= $si->tabel;?>"
                                                                data-jk="<?= $si->jk;?>"
                                                                data-urut="<?= $si->no_urut;?>" 
                                                                data-target="#modalUbahSubIndikator">Ubah</a>
                                                                <a 
                                                                href="#" 
                                                                id="hapusSubIndikator"
                                                                class="btn btn-danger btn-sm" 
                                                                data-toggle="modal"
                                                                data-id="<?= $si->id;?>"
                                                                data-nama="<?= $si->nama;?>"
                                                                data-indikator="<?= $si->id_indikator;?>"
                                                                data-tabel="<?= $si->tabel;?>"
                                                                data-jk="<?= $si->jk;?>"
                                                                data-urut="<?= $si->no_urut;?>" 
                                                                data-target="#modalHapus">Hapus</a>
                                                                </td>
                                                            </tr>
                                                            <?php $no++;
                                                            }
                                                            ?>
                                                        </tbody>
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
                              


<!-- modal tambah indikator -->
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
                        <label >Nama Indikator</label>
                        <input class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label >No Urut</label>
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

<!-- modal ubah indikator -->
<div class="modal fade" id="modalUbahIndikator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ubah Indikator </h5>
                  <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
              </div>
              <form action="<?= base_url()?>index.php/Admin_event/ubah_indikator" method="POST">
              <div class="modal-body">
                <div class="card-body">
                <div class="form-group">
                        <label for="JKs">Id Indikator</label>
                        <input type="hidden" name="id">
                        <input class="form-control form-control-lg" type="text" name="id" disabled required="" placeholder="id" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="JKs">Nama Indikator</label>
                        <input class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label for="JKs">No Urut</label>
                    <select name="urut" class="form-control" >
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

<!-- modal tambah sub indikator -->
<div class="modal fade" id="modalTambahSubIndikator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Indikator</h5>
                  <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
              </div>
              <form action="<?= base_url()?>index.php/Admin_event/tambah_sub_indikator" method="POST">
              <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label >Id Indikator</label>
                        <input type="hidden" name="id_indikator">
                        <input name="id_indikator" class="form-control form-control-lg" type="text" name="id" disabled required="" placeholder="id" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Nama Sub Indikator</label>
                        <input name="nama" class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label >No Urut</label>
                    <select name="urut" class="form-control" >
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
                    <div class="form-group">
                    <label for="JKs">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" >
                        <option value="L">LAKI-LAKI</option>
                        <option value="P">PEREMPUAN</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="JKs">Tabel</label>
                    <select name="tabel" class="form-control" >
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
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
<div class="modal fade" id="modalUbahSubIndikator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label >Id Sub Indikator</label>
                        <input type="hidden" name="id">
                        <input class="form-control form-control-lg" disabled type="text" name="id" disabled required="" placeholder="Id" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Id Indikator</label>
                        <input type="hidden" name="indikator">
                        <input class="form-control form-control-lg" disabled type="text" name="indikator" required="" placeholder="Indikator" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label >Nama Sub Indikator</label>
                        <input class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label >No Urut</label>
                    <select name="urut" class="form-control" >
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
                    <div class="form-group">
                    <label for="JKs">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" >
                        <option value="L">LAKI-LAKI</option>
                        <option value="P">PEREMPUAN</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="JKs">Tabel</label>
                    <select name="tabel" class="form-control" >
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
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
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog"  aria-hidden="true">
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
$(document).on("click", "#ubahIndikator", function() {
        console.log("ubah");
      $('input[name="id"]').val($(this).data('id'));
      $('input[name="nama"]').val($(this).data('nama'));
      $('select[name="urut"]').val($(this).data('urut'));
     //$('textarea[name="deskripsigejala"]').val($(this).data('deskripsi'));
     
});
$(document).on("click", "#ubahSubIndikator", function() {
        console.log("sub ubah");
      $('input[name="id"]').val($(this).data('id'));
      $('input[name="indikator"]').val($(this).data('indikator'));
      $('input[name="nama"]').val($(this).data('nama'));
      $('select[name="tabel"]').val($(this).data('tabel'));
      $('select[name="urut"]').val($(this).data('urut'));
      $('select[name="jk"]').val($(this).data('jenis_kelamin'));
     
});
$(document).on("click", "#hapusIndikator", function() {
        console.log("hehe");
        $('#judulModal').text("Yakin Menghapus Indikator "+$(this).data('nama'));
        $('#formHapus').attr('action','<?= base_url()?>index.php/Admin_event/hapus_indikator');
        $('input[name="id"]').val($(this).data('id'));

});
$(document).on("click", "#hapusSubIndikator", function() {
        console.log("hehe");
        $('#judulModal').text("Yakin Menghapus Sub Indikator "+$(this).data('nama'));
        $('#formHapus').attr('action','<?= base_url()?>index.php/Admin_event/hapus_sub_indikator');
        $('input[name="id"]').val($(this).data('id'));

});

$(document).on("click", "#tambahSubIndikator", function() {
        console.log("hehe");
      $('input[name="id_indikator"]').val($(this).data('id'));
});
</script>