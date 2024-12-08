<h3>Edit User</h3>
	<form action="<?= base_url('home/simpan_user') ?>" method="post">
	<div class="mb-3 mt">
		<label for="user" class="form-label">Username: </label>
		<input type="text" class="form-control" id="user" placeholder="Enter Username" name="user" value="<?= $takdirestui->username ?> ">
	</div>
	<div class="mb-3">
		<label for="pw" class="form-label">Password: </label>
		<input type="number" class="form-control" id="pw" placeholder="Enter Password" name="pw" 
		value="<?= $takdirestui->password ?>">
	</div>
	<div class="mb-3">
		<label for="level" class="form-label">Level: </label>
		<input type="enum" class="form-control" id="level" placeholder="Enter Level" name="level" 
		value="<?= $takdirestui->level ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_user?>" name="idu"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>