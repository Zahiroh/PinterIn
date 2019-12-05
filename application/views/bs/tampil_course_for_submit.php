<?php include 'pembukadosenv2.php' ?>
<center><h1>Data Submit Course</h1></center>
<br>
<hr>

<table class="table">
	<thead class="thead-dark text-center">
		<tr>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Deskrisi</th>
			<th>Tanggal Deadline Tugas</th>
			<th>Read Submit</th>
		</tr>
	</thead>
	<?php
		foreach($course as $d){
	?>
	<tbody>
		<tr>
			<td ><?php echo $d->KATEGORI; ?></td>
			<td ><?php echo $d->JUDUL; ?></td>
			<td ><?php echo $d->DESKRIPSI; ?></td>
			<td ><?php echo $d->TANGGAL_DEADLINE1; ?></td>
			<td class="text-center">
                <a href="../Dosen/read_submit/<?php echo "$d->COURSE_ID"; ?>"><img src="../../assets/folder.png" alt="" style="width:30px;"></a>
			</td>
		<tr>
	</tbody>
		<?php } ?>
</table>

<?php include 'penutupdosenv2.php'?>
