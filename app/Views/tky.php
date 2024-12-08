<main id="main" class="main">

    <div class="pagetitle">
      <h1>Karyawan</h1>
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
              <h5 class="card-title">Tambah Data Karyawan</h5>

   <form action="<?= base_url('home/simpan_tky') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama: </label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="jenskel" class="form-label">Jenis Kelamin: </label>
        <select class="form-control" name="jeniskel">
            <option>Pilih Jenis Kelamin</option>
                <option value="L">Laki laki</option>
                <option value="P">Perempuan</option>
        </select>
    </div
    <div class="mb-3">
        <label for="no hp" class="form-label">No Hp: </label>
        <input type="number" class="form-control" id="tempat" placeholder="no hp" name="nohp">
    </div>
    <div class="mb-3">
        <label for="Username" class="form-label">Username: </label>
        <input type="text" class="form-control" id="Username" placeholder="Username" name="tanggal">
    </div>
    
    <div class="mb-3">
        <label for="Password" class="form-label">Password: </label>
        <input type="text" class="form-control" id="Password" placeholder="Enter Alamat" name="pswd">
    </div>
     <div class="mb-3">
        <label for="level">Level</label>
        <select name="level" id="level" class="form-control" required>
            <option value="2">Petugas</option>
        </select>
    </div>

    <input type="hidden" value="" name="idky"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
