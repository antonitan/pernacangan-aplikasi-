<main id="main" class="main">

    <div class="pagetitle">
      <h1>Order</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form order</h5>

<form action="<?= base_url('home/simpan_torder') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama: </label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No Hp: </label>
        <input type="number" class="form-control" id="no_hp" placeholder="Enter No Hp" name="no_hp">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat: </label>
        <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat">
    </div>
    
     <div class="mb-3">
        <label for="nama_paket" class="form-label">Pilih paket: </label>
        <select class="form-control" name="nama_paket">
            <option>Pilih paket</option>
            <option value="cuci reguler">Cuci reguler</option>
            <option value="cuci express">Cuci express</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="berat" class="form-label">Berat: </label>
        <input type="text" class="form-control" id="berat" placeholder="Enter Berat" name="berat">
    </div>
    <div class="mb-3">
        <label for="tgl_masuk" class="form-label">Tanggal Order masuk: </label>
        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
    </div>
    <div class="mb-3">
        <label for="tgl_keluar" class="form-label">Tanggal Order keluar: </label>
        <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar">
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan: </label>
        <input type="text" class="form-control" id="keterangan" placeholder="Enter Keterangan" name="keterangan">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
