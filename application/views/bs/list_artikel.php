<?php include 'pembukadosenv2.php'?>
<div class="row">
<?php foreach ($list as $data) { ?>

  <div class="col-sm-12 col-md-6"><br>
    <div class="card">
    <div class="card-header"><h3><?php echo $data->JUDUL;?></h3>

    </div>
    <div class="card-body">by <?php echo $data->PENULIS;?></div>
    <div class="card-footer">
      <center><a href="load_per_artikel/<?php echo $data->PUBLIC_ID;?>"><button type="button" class="btn bg-info"  style="color:white;"> lihat selengkapnya</button></a>
    </div>
    </div>
  </div>
<?php }?>
</div>
<?php include 'penutupdosenv2.php'?>
