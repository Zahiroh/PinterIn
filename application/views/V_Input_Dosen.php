	<h1>INPUT DATA PENGAJAR<br/></h1>
	<form action="<?php echo base_url('index.php/Admin/tambah_aksi_dosen'); ?>" method="post">
		<table>
			<tr>
				<td>Nama </td>
				<td><input type="text" name="NAMA_DOSEN"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="ALAMAT_DOSEN"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="EMAIL_DOSEN"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="USERNAME_DOSEN"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="PASSWORD_DOSEN"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="ADD"></td>
			</tr>
		</table>
	</form>
