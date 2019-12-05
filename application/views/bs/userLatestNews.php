<div class="LatestNews">
            <div class="card">
                <div class="card-header">
                    Latest News
                </div>
                <marquee direction="up" scrollamount="8">
                    <div class="card-body text-center" style="height:300px;">
                        <div class="judul">
                            <h3><?php echo $news['EVENT_NEWS'];?></h3>
                            <h7><?php echo $news['TANGGAL_KALENDER'];?></h7>
                            <p>--------------------------------</p>
                            <img src="../../uploads/event/<?php echo  $news['NAMA_FOTO_NEWS'];?>" alt="" style="width:350px;" class="img-thumbnail">
                            <p>--------------------------------</p>
                        </div>
                    </div>
                </marquee>
                <div class="card-footer">
                  Check Out Latest new here
                </div>
            </div>
</div>
