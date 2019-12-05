<?php include 'pembukadosen.php';?>
	<h1>EDIT COURSE<br/></h1>
	<form action="<?php echo base_url('index.php/Dosen/update_course'); ?>" method="post" enctype="multipart/form-data">
	<?php echo form_hidden('COURSE_ID',$this->uri->segment(3));?>
		<table>
			<tr>
				<td>Kategori </td>
				<td><?php echo form_input('KATEGORI',$course['KATEGORI'],array('placeholder' =>'KATEGORI' ));?></td>

			</tr>
			<tr>
				<td>Judul</td>
				<td><?php echo form_input('JUDUL',$course['JUDUL'],array('placeholder' =>'JUDUL' ));?></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><?php echo form_input('DESKRIPSI',$course['DESKRIPSI'],array('placeholder' =>'DESKRIPSI' ));?></td>
			</tr>
			<tr>
				<td>Input File</td>
				<td><?php echo form_input('TIPE_FILE_COURSE',$course['NAMA_FILE_COURSE'],array('placeholder' =>'INPUT FILE' )); ?></td>
				<td><input name="TIPE_FILE_COURSE" type="file" enctype="multipart/form-data"/></td>
			</tr>
			<tr>
				<td>Tanggal Upload</td>
				<td><?php echo form_input('TANGGAL_UP1',$course['TANGGAL_UP1'],array('placeholder' =>'TANGGAL UPLOAD' ));?></td>
			</tr>
			<tr>
				<td>Tanggal Deadline apabila Ada Tugas</td>
				<td><?php echo form_input('TANGGAL_DEADLINE1',$course['TANGGAL_DEADLINE1'],array('placeholder' =>'TANGGAL DEADLINE' ));?></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="upload"></td>
			</tr>
		</table>
		<!--<?php echo anchor('Dosen/course','BACK'); ?>-->
		<a><button href="course" >BACK</button></a>
	</form>
</body>
</html>
