<main id="main" class="main">

    <div class="pagetitle">
      <h1>paket</h1>
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
              <h5 class="card-title">Tambah paket</h5>

<form action="<?= base_url('home/simpan_tpaket') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama paket: </label>
        <input type="text" class="form-control" id="nama_paket" placeholder="Enter Nama" name="nama_paket">
    </div>
    <div class="mb-3">
        <label for="waktu" class="form-label">waktu kerja: </label>
        <input type="text" class="form-control" id="waktu" placeholder="waktu" name="waktu">
    </div>
    <div class="mb-3">
        <label for="berat" class="form-label">berat: </label>
        <input type="text" class="form-control" id="berat" placeholder="berat" name="berat">
    </div>
    
    <div class="mb-3">
        <label for="tarif" class="form-label">tarif: </label>
        <input type="text" class="form-control" id="tarif" placeholder="tarif" name="tarif">
    </div>
    <input type="hidden" value="" name="idky"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
