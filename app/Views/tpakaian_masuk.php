<h3>Tambah pakaian Masuk</h3>
<form action="<?= base_url('home/simpan_pbm') ?>" method="post">
    <div class="mb-3 mt">
        <label for="email" class="form-label">Nama pakaian Masuk: </label>
        <select class="form-control" name="id_pkn">
            <option>Pilih pakaian</option>
            <?php foreach ($takdirestui as $value): ?>
                <option value="<?= $value->id_pakaian ?>"><?= $value->kode_pakaian ?> - <?= $value->nama_pakaian ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">berat: </label>
        <input type="number" class="form-control" id="jumlah" placeholder="Enter Jumlah" name="jumlah">
    </div>
     <div class="mb-3">
        <label for="pengerjaan" class="form-label">pengerjaan: </label>
        <select class="form-control" name="jeniskel">
            <option>pengerjaan</option>
                <option value="cuci">cuci</option>
                <option value="setrika">setrika</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal: </label>
        <input type="date" class="form-control" id="tanggal_masuk" placeholder="Enter Tanggal" name="tanggal">
    </div>
    <input type="hidden" value="" name="idmk"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>