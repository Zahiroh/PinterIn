<?php include 'pembukaadmin.php'; ?>
    <div class="row" style="padding:10px;padding-top:15px;">
                <div class="col-lg-12">
                    <h1 class="card-subtitle mb-2 text-muted">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
    </div>

            <!-- /.row -->
            <div class="row" style="padding:10px">
                <div class="col-lg-1.5 col-md-3">

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-3">
                                    <img src="../../assets/lecturer.png" alt="" style="width:100px;height:100px;padding:5px;">
                                </div>
                                <div class="col-md-9 text-right">
                                    <h3><?php echo $dosen; ?></h3>
                                    <div>Jumlah Tentor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-3">
                                    <img src="../../assets/user.png" alt="" style="width:100px;height:100px;padding:5px;">
                                </div>
                                <div class="col-md-9 text-right">
                                    <h3><?php echo $siswa; ?></h3>
                                    <div>Jumlah Siswa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-3">
                                    <img src="../../assets/lecturer.png" alt="" style="width:100px;height:100px;padding:5px;">
                                </div>
                                <div class="col-md-9 text-right">
                                    <h3><?php echo $course; ?></h3>
                                    <div>Jumlah Course</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
            <br>
            <a href="tampil_chart"><button type="button" class="btn-lg bg-secondary" name="button" style="color:white;">ANALITIK DATA</button></a>
            <br>
            <br>
            <br>
            <hr>
<?php include 'penutup.php'; ?>
