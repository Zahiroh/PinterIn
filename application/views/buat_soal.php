<?php include 'bs/pembukadosen.php'?>
<form action="../simpanquiz" method="post">
<?php
for($i=1;$i<=10;$i++){
  ?>

  <div class="card">
      <div class="card-header"><?php echo "<br>Nomer ".$i; ?></div>
      <div class="card-body">
            <table border="1" class="row">
            <tr>
                <td>SOAL</td>
                <input type="hidden" name="course_id" value="<?php echo $this->uri->segment(3);?>"></input>
            </tr>
            <tr>
            <td colspan="2"><textarea rows="4" cols="120" name="soal<?php echo $i;?>"></textarea></td>
            </tr>
            <tr>
                <td>A. </td>
                <td><input type="text" name="a<?php echo $i;?>"></input></td>
            </tr>
            <tr>
                <td>B.</td>
                <td><input type="text" name="b<?php echo $i;?>"></input></td>
            </tr>
            <tr>
                <td>C.</td>
                <td><input type="text" name="c<?php echo $i;?>"></input></td>
            </tr>
            <tr>
                <td>D.</td>
                <td><input type="text" name="d<?php echo $i;?>"></input></td>
            </tr>
            <tr>
                <td>KUNCI</td>
                <td><input type="text" name="kunci<?php echo $i;?>"></input></td>
            </tr>
        </table>
      </div>
  </div>
  
    <br>
  <?php
}
?>
<br>
<br>
<input type="submit" class="btn bg-info" value="Simpan" style="color:white">
</form>
<?php include 'bs/penutupdosen.php'?>
