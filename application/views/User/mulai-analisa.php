          <?php die(json_encode($sub_indikator));?>
          <div class="container-fluid  dashboard-content">
            <div class="row">
              <div class="col-md-3 grid-margin"></div>
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Isi Data Diri </h5>
                    <div class="card-body">
                      <form action="<?= base_url()?>index.php/User_event/simpan_analisa"  method="POST" id="basicform" data-parsley-validate="">
                        <?php $no=1; 
                        foreach($sub_indikator as $si){
                        ?>
                        <div class="form-group row">
                           <label for="inputUserName" class="col-3 col-lg-2 col-form-label text-right"><?= $si->nama;?></label>
                           <div class="col-9 col-lg-10">
                           <input id="inputUserName" type="hidden" name="id_sub[]" value="<?= $si->id;?>">
                            <input id="inputUserName" type="text" name="val[]" data-parsley-trigger="change" required placeholder="Jono" autocomplete="off" class="form-control">
                           </div>
                        </div>
                        <?php
                          $no++;
                        }?>
                        
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
          
         