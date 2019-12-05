<div class="row" style="padding-top:10px">
    <div class="col-md-7">
        <div class="card">
        <div class="card-header row">
            <div class="col-md-6">
                <a href="" style="color:black;"></a>
            </div>
            <div class="col-md-6">
                <div class="text-right">
                    <a href="siswa_buat_artikel"> <button type="button" class="btn bg-info"  data-toggle="modal" data-target=".bd-example-modal-lg" style="color:white;"> <strong>+ </strong>Public Article</button></a>

                </div>

            </div>
        </div>
        <div class="card-body" style="height:400px;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <h5 class="card-title">Belajarlah Selagi Dini</h5>
                    <img class="d-block w-100" src="../../assets/carousel1.3.1.jpg" alt="First slide" style="width:427px;">
                    </div>
                    <div class="carousel-item">
                    <h5 class="card-title">Carilah Ilmu Dimanapun dan Kapanpun</h5>
                    <img class="d-block w-100" src="../../assets/carousel1.2.1.jpg" alt="Second slide" style="width:427px;">
                    </div>
                    <div class="carousel-item">
                    <h5 class="card-title">Seberapa Sering Kamu Belajar ? </h5>
                    <img class="d-block w-100" src="../../assets/carousel1.4.jpg" alt="Third slide" style="width:427px;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
        </div>
        </div>
        <br>
        <br>
        <div class="vote">
            <div class="card">
                <div class="card-header">
                    Yuk bantu polling !
                </div>
                <div class="card-body">
                    <div>
                    <div class="text-center">
                        <div class="card-title"><center><h6>Poling Hari Ini</h6></center></div>
                        <hr style="width:150px;">
                        <?php include 'vote.php' ?>
                    </div>
                    </div>
                    <div class="text-right">
                        <img src="../../assets/polling.png" alt="" style="width:52px;height:46px;padding-left:10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-5">
        <br>
        <div class="card">
            <div class="card-header">
               <a href="" style="color:black;"> Best Student</a>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $i=1;
                  $k=0;
                  for($j=0;$j<3;$j++) { ?>
                    <tr>
                    <th scope="row"><?php echo $i; //print_r($list)?></th>
                    <td><?php echo $list[$j]->NAMA_PROFILE; ?></td>
                    <td><?php echo $list[$j]->POIN_SISWA;?></td>
                    </tr>
                  <?php $i++;
                }?>
                </tbody>
                </table>
                <?php
                $i=1;
                foreach ($list as $key) {
                  //echo $key->NAMA_PROFILE;
                  if($key->NAMA_PROFILE==$_SESSION['nama'])
                    break;
                  $i++;
                }
                 ?>
                <div class="alert alert-success" role="alert">
                    Rangkingmu saat ini adalah <strong><?php echo $i;?></strong> .
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php include 'userLatestNews.php' ?>

    </div>
</div>
<?php include 'penutupuser.php' ?>
