<?php include 'pembukauserv2.php' ?>
<br>
<div class="col-md-12">
    <div class="text-center">
        <h2>Selamat Anda Telah Menyelesaikan Kuis !</h2>
        <br>
        <img src="../../../assets/studying.png" alt="" style="width:200px;">
        <br>
        <br>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="alert alert-warning" role="alert">
           <h7>Skor kuis anda adalah <strong><?php echo $_SESSION['nilaiquiz']*10 ?>/100</strong></h7>
        </div>
        </div>
        </div>
    </div>
</div>
<br>
<div class="text-center col-md-12"></div>
    <a href="<?php echo base_url();?>index.php/Sertifikat/" data-toggle="tooltip" data-placement="right" title="Cetak Sertifikat"><img src="../../../assets/file.png" alt="" style="width:50px;"><button class="btn bg-secondary" style="color:white">Cetak Sertifikat</button></a>
</div>
<?php 'penutupuserv3.php' ?>