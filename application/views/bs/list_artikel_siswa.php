
<div class="row">
  <div class="col-md-1">
    <img src="../../assets/advertising.png" alt="" style="width:80px;">
  </div>
  <div class="col-md-11">
    <h1>Public Artikel</h1>
    <h8><span><blockquote>" Orang boleh pandai setinggi langit, tapi selama ia tak menulis, ia akan hilang di dalam masyarakat dan dari sejarah. "- <strong>Pramoedya Ananta Toer</strong></blockquote></span></h8>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-8">
  <?php foreach ($list as $data) { ?>

  <div class="col-sm-12"><br>
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

  <div class="col-md-4 text-center">
    <img src="../../assets/goal.png" alt="" style="width:300px;">
  </div>
</div>
