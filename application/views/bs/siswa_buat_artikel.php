<?php include 'pembukauser.php';?>
<form action="simpan_artikel" method="get">

<div class="form-group">
    <label for="exampleFormControlInput1">Judul Artikel</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isi judul Artikel Disini" name="judul">
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Isi Artikel </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="isi"></textarea>
</div>
<div class="text-center">

        <button type="submit" class="btn btn-info btn-raised">Submit</button>
</div>

</form>
<?php include 'penutupuser.php';?>
