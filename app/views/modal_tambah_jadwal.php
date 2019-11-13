
  <div class="modal fade" id="show-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Jadwal</h4>
      </div>
      
      <div class="modal-body">
            <?=form_open_multipart(base_url('home/tambahJadwal'));?>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" class="form-control" name="tanggal" value="<?=date("Y-m-d");?>" placeholder="">
                </div>

    
                <div class="form-group">
                    <label>Tipe Kelas</label>
                    <select class="form-control" name="tipe_kelas" id="">
                    <option value=""> - Pilih Tipe Kelas - </option>
                    <option>LDEC</option>
                    <option>TOEFL</option>
                    </select>
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