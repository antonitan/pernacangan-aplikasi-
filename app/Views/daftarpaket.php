<main id="main" class="main">

    <div class="pagetitle">
        <h1>Paket cuci</h1>
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
              <h5 class="card-title">Daftar Paket Tersedia</h5>

  <a href="<?= base_url('home/tpaket') ?>"><button class="btn btn-outline-warning"><i class="bi bi-plus"></i>Tambah</button></a>

<table class="table table-striped">
    <thead>
      <tr>
        <th width="3%">No</th>
        <th>nama paket</th>
        <th>waktu kerja</th>
        <th>berat</th>
         <th>tarif</th>
        <?php
        if (session()->get('level')==1) {
        ?>
        <th>Aksi</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>

        <?php
        $no=1;
        foreach ($takdirestui as $key => $value) {
           ?>
           <tr>
               <td><?php echo $no++ ?></td>
               </td>
               <td><?= $value->nama_paket ?></td>
               <td><?= $value->waktu_kerja ?></td>
               <td><?= $value->berat ?></td>
                 <td><?= $value->tarif ?></td>
               <?php
                if (session()->get('level')==1) {
                ?>
               <td><a href="<?= base_url('home/edit_paket/' . $value->id_paket) ?>" class="btn btn-outline-success"><i class="bi bi-pencil"></i></a>
            <a href="<?= base_url('home/hapus_paket/' . $value->id_paket) ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
               </td>
                <?php } ?>
           </tr> 

  <?php
  }
  ?>

</tbody>
</table>
              </div>
            </div>
        </div>
    </section>
    </main>
