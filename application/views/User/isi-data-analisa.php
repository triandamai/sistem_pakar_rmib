
 <div class="container-fluid  dashboard-content">
            <div class="row">
              <div class="col-md-3 grid-margin"></div>
             
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Isi Data Diri </h5>
                                <div class="card-body">
                                    <form action="<?= base_url()?>index.php/User_event/mulai_analisa"  method="POST" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputUserName">Nama</label>
                                            <input id="inputUserName" type="text" name="nama" data-parsley-trigger="change" required placeholder="Jono" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Tempat Tanggal Lahir</label>
                                            <input id="inputUserName" type="text" name="ttl" data-parsley-trigger="change" required placeholder="Mis : Purbalingga,16 september 1998" autocomplete="off" class="form-control">
                                        <div class="form-group">
                                            <label for="JKs">Jenis Kelamin</label>
                                            <select class="form-control" name="jk">
                                              <option value="L">LAKI-LAKI</option>
                                              <option value="P">PEREMPUAN</option>
                                            </select>
                                        </div>
                                        <div class="row">      
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
              
              <div class="col-md-3 grid-margin"></div>
            </div>
          </div>
         