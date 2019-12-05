<?php include 'pembukauserv2.php'?>

<br>
<h1>Let's Chat with Your Friends ! </h1>
<hr>
<br>
<div class="row">
<div class="col-md-8">
	<table class="table ">
		<thead class="thead-dark text-center">
			<tr>
			<th></th>
			<th>Pesan Masuk</th>
      		<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
		foreach($chat as $d){
		?>
		<tr>
			<td width="1%"><img style="width:100px;height:100px;" src="../../../uploads/foto/<?php echo $d->NAMA_FOTO; ?>" class="rounded-circle" alt="lol"></td>
			<td>
				<div class="isi">
					<strong><h3><?php echo $d->NAMA_PROFILE; ?></h3></strong>
					<h6><?php echo $d->EMAIL; ?></h6>
					<small>12 Desember 2018 | 15:19 P.M</small>
				</div>
			</td>
			<td> <a href="../load_chat/<?php echo "$d->NAMA_PROFILE"; ?>"><img src="../../../assets/comment.png" alt="" style="width:40px;height:40px;"></a>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<br>
<div class="col-md-4">
	<img src="../../../assets/chat.png" alt="" style="width:300px;padding-left:5px;">
</div>


</div>



<?php include 'penutupuserv2.php'?>
