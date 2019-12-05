<?php
echo form_open('/Admin/update_siswa');
echo form_hidden('SISWA_ID',$this->uri->segment(3));
?>

<table >
  <tr><td>Nama</td><td><?php echo form_input('NAMA_PROFILE',$siswa['NAMA_PROFILE'],array('placeholder' =>'NAMA_SISWA' ));?></td></tr>
  <tr><td>Alamat</td><td><?php echo form_input('ALAMAT_PROFILE',$siswa['ALAMAT_PROFILE'],array('placeholder' =>'ALAMAT_SISWA' ));?></td></tr>
  <tr><td>Email</td><td><?php echo form_input('EMAIL',$siswa['EMAIL'],array('placeholder' =>'EMAIL_SISWA' ));?></td></tr>
  <tr><td>Username</td><td><?php echo form_input('USERNAME_SISWA',$siswa['USERNAME_SISWA'],array('placeholder' =>'USERNAME_SISWA' ));?></td></tr>
  <tr><td>Password</td><td><?php echo form_input('PASSWORD_SISWA',$siswa['PASSWORD_SISWA'],array('placeholder' =>'PASSWORD_SISWA' ));?></td></tr>
  <tr><td colspan="2"><?php echo form_submit('Simpan','SAVE_DATA');?></td></tr>
</table>
<?php
echo anchor('/Admin/tampil_siswa','BACK');
echo form_close();?>
