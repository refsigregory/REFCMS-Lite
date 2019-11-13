
  <div class="modal fade" id="show-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Kelas</h4>
      </div>
      
      <div class="modal-body">
            <?=form_open_multipart(base_url('home/tambahKelas'));?>

    
                <div class="form-group">
                    <label>Jadwal Kelas</label>
                    <select class="form-control" name="id_jadwal" id="">
                    <option value=""> - Pilih Jadwal - </option>
                    <?php if($jadwal != ""): foreach($jadwal as $row):?>
                    <option value="<?=$row->id_jadwal;?>"><?=$row->tipe_kelas . " " . $row->tanggal;?></option>
                    <?php endforeach; endif;?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" class="form-control" name="nama_kelas" placeholder="">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
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