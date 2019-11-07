<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">PENDAFTARAN MAHASISWA</div>
      <div class="card-body">
        <form action="<?=base_url('auth/newRegister')?>" method="post">
        <div class="form-group">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <input type="password" name="username" class="form-control" placeholder="Nama Pengguna" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <input name="password" class="form-control" placeholder="Kata Sandi" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <input name="nama" class="form-control" placeholder="Nama Lengkap" required="required">
            </div>
          </div>
         <div class="form-group">
            <div class="form-group">
            <select class="form-control" name="jenis_kelamin" id="">
                    <option value=""> - Pilih Jenis Kelamin - </option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <input name="nim" class="form-control" placeholder="NIM" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <input name="telepon" class="form-control" placeholder="Telepon" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <input name="alamat" class="form-control" placeholder="Alamat" required="required">
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Mendaftar</button>
          <a href="<?=base_url('auth/login');?>">Sudah Punya Akun</a>
        </form>
        <div class="text-center">
        </div>
      </div>
    </div>
  </div>