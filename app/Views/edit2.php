<h3>Edit pakaian Masuk</h3>
	<form action="<?= base_url('home/simpan_pakain_m') ?>" method="post">
	<div class="mb-3 mt">
		<label for="email" class="form-label">Id pakaian: </label>
		<input type="text" class="form-control" id="nama" placeholder="Enter Id" name="id" value="<?= $takdirestui->id_pakaian ?> ">
	</div>
   </div>
	<div class="mb-3">
		<label for="tanggal" class="form-label">berat: </label>
		<input type="number" class="form-control" id="jumlah" placeholder="Enter berat" name="berat" 
		value="<?= $takdirestui->berat?>">
	</div>
	<div class="mb-3">
		<label for="tanggal" class="form-label">Tanggal: </label>
		<input type="date" class="form-control" id="tanggal   " placeholder="Enter Tanggal" name="tanggal" 
		value="<?= $takdirestui->tanggal ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_barangmasuk?>" name="idm"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>