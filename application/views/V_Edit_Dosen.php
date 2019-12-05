<?php
echo form_open('/Admin/update_dosen');
echo form_hidden('DOSEN_ID',$this->uri->segment(3));
?>
<table >
  <tr><td>Nama</td><td><?php echo form_input('NAMA_DOSEN',$dosen['NAMA_DOSEN'],array('placeholder' =>'NAMA_DOSEN' ));?></td></tr>
  <tr><td>Alamat</td><td><?php echo form_input('ALAMAT_DOSEN',$dosen['ALAMAT_DOSEN'],array('placeholder' =>'ALAMAT_DOSEN' ));?></td></tr>
  <tr><td>Email</td><td><?php echo form_input('EMAIL_DOSEN',$dosen['EMAIL_DOSEN'],array('placeholder' =>'EMAIL_DOSEN' ));?></td></tr>
  <tr><td>Username</td><td><?php echo form_input('USERNAME_DOSEN',$dosen['USERNAME_DOSEN'],array('placeholder' =>'USERNAME_DOSEN' ));?></td></tr>
  <tr><td>Password</td><td><?php echo form_input('PASSWORD_DOSEN',$dosen['PASSWORD_DOSEN'],array('placeholder' =>'PASSWORD_DOSEN' ));?></td></tr>
  <tr><td colspan="2"><?php echo form_submit('Simpan','SAVE_DATA');?></td></tr>
</table>
<?php
echo anchor('/Admin/tampil_dosen','BACK');
echo form_close();?>
