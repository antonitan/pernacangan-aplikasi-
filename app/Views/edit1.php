<h3>Edit pakaian</h3>
	<form action="<?= base_url('home/simpan_barang') ?>" method="post">
	<div class="mb-3 mt">
		<label for="nama" class="form-label">Nama pakaian: </label>
		<input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama" value="<?= $takdirestui->nama_pakaian ?> ">
	</div>
	<div class="mb-3">
		<label for="kode" class="form-label">Kode pakaian: </label>
		<input type="number" class="form-control" id="kode" placeholder="Enter Kode pakaian" name="kode" 
		value="<?= $takdirestui->kode_pakaian ?>">
	</div>
	<div class="mb-3">
		<label for="stok" class="form-label">berat: </label>
		<input type="number" class="form-control" id="stok" placeholder="Enter berat" name="berat" 
		value="<?= $takdirestui->berat ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_pakaian?>" name="idp"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>