
<div id="content-wrapper">

<div class="container-fluid">

  <!-- Page Content -->
  <h1>Peserta</h1>
    <hr>
    <p>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Peserta
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php if($peserta != ""): $no = 1; foreach($peserta as $row): ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row->id_user;?></td>
                    <td><?=$row->id_kelas;?></td>
                    <td>
                        <a class="btn btn-warning" href="<?=base_url('home/mahasiswa?edit='. $row->id_user);?>">Ubah</a>
                        <a class="btn btn-danger" href="<?=base_url('home/mahasiswa?delete='. $row->id_user);?>" onclick="return Tanya()">Hapus</a>
                    </td>
                  </tr>
                    <?php endforeach; endif;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </p>

</div>
<!-- /.container-fluid -->
