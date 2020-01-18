

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">

              <?= $this->session->flashdata('pesan'); ?>
              <div class="auth-form-light text-left p-5">
             
                <div class="brand-logo">
                  <img src="<?=base_url()?>assets/images/logo.svg">
                </div>
                <h4>Pengguna Baru?</h4>
                <h6 class="font-weight-light">Mendaftar cukup mudah, Isi form dibawah ini ya</h6>
                <form class="pt-3" action="<?= base_url()?>index.php/User_event/user_register" method="POST">
               
                  <div class="form-group">
                  <div class="form-group">
                    <input required type="text" class="form-control form-control-lg" name="nama" id="nama" placeholder="Nama">
                  </div>
                    <input required type="text" class="form-control form-control-lg" name="username" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input required type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input required type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input required type="password" class="form-control form-control-lg" name="password-confirm" id="exampleInputPassword1" placeholder="Ulang Password">
                  </div>
                  <div class="mt-3">
                    <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="simpan" type="submit" value="MENDAFTAR">
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Sudah punya akun? <a href="<?= base_url()?>index.php/User_view/login" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   