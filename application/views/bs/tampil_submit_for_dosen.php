<?php include 'pembukadosen.php';

//print_r($_SESSION);
?>
<center><h1>Data Submit Siswa</h1></center>
<hr>
	<table class="table">
		<thead class="thead-dark text-center">
			<tr>
				<th>Nama Siswa</th>
				<th>Tanggal Upload</th>
				<th>Download File Submit</th>
				<th>Tambah Poin</th>
			</tr>
		</thead>
		<?php
		foreach($submit as $d){
		?>
		<tbody>
		<tr>
			<td ><?php echo $d->NAMA_SISWA; ?></td>
			<td ><?php echo $d->TANGGAL_RELEASE; ?></td>
			<td >
				<div class="text-center"><a href="../download_submit/<?php echo $d->NAMA_FILE_SUBMIT;?>"><button class="btn bg-warning"><i class="material-icons" style="color:white;">move_to_inbox</i></button></a></div>
			</td>
			<td >
				<?php if($d->STATUS==0){?>
				<div class="text-center"><a href="../input_poin_siswa/<?php echo $d->SISWA_ID;?>/<?php echo $d->NAMA_SISWA;?>/<?php echo $d->COURSE_ID;?>"><button class="btn bg-success"><i class="material-icons" style="color:white;">add_box</i></button></a></div>
			<?php }else{?>
				<div class="text-center">SUDAH Di NILAI</div>
			<?php }?>
			</td>
		</tr>
		</tbody>
		<?php } ?>
	</table>
	<a href="../back2"><button type="button" class="btn bg-info"  style="color:white;"> KEMBALI</button></a>
		<!-- <?php //echo anchor('Dosen/back','BACK'); ?> -->

<?php include 'penutupdosen.php'?>
