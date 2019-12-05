<?php include 'pembukadosenv2.php'?> 
	<center><h1>INPUT COURSE<br/></h1></center>
	<hr>
	<br>
	<?php echo form_open_multipart('Dosen/tambah_aksi_course');?>
		<table>
			<tr>
				<td>Kategori </td>
				<td><input type="text" name="KATEGORI" value="<?php echo $_SESSION['cat'];?>"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="JUDUL"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="DESKRIPSI"></td>
			</tr>
			<tr>
				<td>Input File</td>
				<td><input type="file" name="TIPE_FILE_COURSE" enctype="multipart/form-data"></td>
			</tr>
			<tr>
				<td>Tanggal Deadline apabila Ada Tugas</td>
				<td><input type="date" name="TANGGAL_DEADLINE1"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</table>
		<br>
		<br>
		<input type="submit" class="btn bg-info" value="UPLOAD" style="color:white">
		
	</form>
	<hr>
<?php include 'penutupdosenv2.php'?> 
