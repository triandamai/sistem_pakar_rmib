<div class="splash-container">
<?= $this->session->flashdata('pesan'); ?>
        <div class="card ">
            <div class="card-header text-center"><a><img class="logo-img" src="<?= base_url()?>assets/assets/images/logo.png" alt="logo"></a><span class="splash-description">Masuk dengan akun admin.</span></div>
            <div class="card-body">
                <form action="<?= base_url()?>index.php/Admin_event/login" method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                    </div>
                    <input type="hidden" value="kirim" name="kirirm" >
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <!-- <a href="<?= base_url()?>index.php/User_view/daftar" class="footer-link">Buat Akun</a> -->
                </div>
            </div>
        </div>
    </div>
  