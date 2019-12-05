<?php include 'pembukauserv2.php';?>
	<h1>SETTING PROFILE<br/></h1>
	<form action="<?php echo base_url('index.php/Siswa/setting_profile'); ?>" method="post" enctype="multipart/form-data">	
	<?php echo form_hidden('SISWA_ID',$this->uri->segment(3));?>
		<table>
			<tr>
				<td>Nama Profile </td>
				<td><?php echo form_input('NAMA_PROFILE',$siswa['NAMA_PROFILE'],array('placeholder' =>'NAMA_PROFILE' ));?></td>
				
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo form_input('ALAMAT_PROFILE',$siswa['ALAMAT_PROFILE'],array('placeholder' =>'ALAMAT_PROFILE' ));?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo form_input('EMAIL',$siswa['EMAIL'],array('placeholder' =>'EMAIL' ));?></td>
			</tr>
            <tr>
				<td>Username</td>
				<td><?php echo form_input('USERNAME_SISWA',$siswa['USERNAME_SISWA'],array('placeholder' =>'USERNAME' ));?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo form_input('PASSWORD_SISWA',$siswa['PASSWORD_SISWA'],array('placeholder' =>'PASSWORD' ));?></td>
            </tr>
            <tr>
				<td>Input Foto</td>
				<td><?php echo form_input('FOTO',$siswa['NAMA_FOTO'],array('placeholder' =>'INPUT FOTO' ));?></td>
				<td><input name="FOTO" type="file" enctype="multipart/form-data"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="upload"></td>
			</tr>
		</table>
	</form>
<?php include 'penutupuserv2.php';?>