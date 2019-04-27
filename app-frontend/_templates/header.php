<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url();?>app-assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url();?>app-assets/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url();?>app-assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?=base_url();?>app-assets/css/styles.css">
  <link rel="stylesheet" href="<?=base_url();?>app-assets/css/font-awesome.min.css">
  <script src="<?=base_url();?>app-assets/js/jquery.min.js"></script>
  <script src="<?=base_url();?>app-assets/js/bootstrap.js"></script>
  <script src="<?=base_url();?>app-assets/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url();?>app-assets/js/dataTables.bootstrap.min.js"></script>
</head>
<body>

<?php
if(!isset($showNavbar)){
    $showNavbar = true;
}

if($showNavbar || $this->session->userdata('logged_in')) {
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?=site_url();?>home"><?=$this->config->item("site_name");?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php if ($this->session->userdata('logged_in')): ?>
        <li class=""><a><span class="glyphicon glyphicon-user"></span> <?=$user->username;?></a></li>
        <li><a href="<?=site_url('auth\logout');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <?php else: ?>
        <li><a href="<?=site_url('auth\login');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php endif;?>
      </ul>
    </div>
  </div>
</nav>
<?php
}
?>
  
<div class="container-fluid">
<?php
if (!isset($loginPage)) {
  $loginPage = false;
}
if($loginPage  || !$this->session->userdata('logged_in')){
?>
  <div class="row login-content content">
<?php
} else {
?>
  <div class="row page-content content">
<?php
} 
?>  
