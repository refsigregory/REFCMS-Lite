    <div class="loginmodal-container">
     <h1>REGISTER</h1><br>
     <form method="POST" action="<?=site_url('auth/newUser');?>">

  <?php
     if (!empty($this->session->flashdata('msg'))):
        $msg = $this->session->flashdata('msg');
  ?>
  <?php if($msg['type'] == 'success'): ?>
     <div class="alert alert-success"><?=$msg['message'];?></div>
  <?php elseif ($msg['type'] == 'warning'): ?>
     <div class="alert alert-warning"><?=$msg['message'];?></div>
  <?php elseif ($msg['type'] == 'error'): ?>
     <div class="alert alert-danger"><?=$msg['message'];?></div>
  <?php else: ?>
     <div class="alert alert-info"><?=$msg['message'];?></div>
  <?php endif; ?>
 <?php endif; ?>

 <?php if (isset($_GET['error'])): ?>
     <div class="alert alert-danger"><?=$_GET['error'];?></div>
  <?php endif;?>
        
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
        <input type="text" name="alamat" placeholder="Alamat">
        <input type="text" name="nomor_telepon" placeholder="Nomor telepon">
        <button type="submit" class="login loginmodal-submit">REGISTER</button>
     </form>
     
      <div class="login-help">
     <a href="login">Back to Login</a>
      </div>
    </div>