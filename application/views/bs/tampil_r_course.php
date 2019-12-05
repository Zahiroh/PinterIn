<?php include 'pembukauserv2.php';

//print_r($_SESSION);
?>
<center><h1>Data Course dan Quiz Online</h1></center>
<hr>

<br>

<div class="col-md-4" style="color:blue;">
  <div class="row">
	<h8><strong><?php echo "Kategori :  ".$_SESSION['cat']; ?></strong></h8>
  </div>
</div>
<br>

<!-- Ini isi tabel -->
<table class="table table-bordered">
	<thead class="thead-dark text-center">
		<tr>
            <th>Nama Guru</th>
			<th>Judul</th>
			<th>Deskrisi</th>
			<th>Tanggal Deadline Tugas</th>
			<th>Download Course</th>
			<th>Quiz Online</th>
      		<th>Submit Tugas</th>
		</tr>
		<?php
		foreach($course as $d){
		?>
		<tbody>
		<tr>
            <td ><?php echo $d->NAMA_DOSEN_COURSE; ?></td>
			<td ><?php echo $d->JUDUL; ?></td>

			<td>
			<?php echo $d->DESKRIPSI; ?>
			</td>

			<td ><?php echo $d->TANGGAL_DEADLINE1; ?></td>
			<td >
				<a href="../download_course/<?php echo $d->NAMA_FILE_COURSE;?>" style="color:#00ccff;"><h8><i class="material-icons">unarchive</i></h8>Download</a>
			</td>
			<td >
				<?php if($d->STATUS_QUIZ==1){?>
				<a href="../../Quiz/kerjakan_soal/<?php echo $d->COURSE_ID;?>" style="color:#ff9933;"><h8><i class="material-icons">poll</i></h8>Take Quiz</a>
				<?php }else{
					echo "Kuis tidak tersedia";
				}?>
			</td>
      		<td >
				<a href="../submit/<?php echo $d->COURSE_ID;?>/<?php echo $d->DOSEN_ID;?>" style="color:#ff66ff;"><h8><i class="material-icons">library_add</i></h8>Submit</a>
			</td>
		</tr>
		<?php } ?>
		</tbody>

	</thead>
</table>


<br>
<br>

<a href="../home"><button type="button" class="btn bg-info"  style="color:white;"> KEMBALI</button></a>

<?php include 'penutupuserv2.php'?>
