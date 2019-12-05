	<h1>INPUT DATA SISWA<br/></h1>
	<br>
	<div class="inputSiswa">
		<div class="col-md-7">
			<div class="form" >
			<form action="<?php echo base_url('index.php/Admin/tambah_aksi_siswa'); ?>" method="post">
				<div class="form-group">
					<label for="exampleFormControlInput1">NAMA</label>
					<input type="text" name="NAMA_PROFILE">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">ALAMAT</label>
					<td><input type="text" name="ALAMAT_PROFILE"></td>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">EMAIL</label>
					<input type="text" name="EMAIL">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">USERNAME</label>
					<input type="text" name="USERNAME_SISWA">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">PASSWORD SISWA</label>
					<input type="password" name="PASSWORD_SISWA">
				</div>
				<div class="form-group">
					<input type="submit" value="TAMBAH DATA">
				</div>		
			</form>
			</div>
		</div>
		<div class="col-md-5">
		</div>
	</div>
	
