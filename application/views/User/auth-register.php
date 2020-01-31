
   <form class="splash-container" action="<?= base_url()?>index.php/User_event/user_register" method="POST">
   <?= $this->session->flashdata('pesan'); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Formulir Pendaftaran</h3>
                <p>Silahkan isi formulir dibawah untuk mendaftar.</p>
            </div>
            <div class="card-body">
            <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Nama" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" name="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" type="password" name="password-confirm"placeholder="Ulang Password">
                </div>
                <div class="form-group">
                                            <label for="JKs">Jenis Kelamin</label>
                                            <select class="form-control" name="jk">
                                              <option value="L" selected>LAKI-LAKI</option>
                                              <option value="P">PEREMPUAN</option>
                                            </select>
                                        </div>
                <div class="form-group pt-2">
                    <input class="btn btn-block btn-primary" type="submit" name="simpan" type="submit" value="MENDAFTAR">
                  
                  </div>
                </div>

            </div>
            <div class="card-footer bg-white">
                <p>Sudah Punya Akun? <a href="<?= base_url()?>index.php/User_view/login" class="text-secondary">Masuk Disini.</a></p>
            </div>
        </div>
    </form>
   