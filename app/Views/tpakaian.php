<main id="main" class="main">

    <div class="pagetitle">
        <h1>tambah pakaian</h1>
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
<h3>Tambah pakaian</h3>
<form action="<?= base_url('home/simpan_tp') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama pakaian: </label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama pakaian" name="nama">
    </div>
    <div class="mb-3">
        <label for="kode" class="form-label">Kode pakaian: </label>
        <input type="number" class="form-control" id="kode" placeholder="Enter Kode pakaian" name="kode">
    </div>
    <div class="mb-3">
        <label for="berat" class="form-label">berat: </label>
        <input type="text" class="form-control" id="berat" placeholder="Enter berat" name="berat">
    </div>
    <div class="mb-3">
        <label for="pengerjaan" class="form-label">pengerjaan: </label>
        <select class="form-control" name="jeniskel">
            <option>pengerjaan</option>
                <option value="cuci">cuci</option>
                <option value="setrika">setrika</option>
        </select>
    </div>
    <input type="hidden" value="" name="idp"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
                </div>
            </div>
        </div>
    </section>
    </main>