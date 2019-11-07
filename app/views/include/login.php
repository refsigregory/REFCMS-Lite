<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">PENDAFTARAN LDEC DAN TOEFL</div>
      <div class="card-body">
        <form action="<?=base_url('auth/checkLogin')?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input name="username" class="form-control" placeholder="Nama Pengguna" required="required" autofocus="autofocus">
              <label for="inputEmail">Nama Pengguna</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required="required">
              <label for="inputPassword">Kata Sandi</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Masuk</button>
          <a class="btn btn-success btn-block" href="<?=base_url('auth/register');?>">Buat Akun</a>
        </form>
        <div class="text-center">
        </div>
      </div>
    </div>
  </div>