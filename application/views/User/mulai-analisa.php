     
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
                    <script type="text/javascript">
                      var no= [false, false, false,false, false, false, false, false, false, false, false, false];

                     // console.log(no);
                    </script>
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
                            <input id="i<?= $no;?>"   onkeyup="change(this.value,<?= $no-1;?>);cekVal();" type="number" name="val[]" data-parsley-trigger="change" required placeholder="max : 12" autocomplete="off" class="form-control">
                            <p style="color:red;margin-left=12px;" id="e<?= $no-1;?>">maksimal angka 12 dan minimal 1</p>
                           </div>
                        </div>
                        <script type="text/javascript">
                          var error = document.getElementById('e<?= $no;?>').style.display = 'none';

                          function change(e,no){
                            var error = document.getElementById('e'+no);
                            n = no;
                        
                            if(e > 12){
                             error.style.display = 'block';
                             no[n] = false;
                            }else if(e < 1){
                              error.style.display = 'block';
                              no[n] = false;
                            }else{
                              error.style.display = 'none';
                              no[n] = true;
                            }
                            console.log("no"+n)
                            
                          }
                         
                        </script>
                        <?php
                          $no++;
                        }?>
                        
                        <div class="row">      
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                  <button id="btnsimpan" type="submit" class="btn btn-space btn-primary">
                                  <?php if($_GET['tabel'] == "I"){
                                      echo "Simpan";
                                    }else{
                                      echo "Selanjutnya";
                                    }?>
                                    </button>
                                </p>
                                  <script type="text/javascript">
                                    var dok = document.getElementById('btnsimpan').disabled = true;

                                  function cekVal(){
                                   
                                    // if(no1 == true && 
                                    // no2 == true && 
                                    // no3 == true && 
                                    // no4 == true && 
                                    // no5 == true && 
                                    // no6 == true && 
                                    // no7 == true &&
                                    // no8 == true &&
                                    // no9 == true &&
                                    // no10 == true &&
                                    // no11 == true &&
                                    // no12 == true ){

                                    //   console.log("true");
                                    //   document.getElementById('btnsimpan').disabled = false;
                                    // }
                                    console.log(no[1]);
                                  }
                                  </script>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 grid-margin"></div>
            </div>
            </div>
          
         