<?php include 'pembukadosenv3.php' ?>
	<center><h1>ADD POIN<br/></h1></center>
	<hr>

	<br>
	<br>
	<div class="row">
	<div class="col-md-4">
	<h6>Student Name : <strong><?php echo $_SESSION['nama_siswa']; ?></strong></h6><br>
	<br>
	<?php echo form_open('Dosen/tambah_poin_siswa');?>
		<table>
			<tr
				<input type="hidden" name="status" value="1">
				<?php for($i=1;$i<=10;$i++){?>
					<input type="radio" name="POIN_SISWA" value="<?php echo $i?>"><?php echo $i?></input><br>
				<?php }?>
                <input type="hidden" name="sid" value="$_SESSION['siswa_id']">
			</tr>
		</table>
		<br>
		<br>
		<input type="submit" class="btn bg-info" value="TAMBAH" style="color:white">

	</form>
	</div>

	<div class="col-md-8">
		<div class="text-center">
		<img src="../../../../../assets/exam.png" alt="" style="width:300px;">
		</div>
	</div>
	</div>
	<hr>
	<?php 'penutupdosenv3.php' ?>
