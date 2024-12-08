<h3>Edit Barang Rusak</h3>
	<form action="<?= base_url('home/simpan_barang_r') ?>" method="post">
	<div class="mb-3 mt">
		<label for="klr" class="form-label">Id Barang Keluar: </label>
		<input type="text" class="form-control" id="klr" placeholder="Enter Id Barang Keluar" name="klr" value="<?= $takdirestui->id_barangkeluar ?> ">
	</div>
	<div class="mb-3">
		<label for="tanggal" class="form-label">Jumlah: </label>
		<input type="number" class="form-control" id="jumlah" placeholder="Enter Jumlah" name="jumlah" 
		value="<?= $takdirestui->jumlah ?>">
	</div>
	<div class="mb-3">
		<label for="tanggal" class="form-label">Tanggal: </label>
		<input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal" name="tanggal" 
		value="<?= $takdirestui->tanggal ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_barangrusak?>" name="idr"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>