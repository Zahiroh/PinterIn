<?php include 'pembukauserv3.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>SUBMIT TUGAS</title>
</head>
<body>
	<center><h1>SUBMIT TUGAS<br/></h1></center>
	<hr>
	<div class="col-md-12 row">
		<div class="col-md-4">
			<h8>Kategori : <strong><?php echo $_SESSION['cat']; ?></strong></h8><br>
			<h8>Nama Guru : <strong>Dummy Text</strong></h8><br>
			<h8>Judul : <strong>Dummy Text</strong></h8><br>
			<h8>Tanggal Deadline : <strong>Dummy Text</strong></h8><br>
			<hr>
		<br>
		<div class="form">
			<?php echo form_open_multipart('Siswa/submit_course');?>
				<div class="form-group row">
					<p>Input File</p>
					<br>
					<input type="file" name="TIPE_FILE_SUBMIT" enctype="multipart/form-data">
				</div>
				<input type="submit" value="upload" class="btn bg-info" style="color:white">
			</form>
		</div>
		</div>
		<br>

		<div class="col-md-8 text-right">
			<img src="../../../../assets/responsive.png" alt="" style="width:300px;">
		</div>

	</div>
</body>
</html>
<?php include 'penutupuserv3.php'?>
