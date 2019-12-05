<?php include 'bs/pembukadosen.php';?>
<form action="../hitungquiz" method="post">
<?php
$i=1;
foreach ($list as $nilai) {
  echo "<br>Nomer ".$i;
  ?>
  <table >
    <tr>
        <td>kuis id <?php echo $nilai->KUIS_ID; ?></td>
        <input type="hidden" name="kuis_id<?php echo $i;?>" value="<?php echo $nilai->KUIS_ID; ?>"></input>
        <input type="hidden" name="course_id" value="<?php echo $this->uri->segment(3);?>"></input>
        <input type="hidden" name="kunci<?php echo $i;?>" value="<?php echo $nilai->KUNCI; ?>"></input>
    </tr>
    <tr>
      <td colspan="2"><?php echo $nilai->SOAL; ?></td>
    </tr>
    <tr>
        <td><input type="radio" name="jawaban<?php echo $i;?>" value="<?php echo $nilai->JAWAB_A; ?>">A. <?php echo $nilai->JAWAB_A; ?></input></td>
    </tr>
    <tr>
        <td><input type="radio" name="jawaban<?php echo $i;?>" value="<?php echo $nilai->JAWAB_B; ?>">B. <?php echo $nilai->JAWAB_B; ?></input></td>
    </tr>
    <tr>
        <td><input type="radio" name="jawaban<?php echo $i;?>" value="<?php echo $nilai->JAWAB_C; ?>">C. <?php echo $nilai->JAWAB_C; ?></input></td>
    </tr>
    <tr>
        <td><input type="radio" name="jawaban<?php echo $i;?>" value="<?php echo $nilai->JAWAB_D; ?>">D. <?php echo $nilai->JAWAB_D; ?></input></td>
    </tr>
</table>

  <?php
$i=$i+1;
}
?>
<input type="submit" value="Simpan">
</form>
<?php include 'bs/penutupdosen.php';?>
