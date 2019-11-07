<?php if(!isset($showNavbar)): $showNavbar = true; endif;?>
<?php if($showNavbar):?>
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('home/mahasiswa');?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Daftar Mahasiswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('home/jadwal');?>">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Jadwal</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('home/kelas');?>">
          <i class="fas fa-fw fa-file"></i>
          <span>Kelas</span></a>
      </li>
    </ul>
<?php endif;?>
