<h3>Edit Barang Keluar</h3>
	<form action="<?= base_url('home/simpan_barang_k') ?>" method="post">
	<div class="mb-3 mt">
		<label for="id" class="form-label">Id Barang: </label>
		<input type="text" class="form-control" id="id" placeholder="Enter Id Barang" name="id" value="<?= $takdirestui->id_barang ?> ">
	</div>
	<div class="mb-3">
		<label for="jumlah" class="form-label">Jumlah: </label>
		<input type="number" class="form-control" id="jumlah" placeholder="Enter Jumlah" name="jumlah" 
		value="<?= $takdirestui->jumlah ?>">
	</div>
	<div class="mb-3">
		<label for="tanggal" class="form-label">Tanggal: </label>
		<input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal" name="tanggal" 
		value="<?= $takdirestui->tanggal ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_barangkeluar?>" name="idk"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>