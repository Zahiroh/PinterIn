<?php include 'pembukadosenv2.php';

//print_r($_SESSION);
?>
<div class="card">
    <div class="col-md-12">
    <h5 class="card-header">My Courses</h5>
        <div class="card-body">
        <div class="row" style="padding:10px">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-info mb-3">
                    <div class="card-body" style="margin:auto;">
                            <a href="course/database" ><img src="../../assets/course11.png" alt="" style="width:100px;height:100px;padding-top:5px;">
							</a>
						</div>
                        <div class="judulCourse text-center">
                            <h5>DATABASE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-success mb-3">
                    <div class="card-body" style="margin:auto;">
                            <a href="course/android" ><img src="../../assets/course21.png" alt="" style="width:100px;height:100px;padding-top:5px;">
							</a>
						</div>
                       <div class="judulCourse text-center">
                            <h5>ANDROID</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-primary" class="text-center" >
                        <div class="card-body" style="margin:auto;">
                            <a href="course/website" ><img href="course"  src="../../assets/course31.png" alt="" style="width:100px;height:100px;padding-top:5px;">
							</a>
						</div>
                        <div class="judulCourse text-center">
                            <h5>WEBSITE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-warning mb-3">
                    <div class="card-body" style="margin:auto;">
                            <a href="course/rpl" ><img src="../../assets/course41.png" alt="" style="width:100px;height:100px;padding-top:5px;">
							</a>
						</div>
                        <div class="judulCourse text-center">
                            <h5>RPL</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
    </div>
</div>
<br>

<div class="col-md-12 row">
    <div class="col-md-7">
        <div class="collaps">
        <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="row">
                    <img src="../../assets/publicarticle.png" alt="" style="width:50px;height:30px;padding-right:10px;">
                    <p style="padding-top:5px;">Tambah Public Article</p>
                </div>
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <form action="simpan_artikel" method="get">

            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Artikel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isi judul Artikel Disini" name="judul">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Artikel </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="isi"></textarea>
            </div>
            <div class="text-center">

                    <button type="submit" class="btn btn-info btn-raised">Submit</button>
            </div>

            </form>
            </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="row">
                    <img src="../../assets/bullhorn.png" alt="" style="width:50px;height:30px;padding-right:10px;">
                    <p style="padding-top:5px;">Tambah Event</p>
                </div>
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            <form action="simpan_event" method="post"  enctype="multipart/form-data">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Event</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isi Judul Event disini" name="EVENT_NEWS">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tanggal Event </label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="12 Desember 2020" name="TANGGAL_KALENDER">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Poster/Leaflet/Gambar Pendukung</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="FOTO_NEWS">
                </div>

                <div class="text-center">
                        <button type="submit" class="btn btn-info btn-raised">Submit</button>
                </div>

                </form>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>

    <div class="col-md-5">
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

<?php include 'penutupdosenv2.php' ?>
