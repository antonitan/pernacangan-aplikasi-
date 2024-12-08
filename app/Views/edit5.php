<h3>Edit Karyawan</h3>
		<form action="<?= base_url('home/simpan_karyawan') ?>" method="post">
		<div class="mb-3">
			<label for="nama" class="form-label">Nama: </label>
			<input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama"
			value="<?= $takdirestui->nama ?>">
		</div>
		<div class="mb-3">
			<label for="nik" class="form-label">Nik: </label>
			<input type="number" class="form-control" id="nik" placeholder="Enter Nik" name="nik" 
			value="<?= $takdirestui->nik ?>">
		</div>
		<div class="mb-3">
			<label for="tempat" class="form-label">Tempat Lahir: </label>
			<input type="text" class="form-control" id="tempat" placeholder="Enter Tempat Lahir" name="tempat" 
			value="<?= $takdirestui->tempat_lahir ?>">
		</div>
		<div class="mb-3">
			<label for="tanggal" class="form-label">Tanggal Lahir: </label>
			<input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal Lahir" name="tanggal" 
			value="<?= $takdirestui->tanggal_lahir ?>">
		</div>
		<div class="mb-3">
			<label for="jenskel" class="form-label">Jenis Kelamin: </label>
			<input type="enum" class="form-control" id="jeniskel" placeholder="Enter Jenis Kelamin" name="jeniskel" 
			value="<?= $takdirestui->jenis_kelamin ?>">
		</div>
		<div class="mb-3">
			<label for="alamat" class="form-label">Alamat: </label>
			<input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat" 
			value="<?= $takdirestui->alamat ?>">
		</div>
		<div class="mb-3">
			<label for="nohp" class="form-label">No Hp: </label>
			<input type="text" class="form-control" id="nohp" placeholder="Enter No Hp" name="nohp"value="<?= $takdirestui->no_hp ?>">
		</div>
		   <input type="hidden" value="<?= $takdirestui->id_karyawan?>" name="idky"> 
		   <button type="hapus" class="btn btn-danger">hapus</button>
		   <button type="submit" class="btn btn-primary">edit</button>
	</form>