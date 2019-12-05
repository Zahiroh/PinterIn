<?php
if(!isset($_SESSION['SID']))
{
    redirect('Admin/');
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-material-design.min.css">

    <link rel="stylesheet" href="../../dist/css/icon.css">
    <link rel="stylesheet" href="../../dist/css/style.css">
    <link rel="icon" href="../../assets/parrot.png">

    <!-- Material Design for Bootstrap CSS
    <link rel="stylesheet" href="dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">-->

    <title>Welcome in PinterIn :)</title>
  </head>
  <body>

        <div class="bmd-layout-container bmd-drawer-f-l">
                <header class="bmd-layout-header">
                  <div class="navbar navbar-light bg-faded">

                    <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
                      <span class="sr-only">Toggle drawer</span>
                      <i class="material-icons">menu</i>
                    </button>

                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url('index.php/Admin/home');?>">Admin Server</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <a href="<?php echo base_url('index.php/Admin/keluar');?>"> <button type="button" class="btn bg-secondary" style="color:white;">LOG OUT</button></a>
                    </ul>

                  </div>
                </header>

                <div id="dw-s1" class="bmd-layout-drawer bg-faded">
                  <header>
                    <a class="navbar-brand text-center">Pinter.In</a>
                  </header>
                  <ul class="list-group text-center" style="margin:auto;">
                        <a href="<?php echo base_url('index.php/Admin/adminDashboard');?>">
                            <img src="../../assets/dashboard.png" alt="..." style="height:90px;width: 90px;">
                            <p style="color:grey">DASHBOARD</p>
                        </a>
                        <br>
                        <a href="<?php echo base_url('index.php/Admin/list_artikel');?>">
                            <img src="../../assets/course.png" alt="..." style="height:90px;width: 90px;">
                            <p style="color:grey">PUBLIC ARTIKEL</p>
                        </a>
                        <br>
                        <a href="<?php echo base_url('index.php/Admin/tampil_event');?>">
                            <img src="../../assets/grades.png" alt="..." style="height:90px;width: 90px;">
                            <p style="color:grey">LATES NEWS</p>
                        </a>
                        <br>
                        <a href="<?php echo base_url('index.php/Admin/tampil_siswa');?>">
                            <img src="../../assets/user.png" alt="..." style="height:90px;width: 90px;">
                            <p style="color:grey">STUDENT</p>
                        </a>
                        <br>
                        <a href="<?php echo base_url('index.php/Admin/tampil_dosen');?>">
                            <img src="../../assets/lecture.png" alt="..." style="height:90px;width: 90px;">
                            <p style="color:grey">TEACHER</p>
                        </a>
                  </ul>
                </div>

                <main class="bmd-layout-content">
                  <div class="container" style="min-height:640px">
                    <div class="row">
                      <div class="col-md-8">
                      </div>
                      <div class="col-md-4">
                      <div class="alert alert-success" role="alert">
                         Selamat datang <strong>Admin</strong>
                      </div>
                      </div>
                    </div>
