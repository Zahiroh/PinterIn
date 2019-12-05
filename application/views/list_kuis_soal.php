<?php
include 'bs/pembukadosen.php';
  $i=1;
foreach ($list as $soal) { ?>
<hr>
  <h1>NO <?php echo $i;?></h1>
    <h2><?php echo $soal->SOAL;?></h2>
    <h3>a. <?php echo $soal->JAWAB_A;?></h3>
    <h3>b. <?php echo $soal->JAWAB_B;?></h3>
    <h3>c. <?php echo $soal->JAWAB_C;?></h3>
    <h3>d. <?php echo $soal->JAWAB_D;?></h3>
<?php
$i=$i+1;
}
include 'bs/penutupdosen.php';
?>
