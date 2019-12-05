<?php include 'bs/pembukadosen.php';?>
<form action="../simpaneditquiz" method="post">
<?php
$i=1;
foreach ($list as $nilai) {?>

  <div class="card">
      <div class="card-header"><?php echo "<br>Nomer ".$i; ?></div>
      <div class="card-body">
        <table border="1">
            <tr>
                <td>SOAL id <?php echo $nilai->KUIS_ID; ?></td>
                <input type="hidden" name="kuis_id<?php echo $i;?>" value="<?php echo $nilai->KUIS_ID; ?>"></input>
                <input type="hidden" name="course_id" value="<?php echo $this->uri->segment(3);?>"></input>
            </tr>
            <tr>
            <td colspan="2"><textarea rows="4" cols="29" name="soal<?php echo $i;?>"><?php echo $nilai->SOAL; ?></textarea></td>
            </tr>
            <tr>
                <td>A. </td>
                <td><input type="text" name="a<?php echo $i;?>" value="<?php echo $nilai->JAWAB_A; ?>"></input></td>
            </tr>
            <tr>
                <td>B.</td>
                <td><input type="text" name="b<?php echo $i;?>" value="<?php echo $nilai->JAWAB_B; ?>"></input></td>
            </tr>
            <tr>
                <td>C.</td>
                <td><input type="text" name="c<?php echo $i;?>" value="<?php echo $nilai->JAWAB_C; ?>"></input></td>
            </tr>
            <tr>
                <td>D.</td>
                <td><input type="text" name="d<?php echo $i;?>" value="<?php echo $nilai->JAWAB_D; ?>"></input></td>
            </tr>
            <tr>
                <td>KUNCI</td>
                <td><input type="text" name="kunci<?php echo $i;?>" value="<?php echo $nilai->KUNCI; ?>"></input></td>
            </tr>
        </table>
        </div>
    </div>
    <br>
  <?php
$i=$i+1;
}
?>
<input type="submit" class="btn bg-info" value="Simpan" style="color:white">
</form>
<?php include 'bs/penutupdosen.php';?>
