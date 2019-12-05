	<center><h1>List Artikel</h1></center>
	<br>
	<div class="tabelSiswa">
		<table class="table table-bordered">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Penulis</th>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Tanggal Upload</th>
			<th>Hapus</th>
		</tr>
		<?php 
		foreach($list as $u){ 
		?>
        <tbody>
		<tr>
			<td width="1%"><?php echo $u->PUBLIC_ID; ?></td>
			<td width="15%"><?php echo $u->PENULIS; ?></td>
			<td width="10%"><?php echo $u->JUDUL; ?></td>
			<td width="50%"><?php echo $u->CAPTION; ?></td>
			<td width="10%"><?php echo $u->TANGGAL_UP2; ?></td>
			<td>
			<a href="hapus_artikel/<?php echo "$u->PUBLIC_ID"; ?>"><button type="button" class="btn bg-secondary" style="color:white"><i class="material-icons">delete</i></button></a>	
			</td>
		</tr>
		<?php } ?>
        </tbody>
	</table>
    <?php include 'penutup.php'; ?>