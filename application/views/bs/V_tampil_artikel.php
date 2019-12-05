<?php include 'bs/pembukaadmin.php'; ?>
	<center><h1>Data Artikel</h1></center>
	<br>
	<center><a href="tambah_siswa"><button type="button" class="btn bg-info" style="color:white;">TAMBAH SISWA</button></a></center>

	<div class="tabelSiswa">
		<table class="table table-bordered">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Penulis</th>
			<th>JUDUL</th>
			<th>CAPTION</th>
			<th>TANGGAL UPLOAD</th>
		
		</tr>
		<?php 
		foreach($public_artikel as $u){ 
		?>
        <tbody>
		<tr>
			<td width="1%"><?php echo $u->PUBLIC_ID; ?></td>
			<td width="4%"><?php echo $u->PENULIS; ?></td>
			<td width="3%"><?php echo $u->JUDUL; ?></td>
			<td width="3%"><?php echo $u->CAPTION; ?></td>
			<td width="1%"><?php echo $u->TANGGAL_UP2; ?></td>
			<td>
				<?php  echo anchor('/Admin/tampil_artikel/'.$u->PUBLIC_ID,'tampil'); ?></td>
			<td>
			<?php echo anchor('/Admin/hapus_artikel/'.$u->PUBLIC_ID,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
        </tbody>
	</table>
    <?php include 'bs/penutup.php'; ?>