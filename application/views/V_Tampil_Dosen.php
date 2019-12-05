<?php include 'bs/pembukaadmin.php'; ?>
	<center><h1>Data Pengajar</h1></center>
	<br>
	<center><a href="tambah_dosen"><button type="button" class="btn bg-info" style="color:white;">TAMBAH PENGAJAR</button></a></center>

	<div class="tabelDosen">
		<table class="table table-bordered">
		<thead class="thead-dark text-center">
			<tr>
				<th>ID</th>
				<th>Nama Lengkap</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Edit</th>
				<th>Hapus</th>
			</tr>
		</thead>
		<?php
		foreach($dosen as $d){
		?>
		<tbody>
			<tr>
				<td width="1%"><?php echo $d->DOSEN_ID; ?></td>
				<td width="2%"><?php echo $d->NAMA_DOSEN; ?></td>
				<td width="2%"><?php echo $d->ALAMAT_DOSEN; ?></td>
				<td width="2%"><?php echo $d->EMAIL_DOSEN; ?></td>
				<td width="1%"><?php echo $d->USERNAME_DOSEN; ?></td>
				<td width="2%"><?php echo $d->PASSWORD_DOSEN; ?></td>
				<td class="text-center">
					<a href="edit_dosen/<?php echo "$d->DOSEN_ID"; ?>"><button type="button" class="btn bg-warning" style="color:white"><i class="material-icons">edit</i></button></a>
				</td>
				<td class="text-center">
				<a href="hapus_dosen/<?php echo "$d->DOSEN_ID"; ?>"><button type="button" class="btn bg-secondary" style="color:white"><i class="material-icons">delete</i></button></a>
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
