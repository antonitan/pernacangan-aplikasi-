<h3>Tambah Barang Rusak</h3>
<form action="<?= base_url('home/simpan_tbr') ?>" method="post">
    <div class="mb-3 mt">
        <label for="email" class="form-label">Nama Barang Rusak: </label>
        <select class="form-control" name="id_brg">
            <option>Pilih Barang</option>
            <?php foreach ($takdirestui as $value): ?>
                <option value="<?= $value->id_barang ?>"><?= $value->kode_barang ?> - <?= $value->nama_barang ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah: </label>
        <input type="number" class="form-control" id="jumlah" placeholder="Enter Jumlah" name="jumlah">
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal: </label>
        <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal" name="tanggal">
    </div>
    <input type="hidden" value="" name="idmr"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>