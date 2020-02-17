
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
                    <label for="JKs">Kelas</label>
                    <select class="form-control" name="kelas">
                        <option value="X IPA 1" selected>X IPA 1</option>
                        <option value="X IPA 2">X IPA 2</option>
                        <option value="X IPA 3">X IPA 3</option>
                        <option value="X IPA 4">X IPA 4</option>
                        <option value="X IPA 5">X IPA 5</option>
                        <option value="X IPA 6">X IPA 6</option>
                        <option value="X IPS 1">X IP1 5</option>
                        <option value="X IPS 2">X IPS 2</option>
                        <option value="X IPS 3">X IPS 3</option>
                        <option value="X IPS 4">X IPS 4</option>
                        <option value="X IPS 5">X IPS 5</option>
                        <option value="XI IPA 1">XI IPA 1</option>
                        <option value="XI IPA 2">XI IPA 2</option>
                        <option value="XI IPA 3">XI IPA 3</option>
                        <option value="XI IPA 4">XI IPA 4</option>
                        <option value="XI IPA 5">XI IPA 5</option>
                        <option value="XI IPA 6">XI IPA 6</option>
                        <option value="XI IPS 1">XI IPS 1</option>
                        <option value="XI IPS 2">XI IPS 2</option>
                        <option value="XI IPS 3">XI IPS 3</option>
                        <option value="XI IPS 4">XI IPS 4</option>
                        <option value="XI IPS 5">XI IPS 5</option>
                        <option value="XII IPA 1">XII IPA 1</option>
                        <option value="XII IPA 2">XII IPA 2</option>
                        <option value="XII IPA 3">XII IPA 3</option>
                        <option value="XII IPA 4">XII IPA 4</option>
                        <option value="XII IPA 5">XII IPA 5</option>
                        <option value="XII IPA 6">XII IPA 6</option>
                        <option value="XII IPS 1">XII IPS 1</option>
                        <option value="XII IPS 2">XII IPS 2</option>
                        <option value="XII IPS 3">XII IPS 3</option>
                        <option value="XII IPS 4">XII IPS 4</option>
                        <option value="XII IPS 5">XII IPS 5</option>
                    </select>
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
   