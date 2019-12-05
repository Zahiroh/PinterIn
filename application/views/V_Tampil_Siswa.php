<?php include 'bs/pembukaadmin.php'; ?>
	<center><h1>Data Siswa</h1></center>
	<br>
	<center><a href="tambah_siswa"><button type="button" class="btn bg-info" style="color:white;">TAMBAH SISWA</button></a></center>

	<div class="tabelSiswa">
		<table class="table table-bordered">
		<thead class="thead-dark text-center" >
		<tr>
			<th>ID</th>
			<th>Nama Lengkap</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Poin</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
		<?php
		foreach($siswa as $u){
		?>
        <tbody>
		<tr>
			<td width="1%"><?php echo $u->SISWA_ID; ?></td>
			<td width="4%"><?php echo $u->NAMA_PROFILE; ?></td>
			<td width="3%"><?php echo $u->ALAMAT_PROFILE; ?></td>
			<td width="3%"><?php echo $u->EMAIL; ?></td>
			<td width="1%"><?php echo $u->USERNAME_SISWA; ?></td>
			<td width="2%"><?php echo $u->PASSWORD_SISWA; ?></td>
			<td width="2%"><?php echo $u->POIN_SISWA; ?></td>
			<td class="text-center">
					<a href="edit_siswa/<?php echo "$u->SISWA_ID"; ?>"><button type="button" class="btn bg-warning" style="color:white"><i class="material-icons">edit</i></button></a>
				</td>
				<td class="text-center">
				<a href="hapus_siswa/<?php echo "$u->SISWA_ID"; ?>"><button type="button" class="btn bg-secondary" style="color:white"><i class="material-icons">delete</i></button></a>
				</td>
		</tr>
		<?php } ?>
        </tbody>
	</table>

	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			<a class="page-link" href="#">Next</a>
			</li>
		</ul>
		</nav>

	</div>
    <?php include 'bs/penutup.php'; ?>
