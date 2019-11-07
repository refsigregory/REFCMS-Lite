
<div id="content-wrapper">

<div class="container-fluid">

  <!-- Page Content -->
  <h1>Kelas</h1>
    <hr>
    <p>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Daftar Kelas
            <a class="btn btn-primary" href="<?=base_url('home/kelas/?tambah');?>">TAMBAH</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jadwal</th>
                    <th>Nama Kelas</th>
                    <th>Jumlah Peserta</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php if($kelas != ""): $no = 1; foreach($kelas as $row): ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row->id_jadwal;?></td>
                    <td><?=$row->nama_kelas;?></td>
                    <td><?='0';?></td>
                    <td>
                        <a class="btn btn-warning" href="<?=base_url('home/kelas?edit='. $row->id_kelas);?>">Ubah</a>
                        <a class="btn btn-danger" href="<?=base_url('home/kelas?delete='. $row->id_kelas);?>" onclick="return Tanya()">Hapus</a>
                    </td>
                  </tr>
                    <?php endforeach; endif;?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </p>

</div>
<!-- /.container-fluid -->
