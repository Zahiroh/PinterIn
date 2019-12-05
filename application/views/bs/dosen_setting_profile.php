<?php include 'pembukadosen.php';?><!DOCTYPE html>
<html>
<head>
	<title>SETTING PROFILE</title>
</head>
<body>
	<h1>SETTING PROFILE<br/></h1>
	<form action="<?php echo base_url('index.php/Dosen/setting_profile'); ?>" method="post" enctype="multipart/form-data">	
	<?php echo form_hidden('DOSEN_ID',$this->uri->segment(3));?>
		<table>
			<tr>
				<td>Nama Profile </td>
				<td><?php echo form_input('NAMA_DOSEN',$dosen['NAMA_DOSEN'],array('placeholder' =>'NAMA_PROFILE' ));?></td>
				
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo form_input('ALAMAT_DOSEN',$dosen['ALAMAT_DOSEN'],array('placeholder' =>'ALAMAT_PROFILE' ));?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo form_input('EMAIL_DOSEN',$dosen['EMAIL_DOSEN'],array('placeholder' =>'EMAIL' ));?></td>
			</tr>
            <tr>
				<td>Username</td>
				<td><?php echo form_input('USERNAME_DOSEN',$dosen['USERNAME_DOSEN'],array('placeholder' =>'USERNAME' ));?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo form_input('PASSWORD_DOSEN',$dosen['PASSWORD_DOSEN'],array('placeholder' =>'PASSWORD' ));?></td>
            </tr>
            <tr>
				<td>Input Foto</td>
				<td><?php echo form_input('FOTO_SK_DOSEN',$dosen['NAMA_FOTO_DOSEN'],array('placeholder' =>'INPUT FOTO' ));?></td>
				<td><input name="FOTO_SK_DOSEN" type="file" enctype="multipart/form-data"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="upload"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php include 'penutupdosen.php';?>