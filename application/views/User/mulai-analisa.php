          <?php// die(json_encode($sub_indikator));?>
          <div class="container-fluid  dashboard-content">
            <div class="row">
              <div class="col-md-3 grid-margin"></div>
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              
              <?= $this->session->flashdata('pesan'); ?>
                  <div class="card">
                    <h5 class="card-header">Isi pekerjaan paling diminati - Tabel <?= $_GET['tabel'];  ?> (
                      <?php
                      if($this->session->userdata['analisa_data']['jenis_kelamin'] == "L"){
                        echo "LAKI-LAKI";
                      }else{
                        echo "PEREMPUAN";
                      }
                    
                    
                    ?>).</h5>
                    <p class="card-header">
                      Isi form dibawah dengan mengisi angka 1 sampai 12.
                    </p>
                    <div class="card-body">
                      <form action="<?= base_url()?>index.php/User_event/simpan_analisa?tabel=<?= $_GET['tabel']; ?>"  method="POST" id="basicform" data-parsley-validate="">
                        <?php $no=1; 
                        foreach($sub_indikator as $si){
                        ?>
                        <div class="form-group row">
                           <label for="inputUserName" class="col-9 col-lg-9 col-form-label text-left"><?= $si->nama;?></label>
                           <div class="col-3 col-lg-3">
                           <input type="hidden" name="tabel" value="<?= $_GET['tabel'];?>">
                           <input id="inputUserName" type="hidden" name="id_sub[]" value="<?= $si->id;?>">
                            <input id="inputUserName" type="number" name="val[]" data-parsley-trigger="change" required placeholder="max : 12" autocomplete="off" class="form-control">
                           </div>
                        </div>
                        <?php
                          $no++;
                        }?>
                        
                        <div class="row">      
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                  <button type="submit" class="btn btn-space btn-primary">
                                  <?php if($_GET['tabel'] == "I"){
                                      echo "Simpan";
                                    }else{
                                      echo "Selanjutnya";
                                    }?>
                                    </button>
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
          
         