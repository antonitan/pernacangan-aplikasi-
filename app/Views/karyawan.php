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
              <h5 class="card-title">Tampil Karyawan</h5>

<a href="<?= base_url('home/tky') ?>"><button class="btn btn-primary"><i class="bi bi-plus"></i>Tambah</button></a>

<table class="table table-striped">
    <thead>
      <tr>
        <th width="3%">No</th>
        <th>Nama karyawan</th>
        <th>Jenis Kelamin</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Level</th>
          <?php
          if (session()->get('level')==1 ||session()->get('level')==2) {
            ?>
        <th>Aksi</th>
        <?php } ?>
      </tr>
    </thead>
   <tbody>
    <?php
    $no = 1;
    foreach ($takdirestui as $key => $value) {
    ?>
           <tr>
               <td><?= $no++ ?></td>
               <td><?= $value->nama ?></td>
               <td><?= $value->jenis_kelamin ?></td>
               <td><?= $value->no_hp ?></td>
                <td><?= $value->email ?></td> 
            <td>
    <?= ($value->level == 2) ? 'Petugas' : '' ?>
</td>

<?php if (session()->get('level') == 1 || session()->get('level') == 2) { ?>

        <td>
            <link rel="stylesheet" type="text/css" href="<?= base_url('fontawesome/css/fontawesome.min.css'); ?>">
            <link rel="stylesheet" type="text/css" href="<?= base_url('fontawesome/css/all.css'); ?>">
            <a href="<?= base_url('home/edit_karyawan/' . $value->id_karyawan) ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
            <a href="<?= base_url('home/hapus_karyawan/' . $value->id_karyawan) ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
        </td>
        <?php } ?>
    </tr> 
    <?php } ?>
</tbody>

</table>
<!-- End Table with stripped rows -->
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
