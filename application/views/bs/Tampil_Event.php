<?php include 'pembukaadmin.php'; ?>
	<center><h1>Data Event</h1></center>
	<br>
	
	<div class="tabelDosen">
		<table class="table table-bordered">
		<thead class="thead-dark text-center">
			<tr>
				<th>No</th>
				<th>Tanggal </th>
				<th>Judul Event</th>
				<th>Hapus</th>
			</tr>
		</thead>
		<?php
		foreach($lates_news as $d){
		?>
		<tbody>
			<tr>
				<td width="1%"><?php echo $d->NEWS_ID; ?></td>
				<td width="2%"><?php echo $d->TANGGAL_KALENDER; ?></td>
				<td width="2%"><?php echo $d->EVENT_NEWS; ?></td>
				<td  width="2%" class="text-center">
				<a href="hapus_event/<?php echo "$d->NEWS_ID"; ?>"><button type="button" class="btn bg-secondary" style="color:white"><i class="material-icons">delete</i></button></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		</table>

		<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			<a class="page-link" href="#">Next</a>
			</li>
		</ul>
		</nav>

	</div>
<?php include 'penutup.php'; ?>
