<?php include 'pembukauserv2.php'?> 
<a href="../chat/"><button type="button" class="btn btn-raised btn-primary">Kembali</button></a>
<br>
<br>
<br>
    
    <table class="table">
        <thead class="thead-dark text-center">
			<tr><th>PESAN</th></tr>
        </thead>
        <tbody style="height: 120px;overflow-y: auto;">
        <?php
		foreach($chat as $d){
            if($d->PENGIRIM==$_SESSION['nama']){?>
                <tr>
                <td><div class="alert alert-secondary text-right" role="alert" style="margin:auto; width:auto;">h<?php echo $d->PESAN; ?><br><small><i><?php echo "On ".$d->WAKTU; ?></i></small></div></td>
                </tr>
            <?php } else { ?>
                <tr>
                <td><div class="alert alert-info text-left" role="alert" style="margin:auto; width:auto;"><?php echo $d->PESAN; ?><br><small><i><?php echo "On ".$d->WAKTU; ?></i></small></div></td>
                </tr>

            <?php } ?>
        <?php } ?>
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="../kirim_chat" method="post">
            <textarea class="form-control" type="text" name="PESAN" placeholder="Inputkan pesanmu disini"></textarea><br>
            <input type="hidden" name="PENERIMA" value="<?php echo $this->uri->segment(3)?>"> <br>
    
            <input type="submit" class="btn bg-info btn-md"  style="color:white" value="KIRIM"/>
    </form>
            </div>
    </div>
    
    
<?php include 'penutupuserv2.php' ?>
