<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="robots" content="noindex" />
  <title>Dashboard</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
<!-- IonIcons -->
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>dist/css/custom.css">  
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.css">


</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
         </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <!--<img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-32 mr-3 img-circle">--><i class="fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> <b class="text-primary"><?php echo $user['email'];?></b></a>
          
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url('Dashboard/logout');?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Log out</a>  
        </div>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->
