<?php
if(!isset($_SESSION['SID']))
{
    redirect('Siswa/');
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
    <link rel="stylesheet" href="../../dist/css/bootstrap-material-design.min.css ">
    <link rel="stylesheet" href="../../dist/css/icon.css">
    <link rel="stylesheet" href="../../dist/css/style.css">
    <link rel="icon" href="../../assets/parrot.png">

    <!-- Material Design for Bootstrap CSS
    <link rel="stylesheet" href="dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">-->

    <title>Welcome in PinterIn :) </title>
  </head>
  <body>

        <div class="bmd-layout-container bmd-drawer-f-l">
                <header class="bmd-layout-header">
                  <div class="navbar navbar-light bg-info fixed">

                    <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
                      <span class="sr-only">Toggle drawer</span>
                      <i class="material-icons" style="color:white">menu</i>
                    </button>

                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url("index.php/Siswa/home")?>" style="color:white">User Dashboard</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                    <a href="<?php echo base_url("index.php/Siswa/keluar")?>"> <button type="button" class="btn bg-warning" style="color:white;">LOG OUT</button></a>
                    </ul>

                  </div>
                </header>

                <div id="dw-s1" class="bmd-layout-drawer bg-faded">
                  <header class="text-center" style="margin:auto;">
                    <img src="../../assets/logo.png" alt="" style="width:120px">
                  </header>
                  <ul class="list-group text-center" style="margin:auto;">
                        <div class="profile-user" style="padding-bottom:10px;">
                            <img src="../../uploads/foto/<?php echo $_SESSION['foto'];?>" alt="" class="border-lg rounded-circle" style="height:100px;width:100px;">
                            <p style="padding-top:5px;"><a href="../Siswa/setting/<?php echo $_SESSION['SID'] ?>" ><strong><?php echo $_SESSION['nama'];?></strong></p><p><i class="material-icons">settings_applications</i></a></p>
                        </div>

                        <div class="list-group">
                        <a href="<?php echo base_url("index.php/Siswa/home")?>" ><button type="button" class="list-group-item list-group-item-action"><i class="material-icons">home</i> Home</button></a>
                        <a href="<?php echo base_url("index.php/Siswa/list_artikel")?>"><button type="button" class="list-group-item list-group-item-action"><i class="material-icons">timeline</i>Public Artikel</button></a>
                        <a href="<?php echo base_url("index.php/Siswa/chat/")?>"><button type="button" class="list-group-item list-group-item-action"><i class="material-icons">chat</i>Chat</button></a>

                        </div>

                  </ul>
                </div>

                <main class="bmd-layout-content">
                  <div class="container" style="min-height:640px">
                    <div class="row">
                      <div class="col-md-8">
                      </div>
                      <div class="col-md-4">
                      <div class="alert alert-success" role="alert">
                         Selamat datang, <strong><?php echo $_SESSION['nama'];?></strong>
                      </div>
                      </div>
                    </div>
                    <!-- include php disini -->
