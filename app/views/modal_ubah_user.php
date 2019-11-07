
  <div class="modal fade" id="show-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Data User</h4>
      </div>
      
      <div class="modal-body">
            <?=form_open_multipart(base_url('home/editUser'));?>
                <input type="hidden" name="id_user" value="<?=$edit->id_user;?>">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="" value="<?=$edit->email;?>">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="" value="<?=$edit->username;?>">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="" value="<?=$edit->password;?>">
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="" value="<?=$edit->nama;?>">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="">
                    <option value=""> - Pilih Jenis Kelamin - </option>
                    <option value="Laki-laki" <?=($edit->jenis_kelamin == 'Laki-laki') ? 'selected="selected"' : '';?>>Laki-laki</option>
                    <option value="Perempuan" <?=($edit->jenis_kelamin == 'Perempuan') ? 'selected="selected"' : '';?>>Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="" value="<?=$edit->telepon;?>">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="" value="<?=$edit->alamat;?>">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->