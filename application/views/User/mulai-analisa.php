<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tools/1.2.7/jquery.tools.min.js"></script>
     <style type="text/css">
  .tooltip{
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.tooltip::after {
  background-color: red;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
}
     </style>
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
                      <form action="<?= base_url()?>index.php/User_event/simpan_analisa?tabel=<?= $_GET['tabel']; ?>" onsubmit="return cekVal(event);" method="POST" id="basicform" data-parsley-validate="">
                        <?php $no=1; 
                        foreach($sub_indikator as $si){
                        ?>
                        <div class="form-group row">
                           <label for="inputUserName" class="col-9 col-lg-9 col-form-label text-left"><?= $si->nama;?></label>
                           <div class="col-3 col-lg-3">
                            <input type="hidden" name="tabel" value="<?= $_GET['tabel'];?>">
                            <input  type="hidden" name="id_sub[]" value="<?= $si->id;?>">
                            <input id="i<?= $no;?>" pattern="[2-9]|1[0-2]" onkeyup="change(this.value,<?= $no-1;?>);" type="number" name="val[]" data-parsley-trigger="change" required placeholder="max : 12" autocomplete="off" class="form-control">
                            <span class="tooltip" id="e<?= $no;?>">isi minimal 1 dan maksimal 12</span>
                           </div>
                        </div>
        
                        <?php
                          $no++;
                        }?>
                        
                        <div class="row">      
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                  <button id="btnsimpan"  type="submit" class="btn btn-space btn-primary">
                                  <?php if($_GET['tabel'] == "I"){
                                      echo "Simpan";
                                    }else{
                                      echo "Selanjutnya";
                                    }?>
                                    </button>
                                </p>
                                <script type="text/javascript">

                                    var no1 =false,no2= false,no3= false,no4 =false, no5 =false,no6= false,no7 =false,no8= false, no9 = false, no10 =false,no11 = false, no12=false;
                                    var e1 = document.getElementById('e1')
                                    e1.style.display = 'none';
                                    var e2 = document.getElementById('e2')
                                    e2.style.display = 'none';
                                    var e3 = document.getElementById('e3')
                                    e3.style.display = 'none';
                                    var e4 = document.getElementById('e4')
                                    e4.style.display = 'none';
                                    var e5 = document.getElementById('e5')
                                    e5.style.display = 'none';
                                    var e6 = document.getElementById('e6')
                                    e6.style.display = 'none';
                                    var e7 = document.getElementById('e7')
                                    e7.style.display = 'none';
                                    var e8 = document.getElementById('e8')
                                    e8.style.display = 'none';
                                    var e9 = document.getElementById('e9')
                                    e9.style.display = 'none';
                                    var e10 = document.getElementById('e10')
                                    e10.style.display = 'none';
                                    var e11 = document.getElementById('e11')
                                    e11.style.display = 'none';
                                    var e12 = document.getElementById('e12')
                                    e12.style.display = 'none';

                                    
                                    function change(e,no){
                                        if(no == 0){
                                          if(e > 12){
                                           
                                                console.log("inv");
                                              e1.style.display = 'block';
                                              no1 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e1.style.display = 'block';
                                              no1 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e1.style.display = 'none';
                                              no1 = true;
                                          }
                                        }else if(no == 1){
                                          if(e > 12){
                                              e2.style.display = 'block';
                                              no2 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e2.style.display = 'block';
                                              no2 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e2.style.display = 'none';
                                              no2 = true;
                                          }
                                        }else if(no == 2){
                                          if(e > 12){
                                              e3.style.display = 'block';
                                              no3 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e3.style.display = 'block';
                                              no3 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e3.style.display = 'none';
                                              no3 = true;
                                          }
                                        }else if(no == 3){
                                          if(e > 12){
                                              e4.style.display = 'block';
                                              no4 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e4.style.display = 'block';
                                              no4 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e4.style.display = 'none';
                                              no4 = true;
                                          }
                                        }else if(no == 4){
                                          if(e > 12){
                                              e5.style.display = 'block';
                                              no5 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e5.style.display = 'block';
                                              no5 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e5.style.display = 'none';
                                              no5 = true;
                                          }
                                        }else if(no == 5){
                                          if(e > 12){
                                              e6.style.display = 'block';
                                              no6 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e6.style.display = 'block';
                                              no6 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e6.style.display = 'none';
                                              no6 = true;
                                          }
                                        }else if(no == 6){
                                          if(e > 12){
                                              e7.style.display = 'block';
                                              no7 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e7.style.display = 'block';
                                              no7 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e7.style.display = 'none';
                                              no7 = true;
                                          }
                                        }else if(no == 7){
                                          if(e > 12){
                                              e8.style.display = 'block';
                                              no8 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e8.style.display = 'block';
                                              no8 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e8.style.display = 'none';
                                              no8 = true;
                                          }
                                        }else if(no == 8){
                                          if(e > 12){
                                              e9.style.display = 'block';
                                              no9 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e9.style.display = 'block';
                                              no9 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e9.style.display = 'none';
                                              no9 = true;
                                          }
                                        }else if(no == 9){
                                          if(e > 12){
                                              e10.style.display = 'block';
                                              no10 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e10.style.display = 'block';
                                              no10 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e10.style.display = 'none';
                                              no10 = true;
                                          }
                                        }else if(no == 10){
                                          if(e > 12){
                                              e11.style.display = 'block';
                                              no11 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e11.style.display = 'block';
                                              no11 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e11.style.display = 'none';
                                              no11 = true;
                                          }
                                        }else if(no == 11){
                                          if(e > 12){
                                              e12.style.display = 'block';
                                              n12 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else if(e < 1){
                                              e12.style.display = 'block';
                                              no12 = false;
                                              alert('isi dengan angka mulai dari 1 sampai 12!');
                                          }else{
                                              e12.style.display = 'none';
                                              no12 = true;
                                          }
                                        }
                                       // cekVal();
                                    }
                        
                                    var dok = document.getElementById('btnsimpan');
                                  //  dok.disabled = true;

                                  function cekVal(event){
                                   //this.preventDefault();
                                  
                                    if(no1 == true && 
                                    no2 == true && 
                                    no3 == true && 
                                    no4 == true && 
                                    no5 == true && 
                                    no6 == true && 
                                    no7 == true &&
                                    no8 == true &&
                                    no9 == true &&
                                    no10 == true &&
                                    no11 == true &&
                                    no12 == true ){

                                      console.log("true");
                                     // dok.disabled = false;
                                    //  alert("yang bener");
                                      return true;
                                    }else{
                                     // dok.disabled = true;
                                      event.preventDefault();
                                      alert('Masih ada form yang belum sesuai! Silahkan diteliti!');
                                      return false;
                                    }
                                    
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
          
         