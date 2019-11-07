
<div id="content-wrapper">

<div class="container-fluid">

  <!-- Page Content -->
  <h1>Mahasiswa</h1>
    <hr>
    <p>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Mahasiswa
            <a class="btn btn-primary" href="<?=base_url('home/mahasiswa/?tambah');?>">TAMBAH</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php if($mahasiswa != ""): $no = 1; foreach($mahasiswa as $row): ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row->nama;?></td>
                    <td><?=$row->email;?></td>
                    <td><?=$row->telepon;?></td>
                    <td><?=$row->alamat;?></td>
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
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </p>

</div>
<!-- /.container-fluid -->
