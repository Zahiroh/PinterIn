<?php include 'pembukadosen.php';?>
	<center><h1>Data Course dan Quiz Online</h1></center>
	<br>
	<center><a href="../tambah_course"><button type="button" class="btn btn-success bg-success" style="color:white">ADD DATA COURSE</button></a></center>
	
	<br>

	<table class="table table-bordered">
		<thead class="thead-dark text-center">
			<tr>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Deskrisi</th>
			<th>Nama File</th>
			<th>Tanggal Upload</th>
			<th>Tanggal Deadline Apabila Ada Tugas</th>
			<th>Edit</th>
			<th>Hapus</th>
			<th>Add Quiz</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		foreach($course as $d){ 
		?>
		<tr>
			<td width="1%"><?php echo $d->KATEGORI; ?></td>
			<td width="2%"><?php echo $d->JUDUL; ?></td>
			<td width="2%"><?php echo $d->DESKRIPSI; ?></td>
			<td width="1%"><?php echo $d->NAMA_FILE_COURSE; ?></td>
			<td width="2%"><?php echo $d->TANGGAL_UP1; ?></td>
			<td width="3%"><?php echo $d->TANGGAL_DEADLINE1; ?></td>
			<td width="2%" class="text-center">
					<a href="../edit_course/<?php echo "$d->COURSE_ID"; ?>"><button type="button" class="btn bg-danger" style="color:white"><i class="material-icons">edit</i></button></a>
			</td>
			<td width="2%" class="text-center">
					<a href="../hapus_course/<?php echo "$d->COURSE_ID"; ?>"><button type="button" class="btn bg-secondary" style="color:white"><i class="material-icons">delete</i></button></a>	
			</td>
			<td width="2%" class="text-center">
			<a href="../tambah_course"><button type="button" class="btn btn-success bg-success" style="color:white"><i class="material-icons">library_add</i></button></a>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>

	<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
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


		<!--<a><button href="http://localhost/pinterin/index.php/Dosen/back" >BACK</button></a>-->
<?php include 'penutupdosen.php' ?>