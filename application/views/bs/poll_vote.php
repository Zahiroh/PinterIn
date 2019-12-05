<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "./poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Do you like PHP and AJAX so far ?</h2>
Yes:
<div class="progress" style="height: 15px;">
  <div class="progress-bar" role="progressbar" style="width: <?php echo ($yes/($yes+$no))*100 ?>%;" aria-valuenow="<?php echo ($yes/($yes+$no))*100 ?>" aria-valuemin="0" aria-valuemax="100"><?php echo round(($yes/($yes+$no))*100,2) ?> %</div>
</div>

No:
<div class="progress" style="height: 15px;">
  <div class="progress-bar" role="progressbar" style="width: <?php echo ($no/($yes+$no))*100 ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo round(($no/($yes+$no))*100,2) ?> %</div>
</div>